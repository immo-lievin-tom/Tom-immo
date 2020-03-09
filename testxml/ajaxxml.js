$(document).ready(function () {
    $('.formxml').submit(function (e) {
        e.preventDefault();
        let datebegin = new Date($('.datebegin').val()).toISOString().replace('T', ' ').replace('.000Z', ' ')
        let dateend = new Date($('.dateend').val()).toISOString().replace('T', ' ').replace('.000Z', ' ')
        $.ajax({
            method: 'POST',
            data: { datebegin: datebegin, dateend: dateend },
            url: 'traitement.php'
        }).done(function (res) {
            console.log(res);
        });
    });
})
