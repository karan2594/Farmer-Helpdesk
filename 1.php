<?php
session_start();
?>
<html>
  <head>
    <link rel="stylesheet" href="plugins/materialize/css/materialize.css">
    <link rel="stylesheet" href="plugins/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="plugins/js/jquery.js"></script>
    <script src="plugins/js/parallex.min.js"></script>


<script>
      $(function(){
        var x = navigator.userAgent;
        if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
          $('#ios-notice').removeClass('hidden');
          $('.parallax-container').height( $(window).height() * 0.5 | 0 );

        } else {
          $(window).resize(function(){
              var parallaxHeight = Math.max($(window).height() * 0.5, 100) | 0;
            $('.parallax-container').height(parallaxHeight);
          }).trigger('resize');
        }
      });
    </script>


  </head>

  <body class= "green lighten-1">
    <script src="https://code.jquery.com/jquery-2.2.3.js"></script>
    <script src="plugins/js/script.js"></script>
    <script src="plugins/materialize/js/materialize.min.js"></script>

    <div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="plugins/images/market.jpg">
               <center><div class="container">
                 <h3>&nbsp</h3>
                 <h3>&nbsp</h3>
               <h3 style="color:white">Live Market Rate</h3>
               <p style="color:white">Description here</p>
               </div></center>
             </div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="green lighten-1">
      <div class="container ">
        <div class="row form-padding">
          <div class="input-field col m6 s6">
              <input id="user_name" name="user_name" type="text">
              <label for="user_name">User Name</label>
          </div>
          <div class="input-field col m6 s6">
              <input id="password" name="password" type="password">
              <label for="password">Password</label>
          </div>
      </div>
      <center>
      <div class="row box1-padding">
        <input type="submit" value="sumbit" name="sumbit" class="btn waves-effect waves-green">
      </div>
    </center>
      </div>
      </form>

  <div class="image">
    <img src="plugins/images/footer1.png" class="footimg">
  </div>
  <div class="fixed-action-btn" id="flot">
    <a class="btn-floating lime">
      <i class="large material-icons">book</i>
    </a>
  </div>

  <div class="fixed-action-btn">
    <a class="btn-floating lime">
      <i class="large material-icons">message</i>
    </a>
  </div>


<?php
if(isset($_POST['sumbit'])){
$user_name = $_POST["user_name"];
$password = $_POST["password"];
$count = "0";

$conn = mysqli_connect("mysql.hostinger.in", "u956517326_akash", "nokia5001995");
        mysqli_select_db($conn,"u956517326_portf");

$result = mysqli_query($conn,"SELECT * FROM details WHERE id = '$user_name' and password = '$password'"); 
while($row = mysqli_fetch_array($result))
{
  for($i=1;$i<=mysqli_num_rows($result);$i++)
  {
    if($user_name == $row['id'] && $password == $row['password'])
    {
      $url='./2.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';


   $pl = $row['place'];
   $count = "1";  

$_SESSION["id"] = "$user_name";
$_SESSION["place"] = "$pl";
$_SESSION["ps"] = "$password";
}
}
}
if($count!="1"){
  echo "<script>alert('enter valid user name and password')</script>";
}
}


?>



</body>
</html>
