<?php
if ($_POST["user-name"] === "James") {
    echo "Bond, " . $_POST["user-name"] . " Bond" . "<br>";
}
else {
    echo "Bonjour " . $_POST["user-name"] . "<br>";
}