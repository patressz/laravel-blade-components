@props([
    'variable',
    'label' => false,
    'options',
    'value' => null,
    'required' => false,
    'disabled' => false,
    'defaultOptionText' => 'Zvoľte možnosť',
])

<label class="block">
    @if ($label)
	    <span class="text-black">{{ $label }}</span>
    @endif

    @if ($required)
    	<span class="text-red-600">*</span>
	@endif

	<select
        {{ $attributes->merge(['class' => 'mt-1 block w-full disabled:cursor-not-allowed']) }}
		name="{{ $variable }}"
		@required($required)
		@disabled($disabled)
	>
        <option value disabled selected>{{ $defaultOptionText }}</option>
        @foreach ($options as $option => $name)
            <option value="{{ $option }}" @selected(old($variable, $value) == $option || ($required && count($options) == 1) )>{{ $name }}</option>
        @endforeach
    </select>

    @if ($errors->has($variable))
        <div class="mt-1 text-red-600">
            @foreach ($errors->get($variable) as $message)
                <p>{{ $message }}</p>
            @endforeach
        </div>
    @endif
</label>
