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
    <a href="{{ url('/test') }}">Go to test page</a> <!-- Using url() helper -> use url -->
    <a href="{{ route('testpage') }}">Go to test page</a> <!-- Using named route -> use name  -->
    <form action="{{ route('form.submit') }}" method="POST">
        @csrf
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>