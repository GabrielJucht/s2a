$(document).ready(function(){
	
	var title = $("#simg1").attr('title');
	var alt = $("#simg1").attr('alt');
	$("#stitle").html(title);
	$("#salt").html(alt);
	
	if ($('body').attr('id') == ("proyectos")) { 
		$('.bxslider').bxSlider({
			auto:true,	
		  default: 'horizontal',
		  maxSlides: 1,
		  controls:false,
		  pager:true,
		  pagerCustom: '#bx-pager',
		   adaptiveHeight:true,
		  captions:false,
		  speed:1000

	})
	}

	/*if($('#proyectos #bx-pager').width() > 900) {
			$('#proyectos .pager').css('overflow-x', 'scroll');
		}	*/
	
	if ($('body').attr('id') == ("contacto")) {
		$("#form_contacto").submit(function(event) {
    	event.preventDefault();
    		$('#contacto form ul').hide();
    		$('#contacto form .gracias').show();
    	});

    }

    $(function(){
		$('.scroll-pane').jScrollPane({showArrows: true});
	});

	


	
})