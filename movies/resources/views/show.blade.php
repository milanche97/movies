<h2>Movie:</h2>
<div class="blog-post">
    <h2 class="blog-post-title">{{ $movie->title }}</h2>
    <p class="blog-post-meta">by: {{ $movie->director }}
        <a href="/users/{{ $movie->title }}"></a>
    </p>
    <p>
        Genre: {{ $movie->genre }}
    </p>
    <p>
        Year: {{ $movie->year }}
    </p>
    <p>
        Soryline: {{ $movie->storyline }}
    </p>
