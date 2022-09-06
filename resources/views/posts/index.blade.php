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
                    <div class="row">
                        <div class="col-10">
                            <h2>
                                <a href="{{ route('posts.show', $post) }}">
                                    {{ $post->title }}
                                </a>
                            </h2>
                        </div>
                        <div class="col-1">
                            <a href="{{ route('posts.edit', $post) }}">Edit</a>
                        </div>
                        <div class="col-1">
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>
