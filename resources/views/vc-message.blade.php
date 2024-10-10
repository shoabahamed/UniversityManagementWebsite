<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


		<link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/footer.css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
 
      .vc-message {
            background-color: #ffffff;
          }
          .vc-message img {
            max-width: 150px;
            height: auto;
            border-radius: 50%;
            margin-bottom: 20px;
          }
          .vc-message p {
            font-size: 18px;
            color: #333333;
            text-align: justify;
          }

          .vc-name {
            font-size: 20px;
            font-weight: bold;
            color: #006400; /* Dark green text */
            margin-bottom: 0px;
          }
          .vc-designation {
              font-style: italic;
              color: #555;
          }
          .image-container{
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              float: right;
              margin-left: 30px;
            }


          @media (max-width: 768px) {
            .image-container {
              float: none;
              margin-left: 0px;
            }

            .c-message-container{
              display: flex;
              justify-content: center;
              align-items: center;
              flex-direction: column
            }
          }


    </style>
</head>
<body>
    {{-- navbar--}}
    <header>
      @include('navbar')
	  </header>

    <div class="container mt-5 mb-5">
      <h1 class="display-5 text-center" style="color: #006400;">MESSAGE FROM VICE-CHANCELOR</h1>
      <div class="row justify-content-center mt-4">
        <div class="col-md-10 c-message-container">
          <div class="vc-message rounded" style="background:#e3f9e0; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
            <div class="image-container mb-2 pt-3 text-center">
              <img src="{{asset('/assets/images/teachers/vc.jpg')}}" alt="VC Image" class="circle">
              <p class="vc-name">Prof. Dr. Mihir Ranjan Halder</p>
              <p class="vc-designation">Vice-Chancellor</p>
            </div>
            <p class="fs-6 px-3 pt-3 pb-2">
              <span class="lead">It feels me prodigious pleasure to write</span> a few words about my best-loved Khulna University of Engineering & Technology (KUET), one of the few leading and promising Engineering Universities of Bangladesh, established in 1967 as Khulna Engineering College in a greenery landscape located about 12 km north away from the Khulna City centre. It started its noble academic journey in 1974 upon the remarkable direction of the Father of the Nation Bangabandhu Sheikh Mujibur Rahman with only three initial Departments through which Degrees were offered like B.Sc. in Civil Engineering, B.Sc. in Electrical and Electronic Engineering and B.Sc. in Mechanical Engineering with a total of only 120 students as yearly intake. Later Khulna Engineering College was converted to Bangladesh Institute of Technology, Khulna an autonomous institute in 1986 and finally the institute was upgraded and renamed as Khulna University of Engineering & Technology (KUET) on 1st September 2003. Presently, KUET comprises of three Faculties under which twenty Departments including major branches of Engineering and Sciences offering both under-graduate (UG) and post-graduate (PG) degrees with yearly intake of 1065 students in UG program and about 300, students in PG program. Furthermore, Institute of Information and Communication Technology (IICT) Institute of Disaster Management (IDM) and Institute of Environment and Power Technology (IEPT) have been started since 2010, 2013 and 2016 respectively. Very recently about 17 acres of land has been adjoined to its 101 acres mainland campus area to establish modern scientific equipment and to construct modern civil infrastructures and consequently to develop its ongoing research and engineering education and to expand the scope opening a few new Departments.<br>

              The University is now steered to play the leading role in the field of Engineering Sciences and Technology, targeting to face the Fourth Industrial Revolution with quality education and its perpetual research. For decades, KUET has been at the forefront of Engineering Sciences education and research producing quality graduates in the country. Almost all faculty members are highly qualified with dignified foreign degrees from the renowned universities of the USA, UK, Canada, Germany, Japan, Australia and other countries. The officials and employees are also qualified, skilled and communicative as well. Its research and academic activities have also been extended for fruitful collaboration with many Higher Education and Research Institutes from American, European, Australian and Asian countries.<br>

              I aspire to accelerate an excellent phase of progress and growth with making sure of quality education and research in the field of engineering and science. I do look forward welcoming everyone at KUET to experience the unique learning and amicable campus environment. We have a slogan KUET is our home & Sky is our limit.
            </p>
          </div>
        </div>
      </div>
    </div>
    

    
    
	@include('footer')

 

</body>
</html>