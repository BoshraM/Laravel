<h1>Edit Post</h1>
@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')

    <label>Title</label>
    <input type="text" name="title" value="{{ $post->title }}">

    <br><br>

    <label>Content</label>
    <textarea name="content">{{ $post->content }}</textarea>

    <br><br>

    <button type="submit">Update Post</button>
</form>

<br>

<a href="{{ route('posts.index') }}">Back to Posts</a>