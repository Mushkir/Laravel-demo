<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/" method="post">
        <label for="">Name</label>
        <input type="text" name="name" id="">

        <input type="submit" value="Create user">

        @csrf
    </form>

    {{ session('id') }}
</body>

</html>
