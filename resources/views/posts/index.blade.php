<h1>All Posts</h1>

<a href="{{ route('posts.create') }}">Create New Post</a>

<hr>

@forelse ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <p>Author: {{ $post->user?->name ?? 'No author' }}</p>
        <a href="{{ route('posts.show', $post->id) }}">View</a>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        
        <form method="POST" action="{{ route('posts.destroy', $post->id) }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>

        <hr>
    </div>
@empty
    <p>No posts found.</p>
@endforelse