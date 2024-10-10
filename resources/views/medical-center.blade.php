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

    p {
      margin-bottom: 20px;
    }

    .section-img {
      margin-bottom: 20px;
    }

    .facility {
      margin-bottom: 20px;
    }

  </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  
  
</head>
<body>
    {{-- navbar--}}
    <header>
      @include("navbar")
	  </header>
    
    <div class="container my-4">
      <h1 class="display-3 text-center" style="color: #006400;">Medical Center</h1>
    
      <p>
        Medical centre of this University is situated within the campus. All students, Teachers, Officers, Staffs and their dependants take their Medical facilities from Medical Centre. There are 07 (Seven) experienced Doctors who prescribe to the patients round the clock regularly (except government holidays). Medical Centre remains open for 24 hours.
      </p>
    
      <div class="row justify-content-center">
        <img src="{{asset('./assets/images/extras/kmc.jpg')}}" class="section-img col-7" alt="Medical Center Image">
      </div>

    
      <div class="facility mt-3">
        <h3 class="display-4" style="color: #006400; ">Facilities</h3>
        <div class="row">
          <div class="col-md-6">
            <h4>Outdoor Treatment</h4>
            <p>All students, Teachers, Officers, Staffs and their dependants get medical facilities from Medical Centre free of cost. Some emergency medicine is supplied to the sick students from Medical Centre free of cost.</p>
          </div>
          <div class="col-md-6">
            <h4>Emergency Treatment</h4>
            <p>WMedical Centre provides all emergency primary treatment such as Asthma, High Temperature, Vomitting, Diarrhoea, RTA, Trauma etc</p>
          </div>
          <div class="col-md-6">
            <h4>Ambulance Service</h4>
            <p>We have two well equipped Ambulances. All emergency patients are transferred to Clinic or Hospital by Ambulance</p>
          </div>
          <div class="col-md-6">
            <h4>Pathological</h4>
            <p>Medical Centre provides selected Pathological Test with minimum cost from Pathology Lab. According to Doctor’s requisite by depositing ‘Fixed Fees’ above mentioned persons can have Pathological Test. Blood grouping Test (free of cost).</p>
          </div>
        </div>
      </div>
    </div>
    
    

	@include('footer')

 

</body>
</html>


