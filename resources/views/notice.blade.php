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
  
</head>
<body>
    {{-- navbar--}}
    <header>
      @include('navbar')
	  </header>

    <div class="container mt-4 mb-4">
      <h1 class="text-center display-5" style="color: #006400;">All Notices</h1>
      <div class="row">
        <div class="col-10 offset-1 notices align-items-center border-bottom border-success border-2 py-4">
          <div class="fs-5 fw-bold">08 April 2023</div>
          <div class="fs-5">TEDxIIITV 2023</div>
          <a href="#" class="btn btn-outline-success border fs-5" download="composer.json">Download</a>
        </div>
        <div class="col-10 offset-1 notices align-items-center border-bottom border-success border-2 py-4">
          <div class="fs-5 fw-bold">26 March 2023</div>
          <div class="fs-5">Nationl Holiday</div>
          <a href="#" class="btn btn-outline-success border fs-5">Download</a>
        </div>
        <div class="col-10 offset-1 notices align-items-center border-bottom border-success border-2 py-4">
          <div class="fs-5 fw-bold">21 February 2023</div>
          <div class="fs-5 text-wrap">International Mother Language Holiday 2023</div>
          <a href="#" class="btn btn-outline-success border fs-5">Download</a>
        </div>
        <div class="col-10 offset-1 notices  border-bottom border-success border-2 py-4">
          <div class="fs-5 fw-bold">16 December 2023</div>
          <div class="fs-5">National Holiday</div>
          <a href="#" class="btn btn-outline-success border fs-5">Download</a>
        </div>
        <div class="col-10 offset-1 notices border-bottom border-success border-2 py-4">
          <div class="fs-5 fw-bold">08 April 2023</div>
          <div class="fs-5">TEDxIIITV 2023</div>
          <a href="#" class="btn btn-outline-success border fs-5">Download</a>
        </div>
      </div>
    </div>

    
	@include('footer')

 

</body>
</html>