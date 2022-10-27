<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Movie</title>
  </head>
  <body>
    @include('navbar')

    <div class="container mt-4">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
  <footer class="mt-5">
    <div class="text-center bg-dark text-white p-2">
        <div class="d-flex justify-content-center">
            <b class="text-light">MovieList</b>
        </div>
        <div>
            <div class="d-flex justify-content-center p-1">
                <b class="text-light">MovieList</b>
                &nbspis a Website that contains list of movie
            </div>
        </div>
        <div class="p-1">
            Privacy Policy | Terms of Service | Contact Us | About Us
        </div>
        <div class="d-flex justify-content-center p-1">
            Copyright © 2022<b class="text-light">&nbspMovie</b><b>List</b> &nbspAll Rights Reserved
        </div>
    </div>
</footer>
</html>