<!doctype html>
<html lang="en">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/stylee.css">
  </head>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" style="background: #13133e">
    <div class="container">
  <a class="navbar-brand" href="#">Know Your Meme</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</head>
<body>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Memes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Confirmed</a>
          <a class="dropdown-item" href="#">Researching</a>
          <a class="dropdown-item" href="#">Popular</a>
          <a class="dropdown-item" href="#">Submission</a>
          <a class="dropdown-item" href="#">Deadpool</a>
          <a class="dropdown-item" href="#">All</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Submit an Entry</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">News</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Images
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Trending</a>
          <a class="dropdown-item" href="#">Most Commented</a>
          <a class="dropdown-item" href="#">Most Favorited</a>
          <a class="dropdown-item" href="#">Most Liked</a>
          <a class="dropdown-item" href="#">Most Viewed</a>
          <a class="dropdown-item" href="#">All</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Templates</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Upload a Photo</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Videos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Trending</a>
          <a class="dropdown-item" href="#">Most Commented</a>
          <a class="dropdown-item" href="#">Most Favorited</a>
          <a class="dropdown-item" href="#">Most Liked</a>
          <a class="dropdown-item" href="#">Another ac</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Forums
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Trending</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Blog
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Episodes</a>
      </li>
    </ul>
  </div>
</div>
</nav>
  <div class="container">
    <div class="row">
      <div class='col-sm-12' id='main-content'>
        <div id='flashes'> </div>
          <div class="page-header">
            <div class="pull-right">
              <a href="<?= base_url(); ?>Register" class="btn btn-success btn-lg">Signup</a>
            </div>
        <h1>Login</h1>
        </div>
        <div class="row">
          <div class="col-sm-8" id="login-form">
              <form accept-charset="" action="" class="form-horizontal" method="post">
                <div style="margin:0;padding:0;display:inline">
                  <input name="utf8" type="hidden" value="&#x2713;" />
                  <input type="hidden" name="">
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="session_login">Username</label>
                  <div class="col-sm-9" style="margin-bottom: 10px;">
                    <input autocomplete="off" autofocus="autofocus" class="form-control" id="session_login" name="session[login]" required="required" size="30" type="text" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="session_login" style="margin-bottom:20px;">Password</label>
                   <div class="col-sm-9">
                    <input autocomplete="off" class="form-control" id="session_password" name="session[password]" required="required" size="30" type="password"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9" style="margin-bottom: 10px;">
                    <div class="checkbox-button">
                      <button class="btn btn-success" type='button'>
                        <i class="fa fa-check-square-o">
                        </i>
                         "Remember Me"
                      </button>
                        <input type="hidden" name="session[remember_me]" value="0">
                        <input name="session[remember_me]" type="hidden" value="0" /><input id="session_remember_me" name="session[remember_me]" type="checkbox" value="1" style="display: none;" />
                    </div>
                    <hr>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                    <input class="btn btn-primary btn-lg btn-block" name="commit" type="submit" value="Login" />
                    <br>
                    <a href="<?= base_url(); ?>Forgot" rel="nofollow">Forgot password?</a>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-sm-4">
              <div id="login-art">
                <a href="/photos/284077"><img alt="575" class="thumbnail" height="180" src="https://i.kym-cdn.com/photos/images/original/000/284/077/575.gif" width="180" /></a>
                  <p>
                  Artwork by
                <a href="/users/cyber6x">Cyber6x</a>
                  </p>
              </div>
            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
  <div class='container'>
    <div id='footer'>
    <p class='text-muted text-center'>
    &copy;
    2007-2019
      <a href="http://literally.media" target="_blank">Literally Media Ltd.</a>
    </p>
  </div>
</div>
</body>
</html>