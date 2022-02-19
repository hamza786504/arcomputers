

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


const quantity = document.getElementById("quantity");
var data = 0;
  
//printing default value of data that is 0 in h2 tag
document.getElementById("quantity").innerText = data;
  
//creation of increment function
function increament_quantity(inventory) {
  if(data < inventory){
    data = data + 1;
  }
    document.getElementById("quantity").innerText = data;
}
//creation of decrement function
function decreament_quantity() {
    if(data !== 0){
      data = data - 1;
    }
    document.getElementById("quantity").innerText = data;
}



let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
let prev = document.querySelector(".prev");
let next = document.querySelector(".next");

if (!slides.length == 0) {
  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides((slideIndex += n));
  }

  let currentSlide = function (n) {
    showSlides((slideIndex = n));
  };

  function showSlides(n) {
    if (n > slides.length) {
      slideIndex = 1;
    }

    if (n < 1) {
      slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
}

prev.addEventListener("click", () => {
  plusSlides(-1);
});

next.addEventListener("click", () => {
  plusSlides(1);
});

