<?php require_once APPROOT.'/views/inc/header.php'; ?>

<h1><?php echo $data['post']->title; ?></h1>
<a href="<?php echo URLROOT?>/posts" class="btn btn-light pull-left"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
<div class="bg-light p-2 mb-3">
  Created by <b><?php echo $data['post']->user_id;?></b> at <b><?php echo $data['post']->created_at;?></b>
</div>
<p><?php echo $data['post']->content; ?></p>
<hr>
<?php if($data['post']->user_id == $_SESSION['user_id']) :?>
  <div class="row justify-content-around">
    <div class="col-8">
      <a href="<?php echo URLROOT?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-success">Edit</a>
    </div>
    <div class="col-4">
      <form action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
        <input type="submit" value="Delete" class="btn btn-danger">
      </form>
    </div>
  </div>
<?php endif;?>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>
