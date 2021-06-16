
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Hightech W</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <!--a class="text-muted" href="#">Subscribe</a-->
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">High TechW</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
              @auth
                  <a href="/profile">{{ $user['name'] }}</a>
                  <div class="col-sm-4">
                     <a href="/logout">Logout</a>
                  </div>
              @endauth

              @guest
                <a class="btn btn-sm btn-outline-secondary" href="/login">Sign in</a>  
              @endguest
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <!--a class="p-2 text-muted" href="#">World</a>
          <a class="p-2 text-muted" href="#">U.S.</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Travel</a-->
        </nav>
      </div>

    </div>    

    <main role="main" class="container">
      <div class="row">
           <div class="col-md-9 blog-main">
                <div class="card text-center" style="margin-top: 20px;">
                    <div class="card-header">
                        <h5 class="card-title">{{ $news->title }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $news->content }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $news->created_at->diffForHumans() }}
                    </div>
                </div>
            </div><!-- /.blog-main -->
            <aside class="col-md-3 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Author: {{ $news->user['name'] }}</p>
                </div>
                <div class="p-3">
                    <h4 class="font-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="https://github.com/Luiz7R">GitHub</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->
      </div><!-- /.row -->
    </main><!-- /.container -->

    <footer class="blog-footer" style="margin-top: 20px; ">
            <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
    </footer>

  </body>
</html>