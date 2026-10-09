<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New User</title>
</head>
<body>
    <form action="{{ route("users.store") }}" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" id="">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="text" id="password" name="password">
        </div>
        <div>
            <label for="password_confirmation">Password Confirmation</label>
            <input type="text" id="password_confirmation" name="password_confirmation">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>