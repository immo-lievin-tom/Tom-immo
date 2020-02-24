$(document).ready(function () {
    $('.disa').click(function (e) {
        e.preventDefault()
        $("input").each(function() {
            $(this).attr('disabled', false);
        })
        $(this).addClass('d-none');
        $('.send').removeClass('d-none');
    })
    $('.bb').click(function (){
        $('.bb').each(function(){
            $('.bb').removeClass('buttonespace')
        })
        $(this).addClass('buttonespace')
    })
$('.info-espace').show();
$('.property-espace').hide();
$('.favoris-espace').hide();
    $('.info-e').click(function (){
        $('.info-espace').show();
    })
});