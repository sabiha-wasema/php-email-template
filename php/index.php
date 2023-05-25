<?php

$head = <<<HEAD
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
          crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
          <style>
          p{
    margin: 0;
}
.wrapper{
    background-color: #FAD7A0;
    border-radius: 5px;
}
.top-section{
    margin: 1rem auto;
    width: 50%;
}

.main-section .card-section{
    display: grid;
    grid-template-columns: repeat(2,1fr);
   grid-column-gap: 10px;
    grid-row-gap: 40px;
}
.discover-btn{
    background-color:#F0431E;
    color: white;
}
.discover-btn:hover{
    background-color:#F36648;
}
.new-release{
    color: #F24621 ;
}
</style>
</head>

HEAD;


$header = <<<HEADER
   <header class="wrapper container">
        <nav class="navbar">
            <div class="container ms-auto p-2">
                <a class="navbar-brand mt-3" href="#">
                    <img src="images/email2.png" alt="" width="100" height="55">
                </a>
                <span class="weekly-newsletter fs-5 mt-3 me-3 fw-bold">Weekly newsletter</span>
            </div>
        </nav>
        <div class="heading-section">
            <div class="container d-flex justify-content-between align-items-center ms-3">
                <div class="w-50">
                    <p class="fs-5 fw-bold">Don't miss our Big News!</p>
                    <p class="fs-6 mt-1">We're super excited to finally tell you</p>
                    <p class="fs-6 ">about all these epic features we've</p>
                    <p class="fs-6">worked on during the last months.</p>
                    <div>
                        <button type="button" class="btn discover-btn px-4 mt-5">Discover what's new!</button>
                    </div>
                </div>
                <div class="header-img w-50">
                    <img src="images/email3.png" alt="" class="me-5 img-fluid">
                </div>
            </div>
        </div>

    </header>

HEADER;


$main = <<<MAIN
 <main>
        <div class="text-center">
            <p class="text-uppercase fw-bold fs-6 new-release mb-2">New Releases</p>
            <h1 class="fs-3 fw-bold">Check out our amazing features</h1>
        </div>
        <div class="container  mt-5 px-4">
            <div class="card-section">
                <div >
                    <a href="#"><i class="fa-sharp fa-solid fa-clock fs-3 text-success"></i></a>
                    <p class="fs-5 fw-bold mt-2">Timer</p>
                    <p class="fs-6">Pomodoro time! Now you can time your</p>
                    <p class="fs-6">work sessions and stay laser focused</p>
                </div>
                <div>
                    <a href="#"><i class="fa-solid fa-chart-column fs-3 text-warning"></i></a>
                    <p class="fs-5 fw-bold mt-2">Measure</p>
                    <p class="fs-6">Easily keep track of your work time and</p>
                    <p class="fs-6">goals with our easy measuring tool.</p>
                </div>

                <div >
                    <a href="#"><i class="fa-solid fa-sliders fs-3 text-danger"></i></a>
                    <p class="fs-5 fw-bold mt-2">Slider</p>
                    <p class="fs-6">Use the slider to update everyone in</p>
                    <p class="fs-6">your team about the project progress.</p>
                </div>
                <div>
                    <a href="#"><i class="fa-solid fa-user-group fs-3"></i></a>
                    <p class="fs-5 fw-bold mt-2">Users</p>
                    <p class="fs-6">Subscribe rolse and define what each</p>
                    <p class="fs-6">person on your team can acess.</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
            <button type="button" class="btn discover-btn px-4 py-2">See the updates in your account!</button>
        </div>
    </main>
MAIN;

$footer = <<<FOOTER
 <div class="container d-flex justify-content-between align-items-center p-5">
        <div class="d-flex justify-content-center align-items-center">
            <i class="fa-brands fa-facebook text-primary fs-3 px-2"></i>
            <i class="fa-brands fa-twitter text-primary fs-3 px-2"></i>
            <i class="fa-brands fa-instagram text-danger fs-3 px-2"></i>
        </div>
        <div >
            <div class="text-end">
                <img src="images/email2.png" alt="" width="80" height="40" class="">
                <p class= "fs-6">You received this email because you signed up</p>
                <p class=" fs-6">on our website or made a purchase from us.</p>
                <div class="mt-3 ">
                    <a href="#" class="text-secondary fs-6">Unsubscribe</a>
                </div>
            </div>

        </div>
    </div>
FOOTER;




?>



<!doctype html>
<html lang="en">
<?php
echo $head;
?>

<body>

    <section class="top-section">
        <section>
            <?php
            echo $header;
            ?>
        </section>
        <section class="mt-5 main-section">
            <?php
            echo $main;
            ?>
        </section>

        <section class=" wrapper">
            <?php
            echo $footer;
            ?>
        </section>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>