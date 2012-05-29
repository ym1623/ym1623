$(function(){
    var width = screen.width;
	width = (width-750)/2+'px';
	var schoolVal = $("#school").val();
    $("#school").click(function(){
    	
    	var top = $(this).offset().top + $(this).height();
    	
        if($(this).val() == schoolVal)
        {
            $(this).val('');
        }            
        $("#ps").show();
		getProvince($("input[name='type']").val());//根据type的值获取数据
		
		$("."+$("input[name='type']").val()).css("color","#000");//改变已选中的学校类型的样式
		
		$("#ps").css('left',width).css('top',top+10);
    }).blur(function(){
        if($(this).val() == '')
        {
            $(this).val(schoolVal);
        }
    })
    //关闭按钮
    $("#closePs").click(function(){
    	$("#ps").hide();
    })
    //联想 搜索 学校
    $("#schoolName").autocomplete('./school.php',{
        minChars: 0,
        selectFirst: false,
        formatItem:function(value){
            return value[1];
        }
    }).result(function(event,item){
            $("#schoolName").val(item[1]);
            select(item[1],item[0]);
    })
    
    //选择大学还是中学
    
    $("#type a").click(function(){
		$("#schools").css("border","none").height("0");
		$("#schools li").remove().css("border","none").height("0");
    	
    	$("input[name='type']").val($(this).attr("class"));
    	$("#type a").css("color","#005EAC");
    	$(this).css("color","#000");

    	$("#province").html('');
    	$("#city").html('').css("border","none").height("0");
    	$("#area").html('').css("border","none").height("0");
		getProvince($(this).attr("class"));
    });
    
})

function getProvince(type)
{
	//ajax请求数据（直辖市/省）
    $.ajax
    ({
        type:"GET",
        url:"./school.php",
        data:'action=getProvince',
        dataType:'json',
        success:function(data){
            var data = eval(data);
            var provinces = '';
            $.each(data,function(id,item)
            {
            	if(type != 4)
            		provinces += '<li ref="'+item.id+'"><a href="javascript:getCity('+item.id+');">'+item.name+'</a></li>';
            	else
            		provinces += '<li  ref="'+item.id+'"><a href="javascript:changeProvince('+item.id+',1);">'+item.name+'</a></li>';
            		
            })
            $("#schools").css("border","none").height("0");
            $("#province").html(provinces);
        }
    })
}

function getCity(pid)
{
	//改变已选中市/区的样式
	$("#ps li").removeClass("curr");
	$("li[ref='"+pid+"']").attr('class','curr');
	
	//ajax请求数据（市/区）
	
    $.ajax
    ({
        type:"GET",
        url:"./school.php",
        data:'action=getCity&pid='+pid,
        dataType:'json',
        success:function(data){
            var data = eval(data);
            var provinces = '';
            $.each(data,function(id,item)
            {
            	if(item.type == 1){//直辖市，直接获取学校
                    provinces += '<li  ref="'+item.id+'"><a href="javascript:changeProvince('+item.id+',1);">'+item.name+'</a></li>';
            	}else{//获取下一级地区
                    provinces += '<li ref="'+item.id+'"><a href="javascript:getArea('+item.id+');">'+item.name+'</a></li>';
            	}
            })
            $("#schools").css("border","none").height("0");
            $("#area").html('').css("border","none").height("0");
            $("#city").html(provinces)
            .height("auto")
            .css("border","1px solid #c3c3c3")
            .css("padding-top","5px")
            .css("margin","10px 5px");
        }
    })
}

function getArea(pid)
{
	//改变已选中县级的样式
	$("#city li").removeClass("curr");
	$("li[ref='"+pid+"']").attr('class','curr');
	//ajax请求数据（县级）
    $.ajax
    ({
        type:"GET",
        url:"./school.php",
        data:'action=getArea&pid='+pid,
        dataType:'json',
        success:function(data){
            var data = eval(data);
            var provinces = '';
            $.each(data,function(id,item)
            {
            	provinces += '<li ref="'+item.id+'"><a href="javascript:changeProvince('+item.id+',0);">'+item.name+'</a></li>';
            })
            $("#schools").css("border","none").height("0");
            $("#area").html(provinces)
            .height("auto")
            .css("border","1px solid #c3c3c3")
            .css("padding-top","5px")
            .css("margin","10px 5px");
        }
    })
}

function changeProvince(pid,types)
{
	//改变已选中地区的样式
	if(types)
		$("#city li").removeClass("curr");//直辖市
	else
		$("#area li").removeClass("curr");//非
	$("li[ref='"+pid+"']").attr('class','curr');
	
	//ajax请求数据（学校）
	var type = $("input[name='type']").val();
    $.ajax
        ({
            type:"GET",
            url:'./school.php',
            data:'pid='+pid+'&type='+type,
            dataType: "json",
            success: function(data){
                data = eval(data);
                var school = '';
                $.each(data,function(id,item){
                    school += '<li><a href="javascript:void();" onClick="select(\''+item.name+'\','+item.id+');">'+subString(item.name,28,true)+'</a></li>';
                })
                $("#schools").html(school).css("border","1px solid #C3C3C3").height("300px");
            }

        })
}
//截取字符串
function subString(str, len, hasDot)
{
    var newLength = 0;
    var newStr = "";
    var chineseRegex = /[^\x00-\xff]/g;
    var singleChar = "";
    var strLength = str.replace(chineseRegex,"**").length;
    for(var i = 0;i < strLength;i++){
        singleChar = str.charAt(i).toString();
        if(singleChar.match(chineseRegex) != null){
            newLength += 2;
        }    
        else{
            newLength++;
        }
        if(newLength > len){
            break;
        }
        newStr += singleChar;
    }
    
    if(hasDot && strLength > len){
        newStr += "...";
    }
    return newStr;
}
function select(school,id)
{
    $("#school").val(school);
    $("#schoolid").val(id);
    $("#ps").hide();
}
