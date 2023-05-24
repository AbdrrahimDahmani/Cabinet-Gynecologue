<!-- <?php
    // Redirect to login page
	// header("Location: LoginView/login.php");
?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./style/home.css" />
    <title>Gynecologue</title>
  </head>
  <header class="navbar-light">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-md mx-md-5">
      <div class="container-fluid">
        <!-- Logo START -->
        <a class="navbar-brand" href="index.php">
          <img class="logo" src="./images/baby-newborn.png" alt="logo" />

          <span class="logo-text"><span>Gyne</span> Dridi</span>
        </a>

        <div class="navbar-collapse collapse" id="navbarCollapse">
          <ul class="navbar-nav navbar-nav-scroll">
            <li class="nav-item"><a class="nav-link" href="">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="">About</a></li>
          </ul>
        </div>
        <!-- Main navbar END -->

        <!-- Button START -->
        <div class="header-buttons ms-xl-auto">
          <button type="button" class="log btn btn-outline-dark">Login</button>
          <button type="button" class="dark-outline-hover btn btn-dark">
            Sign up
          </button>
        </div>
        <!-- Button END -->
      </div>
    </nav>
  </header>
  <body>
    <section>
      <div class="container">
        <div class="welcome-par">
          <h1>
            Welcome to <span class="logo-text"><span>Gyne</span> Dridi</span>
          </h1>
          <p>
            We are delighted to welcome you to our gynecology practice,
            dedicated to caring for your women's health. Dr. Dridi and our
            experienced team are here to provide you with personalized and high
            quality care.
          </p>
          <button type="button" class="consult-btn btn btn-outline-dark">
            Consulter Maintenant
          </button>
        </div>
        <div class="image-container">
          <img src="./images/doctor.svg" alt="doctors" />
        </div>
      </div>
      <!-- <div class="cardContainer">
        <div class="cards">
          <div class="card wallet">
            <p>Card</p>
          </div>
          <div class="card wallet">
            <p>Card</p>
          </div>
          <div class="card wallet">
            <p>Card</p>
          </div>
        </div>
      </div> -->
    </section>
  </body>
</html>
