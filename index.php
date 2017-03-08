<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesheet.css" media="screen">
    <title>Honor Pass @ JIS</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <?php include 'GoogleLogin.php' ?>
  </head>

  <body>
    <div id="title">
      <h1>Honor Pass JIS Website</h1>
    </div>


<div class="g-signin2" data-onsuccess="onSignIn"></div>

    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <script type="text/javascript">
    function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.


    }
    </script>


    <div id="bottom">
      <br>
        <ul>
          <li><pre>   </pre></li>
          <li><a class="active" href="hpfront.html"><h6>Home</h6></a></li>
          <li><a href="changelog.html"><h6>Changelog</h6></a></li>
          <li><a href="https://www.jisedu.or.id/members/students/index.aspx"><h6>JISNet</h6></a></li>
          <br>
          <li style="float:right; width:40%;"><h6 style="font-size:40%; padding-right:1%;">Coded by: Xavier Travers, Anish Tiwari, Ben Chalmers and Abhishu Brahmecha</h6></li>
        </ul>
    </div>

  </body>
</html>
