<x-layouts.app
    :title="$post->title"
    :meta-description="$post->body">

    <div class="container">
        <div class="row">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>

            <a href="{{ route('posts.index') }}">Back</a>
        </div>
    </div>
</x-layouts.app>

