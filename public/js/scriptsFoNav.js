
function handleHamburgerMenu(){
    let isHamClosed = true;
    const btnHamburger = document.querySelector('#hamburger-trigger');
    const eltNav = document.querySelector('.navbarNAV');
    const eltHeader = document.querySelector('header');
    const pageWidth= window.innerWidth; 
    
    let isLargeScreen = true;

    if(pageWidth <= 1024){

        eltNav.style.display = "none";

        btnHamburger.addEventListener('click',function(e){
            e.preventDefault();
            if(isHamClosed){
                document.querySelector('.navbarNAV').style.display = "block";
                btnHamburger.innerText = "X";
                if(pageWidth > 768){
                    eltHeader.style.height = "50vh";
                } else {
                    eltHeader.style.height = "100vh";
                }                
                isHamClosed = false;
            } else {
                document.querySelector('.navbarNAV').style.display = "none";
                btnHamburger.innerText = "☰";
                eltHeader.style.height = "auto";
                isHamClosed = true;
            }
            
        }) 
    } else{
        eltNav.style.display = "block";
        eltHeader.style.height = "auto";
    }


}
handleHamburgerMenu();

window.addEventListener('resize',function(){
    const burgerOnResize = this.setTimeout(handleHamburgerMenu(),100)
})
