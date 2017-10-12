//----------------------------------------------MENU
var blackTop =     document.getElementById('logo');
var opened = false;




$(document).ready(function(){
	$('#hamburger').click(function(){

        if(opened){
            $('#dropDown').slideUp(1000);
            $('#hamburger').css('margin-top', '-37px');
            $('#logo').show();
            opened = false;
        } else {
            $('#dropDown').slideDown(1000);
            $('#logo').hide();
            
            $('#hamburger').css({'margin-top': '0', 'z-index': '10'});
            opened = true;
            
        }

		$('#hamburger').children().toggleClass('open');
        
	});
});


//------------------------------------------EXPANDER
var expandContent= document.getElementsByClassName('eventDescription');
var expandBtn= document.getElementsByClassName('expanderBtn');



//function expand(event){
//    if((expandContent.style.display = 'block') == false){
//       expandContent.style.display = 'block'; 
//    } else{
//        expandContent.style.display = 'none';
//    }
//}


for (var i = 0; i<expandBtn.length; i++){
    expandBtn[i].addEventListener("click" ,function (event){
        event.currentTarget.nextElementSibling.classList.toggle('show')
//        if((event.currentTarget.nextElementSibling.style.display = 'block') == false) {
//           event.currentTarget.nextElementSibling.style.display = 'block'; 
//        } else{
//            event.currentTarget.nextElementSibling.style.display = 'none';
//        }
    });

}




