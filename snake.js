
function startGame() {
    myGameArea.start();
}




var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 960;
        this.canvas.height = 540;
        this.context = this.canvas.getContext("2d");
        this.context.font = "30px Arial";
        this.context.strokeText("helleo", 10, 50);

        
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
    }
}
