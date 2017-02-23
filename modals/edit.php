<div class="modal" id="edit" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="../functions/SetContent.php" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Edit <span id="edit-headline">...</span></h4>
        </div>
        <div class="modal-body">
          <input type="hidden" id="section" name="section" />
          <textarea class="form-control" id="editor" name="content" rows="15"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>