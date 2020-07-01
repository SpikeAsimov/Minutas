
var proyectos = function () {
    var self = this;
    this.rpc = new remote_sync();

    this.init = function () {
        var that = this;
        /* window.onload = function () {
         var dg = $('#dgMoGrupos').datagrid();
         dg.datagrid('enableFilter');
         };*/

        $(function () {
            $('#cgobra').combogrid({
                panelWidth: 1000,
                delay: 500,
                url: '../view/interfaz.php?action=getObras&modulo=proyectos',
                idField: 'codigo',
                textField: 'nombre',
                mode: 'remote',
                striped: true,
                editable: true,
                collapsible: false,
                rownumbers: true,
                //fit:true,
                fitColumns: true,
                pagination: true,
                pageSize: 20,
                pageList: [20],
                columns: [[
                        {field: 'codigo', title: 'Codigo', width: 30},
                        {field: 'nombre', title: 'Nombre', width: 100},
                    ]]
            });
            $("input[name='mode']").change(function () {
                var mode = $(this).val();
                $('#cgobra').combogrid({
                    mode: mode
                });
            });
            $('#cgobra').combogrid({
                onSelect: function (index, row) {
                    loadPresupuestos(row.codigo);
                }
            });

        });


        $('#tt').tree({
            onContextMenu: function (e, node) {
                e.preventDefault();
                // select the node

                $('#tt').tree('select', node.target);
                // display context menu
                console.log('node: '+node.id);
                if (node.id === 'proyecto') {
                    $('#mmPresupuestos').menu('show', {
                        left: e.pageX,
                        top: e.pageY
                    });
                }
                else if (node.id === 'presupuesto'){
                    $('#mmCapitulos').menu('show', {
                        left: e.pageX,
                        top: e.pageY
                    });
                }
                else if  (node.id != undefined){
                    $('#mmAnalisis').menu('show', {
                        left: e.pageX,
                        top: e.pageY
                    });
                }
                    
                // console.log('data' + e.data);
            }


        });



        function loadPresupuestos(codigo) {
            //console.log(codigo);
            $.post("../backend/model/proyectos.php?action=loadDespachos", {"codigo": codigo}, null, "json")
                    .done(function (data, textStatus, jqXHR) {
                        if (console && console.log) {
                            //console.log( "La solicitud se ha completado correctamente." );
                            $('#tt').tree('append', {
                                //  data:[{"id":1155,"text":1155,"children" :[{"id":1155,"text":10,"children" :[{"text":'Prueba'}]},{"id":1155,"text":11},{"id":1155,"text":12}]}] 
                                data: JSON.parse(data["data"])
                            });
                        }
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {
                        if (console && console.log) {
                            console.log("La solicitud a fallado: " + errorThrown);
                        }
                    });

        }
    };
    this.quitar = function () {
        var roots = $('#tt').tree('getRoots');
        var val = $('#tt').tree('getSelected');
        console.log('val' + val['text'] + 'id: ' + val['id']);
        for (var i = 0; i < roots.length; i++) {
            $('#tt').tree('remove', roots[i].target);
            //console.log('nodes' +roots[i].valueOf());
        }
    }

    var admin = $('#mogruposList').dialog({
        content: this.rpc.callGetPHPContent("mogruposL.inc.php"),
        title: 'Title',
        loadingMessage: 'Loading ...',
        width: 470,
        height: 360,
        closed: true,
        cache: true,
        //url: '../view/interfaz.php?action=getMoGrupos&modulo=mogrupos',
        modal: true
    });

    this.append = function () {
        admin.dialog('open');
        $('#dgMoGrupos').datagrid({
            url: '../view/interfaz.php?action=getMoGrupos&modulo=mogrupos',
            onDblClickRow: function (index, row) {
                alert('doble click' + row.id);
            }

        });
    }
}


