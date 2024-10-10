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
            Lalan Shah Hall is one of the oldest residential halls of Khulna University of Engineering & Technology (KUET), Khulna. The hall is an emblem of quality engineering education and contributing not only our nation but also worldwide human beings since 1967. It is founded in 1975 after the name of famous Bengali Baul devotee - Fakir Lalan Shah. The hall is extenuating the demand of a good number of residential students. Every year the nation is being provided quality engineers from this hall. It is situated in the green environment of KUET campus beside the central mosque and the new academic building.180 undergraduate students from various departments reside in the hall. Besides around 180 students are attached to this hall.
            There is a large dining room inside the hall and all the students of the hall take their lunch and supper smoothly in this dining room. There are forty one (41) residential rooms, one guest room, and a library cum study room in this hall. There are 1857 books in the hall library and some of those books are written by foreign writers. The study room is kept open till 11:30 pm on weekdays and general students can study without any disturbance. Also a common room of this hall is providing the facilities for watching television and playing indoor games.
            There is a strong "Hall Committee" with dedicated students to manage the various activities of the hall voluntarily. The administrative works of the hall are carried out by a Provost and two Assistant Provosts appointed by the authority of KUET. A caretaker cum hall assistant works for the sake of student affairs and maintains the accounts of the hall. There are a beautiful garden and large playground inside the hall territory. We hope that Lalan Shah Hall will help to make a great nation.
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