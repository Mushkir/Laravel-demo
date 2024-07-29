<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send POST Data</title>
</head>

<body>
    <h1><?php echo $title; ?></h1>

    <?php echo session('message'); ?>

    <form action="<?= url('get-userdata') ?>" method="post">
        <label for="name">Name:</label><input type="text" name="name" id="name">
        <label for="age">Age:</label><input type="text" name="age" id="age">
        <label for="phone">Phone:</label><input type="text" name="phone" id="phone">

        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
        <input type="submit" value="Send">
    </form>
</body>

</html>
