$('[lang]').hide();
$('[lang="cat"]').show();
$('#lang-switch').change(function () {
    var lang = $(this).val();
    switch (lang) {
        case 'es':
            $('[lang]').hide();
            $('[lang="es"]').show();
        break;
        case 'cat':
            $('[lang]').hide();
            $('[lang="cat"]').show();
        break;
        default:
            $('[lang]').hide();
            $('[lang="cat"]').show();
        }
});