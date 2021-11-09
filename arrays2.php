<?php
    $me = array(
        "firstname" => "Asuna",
        "soccer" => false,
        "age" => 18,
        "season" => "winter"
    );

    $me["hobbies"] = [
        "Drawing",
        "Programming"
    ];

    $mother = [];

    $mother["hobbies"] = [
        "Talking",
        "Teaching"
    ];

    $me["mother"] = $mother;

    echo "<pre>";
    print_r($me);
    echo "</pre>";

    echo count($me["hobbies"]);
    echo count($me["mother"]["hobbies"]);
    echo count($me["hobbies"]) + count($me["mother"]["hobbies"]);

    $me["hobbies"][] = "Taxidermy";
    $me["lastname"] = "Durand";

    $soulmate = [
        "hobbies" => ["Drawing"],
        "lastname" => "Bertrand"
    ];
    
    $intersect = array_intersect($me, $soulmate);
    $fusion = array_merge($me, $soulmate);

    echo '<pre>';
    print_r($intersect);
    print_r($fusion);
    echo '</pre>';

    $web_development = [
        "frontend" => [],
        "backend" => []
    ];

    array_push($web_development["frontend"], "xhtml", "CSS", "JavaScript");
    array_push($web_development["backend"], "Ruby on Rails", "Flash");
    echo "<pre>";
    print_r($web_development);
    echo "</pre>";

    $web_development["frontend"][0] = "html";
    echo "<pre>";
    print_r($web_development);
    echo "</pre>";

    array_splice($web_development["backend"], 1);
    echo "<pre>";
    print_r($web_development);
    echo "</pre>";
?>