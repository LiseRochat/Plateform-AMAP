function popup(){
    jQuery(document).ready(function($){
        //open popup
        $('#button-page-accueil-seo').on('click', function(event){
            event.preventDefault();
            $('.modal-bg').css('display','flex');
        });
        
        //close popup
        $('.modal-bg').on('click', function(event){
            if( $(event.target).is('.popup-close')) {
                event.preventDefault();
                $(this).css('display','none');
            }
        });
        //close popup when clicking the esc keyboard button
        // $(document).keyup(function(event){
        //     if($('.modal-content').is(event.target) && $('.modal-content').has(event.target).length === 0){
        //         $('.modal-bg').css('display','none');
        //     }
        // });
    });
}
popup();

// function popup(clickToOpen, popupContent, popupClose){
//     jQuery(document).ready(function($){
//         //open popup
//         clickToOpen.on('click', function(event){
//             event.preventDefault();
//             $(popupContent).css('display','flex');
//         });
        
//         //close popup
//         $(popupContent).on('click', function(event){
//             if( $(event.target).is(popupClose)) {
//                 event.preventDefault();
//                 $(this).css('display','none');
//             }
//         });
//     });
// }

//meme code que menu
// function Popup(){
//     let isPopOpen = false;
//     //open popup
//     $('#button-page-accueil-seo').on("click", function(e){
//         e.preventDefault();
//         if (isPopOpen == false){
//             $('.modal-bg1').css('display','flex');
//             isPopOpen = true;
//         }     
//     })
//     //close popup
//     $('#close-popup1').on("click", function(e){
//         e.preventDefault();
//         if (isPopOpen == true){
//             $('.modal-bg1').css('display','none');
//             isPopOpen = false;
//         }
//     }) 
// }
// Popup();

//tentative de regroupement
// function popup(clickToOpen, popupContent, popupClose){
//     jQuery(document).ready(function($){
//         //open popup
//         clickToOpen.on('click', function(event){
//             event.preventDefault();
//             $(popupContent).css('display','flex');
//         });
        
//         //close popup
//         $(popupContent).on('click', function(event){
//             if( $(event.target).is(popupClose)) {
//                 event.preventDefault();
//                 $(this).css('display','none');
//             }
//         });
//     });
// }
// popup($('#button-page-accueil-seo'), $('.modal-bg1')), $('#close-popup1');
// popup($('#openpopup-page-accueil-header'), $('.modal-bg2')), $('#close-popup2');
// popup($('#openpopup-page-accueil-blocs'), $('.modal-bg3')), $('#close-popup3');