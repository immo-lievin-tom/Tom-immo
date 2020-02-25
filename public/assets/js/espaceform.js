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