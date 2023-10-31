@props([
    'variable',
    'label' => false,
    'rows' => 4,
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

	<textarea
        {{ $attributes->merge(['class' => 'mt-1 block w-full disabled:cursor-not-allowed']) }}
		placeholder="{{ $placeholder ?? $label }}"
		name="{{ $variable }}"
        rows="{{ $rows }}"
		@required($required)
		@disabled($disabled)
	>{{ old($variable, $value) }}</textarea>
</label>
