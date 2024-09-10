<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: wheat;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
        }

        .container {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 10 200 10px #006799;
            border: 5px solid #006799;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        select,
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 5px solid #006799;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .btn {
            position: relative;
            top: 10px;
            right: 10px;
            background-color: #008CBA;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #006799;
        }

        /* .intro {
            text-align: center;
            margin-top: 30px;
            border: 5px solid #006799;
        } */

        /* .intro button {
            background-color: grey;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .intro button:hover {
            background-color: #006799;
        } */
    </style>
</head>

<body>

    <div class="container">

        <form action="process_order.php" method="post">
            <button onclick="goBack()" class="btn">Go back↩</button>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
            <h2>Lets order:</h2>

            <label for="item">Select Item:</label>
            <select name="item" id="item">
                <option value="Potato">Potato</option>
                <option value="Tomato">Tomato</option>
                <option value="Onion">Onion</option>
                <option value="Cabbage">Cabbage</option>
                <option value="Cauliflower">Cauliflower</option>
                <option value="Turnip">Turnip</option>
                <option value="Chilli">Chilli</option>
                <option value="Ginger">ginger</option>
                <option value="Pumpkin">Pumpkin</option>
                <option value="Milk">Milk</option>
                <option value="Curd">Curd</option>
                <option value="Paneer">Paneer</option>
            </select>

            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" min="1" required>

            <button type="submit">Place Order</button>
        </form>
    </div>
    <!-- <div class="intro">
        
    </div> -->
</body>

</html>