<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="resp-style.css">
</head>
<body>
  <!--code from boostrap for design of navbar-->
    <header id="full_nav">
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                      <a class="navbar-brand" href="#">
                       <!-- <img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://mite.ac.in/wp-content/uploads/2020/05/mite-mangalore-logo.png"width="50" height="62" alt="mite">-->
                       <img src="mitelogo.png" height="62">
                      </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                       <!--<span class="navbar-toggler-icon"></span>-->
                       <i class="fas fa-stream navbar-toggler-icon"></i>
                    </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                            <i class="fa-light fa-house-user"></i>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/euphoria_mite/?hl=en"><i class="fa-brands fa-instagram"></i>Gallery</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="login.php">SignIn</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="signup.php">SignUp</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin</a>
                          </li>
                        </ul>
                        <div class="header_right">
                            <div class="text-lg-end">
                                <span>Call Us!!</span>
                                <span class="phone_no">+91 8972345678</span>
                            </div>
                        </div>
                      </div>
                  </nav>
            </div>
        </div>
    </header>


    <section class="banner_section">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="carousel-caption">
                      <div class="banner-content">
                        <h1>About Us</h1>
                        <blockquote class="blockquote bg-transparent"><!--from udemy-->
                          <p>Creativity is what gives wings to explore the hidden virtues. It is what powers life with beautiful experiences that etch themselves onto our hearts as memories. Memories that eventually shape one into better humans. ‘Euphoria’, the cultural club of MITE, is a huge community of creative individuals here to nurture their hidden talents with the superior motive of creating art. Here at ‘Euphoria’, we believe in the stories that make us humans, stories that give wings of perception to view the world in a different yet a beautiful way, stories that keep our feet on the ground while our mind in the stars and most importantly, we believe in the crazy dream of making the world a better place through art.</p>
                        </blockquote>
                        <a href="https://mite.ac.in/" class="btn main-btn">Click here to know more!!</a>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="carousel-caption">
                      <div class="banner-content">
                        <h1>About Us</h1>
                        <p>Creativity is what gives wings to explore the hidden virtues. It is what powers life with beautiful experiences that etch themselves onto our hearts as memories. Memories that eventually shape one into better humans. ‘Euphoria’, the cultural club of MITE, is a huge community of creative individuals here to nurture their hidden talents with the superior motive of creating art. Here at ‘Euphoria’, we believe in the stories that make us humans, stories that give wings of perception to view the world in a different yet a beautiful way, stories that keep our feet on the ground while our mind in the stars and most importantly, we believe in the crazy dream of making the world a better place through art.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

   <section class="feature_section">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-3 mb-4">
            <div class="card features-box">
              <div class="text-center">
                <div class="features-icon-border">
                  <div class="features-icon">
                     <img src="chair.png" >
                  </div>
                </div>
                <div class="features-text">
                  <h3>Chairman's message</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 mb-5">
            <div class="card features-box">
              <div class="text-center">
                <div class="features-icon-border">
                  <div class="features-icon">
                     <img src="sentia.jpg" >
                  </div>
                </div>
                <div class="features-text">
                  <h3>Events</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 mb-5">
            <div class="card features-box">
              <div class="text-center">
                <div class="features-icon-border">
                  <div class="features-icon">
                     <img src="bg1.png" >
                  </div>
                </div>
                <div class="features-text">
                  <h3>Clubs</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 mb-5">
            <div class="card features-box">
              <div class="text-center">
                <div class="features-icon-border">
                  <div class="features-icon">
                     <img src="ui-chat.png" >
                  </div>
                </div>
                <div class="features-text">
                  <h3>24/07 Support</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>