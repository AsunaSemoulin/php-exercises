<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	// cleanup_room();
	// echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = [
    "health hazard",
    "filthy",
    "dirty",
    "clean",
    "immaculate"
];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( $room_filthiness == "health hazard" ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == "filthy" ){
	echo "Yuk, Room is filthy : let's clean it up !";
} else if( $room_filthiness == "dirty" ) {
    echo "Yuk, Room is dirty !";
} else if( $room_filthiness == "clean" ) {
    echo "Yuk, Room is clean !";
} else {
	echo "<br>Room is immaculate.";
}

// 2. "Different greetings according to time" Exercise

/*
    If the time is between 05h00 and 09h00, display "Good morning !".
    If the time is between 09h01 and 12h00, display "Good day !".
    If the time is between 12h01 and 16h00, display "Good afternoon !".
    If the time is between 16h01 and 21h00, display "Good evening !".
    If the time is between 21h01 and 04h59, display "Good night !".
*/

$hour = date("H");
$minute = date("i");

// Test the value of $now and display the right message according to the specifications.
if( $hour > 5 AND $hour < 9 ){
    echo "Good morning!";
}
else if( $hour > 9 AND $minute > 1 AND $hour < 12) {
    echo "Good day!";
}
else if( $hour > 12 AND $minute > 1 AND $hour < 16) {
    echo "Good afternoon!";
}
else if( $hour > 16 AND $minute > 1 AND $hour < 21) {
    echo "Good evening!";
}
else {
    echo "Good night!";
}

// 3. "Different greetings according to age" Exercise

if (isset($_GET['age'])) {
    $age = $_GET["age"];
	if ( $age < 12 ) {
        echo "Hello kiddo!";
    }
    else if ( $age >= 12 AND $age < 18) {
        echo "Hello Teenager !";
    }
    else if ( $age >= 18 AND $age < 115) {
        echo "Hello Adult";
    }
    else if ( $age > 115 ) {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
// Form (incomplete)
?>
<form method="get" action="">
	<label for="age">Please type your age:</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php
// 4. Display a different greeting according to the user's age and gender.
$pronoun = "Mister";

if (isset($_GET["gender"])) {
    $gender = $_GET["gender"];
    if ( $gender == "man" ) {
        $pronoun = "Mister";
    } else {
        $pronoun = "Miss";
    }
}

if (isset($_GET['age2'])) {
    $age = $_GET["age2"];
	if ( $age < 12 ) {
        echo "Hello $pronoun kiddo!";
    }
    else if ( $age >= 12 AND $age < 18) {
        echo "Hello $pronoun Teenager !";
    }
    else if ( $age >= 18 AND $age < 115) {
        echo "Hello $pronoun Adult";
    }
    else if ( $age > 115 ) {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
// Form (incomplete)
?>
<form method="get" action="">
	<label for="age2">Please type your age:</label>
	<input type="" name="age2">
    <label>
        <span>Man:</span>
        <input type="radio" name="gender" value="man">
    </label>
    <label>
        <span>Woman:</span>
        <input type="radio" name="gender" value="woman">
    </label>
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php
// 5. Display a different greeting according to the user's age, gender and mothertongue.
$pronoun2 = "Mister";
$is_english = false;

if (isset($_GET["mothertongue"])) {
    $mothertongue = $_GET["mothertongue"];
    if ( $mothertongue == "yes" ) {
        $is_english = true;
    } else {
        $is_english = false;
    }
}

$gender2 = "";

if (isset($_GET["gender2"])) {
    $gender2 = $_GET["gender2"];
    if ( $gender2 == "man" ) {
        $pronoun2 = "Mister";
    } else {
        $pronoun2 = "Miss";
    }
}

if (isset($_GET['age3'])) {
    $age = $_GET["age3"];
	if ( $age < 12 ) {
        if ( $is_english ) {
            if ( $gender2 == "man") {
                echo "Hello boy!";
            } else {
                echo "Hello Girl!";
            }
        } else {
            if ( $gender2 == "man") {
                echo "Aloha boy!";
            } else {
                echo "Aloha girl!";
            }
        }
    }
    else if ( $age >= 12 AND $age < 18) {
        if ( $is_english ) {
            if ( $gender2 == "man") {
                echo "Hello teen boy!";
            } else {
                echo "Hello teen Girl!";
            }
        } else {
            if ( $gender2 == "man") {
                echo "Aloha teen boy!";
            } else {
                echo "Aloha teen girl!";
            }
        }
    }
    else if ( $age >= 18 AND $age < 115) {
        if ( $is_english ) {
            if ( $gender2 == "man") {
                echo "Hello adult boy!";
            } else {
                echo "Hello adult Girl!";
            }
        } else {
            if ( $gender2 == "man") {
                echo "Aloha adult boy!";
            } else {
                echo "Aloha adult girl!";
            }
        }
    }
    else if ( $age > 115 ) {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
// Form (incomplete)
?>
<form method="get" action="">
	<label for="age3">Please type your age:</label>
	<input type="" name="age3">
    <label>
        <span>Man:</span>
        <input type="radio" name="gender2" value="man">
    </label>
    <label>
        <span>Woman:</span>
        <input type="radio" name="gender2" value="woman">
    </label>
    <label>
        <span>Do you speak English ?</span>
        <label>
            <span>Yes:</span>
            <input type="radio" name="mothertongue" value="yes">
        </label>
        <label>
            <span>No:</span>
            <input type="radio" name="mothertongue" value="no">
        </label>
    </label>
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
// 6. The Girl Soccer Team
$age4 = "";
$gender3 = "";

if (isset($_GET["age4"])) {
    $age4 = $_GET["age4"];
}

if (isset($_GET["gender3"])) {
    $gender3 = $_GET["gender3"];
}

if ( $gender3 == "woman" AND $age4 >= 21 AND $age4 <= 40) {
    echo "Welcome to the team !";
}
else {
    echo "Sorry you don't fit the criteria";
}
?>
<form method="get" action="">
    <label>
        <span>Name:</span>
        <input type="text" name="name">
    </label>
    <label>
        <span>Age:</span>
        <input type="" name="age4">
    </label>
    <label>
        <span>Man:</span>
        <input type="radio" name="gender3" value="man">
    </label>
    <label>
        <span>Woman:</span>
        <input type="radio" name="gender3" value="woman">
    </label>
    <input type="submit" name="submit" value="Test">
</form>

<?php
// 7. Achieve the same, without the ELSE.
$age5 = 18;
$gender4 = "woman";

if (isset($_GET["age5"])) {
    $age5 = $_GET["age5"];
}

if (isset($_GET["gender4"])) {
    $gender4 = $_GET["gender4"];
}

if ( $gender4 == "woman" AND $age5 >= 21 AND $age5 <= 40) {
    echo "Welcome to the team !";
}
if ( $gender4 == "man" OR $age5 < 21 AND $age5 > 40) {
    echo "Sorry you don't fit the criteria";
}
?>
<form method="get" action="">
    <label>
        <span>Name:</span>
        <input type="text" name="name">
    </label>
    <label>
        <span>Age:</span>
        <input type="" name="age5">
    </label>
    <label>
        <span>Man:</span>
        <input type="radio" name="gender4" value="man">
    </label>
    <label>
        <span>Woman:</span>
        <input type="radio" name="gender4" value="woman">
    </label>
    <input type="submit" name="submit" value="Test">
</form>

<?php
// 8. "School sucks!" Exercise
$note = 10;

if (isset($_GET["note"])) {
    $note = $_GET["note"];
}

if ( $note < 4 ) {
    echo "This work is really bad. What a dumb kid!";
}
else if ( $note >= 5 AND $note <= 9) {
    echo "This is not sufficient. More studying is required.";
}
else if ( $note == 10 ) {
    echo "barely enough!";
}
else if ( $note > 10 AND $note <= 14) {
    echo "Not bad!";
}
else if ( $note > 14 AND $note <= 18) {
    echo "Bravo, bravissimo!";
}
else if ( $note > 18 ) {
    echo "Too good to be true : confront the cheater!";
}
?>
<form method="get" action="">
    <label>
        <span>Note:</span>
        <input type="" name="note">
    </label>
    <input type="submit" name="submit" value="Submit">
</form>