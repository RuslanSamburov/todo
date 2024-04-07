<tr>
    @foreach ($fields as $key => $field)
        @if (!$field['hidden'])
            <td class="text-center align-middle {{ implode(' ', $field['class']) }}"><a {{ $field['href'] ? 'href=' . $field['href'] . $todo->id : null }} >{{ $todo->$key }}</a></td>
        @endif
    @endforeach
    <td class="text-center align-middle">
        <div>
            <a href="/edit/{{ $todo->id }}" class="btn btn-outline-warning">Edit</a>
            <button class="btn btn-outline-danger" data-id="{{ $todo->id }}" data-csrf="{{ csrf_token() }}" btn-type='delete'>Delete</button> 
        </div>
    </td>
</tr>
