<?php
include("../admin/config/db.php");
$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);
mysql_select_db(DB_NAME, $connection);
	
$esc = mysql_real_escape_string($_GET['title']);
$string = str_replace('-', ' ', $esc);
$data = mysql_query('SELECT * FROM clinx_news WHERE title = "'.$string.'" LIMIT 1') or die(mysql_error());
while($news = mysql_fetch_array($data)) { ?>
<?php include('../header.php'); ?>
<link rel="canonical" href="http://constructionlinx.com/" />
<title>Construction Linx | <?php echo $news['title']; ?></title>
<?php include('../nav.php'); ?>
<div class="container singlenews">
  <div class="wrap">
    <div class="row">
      <div class="item col-lg-12" id="<?php echo $news['id']; ?>">
        <figure><img src="../uploads/<?php echo $news['image']; ?>" /></figure>
        <h2><?php echo $news['title']; ?></h2>
        <h4><?php echo str_replace('-', '/', substr($news['modified'], 0, 10)); ?></h4>
        <div class="row">
          <div class="col-lg-2 col-md-2"></div>
          <div class="col-lg-8 col-md-8"> <?php echo nl2br($news['content']); ?></div>
        </div>
        <div class="col-lg-2 col-md-2"></div>
      </div>
    </div>
    <?php } ?>
  </div>
  <div style="text-align:center"> <a href="../news/" class="btn btn-default smooth" title="">All News</a> <a href="../" class="btn btn-default smooth" title="">Home</a> </div>
</div>
</div>
<?php include('../footer.php'); ?>