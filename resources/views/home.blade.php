<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <h1>Welcome to the Home Page</h1>
    <a href="{{ url("/test") }}">Go to test page</a>
    <a href="{{ route("testpage") }}">Go to test page</a>
    <form action="{{ url('/submit-form') }}" method="POST">
        @csrf
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>