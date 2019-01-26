<?php 

$homeActive = "nav-class";
$aboutActive = "nav-class";
$portfolioActive = "nav-class, active";
$contactActive = "nav-class";

include("inc/header.php"); ?>
<h1 style="font-weight: 100;">Portfolio</h1>
<p id="portfolioMenu"><a id="menuSite" href='javascript:;' onclick='resetMenu(),selectSites()'>Websites</a> | <a id="menuWeb" href='javascript:;' onclick='resetMenu(),selectWeb()'>Web-Apps</a> | <a id="menuDesktop" href='javascript:;' onclick='resetMenu(),selectDesktop()'>Desktop</a> | <a id="menuMobile" href='javascript:;' onclick='resetMenu(),selectMobile()'>Mobile</a></p>

<!--------------------------Content to show if clicked-------------------->
<div id="websites" style="display: block;">
	<p class="previewHeader"><a href="/" target="_blank">Michael-Reinders.com</a></p>
	<a href="/" target="_blank"><img class="preview-img" src="img/michael-reinders-preview.png" alt="michael-reinders-preview" /></a>	
	<p><a href="/" target="_blank">Michael-Reinders.com</a> is a static website created using simple HTML, CSS and Javascript. The goal of this website was to design a beautiful, professional portfolio website while using a minimal amount of code. The result is a stunning, simplistic and informative website that is both responsive and optimized for mobile devices.</p>
	<hr />
	<p class="previewHeader"><a href="https://www.quantummark.com" target="_blank">QuantumMark.com</a></p>
	<a href="https://www.quantummark.com" target="_blank"><img class="preview-img" src="img/quantummark-preview.png" alt="quantummark-preview" /></a>	
	<p><a href="https://www.quantummark.com" target="_blank">Quantummark.com</a> is a Corportate Website that utilizes Wordpress as its Content Management System. The website uses the Total Wordpress theme, but many of its features include custom HTML, CSS and Javascript to achieve some of its more ambitious design goals, including all About and Service webpages and a custom coded Contact form.</p>
</div>
<div id="webApps">
	<p class="previewHeader">.NetCore MVC Application</p>
	<a href="https://github.com/mreinders13/First-MVC" target="_blank"><img class="preview-img" style="border-style: solid; border-width: thin;" src="img/MVC-Preview.png" alt=".NetCore MVC Application" /></a>
	<p>This is the first application that introduced me to the MVC framework. This application utilizes a "Students" controller wired with a Database that uses a Model "Student" to display student information in various Razor Pages (or Views). This application was created with .NetCore 2.0 and Visual Studio.</p>
	<hr />
	<p class="previewHeader">.NetCore API</p>
	<a href="https://github.com/mreinders13/First_API" target="_blank"><img class="preview-img" style="border-style: solid; border-width: thin;" src="img/API-Preview.png" alt=".NetCore API Application" /></a>
	<p>This is the first API (Application Program Interface) I created using .NetCore in Visual Studio and testing was completed using <a href="https://www.getpostman.com/" target="_blank" alt="Postman API Testing" style="font-size: 16px;">Postman</a>. Like my first MVC project, this API utilizes a "Students" controller wired with a Database that uses a Model of "Student" to write and store student information. As an API, there is no view involved. Instead inputs are made using POST HTTP requests, and data output is made using GET HTTP requests which populates as JSON.</p>
	<hr />
	<p class="previewHeader">Ruby on Rails Application</p>
	<a href="https://github.com/mreinders13/Ruby-CRUD" target="_blank"><img class="preview-img" style="border-style: solid; border-width: thin;" src="img/Ruby-MVC-Preview.png" alt="Ruby on Rails Application" /></a>
	<p>For my final Project in my Server-Side Programming class I was tasked to learn something new that was not covered in class. I chose to learn the Ruby on Rails framework from scratch and on my own. In order to compare Rails to .NetCore I decided to follow the same type of projects I created for both my MCV and API application. The process took about two weeks but I found Rails and the Ruby Language to be quite easy to develop with. Quite opposite of .NetCore with Visual Studio, Ruby on Rails starts with the bare minimum amount of code but it allows you total control over how your application is built. In the end I think I liked Ruby on Rails more than .NetCore.</p>
	<hr />
</div>
<div id="desktopApps">
	<p class="previewHeader">UNR Advising Software</p>
	<a href="https://github.com/mreinders13/UNR-Major-Advisor-Program" target="_blank"><img class="preview-img" style="border-style: solid; border-width: thin;" src="img/UNR-Application-Preview.png" alt="UNR Advising Application" /></a>
	<p>This desktop application was created for my UNR Inforamtion Systems capstone course. The clients/users are UNR Advisors and the application is designed to import current excel files used in the Major application process. The software displays each student and their qualifications and provides a simple User Interface for advisors to Accept, Deny or Bridge each student's applicaiton. Written in Visual Basic using Visual Studio.</p>
	<hr />
</div>
	
<div id="mobileApps">
	<p class="previewHeader">Hotel Reservation App</p>
	<a href="https://github.com/mreinders13/Hotel-Reservation" target="_blank"><img class="preview-img" style="border-style: solid; border-width: thin;" src="img/Hotel-Reservation-Preview.png" alt="Hotel Reservation Application" /></a>
	<p>This Android application is designed to mimic a simple Hotel Reservation system that allows users to select from four different hotels, select their desired room type, enter user information, select a Check-in and Check-out Date, request any special needs/requests and review their reservation. This Android application was creating using C# and Xamarin Forms in Visual Studio. </p>
	<hr /></div>
<script type='text/javascript'>

function resetMenu() {
	document.getElementById('websites').style.display = "none";
	document.getElementById('menuSite').style.color = "#707070"
	document.getElementById('menuSite').style.fontSize = "16px"
	document.getElementById('webApps').style.display = "none";
	document.getElementById('menuWeb').style.color = "#707070";
	document.getElementById('menuWeb').style.fontSize = "16px";
	document.getElementById('desktopApps').style.display = "none";
	document.getElementById('menuDesktop').style.color = "#707070";
	document.getElementById('menuDesktop').style.fontSize = "16px";
	document.getElementById('mobileApps').style.display = "none";
	document.getElementById('menuMobile').style.color = "#707070";
	document.getElementById('menuMobile').style.fontSize = "16px";
}

function selectSites() {
    document.getElementById('websites').style.display = "block";
    document.getElementById('menuSite').style.color = "black";
}

function selectWeb() {
	document.getElementById('webApps').style.display = "block";
	document.getElementById('menuWeb').style.color = "black";
}

function selectDesktop() {
	document.getElementById('desktopApps').style.display = "block";
	document.getElementById('menuDesktop').style.color = "black";
}

function selectMobile() {
	document.getElementById('mobileApps').style.display = "block";
	document.getElementById('menuMobile').style.color = "black";
}

</script>
<?php include("inc/footer.php"); ?>