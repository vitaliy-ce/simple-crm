$(document).ready(function() { 
    // Иконки
    feather.replace();

    // Копирование по клику
    $('body').on('click', '.copy-js', function(e) {
        e.preventDefault();
        
        let input = $(this).data('input');
        let text = $(this).data('text');

        let text_to_copy = '';

        if (!!input) {
            text_to_copy = $(input).val();
        } else if (!!text) {
            text_to_copy = text;
        }

        navigator.clipboard.writeText(text_to_copy);
    }); 
});