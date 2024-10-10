<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('./css/footer.css') }}">


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .event-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin: 10px 0;
        }
        .event-card h5 {
            color: #006400;
        }

    </style>
</head>
<body>

    <header>
        @include("navbar")
    </header>

    <div class="container my-5" style="background:#f8f9fa;" id="Event">
        <h1 class="text-center display-5" style="color: #006400;">All Events</h1>
  
        <div class="row mt-4">
          @foreach($events as $event)
              <div class="col-md-4 mb-3">
                  <div class="event-card  border border-success border-2">
                      <h5 class="card-title display-6">{{ $event->title }}</h5>
                      <p class="card-text mt-3"><strong>Date:</strong> {{ $event->date->format('d M Y') }}</p>
                      <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
                      <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                  </div>
              </div>
          @endforeach
  
        </div>
    </div>

@include('footer')


</body>
</html>


