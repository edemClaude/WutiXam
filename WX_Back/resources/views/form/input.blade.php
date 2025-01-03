@php
$label ??= null;
$type ??= 'text';
$class ??= null;
$name ??= '';
$value ??= '';
@endphp

<div @class(['from-group', $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    @if($type == "textarea")
        <textarea class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}">{{ old($name, $value) }}</textarea>
    @else
        <input class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}"
           name="{{ $name }}" value="{{ old($name, $value) }}" />
    @endif
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
