<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Dataset information</title>
</head>

<body class="bg-secondary ">
    <section class="section">
        <div class="container">
            @foreach ($estates as $estate)
                <div class="card my-3 ">
                    <div class="card-header bg-dark text-light ">
                        <h1 class="card-title">
                            Type of estate: {{ $estate->type }}
                        </h1>
                    </div>
                    <div class="card-body">
                        <h3>Number of beds: {{ $estate->beds }} </h3>
                        <h5>Price: {{ $estate->price }} </h5>
                        <h5>Locality: {{ $estate->locality }} </h5>
                        <h5>Broker(if found): {{ $estate->broker }} </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
