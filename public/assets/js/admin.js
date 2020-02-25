// $('.bb').click(function () {
//     $('.bb').each(function () {
//         $('.bb').removeClass('buttonespace')
//     })
//     $(this).addClass('buttonespace')
// })

const link = window.location.pathname.split('/')[window.location.pathname.split('/').length - 1]
$(document).ready(function () {
    $('.anchor').each(function () {
        if ($(this).attr('href') == link) {
            console.log('coucou')
            $(this).children().removeClass('btn-light');
            $(this).children().addClass('selectedbtn')
        }
    })
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
