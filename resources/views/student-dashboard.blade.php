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
        .profile-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 20px;
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: block;
        }
        .info-item {
            margin-bottom: 20px;
        }
        .info-label {
            font-weight: bold;
            width: 150px;
            display: inline-block;
        }

        /* CSS for the Course Registration section */


.card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  padding: 30px;
}

.card-title {
  color: #006400;
  font-size: 1.5rem;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

 label {
  font-weight: bold;
}

select.form-control {
  border-radius: 0;
}


  </style>
</head>
<body>
 
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- Logo with Navbar Brand -->
      <a class="navbar-brand d-flex flex-row align-items-center" href="{{route('home')}}">
        <img src="{{asset('/assets/images/extras/logo.png')}}" width="80" height="80" class="d-inline-block align-text-top">
        <div class="d-flex flex-column ms-2">
          <span class="text-wrap display-7"> Khulna University of Engineering & Technology</span>
          <span class="d-none d-sm-inline-block display-7"> খুলনা প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়</span>
        </div>
      </a>
      <!-- Toggler Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Offcanvas Menu -->
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Academic System</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <!-- Navbar Links -->
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="cursor: pointer" data-target="Profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="cursor: pointer" data-target="Course Reg">Register Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="cursor: pointer" data-target="Show Course">Show Course</a>
            </li>
            <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <button class="nav-link" type="submit">Logout</button>
              </form>
            </li>
        </div>
      </div>
    </div>
  </nav>


  
 
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

    @if(session('success'))
      <div class="alert alert-success" id="successMessage" role="alert">
          {{ session('success') }}
      </div>
    @endif

    <div class="section" style="background:#f8f9fa;" id="Profile">
      <h1 class="display-4 text-center mb-4" style="color: #006400;">Personal Information</h1>
      <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="profile-card">
                <div class="text-center">
                    <img src="assets/images/users/{{$userDetails['image_path']}}" alt="Profile Picture" class="profile-picture">
                </div>
                <h2 class="text-center mb-4">{{$userDetails['name']}}</h2>
                <div class="info-item">
                  <span class="info-label">Roll Number:</span> {{$user['roll']}}
              </div>
                <div class="info-item">
                    <span class="info-label">Mobile Number:</span> {{$userDetails['mobile_no']}} 
                </div>
                <div class="info-item">
                    <span class="info-label">Father's Name:</span> {{$userDetails['father_name']}}
                </div>
                <div class="info-item">
                    <span class="info-label">Mother's Name:</span> {{$userDetails['mother_name']}}
                </div>
                <div class="info-item">
                    <span class="info-label">Address:</span> {{$userDetails['address']}} 
                </div>
                <div class="info-item">
                    <span class="info-label">Hall Name:</span> {{$userDetails['hall_name']}}
                </div>
                <div class="info-item">
                    <span class="info-label">Blood Group:</span> {{$userDetails['blood_group']}}
                </div>
                <div class="info-item">
                    <span class="info-label">Gender:</span> {{$userDetails['gender']}}
                </div>
                <div class="info-item">
                    <span class="info-label">Email:</span> {{$userDetails['email']}}
                </div>
                <div class="info-item">
                    <span class="info-label">Password:</span> ********
                </div>
                <div class='d-flex justify-content-center'>
                  <a href="{{route('update-user-information-page',  ['user' => $user->id])}}" class="btn btn-outline-success">Update User</a>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="section d-none" id="Course Reg">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Courses</h5>
                <form method="POST" action="{{ route('add-user-course') }}">
                  @csrf
                  <input type="hidden" name="selected_section" value="Course Reg">
                  <div class="form-group">
                      <label for="selectDept">Select Department</label>
                      <select class="form-control" id="selectDept" name="department">
                          <option value="">Choose...</option>
                          @foreach($departments as $department)
                              <option value="{{ $department }}">{{ $department }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="selectCourse">Select Course</label>
                      <select class="form-control" id="selectCourse" name="course">
                          <option value="">Choose...</option>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-outline-success">Submit</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div> 

    <div class="section d-none" id="Show Course">
      <div class="container">
          <h5 class="display-4 text-center mb-4" style="color: #006400;">Registered Courses</h5>
          <div class="table-responsive">
              <table class="table table-bordered">
                  <thead class="table-success">
                      <tr>
                          <th>Course Name</th>
                          <th>Course Code</th>
                          <th>Course Score</th>
                          <th>Remove Course</th>
                      </tr>
                  </thead>
                  <tbody>
                      @php
                          $totalScore = 0;
                      @endphp
                      @foreach($submittedCourses as $course)
                          <tr>
                              <td>{{ $course->course_name }}</td>
                              <td class="text-uppercase">{{$course->course_dept}}-{{ $course->course_code }}</td>
                              <td>{{ $course->course_score }}</td>
                              <td>
                                  <form action="{{ route('delete-user-course', ['regCourse' => $course->id]) }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="selected_section" value="Show Course">
                                      <button class="btn btn-outline-danger">Delete</button>
                                  </form>
                              </td>
                          </tr>
                          @php
                              $totalScore += $course->course_score;
                          @endphp
                      @endforeach
                  </tbody>
                  <tfoot>
                      <tr>
                          <td colspan="1"></td>
                          <td class="fw-bold">Total Score:</td>
                          <td class="fw-bold">{{ $totalScore }}</td>
                          <td class="fw-bold">Result:</td>
                      </tr>
                  </tfoot>
              </table>
          </div>
      </div>
  </div>
  
  </div>

  <script>
    // Select all navigation links and sections
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.section');

    navLinks.forEach(navLink => {
      navLink.addEventListener('click', function() {
        const targetSectionId = this.getAttribute('data-target');

        sections.forEach(section => {
          section.classList.add('d-none');
        });

        const targetSection = document.getElementById(targetSectionId);
        targetSection.classList.remove('d-none');
      });
    });
  </script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      const selectDept = document.getElementById('selectDept');
      const selectCourse = document.getElementById('selectCourse');

      // Event listener for change in department dropdown
      selectDept.addEventListener('change', function() {
          const selectedDept = this.value;
          const courses = @json($courses);

          // Clear existing options
          selectCourse.innerHTML = '<option value="">Choose...</option>';

          // Filter courses based on selected department
          const filteredCourses = Object.entries(courses).filter(([id, course]) => {
              return course.department === selectedDept;
          });

          // Add filtered courses as options to the course dropdown
          filteredCourses.forEach(([id, course]) => {
              const option = document.createElement('option');
              option.value = id;
              option.textContent = course.name;
              selectCourse.appendChild(option);
          });
      });
  });
</script>

<script>
      // Hide the success message after 5 seconds
      setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
    }, 5000);



</script>



</body>
</html>


