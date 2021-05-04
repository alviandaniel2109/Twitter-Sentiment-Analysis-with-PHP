<?php
session_start();
if($_SESSION['user']==null)
{
    header("location:index.php");
}
include('assets/views/headlog.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
</head>
<body>


<br><br><br><div class="container">
<center><h1><font color="white">BELAJAR DARI SENTIMEN</h1>
</center><br><br><br>
<center>Untuk mengetahui kategori sentimen pada komentar twitter, anda dapat memasukan terlebih dahulu keyword yang anda inginkan </center></font>
<body style="margin: 0 auto;width:100%;">
    <form class="pure-form" style="width:100%" action="text_processing.php" method="POST">
    
        <fieldset class="pure-group">
			<input type="text" name="keyword" class="pure-input-1-2" placeholder="Masukan Keyword">
            
        </fieldset>
    
        <br><button type="submit" name="submit" class="pure-button pure-input-1-2 pure-button-primary">Submit</button>
    </form>
</body>
</div><br>
<br>
<br>
<br>
<br>
<br>
    <!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 bg-dark">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Footer links -->
  <div class="row text-center text-md-left mt-3 pb-4 bg-dark">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold text-light bg-dark">Aplikasi Sentimen </h6>
      <p class="text-light bg-dark">Web untuk mengetahui kategori komentar secara otomatis.</p>
    </div>
    <hr class="w-100 clearfix d-md-none">

      <!--Copyright-->
    
      <p class="text-center text-md-left text-light bg-dark">© 2021 Copyright:
        <a href="https://github.com/alviandaniel2109">
          <strong> Github </strong>
        </a>
      </p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-5 col-lg-4 ml-lg-0">

      <!-- Social buttons -->
      <div class="text-center text-md-right">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-google-plus-g"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
        </ul>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/js/flame.js"></script>

</html>

