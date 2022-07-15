<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>iCoder@</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/iCoder@">iCoder</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/MyFirstWebsite/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/MyFirstWebsite/about.html">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Topics
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item " href="/MyFirstWebsite/android.html">Android Dovelopment</a></li>
                    <li><a class="dropdown-item" href="/MyFirstWebsite/webdovelopment.html">Web Dovelopment</a></li>
                    <li><a class="dropdown-item" href="/MyFirstWebsite/proagramming.html">Coding</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/MyFirstWebsite/support.html">Support</a></li>
                    <li><a class="dropdown-item" href="/MyFirstWebsite /course.html">Courses</a></li>
                    <li><a class="dropdown-item" href="/MyFirstWebsite/video.html">Videos</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 RTU Syllabus
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item " href="/MyFirstWebsite/cse.html">Computer Science Engineering & IT</a></li>
                    
                    <li><a class="dropdown-item" href="/MyFirstWebsite/ee.html">Electrical Engineering</a></li>
                    <li>
                    </li>
                    <li><a class="dropdown-item" href="/MyFirstWebsite /ce.html">Civil Engineering</a></li>
                    <li><a class="dropdown-item" href="/MyFirstWebsite/me.html">Mechanical Engineering</a></li>
                  
                  </ul>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="/MyFirstWebsite/video.html">Videos</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="/MyFirstWebsite/contact.html">Contact US</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            
          </div>
        </div>
      </nav>


<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login to iCoder</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!--Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Create New Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
              <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create Account</button>
      </div>
    </div>
  </div>
</div>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slide1.jfif" width="auto" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Learn Web Dovelopment</h5>
        <p>Html,Css,JavaScript </p>
        <a class="btn btn-danger" href="/MyFirstWebsite/proagramming.html">Programming</a>
        <a class="btn btn-success" href="/MyFirstWebsite/webdovelopment.html">WebDovlopment</a>
        <a class="btn btn-primary" href="/MyFirstWebsite/android.html">Android</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide2.jfif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Learn Android Dovelopment</h5>
        <p>Java , Android Studio </p>
     <a class="btn btn-danger" href="/MyFirstWebsite/proagramming.html">Programming</a>
        <a class="btn btn-success" href="/MyFirstWebsite/webdovelopment.html">WebDovlopment</a>
        <a class="btn btn-primary" href="/MyFirstWebsite/android.html">Android</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide3.jfif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Learn Programming</h5>
        <p>C++,Java,Python</p>
   <a class="btn btn-danger" href="/MyFirstWebsite/proagramming.html">Programming</a>
        <a class="btn btn-success" href="/MyFirstWebsite/webdovelopment.html">WebDovlopment</a>
        <a class="btn btn-primary" href="/MyFirstWebsite/android.html">Android</a>

        
      </div>
 
    
 
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 

<section _ngcontent-serverapp-c44="" class="jumbotron text-center my-3"><div _ngcontent-serverapp-c44="" class="container"><img _ngcontent-serverapp-c44="" src="education.png" alt="logo" width="120"><h1 _ngcontent-serverapp-c44="" class="jumbotron-heading"><span _ngcontent-serverapp-c44="" id="typed">iCOder</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></h1><p _ngcontent-serverapp-c44="" class="lead text-muted">Confused on which course to take? I have got you covered. Browse courses and find out the best course for you. Its free!<br _ngcontent-serverapp-c44="">Code With Harry is my attempt to teach basics and those coding techniques to people in short time which took me ages to learn.</p><p _ngcontent-serverapp-c44=""><a _ngcontent-serverapp-c44="" routerlink="/blog" class="btn btn-danger  my-2" href="/MyFirstWebsite/about.html">Browse Blog</a><a _ngcontent-serverapp-c44="" routerlink="/videos" class="btn btn-success my-2" href="/MyFirstWebsite/video.html">Browse Video Tutorials</a><a _ngcontent-serverapp-c44="" routerlink="/contact" class="btn btn-primary my-2" href="/MyFirstWebsite/contact.html">Contact Me</a></p></div></section>

<div class="container">
  <div class="row mb-2">
    <div class="col-md-6 my-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger">WebDovlopment</strong>
          <h3 class="mb-0">Learn WebDovlopment</h3>
          <div class="mb-1 text-muted"></div>
          <p class="card-text mb-auto">Learn Web Dovelopment with Bootstrap and take help of experties </p>
          <a href="read1.html" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img class="bd-placeholder-img " width="240" height="250" src="thumb2.jpg"  alt="">

        </div>
      </div>
    </div>
    <div class="col-md-6 my-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Programming</strong>
          <h3 class="mb-0">Learn Coding</h3>
          <div class="mb-1 text-muted"></div>
          <p class="mb-auto">Learn Coding with Bootstrap and take help of experties</p>
          <a href="read2.html" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img " width="240" height="250"  src="thumb4.jfif" alt="">

        </div>
      </div>
    </div>
  </div>
</div>
     
<div class="container">
  <div class="row mb-2">
    <div class="col-md-6 my-2">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Android</strong>
          <h3 class="mb-0">Learn Android Devlopment</h3>
          <div class="mb-1 text-muted"></div>
          <p class="card-text mb-auto">Learn Android Dovelopment with Bootstrap and take help of experties</p>
          <a href="read3.html" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img class="bd-placeholder-img " width="240" height="250"  src="android.jpg" alt="">

        </div>
      </div>
    </div>
    <div class="col-md-6 my-2">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-muted">AI</strong>
          <h3 class="mb-0">Learn Artificial intelligence</h3>
          <div class="mb-1 text-muted"></div>
          <p class="mb-auto">Learn Artificial intelligence with Bootstrap and take help of experties</p>
          <a href="read4.html" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img " width="240" height="250"  src="thumb6.jfif" alt="">

        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <footer class="row row-cols-5 py-5 my-5 border-top">
    <div class="col">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
      <img class="bi me-2" width="40" height="35" src="graduation.png" alt="">
      </a>
      <p class="text-muted">© 2021-2022</p>
    </div>

    <div class="col">

    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="/MyFirstWebsite/index.html" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="/MyFirstWebsite/about.html" class="nav-link p-0 text-muted">About</a></li>
        <li class="nav-item mb-2"><a href="/MyFirstWebsite/contact.html" class="nav-link p-0 text-muted">Contact Us</a></li>
        <li class="nav-item mb-2"><a href="/MyFirstWebsite/support.html" class="nav-link p-0 text-muted">Support</a></li>
     
      </ul>
    </div>

    <div class="col">
      <h5>About</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="/html.html" class="nav-link p-0 text-muted">Html</a></li>
        <li class="nav-item mb-2"><a href="/cse.html" class="nav-link p-0 text-muted">Css</a></li>
        <li class="nav-item mb-2"><a href="/javascript.html" class="nav-link p-0 text-muted">Java Script</a></li>
       
      </ul>
    </div>

    <div class="col">
      <h5>Support</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="/MyFirstWebsite/support.html" class="nav-link p-0 text-muted">Support</a></li>
      
      </ul>
    </div>
  </footer>
</div>

<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <img class="bi me-2" width="40" height="35" src="graduation.png" alt="">
      </a>
      <span class="text-muted">© 2021 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/s_ahil__ansari__/">  <img class="bi me-2" width="40" height="35" src="instagram.png" alt=""></a></li>
      <li class="ms-3"><a class="text-muted" href="#">  <img class="bi me-2" width="40" height="35" src="twitter.png" alt=""></a></li>
      <li class="ms-3"><a class="text-muted" href="#">  <img class="bi me-2" width="40" height="35" src="facebook.png" alt=""></a></li>
    </ul>
  </footer>
</div>

</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

  </body>
</html>


