

function CardToggle(){
    let isCardOpen = false;
    $("#position-a").on("click", function(e){
        e.preventDefault();
        if (isCardOpen == false){
            $('#card').css('right','0');
            $('.cardShow').css('display','flex');
            isCardOpen = true;
        }     
    })
    $(".nav-close").on("click", function(e){
        e.preventDefault();
        if (isCardOpen == true){
            $('#card').css('right','-10000px');
            // $('.cardShow').css('display','none');
            isCardOpen = false;
        }
    }) 
}



CardToggle();
