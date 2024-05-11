<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="./css/home.css">
		<link rel="stylesheet" href="./css/general.css">
		<link rel="stylesheet" href="./css/footer.css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/31b429dc0a.js" crossorigin="anonymous"></script>
</head>
<body>
    {{-- navbar and carsouel --}}
    <header>
      @include('navbar')
      <div id="hero-section" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active c-carousel-item" data-bs-interval="10000">
              <img src="{{asset('/assets/images/gallery/0.jpg')}}" class="d-block w-100  c-carousel-img" alt="...">
            </div>
            <div class="carousel-item c-carousel-item" data-bs-interval="2000">
              <img src="{{asset('./assets/images/gallery/3.jpg')}}" class="d-block w-100 c-carousel-img" alt="...">
            </div>
            <div class="carousel-item c-carousel-item">
              <img src="{{asset('./assets/images/gallery/14.jpg')}}" class="d-block w-100 c-carousel-img" alt="...">
            </div>
						<div class="carousel-item c-carousel-item">
              <img src="{{asset('./assets/images/gallery/10.jpg')}}" class="d-block w-100 c-carousel-img" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#hero-section" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#hero-section" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
	</header>
	 {{-- welcome and vc message --}}
	<section class="container mt-4">
		<div class="row welcome-section">
				<div class="col-md-8">
						<h2 class="welcome-message">Welcome to KUET</h2>
						<p>
														Khulna University of Engineering & Technology (KUET) is one of the leading public universities of Bangladesh giving special emphasis in the Engineering and Technological Education and research. KUET is well known for offering very high quality educational, research and developmental programs in the major disciplines of engineering as well as basic sciences. It has a sober objective to achieve excellence in quality education, research and progression to address the present needs of the country as well as the South-Western region to make it as the "Center of Excellence".

														Khulna University of Engineering & Technology (KUET), Bangladesh established in 1967 as Khulna Engineering College, starts its long cherished journey in 3 June, 1974 after receiving special direction from the Father of the Nation Bangabandhu Sheikh Mujibur Rahman. Later to ensure the better academic and research capabilities and environment, it is converted to an autonomous institute called Bangladesh Institute of Technology (BIT), Khulna in July 1986. To meet the demands of the days in the academic and research arena, the institute was upgraded and renamed as Khulna University of Engineering & Technology (KUET) in September 2003.
						</p>
						<div>
								<a href="{{route('welcome')}}" class="btn btn-outline-success">Read More</a>
						</div>
				</div>
				<div class="col-md-4 mt-3">
						<div class="vc-message">
								<img src="{{asset('/assets/images/teachers/vc.jpg')}}" alt="VC">
								<div class="vc-details">
										<p class="vc-name">Prof. Dr. Mihir Ranjan Halder</p>
										<p class="vc-designation">Vice-Chancellor</p>
										<p>
												"It feels me prodigious pleasure to write a few words about my best-loved Khulna University of Engineering & Technology (KUET), one of the few leading and promising Engineering Universities of Bangladesh, established in 1967 as Khulna Engineering College in a greenery landscape located about 12 km north away from the Khulna City centre.."
										</p>
										<div>
												<a href="{{route('vc-message')}}" class="btn btn-outline-success">Read More</a>
										</div>
								</div>
						</div>
				</div>
		</div>
	</section>
	{{-- annnoucements and events --}}
	<section class="container mt-5">
		<h1 class="text-center c-section-title">Announcements</h1>
			<!-- Edit this section for important announcements.-->
			<div class="c-announcement d-flex align-items-center justify-content-center mt-4 ps-3">
					Institute invites applications for  &nbsp;<a class="alert-link" href="#"> Combined Admission Test (2023-2024) </a>
			</div>
			<!-- Events -->
			<div class="row justify-content-between">
				<div class="events-content col-12 col-md-3 c-events mt-3">
						<div class="widgets-title d-flex justify-content-center"><h2>Events&News</h2></div>
						<div class='d-flex flex-column'>
								<ul class="d-flex flex-column">
										<li>
												<!-- Events -->
												<div class="event-container">
														<!-- Date -->
														<div class="date">
																		<span>
																				<!-- Day -->
																				<div class="day">9</div>
																				<!-- Month Short Form (first three letters) -->
																				<div class="month">Apr</div>
																		</span>
														</div>
														<!-- Event-Description -->
														<div class="event-text">First Annual Institute Day</div>
												</div>
										</li>
										<li>
												<div class="event-container">
														<!-- Date -->
														<div class="date">
																				<span>
																						<!-- Day -->
																						<div class="day">12</div>
																						<!-- Month Short Form (first three letters) -->
																						<div class="month">Mar</div>
																				</span>
														</div>
														<!-- Event-Description -->
														<div class="event-text">Hackathon 2016</div>
												</div>
										</li>
										<li>
												<div class="event-container">
														<!-- Date -->
														<div class="date">
																				<span>
																						<!-- Day -->
																						<div class="day">5</div>
																						<!-- Month Short Form (first three letters) -->
																						<div class="month">Mar</div>
																				</span>
														</div>
														<!-- Event-Description -->
														<div class="event-text text-wrap">Sports Festival Ventura 2016</div>
												</div>
										</li>
										<li>
												<div class="event-container">
														<!-- Date -->
														<div class="date">
																				<span>
																						<!-- Day -->
																						<div class="day">26</div>
																						<!-- Month Short Form (first three letters) -->
																						<div class="month">Jan</div>
																				</span>
														</div>
														<!-- Event-Description -->
														<div class="event-text">Republic Day</div>
												</div>
										</li>
								</ul>
								<div class="d-flex justify-content-center">
										<a href="{{route('notice')}}" class="btn btn-outline-success ">See More</a>
								</div>  
						</div>
				</div>
				<div class="col-12 col-md-6 d-flex flex-column justify-content-between mt-3">
						<div class="widgets-title d-flex justify-content-center">
										<h2>Notice</h2>
						</div>
						<div class="marquee-container">
										<marquee direction="up" behavior="scroll" scrollamount="5" style="height:450px" onmouseover="this.stop();" onmouseout="this.start();">
											@foreach($notices as $notice)
												<div class="d-flex align-items-center mb-3">
													<div class="event-date">
															<p class="mb-0">{{$notice->created_at->format('M')}}</p>
															<h4 class="mb-0">{{$notice->created_at->format('d')}}</h4>
													</div>
													<div class="event-content text-wrap">
															<a href="assets/pdf/notice/{{$notice['file_path']}}" class="text-decoration-none text-dark">{{$notice['title']}}</a>
													</div>
												</div>
											@endforeach		
										</marquee>
						</div>
						<div class="d-flex justify-content-center mt-5">
										<a href="{{route('notice')}}" class="btn btn-outline-success">See More</a>
						</div>   
				</div>		
			</div>
	</section>

  {{-- faculties --}}
  <section class="mt-5 container-fluid">
    <h1 class="text-center" style="color: #006400;font-weight: bold;">Faculties</h1>
    <p class="text-center" style="font-style: italic">20 Departments in 3 faculties</p>
    <div class="row justify-content-around mt-5">
        <div class="course-col col-12 col-sm-5 col-md-3 border border-success border-2"  onclick="window.location.href='{{route('faculties')}}'">
            <h4 class="text-center">Faculty of Civil Engineering</h4>
            <p class="pt-2">The Faculty of Civil Engineering, Khulna University of Engineering & Technology offers both the undergraduate and post-graduate degrees maintaining its long-standing reputation for excellence in education and research.....</p>
        </div>
        <div class="course-col col-12 col-sm-5 col-md-3 border border-success border-2"  onclick="window.location.href='{{route('faculties')}}'">
            <h4 class="text-center">Faculty of Electrical Engineering</h4>
            <p class="pt-2">Faculty of Electrical and Electronic Engineering (EEE) at Khulna University of Engineering & Technology (KUET) offers unique opportunities for education, research and innovation to meet the increasing demand for highly educated....</p>
        </div>
        <div class="course-col col-12 col-sm-5 col-md-3 border border-success border-2" onclick="window.location.href='{{route('faculties')}}'">
            <h4 class="text-center">Faculty of Mechaical Engineering</h4>
            <p class="pt-2">The Faculty of Civil Engineering, Khulna University of Engineering & Technology offers both the undergraduate and post-graduate degrees maintaining its long-standing reputation for excellence in education and research....</p>
        </div>
    </div>
	</section>
  {{-- kuet info --}}
	<section class="container mt-4 mb-4" id="kuet-at-a-glance">
		<h1 class="text-center c-section-title">Kuet At a Glance</h1>
    <div class="row mt-4">
        <div class="col-md-4 col-sm-6">
            <div class="card text-center border border-success">
                <div class="card-info">
                    <h5 class="card-title">Faculties</h5>
                    <p class="card-text">3</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card text-center border border-success">
                <div class="card-info">
                    <h5 class="card-title">Institutes</h5>
                    <p class="card-text">3</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card text-center border border-success">
                <div class="card-info">
                    <h5 class="card-title">Centers</h5>
                    <p class="card-text">3</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card text-center border border-success">
                <div class="card-info">
                    <h5 class="card-title">Departments</h5>
                    <p class="card-text">20</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card text-center border border-success">
                <div class="card-info">
                    <h5 class="card-title">Teachers</h5>
                    <p class="card-text">349</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card text-center border border-success">
                <div class="card-info">
                    <h5 class="card-title">Officers and Staff</h5>
                    <p class="card-text">489</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card text-center border border-success">
                <div class="card-info">
                    <h5 class="card-title">Students</h5>
                    <p class="card-text">5240</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card text-center border border-success">
                <div class="card-info">
                    <h5 class="card-title">Graduates</h5>
                    <p class="card-text">13000</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card text-center border border-success">
                <div class="card-info">
                    <h5 class="card-title">Buildings</h5>
                    <p class="card-text">25</p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card text-center border border-success">
                <div class="card-info">
                    <h5 class="card-title">Location</h5>
                    <p class="card-text">FulbariGate, Kuet, Khulna, Bangladesh</p>
                </div>
            </div>
        </div>
    </div>
	</section>

	@include('footer')

 

</body>
</html>