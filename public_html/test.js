var yourAge= prompt("what is your age?");

if(yourAge<18){
    document.getElementById("test1").innerHTML="<span style='color:red '>Sorry your age is "+ yourAge +" your are not allowed here!</span>";
    
}else{
    document.getElementById("test1").innerHTML="<span style='color:green '> Your age is "+ yourAge +" your are welcome here! </span>";
}
