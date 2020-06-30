

var clientes = function () {


    var self = this;
    this.rpc = new remote_sync();

    this.init = function () {
        var that = this;
        window.onload = function () {
            var dg = $('#dgClientes').datagrid();
            dg.datagrid('enableFilter');
        };

        //var content = this.rpc.callJsonRpc("getClientes").result;
        $('#clientesDContainer').dialog({
            content: this.rpc.callGetPHPContent("clientesD.inc.php"),
            closed: true
        });

        var dgClientes = $('#dgClientes').datagrid({
            url: '../view/interfaz.php?action=getClientes&modulo=clientes',
            onDblClickRow: function (index, row) {
                that.editUser();
            },
            fit: true,
            remoteFilter: true,
            pagination: true
        });

        dgClientes.datagrid("enableFilter");

        $('#dgClientes').datagrid('getPager').pagination({
            onRefresh: that.reload
        });
    };

    this.reload = function (pageNumber, pageSize) {
        $('#dgClientes').datagrid({
            data: self.rpc.callJsonRpc("getClientes").result
        });

    };

    this.newUser = function () {
        $('#dlgClientes').dialog('open').dialog('setTitle', 'Nuevo Cliente');
        $('#fmClientes').form('clear');
    };

    this.editUser = function () {
        var row = $('#dgClientes').datagrid('getSelected');
        if (row) {
            $('#dlgClientes').dialog('open').dialog('setTitle', 'Editar Cliente');
            $('#fmClientes').form('load', row);
            //$('#fecha_nacimiento').datebox('setValue', this.parseDate(row.fecha_nacimiento));
        }
    };

    this.saveUser = function () {
        var that = this;
        $('#fmClientes').form('submit', {
            url: '../view/interfaz.php?action=updateClientes&modulo=clientes',
            onSubmit: function () {
                return $(this).form('validate');
            },
            success: function (result) {
                /*data = $('#fmClientes').serializeArray().reduce(function(obj, item) {
                 obj[item.name] = item.value;
                 return obj;
                 }, {});
                 console.log(data);*/
                //var result = self.rpc.callJsonRpc("updateClientes",data);
                var result = eval('(' + result + ')');
                console.log(result);
                if (result.errorMsg) {
                    $.messager.show({
                        title: 'Error',
                        msg: result.errorMsg
                    });
                } else {
                    $('#dlgClientes').dialog('close');
                    // close the dialog
                    $('#dgClientes').datagrid('reload');
                }
            }
        });
    };

    this.destroyUser = function () {
        var that = this;
        var id = $('#dgClientes').datagrid('getSelected').id;
        if (id) {
            $.messager.confirm('Confirm', 'Esta seguro de eliminar el usuario?', function (r) {
                if (r) {
                    var result = self.rpc.callJsonRpc("deleteClientes", id).result;
                    if (result.success) {
                        that.reload();
                        // reload the user data
                    } else {
                        $.messager.show({// show error message
                            title: 'Error',
                            msg: result.errorMsg,
                            timeout: 3000,
                            showType: 'slide'
                        });
                    }
                }
            });
        }
    };

    this.formatDate = function (date) {
        var y = date.getFullYear();
        var m = date.getMonth() + 1;
        var d = date.getDate();
        return y + '-' + (m < 10 ? ('0' + m) : m) + '-' + (d < 10 ? ('0' + d) : d);
    }

    this.parseDate = function (s) {
        var str = s.split("/");
        res = str[0] + '/' + str[1] + '/' + str[2];
        return res;
    };
};

