<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $name }}</label>
    <textarea type="text" class="form-control" id="{{ $id }}" aria-describedby="{{ $id }}Help">
    @if(isset($data))
        {{ $data }}
    @endif
    </textarea>
    <div id="{{ $id }}Help" class="form-text"></div>
</div>
