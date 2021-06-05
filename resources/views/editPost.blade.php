<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Post</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
</head>
<body>
    <div class="container">
        <h4>Update Post</h4>
        <form action="/postEdit" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="id" value="{{ $post->id }}">            
            <div class="row">
                <div class="col-6 col-md-3">
                    <label for="">Author:</label>
                    <input type="text" class="form-control" disabled name="author" id="post-author" value="{{ $post->user->name }}">   
                </div>    
            </div>            
            <div class="row">
                <div class="col-6 col-md-3">
                    <label for="">Title:</label>
                    <input type="text" class="form-control" name="title" id="post-title" value="{{ $post->title }}">   
                </div>    
            </div>
            <div class="row">
                <div class="col-6 col-md-4">
                    <label for="">Content:</label>
                    <textarea class="form-control" name="content" rows="5" cols="4" id="content-text" value="">{{ $post->content }}</textarea> 
                </div>    
            </div>
            <div class="row">
                <div class="col-6 col-md-4" style="margin-top: 7px;">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button> 
                </div>                            
            </div> 
        </form>
    </div>    
</body>
</html>