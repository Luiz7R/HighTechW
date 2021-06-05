
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

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>    

    <main role="main" class="container">
      <div class="row">
           <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    From the Firehose
                </h3>

                <div class="card">
                    <div class="card-header">
                    Quote
                    </div>
                    <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                    </div>
                </div>

                @foreach ( $news as $post )
                    <div class="card text-center" style="margin-top: 20px;">
                        <div class="card-header">
                            {{ $post->title }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <p class="card-text text-muted">By: {{ $post->user['name'] }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            {{ $post->created_at->diffForHumans() }}
                        </div>
                    </div>
                @endforeach 

            </div><!-- /.blog-main -->



        
        <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
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

    <footer class="blog-footer" style="margin-top: 20px;">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script> --}}
  </body>
</html>



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>         
    <title>HightechW</title>
</head>

<style>
    .recent-news
    {
        float: left;
        margin-left: 40px;
        max-width: 770px;
        width: 35.8119%;
    }

    .section-title
    {
        margin-bottom: 30px;
        color: #3d3d3d;
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase;
        border-bottom: 1px solid #eeeeee;
    }

    #recent-news
    {
        margin-bottom: 120px;
        position: relative;
    }

    .recent-news .post, .recent-posts .type-page
    {
        margin-bottom: 40px;
    }

    .recent-news .post-thumbnail
    {
        float: left;
        margin-right: 30px;
    }

    .recent-news .entry-body
    {
        overflow: hidden;
    }

    .entry-meta
    {
        margin-bottom: 12px;
        color: #acacac;
        font-size: 14px;
    }

    p:last-child
    {
        margin-bottom: 0;
    }

    .blog .site-main, .paged .site-main
    {
        padding-top: 40px;
    }

    .site-main
    {
        max-width: 1200px;
        padding: 0 15px;
        margin: 0 auto 30px
    }

    #sidebar
    {
        float: right;
        max-width: 370px;
        width: 29.0598%;
        margin-left: 30px;
    }
</style>

<body>  --}}
              
    {{-- <main id="main" class="site-main" role="main">
        <section class="recent-news"  style="padding-top: 20px;">
            <h2 class="section-title"> Latest News</h2>
            @foreach($news as $post)
                    <div id="recent-news">
                        <article id="post-id{{ $post->id }}" class="post">
                                <div class="post-thumbnail">
                                </div>
                                <section class="entry-body">
                                    <header class="entry-header">
                                        <h3 class="entry-title">
                                            <a href="#" rel="">
                                                {{ $post->title }}
                                            </a>
                                        </h3>
                                    </header>
                                    <div class="entry-meta">
                                        <span class="entry-author">
                                            By
                                            <a href=""></a>
                                        </span>
                                        <span class="entry-date">{{ $post->created_at }}</span>
                                    </div>
                                    <div class="entry-content">
                                        <p>{{ $post->content }}</p>
                                    </div>
                                </section>
                        </article>  
                    </div>
            @endforeach
        </section>
        <div id="sidebar" class="site-sidebar">
            
        </div>  
    </main> --}}
<!--/body>
</html-->