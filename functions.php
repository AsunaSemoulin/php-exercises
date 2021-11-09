<?php
    // Capitalization function
    function capitalize($word) {
        return ucfirst($word);
    }

    echo capitalize("emile");
    echo "<br>";
    echo date("Y");
    echo "<br>";
    echo date("d/m/Y - H:i:s");

    // Sum function
    function sum($a, $b) {
        if (gettype($a) == "integer" AND gettype($b) == "integer") {
            return $a + $b;
        } else {
            echo "Error: argument is not a number.";
        }
    }

    echo "<br>";
    echo sum(1, 2);

    // Acronym function
    function acronymize($string) {
        $words = explode(" ", $string);
        $acronym = [];

        foreach ($words as $word) {
            array_push($acronym, ucfirst($word[0]));
        }

        $acronym = implode($acronym);
        return $acronym;
    }

    echo "<br>";
    echo acronymize("test test lol");

    // ae to æ
    function to_ae($word) {
        return preg_replace("[ae]", "æ", $word);
    }

    echo "<br>";
    echo to_ae("Laeafe");

    // æ to ae
    function from_ae($word) {
        return preg_replace("[æ]", "ae", $word);
    }

    echo "<br>";
    echo from_ae("Læf");

    // Return feedback
    function feedback($message, $type = "info") {
        if ($type == "notice" OR $type == "warning" OR $type == "error" OR $type == "info") {
            return "<div class='$type'>$message</div>";
        } else {
            return "Please enter a valid error type.";
        }
    }

    echo "<br>";
    echo feedback("My error message");

    // Random word (1)
    function random_word_one($len = 5) {
        $word = array_merge(range('a', 'z'), range('A', 'Z'));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }

    function random_word_two($len = 7) {
        $len = rand(7, 15);
        $word = array_merge(range('a', 'z'), range('A', 'Z'));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }
?>
<h1>Generate a new word</h1>
<form method="get" action="">
    <div><?php echo random_word_one(); ?></div>
    <div><?php echo random_word_two(); ?></div>
    <input type="submit" name="submit" value="Generate">
</form>
<?php
    // Decapitalize
    function decapitalize($word) {
        $word = strtolower($word);
        $word = ucfirst($word);
        return $word;
    }

    echo decapitalize("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

    // Math function
    function calculate_volume($ray, $height) {
        $volume = $ray * $ray * 3.14 * $height * (1/3);
        echo "The volume of a cone which ray is $ray and height is $height = $volume cm<sup>3</sup><br />";
    }
    calculate_volume(2, 1);
?>

