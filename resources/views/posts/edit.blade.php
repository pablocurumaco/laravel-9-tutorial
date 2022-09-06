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

                    @include('posts.form-fields')

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>

