
window.onload = function() {

    document.addEventListener("mousemove", parallax);
    const layer1 = document.querySelector("#layer1");
    const layer2 = document.querySelector("#layer2");
    const _initPosLayer1 =[window.getComputedStyle(document.querySelector('#layer1')).backgroundPositionX,window.getComputedStyle(document.querySelector('#layer1')).backgroundPositionY ];
    const _initPosLayer2 =[window.getComputedStyle(document.querySelector('#layer2')).backgroundPositionX,window.getComputedStyle(document.querySelector('#layer2')).backgroundPositionY ];
    
   
    function parallax(e) {
        let _mouseX = e.clientX;
        let _mouseY = e.clientY;
        let middle = [1,1];
        //if ( _mouseX > window.window.innerWidth/2){middle[0] = -1;}else{middle[0] = 1;}
        //if ( _mouseY > window.window.innerHeight/2){middle[1] = -1;}else{middle[1] = 1;}
        let newLayer1 = [ parseInt(_initPosLayer1[0]) + middle[0] *_mouseX  * 0.02 , parseInt(_initPosLayer1[1]) - middle[1]*(_mouseY ) * 0.02 ];
        let newLayer2 = [ parseInt(_initPosLayer2[0]) - middle[0]*_mouseX  * 0.02 , parseInt(_initPosLayer2[1]) + middle[1]*(_mouseY ) * 0.02 ];
        
        //console.log(String(newLayer1));
        layer1.style.backgroundPosition = String(newLayer1[0])+"% "+String(newLayer1[1])+"%";
        layer2.style.backgroundPosition = String(newLayer2[0])+"% "+String(newLayer2[1])+"%";
        
    } 

}

