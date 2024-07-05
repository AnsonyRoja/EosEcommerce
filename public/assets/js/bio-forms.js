$(document).ready(function () {
/*
	======================================================
	Enable Bootstrap Tooltips
	======================================================
*/	
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
	})
/*
	======================================================
	Edit user info on Profile Screen
	======================================================
*/	
	/*Click button to edit the user info*/
	$(document).on('click','.btn-edit-info', function(){
		$(this).hide();
		$(this).parent().find('.btn-confirm-info').show();
		$(this).parent().find('input,select').removeAttr('disabled');
	});

	/*Click button to confirm the edited user info*/
	$('.btn-confirm-info').on('click', function(){
		$(this).hide();
		$(this).parent().find('.btn-edit-info').show();
		$(this).parent().find('input,select').attr('disabled','disabled');
		$(this).parent().find($('.dropdown-menu')).removeClass('show');
	});
/*
	======================================================
	Set radio values on inputs text -> Gender, State, Address
	======================================================
*/	
	/*Set user gender value*/
	$('input:radio[name=radio-gender]').on( "change",function(){
		inputGender = $("label[for='"+$(this).attr("id")+"']").text();
		$('input[name=user-gender]').val(inputGender);
	});

	/*Set user state value*/

	$('.address-section input[type=radio]').on( "click",function(){
		addressSection = $(this).closest('.address-section').attr('id');
		inputState = $('#'+addressSection+" label[for='"+$(this).attr("id")+"']").text();
		$('input[name='+addressSection+'-state]').val(inputState);
	});

	/*Set user address value*/
	$('.wizard-form input:radio[name=radio-address]').on( "change",function(){
		inputAddress = $("label[for='"+$(this).attr("id")+"']").text();
		$('.wizard-form input[name=address-name]').val(inputAddress);
		if ($('.wizard-form input[name=address-name]').val() == 'Personalizada') {
			$('.btn-edit-info').show();
			$('#info-block-address input[type="text"]').val('');
		}
	});
/*
	======================================================
	Cart steps function
	======================================================
*/	
	var current_fs, next_fs, previous_fs; //fieldsets
	var opacity;

	$(".next").click(function(){

		current_fs = $(this).closest('fieldset');
		next_fs = $(this).closest('fieldset').next();

		//Add Class Active
		$(".progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;

				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				next_fs.css({'opacity': opacity});
			},
			duration: 600
		});

		if ($('#purchase-completed').hasClass('active')){
			$('#cart').addClass('cart-bg');
		}
	});

	$(".previous").click(function(){

		current_fs = $(this).closest('fieldset');
		previous_fs = $(this).closest('fieldset').prev();

		//Remove class active
		$(".progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

		//show the previous fieldset
		previous_fs.show();

		//hide the current fieldset with style
			current_fs.animate({opacity: 0}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;

				current_fs.css({
					'display': 'none',
					'position': 'relative'
				});
				previous_fs.css({'opacity': opacity});
			},
			duration: 600
		});
	});
});


