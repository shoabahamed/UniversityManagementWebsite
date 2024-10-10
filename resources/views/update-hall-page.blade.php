<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Hall</title>
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
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-md-6 offset-md-3 login-container">
                <h2 class="text-center mb-4" style="color: #006400;">Edit Hall</h2>
                <form class="login-form" action="{{ route('update-hall', $hall->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="hall_name" class="form-label">Hall Name</label>
                        <select class="form-control" id="hall_name" name="hall_name" required>
                            <option value="" disabled>Select a Hall Name</option>
                            <option value="Fazlul Haque Hall" {{ $hall->hall_name == 'Fazlul Haque Hall' ? 'selected' : '' }}>Fazlul Haque Hall</option>
                            <option value="Lalan Shah Hall" {{ $hall->hall_name == 'Lalan Shah Hall' ? 'selected' : '' }}>Lalan Shah Hall</option>
                            <option value="Khan Jahan Ali Hall" {{ $hall->hall_name == 'Khan Jahan Ali Hall' ? 'selected' : '' }}>Khan Jahan Ali Hall</option>
                            <option value="Dr. M.A Rashid Hall" {{ $hall->hall_name == 'Dr. M.A Rashid Hall' ? 'selected' : '' }}>Dr. M.A Rashid Hall</option>
                            <option value="Rokya Hall" {{ $hall->hall_name == 'Rokya Hall' ? 'selected' : '' }}>Rokya Hall (Female)</option>
                            <option value="Amar Ekushey Hall" {{ $hall->hall_name == 'Amar Ekushey Hall' ? 'selected' : '' }}>Amar Ekushey Hall</option>
                            <option value="Bangabandu Sheikh Mujibur Rahman Hall" {{ $hall->hall_name == 'Bangabandu Sheikh Mujibur Rahman Hall' ? 'selected' : '' }}>Bangabandu Sheikh Mujibur Rahman Hall</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image</label>
                        <input type="file" class="form-control" id="image" name="image_path">
                    </div>
                    <div class="mb-3">
                        <label for="provost_roll" class="form-label">Provost Roll</label>
                        <input type="number" class="form-control" id="provost_roll" name="provost_roll" value="{{ $hall->provost_roll }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="assistant_provost_roll" class="form-label">Assistant Provost Roll</label>
                        <input type="number" class="form-control" id="assistant_provost_roll" name="assistant_provost_roll" value="{{ $hall->assistant_provost_roll }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="assistant_provost_roll_2" class="form-label">Assistant Provost Roll 2</label>
                        <input type="number" class="form-control" id="assistant_provost_roll_2" name="assistant_provost_roll_2" value="{{ $hall->assistant_provost_roll_2 }}" required>
                    </div>
                    <button type="submit" class="btn btn-outline-success">Update Hall</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
