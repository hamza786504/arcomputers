


let quantity = document.getElementById('quantity');
let data = 0;
//printing default value of data that is 0 in h2 tag
quantity.innerText = data;
  
//creation of increment function
function increament_quantity(inventory) {
  if(data < inventory){
    data = data + 1;
  }
  quantity.innerText = data;
}
//creation of decrement function
function decreament_quantity() {
    if(data !== 0){
      data = data - 1;
    }
    quantity.innerText = data;
}



const active_varient = document.getElementById("active_varient");
const varient = document.getElementsByClassName("varient_img");


varient[0].onclick = function(){ 
    active_varient.src = varient[0].src; 
    this.parentElement.classList.add("active");
    varient[1].parentElement.classList.remove("active");
    varient[2].parentElement.classList.remove("active");
    varient[3].parentElement.classList.remove("active");
}
varient[1].onclick = function(){ 
    active_varient.src = varient[1].src; 
    this.parentElement.classList.add("active");
    varient[0].parentElement.classList.remove("active");
    varient[2].parentElement.classList.remove("active");
    varient[3].parentElement.classList.remove("active");
}
varient[2].onclick = function(){ 
    active_varient.src = varient[2].src; 
    this.parentElement.classList.add("active");
    varient[0].parentElement.classList.remove("active");
    varient[1].parentElement.classList.remove("active");
    varient[3].parentElement.classList.remove("active");
}
varient[3].onclick = function(){ 
    active_varient.src = varient[3].src; 
    this.parentElement.classList.add("active");
    varient[0].parentElement.classList.remove("active");
    varient[1].parentElement.classList.remove("active");
    varient[2].parentElement.classList.remove("active");
}






