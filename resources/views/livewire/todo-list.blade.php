<div id="todo-list">
    <div class="input-group input-group-sm mb-3" style="width: 200px">
        <form method="get">
            <input name="filter" type="text" class="form-control" placeholder="Фильтрация">
        </form>
    </div>
    <div class="overflow-y-auto" style="height: 400px">
        <table class="table">
            <x-todo.head :fields="$fields"/>
            @foreach ($todos as $todo)
                <x-todo.task :fields="$fields" :todo="$todo"/>
            @endforeach
        </table>
    </div>
</div>
