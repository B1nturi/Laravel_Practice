@extends('layouts.default')

@section('title', 'Post Page')

@section('header-title', 'Welcome to the Post Page')
@section('main-content')
    <div class="max-w-3xl mx-auto py-8 px-4">

        <!-- Trigger button -->
        <div class="flex justify-end mb-6">
            <button id="openCreateModal" type="button" onclick="window.location='{{ route('post.create') }}'"
                class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create Post
            </button>
        </div>
        <h1 class="text-2xl font-semibold mb-6">All Posts</h1>

        @if(session('success'))
            <div class="mb-4 rounded-md bg-green-50 p-4">
                <div class="text-sm text-green-700">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <div class="space-y-6">
            @foreach($posts as $post)
                <div class="p-4 border rounded-lg shadow-sm">
                    <h2 class="text-xl font-medium mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-700">{{ Str::limit($post->content, 150) }}</p>
                    <a href="{{ route('post.show', $post->id) }}"
                        class="text-indigo-600 hover:text-indigo-800 mt-2 inline-block">Read More</a>
                    <a href="{{ route('post.edit', $post->id) }}"
                        class="text-indigo-600 hover:text-indigo-800 mt-2 inline-block">Edit</a>
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST"
                        class="text-indigo-600 hover:text-indigo-800 mt-2 inline-block"
                        onclick="return confirm('Are you sure?')">@csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            @endforeach
            @if ($posts->isEmpty())
                <p class="text-gray-500">No posts available.</p>
            @endif
        </div>
@endsection
    @section('footer')
        <p class="text-sm text-gray-500 text-center">&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
    @endsection