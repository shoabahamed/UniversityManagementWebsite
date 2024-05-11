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
    <link rel="stylesheet" href="./css/faculties.css">
		<link rel="stylesheet" href="./css/footer.css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    {{-- navbar--}}
    <header>
      @include('navbar')
    </header>


    <section class="container mt-4 mb-4">
      <div class="row welcome-section">
          <div class="col-md-8">
              <h2 class="faculty-name">Faculty of Civil Engineering</h2>
              <p>
                The Faculty of Civil Engineering, Khulna University of Engineering & Technology offers both the undergraduate and post-graduate degrees maintaining its long-standing reputation for excellence in education and research, both nationally and internationally. Presently, it comprises eight departments: (i) Civil Engineering,(ii) Building Engineering & Construction Management, (iii) Urban and Regional Planning, (iv) Architecture, Civil Engineering offers B.Sc. Eng. degree since 1974, M.Sc. Eng. and Ph.D. since 1994 Urban & Regional Planning offers BURP since 2010 and MURP since 2017 and Building Engineering & Construction Management offers B.Sc. Eng. since 2013. Mathematics, Chemistry, and Physics offers M.Phill and Ph.D. since 2000. The undergraduate and postgraduate curriculum have a long tradition of providing a firm ground in engineering fundamentals, design and innovative knowledge. Our faculty members are rigorously trained experienced in the respective fields as well as conduct advanced research. The Faculty publishes the Journal of Engineering Science (JES) twice in a year (June and December) since 2010 (p-ISSN 2075-4914; e-ISSN 2706-6835). With all the existing accomplishments, Faculty of Civil Engineering has full confidence to provide international standard degrees to face the new and inherent challenges both in home and abroad.
              </p>
              <hr>
              <h5 class="names">Departments</h5>
              <ul class="list-unstyled departments">
                <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                </i>
                  Department of Civil Engineering</span></a></li>
                <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                  Department of Urban and Regional Planning</a></li>
                <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                  Department of Building Engineering & Construction Managementg</a></li>
                <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                  Department of Architecture</a></li>
              </ul>
              <hr>
              <h5 class="names">Contancts</h5>
              <p class="card-text mb-1">	{{$ceDean->name}}</p>
              <p class="card-text mb-1">Dean, Faculty of Civil Engineering</p>
              <p class="card-text mb-1">Email: <a href="#">{{$ceDean->email}}</a></p>
              <p class="card-text mb-1">Phone: +{{$ceDean->phone}}</p>
              <p class="card-text mb-1">Fax: +{{$ceDean->fax}}</p>
          </div>
          <div class="col-md-4 mt-3">
              <div class="message">
                  <img src="/assets/images/teachers/{{$ceDean->image_path}}" alt="">
                  <div class="details">
                      <p class="names">{{$ceDean->name}}</p>
                      <p class="designation">Dean of Civil Enginerring</p>
                      <p>
                          "Welcome to the Faculty of Civil Engineering home page!
                          The engineering profession has become the main driving force of economic growth with their"
                      </p>
                      <div>
                          <a href="./message" class="btn btn-outline-success">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <section class="container mt-4 mb-4">
      <div class="row welcome-section">
          <div class="col-md-8">
              <h2 class="faculty-name">Faculty of Electrical & Electronic Engineering</h2>
              <p>
                Faculty of Electrical and Electronic Engineering (EEE) at Khulna University of Engineering & Technology (KUET) offers unique opportunities for education, research and innovation to meet the increasing demand for highly educated engineering professionals. Now, the EEE faculty has grown beyond expectations and is consistently ranked among the top Engineering faculties of Bangladesh. Since its inception, the EEE faculty at KUET has been active in recruiting outstanding new faculty members to support its teaching and research activities. Every year, a number of our faculty members gets higher education and short-term scientific and research training in well reputed International universities. Our highly qualified faculty members have tremendous potential to change the traditional way of thinking about engineering education, pedagogy and research excellence. Our faculty members are conducting research in the core areas of electrical engineering, electronics, computer engineering, communication engineering and biomedical engineering, and laudable outcomes are often appraised at home and abroad. The faculty fosters future scientists and engineers and aims at developing not only the ability in students to live flexibly and aggressively in our rapidly changing society, but also at producing scientists and engineers with fundamental academic skills to advance our modern way of life. It is our mission to develop professionals with a global perspective and who take an active role in international progress. Our students already proved their merits and endeavors in home and abroad by securing the top positions in their respective fields and we hope to offer furthering its continuation. So as you browse our new web site, I hope you will discover new information, ideas, and inspiration. Scrolling through these pages you will learn about our exceptional degree and executive education programs, our distinguished faculty, and our achievements.
              </p>
              <hr>
              <h5 class="names">Departments</h5>
              <ul class="list-unstyled departments">
                <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                </i>
                Department of Electrical and Electronic Engineering</span></a></li>
                <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                  Department of Computer Science & Engineering</a></li>
                <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                  Department of Electronics and Communication Engineering</a></li>
                <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                  Department of Biomedical Engineering</a></li>
                  <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                    Department of Materials Science and Engineering</a></li>
              </ul>
              <hr>
              <h5 class="names">Contancts</h5>
              <p class="card-text mb-1">{{$eeeDean->name}}</p>
              <p class="card-text mb-1">Dean, Faculty of Electrical & Electronic Engineering</p>
              <p class="card-text mb-1">Email: <a href="#">{{$eeeDean->email}}</a></p>
              <p class="card-text mb-1">Phone	:	+{{$eeeDean->phone}}</p>
              <p class="card-text mb-1">Fax	:	+{{$eeeDean->fax}}</p>
          </div>
          <div class="col-md-4 mt-3">
              <div class="message">
                  <img src="/assets/images/teachers/{{$eeeDean->image_path}}" alt="" class="circle">
                  <div class="details">
                      <p class="names">{{$eeeDean->name}}</p>
                      <p class="designation">Dean of EEE</p>
                      <p>
                          "Welcome you for visiting our Faculty of Electrical and Electronic Engineering website. We are one of the major Faculties in Khulna University of Engineering and Technology (KUET)"
                      </p>
                      <div>
                          <a href="./message" class="btn btn-outline-success">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <section class="container mt-4 mb-4">
      <div class="row welcome-section">
          <div class="col-md-8">
              <h2 class="faculty-name">Faculty of Mechanical Engineering </h2>
              <p>
                The faculty of Mechanical Engineering is one of the leading faculties at Khulna University of Engineering & Technology (KUET). Keeping in mind, the vision and mission of the university, the faculty offers high-quality undergraduate and postgraduate programs in different fields of engineering and technology. At present, there are seven academic departments. These are:
                1.Department of Mechanical Engineering
                2.Department of Industrial Engineering and Management
                3.Department of Energy Science and Engineering
                4.Department of Leather Engineering
                5.Department of Textile Engineering
                6.Department of Chemical Engineering
                7.Department of Mechatronics Engineering
                The course curriculum of each department is designed in such a way that produces leaders in respective field to meet the national and international job markets of 21st century. The faculty promotes experiential learning by offering a wide range of practice-oriented courses, services and active learning strategies. Each department of the faculty have leading teaching laboratories which provide the students the best possible learning and practicing environment by simulating their future work environment. There are many student clubs through which students can pursue infinite co-curricular and extracurricular activities. The faculty encourages students to learn how to balance their academic life with activities outside the classroom, get to broaden their horizons, enrich their life experiences, and make lifelong friends, and in the end will find their time here well spent, university life colorful and campus experiences rewarding.
                The faculty boasts a team of highly professional, scholastic and internationalized teaching staffs with rich teaching experiences. They love teaching and engage in research and innovation. The faculty members help to maintain global standard of excellence in teaching and learning at their respective discipline. They have immense professional dedication in caring and nurturing the students. The faculty is committed to fostering interdisciplinary research to solve real life industrial problems. Moreover, continuous improvement and life-long learning is a motto of students and faculty members.The faculty always welcomes alumni, parents, industrialist, and other stakeholders to put forward any suggestions and new ideas to continuously enhance teaching effectiveness and academic excellence.
              </p>
              <hr>
              <h5 class="names">Departments</h5>
              <ul class="list-unstyled departments">
                <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                </i>
                Department of Mechanical Engineering</span></a></li>
                <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                  Department of Industrial Engineering and Management</a></li>
                <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                  Department of Energy Science and Engineering</a></li>
                <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                  Department of Leather Engineering</a></li>
                  <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                    Department of Textile Engineering</a></li>
                  <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                      Department of Chemical Engineering</a><li>                
                  <li><a href="#" class="department-name"><i class="bi bi-book"></i>
                  Department of Mechatronics Engineering</a></li>
  
              </ul>
              <hr>
              <h5 class="names">Contancts</h5>
              <p class="card-text mb-1">{{$meDean->name}}</p>
              <p class="card-text mb-1">Dean, Mechanical Engineering</p>
              <p class="card-text mb-1">Email: <a href="mailto:johndoe@example.com">{{$meDean['email']}}</a></p>
              <p class="card-text mb-1">Phone	:	+{{$meDean->phone}}</p>
              <p class="card-text mb-1">Fax	:	+{{$meDean->fax}}</p>
          </div>
          <div class="col-md-4 mt-3">
              <div class="message">
                  <img src="/assets/images/teachers/{{$meDean->image_path}}" alt="">
                  <div class="details">
                      <p class="names">{{$meDean->name}}</p>
                      <p class="designation">Dean of Mechanical Engineering</p>
                      <p>
                          "Welcome to the Faculty of Mechanical Engineering of KUET. There are seven departments namely, Department of Mechanical Engineering (ME), Department of Industrial Engineering and"
                      </p>
                      <div>
                          <a href="./message" class="btn btn-outline-success">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    
	@include('footer')

 

</body>
</html>