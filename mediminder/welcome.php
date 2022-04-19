<?php
require "config.php";
session_start();
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
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
<style>
@media screen and (max-width: 500px) {
.navbar a {
	float: none;
	display: block;
}
}
</style>
<body style = "font-family:georgia,garamond,serif;">
<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="#">
  <h1>MediMinder</h1>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <h5>
        <b><a class="nav-link" href="about.php"><i class="fa fa-info-circle" aria-hidden="true">&nbsp;About</i></a></b>
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
<!-- 
<div class="container mt-4">
<h3>! You can now use this website</h3>
<hr>
</div> -->

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
                         unset($_SESSION['status']);
                    }
                ?>
      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Sr no.</th>
            <th scope="col">Hours</th>
            <th scope="col">Minutes</th>
            <th scope="col">AM/PM</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        <form action="code.php" method="POST" name="f1">
          <tr>
            <td><div class="form-group mb-3">
                <label for="name">1</label>
              </div></td>
            <td><div class="form-group mb-3">
                <select name="hour1" required class="form-control">
                  <option value="NA" selected disabled>- - Hour - -</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div></td>
            <td><div class="form-group mb-3">
                <select name="minute1" required class="form-control">
                  <option value="NA" selected disabled>- - Minutes - -</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                  <option value="53">53</option>
                  <option value="54">54</option>
                  <option value="55">55</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                </select>
              </div></td>
            <td><div class="form-group mb-3">
                <select name="am1" required class="form-control">
                  <option value="NA" selected disabled>- - AM/PM - -</option>
                  <option value="AM">AM</option>
                  <option value="PM">PM</option>
                </select>
              </div></td>
            <td><div class="form-group mb-3">
                <button type="submit" name="med1" value="UPDATE" class="btn btn-success form-control ">Update Event</button>
              </div></td>
          </tr>
        </form>
        <form action="code.php" method="POST" name="f2">
          <tr>
            <td><div class="form-group mb-3">
                <label for="name">2</label>
              </div></td>
            <td><div class="form-group mb-3">
                <select name="hour2" required class="form-control">
                  <option value="NA" selected disabled>- - Hour - -</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div></td>
            <td><div class="form-group mb-3">
                <select name="minute2" required class="form-control">
                  <option value="NA" selected disabled>- - Minutes - -</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                  <option value="53">53</option>
                  <option value="54">54</option>
                  <option value="55">55</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                </select>
              </div></td>
            <td><div class="form-group mb-3">
                <select name="am2" required class="form-control">
                  <option value="NA" selected disabled>- - AM/PM - -</option>
                  <option value="AM">AM</option>
                  <option value="PM">PM</option>
                </select>
              </div></td>
            <td><div class="form-group mb-3">
                <button type="submit" name="med2" value="UPDATE" class="btn btn-success form-control ">Update Event</button>
              </div></td>
          </tr>
        </form>
        <form action="code.php" method="POST" name="f3">
          <tr>
            <td><div class="form-group mb-3">
                <label for="name">3</label>
              </div></td>
            <td><div class="form-group mb-3">
                <select name="hour3" required class="form-control">
                  <option value="NA" selected disabled>- - Hour - -</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div></td>
            <td><div class="form-group mb-3">
                <select name="minute3" required class="form-control">
                  <option value="NA" selected disabled>- - Minutes - -</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                  <option value="53">53</option>
                  <option value="54">54</option>
                  <option value="55">55</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                </select>
              </div></td>
            <td><div class="form-group mb-3">
                <select name="am3" required class="form-control">
                  <option value="NA" selected disabled>- - AM/PM - -</option>
                  <option value="AM">AM</option>
                  <option value="PM">PM</option>
                </select>
              </div></td>
            <td><div class="form-group mb-3">
                <button type="submit" name="med3" value="UPDATE" class="btn btn-success form-control ">Update Event</button>
              </div></td>
          </tr>
        </form>
        <form action="code.php" method="POST" name="f4">
          <tr>
            <td><div class="form-group mb-3">
                <label for="name">4</label>
              </div></td>
            <td><div class="form-group mb-3">
                <select name="hour4" required class="form-control">
                  <option value="NA" selected disabled>- - Hour - -</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div></td>
            <td><div class="form-group mb-3">
                <select name="minute4" required class="form-control">
                  <option value="NA" selected disabled>- - Minutes - -</option>
                  <option value="00">0</option>
                  <option value="01">1</option>
                  <option value="02">2</option>
                  <option value="03">3</option>
                  <option value="04">4</option>
                  <option value="05">5</option>
                  <option value="06">6</option>
                  <option value="07">7</option>
                  <option value="08">8</option>
                  <option value="09">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                  <option value="53">53</option>
                  <option value="54">54</option>
                  <option value="55">55</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                </select>
              </div></td>
            <td><div class="form-group mb-3">
                <select name="am4" class="form-control"required>
                  <option value="NA" selected disabled required>- - AM/PM - -</option>
                  <option value="AM">AM</option>
                  <option value="PM">PM</option>
                </select>
              </div></td>
            <td><div class="form-group mb-3">
                <button type="submit" name="med4" value="UPDATE" class="btn btn-success form-control ">Update Event</button>
              </div></td>
          </tr>
        </form>
          </tbody>
        
      </table>
      <h2>Medicine scheduling details</h2>
      <?php
            

                  $sql = "SELECT id, hour, minutes,ampm FROM scheduling";
                  $result = $con->query($sql);


                  if ($result->num_rows > 0) {
                      // output data of each row
                      echo "<table class=table table-hover table-dark>"; 
                      //echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>"; 
                      
                      echo"
                        <th> Id </th>
                        <th> Hours </th>
                        <th> Minutes  </th>
                        <th>  AM/PM  </th>
                        
                        ";
                      
                      while($row = $result->fetch_assoc()) {
                          echo "<tr><td>". $row["id"]. " </td><td> ". $row["hour"]. " </td><td>" . $row["minutes"] ."</td><td>".$row["ampm"]. "<br>";
                          
                      }
                      echo"</table>";
                  } else {
                      echo "0 results";
                  }

                  $con->close();
                ?>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> 

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
