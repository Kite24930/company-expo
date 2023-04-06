<div class="mb-3">
    <label for="{{ $id }}" class="form-label">
        @if(isset($require))
            <x-require></x-require>
        @else
            <x-any></x-any>
        @endif
        {{ $name }}
    </label>
    <input type="{{ $type }}" class="form-control" id="{{ $id }}" aria-describedby="{{ $id }}Help" value="{{ $data }}">
    <div id="{{ $id }}Help" class="form-text">{{ $slot }}</div>
</div>
