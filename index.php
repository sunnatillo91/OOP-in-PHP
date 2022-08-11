<?php
    include 'person.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $person1 = new Person("Sunnatillo", "Black", 31);
    // echo $person1->name;
        echo "<br>";
      //  echo $person1->eyecolour;
        echo "<br>";

        echo $person1->getName();
      

     //   $person1->setName("Jaxon");
      //  echo $person1->name;

        
    ?>
</body>
</html>