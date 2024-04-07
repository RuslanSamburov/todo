<div id="todo-list">
    <div class="overflow-y-auto" style="height: 400px">
        <table class="table">
            <x-todo.head :fields="$fields"/>
            @foreach ($histories as $history)
                <x-todo.history :fields="$fields" :history="$history"/>
            @endforeach
        </table>
    </div>
</div>
