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
  <?php
        $conn = mysqli_connect("mysql.hostinger.in", "u956517326_akash", "nokia5001995");
        mysqli_select_db($conn,"u956517326_portf");
        $name=$_SESSION["id"];
        $result = mysqli_query($conn,"SELECT * FROM crops WHERE isby = '$name'"); 
          while($row = mysqli_fetch_array($result))
          {
            for($i=1;$i<=mysqli_num_rows($result);$i++)
              {
                $w1=$row['wheat'];
                $w2=$row['rice'];
                $w3=$row['toor dal'];
                $w4=$row['maize'];
                $w5=$row['sugarcane'];
                $w6=$row['cotton'];
                $w7=$row['date1'];
              }
          }
  ?>

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
              <input type="text" id="v3" name="v3">
            </div>
        </td>
      </tr>
      <tr>
        <td>Maize</td>
        <td><div class="input-field">
              <input type="text" id="v4" name="v4">
            </div>
        </td>
      </tr>
      <tr>
        <td>Sugarcane</td>
        <td><div class="input-field">
              <input type="text" id="v5" name="v5">
            </div>
        </td>
      </tr>
      <tr>
        <td>Cotton</td>
        <td><div class="input-field">
              <input type="text" id="v6" name="v6">
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
      echo $_SESSION["place"];?>
      </p>

    </li>
    </ul>
    <br><br><br>
    <table class="striped">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Item Name</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>wheat</td>
            <td><?php
            echo $w1;
            ?>
            </td>
          </tr>
          <tr>
            <td>rice</td>
            <td><?php
            echo $w2;
            ?>
            </td>
          </tr>
          <tr>
            <td>Toor Dal</td>
            <td><?php
            echo $w3;
            ?>
            </td>
          </tr>
          <tr>
            <td>Maize</td>
            <td><?php
            echo $w4;
            ?>
            </td>
          </tr>
          <tr>
            <td>Sugarcane</td>
            <td><?php
            echo $w5;
            ?>
            </td>
          </tr>
          <tr>
            <td>Cotton</td>
            <td><?php
            echo $w6;
            ?>
            </td>
          </tr>
          <tr>
            <td>Last</td>
            <td><?php
            echo $w7;
            ?>
            </td>
          </tr>
        </tbody>
      </table>
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
      <li><button type= "submit" name="submit" id="submit" class="btn-floating green darken-1 btn-large"><i class="material-icons" type="submit">done_all</i></button></li>
      </ul>
      </form>
      <?php
      if(isset($_POST['submit']))
        {
      
        $v1=$_POST["v1"];
        $v2=$_POST["v2"];
        $v3=$_POST["v3"];
        $v4=$_POST["v4"];
        $v5=$_POST["v5"];
        $v6=$_POST["v6"];
        date_default_timezone_set("Asia/Kolkata");
        $d1=date("Y-m-d h:i:sa");
        mysqli_query($conn,"DELETE FROM `crops` WHERE `crops`.`isby` = '$name'");
        mysqli_query($conn,"INSERT INTO `crops` (`id`, `isby`, `wheat`, `rice`, `toor dal`, `maize`, `sugarcane`, `cotton`, `date1`) VALUES (NULL, '$name', '$v1', '$v2', '$v3', '$v4', '$v5', '$v6', '$d1');");
        echo "<meta http-equiv='refresh' content='0'>";

        }
        ?>

  </div>

</body>
</html>
