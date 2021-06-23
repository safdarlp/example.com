<?php
require '../core/bootstrap.php';

//Build the page metadata
$meta = [];
$meta['description'] = "Safdar Khan Resume";
$meta['keywords'] = "resume, web development, full stack development";


$content = <<<EOT
<main>

    
        <div class="row">
          <!-- <div class="clearfix"> -->
            <div class="container">
              <h2 class="text-initial">Core Competencies</h3>
              <div class="row">
                <div class="col">
                  <ul class="cc-left">
                    <li>Full Stack Development</li>
                    <li>Front End Development</li>
                  </ul>
                </div>
                <div class="col">
                  <ul class="cc-right">
                    <li>Hybrid Mobile Development</li>
                    <li>Server Side Development</li>
                  </ul>
                    </div>
              </div>
            </div>

            <!-- <div class="certs"> -->
            <div class="container">
              <h2>Certifications and Technical Proficiencies</h2>
              <ul>
                <li>
                    <em>Certifications:</em>
                    Agile Certified Scrum Master
                </li>
                <li>
                    <em>Platforms:</em>
                    Linux, LAMP, MEAN, NodeJS
                </li>
                <li>
                    <em>Databases:</em>
                    MySQL, MongoDB
                </li>
                <li>
                    <em>Tools:</em>
                    VS Code, SSH, Gulp, Git
                </li>
                <li>
                    <em>Languages:</em>
                    HTML, CSS, SASS, JavaScript, ES6, PHP, BASH, SQL, TypeScript
                </li>
              </ul>
            </div>

            <div class="container">
            <hr class="my-4">

            <!-- <div class="emp"> -->
              <h2>Professional Experience</h2>
              <h3 class="clearfix">
              <span class="float-left">MicroTrain Technologies - Chicago, IL</span>
              <span class="float-right">April 2021 - Present</span></h3>            
  
            <h4>Full Stack Web and Mobile Developer</h4>
            <ul>
                <li>Front-end and client-side development with HTML, CSS and JavaScript. Work with libraries and frameworks such as jQuery, Bootstrap and Angular. Build tools such as Yarn and Gulp. Use web technology to build hybrid mobile applications using Apache’s Cordova. Work with third party APIs from vendors such as Google, NASA, Twilio and so on.</li>
                <li>Server side integration with LAMP (Linux, Apache, MySQL, PHP) and MEAN (MongoDB, Express, Angular, Node,js) stacks. Build, set-up, maintain own cloud based server.</li>                
            </ul>
  
            <h3 class="clearfix">
              <span class="float-left">Infotech Pvt Ltd. - Hyderabad, India</span>
              <span class="float-right">September 2016 - January 2017</span></h3>             
    
              <h4>IT Technician</h4>
              <ul>
                  <li>Solved IT related issues both hardware and software.</li>                  
                  <li>Liased with third party clients in training the IT helpdesk staff.</li>
              </ul>
              </ul>
            </div>
  
            <div class="container">
              <h5>Key Contributions</h5>
              <ul>
                  <li>Full stack LAMP development(Linux, Apache, MySQL, PHP, Bash, Ajax).</li>
                  <li>Recognized for the development of excellent business relationships, providing exemplary customer service.</li>
              </ul>

              <hr class="my-4">
              <!-- <div class="edu"> -->
            <h2>Education</h2>
  
            <h3 class="clearfix">
              <span class="float-left">Osmania University - Hyderabad, India</span>
              <span class="float-right">2006 - 2010</span></h3>
            <h5>Bachelors in Information Technology</h5>            
            </div>
      </div>
  </div>
</div>
    <br></br>
	  <br></br>
	  <div class="card">
		<div class="card-header">
		  Quote
		</div>
		<div class="card-body">
		  <blockquote class="blockquote mb-0">
			<p>“ Knowledge is power.” </p>
			<footer class="blockquote-footer">Francis Bacon<cite title="Source Title"></cite></footer>
		  </blockquote>
		</div>
	  </div>		      
    
                         
    </body>
    </main>
</html>
EOT;

include '../core/layout.php';