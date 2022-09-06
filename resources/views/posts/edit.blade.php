<x-layouts.app
    :title="'Edit ' . $post->title"
    :meta-description="$post->body">

    <div class="container">
        <div class="row">
            <h1>Edit post</h1>
        </div>

        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('posts.update', $post) }}">
                    @csrf
                    @method('PATCH')
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
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>

