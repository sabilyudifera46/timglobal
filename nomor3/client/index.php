<?php
session_start();
if(isset($_SESSION['keykey'])==false){
    if(isset($_POST['jb'])==true){
        $pass = $_POST['jk'];
        $name = $_POST['jb'];
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost/timglobal/nomor3/server/user.php?name='.$name,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('pass' => $pass),
        CURLOPT_HTTPHEADER => array(
            'Cookie: PHPSESSID=i0aif8nh25108fa25cnm687i4r'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);
        if(isset($response[0]->key)==false){
            header("Location: login.php?error=Wrong Username or Password");
            return;
        }
        $keykey = $response[0]->key;
        $_SESSION['keykey']=$keykey;
    }else{
        header("Location: login.php?error=TimeOut");
        return;
    }
}
$keykey=$_SESSION['keykey'];
?>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
    <div style = "text-align: right"><input id="myBtn" type="button" onclick="logout()" value="LogOut"></div>
    <div style = "text-align: center"><h2>List Resto</h2></div>
    catatan untuk edit dan delete bisa klik pada salah satu bagian table 
    <nav class="nav">
    <a class="nav-link disabled" href="#">List Resto</a>
    <a class="nav-link " href="add_resto.php">Add Resto</a>  
</nav>

<div id="list" style="padding-left: 1%;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Image_url</th>
      <th scope="col">Adress</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
<?php

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/timglobal/nomor3/server/resto.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
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
if(strcmp($response,"expired token")==0){
    header("Location: login.php?error=TimeOut");
    return;
}
$response = ( json_decode($response));
for($i=0;$i<count($response);$i++){
    echo "<tr id='sabil".$i."' onclick='tampil(".$response[$i]->id.")' >";
    echo "<th scope='row'>".($i+1)."</th>";
    echo "<td>".$response[$i]->name."</td>";
    echo "<td>".$response[$i]->image_url."</td>";
    echo "<td>".$response[$i]->address."</td>";
    ?>
    <td>
        <div  id="tombol<?php echo $response[$i]->id; ?>" style="display:none;">
            <button type='button' class='btn btn-primary' onclick="edit(<?php echo $response[$i]->id; ?>)">Edit</button> 
            <button type='button' class='btn btn-danger' onclick="dalete(<?php echo $response[$i]->id; ?>)">X</button>
        </div>
    </td>
    <?php
    echo "</tr>";
}

?>
    </tbody>
</table>
</div>
<script>
    function tampil(yu){//done
        var to = document.getElementById("tombol"+yu);
        if(to.style.display == 'none'){
            to.style.display = 'block';
        }
        else{
            to.style.display = 'none';
        }
    }

    function dalete(yu){//done
        const xhttp = new XMLHttpRequest();
        xhttp.open("POST", "delete_proses.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id="+yu+"&&key=<?php echo $keykey; ?>");
        xhttp.onprogress = function() {
        }
        xhttp.onloadstart = function () {
        };
        xhttp.onload = function() {
            swal("Delete Successfully");
            setTimeout(myURL, 1500);
        };
        xhttp.send();
    }

    function myURL(){
        window.location.href = "index.php";
    }
    function edit(yu){
        window.location.href = "edit_resto.php?id="+yu;
    }
    function logout(){
        window.location.href = "login.php?error=Logout";
    }
</script>
</body>