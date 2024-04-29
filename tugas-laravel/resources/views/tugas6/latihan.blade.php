<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4 d-flex justify-content-center">
        <div class="card d-flex my-4 w-50">
            <h5 class="card-header text-center ">
                Tugas 6
            </h5>
            <div>
                <div class="card-body">
                    <h5 class="card-text">Menampilkan Controller index, identity, dan family</h5>
                    <div class="card-text my-1">
                        <h6 class="d-inline">Index  : </h6>
                        <a href="{{url('/index')}}" class="btn btn-primary">Index</a>
                    </div>
                    <div class="card-text my-1">
                        <h6 class="d-inline">Identity : </h6>
                        <a href="{{url('/identity')}}" class="btn btn-primary">Identity</a>
                    </div>
                    <div class="card-text my-1">
                        <h6 class="d-inline">Family : </h6>
                        <a href="{{url('/family')}}" class="btn btn-primary">Family</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
