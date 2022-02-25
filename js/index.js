



function sendEmail(){
  Email.send({
    Host : "smtp.gmail.com",
    Username : "hamza786504@gmail.com",
    Password : "laptop$645",
    To : 'hamza786504@gmail.com',
    From : document.getElementById("customer_email").value,
    Subject : "Your website visiter want to ask you a question",
    Body : "Client Name :" + document.getElementById("customer_name").value
         + "<br /> Client Phone Number :" + document.getElementById("customer_phone").value
         + "<br /> Client Message :" + document.getElementById("customer_message").value
  }).then(
    message => alert("Thanks for contacting us we will be back to you very soon!")
  );
}








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
varient = document.getElementsByClassName("varient_img");

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
