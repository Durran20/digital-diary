<?php 
    session_start();
    if($_SESSION['user']){}
    else {
        header("location: index.php");
    }
    $user = $_SESSION['user'];
    $date = date("Y/m/d");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Update page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">



    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .back-g{
        background-color: #dbe6fd;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
    <link href="styles2.css" rel="stylesheet">
  </head>
  <body class="back-g">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="user.png" alt="" width="65" height="55">
      <h2>Update Your Details</h2>
    </div>

      <div class="">
        <h4 class="mb-3">Enter Your Details</h4>
        <form action="updatedetails.php" method="POST" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" name="fname" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" name="lname" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email </label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Eg. 1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your address.
              </div>
            </div>

            <div class="col-12">
              <label for="zip" class="form-label">Zipcode</label>
              <input type="number" class="form-control" id="zipcode" name="zipcode" placeholder="" required>
              <div class="invalid-feedback">
                Please enter your zipcode.
              </div>
            </div>

            <div class="col-12">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="number" class="form-control" id="phone" name="phone" placeholder="" required>
              <div class="invalid-feedback">
                Please enter your phone number.
              </div>
            </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Update</button>
        </form>
        <a href="home.php"><button class="w-100 btn btn-primary btn-lg">Home</button></a>
      </div>
    </div>



    <!-- CARD COMPONENT -->
    <div class="max-w-sm mx-auto flex p-6 bg-white rounded-lg shadow-xl mt-5">
            <div class="flex-shrink-0">
              <img src="https://i.ibb.co/vX8pYzZ/logo-only.png" alt="" class="h-12 w-12" />
            </div>
            <div class="ml-6 pt-1">
              <h4 class="text-xl text-gray-900">Traversy Media</h4>
              <p class="text-base text-gray-600">You have a new message!</p>
            </div>
          </div>
      
          <!-- CARD COLUMNS -->
          <div class="container mt-5 mx-auto px-2">
            <!-- Flex on med screens and up -->
            <div class="md:flex">
              <div
                class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded"
              >
                <div class="lg:flex lg:items-center">
                  <div class="lg:flex-shrink-0">
                    <img class="rounded-lg lg:w-64" src="img/camaro5.jpg" alt="" />
                  </div>
                  <div class="mt-4 lg:mt-0 lg:ml-6">
                    <div
                      class="uppercase tracking-wide text-sm text-indigo-600 font-bold"
                    >
                      Networking
                    </div>
                    <a
                      href="#"
                      class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline"
                      >Finding connections to help your business grow</a
                    >
                  </div>
                </div>
              </div>
              <div
                class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded"
              >
                <div class="lg:flex lg:items-center">
                  <div class="lg:flex-shrink-0">
                    <img class="rounded-lg lg:w-64" src="img/camaro6.jpg" alt="" />
                  </div>
                  <div class="mt-4 lg:mt-0 lg:ml-6">
                    <div
                      class="uppercase tracking-wide text-sm text-indigo-600 font-bold"
                    >
                      Marketing
                    </div>
                    <a
                      href="#"
                      class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline"
                      >Finding customers for your new business</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div> 
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017???2021 Durran</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>


