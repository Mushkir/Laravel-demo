<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model Update Demo</title>
</head>

<body>

    <form action="/update/{{ $user->id }}" method="POST">

        <label for="">Username</label>
        <input type="text" name="name" value="{{ $user->name }}" id="">

        <label for="">Phone</label>
        <input type="text" name="phone" value="{{ $user->phone }}" id="">

        <label for="">Age</label>
        <input type="text" name="age" value="{{ $user->age }}" id="">

        <input type="submit" value="Update user">
        @csrf
    </form>

</body>

</html>
