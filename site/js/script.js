$(".move-area").mousemove(function(event) {
    var eye = $(".eye");
    var x = (eye.offset().left) + (eye.width() / 2);
    var y = (eye.offset().top) + (eye.height() / 2);
    var rad = Math.atan2(event.pageX - x, event.pageY - y);
    var rot = (rad * (180 / Math.PI) * -1) + 180;
    eye.css({
        '-webkit-transform': 'rotate(' + rot + 'deg)',
        '-moz-transform': 'rotate(' + rot + 'deg)',
        '-ms-transform': 'rotate(' + rot + 'deg)',
        'transform': 'rotate(' + rot + 'deg)'
    });
});
var i = 1;
// velocity;
var vPanneau = 2;

// acceleration
var aPanneau = 0.4;
function movePanneau(){
    document.getElementById('panneau').style.top =  (i + "px");
    document.getElementById('panneau').style.setProperty("-webkit-transform","rotate("+i*0.08 +"deg)", null);
    requestAnimationFrame(movePanneau);
    if(i<(document.body.clientHeight)) {
        vPanneau += aPanneau;
        document.getElementById('code1').textContent = "CODE 404";
        // update position with velocity
        i += vPanneau;
    }
}
var r = 5, g = 25, b = 35;
var disco = false;
function changeColor(){
    if(disco) {
        r += 5;
        r = r % 255;
        g += 10;
        g = g % 255;
        b += 15;
        b = b % 255;
        document.getElementById('mainContainer').style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
        document.getElementById('inputCode').style.backgroundColor = '#051923';
    }
    else {
        document.getElementById('mainContainer').style.backgroundColor = '#051923';
    }
    requestAnimationFrame(changeColor);
}
changeColor();
function verifCode(){
    if(document.getElementById('inputCode').value === '404'){
        document.getElementById('jonathanGif').style.visibility = "visible";
    }
}
function victory(){
    if(document.getElementById('jonathanGif').style.visibility === "visible"){
        $("#modal").modal();
    }
}