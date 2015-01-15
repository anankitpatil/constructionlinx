<?php
include("config/db.php");
$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);
mysql_select_db(DB_NAME, $connection);
	
$data = mysql_query("SELECT * FROM clinx_news ORDER BY modified DESC LIMIT 1") or die(mysql_error());
while($news = mysql_fetch_array($data)) { ?>
<div class="item smooth" id="<?php echo $news['id']; ?>">
        <figure><img src="../uploads/<?php echo $news['image']; ?>" /></figure><div class="alltext">
          <h2><?php echo $news['title']; ?></h2>
          <h4><?php echo substr($news['modified'], 0, 10); ?></h4>
          <p><?php echo substr($news['content'], 0, 240) . '...'; ?></p>
        </div>
        <a href="../show/<?php echo str_replace(' ', '-', $news['title']); ?>" class="linky" target="_blank"><i class="fa fa-external-link"></i></a> <a class="edit" type="button" data-toggle="modal" data-target="#editModal" href="#" id="<?php echo $news['id']; ?>"><i class="fa fa-pencil"></i></a> <a class="delete" href="#" id="<?php echo $news['id']; ?>"><i class="fa fa-close"></i></a> </div>
<?php } ?>