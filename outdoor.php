<!DOCTYPE html>
<html>
<head>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>MSE23</title>
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
            background-image: url('outdoor.jpg');
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

        .event-info .game-icons {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .event-info .game-icons i {
            margin: 0 5px;
            font-size: 24px;
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
           
            <h2 >	<i class='fas fa-volleyball-ball' style='font-size:24px'></i>Outdoor Games</h2>
           <h3>	&#xf1e3;Football	&#xf434;Basketball    &#xf45f;Volley Ball</h3>
        </div>
    </div>
    <p style="background-color: rgb(28, 97, 129);
    margin-top: 0%;
    margin-bottom: 0%;
    font-size: 30px;
    text-align: left;
    color: blanchedalmond;

    ">"Remember, this is not just a sports event. It is an<br> opportunity to inspire, to make memories, and to <br>leave a lasting legacy. Whether you win or lose,<br> let your sportsmanship shine through, and show <br>the world what true champions are made of.<br> Embrace the moment, and let your spirit soar!"<br>
     <div class="button-containers" style="background-color: #0e3f10;margin-bottom: 0%;">
        <button onclick="redirectToPage('outdoorreg.PHP')" style="height: 60px;text-align: center;font-size: large;background-color: green;">Registration For Outdoor Games</button>
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
    text-align: center;">
        <b style="font-size: xx-large;">About Us</b><br>
        <span style="font-size: x-large;">In Case of Query<br>
        Contact Us</span>
        <a href="www.facebook.com"  style="font-size: larger;color: blue;">Facebook</a><br>
        <a href="www.instagram.com" style="font-size: larger;color: red;">Instagram</a><br>
        <span style="color: #45a049;font-size: larger;">WhatsApp: +92331-0000000</span>
    </p>
</body>
</html>
