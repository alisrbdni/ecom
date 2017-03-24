<footer class="text-center" id="footer">&copy;Copyright 2010-2017 asa.co.ltd </footer>
<script>

	jQuery(window).scroll(function(){
var vscroll = jQuery(this).scrollTop();
$('#logotext').css({
	"transform" : "translate(0px,"+vscroll/2+"px)"
});
var vscroll = jQuery(this).scrollTop();
$('#back-flower').css({
	"transform" : "translate("+vscroll/6+",-"+vscroll/12+"px)"
});

var vscroll = jQuery(this).scrollTop();
$('#for-flower').css({
	"transform" : "translate(0px,-"+vscroll/2+"px)"
		});
	});
	function detailsmodal(id){
		var data = {"id": id};
		jQuery.ajax({
			url: '/phplessons/includes/detailsmodal.php',
			method : "post",
			data : data,
			success: function(data){
jQuery('body').append(data);
jQuery('#details-modal').modal('toggle');
			},
			error: function(){alert("jason we have a problem!");}
		
		});
		
	}
</script>
</body>
</html>