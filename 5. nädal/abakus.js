window.onload=function(){
    var pall = document.getElementsByClassName("bead");
    for (var i=0; i< pall.length; i++) {
        pall[i].onclick = function () {
            var floatpos = getComputedStyle(this,null).getPropertyValue("float");
            if (floatpos=="left") {
                this.style.cssFloat="right";
            }else if (floatpos=="right") {
                this.style.cssFloat="left";}  
        }
    }
}