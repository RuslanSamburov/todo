import { message } from "./app";

let form = $('#todo-create');

form.on('submit', async function (el) {
    el.preventDefault();

    var formData = $(this).serializeArray();
    var formObject = {};
    $.each(formData, function (i, field) {
        formObject[field.name] = field.value;
    });

    $.ajax({
        type: 'POST',
        url: '/',
        data: formObject,
        success: function (response) {
            message('[data-success]', {
                success: ['Задача создана'],
            }, 'success');
        },
        error: function (xhr, status, error) {
            message('[data-error]', xhr.responseJSON.errors, 'error');
        }
    });
});
