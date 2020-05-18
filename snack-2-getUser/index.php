<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Snack 2 | Get User </title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php
    $data = $_GET;
    $post = $_POST;

    if ( (strlen($data[name]) >= 3) == false ) {
        echo "<h1 class='red'> ACCESSO NEGATO </h1>";
    }
    elseif ( strpos($data['email'], '@') === false || strpos($data['email'], '.') === false) {
        echo "<h1 class='red'> ACCESSO NEGATO </h1>";
    }
    elseif ( ! is_numeric($data['age']) ) {
        echo "<h1 class='red'> ACCESSO NEGATO </h1>";
    } else {
        echo "<h1>ACCESSO RIUSCITO</h1>";
    }
    


    ?>

    <h4> Name: <?php echo $data[name]; ?> </h4>
    <h4> Email: <?php echo $data[email]; ?> </h4>
    <h4> Age: <?php echo $data[age]; ?> </h4>
    
    

</body>
</html>