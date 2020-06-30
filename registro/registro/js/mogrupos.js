var mogrupos = function () {
    var self = this;
    this.rpc = new remote_sync();

    this.init = function () {
        var that = this;
        window.onload = function () {
            var dg = $('#dgMoGrupos').datagrid();
            dg.datagrid('enableFilter');
        };


        //var content = this.rpc.callJsonRpc("getClientes").result;
        $('#mogruposDContainer').dialog({
            content: this.rpc.callGetPHPContent("mogruposD.inc.php"),
            closed: true
        });

        var dgMg = $('#dgMoGrupos').datagrid({
            url: '../view/interfaz.php?action=getMoGrupos&modulo=mogrupos',
            onDblClickRow: function (index, row) {
                that.editUser();
            },
            fit: true,
            remoteFilter: true,
            pagination: true
        });
        //alert('habilita filtro');   
        dgMg.datagrid("enableFilter");

        $('#dgMoGrupos').datagrid('getPager').pagination({
            onRefresh: that.reload
        });
    };

    /* $('#dgMoGrupos').datagrid({
     url: '../view/interfaz.php?action=getMoGrupos&modulo=mogrupos',
     onDblClickRow: function (index, row) {
     that.editUser();
     },
     fit: true,
     remoteFilter: true,
     pagination: true
     });
     */
    this.reload = function (pageNumber, pageSize) {
        $('#dgMoGrupos').datagrid({
            data: self.rpc.callJsonRpc("getMoGrupos").result
        });

    };

    this.newGrupoMo = function () {
        $('#dlgMogrupos').dialog('open').dialog('setTitle', 'Nuevo Grupo Mo');
        $('#fmMogrupos').form('clear');
    };

    this.editGrupoMo = function () {
        var row = $('#dgMoGrupos').datagrid('getSelected');
        if (row) {
            $('#dlgMogrupos').dialog('open').dialog('setTitle', 'Editar Grupo');
            $('#fmMogrupos').form('load', row);
            //$('#fecha_nacimiento').datebox('setValue', this.parseDate(row.fecha_nacimiento));
        }
    };

    this.saveGrupoMo = function () {
        var that = this;
        $('#fmMogrupos').form('submit', {
            url: '../view/interfaz.php?action=updateMoGrupos&modulo=mogrupos',
            onSubmit: function () {
                return $(this).form('validate');
            },
            success: function (result) {

                var result = eval('(' + result + ')');
                console.log(result);
                if (result.errorMsg) {
                    $.messager.show({
                        title: 'Error',
                        msg: result.errorMsg
                    });
                } else {
                    $('#dlgMogrupos').dialog('close');
                    // close the dialog
                    $('#dgMoGrupos').datagrid('reload');
                }
            }
        });
    };

    this.destroyGrupoMo = function () {
        var that = this;
        var id = $('#dgMoGrupos').datagrid('getSelected').id;

        if (id) {
            $.messager.confirm('Confirm', 'Esta seguro de eliminar el grupo?', function (r) {
                if (r) {
                    if (r) {
                        //$.post('users.php?action=delete&id=' + row.id, {
                        $.post('../backend/model/rpc_mogrupos.inc.php?action=deleteMoGrupos&id='+id, {
                            id: id
                        }, function (result) {
                            
                            if (result.success) {
                                console.log('result'+ result.success);
                                $('#dgMoGrupos').datagrid('reload');
                                // reload the user data
                            } else {
                                $.messager.show({// show error message
                                    title: 'Error',
                                    msg: result.errorMsg
                                });
                            }
                        }, 'json');
                    }
                } else {
                    alert('Seleccione un regstro');
                }
            });
        }
    };
};

