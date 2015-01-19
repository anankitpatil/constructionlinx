<?php include('../header.php'); ?>
<meta name="description" content="Construction Linx is a professional and reliable property maintenance company, Crewe, Cheshire & North West providing comprehensive building services on an ad hoc or planned basis. Flexible maintenance contracts are available that we tailor to your specific needs which can lead to a 40% reduction in annual maintenance costs."/>
<link rel="canonical" href="http://constructionlinx.com/news/" />
<title>Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | Recent News Articles</title>
<?php include('../nav.php'); ?>
<div class="container newspage">
  <div class="wrap">
    <?php
include("../admin/config/db.php");
$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);
mysql_select_db(DB_NAME, $connection);
	
$data = mysql_query('SELECT * FROM clinx_news ORDER BY modified DESC') or die(mysql_error());
while($news = mysql_fetch_array($data)) { ?>
    <div class="item" id="<?php echo $news['id']; ?>">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <figure><img src="../uploads/<?php echo $news['image']; ?>" alt="Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | <?php echo $news['title']; ?>" /></figure>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <h2><?php echo $news['title']; ?></h2>
          <h4><?php echo str_replace('-', '/', substr($news['modified'], 0, 10)); ?></h4>
          <p><?php echo substr($news['content'], 0, 480) . '...'; ?></p>
          <a href="./<?php echo str_replace(' ', '-', $news['title']); ?>" class="btn btn-default smooth" title=">Construction Linx Property Maintenance & Home Improvements Company, Crewe, Cheshire & North West | <?php echo $news['title']; ?>">Read more<i class="fa fa-angle-right"></i></a> </div>
      </div>
    </div>
    <?php } ?>
    <div style="text-align:center"> <a href="../#product" class="btn btn-default smooth homeb" title="Rhino Agriwash Defender - Automatic drive-through Vehicle disinfection and Wheel washing system download product specifications PDF">Home</a> </div>
  </div>
</div>
<?php include('../footer.php'); ?>