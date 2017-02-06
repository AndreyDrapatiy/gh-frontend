

function btnvalue (id) {
    var btnvalue = document.getElementById(id).value;               
    if(btnvalue == "CE"){
        document.getElementById('inout').value = "\u0020";              
        document.getElementById('outputNumber').innerHTML = "\u0020";   
    }                                                                   
    else{
        document.getElementById('inout').value += btnvalue;             
    }                   
    
}

function calc() {
    var num;
    num = document.getElementById('inout').value;  
    document.getElementById('outputNumber').innerHTML =  eval(num); //eval-прекрасен.
}

