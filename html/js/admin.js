// $('.bb').click(function () {
//     $('.bb').each(function () {
//         $('.bb').removeClass('buttonespace')
//     })
//     $(this).addClass('buttonespace')
// })

const link = window.location.pathname.split('/')[window.location.pathname.split('/').length-1]

$('.anchor').each(function(){
    if($(this).attr('href') == link){
        console.log('coucou')
        $(this).children().removeClass('btn-light');
        $(this).children().addClass('selectedbtn')
    }
})