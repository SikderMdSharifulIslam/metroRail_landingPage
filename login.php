<?php
session_start();
require 'utility/header.php';
require 'utility/db.php';


?>

<div class="container place-content-center pb-8">
    <h1 style="color:#F05C75;" class="text-4xl font-bold pt-4 pb-4 text-center">Login</h1>
    <div class="flex place-content-center">
        <form class="card-body" method="POST" action="signIn_post.php">
            <div class="form-control">
                <label class="label">
                    <span class="label-text" style="color:#F05C75;">Username</span>
                </label>
                <input name="username" type="text" placeholder="username" class="input input-bordered" required />
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text" style="color:#F05C75;">Password</span>
                </label>
                <input name="password" type="password" placeholder="password" class="input input-bordered" required />
            </div>
            
            <div class="form-control mt-6">
                <button class="btn btn-error" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>


<?php require 'utility/footer.php' ?>