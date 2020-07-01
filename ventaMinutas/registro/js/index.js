$(function () {
    var that = this;
    var rpc = new remote_sync();

    $("#includes").hide();

    this.windowResize = function () {
        $('#main-layout').layout('resize');
    };

    this.addTab = function (options) {
        var phpType = options.phpType == undefined ? "" : options.phpType;
        var phpName = options.name.toLowerCase() + phpType + ".inc.php";
        var content = rpc.callGetPHPContent(phpName);

        var tab = $('.tabs li');

        for (var i = 0; i < tab.length; i++) {
            var obj = $(tab[i]).children("span a").context.innerText;
            if (options.name == obj) {
                return false;
            }
        }

        $('#mainTab').tabs('add', {
            title: options.name,
            content: content,
            closable: true,
            tools: [{
                    handler: function () {
                        alert('refresh');
                    }
                }]
        });
    };

    $(window).resize(this.windowResize);

    $("#clientes").click(function () {
        var optionName = "Clientes";
        if (that.addTab({name: optionName, phpType: "L"}) != false) {
            that.clientes = eval("new " + optionName.toLowerCase());
            that.clientes.init();
        }
    });

    $("#moGrupos").click(function () {
        var optionName = "moGrupos";
        if (that.addTab({name: optionName, phpType: "L"}) != false) {
            that.mogrupos = eval("new " + optionName.toLowerCase());
            that.mogrupos.init();
        }
    });
    
    $("#proyectos").click(function () {
        var optionName = "proyectos";
        if (that.addTab({name: optionName, phpType: "L"}) != false) {
            that.proyectos = eval("new " + optionName.toLowerCase());
            that.proyectos.init();
        }
    });
    
    $("#exit").click(function () {
         var pagina="http://localhost/co";
         location.href=pagina;
    });
});

