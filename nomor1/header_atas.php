<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "50%";
        document.getElementById("mySidebar").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("mySidebar").style.height = "0";
    }
</script>

<!-- navbar -->
<?php 
    if(isset($_GET['data'])){
        $path = $_GET['data'];
    }
    else{
        $path = "";
    }
?>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a class="nav-link" href="<?php echo $path ?>menu_about.php">About</a><hr>
  <a class="nav-link" href="<?php echo $path ?>menu_affiliations.php">Affiliate</a><hr>
  <a class="nav-link" href="<?php echo $path ?>menu_services.php">Services</a><hr>
  <a class="nav-link" href="<?php echo $path ?>menu_karir.php">Careers</a><hr>
  <a class="nav-link" href="<?php echo $path ?>menu_kontak.php">Contacts</a><hr>
  <a class="nav-link" href="<?php echo $path ?>login.php">Login</a><br>
</div>


<nav class="navbar navbar-expand-lg navbar-dark" id="header_atas_s">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" style="border:none !important;" data-bs-toggle="collapse" onclick="openNav()" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown1">
        <ul class="navbar-nav" style="margin: auto;">
            <li class="nav-item">
            <a class="navbar-brand" href="<?php echo $path ?>index.php"><img src="https://tracker.dwipakharismamitra.com/Image/logokotasurabaya.png" class="d-inline-block align-top" alt="" width="200" height="50"></a>
        
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo $path ?>menu_about.php"><span id="selina_header">About</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo $path ?>menu_affiliations.php"><span id="selina_header">Affiliate</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo $path ?>menu_services.php"><span id="selina_header">Services</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo $path ?>menu_karir.php"><span id="selina_header">Careers</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo $path ?>menu_kontak.php"><span id="selina_header">Contacts</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo $path ?>login.php"> <img src="https://tracker.dwipakharismamitra.com/Image/search2.png"  alt="Flowers in Chania"> </a>
            </li>
        </ul>
        </div>
    </div>
</nav>