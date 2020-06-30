function message(options){
	var info = options.info==undefined ? "" : options.info
	var callback = options.callback==undefined ? "" : options.callback;		
	var title = options.title==undefined ? "co" : options.title;
	var message = options.message==undefined ? "" : options.message;

	switch(options.type) {
    	case "confirm":
    		$.messager.confirm(title,message,callback);
    		break;
    	default:
    		$.messager.alert(title,message,info);
    		break;
	}
}

function tableGridMultiLineDataFormat(data, divStyle, spanStyle){
	var lines=data.split(",");
	var dataCell='<div style="'+divStyle+'">';
	
	for(var i=0; i<lines.length; i++){
		dataCell+='<span style="'+spanStyle+'">'+lines[i]+'</span>';
		dataCell+=lines.length>1?"<br>":"";
	}
	
	dataCell+='</div>';
	return dataCell;
}