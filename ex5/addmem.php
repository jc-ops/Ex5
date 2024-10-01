<!DOCTYPE HTML>  
<html>
<head>
<style>
body {
  background: linear-gradient(to right, #feac5e, #c779d0, #4bc0c8);
  font-family: Arial, sans-serif;
  color: white;
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
}

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

h2 {
  text-align: center;
  margin-top: 20px;
  font-size: 36px;
}

form, .input-result {
  background-color: rgba(0, 0, 0, 0.7); 
  padding: 20px;
  border-radius: 10px;
  width: 400px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  margin: 10px;
}

input[type="text"] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 10px;
  border: none;
  border-radius: 5px;
}

input[type="radio"] {
  margin: 0 10px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

.error {
  color: #FF0000;
}

p {
  text-align: center;
}

span#firstNameHint, span#lastNameHint {
  color: lightyellow;
  font-size: 12px;
}

.input-result {
  text-align: center;
  color: white;
}



</style>
<script>

const firstNames = ["Jansent", "Janna", "Jocel", "Camella", "Cathy", "Niña",  "Mina", "Lucas", "Tzuyu", "Eren"];
const lastNames = ["Bazar", "Roldan", "Encio", "Escalon", "Dela Cruz", "Dionisio"];

function showHint(str, field) {
  let suggestions = [];
  if (str.length === 0) {
    document.getElementById(field + "Hint").innerHTML = "";
    return;
  } else {
    const nameArray = field === "firstName" ? firstNames : lastNames;
    suggestions = nameArray.filter(name => name.toLowerCase().startsWith(str.toLowerCase()));
    
    document.getElementById(field + "Hint").innerHTML = suggestions.length > 0 ? suggestions.join(", ") : "No suggestions";
  }
}

</script>
</head>
<body>  

<?php
$firstNameErr = $lastNameErr = $positionErr = $description = $ageErr = $birthdayErr = $contactErr = $addressErr = $githubErr = $genderErr = $hobbiesErr = "";
$firstName = $lastName = $position = $age = $birthday = $contact = $address = $github = $gender = $hobbies = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $firstNameErr = "First name is required";
  } else {
    $firstName = test_input($_POST["firstName"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
      $firstNameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["lastName"])) {
    $lastNameErr = "Last name is required";
  } else {
    $lastName = test_input($_POST["lastName"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
      $lastNameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["[position"])) {
    $positionErr = "Position is required";
  } else {
    $positionErr = test_input($_POST["position"]);
    if (!filter_var($position, FILTER_VALIDATE_INT) || $position <= 0) {
      $positionErr = "Please enter position";
    }
  }

  if (empty($_POST["description"])) {
  } else {
    $description = test_input($_POST["description"]);
    }

  if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
    if (!filter_var($age, FILTER_VALIDATE_INT) || $age <= 0) {
      $ageErr = "Please enter a valid age";
    }
  }

  if (empty($_POST["birthday"])) {
    $birthdayErr = "birthday is required";
  } else {
    $birthday = test_input($_POST["birthday"]);
    if (!filter_var($birthday, FILTER_VALIDATE_INT) || $birthday <= 0) {
      $birthdayErr = "Please enter birthday";
    }
  }

  if (empty($_POST["contact"])) {
    $contactErr = "Contact Number is required";
  } else {
    $contact = test_input($_POST["contact"]);
    if (!filter_var($contact, FILTER_VALIDATE_INT) || $contact <= 0) {
      $ageErr = "Please enter a contact number";
    }
  }

  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
    if (!filter_var($address, FILTER_VALIDATE_INT) || $address <= 0) {
      $addressErr = "Please enter an address";
    }
  }

  if (empty($_POST["github link"])) {
    $githubErr = "Guthub link is required";
  } else {
    $github = test_input($_POST["github link"]);
    if (!filter_var($github, FILTER_VALIDATE_INT) || $github <= 0) {
      $githubErr = "Please enter a Github link";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["hobbies"])) {
    $hobbiesErr = "At least one hobby is required";
  } else {
    $hobbies = test_input($_POST["hobbies"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>FORM TEAM</h2>
<p><span class="error">* Required field *</span></p>

<nav class="navbar">
        <div class="navdiv">
            <ul>
                <li><a href="teamprofile.php">Home</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
</nav>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  First Name: <input type="text" name="firstName" value="<?php echo $firstName; ?>" onkeyup="showHint(this.value, 'firstName')">
  <span class="error">* <?php echo $firstNameErr;?></span>
  <p>Suggestions: <span id="firstNameHint"></span></p>
  
  Last Name: <input type="text" name="lastName" value="<?php echo $lastName; ?>" onkeyup="showHint(this.value, 'lastName')">
  <span class="error">* <?php echo $lastNameErr;?></span>
  <p>Suggestions: <span id="lastNameHint"></span></p>

  Position: <input type="text" name="position" value="<?php echo $position; ?>">
  <span class="error">* <?php echo $positionErr;?></span>

  Description: <input type="text" name="description" value="<?php echo $description; ?>">

  Age: <input type="text" name="age" value="<?php echo $age; ?>">
  <span class="error">* <?php echo $ageErr;?></span>

  Birthday: <input type="date" name="birthday" value="<?php echo $birthday; ?>">
  <span class="error">* <?php echo $birthdayErr;?></span> <br><br>

  Contact Number: <input type="text" name="contact" value="<?php echo $contact; ?>">
  <span class="error">* <?php echo $contactErr;?></span>

  Address: <input type=<a href="text" name="address" value="<?php echo $address; ?>">
  <span class="error">* <?php echo $addressErr;?></span> <br><br>

  GitHub Link: <input type="text" name="address" value="<?php echo $address; ?>"></a>
  <span class="error">* <?php echo $addressErr;?></span>

  

  <br><br>
  Gender:
  <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender == "female") echo "checked";?>>Female
  <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender == "male") echo "checked";?>>Male
  <input type="radio" name="gender" value="other" <?php if (isset($gender) && $gender == "other") echo "checked";?>>Other
  <span class="error">* <?php echo $genderErr;?></span>

  <br><br>
  Hobbies: <input type="text" name="hobbies" value="<?php echo $hobbies; ?>">
  <span class="error">* <?php echo $hobbiesErr;?></span>

  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($firstNameErr) && empty($lastNameErr) && empty($positionErr) 
&& empty($descriptionErr) && empty($ageErr) && empty($birthdayErr) && empty($contactErr) && empty($addressErr)
&& empty($githubErr) && empty($genderErr) && empty($hobbiesErr)) {
    echo "<div class='input-result'>";
    echo "<h2>Your Input:</h2>";
    echo "First Name: " . $firstName . "<br>";
    echo "Last Name: " . $lastName . "<br>";
    echo "Position: " . $position . "<br>";
    echo "Description: " . $description . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Birthday: " . $birthday . "<br>";
    echo "Contact Number: " . $contact . "<br>";
    echo "Address: " . $address . "<br>";
    echo "GitHub Link: " . $github . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Hobbies: " . $hobbies;
    echo "</div>";
}
?>

</body>
</html>
