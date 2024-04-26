<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Believe</title>
    <script src="https://kit.fontawesome.com/9e3b941b5d.js" crossorigin="anonymous"></script>
   
 
    <link rel="stylesheet" href="{{ asset('css/job.css') }}">
</head>
<body>

<div id="portfolio">

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
                <i class="fa-regular fa-user"></i>
            
            </nav>
            </div>
    </div>
  
    <div class="container">
        <h1 class = "sub-title"> Available Jobs</h1>
        <div class="work-list">
            <div class="work">

                <img src = "{{ asset('images/accountant.jpg') }}">
                <div class="layer">
                    <h3> Water Level Sensor in Arduino</h3>
                    <p> Created a sensor for water level in Arduino</p>
                    <a href="{{ route('showcaseitem') }}"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src = "{{ asset('images/computerrepair.jpg') }}">
                <div class="layer">
                    <h3> DICT Startup Competition</h3>
                    <p> Participated in DICT Startup Competition</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src = "{{ asset('images/programmer.jpg') }}">
                <div class="layer">
                    <h3> CatVille Game</h3>
                    <p> Created a simple interaction Game about petting cats</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src = "{{ asset('images/accountant.jpg') }}">
                <div class="layer">
                    <h3> CatVille Game</h3>
                    <p> Created a simple interaction Game about petting cats</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src = "{{ asset('images/computerrepair.jpg') }}">
                <div class="layer">
                    <h3> CatVille Game</h3>
                    <p> Created a simple interaction Game about petting cats</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src = "{{ asset('images/programmer.jpg') }}">
                <div class="layer">
                    <h3> CatVille Game</h3>
                    <p> Created a simple interaction Game about petting cats</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
      
    </div>
    </div>




</body>

