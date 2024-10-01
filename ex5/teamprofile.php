<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 2 - Team Profile</title>
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
        .team-member {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin: 15px;
            width: 250px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .info {
            margin-top: 15px;
        }
        .more {
            display: none;
        }
        input[type='checkbox']:checked ~ .more {
            display: block;
        }
        form {
            margin: 20px 0;
        }
        input[type='text'] {
            padding: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #555;
        }
        footer {
            margin-top: 20px;
        }
        footer a {
            color: #fff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
            color: Red;
        }
        /* Navi Bar */
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
        #addMemberForm {
            margin: 20px 0;
            display: none; /* Initially hide the form */
        }
        #addMemberForm label {
            display: block;
            margin-bottom: 5px;
        }
        #addMemberForm input,
        #addMemberForm textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        #addMemberForm button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #addMemberForm button:hover {
            background-color: #555;
        }
        /* Error Message Styles */
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
        /* Suggestion List Styles */
        #suggestions {
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            width: 200px;
            max-height: 200px;
            overflow-y: auto;
            display: none;
        }
        #suggestions li {
            list-style: none;
            padding: 8px;
            cursor: pointer;
        }
        #suggestions li:hover {
            background-color: #eee;
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
                <li><a href="#">Home</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
    </nav>

    <form method="get" action="getpost.php">
        <input type="text" name="search" placeholder="Search by name get" />
        <button type="submit">Search</button>
    </form>

    <form method="post" action="getpost.php">
        <input type="text" name="search" placeholder="Search by name post" />
        <button type="submit">Search</button>
    </form>

    <div class="container">
        
        <?php
        $team = [
            ["name" => "Roldan Janna", "position" => "Team Leader", "photo" => "janna.jpg", "description" => "Janna mabait sobra.", "age" => "20", "birthday" => "June 23, 2004", "contact" => "09513965408", "address" => "Blk 15 lot 35 Lilac St. Metroville Complex, San Francisco Halang, Biñan, Laguna", "github" => "https://github.com/062324"],
            ["name" => "Escalon Camella", "position" => "Member", "photo" => "ella.jpg", "description" => "Camella palagi overthink.", "age" => "21", "birthday" => "December 14, 2002", "contact" => "09156487919", "address" => "SummitVille, Muntinlupa", "github" => "https://github.com/CamellaEscalon"],
            ["name" => "Dela Cruz Cathylene Fate", "position" => "Member", "photo" => "cathy.jpg", "description" => "Cathylene laging active being president.", "age" => "20", "birthday" => "September 15, 2003", "contact" => "09275181927", "address" => "Sitio De Asis SMDP, Parañaque", "github" => "https://github.com/CathyleneDelaCruz"],
            ["name" => "Dionisio Niña", "position" => "Member", "photo" => "nina.jpg", "description" => "Niña pakshet sayo.", "age" => "19", "birthday" => "September 16, 2004", "contact" => "09687223057", "address" => "Sitio Pagkakaisa, Sucat, Muntinlupa", "github" => "https://github.com/NinaDionisio"],
            ["name" => "Encio Jocel", "position" => "Member", "photo" => "jc.jpg", "description" => "Jocel mataray ka raw.", "age" => "22", "birthday" => "June 25, 2002", "contact" => "09946281902", "address" => "1619 Purok 6 Caingin, Santa Rosa, Laguna", "github" => "https://github.com/jc-ops"],
            ["name" => "Bazar Jansent", "position" => "Member", "photo" => "jan.jpg", "description" => "Jansent bossing kamusta ang buhay buhay.", "age" => "21", "birthday" => "November 12, 2002", "contact" => "09918142152", "address" => "Blk 14 lot 6 Ostrich St. Camella Homes Woodhills, Brgy. San Antonio, San Pedro, Laguna", "github" => "https://github.com/bazarjansent"],
        ];

        $searchTerm = isset($_POST['search']) ? $_POST['search'] : (isset($_GET['search']) ? $_GET['search'] : '');

        foreach ($team as $member) {
            if (stripos($member['name'], $searchTerm) !== false) {
                echo "
                <div class='team-member'>
                    <img src='{$member['photo']}' alt='{$member['name']}' />
                    <div class='info'>
                        <h2>{$member['name']}</h2>
                        <p>Position: {$member['position']}</p>
                        <p>{$member['description']}</p>
                        <input type='checkbox' id='read-more-{$member['name']}' />
                        <label for='read-more-{$member['name']}'>Read More</label>
                        <div class='more'>
                            <p><strong>Age:</strong> {$member['age']} <br>
                            <strong>Birthday:</strong> {$member['birthday']} <br>
                            <strong>Contact Number:</strong> {$member['contact']} <br>
                            <strong>Address:</strong> {$member['address']}</p>
                        </div>
                        <p><a href='{$member['github']}' target='_blank'>View {$member['name']}'s Github Profile</a></p>
                    </div>
                </div>
                ";
            }
        }
        ?>
    </div>

    <footer>
        <p>Want to add new member?<a href="addmem.php" id="showAddMemberForm">Click here.</a></p>
    </footer>

</body>
</html>