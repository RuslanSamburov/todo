import { refreshLivewireComponent } from './app';

let btns = $('button[btn-type=delete]');
let todoList = $('#todo-list');

setInterval(function () {
    refreshLivewireComponent(todoList)
}, 2000);

async function btnDelete(event) {
    let del = confirm('Вы действительно хотите удалить эту задачу?');
    if (del) {
        let dataset = event.target.dataset;
        await $.post('/' + dataset.id, {
            _token: dataset.csrf,
            _method: 'DELETE',
        });
        refreshLivewireComponent(todoList);
    }
}

btns.each((i, btn) => {
    $(btn).on('click', btnDelete);
});
