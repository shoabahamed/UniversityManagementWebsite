<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


		<link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="{{ asset('./css/footer.css') }}">

        
    <style>
      .hall-picture {
        width: 100%;
        height: auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
      }
      .provost-info img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 10px;
        margin-top: 0.5rem;
        margin-left: 0.5rem;
      }

      .c-card{
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        background-color: #f8f9fa;
        border-radius: 10px;
      }
    </style>
    </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  
</head>
<body>
    {{-- navbar--}}
    <header>
      @include("navbar")
	  </header>
    
    <div class="container my-4">
      <h1 class="text-center mb-4" style="color: #006400">{{$hall->hall_name}}</h1>
     
      <div class="row">
        <div class="col-md-8">
          
          <img src="{{ asset('assets/images/halls/' . $hall->image_path) }}" class="hall-picture border border-success border-2 rounded" alt="University Hall">
          <p>
            Fazlul Haque Hall is the most oldest and historical hall of Khulna University of Engineering and Technology. The name goes after the famous patriot Sher-e-Bangla A.K Fazlul Haque. The residential life of this hall offers a wide variety of services designed to support students in their academic and personal success.<br>

            The hall is organized around the vital theme of students' engagement-think volunteering, social entrepreneurship, civic spirit, and the like. In this hall, there are forty one residential rooms and few other common rooms. One of the attractions of this hall is its library cum study room named Sejuti where it has a collection of around 2000 local and foreign books. The library is enriched with novel, story, poetry, autobiography and other types of books.<br>

            The hall has also got a common room where students can play many indoor games such as table tennis, chess, carom etc. Besides, indoor games competition on various events is also held in every year which imparts entertainment and refreshment among the students. There is also an arrangement for the students to participate in outdoor games. Last year the hall won a fair play trophy in football tournament showing adequate performance. A beautiful garden with numerous types of flowers resides in front of the hall. Students of this hall are very much enthusiastic and energetic.
          </p>
         
        </div>
        <div class="col-md-4">
          <div class="provost-info">
            <div class="card c-card border border-success border-2">
              <img src="{{ asset('assets/images/teachers/' . $hall->provost->image_path) }}" class="card-img-top" alt="Provost">
              <div class="card-body">
                <h5 class="card-title"  style="color: #006400">{{$hall->provost->name}}</h5>
                <p class="card-text">Provost(In Charge)</p>
                <p class="card-text">Phone: {{$hall->provost->phone}}</p>
                <p class="card-text">Email: {{$hall->provost->email }}</p>

              </div>
            </div>
            <div class="card c-card mt-3 border border-success border-2">
              <img src="{{ asset('assets/images/teachers/' . $hall->assistantProvost1->image_path) }}" class="card-img-top" alt="Assistant Provost">
              <div class="card-body ">
                <h5 class="card-title" style="color: #006400">{{$hall->assistantProvost1->name}}</h5>
                <p class="card-text">Assistant Provost</p>
                <p class="card-text">Phone: {{$hall->assistantProvost1->phone}}</p>
                <p class="card-text">Email: {{$hall->assistantProvost1->email}}</p>
              </div>
            </div>
            <div class="card c-card mt-3 border border-success border-2">
              <img src="{{ asset('assets/images/teachers/' . $hall->assistantProvost2->image_path) }}" class="card-img-top" alt="Assistant Provost">
              <div class="card-body">
                <h5 class="card-title"  style="color: #006400">{{$hall->assistantProvost2->name}}</h5>
                <p class="card-text">Assistant Provost</p>
                <p class="card-text">Phone: {{$hall->assistantProvost2->phone}}</p>
                <p class="card-text">Email: {{$hall->assistantProvost2->email}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    

	@include('footer')

 

</body>
</html>