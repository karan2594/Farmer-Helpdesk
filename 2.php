<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" href="plugins/materialize/css/materialize.css">
    <link rel="stylesheet" href="plugins/css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script>
  function ClearFields() {

     document.getElementById("v1").value = "";
     document.getElementById("v2").value = "";
     document.getElementById("v3").value = "";
     document.getElementById("v4").value = "";
     document.getElementById("v5").value = "";
     document.getElementById("v6").value = "";
     document.getElementById("v7").value = "";
}
</script>
</head>
  <body class= "teal lighten-4">
    <script src="https://code.jquery.com/jquery-2.2.3.js"></script>
    <script src="plugins/js/script.js"></script>
    <script src="plugins/materialize/js/materialize.min.js"></script>
    <nav class="green lighten-1">
      <div class="nav-wrapper">
          <a href="#" class="brand-logo center">Market Rates</a>
            <ul id="slide-out" class="side-nav light-greeen">
              <li class="active"><a href="#!"><span class="sidenav_content">Home</span></a></li>
              <!--<li><span class="sidenav_content">Books</span>
                <ul>-->
                  <li>Registration status</li>
                  <li>Contact Us</li>

                <!--</ul>
              </li>-->
            </ul>
      <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons padding_menu">menu</i></a>
    </div>

    </nav>
  </br></br>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="container">
      <div class="row">
        <div class="col m8 s7">
    <table class="tab">
      <tr>
        <td><span class="table_heading">Crop Name</span></td>
        <td><span class="table_heading">Price</span>&nbsp<span class="unit">(₹/Quintal)</span></td>
      </tr>
      <tr>
        <td>Wheat</td>
        <td><div class="input-field">
              <input type="text" name="v1" id="v1">
            </div>
        </td>
      </tr>
      <tr>
        <td>Rice</td>
        <td><div class="input-field">
              <input type="text" id="v2" name="v2">
            </div>
        </td>
      </tr>
      <tr>
        <td>Toor Dal</td>
        <td><div class="input-field">
              <input id="v3" type="text" class="value">
            </div>
        </td>
      </tr>
      <tr>
        <td>Maize</td>
        <td><div class="input-field">
              <input id="v4" type="text" class="value">
            </div>
        </td>
      </tr>
      <tr>
        <td>Sugarcane</td>
        <td><div class="input-field">
              <input id="v5" type="text" class="value">
            </div>
        </td>
      </tr>
      <tr>
        <td>Cotton</td>
        <td><div class="input-field">
              <input id="v6" type="text" class="value">
            </div>
        </td>
      </tr>
      <tr>
        <td>Wheat</td>
        <td><div class="input-field">
              <input id="v7" type="text" class="value">
            </div>
        </td>
      </tr>
    </table>
  </div>
  <div class="col m4 s5">
    <ul class="collection">
    <li class="collection-item avatar light-green lighten-4">
      <img src="plugins/images/market.jpg" alt="" class="circle circle-image responsive-img">
      <?php
      echo $_SESSION["id"];
      ?>
      
      <p><?php
      echo $_SESSION["place"];?><br>
         Market: Padra
      </p>

    </li>
  </div>
</div>
  </div>
  <div class="image">
    <img src="plugins/images/footer1.png" class="karamat">
  </div>
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large indigo">
      <i class="large material-icons">reorder</i></a>
    <ul>
      <li><a class="btn-floating red btn-large" onclick="ClearFields();"><i class="material-icons">delete</i></a></li>
      <li><input type= "submit" name="submit" id="submit" a class="btn-floating green darken-1 btn-large" onclick="insert1()"; ><i class="material-icons" type="submit">done_all</i></a></li>
      </ul>
      </form>
      <script>
      function insert1() {
      <?php
      if(isset($_POST['submit']))
{
      $name=$_SESSION["id"];
        $v1=$_POST["v1"];
        $v2=$_POST["v2"];
        echo $v1;
        $conn = mysqli_connect("localhost","root","");
        mysqli_select_db($conn,"login");
        mysqli_query($conn,"INSERT INTO `crops` (`id`, `isby`, `wheat`, `rice`) VALUES (NULL, 'as', '$v1', 'XA');");}
        ?>
      }
        </script>

  </div>

</body>
</html>
