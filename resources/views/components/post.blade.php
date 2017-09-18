    <!-- Blog Post -->
    <div class="card mb-4">
        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
        <div class="card-body">
            <a href="/posts/{{ $post->id }}">
                <h2 class="card-title">
                    {{ $post->title }}
                </h2>
            </a>
            <p class="card-text">{{ $post->body }}</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            Posted on {{ $post->created_at->toFormattedDateString()  }} by
            <a href="#">Start Bootstrap</a>
        </div>
    </div>