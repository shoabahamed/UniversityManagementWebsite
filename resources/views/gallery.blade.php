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
    <link rel="stylesheet" href="{{ asset('./css/footer.css') }}">

        
    <style> 
      .img-fluid {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
    </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/31b429dc0a.js" crossorigin="anonymous"></script>
  
</head>
<body>
    {{-- navbar--}}
    <header>
      @include("navbar")
	  </header>
    


    <div class="container">
      <h1 class="text-center my-4 display-5" style="color: #006400;">KUET</h1>
    
      <div class="row">
        <div class="col">
          <img src="{{asset('/assets/images/gallery/0.jpg')}}" class="img-fluid mb-3 border border-success border-2" alt="University Main Image">
        </div>
      </div>
    
      <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('/assets/images/gallery/1.jpg')}}" class="card-img-top" alt="Image 1">
            <div class="card-body">
              <p class="card-text">Kuet Entrance</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('/assets/images/gallery/2.jpg')}}" class="card-img-top" alt="Image 2">
            <div class="card-body">
              <p class="card-text">Kuet Guest House</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('/assets/images/gallery/3.jpg')}}" class="card-img-top" alt="Image 3">
            <div class="card-body">
              <p class="card-text">Kuet Sign Mark</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('/assets/images/gallery/4.jpg')}}" class="card-img-top" alt="Image 4">
            <div class="card-body">
              <p class="card-text">Student Welfare Center</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('/assets/images/gallery/5.jpg')}}" class="card-img-top" alt="Image 5">
            <div class="card-body">
              <p class="card-text">Shaeed Minar</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('/assets/images/gallery/6.jpg')}}" class="card-img-top" alt="Image 6">
            <div class="card-body">
              <p class="card-text">Kuet Lake</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('/assets/images/gallery/7.jpg')}}" class="card-img-top" alt="Image 6">
            <div class="card-body">
              <p class="card-text">Durbar Bangla</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('/assets/images/gallery/8.jpg')}}" class="card-img-top" alt="Image 6">
            <div class="card-body">
              <p class="card-text">Paddmo Pukur</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('/assets/images/gallery/9.jpg')}}" class="card-img-top" alt="Image 6">
            <div class="card-body">
              <p class="card-text">Autumn at Kuet</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    

	@include('footer')

 

</body>
</html>