<?php



function displayAccessLevelInformation($accessLevel) {
    if ($_COOKIE["access_level"] == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($_COOKIE["access_level"] == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}
