<h1>All Posts</h1>
@if (auth()->check())
    <p>Logged in as: {{ auth()->user()->name }}</p>
@endif
<a href="{{ route('posts.create') }}">Create New Post</a>

<hr>

@forelse ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <p>Author: {{ $post->user?->name ?? 'No author' }}</p>
        <a href="{{ route('posts.show', $post->id) }}">View</a>
        @if ($post->user_id === auth()->id())
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>

                <form method="POST" action="{{ route('posts.destroy', $post->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            @endif
        <hr>
    </div>
@empty
    <p>No posts found.</p>
@endforelse