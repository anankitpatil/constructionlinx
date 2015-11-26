<?php include('header.php'); ?>
<meta name="description" content="Construction Linx is a professional and reliable property maintenance company, Crewe, Cheshire & North West providing comprehensive building services on an ad hoc or planned basis. Flexible maintenance contracts are available that we tailor to your specific needs which can lead to a 40% reduction in annual maintenance costs."/>
<link rel="canonical" href="http://constructionlinx.com/" />
<title>Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | Welcome Home</title>
<?php include('nav.php'); ?>
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
    <div class="col-lg-3 col-md-3 col-sm-3"> <a class="mbutton smooth" href="<?php echo $PATH; ?>industrial/" class="smooth" title="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | Industrial">Industrial</a> </div>
<<<<<<< HEAD
    <div class="col-lg-3 col-md-3 col-sm-3"> <a class="mbutton smooth" href="<?php echo $PATH; ?>commercial/" class="smooth" title="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | Commercial">Commercial</a> </div>
=======
    <div class="col-lg-3 col-md-3 col-sm-3"> <a class="mbutton active" href="<?php echo $PATH; ?>commercial/" class="smooth" title="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | Commercial">Commercial</a> </div>
>>>>>>> origin/master
    <div class="col-lg-3 col-md-3 col-sm-3"> <a class="mbutton smooth" href="<?php echo $PATH; ?>education/" class="smooth" title="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | Education">Education</a> </div>
    <div class="col-lg-3 col-md-3 col-sm-3"> <a class="mbutton smooth" href="<?php echo $PATH; ?>residential/" class="smooth" title="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | Residential">Residential</a> </div>
  </div>
</div>
<div class="container-fluid green">
  <div class="container">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-1"></div>
      <div class="col-lg-10 col-md-10 col-sm-10">
        <p>Construction Linx is a professional and reliable property maintenance company providing comprehensive building services on an ad hoc or planned basis.</p>
        <div class="short-line"></div>
        <p>Flexible maintenance contracts are available that we tailor to your specific needs. They can lead to a 40% reduction in annual maintenance costs.</p>
      </div>
      <div class="col-lg-1 col-md-1 col-sm-1"></div>
    </div>
  </div>
</div>
<div class="container newsection">
  <div class="row">
    <h2>Recent News</h2>
    <div class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <?php include("admin/allnews.php");
        while($news = mysql_fetch_array($data)) { ?>
        <div class="item <?php if( !defined('SET_ACT') ){ echo 'active'; define('SET_ACT', TRUE); } ?>" id="<?php echo $news['id']; ?>">
          <div class="col-lg-4 col-md-4 col-sm-4">
<<<<<<< HEAD
            <figure><img src="http://renewgroupuk.com/constructionlinx/uploads/<?php echo $news['image']; ?>" /></figure>
=======
            <figure><img src="./uploads/<?php echo $news['image']; ?>" /></figure>
>>>>>>> origin/master
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <h2><?php echo $news['title']; ?></h2>
            <p><?php echo substr($news['content'], 0, 360) . '...'; ?></p>
            <a href="./news/<?php echo str_replace(' ', '-', $news['title']); ?>" class="btn btn-default smooth" title="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | <?php echo $news['title']; ?>">Read more</a> </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<div class="container areas">
  <h2>Areas we cover</h2>
  <div class="row">
    <div class="col-lg-6 col-md-6">
      <figure><img src="<?php echo $PATH; ?>images/map.jpg" alt="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West" /></figure>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">Bradford<br />
      Blackburn<br />
      Preston<br />
      Blackpool<br />
      Liverpool<br />
      Wigan<br />
      Bolton<br />
      Oldham<br />
      Halifax<br />
      Leeds<br />
      Wakefield<br />
      Huddersfield<br />
      Sheffield </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">Manchester<br />
      Warrington<br />
      Stockport<br />
      Chester<br />
      Crewe<br />
      Stoke-on-Trent<br />
      Derby<br />
      Walsall<br />
      Wolverhampton<br />
      Birmingham<br />
      Dudley<br />
      Worcester<br />
      Shrewsbury</div>
  </div>
</div>
<?php include('footer.php'); ?>