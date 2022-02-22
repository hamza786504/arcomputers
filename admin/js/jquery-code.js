$(document).ready(function () {
  $(".squeez_sidebar").click(function () {
    $("#mySidenav").css("width", "70px");
    $(".logo").css("display", "none");
    $(".icon").css("display", "block");
    $(".icon-a").css("display", "flex");
    $(".icon-a").css("margin-left", "-7px");
    $(".icon-a span").css("display" , "none");
    $(".nav").css("display", "none");
    $(".nav2").css("display", "block");
    $(".squeez_sidebar").css("display", "none");
  });
  $("#navbar_expand").click(function () {
    $("#mySidenav").css("width", "300px");
    $(".logo").css("display", "block");
    $(".icon-a span").css("display" , "inline-block");
    $(".icon-a").css("justify-content" , "flex-start");
    $(".nav").css("display", "block");
    $(".squeez_sidebar").css("display", "block");
  });














  $("#add_product_form").on("submit" , function(e){
    e.preventDefault();
    const name = $("#product_name").val();
    const tagline = $("#product_tagline").val();
    const category = $("#category_select").val();
    const stock = $("#stock").val();
    const purchase_price = $("#purchase_price").val();
    const sale_price = $("#sale_price").val();
    // if(document.querySelector('input[name="price_radio"]:checked').value == 2){
    //   const discount_price = document.getElementById("discounted_price").value;
    // }else{
    //   const discount_price = sale_price;
    // }
    const publish_type = document.querySelector('input[name="publish_type"]:checked').value;
    const description = $("#description").value;



    function show_error(id){
        document.querySelector(`${id} .field_message`).style.display = "block";
        setTimeout(function(){
            document.querySelector(`${id} .field_message`).style.display = "none";
        },10000);
    }
    let formData = new FormData(this);
    
    // if(name == ""){
    //     show_error("#product_name_feild");
    // }else if(tagline == ""){
    //     show_error("#product_tagline_feild");
    // }else if(parseInt(stock) <= 0){
    //     alert("Please add valid stock");
    // }else if(parseInt(purchase_price) < 1){
    //   alert("Please add valid purchase price");
    // }else if(discount_price > parseInt(sale_price)){
    //   alert("Please add valid discounted price");
    // }else if(parseInt(sale_price) < 1){
    //   alert("Please add valid sale price");
    // }else if(discount_price < 1){
    //   alert("Please add valid discounted price");
    // }else if(description === ""){
    //     show_error("#product_description_field");
    // }else if(document.getElementById('files').files.length === 0){
    //   alert("File not slected");
    // }else 
    if(document.getElementById('files').files.length > 4){
      alert("Maximum four varients are allowed");
    }else{
      $.ajax({
        url: 'server/add_product.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
          const res = JSON.parse(response);
          if(res.success){
            $("#add_product_modal_back").css({"display" : "none"});
          }else if(res.error){
            $("#add_product_modal_back").css({"display" : "none"});
            alert("Product Could not add due to some server error!");
          } 
        }
      });

    }


    






    // Read selected files
    // let totalfiles = document.getElementById('files').files;
    // for (let index = 0; index < totalfiles.length; index++) {
    //   formData.append("files[]", totalfiles[index]);
    // };
    // console.log(formData);
    // // AJAX request
    

})


  // $('#upload_images').click(function(){

  // });
});