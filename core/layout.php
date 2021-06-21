<!-- Set session in php -->
<?php
function active($name){
  $current = $_SERVER['REQUEST_URI'];
  if($current === $name){
    return 'active';
  }
  return null;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<!-- Add sanitized content -->
  <?php if(!empty($meta)): ?>

<?php if(!empty($meta['title'])): ?>
  <title><?php echo $meta['title']; ?></title>
<?php endif; ?>

<?php if(!empty($meta['description'])): ?>
  <meta name="description" content="<?php echo $meta['description']; ?>">
<?php endif; ?>

<?php if(!empty($meta['keywords'])): ?>
  <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
<?php endif; ?>

<?php endif; ?>
<!-- End sanitized content -->

      <meta charset="UTF-8">

      <title>About Safdar Khan</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- <link rel="stylesheet" type="text/css" href="css/dist/main.css"> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  </head>
  <body>

     <!-- Content of webpage -->
     <div class="container">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Safdar Khan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <li class="nav-item">    
                <a class="nav-link" href="http://localhost/example.com/public/users/index.php">Home</a>
                </li>                
                <li class="nav-item">
                  <a class = "nav-link" href="http://localhost/example.com/public/contact.php">Contact</a>              
           <li class="nav-item">
          <a class="nav-link" href="http://localhost/example.com/public/login.php">Login</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="http://localhost/example.com/public/register.php">Register</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="http://localhost/example.com/public/users/index.php">Users</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="http://localhost/example.com/public/posts/index.php">Posts</a>
          </li>          
           <li class="nav-item">
           <a class="nav-link" href="http://localhost/example.com/public/logout.php">Logout</a>
          </li>

          
        </nav>

        <div class="row">       
            <br></br>
            <div id="Content">
                <?php echo $content; ?>
            </div>
        </div>

        <div id="Footer" class="clearfix">
            <small>&copy; 2021 - safdarlp.github.io</small>
            <ul role="navigation">
                <li><a href="terms.html">Terms</a></li>
                <li><a href="privacy.html">Privacy</a></li>
            </ul>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>		
  </body>
</html>

