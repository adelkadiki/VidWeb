<?php 


$pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache'); 
if($pageRefreshed == 1){
  header("Location:/");
}

if( $_GET['domain']){

  $domain = $_GET['domain'];

 

} else {

  header("Location: search.php");
 }

 include("templates/header.php");

//include 'autoload.php'; ?>
<section id="main" >

<div class="container" >


<h5 id="client-domain" style="margin-top:7%">Domain :<?php echo $domain; ?></h5>  

<h5 id="client-name" class="client-warn"></h5>
<h5 id="client-email" class="client-warn"></h5>
<h5 id="valid-email" class="client-warn"></h5>

<h5 id="submit-line"></h5>

<form id="client-form">

  <input type="hidden" value="<?php echo $domain; ?>" name="domain"  />

  <label for="name">Name</label>
  <div class="form-group">
    
    <input type="name" class="form-control" name="name"  id="clientname">
    
  </div>
  <label for="email">Email</label>
  <div class="form-group">
    
    <input type="text" class="form-control"  name="email" id="clientemail">
  </div>
  
  <label for="email">Phone Number (Optional)</label>
  <div class="form-group">
    
    <input type="text" class="form-control"  name="phone" id="clientphone">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</section>




<?php include("templates/footer.php");?>
