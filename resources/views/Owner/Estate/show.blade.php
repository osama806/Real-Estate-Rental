<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Estates</title>
</head>

<body class="bg-secondary ">
  <section class="section">
    <div class="container">
      <div class="card my-3 ">
        <div class="card-header bg-dark text-light ">
          <h1 class="card-title">
            Type of estate: {{ $estate->type }}
          </h1>
        </div>
        <div class="card-body">
          <h3 class="mb-4">Estate rental price: {{ $estate->price }} </h3>
          <h5 class="mb-4">Estate address: {{ $estate->address }} </h5>
          <h5 class="mb-4">Number of beds: {{ $estate->beds }} </h5>
          <h5 class="mb-4">Number of paths entry estate: {{ $estate->paths }} </h5>
          <h5 class="mb-4">State: {{ $estate->state }} </h5>
          <h5 class="mb-4">Locality: {{ $estate->locality }} </h5>
          <h5 class="mb-4">Sub-locality: {{ $estate->sub_locality }} </h5>
          <h5 class="mb-4">Street name: {{ $estate->street_name }} </h5>
          @if ($estate->broker != 'NoBroker')
            <h5 class="mb-4">Broker(if found): {{ $estate->broker }} </h5>
          @endif
          <h6 class="mb-4">Reserved: {{ $estate->reserved }} </h6>
          <h6 class="mb-4">Rented: {{ $estate->rented }} </h6>
          <a href="{{ route('estates.edit', $estate->id) }}" class="text-decoration-none"><button type="button"
              class="btn btn-success px-5 ">Edit</button></a>
          <form action="{{ route('estates.destroy', $estate->id) }}" method="POST" class="d-inline-block ">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-danger px-5">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
