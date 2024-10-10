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
            <h2 class="text-center mb-4" style="color: #006400;">Add New Teacher</h2>
            <form class="login-form" action="{{ route('add-new-teacher') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                </div>
                <div class="mb-3">
                    <label for="teacher_roll" class="form-label">Roll</label>
                    <input type="number" name="teacher_roll" class="form-control" id="teacher_roll" placeholder="Roll Number" required>
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label">Upload Image</label>
                  <input type="file" class="form-control" id="image" name="image_path" required>
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Teacher's Department</label>
                    <select name="dept" class="form-control" id="department" required>
                        <option value="">Select Department</option>
                        <option value="Department of Civil Engineering">Department of Civil Engineering</option>
                        <option value="Department of Urban and Regional Planning">Department of Urban and Regional Planning</option>
                        <option value="Department of Building Engineering and Construction Management">Department of Building Engineering and Construction Management</option>
                        <option value="Department of Architecture">Department of Architecture</option>
                        <option value="Department of Physics">Department of Physics</option>
                        <option value="Department of Chemistry">Department of Chemistry</option>
                        <option value="Department of Humanities">Department of Humanities</option>
                        <option value="Department of Mathematics">Department of Mathematics</option>
                        <option value="Department of Electrical and Electronic Engineering">Department of Electrical and Electronic Engineering</option>
                        <option value="Department of Computer Science and Engineering">Department of Computer Science and Engineering</option>
                        <option value="Department of Electronics and Communication Engineering">Department of Electronics and Communication Engineering</option>
                        <option value="Department of Biomedical Engineering">Department of Biomedical Engineering</option>
                        <option value="Department of Materials Science and Engineering">Department of Materials Science and Engineering</option>
                        <option value="Department of Mechanical Engineering">Department of Mechanical Engineering</option>
                        <option value="Department of Industrial Engineering and Management">Department of Industrial Engineering and Management</option>
                        <option value="Department of Energy Science and Engineering">Department of Energy Science and Engineering</option>
                        <option value="Department of Leather Engineering">Department of Leather Engineering</option>
                        <option value="Department of Textile Engineering">Department of Textile Engineering</option>
                        <option value="Department of Chemical Engineering">Department of Chemical Engineering</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" class="form-control" id="role" required>
                        <option value="">Select Role</option>
                        <option value="lecturer">Lecturer</option>
                        <option value="assstant professor">Assstant Professor</option>
                        <option value="professor">Professor</option>
                   </select>
                </div>
                <div class="mb-3">
                    <label for="is_dean">Is Dean:</label>
                    <select class="form-control" id="is_dean" name="is_dean" required>
                      <option value="" selected disabled>Select</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                </div>
                <div class="mb-3" id="dean-options" style="display: none;">
                    <label for="dean_faculty" class="form-label">Dean of Faculty</label>
                    <select name="dean_faculty" class="form-control" id="dean_faculty">
                        <option value="">Select Faculty</option>
                        <option value="ce">Faculty of Civil Engineering</option>
                        <option value="me">Faculty of Mechanical Engineering</option>
                        <option value="eee">Faculty of Electrical and Electronic Engineering</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="is_head">Is Head:</label>
                    <select class="form-control" id="is_head" name="is_head" required>
                      <option value="" selected disabled>Select</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                </div>

                <div class="mb-3" id="head-options" style="display: none;">
                    <label for="head_department" class="form-label">Dean of Department</label>
                    <select name="head_department" class="form-control" id="head_department">
                        <option value="">Select Department</option>
                        <option value="Department of Civil Engineering">Department of Civil Engineering</option>
                        <option value="Department of Urban and Regional Planning">Department of Urban and Regional Planning</option>
                        <option value="Department of Building Engineering and Construction Management">Department of Building Engineering and Construction Management</option>
                        <option value="Department of Architecture">Department of Architecture</option>
                        <option value="Department of Physics">Department of Physics</option>
                        <option value="Department of Chemistry">Department of Chemistry</option>
                        <option value="Department of Humanities">Department of Humanities</option>
                        <option value="Department of Mathematics">Department of Mathematics</option>
                        <option value="Department of Electrical and Electronic Engineering">Department of Electrical and Electronic Engineering</option>
                        <option value="Department of Computer Science and Engineering">Department of Computer Science and Engineering</option>
                        <option value="Department of Electronics and Communication Engineering">Department of Electronics and Communication Engineering</option>
                        <option value="Department of Biomedical Engineering">Department of Biomedical Engineering</option>
                        <option value="Department of Materials Science and Engineering">Department of Materials Science and Engineering</option>
                        <option value="Department of Mechanical Engineering">Department of Mechanical Engineering</option>
                        <option value="Department of Industrial Engineering and Management">Department of Industrial Engineering and Management</option>
                        <option value="Department of Energy Science and Engineering">Department of Energy Science and Engineering</option>
                        <option value="Department of Leather Engineering">Department of Leather Engineering</option>
                        <option value="Department of Textile Engineering">Department of Textile Engineering</option>
                        <option value="Department of Chemical Engineering">Department of Chemical Engineering</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                </div>
                <div class="mb-3">
                    <label for="fax" class="form-label">Fax</label>
                    <input type="number" name="fax" class="form-control" id="fax" placeholder="Fax" required>
                </div>
                <button type="submit" class="btn btn-outline-success login-btn">Add</button>
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
    if (this.value == '1') {
        deanOptions.style.display = 'block';
    } else {
        deanOptions.style.display = 'none';
    }
    });
</script>

</body>
</html>


