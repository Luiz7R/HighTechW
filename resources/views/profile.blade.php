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

           .user-card-full 
           {
               overflow: hidden;
           }

           .card
           {
               border-radius: 5px;
               -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
               box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
               border: none;
               margin-bottom: 30px;
           }

           .m-r-0
           {
               margin-right: 0px;
           }

           .m-1-0
           {
               margin-left: 0px;
           }

           .user-card-full .user-profile
           {
               border-radius: 5px 0 0 5px;
           }

           .bg-c-lite-green
           {
               background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
               background: linear-gradient(to right, #ee5a6f, #f29263);
           }

           .user-profile
           {
               padding: 20px 0;
           }

           .card-block
           {
               padding: 1.25rem;
           }

           .m-b-25
           {
               margin-bottom: 25px;
           }

           .img-radius
           {
               border-radius: 5px;
           }

           h6
           {
               font-size: 14px;
           }

           .card .card-block p
           {
               line-height: 25px;
           }

           @media only screen and ( min-width: 1400px )
           {
               p
               {
                   font-size: 14px;
               }
           }

           .card-block
           {
               padding: 1.25rem;
           }

           .b-b-default
           {
               border-bottom: 1px solid #e0e0e0;
           }

           .m-b-20
           {
               margin-bottom: 20px;
           }

           .p-b-5
           {
               padding-bottom: 5px !important;
           }

           .m-b-10
           {
               margin-bottom: 10px;
           }

           .text-muted
           {
               color: #919aa3 !important;
           }

           .f-w-600
           {
                font-weight: 600;
           }

           .m-b-20
           {
               margin-bottom: 20px;
           }

           .m-t-40
           {
               margin-top: 20px;
           }

           .p-b-5
           {
                padding-bottom: 5px !important;
           }

           .m-b-10
           {
               margin-bottom: 10px;
           }

           .m-t-40
           {
                margin-top: 20px;
           }

           .user-card-full .social-link li
           {
                display: inline-block;
           }

           .user-card-full .social-link li a 
           {
                font-size: 20px;
                margin: 0 10px 0 0;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
           }

           .text-black
           {
               color: black;
           }

           
        </style>  
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex">
          <a class="p-2 text-muted" style="margin-left: 20px;" href="/news">News</a>
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
<body>
    <div class="page-content page-container" id="page-content">
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
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 class="text-muted f-w-400">{{ $user['email'] }}</h6>
                                        </div>
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">Age</p>
                                            <h6 class="text-muted f-w-400">{{ $user['age'] }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-top: 20px; margin-left: -20px;">
                            <div class="card-body">
                                <a href="/logout" class="btn btn-sm btn-default" style="border: 2px solid white;">Logout</a>
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
