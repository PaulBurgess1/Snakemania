//all dev inputs pluse submit button 
var form=document.querySelectorAll("input");
var submitbtn=document.forms[0].submit;
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
    if(checkF(form)==false){
        event.preventDefault();
    };
})
function checkF(form){
    var passed=true
    console.log(form);
    //check if empty
    for( var i = 0; i < form.length; i++){
        if(form[i].value==""){
            form[i].style.backgroundImage="url('images/snakeInputF.png')";
            passed=false
        }
        if(form[i].value!=""){
            form[i].style.backgroundImage="url('images/snakeInputD.png')";
        }
    }
    return passed
}