<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    function sanitizeInput($input)
    {
        return htmlspecialchars(strip_tags($input));
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "searchbox_db";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $searchInput = sanitizeInput($_POST["searchInput"]);
        $searchType = sanitizeInput($_POST["searchType"]);
        $sql = "SELECT * FROM search_results WHERE type = ? AND name LIKE ?";
        $stmt = $conn->prepare($sql);
        $searchPattern = "%{$searchInput}%";
        $stmt->bind_param("ss", $searchType, $searchPattern);
        $stmt->execute();
        $result = $stmt->get_result();
        echo "<div id='search-results'>";
        echo "<h2>Search Results for '{$searchInput}' (Type: {$searchType})</h2>";
        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>{$row['name']}</li>";
            }
            echo "</ul>";
        } else {
            echo "<p class='not-found'>No results found!</p>";
        }
        echo "</div>";
        $stmt->close();
        $conn->close();
    }
    ?>
    <form action="" method="post">
        <label for="searchInput">Search:</label>
        <input type="text" id="searchInput" name="searchInput" required />
        <label for="searchType">Search Type:</label>
        <select id="searchType" name="searchType" required>
            <option value="book">Book</option>
            <option value="person">Person's Name</option>
            <option value="player">Player's Name</option>
            <option value="movie">Movie</option>
        </select>
        <button type="submit">Search</button>
    </form>
</body>

</html>