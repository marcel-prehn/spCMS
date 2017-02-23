<div class="modal" id="modalUser" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="../functions/AddUser.php" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">New User <span id="edit-headline">...</span></h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="user" id="user" class="form-control" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group">
            <input type="password" name="passRe" id="passRe" class="form-control" placeholder="Password again" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>