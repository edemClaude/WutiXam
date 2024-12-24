@php
$label ??= null;
$class ??= null;
$name ??= '';
$value ??= '';
$options ??= [];
@endphp

<div @class(['from-group', $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    <select class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}">
        <option value="" selected disabled>Choisir le type d'utilisateur</option>
        @foreach($options as $option)
            <option @selected(old($name, $value)) value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
