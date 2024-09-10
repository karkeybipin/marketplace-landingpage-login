<?php
// include '../html/index.html';


// calculating simle interest (function)
// function calculateSimpleInterest()
// {
//     $p = 200000;
//     $t = 2.5;
//     $r = 11;

//     $si = ($p * $t * $r) / 100;
//     echo "La mya si ta yo po rahexa " . $si;
// }
// calculateSimpleInterest();



// function calculateSI($p, $t, $r)
// {
//     $simpleInterest = ($p * $t * $r) / 100;
//     echo $simpleInterest;
// }
// calculateSI(1000, 2.5, 11);




// class users
// {
//     function calculateSimpleInterest($p, $t, $r)
//     {
//         $simpleInterest = ($p * $t * $r) / 100;
//         echo $simpleInterest;
//     }
// }
//     $obj = new users();
//     $obj -> calculateSimpleInterest(1200,3.5,55);



// // Create a blank image with a white background
// $image = imagecreatetruecolor(200, 200);
// $white = imagecolorallocate($image, 255, 255, 255);
// imagefilledrectangle($image, 0, 0, 200, 200, $white);

// // Output the image as PNG
// header('Content-Type: image/png');
// imagepng($image);
// imagedestroy($image);



// $data = array("name" => "John the don", "age" => 30, "city" => "New York");
// $name = $data['name'];
// $age = $data['age'];
// $city = $data['city'];

// print_r( $name);
// print_r( $age);
// print_r( $city);



$salary = array("John" => 10000, "Ram" => 15000, "Bipin" => 900000, "santoshis" => 10000000);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" style="color: black; ">
        <tr>
            <th>Name</th>
            <th>salary</th>
        </tr>
        <?php
        foreach ($salary as $key => $value) { ?>
            <tr>
                <td> <?php echo $key; ?></td>
                <td> <?php echo $value; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>