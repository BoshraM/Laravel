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

<hr>

<h1>All Posts</h1>

@forelse ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
          @csrf
          @method('DELETE')

          <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    <hr>

    </div>
@empty
    <p>No posts found.</p>
@endforelse
