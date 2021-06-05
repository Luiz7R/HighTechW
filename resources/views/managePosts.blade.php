<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HighTechW</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @include('templates.navbar')
</head>
<body>
    <div class="container" style="padding-top: 20px;">
     <div class="col-8">
        <!-- Modal -->
        <div class="modal fade" id="editPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titmodalLB">Edit Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="http://localhost:8000/posts/update" method="POST" id="postEdit">
                        @csrf
                        @method('POST')  
                        <input type="hidden" name="_idpost" value=""> 
                        <div class="modal-body">                     
                            <div class="form-group">
                                <label for="author-title" class="col-form-label">Title:</label> 
                                <input type="text" class="form-control" name="title" id="author-title" value="">   
                            </div>
                            <div class="form-group">
                                <label for="context-texto" class="col-form-label">Content:</label>
                                <textarea class="form-control" name="content" id="content-text"></textarea>
                            </div>           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btn_up_post">Save changes</button>
                        </div>
                    </form>      
                </div>
            </div>
        </div>

        <div id="delPost" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Deletion?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span>You won't be able to revert</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="btnPostDelete" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div> 

        <div class="card" id="PostsHW">
             <div class="card-header text-center">Posts</div>
             <div class="card-body">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <td>#</td>
                             <td>Title</td>
                             <td>Author</td>
                             <td>Published</td>
                             <td>Actions</td>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($posts as $post)
                         <tr>
                            <td>{{$post->id}}</td>
                            <td>{{substr($post->title,0,25)}}</td>
                            <td>{{$post->user->name}}</td>
                            <td>{{$post->published == 1 ? "Yes" : "No"}}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning edtPst" data-toggle="modal" data-idPst="{{$post->id}}" data-target="#editPost">Edit</a>
                                <a href="" class="btn btn-sm btn-danger delPst" data-toggle="modal" data-idPst="{{ $post->id }}" data-target="#delPost">Delete</a>
                            </td>
                         </tr>
                         @endforeach
                     </tbody>
                 </table>
                 {{ $posts->links() }}
             </div>
        </div>

     </div>
</div>

<hr>
<div class="container">
    <div class="col-8">
        <div class="card" id="mPostHW">
            <div class="card-header text-center">New Posts</div>
            <div class="card-body">
                <form method="POST" action="{{route('new-post')}}">
                    @csrf
                    @method('POST')
                    <fieldset>
                        <div class="form-group">
                            <label for="author" class="col-sm-2 col-form-label">Author</label>
                            <div class="col-sm-10">
                                <select name="user_id" id="author" class="form-control">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}"> {{$user->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="titlePost" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" id="titlePost">
                            </div>
                            <label for="contentPost" class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <textarea name="content" id="contentPost" class="form-control" cols="3" rows="3"></textarea>
                            </div>   
                            <label for="publishedP" class="col-sm-2 col-form-label">Published</label>
                            <div class="col-sm-10">
                                <select name="published" id="publishedP" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                </select>
                            </div>                              
                            <div class="col-sm-12" style="padding-top: 12px;">
                                <button type="submit" class="btn btn-primary">Create Post</button>
                            </div>    
                        </div>    
                    </fieldset>  
                </form>
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
    </div>
</div>


<script src="{{ asset('js/indexP.js') }}"></script>

</body>
</html>