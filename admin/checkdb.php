<?php
include("config/db.php");
$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);
mysql_select_db(DB_NAME, $connection);

$data = mysql_query("SELECT * FROM clinx_news ORDER BY modified DESC") or die(mysql_error());

while($news = mysql_fetch_array($data)) { ?>
<div class="item" id="<?php echo $news['id']; ?>">
  <figure><img src="../uploads/<?php echo $news['image']; ?>" /></figure><div class="cont">
    <h2><?php echo $news['title']; ?></h2>
    <p><?php echo substr($news['content'], 0, 240) . '...'; ?></p>
  </div><a href="./show/<?php echo str_replace(' ', '-', $news['title']); ?>" class="smooth">Read more</a>
</div>
<?php } ?>