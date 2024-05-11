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
      .c-carousel-item {
          height: 450px;
      }
      .c-carousel-img{
          object-fit: cover;
          height: 100%;
          width: 100%;
      }

      .welcome-section {
          padding: 50px 0;
          background-color: #e3f9e0; /* Light green background */
          border-radius: 10px;
          box-shadow: 0 0 20px rgba(0,0,0,0.1);
      }
      .welcome-message {
          font-size: 32px;
          font-weight: bold;
          color: #006400; /* Dark green text */
          margin-bottom: 30px;
      }
      .vc-message {
          padding: 30px;
          background-color: #f8f9fa;
          border-radius: 10px;
          box-shadow: 0 0 10px rgba(0,0,0,0.1);
      }
      .vc-message img {
          max-width: 150px;
          height: auto;
          border-radius: 50%;
          margin-bottom: 20px;
      }
      .vc-name {
          font-size: 20px;
          font-weight: bold;
          color: #006400; /* Dark green text */
          margin-bottom: 10px;
      }
      .vc-designation {
          font-style: italic;
          color: #555;
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

    <section class="container mt-4 mb-4">
      <h1 class="text-center mb-4" style="color: #006400">Compute Science & Engineering</h1>
      <div class="row welcome-section align-items-start justify-content-around">
          <div class="col-md-7">
            <div id="hero-section" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner border border-success border-2 rounded">
                <div class="carousel-item active c-carousel-item" data-bs-interval="10000">
                  <img src="/assets/images/gallery/dept_gallery/ce/1.jpg" class="d-block w-100  c-carousel-img" alt="...">
                </div>
                <div class="carousel-item c-carousel-item" data-bs-interval="2000">
                  <img src="/assets/images/gallery/dept_gallery/ce/2.jpg" class="d-block w-100 c-carousel-img" alt="...">
                </div>
                <div class="carousel-item c-carousel-item">
                  <img src="/assets/images/gallery/dept_gallery/ce/3.jpg" class="d-block w-100 c-carousel-img" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#hero-section" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#hero-section" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
          </div>
              <p class="pt-3">
                Department of Computer Science and Engineering of KUET, started its academic activities from September 26, 1999 with the aim of quality education as well as cutting edge researches in the branches of Computer Science and Engineering. The department regularly offers postgraduate (M.Sc. and Ph.D.) and undergraduate (B.Sc.) programs. Only top ranked brilliant students are enrolled in this department through a competitive admission test. At present, yearly intake of this department is around 160 including 120 fixed undergraduate intakes. The department has well equipped different laboratories and a System Development Centre to increase the expertise of students practically along with theoretical knowledge.
              </p>
              <div>
                  <a href="{{route('welcome')}}" class="btn btn-outline-success mb-3">Read More</a>
              </div>
          </div>
          <div class="col-md-4">
              <div class="vc-message">
                  <img src="/assets/images/teachers/{{$Head->image_path}}" alt="Head">
                  <div class="vc-details">
                      <p class="vc-name">{{$Head->name}}</p>
                      <p class="vc-designation">Head of CSE Department</p>
                      <p>
                          "Welcome to the Department of Computer Science and Engineering (CSE) at Khulna University of Engineering & Technology (KUET). Our department provides an outstanding opportunity to students to get quality education in Computer Science..."
                      </p>
                      <div>
                          <a href="{{route('vc-message')}}" class="btn btn-outline-success">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    </section>
    

	@include('footer')

 

</body>
</html>