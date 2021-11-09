<form method="get" action="">
    <label>
        <span>Are you a human, a cat or a unicorn ?</span>
        <label>
            <span>Human:</span>
            <input type="radio" name="specie" value="human">
        </label>
        <label>
            <span>Cat:</span>
            <input type="radio" name="specie" value="cat">
        </label>
        <label>
            <span>Unicorn:</span>
            <input type="radio" name="specie" value="unicorn">
        </label>
    </label>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$specie = "cat";

if (isset($_GET["specie"])) {
    $specie = $_GET["specie"];
}

$human = ($specie == "human") ? true : false;
$cat = ($specie == "cat") ? true : false;
$unicorn = ($specie == "unicorn") ? true : false;

if ($cat) {
    echo '<iframe src="https://giphy.com/embed/3o6Zt481isNVuQI1l6" width="480" height="300" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cat-smoke-smoking-3o6Zt481isNVuQI1l6">via GIPHY</a></p>';
}

if ($human) {
    echo '<iframe src="https://giphy.com/embed/vvBsAcNyjKk6iOkVx3" width="480" height="400" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/theoffice-season-9-the-office-tv-vvBsAcNyjKk6iOkVx3">via GIPHY</a></p>';
}

if ($unicorn) {
    echo '<iframe src="https://giphy.com/embed/j0kQJxo5mzGYb4EvWK" width="480" height="377" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/moodman-j0kQJxo5mzGYb4EvWK">via GIPHY</a></p>';
}
?>