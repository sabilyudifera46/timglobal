<html>
<head>
<title>PT. Dwipa Kharisma Mitra</title>

<meta http-equiv="Content-Language" content="zh-tw"> <meta name="GENERATOR" content="Microsoft FrontPage 6.0"> <meta name="ProgId" content="FrontPage.Editor.Document"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="robots" content="index, follow"> <meta name="description" content="all"> <meta name="keywords" content="Depo Dwipa Kharisma Mitra, DKM"> <meta http-equiv="Copyright" content="dwipakharismamitra.com"> <meta name="author" content="dwipakharismamitra.com"> <meta http-equiv="imagetoolbar" content="no"> <meta name="language" content="Indonesia"> <meta name="revisit-after" content="7"> <meta name="webcrawlers" content="all"> <meta name="rating" content="general"> <meta name="spiders" content="all"> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="icon" href="Image/logokotasurabayaicon.png" type="image/icon type">

<!-- Bootstrap CSS -->
<script 
  src="https://cdn2.woxo.tech/a.js#615d0d14d953760016a049ff" 
  async data-usrc>
</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    function Container_Information(){         var igs2 = document.getElementById("inputGroupSelect02").value;         var Container_Information = document.getElementById("Container_Information").value;         var e = document.getElementById("Pencarian");         if(igs2 == ""){             alert("Please Choose One Branch");             return;         }if(Container_Information==""){             alert("Can not be Empty");             return;         }if(Container_Information.length>=40){             alert("Text Exceeds Maximum");             return;         }         e.innerHTML = "<center> <img src='Image/loading.gif' width='75' height='75' > </center>";         const xhttp = new XMLHttpRequest();         xhttp.open("POST", "Report2/ContainerInformation.php?data="+igs2+"&&data1="+Container_Information);         xhttp.onprogress = function() {             e.innerHTML = "<center> <img src='Image/loading.gif' width='75' height='75' > </center>";         };         xhttp.onloadstart = function () {             e.innerHTML = "<center> <img src='Image/loading.gif' width='75' height='75' > </center>";         };         xhttp.onload = function() {             e.innerHTML = "";             e.insertAdjacentHTML('beforeend',this.responseText);         };         xhttp.send();      }     function Container_Photos(){         var igs2 = document.getElementById("inputGroupSelect02").value;         var e = document.getElementById("Container_Photos").value;         if(igs2 == ""){             alert("Please Choose One Branch");             return;         }         if(e == ""){             alert("Can not be Empty");         }else if(e.length>=40){             alert("Text Exceeds Maximum");             return;         }         else{             window.open("http://8.215.30.130/gallery-home/?cabang="+igs2+"&searched="+e+"&select_container=", '_blank').focus();         }     }     function Container_History(){                  var igs2 = document.getElementById("inputGroupSelect02").value;         var Container_History = document.getElementById("Container_History").value;         var e = document.getElementById("Pencarian");         if(igs2 == ""){             alert("Please Choose One Branch");             return;         }         if(Container_History==""){             alert("Can not be Empty");             return;         }         if(Container_History.length>=40){             alert("Text Exceeds Maximum");             return;         }         e.innerHTML = "<center> <img src='Image/loading.gif' width='75' height='75' > </center>";         const xhttp = new XMLHttpRequest();         xhttp.open("POST", "Report2/ContainerHistory.php?data="+igs2+"&&data1="+Container_History);         xhttp.onprogress = function() {             e.innerHTML = "<center> <img src='Image/loading.gif' width='75' height='75' > </center>";         };         xhttp.onloadstart = function () {             e.innerHTML = "<center> <img src='Image/loading.gif' width='75' height='75' > </center>";         };         xhttp.onload = function() {             e.innerHTML = "";             e.insertAdjacentHTML('beforeend',this.responseText);         };         xhttp.send();      }     
        function eirin(){         
            //var igs2 = document.getElementById("inputGroupSelect02").value;         
            var e = document.getElementById("eirin").value;         
            //if(igs2 == ""){             alert("Please Choose One Branch");             return;         }         
            if(e == ""){             alert("Can not be Empty");         }
            else if(e.length>=40){             alert("Text Exceeds Maximum");             return;         }         
            else{             window.open("Report2/EIRIN2.php?container_number="+e, '_blank').focus();         }     
        }     
            
        function eirout(){         
            //var igs2 = document.getElementById("inputGroupSelect02").value;         
            var e = document.getElementById("eirout").value;        
            //if(igs2 == ""){             alert("Please Choose One Branch");             return;         }         
            if(e == ""){             alert("Can not be Empty");         }
            else if(e.length>=40){             alert("Text Exceeds Maximum");             return;         }        
            else{             window.open("Report2/EIROUT2.php?container_number="+e, '_blank').focus();         }     
        }     
        
        function npwp(){         var igs2 = document.getElementById("inputGroupSelect02").value;         var e = document.getElementById("npwp").value;         if(igs2 == ""){             alert("Please Choose One Branch");             return;         }         if(e == ""){             alert("Can not be Empty");         }else if(e.length>=40){             alert("Text Exceeds Maximum");             return;         }else{             window.open("Report2/npwp.php?npwp="+e+"&&cabang="+igs2, '_blank').focus();         }     }     function ororor(){         var igs2 = document.getElementById("inputGroupSelect02").value;         var e = document.getElementById("ororor").value;         if(igs2 == ""){             alert("Please Choose One Branch");             return;         }         if(e == ""){             alert("Can not be Empty");         }else if(e.length>=40){             alert("Text Exceeds Maximum");             return;         }else{             window.open("Report2/or.php?ororor="+e+"&&cabang="+igs2, '_blank').focus();         }     }     function ororor22(){         var igs2 = document.getElementById("inputGroupSelect02").value;         var e = document.getElementById("officialreceipt").value;         if(igs2 == ""){             alert("Please Choose One Branch");             return;         }         if(e == ""){             alert("Can not be Empty");         }else if(e.length>=40){             alert("Text Exceeds Maximum");             return;         }else{             window.open("Report2/OfficeReceipt.php?container_number="+e+"&&cabang="+igs2, '_blank').focus();         }     }

    function hideenbranch(){
        document.getElementById("sabilbutton").style.display = 'none';
    }
    function showbranch(){
        document.getElementById("sabilbutton").style.display = 'block';
    }
</script>
<?php include "css.php"; ?>
</head>
<body style="background-color: #f2f3f4 ; font-family: 'Avenir Next', sans-serif;">

<div style="position: absolute; width: 100%; height: 50%; z-index: 0;">
<?php include "slideshow.php"; ?>
</div>

<div>
    <?php include 'header_atas.php';?>

    <div id="selina_1">EXPLORE,DREAM & CREATE</div>
    <div id="selina_modiffff">EXPLORE,DREAM & CREATE</div>
    <div style="padding-bottom: 2%;text-align: center; z-index: 1; position: relative;">
        <a class="nav-link" href="menu_kontak.php">
        <button class="btn" type="button" id="button_selina1">
            <div id="btn_baru_baru">READ MORE</div>
        </button>
        </a>
    </div>
</div>

<div style="background-color:white; padding-top: 7.5%;padding-bottom: 3%;">
<div id="selina_2_search"></div>
<div class="container" style="border-style: outset; border-color: #DDDDDD;">
  <div class="row">
    <div class="col-md-6" style="height: 400px;background-position: center;  padding-top: 1.5%;background-image: url('https://tracker.dwipakharismamitra.com/Image/IMG_3570.JPG'); background-repeat: no-repeat;background-size: 70% 100%;">
    </div>
    <div class="col-md-6">
        <div id="selina_2">WE ARE THE HOME TECHNOLOGY EXPERTS</div>
        <div id="selina_5" >We are always looking for skilled construction professionals to join our team. If you think you’d make a good fit, have a look at our open positions, or leave an unsolicited application.</div>
        <div id="buton1">
            <a class="nav-link" href="menu_karir.php">
            <button class="btn" type="button" id="button_selina4">
                <div style=" padding-top: 5%;padding-bottom: 5%;font-size: 16px;font-weight: bold;color:chartreuse;">Read More</div>
            </button>
            </a>
        </div>
    </div>
  </div>
</div>
</div>

<div id="Pencarian"  ></div>

<div style="background-image: url('https://tracker.dwipakharismamitra.com/Image/grdgfdgdf.png'); background-size: 100% 60%; background-repeat: no-repeat;">
    <div id="selina_22">WORKING AREAS</div><br>
    <div class="row">
    <div class="col-md-4">
        <div class="card">
        <img src="https://www.w3schools.com/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%;  height: 200px;">
        <h1>Tailored Jeans</h1>
        <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
        <p><button>Add to Cart</button></p>
        </div>
        <br>
    </div>
    <div class="col-md-4">
    <div class="card">
        <img src="https://www.w3schools.com/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%; height: 200px;">
        <h1>Tailored Jeans1</h1>
        <p>Some text about the jeans1. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
        <p><button>Add to Cart</button></p>
        </div>
        <br>
    </div>
    <div class="col-md-4">
    <div class="card">
        <img src="https://www.w3schools.com/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%; height: 200px;">
        <h1>Tailored Jeans2</h1>
        <p>Some text about the jeans2. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
        <p><button>Add to Cart</button></p>
        </div>
        <br>
    </div>
    </div>
</div>

<div style="background-color:white; text-align: center;padding-top: 2%;">
<nav style="padding-left: 10%;padding-right: 10%;">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?php include "contoh2.php"; ?></div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>

    
</div>

<div  style="background-color: white; padding-top: 5%;padding-bottom: 1%;">
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div id="selina_2" style="text-align: center;">WHAT PEOPLE SAYING</div>
        <div id="selina_5"  style="text-align: center;">We are always looking for skilled construction professionals to join our team. If you think you’d make a good fit, have a look at our open positions, or leave an unsolicited application.</div>
        <div  style="text-align: center;">
            <a class="nav-link" href="menu_karir.php">
            <button class="btn" type="button" id="button_selina4" >
                <div style=" font-size: 16px;font-weight: bold;color:chartreuse;">Job Positions</div>
            </button>
            </a>
        </div>
    </div>
    <div class="col-md-6" style="height: 400px; background-color:darkgrey ; padding-top: 1.5%;background-image: url('https://tracker.dwipakharismamitra.com/Image/IMG_3570.JPG'); background-size: cover;">
    </div>
  </div>
</div>
</div>

<div  style="background-color: white; padding-bottom: 5%;">
<div id="selina_2" style="text-align: center;">AWERSOME PORTOFOLIO</div>
<div class="container">
  <div class="row">
    <div class="col" id="awersome" style="height: 300px; background-color:darkgrey ; padding-top: 1.5%;background-image: url('https://tracker.dwipakharismamitra.com/Image/IMG_3570.JPG'); background-size: cover;">
        <div class="container22">
            <div class="overlay">
                <div class="text">VIEW</div>
            </div>
        </div>
    </div>
    <div class="col" id="awersome" style="height: 300px; background-color:darkgrey ; padding-top: 1.5%;background-image: url('https://tracker.dwipakharismamitra.com/Image/IMG_3571.JPG'); background-size: cover;">
        <div class="container22">
            <div class="overlay">
                <div class="text">VIEW</div>
            </div>
        </div>
    </div>
    <div class="col" id="awersome" style="height: 300px; background-color:darkgrey ; padding-top: 1.5%;background-image: url('https://tracker.dwipakharismamitra.com/Image/IMG_3572.JPG'); background-size: cover;">
        <div class="container22">
            <div class="overlay">
                <div class="text">VIEW</div>
            </div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col" id="awersome" style="height: 300px; background-color:darkgrey ; padding-top: 1.5%;background-image: url('https://tracker.dwipakharismamitra.com/Image/IMG_3572.JPG'); background-size: cover;">
        <div class="container22">
            <div class="overlay">
                <div class="text">VIEW</div>
            </div>
        </div>
    </div>
    <div class="col" id="awersome" style="height: 300px; background-color:darkgrey ; padding-top: 1.5%;background-image: url('https://tracker.dwipakharismamitra.com/Image/IMG_3571.JPG'); background-size: cover;">
        <div class="container22">
            <div class="overlay">
                <div class="text">VIEW</div>
            </div>
        </div>
    </div>
    <div class="col" id="awersome" style="height: 300px; background-color:darkgrey ; padding-top: 1.5%;background-image: url('https://tracker.dwipakharismamitra.com/Image/IMG_3570.JPG'); background-size: cover;">
        <div class="container22">
            <div class="overlay">
                <div class="text">VIEW</div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>

<div style="background-color: white; position:relative; bottom: 0; height: 90px; width: auto;">
</div>

<?php include 'footer.php'; ?>

</body>
</html>