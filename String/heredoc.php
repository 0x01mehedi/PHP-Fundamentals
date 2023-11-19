<?php

$hints="Enter your name";

echo <<<HTML
<form action="#" method="post">
        <div>
            Name<br>
            <input type="text" name="name" placeholder="$hints" >
        </div>
        <div>
            Mobile<br>
            <input type="text" name="mobile" >
        </div>
        <div>
            Email<br>
            <input type="text" name="email" >
        </div>
        <div>          
            <input type="submit" name="submit" >
        </div>

    </form>
HTML;




?>