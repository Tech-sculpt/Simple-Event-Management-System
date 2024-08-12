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
            <h2>Registration</h2>
        
            <!-- Registration form -->
            <form action="register.php" method="POST">
                <label for="eventType">Event Type:</label>
                <select name="eventType" required>
                    <option value="outdoor">Outdoor</option>
                </select><br>
        
                <label for="subEventType">Sub-Game Type:</label>
                <select name="subEventType" required>
                    
                    <optgroup label="Outdoor">
                        <option value="Basketball">Basketball</option>
                        <option value="Football">Football</option>
                        <option value="Hockey">Hockey</option>
                    </optgroup>
                </select><br>
        
                <label for="name">Name:</label>
                <input type="text" name="name" required><br>
        
                <label for="email">Email:</label>
                <input type="email" name="email" required><br>
        
                <label for="phone">Phone:</label>
                <input type="text" name="phone" required><br>
        
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
    
    <p style="margin-top: 0%;background-color: darkslategrey;height: 400px;text-align: center;">
        <b style="font-size: xx-large;"> About Us</b><br>
        <span style="font-size: x-large;">  In Case of Query<br> Contact Us</span><br>
        <a href="www.facebook.com" style="font-size: larger;color: blue;">Facebook</a><br>
        <a href="www.instagram.com" style="font-size: larger;color: red;">Instagram</a><br>
        <span style="color: #45a049;font-size: larger;">WhatsApp: +92331-0000000</span>
    </p>
</body>
</html>
