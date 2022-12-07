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
        Storyline: {{ $movie->storyline }}
    </p>

    @if(count($movie->comments))
    <div class=“container”>
      <p><br><strong>Comments:</strong><br></p>
      <ul class=“list-unstiled”>
        @foreach($movie->comments as $comment)
          <li>
            <p>{{ $comment->content }}</p>
            <p>{{ $comment->created_at }}</p>
          </li>
        @endforeach
      </ul>
    </div>
  @endif
