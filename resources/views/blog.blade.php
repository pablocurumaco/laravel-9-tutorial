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
                @foreach($posts as $post)
                    <h2>{{ $post }}</h2>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>
