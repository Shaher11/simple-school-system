

// var myInfo= {

// 	firstName:"Mohamed",
// 	lastName:"Ramadan";
// };


// document.getElementById("testFromJs").innerHtml=myInfo.firstName+" "+myInfo.lastName;



var yourAge= prompt("what is your age?");

if(yourAge<18){
    document.getElementById("testFromJs").innerHTML="<span style='color:red '>Sorry your age is "+ yourAge +" your are not allowed here!</span>";
    
}else{
    document.getElementById("testFromJs").innerHTML="<span style='color:green '> Your age is "+ yourAge +" your are welcome here! </span>";
}
