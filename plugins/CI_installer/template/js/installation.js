
function submitForm( frm, task, from ) {
	$("#task").attr("value",task);
	$("#from").attr("value",from);
	$("#"+frm).submit();
}
function warning(string){
			alert(string);
		}

function validate(from,task,lang){
				
	if($("#vars_dbhostname").val()===''){
		showError(hostBlank);
		delay();
		return false;
	}else if($("#vars_dbusername").val()===''){
		showError(userBlank);
		delay();
		return false;
	}else if($("#vars_dbpassword").val()===''){
		showError(passBlank);
		delay();
		return false;
	}else if($("#vars_dbname").val()===''){
		showError(dbBlank);
		delay();
		return false;
	}else{
				
		var result =	$.ajax({
				   type: "POST",
				   url: "index.php",
				   async: false,
				   data: "host="+$("#vars_dbhostname").val()+"&user="+$("#vars_dbusername").val()+"&pwd="+$("#vars_dbpassword").val()+"&db="+$("#vars_dbname").val()
				   
					}).responseText;
		
		if(result==='false'){
			showError(connectError);
			delay();
			return false;
		}else if(result==='empty'){
			showError(sqlPosition);
			delay();
			return false;
		}
					
				
	}
	
			
}
		
function close(){
	$("#con_warning").hide();
}
function delay(){
	var delay=function(){
		  
	};
	delay.prototype.close=function(){
	    close();
	};
	var delay = new delay();
	
	var test = delay.close.delay(delay,3000);
}
function showError(string){
	$("#con_warning").replaceWith("<div id='con_warning' class='error'><p>"+string+"</p></div>");
}
		

Function.prototype.delay=function(this1,timeout){
    this1=this1||null;
    timeout=timeout||0;
    var _this=this;
    var args=[];
    //获取参数,注：第1、第2个参数是保留参数
    switch(arguments.length){
        case 1:
            timeout=parseInt(arguments[0]);
            timeout=isNaN(timeout)?0:timeout;
            timeout=timeout<0?0:timeout;
        break;
        default:
            for(var i=0;i<arguments.length;i++){
                if(i>1){args.push(arguments[i]);};
            };
        break;
    };
    var proxy=function(){
        _this.apply(this1,args);    
    };
    return window.setTimeout(proxy,timeout);
};