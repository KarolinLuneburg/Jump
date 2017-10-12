<?php
include("header.php");

?>
<div class='wrapper'>
    <div class="logoLogin"></div>
    <div class="container">
        <form action='' method="POST" class='loginForm'>

                <input type='email' name='email' value='Email' class='inputField'>
                <br>
                <input type='password' name='password' value='Password' class='inputField'>
                <br>
                <input type='submit' value='Log in' class='submitBtn'>

        </form>
    </div>
</div>

<?php 
include("footer.php");
?>