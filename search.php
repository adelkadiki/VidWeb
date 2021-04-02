<?php include("templates/header.php") ?>

<section id="main" >

<div class="container">


<div style=" text-align:center; line-height: 2.8; margin-top:3%">Find a domain which suites your business and submit your request and we will contact you to know more about your project</div>

<div style=" text-align:center; margin-bottom: 2%">Please make sure the domain is "yourdomain.extention" without "www."</div>
<h5 id="res" style=" text-align:center; color:red;"></h5>
<h5 id="found" style=" text-align:center; color:green;"></h5>
<!-- <form id="domain-form" method="GET"> -->
  <div class="form-group">
    
    <input type="text" class="form-control" id="domain-inp"  placeholder="yourdomain.com">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  
  <div class="flex-centered">
  <button type="button" id="dom-sub" class="btn btn-primary  col-md-6 text-center">Search</button>
  </div>
<!-- </form> -->

<h5 id="getDomain" style=" text-align:center; "></h5>
<form action="info.php" id="domainForm">

<input  id="domain-sub" name="domain" type="hidden">
<div class="flex-centered">
<button type="button"  class="btn btn-success" id="sub-dom-btn"  disabled>Submit Domain </button>
</div>
</form>




</div>
</section>

<?php include("templates/footer.php") ?>