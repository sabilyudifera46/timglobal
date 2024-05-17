<?php
session_start();
if(isset($_SESSION['keykey'])==false){
    header("Location: login.php?error=TimeOut");
    return;
}
$keykey=$_SESSION['keykey'];
$id = $_GET['id'];

?>
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/timglobal/nomor3/server/resto.php?id='.$id,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 3,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'key: '.$keykey,
    'Cookie: PHPSESSID=i0aif8nh25108fa25cnm687i4r'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
$response = (json_decode($response));

?>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
    <div style = "text-align: center"><h2>Edit Resto</h2></div>
    <nav class="nav">
    <a class="nav-link " href="index.php">List Resto</a>
    <a class="nav-link disabled" href="#">Edit Resto</a>  
</nav>


<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
        <label for="fname">Name  </label><br><br>
        <label for="fname">image_url</label><br><br>
        <label for="fname">address</label><br><br>
    </div>
    <div class="col-md-auto">
    <input type="text" id="nn" name="nn" value="<?php echo $response[0]->name;?>"><br><br>
    <input type="text" id="image_url" name="image_url" value="<?php echo $response[0]->image_url;?>"><br><br>
    <input type="text" id="address" name="address" value="<?php echo $response[0]->address;?>"><br><br>
    </div>
  </div>
</div>

<div id="list" style="text-align: center"> 
<br><input id="myBtn" type="button" onclick="add()" value="Edit">
</div>

<script>
    function add(){
        var name = document.getElementById("nn").value;
        var pass = document.getElementById("image_url").value;
        var pass1 = document.getElementById("address").value;

        if(name == ""){swal("Name Can't be Empty");return;}
        if(pass == ""){swal("Image Can't be Empty");return;}
        if(pass1 == ""){swal("Address Can't be Empty");return;}

        const xhttp = new XMLHttpRequest();
        xhttp.open("POST", "edit_resto_proses.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("name="+name+"&&id=<?php echo $id; ?>"+"&&pass="+pass+"&&pass1="+pass1+"&&key=<?php echo $keykey; ?>");
        xhttp.onprogress = function() {
        }
        xhttp.onloadstart = function () {
        };
        xhttp.onload = function() {
            swal("Edit Successfully");
            setTimeout(myURL, 1500);
        };
        xhttp.send();
    }
    function myURL(){
        window.location.href = "index.php";
    }
</script>

</body>