<?php
    $count = 1;

    while ($count <= 120) {
        echo $count;
        $count++;
    }

    echo "<br>";

    for ($i = 1; $i <= 120; $i++) {
        echo $i;
    }

    echo "<br>";

    $startup = [
        "Asuna",
        "Ludmila",
        "Arnaud",
        "Florian"
    ];

    foreach ($startup as $people) {
        echo $people;
    }

    echo "<br>";

    $countries = [
        "FRA" => "France",
        "USA" => "U.S.",
        "CHN" => "China",
        "ESP" => "Spain",
        "ITA" => "Italy",
        "TUR" => "Turkey",
        "GBR" => "UK",
        "DEU" => "Germany",
        "RUS" => "Russian Federation",
        "MYS" => "Malaysia"
    ];
?>

<label for="startup">Choose a car:</label>

<select name="startup" id="startup">
    <?php
        foreach ($countries as $key => $value) {
            echo "<option value='$key'>$value</option>";
        }
    ?>
</select> 