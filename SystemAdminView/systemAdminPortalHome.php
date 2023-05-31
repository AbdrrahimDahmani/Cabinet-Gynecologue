<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <link rel="stylesheet" href="../style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link rel="stylesheet" href="../style/admin.css" />
  </head>

  <body>
    <?php include "../checkSignedIn.php" ?>
    <div class="container-fluid">
      <?php include "sideNavBar.php" ?>
      <section class="dashboard">
        <div class="dash-content">
          <div class="overview">
            <div class="title">
              <i class="fa-solid fa-chart-simple"></i>
              <span class="text">Overview</span>
            </div>

            <div class="boxes">
              <div class="box box1">
                <i class="fa-solid fa-user-tie"></i>
                <span class="text">Total Doctors</span>
                <span class="number">10</span>
              </div>
              <div class="box box2">
                <i class="fa-solid fa-people-group"></i>
                <span class="text">Total Patient</span>
                <span class="number">50</span>
              </div>
              <div class="box box3">
                <i class="fa-solid fa-scale-balanced"></i>
                <span class="text">Total Appointments</span>
                <span class="number">25</span>
              </div>
            </div>
          </div>

          <div class="activity">
            <div class="title">
              <i class="fa-solid fa-clock-rotate-left"></i>
              <span class="text">Recent Sign Up</span>
            </div>

            <div class="activity-data">
              <div class="data">
                <span class="data-title">Name</span>
                <span class="data-list">Prem Shahi</span>
                <span class="data-list">Deepa Chand</span>
                <span class="data-list">Manisha Chand</span>
                <span class="data-list">Pratima Shahi</span>
                <span class="data-list">Man Shahi</span>
                <span class="data-list">Ganesh Chand</span>
                <span class="data-list">Bikash Chand</span>
              </div>
              <div class="data">
                <span class="data-title">Email</span>
                <span class="data-list">premshahi@gmail.com</span>
                <span class="data-list">deepachand@gmail.com</span>
                <span class="data-list">prakashhai@gmail.com</span>
                <span class="data-list">manishachand@gmail.com</span>
                <span class="data-list">pratimashhai@gmail.com</span>
                <span class="data-list">manshahi@gmail.com</span>
                <span class="data-list">ganeshchand@gmail.com</span>
              </div>
              <div class="data">
                <span class="data-title">Joined</span>
                <span class="data-list">2022-02-12</span>
                <span class="data-list">2022-02-12</span>
                <span class="data-list">2022-02-13</span>
                <span class="data-list">2022-02-13</span>
                <span class="data-list">2022-02-14</span>
                <span class="data-list">2022-02-14</span>
                <span class="data-list">2022-02-15</span>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
