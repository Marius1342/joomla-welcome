<?php

use Joomla\CMS\Factory;

$user = JFactory::getUser();
echo "<p id='welcome-js'>" . $user->username . "</p>";

echo '    <script>
let welcome_js = document.getElementById("welcome-js");
let time = new Date();
if (time.getHours() > 6 && time.getHours() < 11) {
    //Morning
    welcome_js.innerText = "Good morning, " + welcome_js.innerText;

} else if (time.getHours() > 10 && time.getHours() < 19) {
    //Afternoon
    welcome_js.innerText = "Good afternoon, " + welcome_js.innerText;
}
else {
    //Night
    welcome_js.innerText = "Good evening, " + welcome_js.innerText;
}    </script>
';