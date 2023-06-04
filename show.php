<?php
require('db.php');

$stmt = $conn->prepare("SELECT * FROM contact_infos");
$stmt->execute();

include_once('header.php');
?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($stmt->fetchAll() as $item) {
          ?>
            <tr>
              <th scope="row"><?php echo $item['id'] ?></th>
              <td><?php echo $item['name'] ?></td>
              <td><?php echo $item['email'] ?></td>
              <td><?php echo $item['subject'] ?></td>
              <td><?php echo $item['message'] ?></td>
              <td>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $item['id'] ?>">
                  Edit
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $item['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title <?php echo $item['id'] ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form method="POST" action="update.php">
                        <div class="modal-body">


                          <input type="hidden" name="id" value="<?php echo $item['id'] ?>">

                          <div class="mb-3">
                            <label for="name<?php echo $item['id'] ?>" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name<?php echo $item['id'] ?>" aria-describedby="emailHelp" value="<?php echo $item['name'] ?>">
                          </div>

                          <div class="mb-3">
                            <label for="email<?php echo $item['id'] ?>" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email<?php echo $item['id'] ?>" aria-describedby="emailHelp" value="<?php echo $item['email'] ?>">
                          </div>

                          <div class="mb-3">
                            <label for="subject<?php echo $item['id'] ?>" class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" id="subject<?php echo $item['id'] ?>" aria-describedby="emailHelp" value="<?php echo $item['subject'] ?>">
                          </div>

                          <div class="mb-3">
                            <label for="message<?php echo $item['id'] ?>" class="form-label">Message</label>
                            <textarea name="message" id="message<?php echo $item['id'] ?>" class="form-control"><?php echo $item['message'] ?></textarea>
                          </div>



                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <form method="GET" action="delete.php">
                  <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                  <button class="btn btn-danger" type="submit">
                    Delete
                  </button>
                </form>

              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>





<?php
include_once('footer.php');
?>


<?php
if (isset($_GET['status'])) {
  $id = $_GET['status'];
  if (isset($id) && $id == 'success') {
?>
    <script>
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Successfully Deleted',
        showConfirmButton: false,
        timer: 1500
      })
    </script>

  <?php
  } elseif ($id == 'update') {

  ?>
    <script>
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Successfully updated',
        showConfirmButton: false,
        timer: 1500
      })
    </script>
<?php
  }
}
?>