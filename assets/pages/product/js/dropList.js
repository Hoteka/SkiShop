/*Dropdown List*/
var price_binding=0;
$('.dropdown').click(function () {
    $(this).attr('tabindex', 1).focus();
    $(this).toggleClass('active');
    $(this).find('.dropdown-menu').slideToggle(300);
});
$('.dropdown').focusout(function () {
    $(this).removeClass('active');
    $(this).find('.dropdown-menu').slideUp(300);
});
$('.dropdown .dropdown-menu li').click(function () {
    let text_input=$(this).find("p:first-child").text();
    $(this).parents('.dropdown').find('.dropdown-title').text(text_input);
    $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
    price_binding=$(this).find("p:last-child span").text();
    console.log(price_binding);
});


