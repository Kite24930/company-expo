<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $name }}</label>
    <input type="text" class="form-control" id="{{ $id }}" aria-describedby="{{ $id }}Help" value="{{ $data }}">
    <div id="{{ $id }}Help" class="form-text"></div>
</div>
