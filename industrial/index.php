<?php include('../header.php'); ?>
<meta name="description" content="Construction Linx is a professional and reliable property maintenance company providing comprehensive building services on an ad hoc or planned basis. Construction Linx has specialised in maintaining industrial buildings including factories and warehouses for over 10 years. We offer a variety service and inspection options and can maintain the inside and outside of your premises on an emergency, ad-hoc or planned basis."/>
<link rel="canonical" href="http://constructionlinx.com/industrial/" />
<title>Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | Industrial</title>
<?php include('../nav.php'); ?>
<div class="container">
  <ul class="rslides">
    <li> <img src="<?php echo $PATH; ?>images/home_s_1.jpg" alt="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West" />
      <p>We respond quickly to emergencies</p>
    </li>
    <li> <img src="<?php echo $PATH; ?>images/home_s_2.jpg" alt="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West" />
      <p>We perform routine maintenance tasks<br />
        including servicing and inspection to ensure legislative compliance</p>
    </li>
    <li> <img src="<?php echo $PATH; ?>images/home_s_3.jpg" alt="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West" />
      <p>We consult on and carry out preventative maintenance</p>
    </li>
    <li> <img src="<?php echo $PATH; ?>images/home_s_4.jpg" alt="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West" />
      <p>We undertake building or renovation projects of any size</p>
    </li>
  </ul>
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3">
      <a class="mbutton active" href="
        <?php echo $PATH; ?>industrial/" class="smooth" title="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | Industrial">Industrial
      </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3">
      <a class="mbutton smooth" href="
        <?php echo $PATH; ?>commercial/" class="smooth" title="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | Commercial">Commercial
      </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3">
      <a class="mbutton smooth" href="
        <?php echo $PATH; ?>education/" class="smooth" title="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | Education">Education
      </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3">
      <a class="mbutton smooth" href="
        <?php echo $PATH; ?>residential/" class="smooth" title="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | Residential">Residential
      </a>
    </div>
  </div>
</div>
<div class="container greenbox">
  <h2>Industrial</h2>
  <div class="col-lg-12">
    <div>
      <?php include("../admin/allsections.php");
	  while($sections = mysql_fetch_array($data)) { ?>
      	<p><?php if($sections['title'] == 'INDUSTRIAL') {
			echo nl2br($sections['content']); ?>
	  <blockquote>
        <footer><?php echo $sections['ref']; } ?></footer>
      </blockquote>
      <?php } ?>
    </div>
  </div>
</div>
<?php include('../footer.php'); ?>