<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


		<link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="{{ asset('./css/footer.css') }}">


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    
  <style>
      .notices{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
      }
      .notices {
        @media (max-width: 768px) {
          flex-direction: column;
          row-gap: 1rem;
        }
      }

      .card-header {
      background-color: #28a745;
      color: white;
      border-bottom: none;
    }
    .card-body {
      background-color: #f8f9fa;
    }
    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }
    .btn-success:hover {
      background-color: #218838;
      border-color: #1e7e34;
    }
    .form-control:focus {
      border-color: #28a745;
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }
    .form-check-input:checked {
      background-color: #28a745;
    }
    .form-check-input:checked:after {
      content: '';
      display: block;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background-color: white;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .form-group{
      margin-bottom: 1rem;
    }
    .teacher-card {
      border: 2px solid #006400; /* Dark green border */
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      height: 500px;
    }
    .teacher-card img {
      border-radius: 50%;
      max-width: 150px;
      height: 150px;
      margin-bottom: 10px;
    }
    .teacher-info {
      margin-left: 20px;
    }

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
 
  <div class="container mt-5">
    <h2 class="text-center text-success">Update Event</h2>
    <form action="{{ route('update-event', ['event' => $event->id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Event Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}" required>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}" required>
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $event->location }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ $event->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-success">Update Event</button>
    </form>

  <script>

    // Hide the success message after 5 seconds
    setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
    }, 5000);

  </script>

</body>
</html>


