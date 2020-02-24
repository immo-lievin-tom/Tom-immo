$(document).ready(function () {
    $(".hamb").on("click", function () {
        $(this).parent().next().toggle("slow"); //affiche le menu du hamburger du footer
    });
})