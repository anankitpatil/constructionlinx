<?php include('../header.php'); ?>
<link rel="canonical" href="http://constructionlinx.com/" />
<title>Construction Linx | Recent News Articles</title>
<?php include('../nav.php'); ?>
<div class="container newspage">
  <div class="wrap">
    <?php
include("../admin/config/db.php");
$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);
mysql_select_db(DB_NAME, $connection);
	
$data = mysql_query('SELECT * FROM clinx_news') or die(mysql_error());
while($news = mysql_fetch_array($data)) { ?>
    <div class="item" id="<?php echo $news['id']; ?>">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <figure><img src="../uploads/<?php echo $news['image']; ?>" /></figure>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <h2><?php echo $news['title']; ?></h2>
          <h4><?php echo str_replace('-', '/', substr($news['modified'], 0, 10)); ?></h4>
          <p><?php echo substr($news['content'], 0, 480) . '...'; ?></p>
          <a href="./<?php echo str_replace(' ', '-', $news['title']); ?>" class="btn btn-default smooth">Read more<i class="fa fa-angle-right"></i></a> </div>
      </div>
    </div>
    <?php } ?>
    <div style="text-align:center"> <a href="../#product" class="btn btn-default smooth" title="Rhino Agriwash Defender - Automatic drive-through Vehicle disinfection and Wheel washing system download product specifications PDF">Home</a> </div>
  </div>
</div>
<?php include('../footer.php'); ?>