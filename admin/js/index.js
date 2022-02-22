




document.getElementById("add_product").addEventListener("click",function(){
    document.getElementById("add_product_modal_back").style.display = "block";
});
function close_modal(){
    document.getElementById("add_product_modal_back").style.display = "none";
}

function price_type(src){
    if(src.value == 1){
        document.getElementById("discounted_price_box").style.display = "none";
    }else if(src.value == 2){
        document.getElementById("discounted_price_box").style.display = "flex";
    }
}

// document.getElementById("add_product_save").addEventListener("click" , function(e){
//     e.preventDefault();
//     const name = document.getElementById("product_name").value;
//     const tagline = document.getElementById("product_tagline").value;
//     const category = document.getElementById("category_select").value;
//     const stock = document.getElementById("stock").value;
//     const purchase_price = document.getElementById("purchase_price").value;
//     const sale_price = document.getElementById("sale_price").value;
//     let discount_price;
//     if(document.querySelector('input[name="price_radio"]:checked').value == 1){
//         discount_price = sale_price;
//     }else if(document.querySelector('input[name="price_radio"]:checked').value == 2){
//         discount_price = document.getElementById("discounted_price").value;
//     }
//     const publish_type = document.querySelector('input[name="publish_type"]:checked').value;
//     const description = document.getElementById("description").value;



//     function show_error(id){
//         document.querySelector(`${id} .field_message`).style.display = "block";
//         setTimeout(function(){
//             document.querySelector(`${id} .field_message`).style.display = "none";
//         },5000);
//     }


//     if(name == ""){
//         show_error("#product_name_feild");
//     }else if(tagline == ""){
//         show_error("#product_tagline_feild");
//     }else if(parseInt(stock) <= 0){
//         alert("Please add valid stock");
//     }else if(description == ""){
//         show_error("#product_description_field");
//     }
// })







document.getElementById("delete_product").addEventListener("click",async function(){
    const id = this.dataset.id;
    if(confirm("Are you sure you want to delete this product")){
        const result = await fetch(`server/delete_product.php?id=${id}`);
        const res = await result.json();
        console.log(res);
    }
})


document.getElementById("login_form").addEventListener("click",async function(e){
    e.preventDefault();

    const email = document.getElementById("login_email").value;
    const password = document.getElementById("login_password").value;
    const result = await fetch("server/checklogin.php",{
        method : "POST",
        body : JSON.stringify({email : email , password : password}),
        headers : {
            "Content-Type" : "Appliction/json"
        }
    });
    const res = await result.json();
    if(res.error === "Something wrong"){
        alert(res.error);
    }else if(res.success === "authenticated"){
        window.location.href = 'index.php';
    }
});


