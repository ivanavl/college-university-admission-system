{{-- Text --}}
<div class="form-group with-validation mb-3">
    @if ($label)
        <label for="{{ $id }}">
            <span>{{ $label }}</span>
            @if ($required)
                <span class="text-danger">*</span>
            @endif
        </label>
    @endif
    <div class="input-group">
        @if (!empty($icon))
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa {{ $icon }} fa-sm" style="width: 1em;"></i></span>
            </div>
        @endif
        <textarea {{ $required ? 'required' : null }} class="form-control w-100" value="{{ $value }}"
            name="{{ $name }}" id="{{ $id }}" cols="{{ $cols }}" rows="{{ $rows }}">{{ $value }}</textarea>
    </div>
</div>
