<h1>Create Post</h1>
@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <label>Title</label>
    <input type="text" name="title" value="{{ old('title') }}">

    <br><br>

    <label>Content</label>
    <textarea name="content">{{ old('content') }}</textarea>

    <br><br>

    <button type="submit">Save Post</button>
</form>

<br>

<a href="{{ route('posts.index') }}">Back to Posts</a>