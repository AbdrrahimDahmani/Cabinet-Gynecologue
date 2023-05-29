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
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="">About</a></li>
          </ul>
        </div>
        <!-- Main navbar END -->

        <!-- Button START -->
        <div class="header-buttons ms-xl-auto">
          <button type="button" class="log btn btn-outline-dark" onClick="window.location.href='LoginView/login.php'">Login</button>
          <button type="button" class="dark-outline-hover btn btn-dark" onClick="window.location.href='RegisterView/register.php'">
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
          <button type="button" class="consult-btn btn btn-outline-dark" onClick="window.location.href='LoginView/login.php'">
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

      
  <div class="container-contact">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact">CONTACT INFO : +62 81 314 928 595</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" value="Krisantus Wanandi">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="CONTACT NO">
            </div>
            <div class="app-form-group message">
              <input class="app-form-control" placeholder="MESSAGE">
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button">CANCEL</button>
              <button class="app-form-button">SEND</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



    </section>
  </body>
</html>
