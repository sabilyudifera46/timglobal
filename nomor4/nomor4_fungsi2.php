<!DOCTYPE html>
<html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body style = "text-align:left">
    <h2>Deretan bintang</h2>
    <label for="fname">JumlahBilangan  </label>
    <input type="text" id="jb" name="fname" inputmode="numeric"><br><br>
    <br><br><button onclick="tampil()">Hasil</button>

    <br><br>
    <div id="list"></div>

    <script>
    function tampil(){
        var kl = parseInt(document.getElementById("jb").value);
        var hasil = "";
        for(i=kl*2;i>=0;i-=2){
            var c = "";
            for(j=1;j<i;j++){
                c += "*";
            }
            hasil += (c+"<br>");
        }
        document.getElementById("list").innerHTML = hasil;
    }
    </script>
</body>
</html>