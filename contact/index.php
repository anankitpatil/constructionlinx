<?php include('../header.php'); ?>
<link rel="canonical" href="http://constructionlinx.com/" />
<title>Construction Linx</title>
<?php include('../nav.php'); ?>
<div class="container">
  <div class="map" id="map-canvas"></div>
</div>
<div class="container contact">
  <h2>Contact Us</h2>
  <div class="row">
    <div class="col-lg-6 col-md-6">
      <div class="alert alert-success"><strong>We've received your contact request. We will get in touch with you soon!</strong></div>
      <div class="alert alert-danger"><strong>Something went wrong! Please refresh the page and try again.</strong></div>
      <form id="contact" role="form" action="<?php echo $PATH; ?>scripts/contact.php" class="form-horizontal" method="post" data-bv-feedbackicons-valid="glyphicon glyphicon-ok" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
        <div class="form-group">
          <label for="InputName">Name</label>
          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
          <label for="InputEmail">Email</label>
          <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
        </div>
        <div class="form-group">
          <label for="InputMessage">Details of your Enquiry</label>
          <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
          <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
        </div>
      </form>
    </div>
    <div class="col-lg-6 col-md-6">
      <p><i>A:</i> Construction Linx<br />
		&nbsp;&nbsp;&nbsp;&nbsp;Unit 8<br />
		&nbsp;&nbsp;&nbsp;&nbsp;Crewe Hall Enterprise Park<br />
		&nbsp;&nbsp;&nbsp;&nbsp;Crewe<br />
		&nbsp;&nbsp;&nbsp;&nbsp;Cheshire<br />
		&nbsp;&nbsp;&nbsp;&nbsp;<strong>CW1 6UA</strong></p>
	  <p><i>T:</i> &nbsp;01270 848700</p>
	  <p><i>F:</i> &nbsp;01270 848701</p>
	  <p><i>E:</i> &nbsp;info@constructionlinx.co.uk</p>
    </div>
  </div>
</div>
<?php include('../footer.php'); ?>