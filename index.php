<!DOCTYPE html>
<html>
<head>
    <title>MSE23</title>
    <style>
        .button-container {
          text-align: right;
        }
        
        .button-container button {
          display: inline-block;
          margin: 5px;
          padding: 10px 20px;
          background-color: #4CAF50;
          color: white;
          border: none;
          cursor: pointer;
          transition: background-color 0.3s;
        }
        
        .button-container button:hover {
          background-color: #45a049;
        }

        .image-container {
            position: relative;
            height: 400px;
            background-image: url('homebody.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .event-overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.3);
        }

        .event-info {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #000000;
            font-size: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 10px;
        }

        .event-info span {
            margin-right: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div style="background-color: rgb(45, 151, 201); height: 200px;">
        <div class="button-container">
            <button onclick="redirectToPage('indoor.PHP')">Indoor</button>
            <button onclick="redirectToPage('outdoor.PHP')">Outdoor</button>
        </div>
        <h1 style="text-align: center;">Mega Sports Event 2k23</h1>
    </div>

    <script>
        function redirectToPage(filePath) {
            // Redirect to another page
            window.location.assign(filePath);
        }
    </script>
    
    <div class="image-container">
        <div class="event-overlay"></div>
        <div class="event-info">
            <h2><span>  <h2>Admin Login</h2>
                <form method="POST" action="login.php">
                  <label for="username">Username:</label>
                  <input type="text" id="username" name="username" required><br><br>
                  
                  <label for="password">Password:</label>
                  <input type="password" id="password" name="password" required><br><br>
                  
                  <input type="submit" value="Login">
                </form></span></h2>
        </div>
    </div>
    <p style="background-color: rgb(28, 97, 129);
    margin-top: 0%;
    margin-bottom: 0%;
    font-size: 30px;
    text-align: left;
    color: blanchedalmond;

    ">"Embrace the challenge, conquer your fears, and let your passion<br> ignite the fire within you. This sports event is your stage, and you <br>are the star. Give it your all, leave your heart on the field, and show <br>the world what true determination looks like."</p>
<p style="margin-top: 0%;
background-color: darkslategrey;
height: 400px;
text-align: center;
">
  <b style="font-size: xx-large;"> About Us</b><br>
 <span style="font-size: x-large;">  In Case of query<br>
   Contact Us</span>
   <a href="www.facebook.com"  style="font-size: larger;color: blue;">Facebook</a><br>
   <a href="www.instagram.com" style="font-size: larger;color: red;">Instagram</a><br>
  <span style="color: #45a049;font-size: larger;" >Whatsapp:+92331-0000000</spoan>
   </p>
   
</p>

</body>
</html>