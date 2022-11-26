

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html"><span>Info</span>Board</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>

          <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              
            </ul>
          </li>

          <li><a href="services.html">Announcement</a></li>
          <li><a href="portfolio.html">Event</a></li>
         <li><a href="blog.html">Learning</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
      <a href="{{ route('register') }}" style="color:blue">Register Now</a>
      <a href="{{ route('login') }}" style="color:orange">Sign In</a>
      </div>

    </div>
  </header><!-- End Header -->