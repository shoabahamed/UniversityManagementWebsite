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
              <a class="nav-link" href="#" data-target="Profile">Personal Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-target="Registration">Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-target="Result">Result</a>
            </li>
            <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <button class="nav-link" data-target="Result" type="submit">Logout</button>
              </form>
            </li>
        </div>
      </div>
    </div>
  </nav>
  
 
  <div class="container my-4">
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
                    <span class="info-label">Mobile Number:</span> {{$userDetails['mobile_no']}} <button class="btn btn-outline-success">Update</button>
                </div>
                <div class="info-item">
                    <span class="info-label">Father's Name:</span> {{$userDetails['father_name']}}
                </div>
                <div class="info-item">
                    <span class="info-label">Mother's Name:</span> {{$userDetails['mother_name']}}
                </div>
                <div class="info-item">
                    <span class="info-label">Address:</span> {{$userDetails['address']}} <button class="btn btn-outline-success">Update</button>
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
            </div>
        </div>
    </div>

    <div class="section d-none" id="Registration">
      registration Section
    </div>
    <div class="section d-none" id="Result">
      Result 
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

</body>
</html>


