<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form</title>
    <link rel="stylesheet" href="css/search_form.css">
</head>

<body>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#news">News</a>
        <a href="#gallery">Gallery</a>
        <a href="#contact">Contact</a>
        <div class="search-container">
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
        </div>
    </nav>

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

    <!-- <section id="home">
        <h2>Home Section</h2>
        <p>This is the home section content.</p>
    </section>

    <section id="about">
        <h2>About Section</h2>
        <p>This is the about section content.</p>
    </section>

    <section id="news">
        <h2>News Section</h2>
        <p>This is the news section content.</p>
    </section>

    <section id="gallery">
        <h2>Gallery Section</h2>
        <p>This is the gallery section content.</p>
    </section>

    <section id="contact">
        <h2>Contact Section</h2>
        <p>This is the contact section content.</p>
    </section> -->

    <div id="search-results"></div>

    <script>
        function search() {
            var searchInput = document
                .getElementById("searchInput")
                .value.toLowerCase();
            var resultsContainer = document.getElementById("search-results");

            resultsContainer.innerHTML = "";

            var fakeResults = [
                "Result 1: Lorem ipsum dolor sit amet",
                "Result 2: Consectetur adipiscing elit",
                "Result 3: Sed do eiusmod tempor incididunt",
                "Result 4: Ut labore et dolore magna aliqua",
                "Result 5: Ut enim ad minim veniam",
            ];

            fakeResults.forEach(function (result) {
                if (result.toLowerCase().includes(searchInput)) {
                    var listItem = document.createElement("li");
                    listItem.textContent = result;
                    resultsContainer.appendChild(listItem);
                }
            });
        }
    </script>
</body>

</html>
