<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user['name'] }} Profile</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>  
        <style>
           .padding
           {
               padding: 3rem !important;
           }

           .card
           {
               border-radius: 5px;
               background: #27293d;
               width: 100%;
               -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
               box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 10%);
               border: 0;
               position: relative;
               margin-bottom: 30px;
           }

           .card-user .author {
                text-align: center;
                text-transform: none;
                margin-top: 25px;
            }

            .card-user .avatar {
                width: 124px;
                height: 255px;
                border: 5px solid #2b3553;
                border-bottom-color: transparent;
                background-color: transparent;
                position: relative;
            }

            .card .avatar 
            {
                width: 100px;
                height: 100px;
                overflow: hidden;
                border-radius: 50%;
                margin-bottom: 15px;
            }

            img
            {
                max-width: 100%;
            }

           .card .card-user
           {
                width: 124px;
                height: 124px;
                border: 5px solid #2b3553;
                border-bottom-color: transparent;
                background-color: transparent;
                position: relative;                
           }

           .text-muted
           {
               color: #919aa3 !important;
           }

           .text-black
           {
               color: black;
           }

           .card label
           {
                color: rgba(255, 255, 255, 0.6);
           }

           .card-user 
           {
               overflow: hidden;
           }



        </style>  
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex">
          <a class="p-2 text-muted" style="margin-left: 20px;" href="/news">News</a>
          <div class="text-left" style="margin-left: 82%; margin-top: 9px;">
              <a class="p-2 text-muted" href="/logout">Logout</a>
          </div>
          <!--a class="p-2 text-muted" href="#">World</a>
          <a class="p-2 text-muted" href="#">U.S.</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a-->
        </nav>
      </div>
</head>
<body style="background-color: black;">
    <div class="wrapper">
         <div class="main-panel ps">
             <nav class="navbar-expand-lg navbar-absolute navbar-transparent"></nav>
             <div class="content">
                 <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card" style="background: #27293d; margin-top: 20px; padding-left: 20px; margin-left: 20px; border-radius: 10px;" >
                                <div class="card-header">
                                    <h5 class="title">{{ $user['name'] }} Profile</h5>
                                </div>
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <label for=""><strong class="">Name: </strong></label>
                                        <span class=""  style="color: #c4c4c2;">{{ $user['name'] }}</span>
                                    </div>

                                    <div class="col-sm-12">
                                            <label for=""><strong>Email: </strong></label>
                                            <span class="" style="color: #c4c4c2;">{{ $user['email'] }}</span>     
                                    </div>

                                    <div class="col-sm-12">
                                            <label for=""><strong>Age: </strong></label>
                                            <span style="color: #c4c4c2;">{{ $user['age'] }}</span>  
                                    </div>                                      
                                </div>
                                <div class="card-footer">
                                    <strong style="color: rgba(255, 255, 255, 0.6);">Created on: </strong>
                                    <span style="color: #c4c4c2;">{{ $user['created_at'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 20px;">
                            <div class="card card-user">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                    <div class="author">
                                         <a href="">
                                            <img class="avatar" src="https://black-dashboard-laravel.creative-tim.com/black/img/emilyz.jpg"> 
                                            <h5 class="title">{{ $user['name'] }}</h5>
                                         </a>
                                         <p class="description" style="color: #c4c4c2;">{{ $user['type'] == 1 ? 'Admin' : ''}}</p>
                                    </div>
                                    <div class="card-description" style="color: #c4c4c2;">
                                        Lorem Ipsum
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
    </div>


    {{-- <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                    <h6 class="f-w-600 text-white">{{ $user['name'] }}</h6>
                                    <p>{{ $user['type'] == 2 ? "Journalist" : "" }}</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600 text-black">Information</h6>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">Name</p>
                                            <h6 class="text-black f-w-400">{{ $user['name'] }}</h6>
                                        </div>
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 class="text-black f-w-400">{{ $user['email'] }}</h6>
                                        </div>
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">Age</p>
                                            <h6 class="text-black f-w-400">{{ $user['age'] }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-top: 20px; margin-left: -20px;">
                            <div class="card-body">
                                <a href="/logout" class="btn btn-sm btn-default text-black">Logout</a>
                            </div>
                        </div>                         
                    </div>
                </div>
            </div>
        </div>
    </div>   --}}
    
    
    {{-- <div class="page-content page-container" id="page-content">
         <div class="padding">
             <div class="row container d-flex justify-content-center">
                 <div class="col-xl-6 col-md-12">
                     <div class="card user-card full">
                         <div class="row m-l-0 m-r-0">
                              <div class="col-sm-4 bg-c-lite-green user-profile">
                                  <div class="card-block text-center text-white">
                                      <div class="m-b-25">
                                           <h6 class="f-w-600 text-white">{{ $user['name'] }}</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-8">
                                  <div class="card-block">
                                      <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                      <div class="row">
                                          <div class="col-sm-6">
                                              <p class="m-b-10 f-w-600">Email</p>
                                              <h6 class="text-muted f-w-400">{{ $user['email'] }}</h6>
                                          </div>
                                          <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Age</p>
                                            <h6 class="text-muted f-w-400">{{ $user['age'] }}</h6>                                              
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </div> --}}
</body>
</html>
