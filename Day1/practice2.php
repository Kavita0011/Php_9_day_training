<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice2</title>
</head>

<body>
    <h1> Write PHP scripts to perform operations on arrays (e.g., sorting, searching)</h1>
    <?php
    // array
    $fruit = "apple";
    $fruits = ["grapes", "papaya", "mango", "apple", "banana", "orange"];
    // searching
    echo "<h2>searching an element</h2>";
    print_r($fruits);
    echo "<br/> fruit is : $fruit <br/>";
    for ($i = 0; $i < count($fruits); $i++) {
        // echo"$i";
        if ($fruits[$i] === $fruit) {
            echo "$fruit is at position $i <br/>";
        }

    }
    // if element doesn't exist then showing message
    if (!(in_array($fruit, $fruits))) {

        echo "$fruit is not in the array <br/>";

    }
    echo "<h2>sorting an array</h2>";
    // sorting an array
    // print_r($fruits);
$fruit1=[4,24,25,1,57,96,43];
    for($i=0;$i<count($fruits);$i++){
        for($j=$i;$j<count($fruits);$j++)
        {
            if($fruits[$i]>=$fruits[$j]){
                $temp=$fruits[$j];
                $fruits[$j]=$fruits[$i];
                $fruits[$i]=$temp;
            }
        }
    }    
    echo "<br/>";
    print_r($fruits);
    ?>
</body>

</html>