function remote_sync(){
	this.rpcUrl = "http://localhost/agenda_backend/server.php";
	this.url = "http://localhost/co/view/";
	
	this.callJsonRpc=function(method,params){
		var that = this;
		var response;
		alert(method);
		var request = {};
		request.method = method;
		request.params = params!=undefined ? {"p":params} : {"p":""};
		//request.params.CID = "45d0677d-a336-463b-ad99-c82137d03a00";
		//request.params.baseDN = "ou=people,dc=example,dc=com";
		//request.params.scope = "ONE";
		//request.params.filter = "(givenName=John)";
		request.id = "1.0";
		request.jsonrpc = "2.0";
		
		data = JSON.stringify(request);

		var options={
			type:'POST',
			url:that.rpcUrl,
			data:data,
			contentType:'multipart/form-data',
			dataType:"json",
			crossDomain:true,
			async:false
		};

		try {response = this.callAjax(options);}catch(err){return err.message;};

		return response;
	},
	
	this.callGetPHPContent=function(htmlName){
		var that = this;
		var options={
			type:'GET',
			url:that.url+htmlName,
			data:"",
			contentType:'application/text',
			dataType:"",
			crossDomain:false,
			async:false
		};

		response = this.callAjax(options);

		return response;
	},

	this.callAjax=function(options){
		var resp;

		var sucess=function(response){
			resp=response; 
		};

		if(options.sucess!=undefined){
			var sucess=options.sucess;
		}

		var error=function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status);
			alert(thrownError);
		};

		if(options.error!=undefined){
			var sucess=options.error;
		}

		var request = $.ajax({
			type:options.type,
			url:options.url,
			data:options.data,
			contentType:options.contentType,
			success:sucess,
			error:error,
			dataType:options.dataType,
			crossDomain:options.crossDomain,
			async:options.async
		});
		
		return resp;
	}
}