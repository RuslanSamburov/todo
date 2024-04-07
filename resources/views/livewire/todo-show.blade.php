<div id="todo-show">
    @foreach ($fields as $key => $field)
        <x-input :label="$field['name']" :name="$key" :value="$todo->$key" :id="$key" deny="true"></x-input>
    @endforeach
</div>


