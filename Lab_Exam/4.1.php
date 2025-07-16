<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        Name: <input type="text" name="Name" id=""> 
        <br><br>
        
        Qualifications: 
            <select name="Qualifications" id="">
                <option value="SEE">SEE</option>
                <option value="+2">+2</option>
                <option value="Bachelors">Bachelors</option>
            </select>
        <br><br> 

        Salary: <input type="text" name="salary">
        <br><br>

        MOther Name: <input type="text" name="mothername">
        <br><br>

    </form>
    <?php
        include 'dbconnect.php';
        if(isset($_POST['Submit'])) 
        {
            $Name = $_POST['Name'];
            $Qualifications= $_POST['Qualifications'];
            $Salary = $_POST["Salary"];
            $Mothername = $_POST['Mothername']

           
            $sql = "INSERT INTO exam_database(Name, Qualifications, Salary, Mothername, ) VALUES('$Name', '$Qualifications', '$Salary', '$Mothername')";

            $result = mysqli_query($conn, $sql);

            if($result) {
                echo "<script>alert('Success')</script>";
            } else {
                echo "<script>alert('Failed')</script>". mysqli_error($conn);
            }
        }
    ?>
</body>
</html>