<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <Legend>Registration</Legend>
                <fieldset>
                    <legend>Personal</legend>
                        Firstname: <input type="text" placeholder="Anurodh" name="firstname">  
                        Lastname: <input type="text" name="lastname" >
                        Age: <input type="number" max="60" min="15" name="age"> <br>
                        Email: <input type="email" name="email">
                        Phone: <select id="" name="phone">
                            <option value="">+977</option>
                            <option value=""></option>
                            </select>
                            <input type="number" name="phone">
                        Address: <select id="" name="address">
                                <option value="">KTM</option>
                                <option value="">Janakpur</option>
                            </select> <br>
                        Gender: <input type="radio" name="gender" value="Male">Male
                                <input type="radio" name="gender" value="Female">Female 
                                <input type="radio" name="gender" value="Other">Other            
                </fieldset>

                <fieldset>
                        <legend>Credentials</legend>
                            Username:   <input type="text" name="credential"> <br>
                            Password:   <input type="password">
                </fieldset>
    
                <fieldset>
                        <legend>Interest</legend>
                            Hobby: <input type="checkbox" name="hobby[]" value="Cricket">Cricket
                                    <input type="checkbox" name="hobby[]" value="Music">Music
                                    <input type="checkbox" name="hobby[]" value="Football">Football <br> 

                            Faculty:<input type="radio" name="faculty" value="IT">IT
                                    <input type="radio" name="faculty" value="BEA">BEA 
                                    <input type="radio" name="faculty" value="Engineering">Engineering
                </fieldset> <br>
                     College: <input type="text" name="" id=""> <br> <br>
                     Photo: <input type="file" accept="image/*"> <br> <br>
                     Document: <input type="file" accept="document/*"> <br> <br>
                     Message: <textarea name="Message" id="" placeholder="Type your message here" rows="15"></textarea> <br> <br>
                     
                     <input type="submit" value="Submit">
            </fieldset>
        </form>

        <?php
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $credential = $_POST['credential'];
            $hobby = $_POST['hobby'];
            $faculty = $_POST['faculty'];

            echo "<b>Personal Information</b>   <br>";

            echo "First Name: ".$firstname;
            echo "<br>";

            echo "Last Name: ".$lastname;
            echo "<br>";

            echo "Age: ".$age;
            echo "<br>";

            echo "Email: ".$email;
            echo "<br>";

            echo "Phone: ".$phone;
            echo "<br>";

            echo "Address: ".$address;
            echo "<br>";

            echo "Gender: ".$gender;
            echo "<br>";

            echo "<b>Credentials</b> <br>";
            echo "Userame: ".$credential;
            echo "<br>";

            echo "<b>Hobby</b>";
            foreach($hobby as $value)
            {
                echo "<li>$value </li>";
            }
        
            echo "<br>";

            echo "Faculty: ".$faculty;
            echo "<br>";
        ?>
</body>
</html>