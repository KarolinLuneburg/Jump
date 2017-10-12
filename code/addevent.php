<?php 
include("header.php");
include("menu.php");

?>
   <div class="bg">lijfsonlr</div>
    <div class="userInfo">
        <div class="adminImg"></div>
        <div class="userWelcome">Hi HINT! These are your events</div>
    </div>
    <div class="allEvents">
 
    <form class="addeventForm" action="" method="POST">
        <input type='text' name='title' value='Event Title' class=''>
        <input type='date' name='date' value='Event Date' class=''>
        <input type='time' name='time' value='Event Time' class=''>
        <input type='text' name='location' value='Event Location' class=''>
        <input type='textarea' rows="5" name='title' value='Event Description' class=''>
        <div class="btnContainer">
            <input class="submitEvent" type="submit" value="Add Event"/>
             <a href="#" class="backBtn">Go Back</a>
         </div> 
    </form>
      
    
    </div>
       



<?php 
include("footer.php");

?>