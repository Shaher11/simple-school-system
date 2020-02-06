/*
var myoldPrice = 1000,
    myNewPrice = 900,
    myDiscount = (myNewPrice/myoldPrice);
    
document.getElementById("variables").innerHTML = myDiscount;
*/

var mainPrice = 500,
    mySmallDiscount = 50,
    myMidiumDiscount = 100,
    myBigdiscount = 150;
    
    
    
document.getElementById("price").innerHTML = mainPrice;
document.getElementById("product1").innerHTML = mainPrice - mySmallDiscount ;
document.getElementById("product2").innerHTML = mainPrice - myMidiumDiscount;
document.getElementById("product3").innerHTML = mainPrice - myBigdiscount;
    
    
    
    
    
    