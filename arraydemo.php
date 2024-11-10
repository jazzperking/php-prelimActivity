<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Demo</title>
</head>
<body>

    <?php
    echo 'Three different ways to declare arrays: <hr>';

    $color = array("Red", "Green", "Blue");
    echo $color[2] . '<hr>';

    $pet = ["Dog", "Cat", "Pig", "Hamster"];
    echo $pet[3] . '<hr>';

    $country = [];
    $country[0] = "Philippines";
    $country[1] = "Japan";
    $country[2] = "Korea";
    $country[3] = "Russia";
    $country[4] = "UAE";
    echo $country[1] . '<hr>';

    echo 'Associative Arrays:<hr>';

    $ages = array("Peter" => 22, "Clark" => 32, "John" => 28);
    echo $ages['Clark'] . '<hr>';

    $sizes = ['sm' => 10, 'md' => 14, 'lg' => 20];
    echo $sizes['sm'] . '<hr>';

    $student = [];
    $student['name'] = "Jazzper";
    $student['grade'] = 12;
    $student['age'] = 21;
    echo $student['name'] . ' is ' . $student['age'] . ' years old.<hr>';

    echo 'Multidimensional Arrays:<hr>';

    $contacts = [
        ['name' => 'Peter Parker', 'email' => 'peterparker@email.com', 'sex' => 'Male'],
        ['name' => 'Clark Kent', 'email' => 'clarkkent@email.com', 'sex' => 'Male'],
        ['name' => 'Harry Potter', 'email' => 'harrypotter@email.com', 'sex' => 'Male'],
        ['name' => 'Katniss Everdeen', 'email' => 'katnisseverdeen@email.com', 'sex' => 'Female']
    ];

    echo $contacts[2]['name'] . '<hr>';

    echo 'Associative and Multidimensional Arrays:<br>';

    $sizes1 = [
        'sm' => ['width' => 10, 'height' => 20],
        'md' => ['width' => 14, 'height' => 28],
        'lg' => ['width' => 20, 'height' => 40],
    ];
    echo $sizes1['md']['height'] . '<hr>';

    echo 'Debugging with print_r and var_dump:<br><br>';

    $ages = ["Peter" => 22, "Clark" => 32, "John" => 28];
    print_r($ages);
    echo '<br><br>';
    var_dump($ages);

    $student['name'] = "JazzperGomez";
    echo '<br><br>';
    print_r($student);
    echo '<br><br>';
    var_dump($student);

    echo '<hr>';

    echo 'Displaying contacts array:<hr>';
    print_r($contacts);
    echo '<hr>';

    echo 'Using foreach loop to display indexed array:<hr>';
    $color = ["Red", "Green", "Blue", "Yellow"];
    foreach ($color as $value) {
        echo $value . '<br>';
    }

    echo '<hr>Associative arrays using foreach:<hr>';
    foreach ($ages as $key => $value) {
        echo $key . ' is ' . $value . ' years old.<br>';
    }

    echo '<hr>';

    echo 'Displaying multidimensional array using foreach:<hr>';
    foreach ($contacts as $contact) {
        foreach ($contact as $key => $value) {
            echo '<b>' . strtoupper($key) . '</b>: ' . $value . '<br>';
        }
        echo '<hr>';
    }

    ?>
</body>
</html>
