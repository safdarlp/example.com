<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>About Safdar Khan</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/dist/main.css">
  </head>
  <body>

    <div id="Wrapper">
        <nav class="top-nav">
            <a href="index.html" class="pull-left" href="/">Site Logo</a>
            <ul role="navigation">
                <li><a href="index.php">Home</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a href="../public/contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="row">
            <div id="Content">
                <?php echo $content; ?>
            </div>
            <div id="Sidebar">
              <div id="AboutMe">
                <div class="header">Hello, I am Safdar Khan</div>
                <img src="https://s.gravatar.com/avatar/0272bf359e5b9affd5cfbca3fcf1b003?s=80"  alt="Safdar Khan" class="img-circle">                
              </div>
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
  </body>
</html>

