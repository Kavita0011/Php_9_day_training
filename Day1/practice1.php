<!-- Day1 : php training -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>
</head>

<body>
    <!-- writing a php script to use loops conditions and arrays -->
    <h1> Write basic PHP scripts using loops, conditionals, and arrays.</h1>
    <?php
    // creating variables
    $n = 5;
    $i = 0;
    // writing script to use loops
    echo "<h2>Loops</h2><h3>while loop : </h3>";
    // while loop
    while ($i < $n) {
        echo "<br> $i hello purpose buddy";
        $i++;
    }
    // do while loop
    echo "<h3>do while loop : </h3>";
    do {
        echo "<br> $i hello purpose buddy";
        $i++;
    } while ($i == $n);
    // do while loop
    echo "<h3>for loop : </h3>";
    for ($i = 1; $i < $n; $i++) {
        echo "<br> $i hello purpose buddy";
    }
    ?>

    <?php
    //working with Arrays
    // indexed array
    echo "<h3>Indexed Array : </h3>";
    $fruits = ["apple", "banana", "grapes", "mango", "orange", "papaya"];
    print_r($fruits);
    // Associative array
    echo "<h3>Associative Array : </h3>";
    $fruits1 = [1 => "apple", 2 => "banana", 3 => "grapes", 4 => "mango", 5 => "orange", 6 => "papaya"];
    foreach ($fruits1 as $key => $value) {
        echo "<br/> $value is at postion $key <br/> ";
    }
    // multidimensionel array
    echo "<h3>multidimensional Array : </h3>";
    # dummy data is
    $data = array(
        array(
            'name' => 'Mark',
            'job' => 'engineer',
            'age' => 25,
            'hobbies' => array('drawing', 'swimming', 'reading'),
            'skills' => array('coding', 'fasting learning', 'teaching')
        ),
        array(
            'name' => 'Joe',
            'job' => 'designer',
            'age' => 19,
            'skills' => array('fast learning')
        ),
        array(
            'name' => 'sara',
            'age' => 25,
            'city' => 'NY'
        ),

        array(
            'name' => 'sam',
            'job' => 'accountant',
            'age' => 25,
            'city' => 'london'
        ),
        array(
            'name' => 'Esraa',
            'job' => 'Designer',
            'age' => 23,
            'city' => 'cairo',
            'hobbies' => array('writing', 'reading'),
            'skills' => array('coding', 'teaching')
        ),
    );
    #function to print array
    
    function printarray($data, $i)
    {
        //  loops to print array
        foreach ($data[$i] as $innerkey => $innervalue) {
            //  to check the value is itself an array or not
            if (is_array($innervalue)) {
                echo "$innerkey  :<br>";
                // if it is an array then again it will print the array the value as array
                for ($i = 0; $i < count($innervalue); $i++) {
                    echo "- $innervalue[$i] <br>";
                }
            } else {
                echo "$innerkey  : $innervalue<br>";
            }
        }
    }
    // loop to call function
    for ($i = 0; $i < count($data); $i++) {
        printarray($data, $i);
    }

    ?>
</body>

</html>