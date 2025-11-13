@extends('layouts.default')

@section('title', 'Post Page')

@section('header-title', 'Welcome to the Post Page')
@section('main-content')
<div class="max-w-3xl mx-auto py-8 px-4">

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

    <!-- Optional success message (keeps original behavior) -->
    @if(session('success'))
        <div class="mb-4 rounded-md bg-green-50 p-4">
            <div class="text-sm text-green-700">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Modal -->
    <div id="createModal" class="fixed inset-0 z-50 hidden items-center justify-center" aria-hidden="true">
        <!-- overlay -->
        <div id="createModalOverlay" class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- dialog -->
        <div class="relative bg-white rounded-lg shadow-xl w-full max-w-3xl mx-4 z-10">
            <div class="flex justify-between items-center p-4 border-b">
                <h2 class="text-lg font-medium">Create Post</h2>
                <button id="closeCreateModal" class="text-gray-500 hover:text-gray-700 focus:outline-none" aria-label="Close">
                    &times;
                </button>
            </div>

            <div class="p-6">
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

                    <div class="flex justify-end items-center gap-3">
                        <button type="button" id="cancelCreate" class="px-4 py-2 rounded-md bg-gray-100 text-sm text-gray-700 hover:bg-gray-200">Cancel</button>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Publish
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal toggle script -->
<script>
    (function () {
        const openBtn = document.getElementById('openCreateModal');
        const modal = document.getElementById('createModal');
        const overlay = document.getElementById('createModalOverlay');
        const closeBtn = document.getElementById('closeCreateModal');
        const cancelBtn = document.getElementById('cancelCreate');

        function openModal() {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            // focus first input for accessibility
            const firstInput = modal.querySelector('input, textarea, button');
            if (firstInput) firstInput.focus();
        }

        function closeModal() {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        openBtn && openBtn.addEventListener('click', openModal);
        closeBtn && closeBtn.addEventListener('click', closeModal);
        cancelBtn && cancelBtn.addEventListener('click', closeModal);
        overlay && overlay.addEventListener('click', closeModal);

        // close on Escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && modal && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });
    })();
</script>
@endsection
@section('footer')
<p class="text-sm text-gray-500 text-center">&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
@endsection