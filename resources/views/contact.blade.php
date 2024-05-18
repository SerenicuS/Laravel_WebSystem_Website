
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <script src="https://kit.fontawesome.com/9e3b941b5d.js" crossorigin="anonymous"></script>
</head>

<body>

 <!--
.logo {
    width: 65px;
    transform: translate(-900px, -14px);
    vertical-align: middle;
    position:absolute;
}



nav ul {
    display: flex;
    justify-content: center; 
    align-items: center; 
    list-style: none;
    padding: 0;
    margin: 0;
    width: 100%; 
    margin-left: -500px;
}

nav ul li {
    margin: 5px 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 24px;
    position: relative;
}

nav ul li a::after {
    content: '';
    width: 0;
    height: 3px;
    background: gray;
    position: absolute;
    left: 0;
    bottom: -6px;
    transition: 0.2s;
}

nav ul li a:hover::after {
    width: 100%;
}

.nav-page-container{
    padding: 20px 10%;
    border:2px solid black;
    box-sizing: border-box;
    justify-content: center;
    margin-top: 0px;
    background-color:#202020;
}

.text-container {
    width: 150%;
}


nav-container{
    width: 100%;
    height: 100vh;    margin-top: -90px;

   
}
 <div class="nav-container">
        <div class="nav-page-container">
            <nav>
                 <img src="{{ asset('images/WeBelieveLogo.png') }}" class="logo">
                <ul>
                    <li><a href ="{{ route('home') }}"> Home </a></li>
                    <li><a href ="{{ route('custom.login') }}"> Login/Register </a></li>
                    <li><a href ="{{ route('job') }}"> Available Jobs </a></li>
                    <li><a href ="{{ route('contact') }}"> Contact Us </a></li>
                </ul>
                <a href="your_link_here" style="color: inherit; text-decoration: none;">
                    <i class="fa-regular fa-user"></i>
                </a>
            
            </nav>
            </div>
    </div>
-->

<div class="container">
	<div class="row">
			<h1>Contact Us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">Any questions and feedbacks?</h4>
	</div>
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" required />
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" required />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" required />
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="btn-lrg submit-btn">Send Message</div>
			</div>
	</div>
</div>
</body>
</html>

