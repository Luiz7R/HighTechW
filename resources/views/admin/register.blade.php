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
</head>

<body>
    <section>
        <div class="container">
            <div class="row" style="margin-top: 12%;">
                <div class="col-md-6 offset-md-3">
                    <form method="post" action="{{ route('register.user') }}">
                        @csrf
                        <div class="form-group">
                            <h3>Register</h3>
                        </div>
                        <div class="form-group">
                            <label for="name" class="label-control">Name</label>
                            <input type="text" class="form-control" name="name" />
                        </div>                        
                        <div class="form-group">
                            <label for="email" class="label-control">Email</label>
                            <input type="text" class="form-control" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="password" class="label-control">Password</label>
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