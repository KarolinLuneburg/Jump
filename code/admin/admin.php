<?php 
include("admin_header.php");
include("admin_menu.php");

?>
    <div class="userInfo">
        <div class="adminImg"></div>
        <div class="userWelcome">Welcome to the admin panel.</div>
    </div>
    <div class="allEvents">
      <div class="addEvent">
          <p>Add a new event</p>
          <a href="addevent.php" class="plusBtn">
             <span class="plus">+</span>
         </a>
      </div>
      <div class="addEvent">
          <p>Add a new user</p>
          <a href="a#" class="plusBtn">
             <span class="plus">+</span>
         </a>
      </div>
      <div class="addEvent">
          <p>Delete a user</p>
          <a href="addevent.php" class="plusBtn">
             <span class="plus">-</span>
         </a>
      </div>
       <!---------------------------------EVENT ONE-->
       <div class="eventContainerFirst">
          <!-----------event img & attend event btn-->
          <div class="imgContainer"></div>
          <form method="POST" action=''>
                  <span class="edit">
                     <i class="fa fa-pencil" aria-hidden="true"></i>
                 </span>
                  <input type="submit" value="" class="editBtn">
              </form>
          <!---------event information & expand btn-->
          <div class="infoContainer">
              <p class="eventTitle">
                 Event Title, Date and Time, Location  
              </p> 
              <a href="#" class="expanderBtn">
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
              <p class="eventDescription">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a quam tristique, faucibus libero congue, viverra tellus. Sed lectus nibh, vehicula sed metus consectetur, interdum ultricies odio. Phasellus eu nibh ut quam aliquet maximus sed sit amet enim. Ut eu lacinia neque. Fusce consequat lacus in tortor porttitor semper.   
              </p>  
            </div>
       </div>
       
       <!---------------------------------EVENT TWO-->
       <div class="eventContainer">
          <!-----------event img & attend event btn-->
          <div class="imgContainer"></div>
          <form method="POST" action=''>
                   <span class="edit">
                     <i class="fa fa-pencil" aria-hidden="true"></i>
                 </span>
                  <input type="submit" value="" class="editBtn">
              </form>
          <!---------event information & expand btn-->
          <div class="infoContainer">
              <p class="eventTitle">
                 Event Title, Date and Time, Location  
              </p> 
              <a href="#" class="expanderBtn">
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
              <p class="eventDescription">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a quam tristique, faucibus libero congue, viverra tellus. Sed lectus nibh, vehicula sed metus consectetur, interdum ultricies odio. Phasellus eu nibh ut quam aliquet maximus sed sit amet enim. Ut eu lacinia neque. Fusce consequat lacus in tortor porttitor semper.   
              </p>  
            </div>
       </div>
       
       <!-------------------------------EVENT THREE-->
       <div class="eventContainer">
          <!-----------event img & attend event btn-->
          <div class="imgContainer"></div>
          <form method="POST" action=''>
                  <span class="edit">
                     <i class="fa fa-pencil" aria-hidden="true"></i>
                 </span>
                  <input type="submit" value="" class="editBtn">
              </form>
          <!---------event information & expand btn-->
          <div class="infoContainer">
              <p class="eventTitle">
                 Event Title, Date and Time, Location  
              </p> 
              <a href="#" class="expanderBtn">
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
              <p class="eventDescription">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a quam tristique, faucibus libero congue, viverra tellus. Sed lectus nibh, vehicula sed metus consectetur, interdum ultricies odio. Phasellus eu nibh ut quam aliquet maximus sed sit amet enim. Ut eu lacinia neque. Fusce consequat lacus in tortor porttitor semper.   
              </p>  
            </div>
       </div>
       
       <!--------------------------------EVENT FOUR-->
       <div class="eventContainer">
          <!-----------event img & attend event btn-->
          <div class="imgContainer"></div>
          <form method="POST" action=''>
                   <span class="edit">
                     <i class="fa fa-pencil" aria-hidden="true"></i>
                 </span>
                  <input type="submit" value="" class="editBtn">
              </form>
          <!---------event information & expand btn-->
          <div class="infoContainer">
              <p class="eventTitle">
                 Event Title, Date and Time, Location  
              </p> 
              <a href="#" class="expanderBtn">
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
              <p class="eventDescription">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a quam tristique, faucibus libero congue, viverra tellus. Sed lectus nibh, vehicula sed metus consectetur, interdum ultricies odio. Phasellus eu nibh ut quam aliquet maximus sed sit amet enim. Ut eu lacinia neque. Fusce consequat lacus in tortor porttitor semper.   
              </p>  
            </div>
       </div>
       
       <!--------------------------------EVENT FIVE-->
       <div class="eventContainer">
          <!-----------event img & attend event btn-->
          <div class="imgContainer"></div>
          <form method="POST" action=''>
                 <span class="edit">
                     <i class="fa fa-pencil" aria-hidden="true"></i>
                 </span>
                  <input type="submit" value="" class="editBtn">
              </form>
          <!---------event information & expand btn-->
          <div class="infoContainer">
              <p class="eventTitle">
                 Event Title, Date and Time, Location  
              </p> 
              <a href="#" class="expanderBtn">
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
              <p class="eventDescription">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a quam tristique, faucibus libero congue, viverra tellus. Sed lectus nibh, vehicula sed metus consectetur, interdum ultricies odio. Phasellus eu nibh ut quam aliquet maximus sed sit amet enim. Ut eu lacinia neque. Fusce consequat lacus in tortor porttitor semper.   
              </p>  
            </div>
       </div>
       
       
    </div>





<?php 
include("../footer.php");

?>