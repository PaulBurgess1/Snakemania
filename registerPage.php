<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnakeMania - Home</title>
    <link href="styles.css" rel="stylesheet">
    
</head>

<body>

<ul class="format">
    <li><img class="left_ad" src="images/art.png"></li>
    <li>
    <div class="main_body">
        
        <div class="menu_top">
            <ul>
                <li><a href="Home.html">Home</a></li>
                <li style="float: right;"><a href="#">Login</a></li>
                <li style="float: right;"><a href="Home.html">Logout</a></li>
            </ul>
        </div>
        <div class="title"></div>
        <div class="page_body"><!--register body-->
            <form action="#">
                
                    <br><label>Username</label><br>
                    <input type="text" name=userName><br><br>
                    <label>Password</label><br>
                    <input type="text" name=password><br><br>
                    <label>Password again</label><br>
                    <input type="text" name=passwordCheck><br><br>
                    <button class="btn" type="submit" value="submit" name="submit">Sign me Up!</button>
                    <br><label>Instructions </label><br>
                    <br><label name="rule">1. Username must be atleast 7 chars</label><br>
                    <br><label name="rule">2. Password must be at least 5 chars long</label><br>
                    <br><label name="rule">3. Must enter the same password twice</label><br>
                    <br><label name="rule">4. Username must not already be in use</label><br>
            </form>
        </div>
        
    </div>
    </li>
        <li><img class="right_ad" src="images/art.png"></li>
    </ul>



</body>
</html>

<script type="text/javascript">
//all dev inputs pluse submit button 
var form=document.querySelectorAll("input");
var submitbtn=document.forms[0].submit;
var ruleLabels=document.getElementsByName("rule");
console.log(ruleLabels)

//turn the divs background to white if clicked
for(var i=0; i<form.length;i++){
    form[i].addEventListener("click",function(event){
        event.target.style.backgroundImage="url('images/snakeInputD.png')";
    })
}
//check if submit button is clicked that all
//divs have been filled 
submitbtn.addEventListener("click",function(){
    console.log(form);
    //went there is an error do this one
    if(checkF(form,ruleLabels)==false){
        event.preventDefault();
    };
    //ajax to add user to database
})
function checkF(form,ruleLabels){
    var passed=true
    console.log(form);
    //check if username is atleast than 7
    if(form[0].value.length<7 || form[0].value==""){
        form[0].style.backgroundImage="url('images/snakeInputF.png')";
        ruleLabels[0].style.color="red";
        passed=false
    }else{
        form[0].style.backgroundImage="url('images/snakeInputD.png')";
        ruleLabels[0].style.color="rgb(0, 255, 0)"
    }
    //check if password is atleast than 5
    if(form[1].value.length<5 || form[1].value==""){
        form[1].style.backgroundImage="url('images/snakeInputF.png')";
        ruleLabels[1].style.color="red";
        passed=false
    }else{
        form[1].style.backgroundImage="url('images/snakeInputD.png')";
        ruleLabels[1].style.color="rgb(0, 255, 0)"
    }
    //check if password is entered proper 
    if(form[2].value != form[1].value){
        form[2].style.backgroundImage="url('images/snakeInputF.png')";
        ruleLabels[2].style.color="red";
        passed=false
    }else{
        form[2].style.backgroundImage="url('images/snakeInputD.png')";
        ruleLabels[2].style.color="rgb(0, 255, 0)"
    }
    //do some ajax shit here
    //if it already exists then
    //ruleLabels[2].style.color="red";
    //else ruleLabels[2].style.color="rgb(0, 255, 0)"

    return passed
}
</script>