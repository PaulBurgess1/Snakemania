window.onload = function(){
    const cvs = document.getElementById("canvas");
    const ctx = cvs.getContext("2d");

    const cvsW = cvs.width;
    const cvsH = cvs.height;
    const snakeW = 10;
    const snakeH = 10; 

    var d = "RIGHT";
    document.addEventListener("keydown", getDirection);

    // TODO: TWEAK SIZE OF SNAKE/FOOD AND SPEED ------------------------------------------
    // TODO: MAKE THE GAME START ON START BUTTON PRESS INSTEAD OF INSTANTLY LOADING IT ------------------------------------------

    // TODO: change keybindings to WASD so i dont have to turn off window scroller ------------------------------------------
    function getDirection(e){
        let key = e.keyCode;
        if( key == 37 && d != "RIGHT"){
            d = "LEFT";
        }else if(key == 38 && d != "DOWN"){
            d = "UP";
        }else if(key == 39 && d != "LEFT"){
            d = "RIGHT";
        }else if(key == 40 && d != "UP"){
            d = "DOWN";
        }
    }


    // TODO: get colour from database or login ------------------------------------------
    function drawSnake(x,y){
        ctx.fillStyle = "#FFF";
        ctx.fillRect(x * snakeW, y * snakeH, snakeW, snakeH);

        ctx.fillStyle = "#000";
        ctx.strokeRect(x * snakeW, y * snakeH, snakeW, snakeH);
    }

    // create snake
    var len = 4;
    var snake = [];

    for(var i = len-1; i>=0; i--){
        snake.push({x:i, y:0});
    }

    //create food

    // TODO: make sure it is inbounds and not on snake ------------------------------------------
    var food = {
        x : Math.floor(Math.random() * (cvsW/snakeW - 1) + 1),
        y : Math.floor(Math.random() * (cvsH/snakeH - 1) + 1)
    }

    function drawFood(x,y){
        ctx.fillStyle = "yellow";
        ctx.fillRect(x * snakeW, y * snakeH, snakeW, snakeH);

        ctx.fillStyle = "#000";
        ctx.strokeRect(x * snakeW, y * snakeH, snakeW, snakeH);
    }

    function checkCollision(x, y, array){
        for(var i = 1; i < array.length; i++){
            if (x == array[i].x && y == array[i].y)
                return true;
        }
        return false;
    }

    function draw(){
        ctx.clearRect(0,0, cvsW, cvsH);
        for(var i = 0; i < snake.length; i++){
            var x = snake[i].x;
            var y = snake[i].y;
            drawSnake(x, y);
        }
        drawFood(food.x, food.y);
        //snake head
        var snakeX = snake[0].x;
        var snakeY = snake[0].y;


        // TODO: MAKE GAME OVER SCREEN AND SEND RESULTS ------------------------------------------
        if(snakeX < 0 || snakeY < 0 || snakeX >= cvsW/snakeW || snakeY >= cvsH/snakeH || checkCollision(snakeX, snakeY, snake)){
            location.reload();
        }

        if (d == "LEFT") snakeX--;
        if (d == "UP") snakeY--;
        if (d == "RIGHT") snakeX++;
        if (d == "DOWN") snakeY++;

        if(snakeX == food.x && snakeY == food.y){
            food = {
                x : Math.floor(Math.random() * (cvsW/snakeW) + 1),
                y : Math.floor(Math.random() * (cvsH/snakeH) + 1)
            }
            var newHead = {
                x : snakeX,
                y : snakeY
            };
        } else{
            snake.pop();
            var newHead = {
                x : snakeX,
                y : snakeY
            };
        }
        snake.unshift(newHead);
    }
    setInterval(draw, 60);
}