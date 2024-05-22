<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style = "text-align: center">
    <h2>Deretan Genap</h2>
    <label for="fname">JumlahBilangan  </label>
    <input type="text" id="jb" name="fname" inputmode="numeric"><br><br>
    <label for="fname">JumlahKelompok  </label>
    <input type="text" id="jk" name="fname" inputmode="numeric"><br>

    <br><br><button onclick="tampil()">Hasil</button>

    <br><br>
    <div id="list"></div>

    <script>
    function tampil(){
        var kl = parseInt(document.getElementById("jb").value);
        var kl1 = parseInt(document.getElementById("jk").value);
        let counter=0;
        var juju = parseInt(Math.round(kl/kl1));
        //console.log(juju);
        var hasil = "";
        var tr = 0;
        if(isNaN(kl)==false || isNaN(kl1)==false){
            for (let i = 1;; i++) {
                if(i==1){
                    hasil += "[";
                }
                if(i%2==0){
                    hasil += (i);
                    if(kl-counter!=1){
                        hasil += ",";
                    }
                    counter++;
                }
                if(counter%juju==0 && counter>0 && kl-counter!=1 && kl!=counter){
                    if(tr==0){
                        hasil = hasil.replace(/.$/,"");
                        hasil += "]";
                        tr++;continue;
                    }if(tr==1){
                        hasil +="[";
                        tr++;
                        tr=0;continue;
                    }
                }

                if(counter>=kl){hasil += "]";console.log("]");break;}
            }

            document.getElementById("list").innerHTML = hasil;
        }
        else{
            swal("Only Number");
        }
    }
    </script>

</body>
</html>