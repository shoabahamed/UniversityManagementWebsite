<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="./css/faqs.css">
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
      <h3 class="display-5 text-center" style="color: #006400;"> Frequently Asked Questions</h3>
      <div class="row">
          <div class="faq-section mt-4">
            <h2>General</h2>
            <div class="faq-list">
              <div class="faq-item">
                <h3>What are the office hours?</h3>
                <p>Our office hours are Monday to Friday, 9:00 AM to 5:00 PM.</p>
              </div>
              <div class="faq-item">
                <h3>Is parking available on campus?</h3>
                <p>Yes, there are several parking lots available on campus.</p>
              </div>
            </div>
          </div>
  
          <div class="faq-section">
            <h2>Undergraduate</h2>
            <div class="faq-list">
              <div class="faq-item">
                <h3>How do I apply for undergraduate programs?</h3>
                <p>You can apply for undergraduate programs through our online application portal.</p>
              </div>
              <div class="faq-item">
                <h3>What are the admission requirements for undergraduate programs?</h3>
                <p>Admission requirements vary by program. Please check our website for specific requirements.</p>
              </div>
            </div>
          </div>
  
          <div class="faq-section">
            <h2>Postgraduate</h2>
            <div class="faq-list">
              <div class="faq-item">
                <h3>Are there scholarships available for postgraduate students?</h3>
                <p>Yes, we offer scholarships for postgraduate students based on academic merit and financial need.</p>
              </div>
              <div class="faq-item">
                <h3>How do I apply for postgraduate housing?</h3>
                <p>You can apply for postgraduate housing through our housing portal.</p>
              </div>
            </div>
          </div>
  
          <div class="faq-section">
            <h2>Certificates & Documents Related</h2>
            <div class="faq-list">
              <div class="faq-item">
                <h3>How do I request an official transcript?</h3>
                <p>You can request an official transcript through our registrar's office.</p>
              </div>
              <div class="faq-item">
                <h3>How do I get a replacement diploma?</h3>
                <p>You can request a replacement diploma by filling out a form on our website.</p>
              </div>
            </div>
          </div>
  
          <div class="faq-section">
            <h2>Library related</h2>
            <div class="faq-list">
              <div class="faq-item">
                <h3>What are the library hours?</h3>
                <p>The library is open Monday to Friday, 8:00 AM to 10:00 PM, and Saturday to Sunday, 10:00 AM to 6:00 PM.</p>
              </div>
              <div class="faq-item">
                <h3>How do I borrow books from the library?</h3>
                <p>You can borrow books from the library using your student ID card.</p>
              </div>
            </div>
          </div>
      </div>
    </div>

	@include('footer')

 

</body>
</html>