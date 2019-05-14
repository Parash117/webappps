<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Firebase Phone Authentication</title>
  <script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <!--<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-app.js"></script>-->

  <!-- TODO: Add SDKs for Firebase products that you want to use
       https://firebase.google.com/docs/web/setup#config-web-app -->

  <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyDmeebeGyMoai_i5UnBnrUYPeXauUYpN38",
      authDomain: "test-701be.firebaseapp.com",
      databaseURL: "https://test-701be.firebaseio.com",
      projectId: "test-701be",
      storageBucket: "test-701be.appspot.com",
      messagingSenderId: "490349711331",
      appId: "1:490349711331:web:97aab5deb98d7b69"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
  </script>
  <script src="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.css" />
  <link href="style.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
    <div id="container">
      <h3>Firebase Phone Number Auth. Demo</h3>
      <div id="loading">Loading...</div>
      <div id="loaded" class="hidden">
        <div id="main">
          <div id="user-signed-in" class="hidden">
            <div id="user-info">
              <div id="photo-container">
                <img id="photo">
              </div>
              <div id="name"></div>
              <div id="email"></div>
              <div id="phone"></div>
              <div class="clearfix"></div>
            </div>
            <p>
              <button id="sign-out">Sign Out</button>
              <button id="delete-account">Delete account</button>
            </p>
          </div>
          <div id="user-signed-out" class="hidden">
            <h4>You are signed out.</h4>
            <div id="firebaseui-spa">
              <h3>Single Page App mode:</h3>
              <div id="firebaseui-container"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="app.js"></script>
</body>
</html>
