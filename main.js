$(document).ready(function(){



    $(function(){
        $(document).bind('contextmenu',function(e){
            $('#mm').menu('show', {
                left: e.pageX,
                top: e.pageY
            });
            return false;
        });
    });
    function showmenu(){
        $('#mm').menu('show', {
            left: 200,
            top: 100
        });
    }


});






