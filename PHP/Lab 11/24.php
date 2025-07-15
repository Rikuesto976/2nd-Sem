<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Aspect</th>
        <th>GET</th>
        <th>POST</th>
    </tr>
    <tr>
        <td>Syntax</td>
        <td>$_GET[""]</td>
        <td>$_POST[""]</td>
    </tr>
    <tr>
        <td>Data Visibility</td>
        <td>Data is appended to the URL (visible).</td>
        <td>Data is sent in the request body (hidden).</td>
    </tr>
    <tr>
        <td>Security</td>
        <td>Less secure as data is visible in the URL.</td>
        <td>More secure as data is not visible in the URL.</td>
    </tr>
    <tr>
        <td>Data Length</td>
        <td>Limited by the URL length.</td>
        <td>No restrictions on data length.</td>
    </tr>
    <tr>
        <td>Caching</td>
        <td>Can be cached by browsers.</td>
        <td>Cannot be cached.</td>
    </tr>
    <tr>
        <td>Use Case</td>
        <td>Used for retrieving data (e.g., search queries).</td>
        <td>Used for submitting sensitive data (e.g., forms).</td>
    </tr>
    <tr>
        <td>Bookmarking</td>
        <td>Can be bookmarked (data in URL).</td>
        <td>Cannot be bookmarked.</td>
    </tr>
    <tr>
        <td>Speed</td>
        <td>Faster as data is sent in the URL.</td>
        <td>Slightly slower due to data in the request body.</td>
    </tr>
</table> 

<h1>GET vs POST Example</h1>

    <!-- Form using GET method -->
    <form method="GET" action="">
        <label for="getName">Enter Name (GET):</label>
        <input type="text" name="getName" id="getName">
        <button type="submit">Submit via GET</button>
    </form>

    <br>

    <!-- Form using POST method -->
    <form method="POST" action="">
        <label for="postName">Enter Name (POST):</label>
        <input type="text" name="postName" id="postName">
        <button type="submit">Submit via POST</button>
    </form>

    <br>

    <!-- PHP Code to Display Submitted Data -->
    <?php
    if (isset($_GET['getName'])) {
        echo "GET Method: Data received is " . $_GET['getName'] . "<br>";
    }

    if (isset($_POST['postName'])) {
        echo "POST Method: Data received is " . $_POST['postName'] . "<br>";
    }
    ?>  
</body>
</html>