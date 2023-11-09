<!doctype html>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
  <style>
    body{
      font-size:larger;
    }
  </style>
</head>

<body style="background-color: #E7E7E7; font-family: 'Nunito', sans-serif; overflow-x: hidden;">
  <div class="row"><br><br>
    <div class="col-sm-8"></div>
    <div class="col-sm-4">
    </div>

    <div class="container pl-0 mt-3">

      <div class="row">
        <div class="col-9">
          <h1 style="font-size: 45px;"><b>The Competition</b></h1>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-3">
          <h2 class="mt-0">Company 1</h2>
            Their reviews average 3.5, <br>whereas we average 5 stars
        </div>
        <div class="col-9">
          <h2 class="mt-0">Company 2</h2>
            Their reviews average 3.5, <br>whereas we average 5 stars
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-3">
          <h2 class="mt-0">Company 3</h2>
            Their reviews average 3.5, <br>whereas we average 5 stars
        </div>
        <div class="col-9">
          <h2 class="mt-0">Company 4</h2>
            Their reviews average 3.5, <br>whereas we average 5 stars
        </div>
      </div>

      <img src="{{asset('IndexStyle/asset/Polygon1.png')}}" style="z-index: -1; position: absolute;right: 0;top: 0;" height="100%">
      <img src="{{asset('IndexStyle/asset/Dark.png')}}" class="float-right" height="7.5%" style="position: absolute; top: 30px; right: 75px;">
    </div>

</body>

</html>