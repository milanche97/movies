<h2>Movie:</h2>
<div class="blog-post">
    <h2 class="blog-post-title">{{ $movies->title }}</h2>
    <p class="blog-post-meta">by: {{ $movies->director }}
        <a href="/users/{{ $movies->title }}"></a>
    </p>
