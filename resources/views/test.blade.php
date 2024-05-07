<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

		<link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/footer.css">

        
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
    </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/31b429dc0a.js" crossorigin="anonymous"></script>
  
    <style>
    .event-card {
      border: 1px solid #c8e6c9; /* Light green border */
      border-radius: 10px;
      margin-bottom: 20px;
      background-color: #fff; /* White background */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow */
    }
    .event-card img {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 0 auto; /* Center the image */
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .event-card .card-body {
      padding: 20px;
    }
    .event-title {
      color: #388e3c; /* Dark green title */
    }
    .card-text {
      color: #333; /* Dark text */
    }
    </style>
</head>
<body>
    {{-- navbar--}}
    <header>
      @include('navbar')
	  </header>

      <div class="container">
        <div class="row">
          <!-- Event Card -->
          <div class="col-md-12">
            <div class="event-card">
              <img src="{{asset('/assets/1.jpg')}}" alt="Event Image 1">
              <div class="card-body">
                <h5 class="card-title event-title">Event Title 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class="card-text">Event Date: January 1, 2024</p>
                <!-- Add more event details here -->
              </div>
            </div>
          </div>
          <!-- Event Card -->
          <div class="col-md-12">
            <div class="event-card">
              <img src="image2.jpg" alt="Event Image 2">
              <div class="card-body">
                <h5 class="card-title event-title">Event Title 2</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class="card-text">Event Date: February 15, 2024</p>
                <!-- Add more event details here -->
              </div>
            </div>
          </div>
          <!-- Add more event cards as needed -->
        </div>
      </div>


	@include('footer')

 

</body>
</html>