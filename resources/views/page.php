<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic example</title>
</head>

<body>
    <!-- /page/1/page -->
    <a href="<?= route('page', ['id' => 1, 'type' => 'page']) ?>">First page</a>

    <!-- url('/page/1/number') -->
    <a href="<?= route('page', ['id' => 1, 'type' => 'number']) ?>">First number</a>

    <!-- url('/page/1') -->
    <a href="<?= route('page', ['id' => 1]) ?>">First something</a>
</body>

</html>