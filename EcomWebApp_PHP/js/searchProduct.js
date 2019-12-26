console.log("searchProducts");

var searchBar = document.getElementById("searchBar");
searchBar.addEventListener("keyup",searchProducts);

function searchProducts() { 
    let input = document.getElementById('searchBar').value; 
    input=input.toLowerCase(); 
    console.log("Searching: "+input);
    //let x = document.getElementsByClassName('filterDiv'); 
    let x = document.getElementsByClassName('productName'); 
      
    for (i = 0; i < x.length; i++) {  
        if (!x[i].innerHTML.toLowerCase().includes(input)) { 
           // x[i].style.display="none";
        } 
        else { 
           // x[i].style.display="show";
           console.log("Found: " + x[i].innerHTML);                  
        } 
    } 
}
