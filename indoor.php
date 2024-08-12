<!DOCTYPE html>
<html>
<head>
    <title>MSE23</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<style>
        
        .button-containers {
          text-align: center;
        }
        
        .button-containers button {
          display: inline-block;
          margin-bottom: 0%;
          padding: 10px 20px;
          background-color: #4CAF50;
          color: white;
          border: none;
          cursor: pointer;
          transition: background-color 0.3s;
        }
        
        .button-containers button:hover {
          background-color: #1f8feb;
        }
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
            background-image: url('indoor.jpg');
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
            
            <button onclick="redirectToPage('index.PHP')">Home</button>
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
            <h2><i class="fa fa-gamepad" style="font-size:24px"></i>Indoor Games</h2>
            <h3>&#9658;FIFA  &#9658;PUBG  &#9658;Snooker</h3>
        </div>
    </div>
    <p style="background-color: rgb(28, 97, 129);
    margin-top: 0%;
    margin-bottom: 0%;
    font-size: 30px;
    text-align: left;
    color: blanchedalmond;

    ">    "Within you lies a reservoir of untapped potential, waiting <br>to be unleashed. The road to triumph may be filled with <br>obstacles, but it is in overcoming them that you discover <br>your true strength. Embrace the challenge, embrace the,<br> journey, and let your passion for the game guide you to glory."<br>
     <div class="button-containers" style="background-color: #0e3f10;margin-bottom: 0%;">
        <button onclick="redirectToPage('indoorreg.PHP')" style="height: 60px;text-align: center;font-size: large;background-color: green;">Registeration For Indoor Games</button>
    </div>
    <script>
        function redirectToPage(filePath) {
            // Redirect to another page
            window.location.assign(filePath);
        }
    </script>
    </p>
<p style="margin-top: 0%;
background-color: rgb(30, 54, 54);
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
