<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



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

  
</head>
<body>
    {{-- navbar--}}
    <header>
      @include('navbar')
	  </header>

    <div class="container mt-4 mb-4">
      <h1 class="text-center display-5" style="color: #006400;">All Notices</h1>
      <div class="row">
        @foreach($notices as $notice)
          <div class="col-10 offset-1 notices align-items-center border-bottom border-success border-2 py-4">
            <div class="fs-5 fw-bold">{{$notice->created_at->format('d M Y')}}</div>
            <div class="fs-5">{{$notice['title']}}</div>
            <a href="assets/pdf/notice/{{$notice['file_path']}}" class="btn btn-outline-success border fs-5">Download</a>
          </div>
        @endforeach
      </div>
    </div>

    
	@include('footer')

 

</body>
</html>