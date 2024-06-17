<?php
session_start();
require 'utility/header.php';
require 'utility/db.php';

$select_query = "SELECT * FROM services";
$data_from_db = mysqli_query($db_connect, $select_query);

?>

<header class="bg-[url('images/image_1.jpg')] bg-cover bg-no-repeat	text-white h-48">
    <nav>
        <div class="flex justify-between	">
            <div>
                <div class="dropdown ">
                    <div tabindex="0" role="button" class="m-1"><i class="fa-solid fa-bars"></i> Quick links</div>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 bg-orange-300">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                    </ul>
                </div>
            </div>
            <div class="flex">
                <div class="abc"><a href=""><i class="fa-solid fa-pen-to-square"></i> Register</a></div>
                <div class="pl-4 pr-2 "><a href="login.php"><i class="fa-solid fa-power-off"></i> Login</a></div>
            </div>
        </div>
    </nav>
    <div class="text-center container">
        <h1 class="text-6xl font-black place-content-center pt-6">The Dhaka Metro Rail</h1>
        <p class="w-xl text-center">
            Welcome to the Metro Rail Management System. <br> This website provides comprehensive information and services related to metro rail management.
        </p>
    </div>
</header>

<!-- About -->
<div class="container mx-auto place-content-center pb-8">
    <h1 style="color:#F05C75;" class="text-4xl font-bold pt-4 pb-4 text-center">About Us</h1>
    <div class="flex place-content-center">
        <div class="place-content-center max-w-xl mr-6">
            <img class="rounded ml-5" style="border: 6px solid #F05C75;" src="images/metro.jpg" alt="">
        </div>
        <div class="align-middle ml-4">
            <br>
            <br>
            <p class="align-middle	text-xl" style="width:400px; color:#F05C75;">Hi, I am Mahmudul Hasan. This is my Metro Rail Management System project. Feel free to connect with me on Facebook. This project aims to provide efficient management solutions for metro rail systems.</p>
            <br>
            <p class="text-xl" style="width:400px; color:#F05C75;">
                Visit:
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://x.com/?lang=en" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://bd.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </p>
        </div>
    </div>
</div>

<!-- Service -->
<div class="place-content-center pb-8 bg-[url('images/image_1.jpg')] bg-cover bg-no-repeat">
    <h1 style="color:white;" class="text-4xl font-bold pt-4 pb-4 text-center">Services</h1>
    <div class="flex place-content-center container">
        <div class="ml-10 container place-content-center text-center mx-auto grid md:grid-cols-3 mt-4 gap-4 sm:px-3">
            <?php
            foreach ($data_from_db as $service_details) :
            ?>
                <div class="card mx-2 bg-slate-800	 shadow-xl">
                    <figure class="px-4 pt-4">
                        <img src="images/<?= $service_details['image'] ?>" alt="Shoes" class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 style="color:#F05C75;" class="card-title"><?= $service_details['title'] ?></h2>
                        <p style="color:#F05C75;"><?= $service_details['details'] ?></p>
                        <div class="card-actions">
                            <button style="color:white;" class="btn btn-error">Learn</button>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>

<!-- Contact -->
<div class="container place-content-center pb-8">
    <h1 style="color:#F05C75;" class="text-4xl font-bold pt-4 pb-4 text-center">Contact</h1>
    <div class="flex place-content-center container mx-auto ml-10">
        <form class="card-body" method="POST" action="">
            <div class="form-control">
                <label class="label">
                    <span class="label-text" style="color:#F05C75;">Username</span>
                </label>
                <input name="username" type="text" placeholder="username" class="input input-bordered" required />
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text" style="color:#F05C75;">Email</span>
                </label>
                <input name="email" type="email" placeholder="email" class="input input-bordered" required />
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text" style="color:#F05C75;">Message</span>
                </label>
                <input name="message" type="text" placeholder="message" class="input input-bordered" required />
            </div>
            <div class="form-control mt-6">
                <button class="btn btn-error" type="submit">Send</button>
            </div>
        </form>
    </div>
</div>

<footer style="background-color: #F05C75; color:black">
    <p class="text-center font-bold">sikder &copy; 2024 </p>
</footer>


<?php require 'utility/footer.php' ?>