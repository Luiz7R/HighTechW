<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
</head>
<body>
    <div class="container">
        <br>
        <br>
        <div class="card">
            <div class="card-header text-center">
                Admin Account Info
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ ucwords($user['name']) }}</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <hr>
              <p class="card-text">
                   <strong>Info: </strong>
                   <br>
                   &nbsp;<span>Name: {{ ucwords($user['name']) }}</span>
                   <br>
                   &nbsp;<span>Email: {{ $user['email'] }}</span>
              </p>
            </div>
        </div>
        <div class="card" style="margin-top: 20px;">
            <div class="card-body">
                <a href="/logout" class="btn btn-sm btn-primary">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>