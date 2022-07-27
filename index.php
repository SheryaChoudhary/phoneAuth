<!DOCTYPE html>
<html>
  <head>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

  </head>
  <body>
    <form action="verification.php">
      <h1>Firebase Phone verification In PHP</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Phone Number</strong></label>
        <input type="text" id="number" placeholder="Enter phone number" name="uname" required>
      </div>
      <div id="recaptcha-container"></div>
      <button type="button" onclick="phoneAuth();">Send Otp</button>
    
    </form>


    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    apiKey: "AIzaSyAztufFvd8F7SiVNIkRSZOXuamPeU99jZc",
    authDomain: "inride-642ed.firebaseapp.com",
    databaseURL: "https://inride-642ed-default-rtdb.firebaseio.com",
    projectId: "inride-642ed",
    storageBucket: "inride-642ed.appspot.com",
    messagingSenderId: "686322053624",
    appId: "1:686322053624:web:0046bc2cfac953a221260d",
    measurementId: "G-WQBV2BXRFQ"
  };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
     firebase.analytics();
</script>
    <script src="firebase.js" type="text/javascript"></script>
  </body>
</html>