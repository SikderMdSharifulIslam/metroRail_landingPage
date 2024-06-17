<?php
session_start();
require 'utility/header.php';
require 'utility/db.php';


?>

<div class="place-content-center text-center p-20">
    <form action="backend.php" method="POST" enctype="multipart/form-data">
        <div style="width:400px; color:#F05C75;"  class="my-4">
            <h1>Insert New Services:</h1>
            <div class="mb-4">
            <label for="">Title: </label>
            <input name="title" type="text" placeholder="Type here" class="input input-bordered input-error  w-full max-w-xs" />
            </div>

            <div class="mb-4">
            <label for="">Description: </label>
            <input name="details" type="text" placeholder="Type here" class="input input-bordered input-error  w-full max-w-xs" />
            </div>

            <div class="mb-4">
            <label for="">Image: </label>
            <input name="image" type="file" class="file-input file-input-bordered 
                    file-input-error  w-full max-w-xs" />
            <?php if (isset($_SESSION['size'])) : ?>
                <p style="color:#F05C75;"><?= $_SESSION['size'] ?></p>
            <?php endif;
            unset($_SESSION['size']) ?>

            <?php if (isset($_SESSION['invalid_extension'])) : ?>
                <p style="color:#F05C75;"><?= $_SESSION['invalid_extension'] ?></p>
            <?php endif;
            unset($_SESSION['invalid_extension']) ?>
            </div>

            <button type="submit" class="btn btn-error ">Submit</button>
        </div>
    </form>
</div>


<?php require 'utility/footer.php' ?>