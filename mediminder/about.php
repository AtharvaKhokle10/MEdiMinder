<?php
  session_start();
  
?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>MediMinder</title>
      </head>
      <title>
          MediMinder
      </title>
      <style>
        .ab {
          text-align: justify;
          text-justify: inter-word;
        }
        h3 {text-align: center;}
      </style>
    </head>
    <body style = "font-family:georgia,garamond,serif;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="welcome.php">
  <h1>MediMinder</h1>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <h5>
        <b><a class="nav-link" href="#"><i class="fa fa-info-circle" aria-hidden="true">&nbsp;About</i></a></b>
        <h5>
      </li>
      <li class="nav-item">
        <h5><b><a class="nav-link" href="logout.php"style:padding-top="10px"><i class="fa fa-power-off" aria-hidden="true">&nbsp;Logout</i></a></b></h5>
      </li>
    </ul>
    <div class="navbar-collapse collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"> <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo $_SESSION['username'] ?></a> </li>
      </ul>
    </div>
  </div>
</nav>

      <br>
        <div class="container">
            <h3 text-align: center;>Project Overview</h3>
            <div class="row">
              <div class="col-md-8 offset-2">
                <hr>
              </div>
            </div>
            <div class="about ">
              <div class="row">
                <div class="ab col-md-8 offset-2">
                <p>The growing technologies and lifestyle, aids health sectors in modernizing world exponentially. In current decade, only fifty percentages of people are aware about their medication schedule to receive the full advantage of their prescriptions. The rest of the people are very busy with their hectic schedule which results in irregular intake of medicines. Patients with gradual loss of memory like elderly patients forget to take right medicines at right time. Also, some people tend to miss some of their medicines due to very long prescriptions which are hard to remember. Resulting in the ineffectiveness of the treatment for the concerned patient. We saw these problems in hospitals & people around us, thus based on these problems we made IoT based smart medicine box which solve these problems by Setting up time table of prescribed medicines. And whenever the patient forgets to take their medicine it reminds them by alarming a buzzer. Also, the LED lights present above various compartments will guide the patients to take the right medicine at scheduled time.  Index Terms— Internet of Things (IoT), Smart medicine box, Old age patients, Buzzer, LED light.</p>
                </div>
        </div>
    </body>
</html>