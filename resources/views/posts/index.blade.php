<x-layouts.app
    title="Blog"
    meta-description="Blog meta description">

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Blog</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{ route('posts.create') }}">Create new post</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                @foreach($posts as $post)
                    <h2>
                        <a href="{{ route('posts.show', $post) }}">
                            {{ $post->title }}
                        </a>
                    </h2>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>
