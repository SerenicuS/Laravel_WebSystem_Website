<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/usersection.css') }}">
    <script src="https://kit.fontawesome.com/9e3b941b5d.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/home.js') }}"></script>
</head>
<div class ="body">
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

                <div class="dropdown">
                    <i class="fa-regular fa-user"></i>
                     </button>
                    <div class="dropdown-content">
                    <a href="#">Account</a>
                    <a href="#">Sign Out</a>
                     <a href="#">Settings</a>
                </div>
</div>
    </div>

</div>
<div class="content-profile-page">
   <div class="profile-user-page card">
      <div class="img-user-profile">
        <div class = "profile-bgHome">
        <img src="{{ asset('images/accountant.jpg') }}" alt="">
        </div>
        <img class="avatar" src="{{ asset('images/accountant.jpg') }}">
           </div>
          <button>History</button>
          <div class="user-profile-data">
            <h1>User</h1>
            <p>Hello, My Name is User</p>
          </div> 
          <div class="description-profile">Front-end | War veteran | Game Dev | <a href="user" title="user"><strong>@user</strong></a> |Nice to meet you</div>
       <ul class="data-user">
        <li><a><strong>0</strong><span>Posts</span></a></li>
        <li><a><strong>2</strong><span>Workbuddies</span></a></li>
        <li><a><strong>239</strong><span>Following</span></a></li>
       </ul>
      </div>
    </div>

    

<footer>
</footer>

</html>