
@foreach($posts as $post)
    <h1>{{ $post->title}}, {{ $author }}</h1>
    <p>{{ $post->content }}</p>
@endforeach
