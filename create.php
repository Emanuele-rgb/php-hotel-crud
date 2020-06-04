
<?php

include __DIR__ . '/partials/templates/head.php';


 ?>




    <main class="container">
      <div class="row">
        <div class="col-12">
          <header class="my-4">
            <h1 class="text-primary">Create new Room</h1>
          </header>

          <form action="./partials/create/server.php" method="POST">
            <div class="form-group">
              <label for="room_number">Room number</label>
              <input class="form-control" type="text" name="room_number" id="room_number" value="" >
            </div>

            <div class="form-group">
              <label for="beds">Beds number</label>
              <input class="form-control" type="text" name="beds" id="beds" value="" >
            </div>

            <div class="form-group">
              <label for="floor">Floor</label>
              <input class="form-control" type="text" name="floor" id="floor" value="" >
            </div>

            <div class="form-group text-right">
              <input class="btn btn-primary" type="submit" value="Create" >
            </div>

          </form>



        </div>
      </div>
    </main>

    <?php include __DIR__ . '/partials/templates/footer.php'; ?>
