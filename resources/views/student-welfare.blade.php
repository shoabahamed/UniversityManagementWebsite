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
    .section h2 {
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 10px;
      padding-right: 10px;
      background: #e3f9e0;
      border-radius: 5px;
      border: 2px solid #006400;
      font-size: 22px;
      text-align: center;
    }

    .section p {
      color: #333;
    } 
    
    .c-img{
      width: 600px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border: 2px solid #006400;;
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
      <h3 class="display-4 mb-4 text-center" style="color: #006400;">Student Welfare Center</h3>
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="section">
            <p>The Mission of Student Welfare Center (SWC) is to facilitate students to discover, promote & enlighten their latent talent, knowledge & thoughts in such way that supports the social and economic improvement of the country. KUET SWC is designed and established to meet up those objectives with extensive opportunities & facilities which work collaboratively on student health and welfare issues. It facilitates the opportunities of well aliment, physical fitness, entertainment, open intellectual practice, building up leadership and accuracy, up-to-date advice and guidance for career.</p>
          </div>
          <div class="section">
            <h2>Central Cafeteria</h2>
            <div class='d-flex mt-0 mb-2 justify-content-center c-img-container rounded'>
              <img src="{{asset('./assets/images/extras/cf.jpg')}}" alt="" class="img-fluid rounded c-img">
            </div>
            <p>The University has a well-furnished Central Cafeteria to offer breakfast, meals and snacks, etc for Students, Teachers, Officers & other Communities. Various types of tasty & delicious foods are served among Students, Teachers, Officers & other communities during breakfast, lunch & dinner.</p>
          </div>
          <div class="section">
            <h2>Open Stage</h2>
            <div class='d-flex mt-0 mb-2 justify-content-center c-img-container rounded'>
              <img src="{{asset('./assets/images/extras/opst.jpg')}}" alt="" class="img-fluid rounded c-img">
            </div>
            <p>KUET Open Stage is one of the finest open air stages in Bangladesh. The Open Air Stage is the pivotal point for the wide range of entertainment. The Open Air Stage is also suitable for all kinds of concert and stage events.</p>
          </div>
          <div class="section">
            <h2>Gymnasium & Swimming Poo</h2>
            <div class='d-flex mt-0 mb-2 justify-content-center c-img-container rounded'>
              <img src="{{asset('./assets/images/extras/sp.jpg')}}" alt="" class="img-fluid rounded c-img">
            </div>
            <p>The University has a well-facilitated Gymnasium with gymnasia apparatus such as barbells, parallel bars, jumping board, treadmill etc.</p>
          </div>
        </div>
      </div>
    </div> 
    

	@include('footer')

 

</body>
</html>


