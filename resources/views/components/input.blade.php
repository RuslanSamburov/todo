<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $id }}" name="{{ $name }}" wire:model="{{ $id }}" value="{{ $value }}" {{ $deny ? 'readonly' : null }}>
    {{ $slot }}
</div>
