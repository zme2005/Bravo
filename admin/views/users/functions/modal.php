<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModalLong<?= $value["id"] ?>">
Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong<?= $value["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Wait!</h5>
      </div>
      <div class="modal-body">
        Are you sure that you want to delete <span class="text-danger"><?= $value["name"] ?></span>'s account?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="views/users/functions/delete.php?deleteUser=<?= $value["id"] ?>" class="btn btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
