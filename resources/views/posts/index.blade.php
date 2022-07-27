<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    @vite('resources/css/app.css')
</head>

<body>
<a href="{{ route('posts.create') }}"
   class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
    Create Post</a>

<div class="mt-10">
    {{--      @foreach($posts as $post)--}}
    {{--          <h1 class="font-semibold text-lg">{{ $post->title}}, {{ $author }}</h1>--}}
    {{--          <p>{{ $post->content }}</p>--}}
{{--              <a href="" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"> Edit Post</a>--}}
    {{--      @endforeach--}}


        <table class="table-fixed">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </thead>
            @foreach($posts  as $post)
            <tr>
                <th>{{ $post->id }}</th>
                <th>{{ $post->title }}</th>
                <th class="w-80">{{ $post->content }}</th>
                <th>
                    <a href="{{ route('posts.edit', $post->id) }}" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"> Edit</a>
                    <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 hover:bg-red-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"> Delete</button>
                    </form>
                </th>

            </tr>
                @endforeach
        </table>

</div>

</body>
</html>
