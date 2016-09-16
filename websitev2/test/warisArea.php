<!DOCTYPE html>
<html lang="en">
<?php include_once('head.php') ?>
<body role="document">

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Semakan Status Murid</h4>
      </div>
      <div class="modal-body">
        <form class="form-signin" role="form"  method="post"  action="warisArea2.php">
        <h2 class="form-signin-heading">Sila masukkan no MyKid Anak Anda</h2>
        <input type="text"  id="log_id" class="form-control" placeholder="MyKid Anak" required autofocus>

        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>    
</body>
</html>