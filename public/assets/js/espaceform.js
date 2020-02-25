$(document).ready(function () {
    $('.disa').click(function (e) {
        e.preventDefault()
        $("input").each(function () {
            $(this).attr('disabled', false);
        });
        $(this).addClass('d-none');
        $('.send').removeClass('d-none');
    });
    $('.bb').click(function () {
        $('.bb').each(function () {
            $('.bb').removeClass('buttonespace');
        });
        $(this).addClass('buttonespace');
    });
    $('.info-espace').show();
    $('.property-espace').hide();
    $('.favoris-espace').hide();
    $('.info-e').click(function () {
        $('.info-espace').show();
        $('.property-espace').hide();
        $('.favoris-espace').hide();
    });
    $('.property-e').click(function () {
        $('.property-espace').show();
        $('.info-espace').hide();
        $('.favoris-espace').hide();
    });
    $('.favoris-e').click(function () {
        $('.favoris-espace').show();
        $('.property-espace').hide();
        $('.info-espace').hide();
    });
    $('.property-select').on('change', function () {

        if ($(this).val() == "garage") {
            $('.no-garage').each(function () {

                $('.no-garage').addClass('d-none');
                $('.no-garage').removeClass('d-flex')
            })
        } else {
            $('.no-garage').each(function () {
                $('.no-garage').addClass('d-flex');
                $('.no-garage').removeClass('d-none')
            })
        }
    });
});