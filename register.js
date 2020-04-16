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
        ruleLabels[0].style.color=rgb(0, 255, 0)
    }
    //check if password is atleast than 5
    if(form[1].value.length<5 || form[1].value==""){
        form[1].style.backgroundImage="url('images/snakeInputF.png')";
        ruleLabels[1].style.color="red";
        passed=false
    }else{
        form[1].style.backgroundImage="url('images/snakeInputD.png')";
        ruleLabels[1].style.color=rgb(0, 255, 0)
    }
    //check if password is entered proper 
    if(form[2].value != form[1].value){
        form[2].style.backgroundImage="url('images/snakeInputF.png')";
        ruleLabels[2].style.color="red";
        passed=false
    }else{
        form[2].style.backgroundImage="url('images/snakeInputD.png')";
        ruleLabels[2].style.color=rgb(0, 255, 0)
    }

    return passed
}