@props([
    'variable',
    'label',
    'value' => null,
    'disabled' => false,
])

<div>
    <label class="inline-flex items-center gap-2">
        <input
            type="checkbox"
            name="{{ $variable }}"
            @disabled($disabled)
            @checked(old($variable, $value))
        >

        <span>
            {{ $label }}
        </span>
    </label>

    @if ($errors->has($variable))
        <div class="mt-1 text-red-600">
            @foreach ($errors->get($variable) as $message)
                <p>{{ $message }}</p>
            @endforeach
        </div>
    @endif
</div>
