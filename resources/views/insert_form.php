<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/create" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <label for="">Name</label>
        <input type="text" name="student_name">

        <input type="submit" value="Add student">

    </form>
</body>

</html>