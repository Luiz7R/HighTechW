<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>      
    <title>Register HightechW</title>

    <style>
        body
        {
            background-image:url("{{ asset('img/HlE4Td.jpg') }}");
            background-position: center;
            background-size: cover;
        }

        .text-colorspcblue
        {
            color: #2fa4e7;
        }

        .form-register
        {
            
        }

        .form-control{
            background:transparent!important;
            color:white!important;
            font-size: 18px!important;
        }       
    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="row" style="margin-top: 12%;">
                <div class="col-md-6 offset-md-3 form-register">
                    <form method="post" action="{{ route('register.user') }}">
                        @csrf
                        <div class="form-group">
                            <h3>Register</h3>
                        </div>
                        <div class="form-group">
                            <label for="name" class="label-control text-colorspcblue">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="" />
                        </div>                        
                        <div class="form-group">
                            <label for="email" class="label-control text-colorspcblue">Email</label>
                            <input type="text" class="form-control" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="password" class="label-control text-colorspcblue">Password</label>
                            <input type="password" class="form-control" name="password" />
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>                    
                    </form>               
                </div>
            </div>
        </div>
    
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif 
    
    </section>
</body>