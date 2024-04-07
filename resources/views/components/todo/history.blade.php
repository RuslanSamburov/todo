<tr>
    @foreach ($fields as $key => $field)
        @if (!$field['hidden'])
            <td class="text-center align-middle {{ implode(' ', $field['class']) }}"><a {{ $field['href'] ? 'href=' . $field['href'] . $history->id : null }} >{{ $history->$key }}</a></td>
        @endif
    @endforeach
</tr>
