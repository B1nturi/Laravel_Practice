@extends('layouts.default')

@section('title', 'Home Page')

@section('header-title', 'Welcome to the Home Page')
@section('main-content')
<div class="max-w-lg mx-auto bg-white p-8 rounded-2xl shadow-lg">
    <h2 class="text-xl font-semibold mb-6 text-center text-indigo-700">Submit Your Information</h2>

    <form action="{{ route('form.submit') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label for="fullname" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input type="text" id="fullname" name="fullname"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                placeholder="Enter your full name" required>
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" id="email" name="email"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                placeholder="Enter your email" required>
        </div>

        <button type="submit"
            class="w-full bg-indigo-600 text-white font-semibold py-2 rounded-lg hover:bg-indigo-700 transition">
            Submit
        </button>
    </form>
</div>
@endsection

@section('footer')
<p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
@endsection
