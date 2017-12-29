<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CV Maker</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.bxslider.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

<body>
  <div class="loader"></div>
  <div id="myDiv">
    @yield('content')
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>&copy; CV Maker. All Rights Reserved.</p>
         <!--  <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">Bootstrap Templates</a>
          </div> -->
        </div>
      </div>
    </footer>
  </div>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/wow.js')}}"></script>
  <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <!-- <script src="contactform/contactform.js"></script> -->
</body>
</html>