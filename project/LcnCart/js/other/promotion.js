(function($) {
	$.extend({
		_jsonp : {
			scripts: {},
			//charset: 'utf-8',
			counter: 1,
			head: document.getElementsByTagName("head")[0],
			name: function( callback ) {
				var name = '_jsonp_' +  (new Date).getTime()
					+ '_' + this.counter;
				this.counter++;
				var cb = function( json ) {
					eval( 'delete ' + name );
					callback( json );
					$._jsonp.head.removeChild( $._jsonp.scripts[ name ] );
					delete $._jsonp.scripts[ name ];
				};
				eval( name + ' = cb' );
				return name;
			},
			load: function( url, name ) {
				var script = document.createElement( 'script' );
				script.type    = 'text/javascript';
				script.charset = this.charset;
				script.src     = url;
				this.head.appendChild( script );
				this.scripts[ name ] = script;
			}
		},

		getJSONP : function ( url, callback ){
			var name = $._jsonp.name( callback );
			var url = url.replace( /{callback}/, name );
			$._jsonp.load( url, name );
			return this;
		}
	});
})(jQuery);

$(
	function()
	{

		function refreshPack()
		{
		    var url = window.location.href;
		    var inx = url.lastIndexOf("/");
		    
		    
		    if (url.indexOf("suite") > 0)
		        inx = url.lastIndexOf("-");
		        
		    var so = url.substring(inx+1);
		    inx = so.lastIndexOf(".");
		    so = so.substring(0,inx);
		    var infolab = "#cx";

			$.getJSONP(
				"http://price.360buy.com/promotioninfo.aspx?callback=getPacks&pid="+so,
				getPacks);
		}
		
		refreshPack();
	});

function getPacks(result)
{
    if (result.pack != null && result.pack != "")
	{
		$("#suit").html(result.pack);
		defineW(0);
	}
	
	if (result.largess != null && result.largess != "")
	{
		$("#liLargess").html(result.largess);
		$("#liLargess").css("display", "block");
	}
	
	if (result.product != null && result.product != "")
	{
	    $("#cx").html(result.product);
        $("#cx").css("display", "block");
	}
	
	if (result.price!=null && result.price!="")
	{
	    $("#promotion1").html(result.price);
	}
	
	if (result.ext!=null && result.ext!="")
	{
	    $("#nocoupon").html(result.ext);
	    $("#nocoupon").css("display", "block");
	}	
}