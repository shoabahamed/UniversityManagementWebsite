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
    <link rel="stylesheet" href="./css/footer.css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/31b429dc0a.js" crossorigin="anonymous"></script>
</head>
<body>
    {{-- navbar--}}
    <header>
      @include('navbar')
	  </header>

    <div class="container mt-4">
      <h1 class="display-5 text-center" style="color: #006400;">Welcome to Our University</h1>

      <div class='mx-5 my-4 fs-6 p-3' style="background:#e3f9e0; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
        <p><span class="lead">Khulna University of Engineering & Technology (KUET)</span> is one of the leading public universities of Bangladesh giving special emphasis in the Engineering and Technological Education and research. KUET is well known for offering very high quality educational, research and developmental programs in the major disciplines of engineering as well as basic sciences. It has a sober objective to achieve excellence in quality education, research and progression to address the present needs of the country as well as the South-Western region to make it as the "Center of Excellence".</p>

        <p>Khulna University of Engineering & Technology (KUET), Bangladesh established in 1967 as Khulna Engineering College, starts its long cherished journey in 3 June, 1974 after receiving special direction from the Father of the Nation Bangabandhu Sheikh Mujibur Rahman. Later to ensure the better academic and research capabilities and environment, it is converted to an autonomous institute called Bangladesh Institute of Technology (BIT), Khulna in July 1986. To meet the demands of the days in the academic and research arena, the institute was upgraded and renamed as Khulna University of Engineering & Technology (KUET) in September 2003.</p>
              
        <p>KUET offers engineering education in both undergraduate and post-graduate levels, and also offers degree and conducts research in basic sciences at post-graduate level. At present, around 5240 students are studying in KUET in 20 Academic Department under 3 Faculty. From the academic session (2018-2019), total 1065 top graded students of the country are enrolled yearly in undergraduate level in 16 departments through very competitive, transparent and standard admission test. Besides, quality level graduate study and research in M.Sc, M.Sc Engg, M.Phil and Ph.D. Programs are running in its nourished environment. Students from foreign counties are also studying in this prestigious institute. Around 356 eminent, scholarly and diverse faculties are engaged in teaching at this university in various disciplines.</p>
            
        <p>In an attempt to expand and enrich the teaching and learning capabilities of this university, recently two new departments are established and students have already been enrolled to start undergraduate study from the coming session. The Institute of Information and Communication Technology (IICT), Institute of Disaster Management (IDM) and Institute of Environment and Power Energy (IEPE) are also established recently to fulfill national and international demands through short courses, diploma, research and training program in various modern technological directions, especially in the sectors of Information Technology (IT) and Disaster Management.</p>
              
        <p>The campus of this university stands at North-West corner of Khulna City Corporation, about 12 Km from the city center, in the midst of an impressive natural beauty having vast greenery spreading over an area of 101 acres land. It has a fresh airy campus and congenial atmosphere with several students’ halls of residence. The academic buildings are not far from residential halls having a harmonious bridge in between them. The Physical infrastructure including Halls of residence, Academic Buildings and Institutes, Workshops, Library, Computer Center, Play grounds, Cafeteria, Auditorium, Medical Center, Bank, Post Office, ATM Booth, Guest House and Club, Mosque, Dormitory, Teachers & Staff quarters, Schools etc. are structured in a very planned way and are being improving day by day. In every year, about seven hundred students graduate from this university at different branches of engineering and technology. Then the graduates are distinguished themselves for up-holding their quality in engineering and technological excellence to me</p>
        
      </div>
      
    </div>
    
    
	@include('footer')

 

</body>
</html>