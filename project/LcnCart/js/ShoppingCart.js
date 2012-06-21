
function changeBar(type,skuId,obj)
{
    var txtC=null;
    var change=0;
	txtC=$(obj).siblings('.qty');
    if(type=='+')
    {     
      change=1;
    }
    if(type=='-')
    {
      change=-1;
    }
    var num=parseInt(txtC.val());
    if(num+change<0)
    {
       alert('您输入的数字已经超出的最小值');
       return;
    }
    txtC.val(num+change);
    
    changeProductCount(skuId,txtC);
       
}

//更改商品数量
function changeProductCount(productId,obj)
{
   obj = $(obj);
   if(obj.val()==obj.next().val()){return;}
   //检测输入是否为数字
   if(!checknumber(obj.val())){showAlert_shoppingCart("您输入的格式不正确！",obj);obj.val(obj.next().val());return;}
   
   //判断为0的情况
   if(parseInt(obj.val())==0)
   {
      removeProductOnShoppingCart(productId,obj);
      return;
   }

   ajax_update(obj.prev().val(),obj.val(),obj);

}

//显示提示
function showAlert_shoppingCart(message,obj)
{
   alert(message);
}

//删除购物车中的商品
function removeProductOnShoppingCart(productId,obj)
{
   obj = $(obj);
   if(confirm('确定不购买该商品？'))
   {
      setDelSku(obj,productId); 
   }else{
      obj.val(obj.next().val());return;
   }
}
function removeProduct(productId,obj)
{
	obj = $(obj).parent().parent().find('.qty');
    removeProductOnShoppingCart(productId,obj);
}

function setDelSku(obj,skuId)
{  
   var trObj=obj.parent().parent();
   $(trObj).remove(); 
   ajax_update(obj.prev().val(),0)
}

//清空购物车
function clearCart()
{
   if(confirm('确定清空购物车吗？'))
   {
      $.ajax({
      url: base_url+'index.php/shopping_cart/destroy',
      type: 'GET',
      dataType: 'html',
      success: function(data){ 
	    $('#CartTb tr.align_Center').remove();
      }
    });
   }
   return false;
}

//ajax
function ajax_update(rowid,qty,obj)
{
	$.ajax({
      url: base_url+'index.php/shopping_cart/update/rowid/'+rowid+'/qty/'+qty,
      type: 'GET',
      dataType: 'html',
      success: function(data){ 
	    $('#cartBottom_price').text('￥'+data);
		if (obj){
		  $(obj).next().val(qty);
		}
      }
    });
}

