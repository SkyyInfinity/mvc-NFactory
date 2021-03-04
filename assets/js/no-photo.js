$(document).ready(function(){
    $('img').on('error', function() {
        $(this).attr('src', './assets/img/meals/no-photo.png');
    });
});