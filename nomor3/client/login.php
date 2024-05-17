<!DOCTYPE html>
<html>
    <?php 
    session_start();
    unset($_SESSION['keykey']);
    ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<body style = "text-align: center">
    <h2>Login</h2>
    <?php if(isset($_GET['error'])){ echo "<h4>".$_GET['error']."</h4>";}?>
    <form action="index.php" method="post">
        <label for="fname">Name  </label>
        <input type="text" id="jb" name="jb"><br><br>
        <label for="fname">Password  </label>
        <input type="password"  id="jk" name="jk"><br>

        <br><br><input id="myBtn" type="button" onclick="tampil()" value="Login">


        <br><br>catatan login dengan name: sabil2 dan password: gogo
    </form>
    <div id="pemilihan"></div>

    <script>
    function tampil(){
        var name = document.getElementById("jb").value;
        var pass = document.getElementById("jk").value;

        var x = document.getElementById("myBtn");     
        x.setAttribute('type', 'button');   
        if(name == ""){swal("Name Can't be Empty");return;}
        if(pass == ""){swal("Name Can't be Empty");return;}
        x.setAttribute('type', 'submit'); 

        /*const xhttp = new XMLHttpRequest();
        xhttp.open("POST", "index.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("Name="+name+"&&Pass="+pass);
        xhttp.onprogress = function() {
            var e = document.getElementById("pemilihan");
            e.innerHTML = "<center> <img src='loading.gif' width='75' height='75' > </center>";
        }
        xhttp.onloadstart = function () {
            var e = document.getElementById("pemilihan");
            e.innerHTML = "<center> <img src='loading.gif' width='75' height='75' > </center>";
        };
        xhttp.onload = function() {
            var e1 = document.getElementById("pemilihan");
            e1.innerHTML = this.responseText;
        };
        xhttp.send(); */
    }
</script>
</body>
</html>