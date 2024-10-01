<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Our Team - Group 2</title>
    <style>
        body {
            background: linear-gradient(45deg, #d2001a, #7462ff);
            font-family: Arial, sans-serif;
            color: #333;
            text-align: center;
            padding: 20px;
            margin: 0; 
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .about-section {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin: 15px;
            width: 500px; /* Adjust width as needed */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: left;
        }
        .about-section h2 {
            margin-bottom: 15px;
            text-align: center;
        }
        .about-section p {
            line-height: 1.6;

        }
        }
        /* Navigation Bar Styles */
        .navbar {
            background-color: linear-gradient(to top, #660033 0%, #ff99cc 100%);
            color: #fff;
            padding: 10px 0;
            margin-bottom: 20px;
        }
        .navdiv ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .navdiv li {
            display: inline-block;
            margin: 0 15px;
        }
        .navdiv a {
            color: #fff;
            text-decoration: none;
        }
        .navdiv a:hover {
            text-decoration: underline;
            color: Red;
        }
        footer {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>TEAM PALABAN</h1>
    </header>

    <nav class="navbar">
        <div class="navdiv">
            <ul>
                <li><a href="teamprofile.php">Home</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="about-section">
            <h2>Hi!</h2>
            <p>Welcome to our team page, where you can get to know the vibrant and collaborative Group 2!</p>
            <p>This page is a window into our world, showcasing our individual talents and how we work together to achieve great things. 
                We're a diverse group of individuals, each bringing unique skills and perspectives to the table. </p>
            <p>As a team, we value open communication, creative problem-solving, and a dedication to continuous learning. </p>
            <p>We strive to create a supportive and encouraging environment where everyone feels valued and empowered to contribute their best. </p>
            <p>TWhether you're looking for information about our individual members or a glimpse into our team dynamics, you'll find it all here. </p>
        </div>
    </div>

    <p>To learn more about our individual members, please visit our <a href="team.php">Team Profile</a> page.</p>

    <footer>
        <p>Thank you for visiting our team page! We hope you enjoyed learning more about us. If you have any questions or would like to get in touch, please <a href="#">contact us</a>.</p>
    </footer>
</body>
</html>