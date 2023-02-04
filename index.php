<?php 
    $country = filter_input(INPUT_GET, "country", FILTER_SANITIZE_SPECIAL_CHARS);

    include_once "config/Database.php";
    if ($country) {
        $query = 'SELECT * FROM country WHERE Name LIKE :country ORDER BY Population DESC';
        //var_dump($country);
        $statement = $db->prepare($query);
        $statement->bindValue(':country', "%" . $country . "%");
        $statement->execute();
        //$statement->debugDumpParams();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        var_dump($results);
    }
    
    // Logic to get and display appropriate info based on dropdown menu choice
    $category = filter_input(INPUT_GET, "category", FILTER_SANITIZE_SPECIAL_CHARS);
    if ($category) {
        $query = 'SELECT ? FROM country WHERE Name = ?';
        var_dump($category);
        var_dump($country);
        $statement = $db->prepare($query);
        $statement->execute([$category, $country]);
        //var_dump($statement);
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        //var_dump($results);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Tutorial</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Search Cities</h1>
    </header>
    <section>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
            <h2 id="enter-a-city">Enter a Country:</h2>
            <input type="text" id="country" name="country" aria-labelledby="enter-a-country" autofocus required>
            <button>Submit</button>
        </form>
    </section>
    <section>
        <?php
            if (!empty($results)) {
                
                include("./view/select.php");
                
            } else {
                echo "<p>No Results.</p>";
            }
        ?>
    </section>
</body>

</html>