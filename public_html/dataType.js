/*
 //Booleans
var haveDiscount = true;

if(haveDiscount === true){
    var mainPrice=350;  
}
else{
    var mainPrice=450;
}
document.getElementById("test").innerHTML = mainPrice;
*/

//Objects, concatunation and break
var myInfo = {firstName:"Mohamed", lastName:"Ramadan"},
    myAge = 22,
    myCity = "Aswan",
    myVar = document.getElementById("test");
/*
myVar.innerHTML = 
        "<span style='color:red'> My Name is: </span>" + "<span style='color:blue'>" + myInfo.firstName +" "+ myInfo.lastName + "</span>" + "<br>"+
        " I have " + myAge +" years Old"+ "<br>"+
        " My City is: " + myCity;
*/

console.log( myInfo.firstName +" "+ myInfo.lastName);
