
// 菜单隐藏
$(document).ready(function() {
  var frmBody = parent.document.getElementById('frame-body');
  $('.toggleMenu').click(function(){
	  if (frmBody.cols == "27, *")
	  {
		frmBody.cols="230, *";
		$('#menu').fadeIn('slow');
		$('#menu-xcollapsed').fadeOut('slow');
		menuSize();
	  }
	  else
	  {
		$('#menu').fadeOut('slow');
		$('#menu-xcollapsed').fadeIn('slow',function(){
		  frmBody.cols="27, *";
		});
	  }
  });
});

//子菜单隐藏
$(document).ready(function() {	
    var divs = $('div.feeds-node').get();
	var uls =  $('ul.x-tree-node-ct').get();
    var imgs =  $('img.x-tree-ec-icon').get();
	$.each(divs,function(index,div) {
		var collapse = true;
		$(div).click(function(){
            collapse = !collapse;
            $(uls).eq(index).slideToggle('slow');
			if(collapse)
			{ 
				$(imgs).eq(index).removeClass('x-tree-elbow-end-plus').addClass('x-tree-elbow-end-minus').css('title','关闭');
			}
			else
			{
			    $(imgs).eq(index).removeClass('x-tree-elbow-end-minus').addClass('x-tree-elbow-end-plus').css('title','展开');
			}
		});
	})
})

//鼠标滑过,单击菜单
$(document).ready(function() {
  var mainFrame = parent.document.getElementById('main-frame');
  var rows = $('ul .x-tree-node-ct > li > div');
  $.each(rows,function(index,row){
	  $(row).hover(function() {
	    $(this).addClass('x-tree-node-over');
	  }, function() {
	    $(this).removeClass('x-tree-node-over');
      }).click(function() {
        $(rows).removeClass('x-tree-selected');
	    $(this).addClass('x-tree-selected');		
		$(mainFrame).attr('src',$('a',this).attr("href"));
		/*$('a',this).click(function(){
		  return false;
		});*/
	  });
  });
})


// 随窗口大小缩放
function menuSize(){
	menuHeight =  $('body').outerHeight() - $('#menu-head').outerHeight() - $('#cmm-func').outerHeight();
	$('#menu-body').css("height",menuHeight-8+"px");

    if ($.browser.msie){
	    $('#menu-body').css("height",menuHeight-6+"px");
	}	
	collapsedH = $('body').outerHeight();	
	if ($('#menu-xcollapsed').css("display") != 'none'){

		$('#menu-xcollapsed').css("height",collapsedH -8+'px');
		if ($.browser.msie){
	        $('#menu-xcollapsed').css("height",collapsedH -7+'px');
	    }
	}	
}

$(document).ready(function() {
   menuSize();
})
$(window).resize(function(){
   menuSize();
});
