<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
  <style>
    img {
        width: 40px;
        height: 160px;
    }
    .card{
        width: 500px;
        height: 150px;
        margin-left: 400px;
        margin-top: 100px;
        background: #ffffff;
      }
    .btn {
        margin-left: 100px;
        padding: 10px;
        width: 250px;
        height: 50px;
        font-size: 18px;
        font-weight: bold;
        color: rgb(228, 248, 114);
        background: rgb(130, 53, 53);
    }
    .btn:hover {
        background: rgb(130, 53, 53);
        color: rgb(255, 255, 255);
    }

    h5 {
        margin-left: 50px;
        font-size: 30px;
        font-weight: bold;
        color: rgb(0, 0, 0);
    }
    h6 {
        margin-left: 170px;
        font-size: 15px;
        color: rgb(0, 0, 0);
    }
  </style>

      <div class="card">
        <div class="card-body">
          <h5>PROJEK UAS ALPRO 2023</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Adinda Salsabila</h6>
          <a href="{{ url('/student') }}" class="btn ">Go to my application </a>
        </div>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>