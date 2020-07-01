var mogruposList = function () {
    var self = this;
    this.rpc = new remote_sync();

    this.init = function () {
        var that = this;
        window.onload = function () {
            var dg = $('#dgMoGruposList').datagrid();
            dg.datagrid('enableFilter');
        };
        
        var dgMg = $('#dgMoGruposList').datagrid({
            url: '../view/interfaz.php?action=getMoGrupos&modulo=mogrupos',
            onDblClickRow: function (index, row) {
                that.editUser();
            },
            fit: true,
            remoteFilter: true,
            pagination: true
        });

        dgMg.datagrid("enableFilter");

        $('#dgMoGruposList').datagrid('getPager').pagination({
            onRefresh: that.reload
        });        
    };

    this.reload = function (pageNumber, pageSize) {
        $('#dgMoGruposList').datagrid({
            data: self.rpc.callJsonRpc("getMoGrupos").result
        });

    };

}