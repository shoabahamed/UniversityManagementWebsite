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

    .event-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin: 10px 0;
        }
        .event-card h5 {
            color: #006400;
        }
  </style>
</head>
<body>
 
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
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
              <a class="nav-link" style="cursor: pointer" data-target="Notice">Notices</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="cursor: pointer" data-target="Event">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="cursor: pointer" data-target="Registration">Register User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="cursor: pointer" data-target="Course Reg">Register Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="cursor: pointer" data-target="Teacher">Teachers</a>
            </li>
            <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <button class="nav-link"  type="submit">Logout</button>
              </form>
            </li>
        </div>
      </div>
    </div>
  </nav>
  

  <div class="container my-4">
    @if(session('success'))
    <div class="alert alert-success" id="successMessage" role="alert">
        {{ session('success') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="section" style="background:#f8f9fa;" id="Notice">
      <h1 class="text-center display-5" style="color: #006400;">All Notices</h1>
      <div class="d-flex justify-content-center mt-4">
        <a class="btn btn-outline-success" href="{{route('add-new-notice-page')}}">Add New Notice</a>
      </div>
      <div class="row">
        @foreach($notices as $notice)
          <div class="col-10 offset-1 notices align-items-center border-bottom border-success border-2 py-4">
            <div class="fs-5 fw-bold">{{$notice->created_at->format('d M Y')}}</div>
            <div class="fs-5">{{$notice['title']}}</div>
            <a href="{{ route('delete-notice', ['notice' => $notice->id]) }}" class="btn btn-outline-danger border fs-5">Delete</a>
          </div>
        @endforeach
      </div>
    </div>

    <div class="section" style="background:#f8f9fa;" id="Event">
      <h1 class="text-center display-5" style="color: #006400;">All Events</h1>
      <div class="d-flex justify-content-center mt-4">
        <a class="btn btn-outline-success" href="{{route('add-new-event-page')}}">Add New Event</a>
      </div>

      <div class="row mt-4">
        @foreach($events as $event)
            <div class="col-md-4 mb-3">
                <div class="event-card  border-success border-2">
                    <h5 class="card-title display-6">{{ $event->title }}</h5>
                    <p class="card-text mt-3"><strong>Date:</strong> {{ $event->date->format('d M Y') }}</p>
                    <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
                    <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                    <a href="{{ route('update-event-page', ['event' => $event->id]) }}" class="btn btn-outline-success">Update</a>
                    <a href="{{ route('delete-event', ['event' => $event->id]) }}" class="btn btn-outline-danger">Delete</a>
                </div>
            </div>
        @endforeach

      </div>
    </div>

    <div class="section d-none" id="Registration">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Registration Form</div>
            <div class="card-body">
              <form action="{{route('user-register')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="roll">Roll:</label>
                  <input type="number" class="form-control" id="roll" name="roll" placeholder="Enter Roll" required>
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                  <label for="is_admin">Is Admin:</label>
                  <select class="form-control" id="is_admin" name="is_admin" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                  <label for="image">Upload Image:</label>
                  <input type="file" class="form-control-file" id="image" name="image_path" required>
                </div>
                <div class="form-group">
                  <label for="father">Father's Name:</label>
                  <input type="text" class="form-control" id="father" name="father_name" placeholder="Enter Father's Name" required>
                </div>
                <div class="form-group">
                  <label for="mother">Mother's Name:</label>
                  <input type="text" class="form-control" id="mother" name="mother_name" placeholder="Enter Mother's Name" required>
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile No:</label>
                  <input type="number" class="form-control" id="mobile" name="mobile_no" placeholder="Enter Mobile No" required>
                </div>
                <div class="form-group">
                  <label for="address">Address:</label>
                  <textarea class="form-control" id="address" name="address" rows="2" placeholder="Enter Address" required></textarea>
                </div>
                <div class="form-group">
                  <label for="hall">Hall Name:</label>
                  <select class="form-control" id="hall" name="hall_name" required>
                    <option value="">Select Hall</option>
                    <option value="Fazlul Haq Hall">Fazlul Haq Hall</option>
                    <option value="Khan jahan ali hall">Khan jahan ali hall</option>
                    <option value="Dr. MA Rashid Hall">Dr. MA Rashid Hall</option>
                    <option value="Bongobondo Hall">Bongobondo Hall</option>
                    <option value="Amar Ekose Hall">Amar Ekose Hall</option>
                    <option value="Lalon Shah Hall">Lalon Shah Hall</option>
                    <option value="Begom Rokeya Hall">Begom Rokeya Hall</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="blood-group">Blood Group:</label>
                  <select class="form-control" id="blood-group" name="blood_group" required>
                    <option value="">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="gender">Gender:</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                    <label class="form-check-label" for="male">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                    <label class="form-check-label" for="female">
                      Female
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-outline-success btn-block">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section d-none" id="Course Reg">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Add Course</div>
            <div class="card-body">
              <form action="{{route('course-register')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="selected_section" value="Course Reg">
                <div class="form-group">
                  <label for="course_dept" class="form-label">Course Department</label>
                  <select name="course_dept" class="form-control" id="course_dept" required>
                      <option value="">Select Department</option>
                      <option value="chem">Department of Chemistry</option>
                      <option value="math">Department of Mathematics</option>
                      <option value="eee">Department of Electrical and Electronic Engineering</option>
                      <option value="cse">Department of Computer Science and Engineering</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="course_code">Course Code (4 digit number)</label>
                  <input type="number" class="form-control" id="course_code" name="course_code" placeholder="Enter course code" required>
                </div>
                <div class="form-group">
                  <label for="course_name">Course Name</label>
                  <input type="text" class="form-control" id="course_name" name="course_name" placeholder="Enter course name" required>
                </div>
                <div class="form-group">
                  <label for="course_score">Course Score (floating number)</label>
                  <input type="number" step="0.01" class="form-control" id="course_score" name="course_score" placeholder="Enter course score" required>
                </div>
                <button type="submit" class="btn btn-outline-success btn-block">Add</button>
              </form>
            </div>
          </div>
        </div>
      </div>
        
    </div>

    <div class="section d-none" id="Teacher">
      <div class="container">
          <h2 class="text-center display-5" style="color: #006400;">All Teachers</h2>
          <div class="d-flex justify-content-center mt-4">
            <a class="btn btn-outline-success" href="{{route('add-new-teacher-page')}}">Add New Teacher</a>
          </div>
          <div class="d-flex justify-content-center mt-4">
            <form action="{{ route('admin-dashboard') }}" method="GET">
              <input type="hidden" name="selected_section" value="Teacher"> <!-- Add hidden input field to store the selected section's ID -->
              <label for="role">Filter by Role:</label>
              <select name="role" id="role">
                  <option value="">All</option>
                  <option value="deans" @if(request('role') == 'deans') selected @endif>Deans</option>
                  <option value="heads" @if(request('role') == 'heads') selected @endif>Heads</option>
              </select>
              <button type="submit" class="btn btn-outline-primary">Apply Filter</button>
          </form>
          
          </div>
          <div class="row mt-4">
              @foreach($teachers as $teacher)
                  <div class="col-md-3 col-sm-12">
                      <div class="teacher-card d-flex flex-column justify-content-between">
                          <div class="d-flex justify-content-center">             
                              <img src="assets/images/teachers/{{$teacher->image_path}}" alt="Teacher">
                          </div>
                          <div class="teacher-info">
                              <h4>{{ $teacher->name }}</h4>
                              <p><strong>Department:</strong> {{ $teacher->dept }}</p>
                              <p><strong>Phone:</strong> {{ $teacher->phone }}</p>
                              <p><strong>Email:</strong> {{ $teacher->email }}</p>
                              <p><strong>Fax:</strong> {{ $teacher->fax }}</p>
                          </div>
                          <div class="d-flex justify-content-around">
                            <a href="{{ route('update-teacher-page', ['teacher' => $teacher->id]) }}" class="btn btn-outline-success">Update</a>          
                            <a  href="{{ route('delete-teacher', ['teacher' => $teacher->id]) }}" class="btn btn-outline-danger @if($teacher->is_dean == 1 || $teacher->is_head == 1) d-none @endif">Delete</a>
                          </div>
                      </div>
                  </div>
              @endforeach
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

    document.addEventListener('DOMContentLoaded', function() {
        const selectedSectionId = '{{ $selectedSection }}';
        const selectedSection = document.getElementById(selectedSectionId);
        if (selectedSection) {
            // Hide all sections first
            document.querySelectorAll('.section').forEach(section => {
                section.classList.add('d-none');
            });
            // Display the selected section
            selectedSection.classList.remove('d-none');
        }
    });


    // Hide the success message after 5 seconds
    setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
    }, 5000);

  </script>

</body>
</html>


