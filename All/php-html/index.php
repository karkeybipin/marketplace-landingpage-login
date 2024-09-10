<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Search</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

    <h1>Search</h1>
    
    <input type="text" id="searchInput" placeholder="Type to search">
    
    <ul id="searchResults"></ul>

    <script>
        $(document).ready(function(){
            $('#searchInput').on('input', function(){
                var query = $(this).val();
                if (query.length >= 3) {
                    $.ajax({
                        url: 'search.php',
                        type: 'POST',
                        data: {query: query},
                        success: function(data){
                            $('#searchResults').html(data);
                        }
                    });
                } else {
                    $('#searchResults').empty();
                }
            });
        });
    </script>

</body>
</html>
