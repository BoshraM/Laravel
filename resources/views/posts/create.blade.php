<h1>Create Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <label>Title</label>
    <input type="text" name="title">

    <br><br>

    <label>Content</label>
    <textarea name="content"></textarea>

    <br><br>

    <button type="submit">Save Post</button>
</form>

<br>

<a href="{{ route('posts.index') }}">Back to Posts</a>