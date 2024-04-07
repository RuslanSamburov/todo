import { refreshLivewireComponent } from "./app";

setInterval(() => {
    refreshLivewireComponent($('#todo-show'));
}, 2000);
