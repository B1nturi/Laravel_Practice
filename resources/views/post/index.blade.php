@extends('layouts.default')

@section('title', 'Post Page')

@section('header-title', 'Welcome to the Post Page')
@section('main-content')
<div class="max-w-3xl mx-auto py-8 px-4">
    <h1 class="text-2xl font-semibold mb-6">Create Post</h1>

    @if(session('success'))
        <div class="mb-4 rounded-md bg-green-50 p-4">
            <div class="text-sm text-green-700">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Trigger button -->
    <div class="flex justify-end mb-6">
        <button
            id="openCreateModal"
            type="button"
            class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        >
            Create Post
        </button>
    </div>

    <form action="" method="POST" novalidate class="space-y-6">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('title') border-red-500 @enderror"
                required
            >
            @error('title')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
            <textarea
                id="content"
                name="content"
                rows="8"
                class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('content') border-red-500 @enderror"
                required
            >{{ old('content') }}</textarea>
            @error('content')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Publish
            </button>
        </div>
    </form>
</div>
@endsection
@section('footer')
<p class="text-sm text-gray-500 text-center">&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
@endsection
