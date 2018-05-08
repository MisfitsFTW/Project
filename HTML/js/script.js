/*
var printX;
function Buy(){
    var x = document.getElementById("iphone8plus").value;
    var a=x;
    var cpu;
    if(a==x){
        printX="CPU: Apple Bionic";
        //alert(printX);
    }
    if(a==x){
        document.location.href = "spec.html";
    }
}
-----------------------------------------------------------
document.getElementById("mobileSpec").innerHTML=printX;
var x=document.getElementById("iphone8plus").value;
function Buy(){
    document.location.href = "spec.html";
}

document.getElementById("mobileSpec").innerHTML=x;
*/
function Buy(clck){
    if(clck=='iphone8plus'){
        document.location.href = "iphone8plusspecs.html";
    }else if(clck=='samsungs8plus'){
        document.location.href = "s9specs.html";
    }else if(clck=='oneplus5t'){
        document.location.href = "5tspecs.html";     
    }else if(clck=='huaweeiMate10'){
        document.location.href = "mate10specs.html";
    }else if(clck=='iphone6'){
        document.location.href = "iphone6specs.html";     
    }else if(clck=='samsungA7'){
        document.location.href = "a7specs.html";    
    }else if(clck=='htc610'){
        document.location.href = "htcDesire610specs.html";    
    }else if(clck=='iphoneSE'){
        document.location.href = "iphoneSEspecs.html";    
    
    }else{
        alert('error');
    }
        
}

function itemAlert(){
    alert('Item added to cart');
}
//document.getElementById('mobileSpec').innerHTML='CPU: Apple Bionic';