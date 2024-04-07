import './bootstrap';

export function refreshLivewireComponent(el) {
    let component = Livewire.find(el.attr('wire:id'));
    component.$refresh();
}

export function message(elements, messages, dataset = 'field', timeout = 2000) {
    $.each($(elements), (key, element) => {
        let datatime = element.dataset.time;
        datatime ? clearTimeout(datatime) : null;
        let field = element.dataset[dataset];
        $(element).text(messages[field]).removeClass('visually-hidden');
        let time = setTimeout(() => {
            $(element).addClass('visually-hidden');
        }, timeout);
        $(element).attr('data-time', time);
    });
}
