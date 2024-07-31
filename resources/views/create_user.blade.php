<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model Demo</title>
</head>

<body>

    <form action="/store" method="POST">

        <label for="">Username</label>
        <input type="text" name="name" id="">

        <label for="">Phone</label>
        <input type="text" name="phone" id="">

        <label for="">Age</label>
        <input type="text" name="age" id="">

        <input type="submit" value="Add User">
        @csrf
    </form>

</body>

</html>
