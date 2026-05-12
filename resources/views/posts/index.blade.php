 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>List of Posts</h1>
    <a href="{{ route('posts.create') }}">Add New Post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong> - {{ $post->body }}
            </li>
        @endforeach
    </ul>
</body>
</html>
