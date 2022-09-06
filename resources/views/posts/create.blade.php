<x-layouts.app
    title="Create post"
    meta-description="Form to create new post">

    <div class="container">
        <div class="row">
            <h1>Create new post</h1>
        </div>

        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf

                    @include('posts.form-fields')

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>

