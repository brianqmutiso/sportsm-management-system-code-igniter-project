<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css">
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/all.js"></script>

<div class="container"><header class="header header_style_01">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style=" background-color:darkgrey;margin-left: 3px;margin-right: 3px;">
  <a class="se11" href=""><img src="<?php  $this->load->helper("url");
        echo base_url();?>image/im.jpeg" height="30" width="60" alt="Sports"><span class="ser1"> Sports</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item active">
              <a class="nav-link active" href="index" style="color: white;font-size:20px;">Home</a>
            </li>
            <li class="nav-item">
              <div class="dropdown" id="servces1">
                <a class="nav-link btn dropdown-toggle"  data-toggle="dropdown" href="index.php" style="font-size:20px;color: white;">Services</a>
                <ol class="dropdown-menu">
                  <li><a href="getall" class="form-control">Game Fixtures</a></li>
                  <li><a href="results" class="form-control">Game Results</a></li>
                </ol>
              </div>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="index#about"   style="color: white;font-size:20px;">Contacts</a>
            </li> 
             <li class="nav-item" id="reg">
              <a class="nav-link" href="#signup" class="modal" data-toggle="modal" style="color: white;font-size:20px;">Register</a>
            </li>
            <li class="nav-item" id="log">
              <a class="nav-link" href="#login" class="modal" data-toggle="modal" style="color: white;font-size:20px;">Login</a>
            </li>
            <li class="nav-item" id="logout">
              <a class="nav-link" href="logout" onclick="return confirm('Are You Sure You Want To exit??');" style="color: white;font-size:20px;">Logout</a>
            </li>
           
          </ul>
           </div>
      </nav></header></div><br><br><br>
      <?php
if (!isset($name)) {
?>
<script type="text/javascript"></script>
<?php
  # code...
}
else{
  echo "brian";
}
$this->load->library("session");
if ($this->session->userdata("logge_in")==TRUE) {
?><script type="text/javascript">
  document.getElementById("log").style.display="none";
  document.getElementById("reg").style.display="none";
</script>
  <?php
}else{
?><script type="text/javascript">document.getElementById("servces1").style.display="none";
document.getElementById("logout").style.display="none";</script>
<?php
}
      ?>
    



