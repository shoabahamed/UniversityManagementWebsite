<nav class="navbar navbar-expand-xl  bg-success  c-navbar-section">
  <div class="container-fluid">
    <a class="navbar-brand d-flex flex-row align-items-center" href="{{route('home')}}">
      <img src="{{ asset('./assets/logo.png') }}" width="80" height="80" class="d-inline-block align-text-top">
      <div class="d-flex flex-column ms-2">
        <span class="text-wrap display-7"> Khulna University of Engineering & Technology</span>
        <span class="d-none d-sm-inline-block display-7"> খুলনা প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়</span>
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Navigation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">About</a>
            <ul class="dropdown-menu shadow">
              <li><a class="dropdown-item" href="{{route('history')}}">History</a></li>
              <li><a class="dropdown-item" href="{{ route('home') }}#kuet-at-a-glance">Kuet at a Glance</a></li>
              <li><a class="dropdown-item" href="{{route('gallery')}}">Gallery</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Administration</a>
            <ul class="dropdown-menu shadow">
              {{-- <li class="dropend">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Authority</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href=""> Syndicate</a></li>
                  <li><a class="dropdown-item" href=""> Academic Council</a></li>
                  <li><a class="dropdown-item" href=""> Finance Comittee</a></li>
                  <li><a class="dropdown-item" href=""> Planning and Development Committee</a></li>
                </ul>
              </li> --}}
              <li class="dropend">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Office of Deans</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href="{{route('faculties')}}"> Faculty of Civil Engineering</a></li>
                  <li><a class="dropdown-item" href="{{route('faculties')}}"> Faculty of Elecectrical Engineering</a></li>
                  <li><a class="dropdown-item" href="{{route('faculties')}}"> Faculty of Machanical Engineering</a></li>
                </ul>
              </li>
              <li class="dropend">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Office of Provosts</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href="{{route('fuzlul-hall')}}"> Fazlul Haque Hall</a></li>
                  <li><a class="dropdown-item" href="{{route('lalon-hall')}}"> Lalan Shah Hall</a></li>
                  <li><a class="dropdown-item" href="{{route('kaja-hall')}}"> Khan Jahan Ali Hall</a></li>
                  <li><a class="dropdown-item" href="{{route('rashid-hall')}}"> Dr. M.A Rashid Hall</a></li>
                  <li><a class="dropdown-item" href="{{route('rokeya-hall')}}"> Rokya Hall(Female)</a></li>
                  <li><a class="dropdown-item" href="{{route('umor-hall')}}"> Amar Ekushey Hall</a></li>
                  <li><a class="dropdown-item" href="{{route('bongo-hall')}}"> Bangabandu Sheikh Mujibur Rahman Hall</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Academic</a>
            <ul class="dropdown-menu shadow">
              <li class="dropstart">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Faculty of Civil Engineering</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Civil Engineering</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Urban and Regional Planning</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Building Engineering and Construction Management</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Architecture</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Physics</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Chemistry</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Humanities</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Mathematics</a></li>
                </ul>
              </li>
              <li class="dropstart">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Faculty of Electrial Engineering</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Electrical and Electronic Engineering</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Computer Science and Engineering</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Electronics and Communication Engineering</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Biomedical Engineering</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Materials Science and Engineering</a></li>
                </ul>
              </li>
              <li class="dropstart">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Faculty of Machanical Engineering</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Machanical Engineering</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Industrial Engineering and ManageMent</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Energy Science and Engineering</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Leather Engineering</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Textile Engineering</a></li>
                  <li><a class="dropdown-item" href="{{route('cse')}}"> Department of Chemical Engineering</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Admission</a>
            <ul class="dropdown-menu shadow">
              <li><a class="dropdown-item" href="#">UnderGraduate Admission Test</a></li>
              <li><a class="dropdown-item" href="#">Post Graduate</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Facilities</a>
            <ul class="dropdown-menu shadow">
              <li><a class="dropdown-item" href="#">Central Library</a></li>
              <li><a class="dropdown-item" href="#">Transportation</a></li>
              <li><a class="dropdown-item" href="#">Guest House</a></li>
              <li><a class="dropdown-item" href="#">Central Cafeterial</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Automation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('faqs')}}">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

{{-- 
  <nav class="navbar navbar-expand-lg shadow">
    <div class="container-fluid">
      <a class="navbar-brand d-flex flex-column flex-sm-row align-items-center flex-" href="#">
        <img src="../assets/logo.png" width="45" height="45" class="d-inline-block align-text-top">
        <div class="d-flex flex-column ms-2">
          <span class="fs-6"> Khulna University of Engineering & Technology</span>
          <span class="fs-6"> খুলনা প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়</span>
        </div>
        
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">About</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="#">History</a></li>
                <li><a class="dropdown-item" href="#">Vision & Mission</a></li>
                <li><a class="dropdown-item" href="#">Kuest at a Glance</a></li>
                <li><a class="dropdown-item" href="#">Campus Map</a></li>
                <li><a class="dropdown-item" href="#">Gallery</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Administration</a>
              <ul class="dropdown-menu shadow">
                <li class="dropend">
                  <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Authority</a>
                  <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href=""> Syndicate</a></li>
                    <li><a class="dropdown-item" href=""> Academic Council</a></li>
                    <li><a class="dropdown-item" href=""> Finance Comittee</a></li>
                    <li><a class="dropdown-item" href=""> Planning and Development Committee</a></li>
                  </ul>
                </li>
                <li class="dropend">
                  <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Office of Deans</a>
                  <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href=""> Faculty of Civil Engineering</a></li>
                    <li><a class="dropdown-item" href=""> Faculty of Elecectrical Engineering</a></li>
                    <li><a class="dropdown-item" href=""> Faculty of Machanical Engineering</a></li>
                  </ul>
                </li>
                <li class="dropend">
                  <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Office of Provosts</a>
                  <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href=""> Fazlul Haque Hall</a></li>
                    <li><a class="dropdown-item" href=""> Lalan Shah Hall</a></li>
                    <li><a class="dropdown-item" href=""> Khan Jahan Ali Hall</a></li>
                    <li><a class="dropdown-item" href=""> Dr. M.A Rashid Hall</a></li>
                    <li><a class="dropdown-item" href=""> Rokya Hall(Female)</a></li>
                    <li><a class="dropdown-item" href=""> Amar Ekushey Hall</a></li>
                    <li><a class="dropdown-item" href=""> Bangabandu Sheikh Mujibur Rahman Hall</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Academic</a>
              <ul class="dropdown-menu shadow">
                <li class="dropend">
                  <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Programs</a>
                  <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href=""> UnderGraduate</a></li>
                    <li><a class="dropdown-item" href=""> Post Graduate</a></li>
                    <li><a class="dropdown-item" href=""> Training</a></li>
                  </ul>
                </li>
                <li class="dropend">
                  <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Faculty of Civil Engineering</a>
                  <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href=""> Department of Civil Engineering</a></li>
                    <li><a class="dropdown-item" href=""> Department of Urban and Regional Planning</a></li>
                    <li><a class="dropdown-item" href=""> Department of Building Engineering and Construction Management</a></li>
                    <li><a class="dropdown-item" href=""> Department of Architecture</a></li>
                    <li><a class="dropdown-item" href=""> Department of Physics</a></li>
                    <li><a class="dropdown-item" href=""> Department of Chemistry</a></li>
                    <li><a class="dropdown-item" href=""> Department of Humanities</a></li>
                    <li><a class="dropdown-item" href=""> Department of Mathematics</a></li>
                  </ul>
                </li>
                <li class="dropend">
                  <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Faculty of Electrial Engineering</a>
                  <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href=""> Department of Electrical and Electronic Engineering</a></li>
                    <li><a class="dropdown-item" href=""> Department of Computer Science and Engineering</a></li>
                    <li><a class="dropdown-item" href=""> Department of Electronics and Communication Engineering</a></li>
                    <li><a class="dropdown-item" href=""> Department of Biomedical Engineering</a></li>
                    <li><a class="dropdown-item" href=""> Department of Materials Science and Engineering</a></li>
                  </ul>
                </li>
                <li class="dropend">
                  <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Faculty of Machanical Engineering</a>
                  <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href=""> Department of Machanical Engineering</a></li>
                    <li><a class="dropdown-item" href=""> Department of Industrial Engineering and ManageMent</a></li>
                    <li><a class="dropdown-item" href=""> Department of Energy Science and Engineering</a></li>
                    <li><a class="dropdown-item" href=""> Department of Leather Engineering</a></li>
                    <li><a class="dropdown-item" href=""> Department of Textile Engineering</a></li>
                    <li><a class="dropdown-item" href=""> Department of Chemical Engineering</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Admission</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="#">UnderGraduate Admission Test</a></li>
                <li class="dropend">
                  <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Post Graduate</a>
                  <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href=""> Entry Requirements</a></li>
                    <li><a class="dropdown-item" href=""> How To Apply</a></li>
                    <li><a class="dropdown-item" href=""> Post Graduate Admisson</a></li>
                  </ul>
                </li>
                <li class="dropend">
                  <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Internationl Students</a>
                  <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href=""> Entry Requirements</a></li>
                    <li><a class="dropdown-item" href=""> How To Apply</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Facilities</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="#">Central Library</a></li>
                <li><a class="dropdown-item" href="#">Central Computer Center</a></li>
                <li><a class="dropdown-item" href="#">Transportation</a></li>
                <li><a class="dropdown-item" href="#">Guest House</a></li>
                <li><a class="dropdown-item" href="#">Central Cafeterial</a></li>
                <li class="dropend">
                  <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Student Accomodation</a>
                  <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href=""> Fazlul Haque Hall</a></li>
                    <li><a class="dropdown-item" href=""> Lalan Shah Hall</a></li>
                    <li><a class="dropdown-item" href=""> Khan Jahan Ali Hall</a></li>
                    <li><a class="dropdown-item" href=""> Dr. M.A Rashid Hall</a></li>
                    <li><a class="dropdown-item" href=""> Rokya Hall(Female)</a></li>
                    <li><a class="dropdown-item" href=""> Amar Ekushey Hall</a></li>
                    <li><a class="dropdown-item" href=""> Bangabandu Sheikh Mujibur Rahman Hall</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Research</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="#">Under Graduate Research</a></li>
                <li><a class="dropdown-item" href="#">Post Graduate Research</a></li>
                <li><a class="dropdown-item" href="#">Internationl Conference</a></li>
                <li><a class="dropdown-item" href="#">Journal Published from Kuet</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Automation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav> --}}

{{-- <nav class="navbar navbar-expand-md shadow">
  <div class="container-fluid">
    <button class="navbar-toggler collapsed ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center align-center" id="navbar-content">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">About</a>
          <ul class="dropdown-menu shadow">
            <li><a class="dropdown-item" href="#">History</a></li>
            <li><a class="dropdown-item" href="#">Vision & Mission</a></li>
            <li><a class="dropdown-item" href="#">Kuest at a Glance</a></li>
            <li><a class="dropdown-item" href="#">Campus Map</a></li>
            <li><a class="dropdown-item" href="#">Gallery</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Administration</a>
          <ul class="dropdown-menu shadow">
            <li class="dropend">
              <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Authority</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href=""> Syndicate</a></li>
                <li><a class="dropdown-item" href=""> Academic Council</a></li>
                <li><a class="dropdown-item" href=""> Finance Comittee</a></li>
                <li><a class="dropdown-item" href=""> Planning and Development Committee</a></li>
              </ul>
            </li>
            <li class="dropend">
              <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Office of Deans</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href=""> Faculty of Civil Engineering</a></li>
                <li><a class="dropdown-item" href=""> Faculty of Elecectrical Engineering</a></li>
                <li><a class="dropdown-item" href=""> Faculty of Machanical Engineering</a></li>
              </ul>
            </li>
            <li class="dropend">
              <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Office of Provosts</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href=""> Fazlul Haque Hall</a></li>
                <li><a class="dropdown-item" href=""> Lalan Shah Hall</a></li>
                <li><a class="dropdown-item" href=""> Khan Jahan Ali Hall</a></li>
                <li><a class="dropdown-item" href=""> Dr. M.A Rashid Hall</a></li>
                <li><a class="dropdown-item" href=""> Rokya Hall(Female)</a></li>
                <li><a class="dropdown-item" href=""> Amar Ekushey Hall</a></li>
                <li><a class="dropdown-item" href=""> Bangabandu Sheikh Mujibur Rahman Hall</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Academic</a>
          <ul class="dropdown-menu shadow">
            <li class="dropend">
              <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Programs</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href=""> UnderGraduate</a></li>
                <li><a class="dropdown-item" href=""> Post Graduate</a></li>
                <li><a class="dropdown-item" href=""> Training</a></li>
              </ul>
            </li>
            <li class="dropend">
              <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Faculty of Civil Engineering</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href=""> Department of Civil Engineering</a></li>
                <li><a class="dropdown-item" href=""> Department of Urban and Regional Planning</a></li>
                <li><a class="dropdown-item" href=""> Department of Building Engineering and Construction Management</a></li>
                <li><a class="dropdown-item" href=""> Department of Architecture</a></li>
                <li><a class="dropdown-item" href=""> Department of Physics</a></li>
                <li><a class="dropdown-item" href=""> Department of Chemistry</a></li>
                <li><a class="dropdown-item" href=""> Department of Humanities</a></li>
                <li><a class="dropdown-item" href=""> Department of Mathematics</a></li>
              </ul>
            </li>
            <li class="dropend">
              <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Faculty of Electrial Engineering</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href=""> Department of Electrical and Electronic Engineering</a></li>
                <li><a class="dropdown-item" href=""> Department of Computer Science and Engineering</a></li>
                <li><a class="dropdown-item" href=""> Department of Electronics and Communication Engineering</a></li>
                <li><a class="dropdown-item" href=""> Department of Biomedical Engineering</a></li>
                <li><a class="dropdown-item" href=""> Department of Materials Science and Engineering</a></li>
              </ul>
            </li>
            <li class="dropend">
              <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Faculty of Machanical Engineering</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href=""> Department of Machanical Engineering</a></li>
                <li><a class="dropdown-item" href=""> Department of Industrial Engineering and ManageMent</a></li>
                <li><a class="dropdown-item" href=""> Department of Energy Science and Engineering</a></li>
                <li><a class="dropdown-item" href=""> Department of Leather Engineering</a></li>
                <li><a class="dropdown-item" href=""> Department of Textile Engineering</a></li>
                <li><a class="dropdown-item" href=""> Department of Chemical Engineering</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Admission</a>
          <ul class="dropdown-menu shadow">
            <li><a class="dropdown-item" href="#">UnderGraduate Admission Test</a></li>
            <li class="dropend">
              <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Post Graduate</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href=""> Entry Requirements</a></li>
                <li><a class="dropdown-item" href=""> How To Apply</a></li>
                <li><a class="dropdown-item" href=""> Post Graduate Admisson</a></li>
              </ul>
            </li>
            <li class="dropend">
              <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Internationl Students</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href=""> Entry Requirements</a></li>
                <li><a class="dropdown-item" href=""> How To Apply</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Facilities</a>
          <ul class="dropdown-menu shadow">
            <li><a class="dropdown-item" href="#">Central Library</a></li>
            <li><a class="dropdown-item" href="#">Central Computer Center</a></li>
            <li><a class="dropdown-item" href="#">Transportation</a></li>
            <li><a class="dropdown-item" href="#">Guest House</a></li>
            <li><a class="dropdown-item" href="#">Central Cafeterial</a></li>
            <li class="dropend">
              <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Student Accomodation</a>
              <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href=""> Fazlul Haque Hall</a></li>
                <li><a class="dropdown-item" href=""> Lalan Shah Hall</a></li>
                <li><a class="dropdown-item" href=""> Khan Jahan Ali Hall</a></li>
                <li><a class="dropdown-item" href=""> Dr. M.A Rashid Hall</a></li>
                <li><a class="dropdown-item" href=""> Rokya Hall(Female)</a></li>
                <li><a class="dropdown-item" href=""> Amar Ekushey Hall</a></li>
                <li><a class="dropdown-item" href=""> Bangabandu Sheikh Mujibur Rahman Hall</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Research</a>
          <ul class="dropdown-menu shadow">
            <li><a class="dropdown-item" href="#">Under Graduate Research</a></li>
            <li><a class="dropdown-item" href="#">Post Graduate Research</a></li>
            <li><a class="dropdown-item" href="#">Internationl Conference</a></li>
            <li><a class="dropdown-item" href="#">Journal Published from Kuet</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Automation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
    </div>
  </div>
</nav> --}}
</body>
</html>