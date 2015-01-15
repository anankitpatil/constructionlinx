<div class="container">
  <div class="row admin">
    <div class="col-lg-9 col-md-9 col-sm-9 nopadding news">
      <?php include("allnews.php");
  while($news = mysql_fetch_array($data)) { ?>
      <div class="item smooth" id="<?php echo $news['id']; ?>">
        <figure><img src="../uploads/<?php echo $news['image']; ?>" /></figure><div class="alltext">
          <h2><?php echo $news['title']; ?></h2>
          <h4><?php echo substr($news['modified'], 0, 10); ?></h4>
          <p><?php echo substr($news['content'], 0, 240) . '...'; ?></p>
        </div>
        <a href="../show/<?php echo str_replace(' ', '-', $news['title']); ?>" class="linky" target="_blank"><i class="fa fa-external-link"></i></a> <a class="edit" type="button" data-toggle="modal" data-target="#editModal" href="#" id="<?php echo $news['id']; ?>"><i class="fa fa-pencil"></i></a> <a class="delete" href="#" id="<?php echo $news['id']; ?>"><i class="fa fa-close"></i></a> </div>
      <?php } ?>
    </div>
    <div class="col-lg-3 col-md-3col-sm-3 rightnav nopadding">
      <div class="uname">Username: <b><?php echo $_SESSION['user_name']; ?></b></div>
      <a class="addnews" type="button" data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-plus"></i>Add an entry</a> <a class="logout" href="./index.php?logout=true"><i class="fa fa-sign-out"></i>Logout</a> </div>
  </div>
</div>
<!-- Form Content -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add a new entry</h4>
      </div>
      <div class="modal-body form-group row">
          <form class="add-form form-horizontal" enctype="multipart/form-data">
            <div class="col-lg-12">
              <label for="title">Title</label>
              <input type="text" class="title form-control" name="title" id="title" value="Enter the title here..." />
            </div>
            <div class="col-lg-12">
              <label for="content">Content</label>
              <textarea name="content" class="content form-control" id="content">Enter the content here...</textarea>
            </div>
            <div class="col-lg-12">
              <label for="image">Upload an image</label>
              <input type="file" class="image form-control" name="image" />
            </div>
          </form>
          <div class="subtract"> <img src="../images/loading.gif" /> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default exit" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Loading...</h4>
      </div>
      <div class="modal-body form-group row">
          <form class="edit-form form-horizontal" enctype="multipart/form-data">
            <div class="col-lg-12">
              <label for="title">Title</label>
              <input type="text" class="title form-control" name="title" id="title" value="Enter the title here..." />
            </div>
            <div class="col-lg-12">
              <label for="content">Content</label>
              <textarea name="content" class="content form-control" id="content">Enter the content here...</textarea>
            </div>
            <div class="col-lg-12">
              <label for="image">Upload an image</label>
              <input type="file" class="image form-control" name="image" />
            </div>
            <div class="col-lg-12">
              <a class="imagery" href="#" target="_blank"></a>
            </div>
          </form>
          <div class="subtract"> <img src="../images/loading.gif" /> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default exit" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save">Save changes</button>
      </div>
    </div>
  </div>
</div>
