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
    <?php include "../checkSignedIn.php";
          include "../connect_server.php";
          $sql="select count(*) from doctors;";
          $countDoc=$conn->query($sql);
          $sqlPatient="select count(*) from patients;";
          $countPatient=$conn->query($sqlPatient);
          $sqlAppointment="select count(*) from appointments;";
          $countAppointment=$conn->query($sqlAppointment);
    ?>
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
                <span class="number"><?php echo $countDoc->fetch_assoc()['count(*)']?> </span>
              </div>
              <div class="box box2">
                <i class="fa-solid fa-people-group"></i>
                <span class="text">Total Patient</span>
                <span class="number"><?php echo $countPatient->fetch_assoc()['count(*)']?></span>
              </div>
              <div class="box box3">
              <i class="fa-solid fa-bed-pulse"></i>
                <span class="text">Total Appointments</span>
                <span class="number"><?php echo $countAppointment->fetch_assoc()['count(*)']?></span>
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
