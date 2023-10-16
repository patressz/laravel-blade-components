@props([
    'variable',
    'type' => 'text',
    'label' => false,
    'placeholder' => null,
    'value' => null,
    'required' => false,
    'disabled' => false,
])

<label class="block">
    @if ($label)
	    <span class="text-black">{{ $label }}</span>
    @endif

    @if ($required)
    	<span class="text-red-600">*</span>
	@endif

	<input
        {{ $attributes->merge(['class' => 'mt-1 block w-full disabled:cursor-not-allowed']) }}
		type="{{ $type }}"
		placeholder="{{ $placeholder ?? $label }}"
		name="{{ $variable }}"
		value="{{ old($variable, $value) }}"
		@required($required)
		@disabled($disabled)
	/>

    @if ($errors->has($variable))
        <div class="mt-1 text-red-600">
            @foreach ($errors->get($variable) as $message)
                <p>{{ $message }}</p>
            @endforeach
        </div>
    @endif
</label>
