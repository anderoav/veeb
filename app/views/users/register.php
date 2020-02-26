<?php require_once APPROOT.'/views/inc/header.php'; ?>
<!--- register form --->
<div class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2>Create an account</h2>
      <form action="<?php echo URLROOT; ?>/users/register" method="post">
        <div class="form-group">
          <label for="name">Name: <sup>*</sup></label>
          <input type="text" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email: <sup>*</sup></label>
          <input type="text" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="pass">Password: <sup>*</sup></label>
          <input type="password" id="pass" class="form-control">
        </div>
        <div class="form-group">
          <label for="passw2">Confirm password: <sup>*</sup></label>
          <input type="password" id="pass2" class="form-control">
        </div>
        <div class="row">
          <div class="col">
            <input type="submit" value="Register" class="btn btn-block btn-info">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>

