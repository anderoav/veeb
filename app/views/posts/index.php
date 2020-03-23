<?php require_once APPROOT.'/views/inc/header.php'; ?>
  <div class="row mb-3">
    <div class="col-md-6">
      <h1>Newest blog posts</h1>
<?php if(isset($_SESSION['user_id'])) :?>
      <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary pull-left"><i class="fa fa-plus"
                                                                                      aria-hidden="true"></i> Add Post</a>
<?php endif;?>
    </div>

  </div>
<?php foreach ($data['posts'] as $post) : ?>
  <div class="card card-body mb-3">
    <h3 class="card-title"><?php echo $post->title; ?></h3>
    <div class="bg-light p-2 mb-3">Created by <b><?php echo $post->name; ?></b> at <b><?php echo $post->postCreated;
    ?></b></div>
    <p class="card-text"><?php echo $post->content; ?></p>
    <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId;?>" class="btn btn-primary">Read more...</a>
  </div>
<?php endforeach; ?>
  </div>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>