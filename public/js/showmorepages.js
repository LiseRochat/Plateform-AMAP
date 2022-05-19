
//éléments pagepages

function showMorePages(btnToClick, hiddenCardOpen, imgOpen){
    let isShowMorePagesOpen = false;
    // const hiddenCardPart =  $("hiddenCardPart");
    // const card = document.getElementById("card");
    btnToClick.on("click", function(e){
        e.preventDefault();
        if (isShowMorePagesOpen == false){
            console.log('plop');
            hiddenCardOpen.css("display", "block");
            imgOpen.attr("src", "assetsbo/seeLess_icon.svg"); // on met l'image on
            isShowMorePagesOpen = true;
        }else{
            hiddenCardOpen.css("display", "none");
            imgOpen.attr("src","assetsbo/seeMore_icon.svg ");
            isShowMorePagesOpen = false;
        }        
    })
}

showMorePages($("#showButton1"), $("#hiddenCardPart1"), $("#showButton1 img"));
showMorePages($("#showButton2"), $("#hiddenCardPart2"), $("#showButton2 img"));
showMorePages($("#showButton3"), $("#hiddenCardPart3"), $("#showButton3 img"));
showMorePages($("#showButton4"), $("#hiddenCardPart4"), $("#showButton4 img"));
showMorePages($("#showButton5"), $("#hiddenCardPart5"), $("#showButton5 img"));
showMorePages($("#showButton6"), $("#hiddenCardPart6"), $("#showButton6 img"));