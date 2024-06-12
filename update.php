<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "top2000";

    // Maak verbinding met de database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Controleer de verbinding
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Controleer of ingediend voor updaten
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['naam']) && isset($_POST['country'])) {
        $id = $_POST['id'];
        $naam = $_POST['naam'];
        $country = $_POST['country'];

        $sql = "UPDATE artist SET name='$naam', country='$country' WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    //  de artiestgegevens op
    $sql = "SELECT id, name, country FROM artist";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data van elke rij
        while($row = $result->fetch_assoc()) {
            echo "<form method='post'>
                    <table class='tblA'>
                        <tr>
                            <td>
                                <input type='hidden' name='id' value='".$row['id']."'>
                                <input type='text' id='naam' name='naam' placeholder='Name' required value='".$row['name']."'><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type='text' id='country' name='country' placeholder='Country' required value='".$row['country']."'><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input id='updaten' type='submit' name='submit' value='Updaten'><br>
                            </td>
                        </tr>
                    </table>
                  </form>";
        }
    } else {
        echo "0 results";
    }

    // Sluiten
    mysqli_close($conn);
    ?>
</body>
</html>
