<div class="mb-3">
    <label for="{{ $id }}" class="form-label">
        @if(isset($require))
            <x-require></x-require>
        @else
            <x-any></x-any>
        @endif
        {{ $name }}
    </label>
    <textarea type="text" class="form-control company-input" id="{{ $id }}" aria-describedby="{{ $id }}Help" name="{{ $id }}" rows="5">{{ $data }}</textarea>
    <div id="{{ $id }}Help" class="form-text">{{ $slot }}</div>
</div>
