$(document).ready(function() {

// Cut long post titles in cards Portfolio titles
var portfolioTitle = $('.card-portfolio__title'); 
maxPortfolioTitleSize = 24;
portfolioTitle.each(function(index, value){
var text = $(value).text()
if (text.length > maxPortfolioTitleSize) {
text = text.slice(0, maxPortfolioTitleSize) + '...';
}
$(this).text(text);
});

// Cut long post titles in cards Posts title
var postTitle = $('.card-post__title'); 
maxPostTitleSize = 40;
postTitle.each(function(index, value){
var text = $(value).text()
if (text.length > maxPostTitleSize) {
text = text.slice(0, maxPostTitleSize) + '...';
}
$(this).text(text);
});

$(".left-panel").customScrollbar({preventDefaultScroll: true});

(function(){
var formValid = {

init: function(){
	this._setUpListeners();
},

_setUpListeners: function(){
	$('#button-submit').on('click', formValid._formSubmit);
},

_formSubmit: function(event){
		event.preventDefault();
		var form = $('#form');
		var inputs = form.find('.input');
		var titleValid = false;
	var genreValid = false;
	var yearValid = false;

	$.each(inputs, function(index, val) {
		var input = $(val);
		var value = input.val().trim();
	
		if ( input.attr("data-error-title") ) {

			if ( value === "" ) {
				titleValid = false;
				var errorText = $(this).attr("data-error-title");
				var tooltip = $("<div class='error error--title'>Введите " + errorText + " </div>");
				form.find('.error--title').remove();
				$(this).after(tooltip);

			}else {
				titleValid = true;
			}
		}else if ( input.attr("data-error-genre") ){

			if ( value === "" ) {
				genreValid = false;
				var errorText = $(this).attr("data-error-genre");
				var tooltip = $("<div class='error error--genre'>Введите " + errorText + " </div>");
				form.find('.error--genre').remove();
				$(this).after(tooltip);
			}else {
				genreValid = true;
			}
		}else if ( input.attr("data-error-year") ){

			if ( value === "" ) {
				yearValid = false;
				var errorText = $(this).attr("data-error-year");
				var tooltip = $("<div class='error error--year'>Введите " + errorText + " </div>");
				form.find('.error--year').remove();
				$(this).after(tooltip);
			}else {
				yearValid = true;
			}
		}
		input.on('keydown change', function(){
			if(input.attr("data-error-title")) {
				form.find('.error--title').remove();
			}else if (input.attr("data-error-genre")){
				form.find('.error--genre').remove();
			}else if (input.attr("data-error-year")){
				form.find('.error--year').remove();
			}
		});
	});

		if ( titleValid === true && genreValid === true && yearValid === true) {
			form.submit();
			console.log("форма отправлена");
		}
	}
};

formValid.init();

}());

});