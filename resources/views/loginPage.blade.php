<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .login-container {
            max-width: 400px;
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
                <h2 class="text-center mb-4" style="color: #006400;">Login</h2>
                <form class="login-form" action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="rollNumber" class="form-label">Roll Number</label>
                        <input type="text" name="roll" class="form-control" id="rollNumber" placeholder="Enter your roll number">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"  name="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-outline-success login-btn">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>


