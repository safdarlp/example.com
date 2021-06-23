<?php
require '../core/bootstrap.php';


//Page metadata
$meta = [];
$meta['description'] = "Safdar Khan Page";
$meta['keywords'] = "web development, full stack development";


$content = <<<EOT
<main>
			<div class="jumbotron">
				<h1 class="display-4">Welcome</h1>
				<p class="lead">Safdar Khan: Full Stack Web and Hybrid Mobile Applications Developer</p>
				<hr class="my-4">
				<p>Hello and Welcome to my website! My Name is Safdar Khan. I am a software developer. You can check out my resume by clicking on top of the page or by clicking this link <a href="resume.php">resume</a>. If you like to leave your contact details please click on the contact link or by clicking this link <a href="contact.php">contact</a>. Thanks again for visiting my website.</p>     
				<h2>My list of recommended websites</h2>
    <ul>
      <li><a href="https://stackoverflow.com/">Stack Overflow: Your go to place for any questions on programming/software development </a></li>  
      <li><a href="https://www.youtube.com/channel/UCKWaEZ-_VweaEx1j62do_vQ">IBM Cloud (YouTube Page): Good explanation of topics related to cloud and other new technologies</a></li>
      <li><a href="https://www.bbc.com/">BBC News: Consistenly unbiased news and coverage of news is truly worldwide </a></li>        
      <li><a href="https://www.youtube.com/channel/UCoOae5nYA7VqaXzerajD0lg">Ali Abdaal (YouTube) Channel: Good tips on productivity, learning and other life hacks </a></li>
  </ul>
				<!-- <a class="btn btn-primary btn-lg" href="contact.html" role="button">Request Information</a> -->
			  </div>
			<div class="row">
				<div class="col-md-4">
					<div class="card" style="height: 15rem;">
						<h5 class="card-header">Canvas Draw</h5>
						<div class="card-body">
						  <h5 class="card-title">JavaScript Draw on Canvas</h5>
						  <p class="card-text">Canvas doodler complete with color picker, shapes and lines.</p>
						  <a href="/draw/program.html" target="_blank" class="btn btn-primary">Draw and Doodle</a>
						</div>
					  </div>
				</div>
				<div class="col-md-4">
					<div class="card" style="height: 15rem;">
						<h5 class="card-header">HTML5 Game</h5>
						<div class="card-body">
						  <h5 class="card-title">Javascript Game</h5>
						  <p class="card-text">Move your player and avoid ending the game with killer sprites.</p>
						  <a href="/game" target="_blank" class="btn btn-primary">Play a Game</a>
						</div>
					  </div>
				</div>
				<div class="col-md-4">
					<div class="card" style="height: 15rem;">
						<h5 class="card-header">NASA APOD</h5>
						<div class="card-body">
						  <h5 class="card-title">NASA Apod Using JQuery</h5>
						  <p class="card-text">View random NASA Astronomy Picture of the Day.</p>
						  <a href="/jquery-apod" target="_blank" class="btn btn-primary">View Pics</a>
						</div>
					  </div>
				</div>
			</div>
		  </div>
	  </div>	  
	  <br></br>
	  <div class="card">
		<div class="card-header">
		  Quote
		</div>
		<div class="card-body">
		  <blockquote class="blockquote mb-0">
			<p>“ Experience is the name everyone gives to their mistakes.”  </p>
			<footer class="blockquote-footer">Oscar Wilde <cite title="Source Title"></cite></footer>
		  </blockquote>
		</div>
	  </div>		  	
	  </body>

</main>
EOT;

include '../core/layout.php';