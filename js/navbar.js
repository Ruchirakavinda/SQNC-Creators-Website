
window.onscroll = scrollShowNav;
function scrollShowNav() {
   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementsByTagName("nav")[0].style.top = "-50px";
   } else {
      document.getElementsByTagName("nav")[0].style.top = "0px";
   }
}

