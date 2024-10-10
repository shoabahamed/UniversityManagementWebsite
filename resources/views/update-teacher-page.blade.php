<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



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
            <h2 class="text-center mb-4" style="color: #006400;">Update Teacher Information</h2>
            <form class="login-form" action="{{ route('update-teacher', ['teacher' => $teacher->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$teacher->name}}" placeholder="Name" required>
                </div>
                <div class="mb-3">
                    <label for="teacher_roll" class="form-label">Roll</label>
                    <input type="number" name="teacher_roll" class="form-control" id="teacher_roll" value="{{$teacher->teacher_roll}}" placeholder="Roll Number" required>
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label">Upload Image</label>
                  <input type="file" class="form-control" id="image" name="image_path">
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Teacher's Department</label>
                    <select name="dept" class="form-control" id="department" value="{{$teacher->dept}}" required>
                        <option value="">Select Department</option>
                        <option value="Department of Civil Engineering" {{ $teacher->dept === 'Department of Civil Engineering' ? 'selected' : '' }}>Department of Civil Engineering</option>
                        <option value="Department of Urban and Regional Planning" {{ $teacher->dept === 'Department of Urban and Regional Planning' ? 'selected' : '' }}>Department of Urban and Regional Planning</option>
                        <option value="Department of Building Engineering and Construction Management" {{ $teacher->dept === 'Department of Building Engineering and Construction Management' ? 'selected' : '' }}>Department of Building Engineering and Construction Management</option>
                        <option value="Department of Architecture" {{ $teacher->dept === 'Department of Architecture' ? 'selected' : '' }}>Department of Architecture</option>
                        <option value="Department of Physics" {{ $teacher->dept === 'Department of Physics' ? 'selected' : '' }}>Department of Physics</option>
                        <option value="Department of Chemistry" {{ $teacher->dept === 'Department of Chemistry' ? 'selected' : '' }}>Department of Chemistry</option>
                        <option value="Department of Humanities" {{ $teacher->dept === 'Department of Humanities' ? 'selected' : '' }}>Department of Humanities</option>
                        <option value="Department of Mathematics" {{ $teacher->dept === 'Department of Mathematics' ? 'selected' : '' }}>Department of Mathematics</option>
                        <option value="Department of Electrical and Electronic Engineering" {{ $teacher->dept === 'Department of Electrical and Electronic Engineering' ? 'selected' : '' }}>Department of Electrical and Electronic Engineering</option>
                        <option value="Department of Computer Science and Engineering" {{ $teacher->dept === 'Department of Computer Science and Engineering' ? 'selected' : '' }}>Department of Computer Science and Engineering</option>
                        <option value="Department of Electronics and Communication Engineering" {{ $teacher->dept === 'Department of Electronics and Communication Engineering' ? 'selected' : '' }}>Department of Electronics and Communication Engineering</option>
                        <option value="Department of Biomedical Engineering" {{ $teacher->dept === 'Department of Biomedical Engineering' ? 'selected' : '' }}>Department of Biomedical Engineering</option>
                        <option value="Department of Materials Science and Engineering" {{ $teacher->dept === 'Department of Materials Science and Engineering' ? 'selected' : '' }}>Department of Materials Science and Engineering</option>
                        <option value="Department of Mechanical Engineering" {{ $teacher->dept === 'Department of Mechanical Engineering' ? 'selected' : '' }}>Department of Mechanical Engineering</option>
                        <option value="Department of Industrial Engineering and Management" {{ $teacher->dept === 'Department of Industrial Engineering and Management' ? 'selected' : '' }}>Department of Industrial Engineering and Management</option>
                        <option value="Department of Energy Science and Engineering" {{ $teacher->dept === 'Department of Energy Science and Engineering' ? 'selected' : '' }}>Department of Energy Science and Engineering</option>
                        <option value="Department of Leather Engineering" {{ $teacher->dept === 'Department of Leather Engineering' ? 'selected' : '' }}>Department of Leather Engineering</option>
                        <option value="Department of Textile Engineering" {{ $teacher->dept === 'Department of Textile Engineering' ? 'selected' : '' }}>Department of Textile Engineering</option>
                        <option value="Department of Chemical Engineering" {{ $teacher->dept === 'Department of Chemical Engineering' ? 'selected' : '' }}>Department of Chemical Engineering</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label" >Role</label>
                    <select name="role" class="form-control" id="role" required>
                        <option value="">Select Role</option>
                        <option value="lecturer" {{ $teacher->role === 'lecturer' ? 'selected' : '' }}>Lecturer</option>
                        <option value="assstant professor" {{ $teacher->role === 'assstant professor' ? 'selected' : '' }}>Assistant Professor</option>
                        <option value="professor" {{ $teacher->role === 'professor' ? 'selected' : '' }}>Professor</option>
                   </select>
                </div>

                <div class="mb-3  {{ $teacher->is_dean === 1 ? 'd-none' : '' }}">
                  <label for="is_dean">Is Dean:</label>
                  <select class="form-control" id="is_dean" name="is_dean">
                    <option value="">Select</option>
                    <option value="1" {{ $teacher->is_dean === 1 ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ $teacher->is_dean === 0 ? 'selected' : '' }}>No</option>
                  </select>
                </div>

              <div class="mb-3" id="dean-options" style="display: none;">
                  <label for="dean_faculty" class="form-label">Dean of Faculty</label>
                  <select name="dean_faculty" class="form-control" id="dean_faculty">
                      <option value="">Select Faculty</option>
                      <option value="ce" {{ $teacher->dean_faculty === 'ce' ? 'selected' : '' }}>Faculty of Civil Engineering</option>
                      <option value="me" {{ $teacher->dean_faculty === 'me' ? 'selected' : '' }}>Faculty of Mechanical Engineering</option>
                      <option value="eee" {{ $teacher->dean_faculty === 'eee' ? 'selected' : '' }}>Faculty of Electrical and Electronic Engineering</option>
                  </select>
              </div>


              <div class="mb-3 {{ $teacher->is_head === 1 ? 'd-none' : '' }}">
                  <label for="is_head">Is Head:</label>
                  <select class="form-control" id="is_head" name="is_head">
                    <option value="" {{ is_null($teacher->is_head) ? 'selected disabled' : '' }}>Select</option>
                    <option value="1" {{ $teacher->is_head == 1 ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ $teacher->is_head == 0 ? 'selected' : '' }}>No</option>
                </select>
              </div>

              <div class="mb-3" id="head-options" style="display: none;">
                  <label for="head_department" class="form-label">Dean of Department</label>
                  <select name="head_department" class="form-control" id="head_department">
                      <option value="">Select Department</option>
                      <option value="Department of Civil Engineering" {{ $teacher->head_department === 'Department of Civil Engineering' ? 'selected' : '' }}>Department of Civil Engineering</option>
                      <option value="Department of Urban and Regional Planning" {{ $teacher->head_department === 'Department of Urban and Regional Planning' ? 'selected' : '' }}>Department of Urban and Regional Planning</option>
                      <option value="Department of Building Engineering and Construction Management" {{ $teacher->head_department === 'Department of Building Engineering and Construction Management' ? 'selected' : '' }}>Department of Building Engineering and Construction Management</option>
                      <option value="Department of Architecture" {{ $teacher->head_department === 'Department of Architecture' ? 'selected' : '' }}>Department of Architecture</option>
                      <option value="Department of Physics" {{ $teacher->head_department === 'Department of Physics' ? 'selected' : '' }}>Department of Physics</option>
                      <option value="Department of Chemistry" {{ $teacher->head_department === 'Department of Chemistry' ? 'selected' : '' }}>Department of Chemistry</option>
                      <option value="Department of Humanities" {{ $teacher->head_department === 'Department of Humanities' ? 'selected' : '' }}>Department of Humanities</option>
                      <option value="Department of Mathematics" {{ $teacher->head_department === 'Department of Mathematics' ? 'selected' : '' }}>Department of Mathematics</option>
                      <option value="Department of Electrical and Electronic Engineering" {{ $teacher->head_department === 'Department of Electrical and Electronic Engineering' ? 'selected' : '' }}>Department of Electrical and Electronic Engineering</option>
                      <option value="Department of Computer Science and Engineering" {{ $teacher->head_department === 'Department of Computer Science and Engineering' ? 'selected' : '' }}>Department of Computer Science and Engineering</option>
                      <option value="Department of Electronics and Communication Engineering" {{ $teacher->head_department === 'Department of Electronics and Communication Engineering' ? 'selected' : '' }}>Department of Electronics and Communication Engineering</option>
                      <option value="Department of Biomedical Engineering" {{ $teacher->head_department === 'Department of Biomedical Engineering' ? 'selected' : '' }}>Department of Biomedical Engineering</option>
                      <option value="Department of Materials Science and Engineering" {{ $teacher->head_department === 'Department of Materials Science and Engineering' ? 'selected' : '' }}>Department of Materials Science and Engineering</option>
                      <option value="Department of Mechanical Engineering" {{ $teacher->head_department === 'Department of Mechanical Engineering' ? 'selected' : '' }}>Department of Mechanical Engineering</option>
                      <option value="Department of Industrial Engineering and Management" {{ $teacher->head_department === 'Department of Industrial Engineering and Management' ? 'selected' : '' }}>Department of Industrial Engineering and Management</option>
                      <option value="Department of Energy Science and Engineering" {{ $teacher->head_department === 'Department of Energy Science and Engineering' ? 'selected' : '' }}>Department of Energy Science and Engineering</option>
                      <option value="Department of Leather Engineering" {{ $teacher->head_department === 'Department of Leather Engineering' ? 'selected' : '' }}>Department of Leather Engineering</option>
                      <option value="Department of Textile Engineering" {{ $teacher->head_department === 'Department of Textile Engineering' ? 'selected' : '' }}>Department of Textile Engineering</option>
                      <option value="Department of Chemical Engineering" {{ $teacher->head_department === 'Department of Chemical Engineering' ? 'selected' : '' }}>Department of Chemical Engineering</option>
                  </select>
              </div> 

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{$teacher->email}}" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="number" name="phone" class="form-control" id="phone" value="{{$teacher->phone}}" placeholder="Phone Number" required>
                </div>
                <div class="mb-3">
                    <label for="fax" class="form-label">Fax</label>
                    <input type="number" name="fax" class="form-control" value="{{$teacher->fax}}" id="fax" placeholder="Fax">
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


