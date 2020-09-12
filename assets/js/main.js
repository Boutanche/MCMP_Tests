/* ===================================
--------------------------------------
  LOANS2GO | Loans HTML Template
  Version: 1.0
--------------------------------------
======================================*/


'use strict';

$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(400).fadeOut("slow");

});

(function($) {
	/*------------------
		Navigation
	--------------------*/
	$(".main-menu").slicknav({
        appendTo: '.header-section',
		allowParentLinks: true,
		closedSymbol: '<i class="fa fa-angle-right"></i>',
		openedSymbol: '<i class="fa fa-angle-down"></i>'
	});

	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	/*------------------
		Hero Slider
	--------------------*/
	$('.hero-slider').owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		mouseDrag: false,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		items: 1,
		autoplay: true
	});

	/*--------------------------
		Loans slide calculator
	------------------------------*/
	$("#slider-range-max").slider({
	  range: "max",
	  min: 1000,
	  max: 15000,
	  step: 10,
	  change: function (event, ui) {
		$("#loan-value").text('$' + ui.value);
		$("#lone-emi").text('$' + emi(ui.value));
		console.log(ui);
		
	  },
	  slide: function (event, ui) {
		$("#loan-value").text('$' + ui.value);
		$("#lone-emi").text('$' + emi(ui.value));
	  }
	});
  
	$("#lc-inc").click(function () {
	  var value = $("#slider-range-max").slider("value");
	  var step = $("#slider-range-max").slider("option", "step");
	  $("#slider-range-max").slider("value", value + step);
	  
	});

	$("#lc-dec").click(function () {
	  var value = $("#slider-range-max").slider("value")
	  var step = $("#slider-range-max").slider("option", "step");
	  $("#slider-range-max").slider("value", value - step);
	});

	function emi (amount) {
		var result,
			emi = 52;
		result = Math.round(amount/emi);
		return result;
	}

	/*------------------
		Accordions
	--------------------*/
	$('.panel-link').on('click', function (e) {
		$('.panel-link').removeClass('active');
		var $this = $(this);
		if (!$this.hasClass('active')) {
			$this.addClass('active');
		}
		e.preventDefault();
	});

	/*------------------
		Circle progress
	--------------------*/
	$('.circle-progress').each(function() {
		var cpvalue = $(this).data("cpvalue");
		var cpcolor = $(this).data("cpcolor");
		var cptitle = $(this).data("cptitle");
		var cpid 	= $(this).data("cpid");

		$(this).append('<div class="'+ cpid +'"></div><div class="progress-info"><h2>'+ cpvalue +'%</h2><p>'+ cptitle +'</p></div>');

		if (cpvalue < 100) {

			$('.' + cpid).circleProgress({
				value: '0.' + cpvalue,
				size: 163,
				thickness: 5,
				fill: cpcolor,
				emptyFill: "rgba(0, 0, 0, 0)"
			});
		} else {
			$('.' + cpid).circleProgress({
				value: 1,
				size: 163,
				thickness: 5,
				fill: cpcolor,
				emptyFill: "rgba(0, 0, 0, 0)"
			});
		}

	});
	/*------------
		My Js :
	 -----------*/

	//Gestion Modal Log :
	$('.myBtn').on("click", function () {
		$('#myModal').show();
	});
	$('.close').on("click", function () {
		$('#myModal').hide();
		$('#modifNews_close').hide();

	});

	//Ajax modifier la news :
	$('.link_modify').on('click', (event) => {
		console.log("J'ai cliqué que le bouton");
		var idNews = event.target.getAttribute('data-id');
		console.log ("Mon id news =" + idNews);
		$('#modal_AddNews').show();
		var call_ajaxGetIDNews = $.ajax({
				url: "./lib/methode_ajax_old.php",
				method: "GET",
				data : {id : idNews},
				dataType: "Json"
			}
		);
		call_ajaxGetIDNews.done(function (data) {
			console.log ("A fonctionné.");
			console.log(data.IdNouvelle);
			$("#newsId").html(data.IdNouvelle);
			$("#newsTitle").html(
				`
                <input type="text" name="title" value="${data.Titre}" placeholder="${data.Titre}" />
				`
			);
			$("#newsIntro").html(
				`
                <input type="text" name="intro" value="${data.Intro}" placeholder="${data.Intro}" />
				`
			);
			$("#newsTexte").html(
				`
				<textarea type="text" name="description" value="${data.Texte}" placeholder="${data.Texte}" > ${data.Texte}</textarea>
				`
			);
		})
		call_ajaxGetIDNews.fail(function(jqXHR, textStatus){
			console.log("A raté.");
			console.log("Failed Request : " + textStatus);
		});
		}
	);
	//Une modale Read_More :
	$('.readmore').on('click', (event) =>{
		console.log("J'ai cliqué sur readmore");
		var idNews = event.target.getAttribute('data-id');
		console.log("Mon id news = " + idNews);
		$("#modal_Readmore").show();
		var call_ajaxGetIDNews = $.ajax({
			url: "./lib/methode_ajax_old.php",
			method: "GET",
			data : {id : idNews},
			dataType: "Json"
			}
		);
		call_ajaxGetIDNews.done(function (data) {
			console.log ("A fonctionné.");
			console.log(data.IdNouvelle);
			$("#newsTitre").html(data.Titre);
			$("#newsTroin").html(data.Description);
			$("#newsTetex").html(data.Detail);
			$("#newsDPubli").html(data.DPubli);
			$("#newsfrId").val(data.IdArticle);
		})
		call_ajaxGetIDNews.fail(function(jqXHR, textStatus){
			console.log("A raté.");
			console.log("Failed Request : " + textStatus);
		});
	});
	//Téleverser une image pour les membres :
	/*
	$('#fichierImage').addEventListener('change', function () {
		console.log(this.files[O].name);
		console.log(this.files[O].size);
		console.log(this.files[O].type);
		console.log(this.files[O].lastModified);
	})
*/
	// 12 Pop Up Video
	var popUp = $('.popup-video');
	if(popUp.length){
		popUp.magnificPopup({
			type: 'iframe'
		});
	}
})(jQuery);

//Non Implémenté :
// Wysiwyg  :
/*
if($('#trumbowyg').length){
    console.log('WYSIWYG is ready !');
    var title = $('input[name=title]').val();
    var description = $('#trumbowyg').trumbowyg;
    console.log ('Tu me dis rien ok');
    console.log(title);
    console.log(description);
    ('Tu devrais pas me dire un truc quand bouton envoyé ?')
    $('#trumbowyg').trumbowyg({
    });
}
$('#trumbowig-envoyer').on("click",function(){
    console.log('Je suis là');
    $('#newarticle').prepend('<div class="col-12 blue">' + $('#wysiwyg .ql-editor').html() + '</div>');

});

 */
// Modal :
/*
	if($('#login_mod')){
		var modal = $("myModal");
		var btn = $("myBtn");
		var span = document.getElementsByClassName("close")[0];
		var block = document.getElementById("modal_log");
		btn.onclick = function () {

		}
		span.onclick = function () {
			modal.style.display = "none";
		}
	};

	//Mais ça sert à rien ça pour le moment  :::
		$('#addNews').on('click',function() {
		console.log('Click is OK !')
		var call_ajax = $.ajax(
			{
				url: "./lib/methode_ajax_old.php",
				method: "POST",
				data: { informations : 1, title:title, description : description },
				dataType: "json" //ou JSON
			}
		);
		call_ajax.done(function (msg) {
			console.log("coucou");
			console.log(msg.title);
		})
		call_ajax.fail(function (jqXHR, textStatus) {
			console.log("Non!" + textStatus);
		});
	});
*/
