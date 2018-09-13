
	// Custom
	function copyEquipoBtn() {
	  		var clipboard = new ClipboardJS('.tooltipped');
		}
	function toastEquipoBtn(btn) {
  		if (btn == "telefono") {
  			M.toast({html: 'Telefono copiado', classes: 'toast_equipo'})
  		}
  		if (btn == "email") {
  			M.toast({html: 'Email copiado', classes: 'toast_equipo'})
  		}
  		if (btn == "ws") {
  			M.toast({html: 'Whatsapp copiado', classes: 'toast_equipo'})
  		}
	}

$(document).ready(function(){
	// Materialize
	$('.collapsible').collapsible();
	$('.dropdown-trigger').dropdown();
	$('.tooltipped').tooltip();
	$('.carousel').carousel({
		dist:0
	});

	// Swiper
	var swiper = new Swiper('.swiper-container', {
		  slidesPerView: 2,
		  spaceBetween: 30,
		  pagination: {
		    el: '.swiper-pagination',
		    clickable: true,
		  },
		});
	var swiper = new Swiper('.swiper-container-mobile', {
	  slidesPerView: 1,
	  spaceBetween: 30,
	  pagination: {
	    el: '.swiper-pagination',
	    clickable: true,
	  },
	});

	var swiper = new Swiper('.swiper-container-mas', {
		  slidesPerView: 2,
		  spaceBetween: 30,
		  pagination: {
		    el: '.swiper-pagination',
		    clickable: true,
		  },
		});
	var swiper = new Swiper('.swiper-container-mas-mobile', {
	  slidesPerView: 1,
	  spaceBetween: 30,
	  pagination: {
	    el: '.swiper-pagination',
	    clickable: true,
	  },
	});

});