const navside = () =>{
    const burger = document.querySelector('.burger');
    const nav  = document.querySelector('.nav-links');
    const navlinks = document.querySelectorAll(' .nav-links li');  //individual link is display
              
burger.addEventListener('click', () => {
          //toggle nav
        nav.classList.toggle('nav-active');
       
         //animate
     navlinks.forEach((link , index )=>{
        if(link.style.animation)
        {
            link.style.animation= ''
        }else{
            link.style.animation= 'navlinksfade 0.5s ease forwards ${index / 7 + 1.5}s';
        }
     });
    });
}
navside();