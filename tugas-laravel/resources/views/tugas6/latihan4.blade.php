<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container my-4 d-flex justify-content-center">
        <div class="card d-flex my-4 w-50">
            <h5 class="card-header text-center ">
                Tugas 6 - Latihan 4
            </h5>
            <div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Course</th>
                            <th>Type</th>
                            <th>Rate</th>
                        </thead>
                        <tbody>
                            @foreach ($data['matakuliah'] as $result)
                                <tr>
                                    <td>{{ $result['title'] }}</td>
                                    <td>{{ $result['type'] }}</td>
                                    <td>
                                        @for ($i = 0; $i < 5; $i++)
                                            <span class="mr-1">
                                                <i class="bi bi-star{{ $i < $result['rate'] ? '-fill' : '' }}"></i>
                                            </span>
                                        @endfor
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
