<?php
  include 'coba.php';
  error_reporting(0);
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="assests/css/style.css">
  <link rel="stylesheet" href="assests/css/stylelogin.css">
  <link rel="stylesheet" href="assests/css/1.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assestscss/bootstrap.min.css">
    
    <!-- Style -->
    

</head>
<body>

  <div div id="overlay" class="overlay" onclick="off()">
  </div>
  <div class="landing-page">
    <div class="nav-bar">
      <a href="#home" class="nav-logo">E-Kost</a>
      <ul>
        <li><a href="#landing-page">Home</a></li>
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#kontak">Contact</a></li>
        <li><a href="#lpage">Login</a></li>
      </ul>
    </div>

    <section class="banner"></section>

    <main id="landing-page">
      <div class="content" >
        <h1>E-KOST</h1>
        <h2>Elektronik Kost</h2>
        <p>Electronik Kost atau kost electronik merupakan sebuah platform monitoring pengunaan akses kamar melalui website.</p>
        <button class="btns">Get Started</button>
        <button class="btns">Learn More</button>
      </div>

      <div>
        <img src="" alt="">
      </div>
    </main>
  </div>

  <section>


    <div id="lpage" class="lpage">
      
      <div class="container">

      <div class="modal" id="popuptag">
    <div class="atas" id="atas">
      <p>Data Scan</p>
      <span id="modal1" class="close" onclick="off(this.id)"><i class="fas fa-times-circle"></i></span>
    </div>
    <div class="body1" id="body1">
        <?php
            require 'read tag.php';
        ?>
    </div>
  </div>

        <div class="blueBg">
          <div class="box signin">
            <h2>Already Have an Account?</h2>
            <button class="signinBtn">Sign In</button>
            <br>
            <button id="popuptag" onclick="on(this.id)">Scan E-KTP</button>
          </div>
          <div class="box signup">
            <h2>Dont Have an Account?</h2>
            <button class="signupBtn">Sign Up</button>
          </div>
        </div>


        <div class="formBx">
        <div class="form signinForm">
          <form action="" method="post">
            <h3>Sign In</h3>
            <input type="text" placeholder="Username" name="username" value="<?php echo $_POST['username']; ?>" required />
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required />
            <input class=btn_sigin type="submit" value="Login" name="signin"> 
            <a href="#" class="forgot">Forgot Password</a>
          </form>
        </div>

        <div class="form signupForm">
          <form action="signup.php" method="post">
            <h3 class="up">Sign Up</h3>

            <input type="text" placeholder="Scan E-KTP" name="id" value="<?php echo $_POST["id"]; ?>" required />

            <input type="text" placeholder="Full Name" name="signup_full_name" id="get" value="<?php echo $_POST["signup_full_name"]; ?>" required />
            <input type="text" placeholder="username" name="signup_username" value="<?php echo $_POST["signup_username"]; ?>" required />
            <input type="email" placeholder="Email Address" name="signup_email" value="<?php echo $_POST["signup_email"]; ?>" required />
            <input type="password" placeholder="Password" name="signup_password" value="<?php echo $_POST["signup_password"]; ?>" required />
            <input type="password" placeholder="Confirm Password" name="signup_cpassword" value="<?php echo $_POST["signup_cpassword"]; ?>" required />
            <input type="submit" class="btn btn_signup" name="signup" value="Sign up" />
          </form>
        </div>

        </div>
      </div>
    </div>

 
    

  </section>


<section>

  <div class="tentang" id="tentang">

    <div class="kepala">
      <h2>Tentang</h2>
      <p>
        Pada E-Kost menggunakan beberapa komponen untuk menjaga keamaan dan kenyamanaan dalam penggunaan E-Kost diantaranya
      </p>
    </div>

      <div class="blog-post" >

        <div class="post">
          <img class="post-img" src="assests/img/1.jpg" alt="">
          <div class="post-konten">
            <h3>Arduino</h3>
            <span class="penjelasan">Mikro Kontroler ...</span>
            <button class="btn" data-target="#popup1">Read More</button>
          </div>
        </div>

        <div class="post">
          <img class="post-img" src="assests/img/2.webp" alt="">
          <div class="post-konten">
            <h3>RFID</h3>
            <span class="penjelasan">Mikro Kontroler ...</span>
            <button class="btn" data-target="#popup2">Read More</button>
          </div>
        </div>

        <div class="post">
          <img class="post-img" src="assests/img/3.jpg" alt="">
          <div class="post-konten">
            <h3>NodeMcu</h3>
            <span class="penjelasan">Mikro Kontroler ...</span>
            <button class="btn" data-target="#popup3">Read More</button>
          </div>
        </div>

        
          <div class="post">
            <img class="post-img" src="assests/img/1.jpg" alt="">
            <div class="post-konten">
              <h3>Arduino</h3>
              <span class="penjelasan">Mikro Kontroler ...</span>
              <button class="btn" data-target="#popup1">Read More</button>
            </div>
          </div>
  
          <div class="post">
            <img class="post-img" src="assests/img/2.webp" alt="">
            <div class="post-konten">
              <h3>RFID</h3>
              <span class="penjelasan">Mikro Kontroler ...</span>
              <button class="btn" data-target="#popup2">Read More</button>
            </div>
            
          </div>
  
          <div class="post">
            <img class="post-img" src="assests/img/3.jpg" alt="">
            <div class="post-konten">
              <h3>NodeMcu</h3>
              <span class="penjelasan">Mikro Kontroler ...</span>
              <button class="btn" data-target="#popup3">Read More</button>
            </div>
          </div>

          
            <div class="post">
              <img class="post-img" src="assests/img/1.jpg" alt="">
              <div class="post-konten">
                <h3>Arduino</h3>
                <span class="penjelasan">Mikro Kontroler ...</span>
                <button class="btn" data-target="#popup1">Read More</button>
              </div>
            </div>
    
            <div class="post">
              <img class="post-img" src="assests/img/2.webp" alt="">
              <div class="post-konten">
                <h3>RFID</h3>
                <span class="penjelasan">Mikro Kontroler ...</span>
                <button class="btn" data-target="#popup2">Read More</button>
              </div>
              
            </div>
    
            <div class="post">
              <img class="post-img" src="assests/img/3.jpg" alt="">
              <div class="post-konten">
                <h3>NodeMcu</h3>
                <span class="penjelasan">Mikro Kontroler ...</span>
                <button class="btn" data-target="#popup3">Read More</button>
              </div>
            </div>

      </div>
  </div>

  <div class="popup" id="popup1">
    <button class="btn close">&times;</button>
    <div class="title"><h2>Arduino</h2></div>
    <p>
      Molestiae tenetur dignissimos natus dolorum laudantium enim iure. Quos
      exercitationem cumque incidunt asperiores necessitatibus soluta? Labore
      odio eos dignissimos, tenetur cum repellendus?
    </p>
    
  </div>

  <div class="popup" id="popup2">
    <button class="btn close">&times;</button>
    <div class="title"><h2>RFID</h2></div>
    <p>
      Molestiae tenetur dignissimos natus dolorum laudantium enim iure. Quos
      exercitationem cumque incidunt asperiores necessitatibus soluta? Labore
      odio eos dignissimos, tenetur cum repellendus?
    </p>
    
  </div>

  <div class="popup" id="popup3">
    <button class="btn close">&times;</button>
    <div class="title"><h2>NodeMcu</h2></div>
    <p>
      Molestiae tenetur dignissimos natus dolorum laudantium enim iure. Quos
      exercitationem cumque incidunt asperiores necessitatibus soluta? Labore
      odio eos dignissimos, tenetur cum repellendus?
    </p>
    
  </div>


</section>

<section>
  <div class="kontak" id="kontak">
  <div class="badan-kontak" >
    <div class="kontak-info">
      <div>
        <h2>Info Kontak</h2>
        <ul class="info">
          <li>
            <span><img src="assests/img/location.png" alt=""></span>
            <span>jl.anjiang gadang kapalo reviewer no 50 padang</span>
            
          </li>
          <li>
            <span><img src="assests/img/mail.png" alt=""></span>
            <span>anjianggadang@gmail.com</span>
          </li>
          <li>
            <span><img src="assests/img/call.png" alt=""></span>
            <span>0843432432432</span>
          </li>
        </ul>
      </div>
      <ul class="sci">
        <li><a href="#"><img src="assests/img/1.png" alt=""></a></li>
        <li><a href="#"><img src="assests/img/2.png" alt=""></a></li>
        <li><a href="#"><img src="assests/img/3.png" alt=""></a></li>
        <li><a href="#"><img src="assests/img/4.png" alt=""></a></li>
      </ul>

    </div>

    <div class="kontak-form">
      <h2>Kirim Pesan untuk menghubungi kami!</h2>
      <div class="kotakform">
        <div class="inputbox w50">
          <input type="text" required>
          <span>Nama lengkap</span>
        </div>
        <div class="inputbox w50">
          <input type="email" required>
          <span>Email</span>
        </div>
        <div class="inputbox w50">
          <input type="text" required>
          <span>Nomor Handphone</span>
        </div>
        <div class="inputbox w100">
          <textarea required></textarea>
          <span>Silahkan tulis pertanyaan atau saran mengenai E-Kost..</span>
        </div>
        <div class="inputbox w100">
          <input  type="submit" value="Kirim">
        </div>
      </div>
    </div>
  </div>
</div>
</section>


  <button class=btn data-target="#popup2"> Scan E-KTP</button>
 



<script src="assests/javascript/js.js"></script>
<script src="assests/javascript/loginjs.js"></script>
<script src="assests/javascript/l/1.js"></script>


</body>
</html>