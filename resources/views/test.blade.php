<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('./css/footer.css') }}">


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/31b429dc0a.js" crossorigin="anonymous"></script>
    <style>
        .login-container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .login-form {
            margin-bottom: 20px;
        }
        .login-btn {
            width: 100%;
        }
        .custom-file-label::after {
            content: "Browse";
        }
    </style>
</head>
<body>
  

  <div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row">
        <div class="col-md-6 offset-md-3 login-container">
            <h2 class="text-center mb-4" style="color: #006400;">Update Teacher Information</h2>
            <form class="login-form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name"  placeholder="Name" required>
                </div>
   
                <div class="mb-3">
                    <label for="is_dean">Is Dean:</label>
                    <select class="form-control" id="is_dean" name="is_dean" required>
                      <option value="" selected disabled>Select</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                </div>
                {{-- <div class="mb-3  {{ $teacher->is_dean === 1 ? 'd-none' : '' }}">
                  <label for="is_dean">Is Dean:</label>
                  <select class="form-control" id="is_dean" name="is_dean" required>
                    <option value="">Select</option>
                    <option value="1" {{ $teacher->is_dean === 1 ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ $teacher->is_dean === 0 ? 'selected' : '' }}>No</option>
                  </select>
                </div> --}}

              {{-- <div class="mb-3" id="dean-options" style="display: none;">
                  <label for="dean_faculty" class="form-label">Dean of Faculty</label>
                  <select name="dean_faculty" class="form-control" id="dean_faculty" required>
                      <option value="">Select Faculty</option>
                      <option value="ce" {{ $teacher->dean_faculty === 'ce' ? 'selected' : '' }}>Faculty of Civil Engineering</option>
                      <option value="me" {{ $teacher->dean_faculty === 'me' ? 'selected' : '' }}>Faculty of Mechanical Engineering</option>
                      <option value="eee" {{ $teacher->dean_faculty === 'eee' ? 'selected' : '' }}>Faculty of Electrical and Electronic Engineering</option>
                  </select>
              </div> --}}

              <div class="mb-3" id="dean-options" style="display: none;">
                <label for="dean_faculty" class="form-label">Dean of Faculty</label>
                <select name="dean_faculty" class="form-control" id="dean_faculty">
                    <option value="">Select Faculty</option>
                    <option value="ce">Faculty of Civil Engineering</option>
                    <option value="me">Faculty of Mechanical Engineering</option>
                    <option value="eee">Faculty of Electrical and Electronic Engineering</option>
                </select>
            </div>

         
                <button type="submit" class="btn btn-outline-success login-btn">Update</button>
            </form>
        </div>
    </div>
</div>



<script>
    document.getElementById('is_head').addEventListener('change', function() {
    let headOptions = document.getElementById('head-options');
    if (this.value == '1') {
        headOptions.style.display = 'block';
    } else {
        headOptions.style.display = 'none';
    }
    });

    document.getElementById('is_dean').addEventListener('change', function() {
    let deanOptions = document.getElementById('dean-options');
    console.log("trggered");
    if (this.value == '1') {
        deanOptions.style.display = 'block';
    } else {
        deanOptions.style.display = 'none';
    }
    });
</script>


</body>
</html>


