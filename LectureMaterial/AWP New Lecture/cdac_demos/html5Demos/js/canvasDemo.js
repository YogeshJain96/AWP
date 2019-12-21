window.onload = function(){
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    //to draw a line
    // ctx.moveTo(0,0);
    // ctx.lineTo(200,100);
    // ctx.stroke();

    // ctx.beginPath();
    // ctx.arc(95,50,40,0,2*Math.PI);
    // ctx.stroke();

    // ctx.font="30px Arial";
    // ctx.fillText("Hello Canvas",10,50);

    var grd = ctx.createLinearGradient(0,0,200,0);
    grd.addColorStop(0,"red");
    grd.addColorStop(1,"white");

    ctx.fillStyle = grd;
    ctx.fillRect(10,10,150,80);
    
}