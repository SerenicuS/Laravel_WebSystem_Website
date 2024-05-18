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
                <a href="your_link_here" style="color: inherit; text-decoration: none;">
                    <i class="fa-regular fa-user"></i>
                </a>
            
            </nav>
            </div>
    </div>
  
    <div class="container">
        <div class ="search-container">
        <h2> You want a specific job? Search here
        <form action="/search" method="GET">
        <input type="text" name="query" placeholder="Enter your search query">
        <button type="submit">Search</button>
    </form>
        </div>

        <div class="work-list">
            <div class="work">

                <img src = "{{ asset('images/accountant.jpg') }}">
                <div class="layer">
                    <h3> Bank Database Administrator</h3>
                 
                    <a href="{{ route('showcaseitem') }}"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src = "{{ asset('images/computerrepair.jpg') }}">
                <div class="layer">
                    <h3> Computer Technician</h3>
                
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src = "{{ asset('images/programmer.jpg') }}">
                <div class="layer">
                    <h3> Senior Developer</h3>
             
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src = "{{ asset('images/accountant.jpg') }}">
                <div class="layer">
              
                   
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src = "{{ asset('images/computerrepair.jpg') }}">
                <div class="layer">
                  
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src = "{{ asset('images/programmer.jpg') }}">
                <div class="layer">
                   
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
      
    </div>
    </div>




</body>

