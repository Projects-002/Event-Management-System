<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management system</title>

    <!-- Custom CSS -->
     <link rel="stylesheet" href="Assets/CSS/style.css">
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light" style="background: rgb(255,255,255);
background: linear-gradient(73deg, rgba(255,255,255,1) 8%, rgba(29, 180, 44, 0.253) 87%);">

    <!-- Header -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center justify-content-center" href="#" style="font-size: large; font-weight: 800; font-size: 1.8rem;"> <img src="Assets/Image/logo-001.png" alt="" class="img-fluid" style="width: 50px; height: auto;"> Campus Planner</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto ms-auto my-2 my-lg-0 gap-4 navbar-nav-scroll" >
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#" >Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
            </ul>
              <button onclick="window.location='auth/index.php'" class="btn text-white" style="background-color: #71c55d;" >Dashboard</button>
          </div>
        </div>
      </nav>

      <div class="container-fluid">

      <div class="container px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-2 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="Assets/Image/hero.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-2 mb-3">Organize Events with Ease & Efficiency</h1>
            <p class="lead">A smart and seamless event management system designed to simplify planning, coordination, and execution of school events—all in one place.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn text-white btn-lg px-4 me-md-2"  style="background-color: #71c55d;">View Events</button>
              <button type="button" class="btn btn-outline-secondary btn-lg px-4">Learn More</button>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">© 2025 Created by Evelyne Senoi</p>
      </footer>

    <!-- Whatsapp Button -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+254741641922&text=Hello,%20I'm%20interested%20in%20learning%20more%20about%20your%20school%20event%20management%20system.%20Can%20you%20provide%20more%20details?%20Thanks!" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- Boostrap Js -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>