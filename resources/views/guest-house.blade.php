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

        
  <style>

    p {
      margin-bottom: 20px;
    }

    .section-img {
      max-width: 100%;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }
    .container {
      max-width: 800px;
      margin: 50px auto;
    }
  </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/31b429dc0a.js" crossorigin="anonymous"></script>
  
</head>
<body>
    {{-- navbar--}}
    <header>
      @include("navbar")
	  </header>
    
    <div class="container my-4">
      <h1 class="display-4 mb-4 text-center" style="color: #006400;">Guest House</h1>
    
      <p>
        KUET has provided guest house facilities for the teachers and officers of KUET including visitors. KUET has two guest houses: one is situated within the campus, Khulna and another is situated in Dhaka. These guest houses are used for accommodation of the VIPs, syndicate members, board members coming from the other universities and organizations and foreign delegates attending the conferences and other official purposes. All the necessary amenities required to live comfortably are present at these guest houses like fully furnished room, comfortable bed, air-conditioner, TV, hot and cold water supply and also one important aspect-security- which is assured by the close circuit camera surveillance. Food facility is also available as the requirement of the delegates.<br>

      Guest house at KUET consist of 11 no of guest rooms, two driver rooms, a kitchen, dining space and a multipurpose room. Multipurpose room is used for arranging several sorts of programs including seminar, training program, meeting of teachers and officers association, for family program etc. The special order from honourable vice-chancellor “no guest is allowed to stay at guest house without paying the prescribed rent” is carried out. The revenue coming from guest house is used for the maintenance of these guest houses.<Br>

      Another guest house is located at Dhaka, Bangladesh. The address is Flat-A/4 (5th Floor), House No -19/5, Babar Road (Madhabi Villa- Doric Apartment), Block-B, Mohammadpur, Dhaka. It consists of three guest rooms and one spacious drawing room.
      </p>
    
      <div class="row justify-content-center">
        <div class="col-md-5">
          <img src="https://www.kuet.ac.bd/images/guest_house/gh_1.jpg" class="section-img" alt="Guest House Image 1">
        </div>
        <div class="col-md-5">
          <img src="https://www.kuet.ac.bd/images/guest_house/gh_2.jpg" class="section-img" alt="Guest House Image 2">
        </div>
      </div>
    
      <div class="d-flex justify-content-center mt-3">
        <a href="#" class="btn btn-outline-success" download="composer.json">Requirements</a>
      </div>
     
    
      <h2 class="display-5 mb-4 mt-3" style="color: #006400;">Staff Information</h2>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="table-success">
            <tr>
              <th>Name</th>
              <th>Designation</th>
              <th>Contact Info</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John Doe</td>
              <td>Manager</td>
              <td>123-456-7890<br>john.doe@example.com</td>
            </tr>
            <tr>
              <td>Jane Smith</td>
              <td>Assistant Manager</td>
              <td>123-456-7890<br>jane.smith@example.com</td>
            </tr>
            <tr>
              <td>Michael Johnson</td>
              <td>Receptionist</td>
              <td>123-456-7890<br>michael.johnson@example.com</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    

	@include('footer')

 

</body>
</html>


