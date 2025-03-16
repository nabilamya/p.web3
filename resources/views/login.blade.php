<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif
    <form action="{{ route('login.authenticate') }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
