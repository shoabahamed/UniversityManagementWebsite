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


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/31b429dc0a.js" crossorigin="anonymous"></script>
    
    <style>

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
  </style>
</head>
<body>
 

  <div class="container my-4">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Update User</div>
            <div class="card-body">
              <form action="{{route('update-student-user', ['user' => $user->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{$userDetails->email}}" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                  <label for="image">Upload Image:</label>
                  <input type="file" class="form-control-file" id="image" name="image_path">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile No:</label>
                  <input type="number" class="form-control" id="mobile" name="mobile_no"value="{{$userDetails->mobile_no}}"  placeholder="Enter Mobile No" required>
                </div>
                <div class="form-group">
                  <label for="address">Address:</label>
                  <textarea class="form-control" id="address" name="address" rows="2" placeholder="Enter Address" required>{{$userDetails->address}}</textarea>
                </div>
                <button type="submit" class="btn btn-outline-success btn-block">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>




</body>
</html>


