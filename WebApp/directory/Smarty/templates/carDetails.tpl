<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
   
    <title>PHPJabbers.com | Free Car Rental Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>
    <script src="/WebApp/directory/Smarty/js/login-box.js"></script>
    <div id="login-box" style="position: fixed; top: 10px; right: 10px; z-index: 9999;"></div>
    <script>
      const isLogged = {$isLogged};
      const username = {$username};
    </script>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Car Rental <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="fleet.html">Fleet</a></li>
                <li class="nav-item"><a class="nav-link" href="offers.html">Offers</a></li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item active" href="blog.html">Blog</a>
                      <a class="dropdown-item" href="team.html">Team</a>
                      <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                      <a class="dropdown-item" href="terms.html">Terms</a>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
                
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><i class="fa fa-user"></i>John Doe  &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> 12/06/2020 10:30   &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 114</h4>
              <h2>Lorem ipsum dolor sit amet, consectetur adipisicing</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Lorem ipsum dolor sit amet, consectetur.</h2>
              </div>
            </div>

            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sed. Ex, id autem cum assumenda, quisquam cupiditate amet dolorem atque ipsam pariatur sequi voluptatem est nesciunt eum, aspernatur, tenetur rem. <br>

                <br>

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequatur, magnam. Dolorum vitae a vel quisquam. Fuga quia suscipit id veritatis sint earum impedit corporis quidem eum consectetur ipsam ex sequi ad, distinctio enim tenetur eveniet eligendi. Laborum, sapiente, magnam.</p>

                <br>

                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, modi.</h5>

                <br>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam officia in adipisci. Corporis rem beatae cupiditate neque consequuntur necessitatibus expedita laudantium temporibus quam ex quidem, aut non blanditiis soluta deserunt dolores mollitia repudiandae voluptatibus perspiciatis dolor quos distinctio! Atque, magnam. <br>

                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt dolore ducimus, ad itaque reprehenderit repellat dignissimos, qui velit dolores voluptas.</p>
            </div>

            <div class="col-md-4">
              <div class="left-content">
                <h4>Lorem ipsum dolor sit amet.</h4>

                <br>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minus?</p>
              </div>
            </div>
        </div>

        <br>
        
        <div>
          <img src="assets/images/blog-image-fullscren-1-1920x700.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Leave a Comment</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-4">
              <div class="left-content">

                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur. Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</p>

                <br> 

                <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>




    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    

  </body>

</html >
