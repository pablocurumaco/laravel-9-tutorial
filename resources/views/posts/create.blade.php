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
                    <div class="mb-3">
                        <label for="titlePost" class="form-label">Title</label>
                        <input type="text" class="form-control" id="titlePost" name="title" placeholder="Title Post">
                    </div>
                    <div class="mb-3">
                        <label for="bodyPost" class="form-label">Body</label>
                        <textarea class="form-control" id="bodyPost" name="body" rows="3"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>

