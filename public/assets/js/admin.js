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
            $(this).children().removeClass('btn-light');
            $(this).children().addClass('selectedbtn');
        }
    })
    $('.property-select').on('change', function () {

        if ($(this).val() == "garage") {
            $('.no-garage').each(function () {

                $('.no-garage').addClass('d-none');
                $('.no-garage').removeClass('d-flex');
            })
        } else {
            $('.no-garage').each(function () {
                $('.no-garage').addClass('d-flex');
                $('.no-garage').removeClass('d-none');
            })
        }
    });

    $('.delete').click(function (e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let isact = $(this).attr('isact');
        let btn = $(this);
        $.ajax({
            method: 'POST',
            data: {'id' : id, 'isact' : isact},
            url: 'activeuser'
        }).done(function () {
            if(btn.children().children().html() == "Activer"){
                btn.children().children().html("Désactiver");
            }else{
                btn.children().children().html("Activer");
            }

            if(btn.attr('isact') == 1){
                btn.attr('isact', 0);
            }else{
                btn.attr('isact', 1);
            }
        });
    });
});
