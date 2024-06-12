<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artist List</title>
  <link rel="stylesheet" href="css/data.css">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    th,
    td {
      border: 2px solid black;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #e2e2e2;
    }

    h1 {
      text-align: center;
    }
  </style>
</head>

<body>
  <h1>Artist List</h1>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "top2000";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT id, name, country FROM artist";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Country</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>";
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["country"] . "</td>";
     // Placeholder for the year column
      echo "<td><a href='update.php?id=" . $row["id"] . "'>Update</a></td>";
      echo "<td><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "<p>No results found</p>";
  }

  
  
  $conn->close();
  ?>
</body>

</html>