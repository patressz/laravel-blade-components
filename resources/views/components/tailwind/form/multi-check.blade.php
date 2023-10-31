@props([
    'variable',
    'label',
    'options',
    'checked',
    'value' => null,
    'disabled' => false,
])

@php
    $trimmedVariable = rtrim($variable, '[]');
@endphp

@foreach ($options as $value => $name)
    <label class="inline-flex items-center gap-2">
        <input
            type="checkbox"
            name="{{ $variable }}"
            value="{{ $value }}"
            @disabled($disabled)
            @checked(isset($checked) && in_array($value, $checked) || is_array(old($trimmedVariable)) && in_array($value, old($trimmedVariable)) ? true : false)
        >

        <span>
            {{ $name }}
        </span>
    </label>
@endforeach

@if ($errors->has($trimmedVariable))
    <div class="t-1 text-red-600">
        @foreach ($errors->get($trimmedVariable) as $message)
            <p>{{ $message }}</p>
        @endforeach
    </div>
@endif
