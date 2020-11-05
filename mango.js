$('.sldierBannerHome').slick({
	slidesToShow: 1,
	dots: true,
	arrows: false,
	infinite: false,
	centerMode: false,
})
$('.sliderImagesMain').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	dots: false,
	asNavFor: '.sliderThumbanils',
	infinite: false,
});
$('.sliderThumbanils').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	asNavFor: '.sliderImagesMain',
	dots: false,
	arrows: true,
	centerMode: false,
	focusOnSelect: true,
	infinite: false,
});