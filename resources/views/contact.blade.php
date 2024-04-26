
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <script src="https://kit.fontawesome.com/9e3b941b5d.js" crossorigin="anonymous"></script>
</head>



<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class = "sub-title"> Contact Us</h1>
                <p><i class="fa-solid fa-paper-plane"></i>alonsagayharold@gmail.com</p>
                <p><i class="fa-solid fa-square-phone"></i> 012343556</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/HKFA2002"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/harold-karl-franze-alonsagay-95b1a82a5/"><i class="fa-brands fa-linkedin"></i></i></a>
                </div>
            </div>
            <div class="contact-right"></div>
                <form>
                    <input type = "text" name = "Name" placeholder = "Your Name" required>
                    <input type = "email" name = "email" placeholder = "Your Email" required>
                    <textarea name = "Message"  rows = "6" placeholder = " Your Message"> </textarea>
                    <button type = "submit" class = "btn2"> Submit</button>
                </form>
        </div>
    </div>
</div>
