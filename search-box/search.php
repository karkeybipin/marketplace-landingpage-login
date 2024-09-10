<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #search-results {
            margin-top: 20px;
            list-style: none;
            padding: 0;
        }

        #search-results li {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <?php
    // Function to sanitize user input
    function sanitizeInput($input)
    {
        return htmlspecialchars(strip_tags($input));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "searchbox_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Sanitize user input
        $searchInput = sanitizeInput($_POST["searchInput"]);
        $searchType = sanitizeInput($_POST["searchType"]);

        // Prepare and execute SQL query
        $sql = "SELECT * FROM search_results WHERE type = ? AND name LIKE ?";
        $stmt = $conn->prepare($sql);
        $searchPattern = "%{$searchInput}%";
        $stmt->bind_param("ss", $searchType, $searchPattern);
        $stmt->execute();
        $result = $stmt->get_result();

        // Display search results
        echo "<h2>Search Results for '{$searchInput}' (Type: {$searchType})</h2>";
        echo "<ul id='search-results'>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['name']}</li>";
        }
        echo "</ul>";

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>

</body>

</html>