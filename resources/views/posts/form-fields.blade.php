<div class="mb-3">
    <label for="titlePost" class="form-label">Title</label>
    <input type="text"
           class="form-control"
           id="titlePost"
           name="title"
           value="{{ old('title', $post->title) }}"
           placeholder="Title Post">
    @error('title')
    <small>{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="bodyPost" class="form-label">Body</label>
    <textarea
        class="form-control"
        id="bodyPost"
        name="body"
        rows="3">{{ old('body', $post->body) }}</textarea>
    @error('body')
    <small>{{ $message }}</small>
    @enderror
</div>
