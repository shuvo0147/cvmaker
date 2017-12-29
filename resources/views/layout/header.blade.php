  <div class="header">
    <div class="bg-color">
      <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="#">Ma<span class="logo-dec">ker</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#main-header">Home</a></li>
                <li class=""><a href="#feature">About</a></li>
                <li class=""><a href="#service">Services</a></li>
                <li class=""><a href="#portfolio">Portfolio</a></li>
                <li class=""><a href="#testimonial">Testimonial</a></li>
                <li class=""><a href="#blog">Blog</a></li>
                <li class=""><a href="#contact">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="banner-info text-center wow fadeIn delay-05s">
              <h1 class="bnr-title">We are at ma<span>ker</span></h1>
              <h2 class="bnr-sub-title">Starting a new journey!!</h2>
              <p class="bnr-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip <br>ex ea commodo consequat.</p>
              <div class="brn-btn">
                <a data-toggle="modal" href="#registration" class="btn btn-download">Registration</a>
                <a data-toggle="modal" href="#myModal" class="btn btn-more">Login Now</a>
              </div>
              <div class="overlay-detail">
                <a href="#feature"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- Registration Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <form action="/action_page.php">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" class="form-control" placeholder="password" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div>
              <a id="btn-login" href="#" class="btn btn-success">Login now </a>
              <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>
              <a id="btn-fblogin" href="#" class="btn btn-danger">Login with Gmail</a>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
          New To MyWebsite.com? <a href="#" class="btn btn-info">Register</a>
      </div>
    </div>

  </div>
</div>
<div id="registration" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registration</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <form action="#">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" class="form-control" placeholder="password" aria-describedby="basic-addon1">
                </div>
              </div>
               <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" class="form-control" placeholder="Phone" aria-describedby="basic-addon1">
                </div>
              </div>
               <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" class="form-control" placeholder="Coutry" aria-describedby="basic-addon1">
                </div>
              </div>
              <!-- <hr> -->
              <a id="btn-login" href="#" class="btn btn-success">Signup </a>
              <a id="btn-fblogin" href="#" class="btn btn-primary">Signup with Facebook</a>
              <a id="btn-fblogin" href="#" class="btn btn-danger">Signup with Gmail</a>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div>
  </div>
</div>