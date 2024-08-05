<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Upload - Demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Mushkir</h2>
            </div>

            <div class="panel-body">
                <form action="/" enctype="multipart/form-data" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" name="image" id="" class=" form-control">
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-success">Upload</button>
                        </div>
                    </div>
                    @if (count($errors) > 0)
                        <div class="alert aler-danger">
                            <strong>Oops! There are problems in uploading the image.</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert">
                            <strong>{{ session('success') }}</strong>
                        </div>
                        <img src="{{ asset('images/' . session('imageName')) }}" alt="">
                    @endif
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
