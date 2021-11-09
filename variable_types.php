<html>
    <head>
        <title>Variable Types</title>
    </head>
    <body>
        <?php
        $firstname = "Asuna";
        $age = 18;
        $eyecolor = "Blue/Green";
        $family = array(
            0 => "Valérie",
            1 => "Sarah",
            2 => "Laetitia",
            3 => "Benoit",
            4 => "Asuna"
        );
        $is_hungry = true;
        ?>
        <p>Hi! My name is <?php echo $firstname; ?></p>
        <p>I am <?php echo $age; ?> years old.</p>
        <p>My eyes are <?php echo $eyecolor; ?></p>
        <p>The first person in my family is <?php echo $family[0] ?></p>
    </body>
</html>