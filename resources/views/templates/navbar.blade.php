<style>
  .bg-dk
  {
    background-color: black;
  }
</style>

<nav class="navbar navbar-expand-md navbar-dark bg-dk">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a href="/news" class="nav-link">News</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"></a>  
            </li>  
        </ul> 
    </div>
    <div class="mx-auto order-0">
        <a href="#" class="navbar-brand mx-auto">HightechW</a>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a href="/profile" class="nav-link">{{ ucwords(Auth::user()->name) }}</a>
            </li>
            <li class="nav-item">
               <a href="/logout" class="nav-link">Logout</a>
            </li>
        </ul>
    </div>
</nav>