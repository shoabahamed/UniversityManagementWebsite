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
        .custom-file-label::after {
            content: "Browse";
        }
    </style>
</head>
<body>
  
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 login-container">
                <h2 class="text-center mb-4" style="color: #006400;">Add New Notice</h2>
                <form class="login-form" action="{{ route('add-new-notice') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter notice title">
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Upload PDF</label>
                        <input type="file" name="pdf" class="form-control" id="file">
                    </div>
                    <button type="submit" class="btn btn-outline-success login-btn">Add</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>


