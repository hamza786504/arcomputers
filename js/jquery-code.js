$(document).ready(function(){
    // $("#customer_phone").on("focus",function(){
    //     $("#customer_phone").val("+92 ");
    // })
    // // $("#customer_phone").on("blur",function(){
    // //     $("#customer_phone").val("");
    // // })
    // $("#customer_phone").on("keyup" , function(){
    //     console.log(this.value);
    // });

    $("#submit_contact_form").on("submit",async function(e){
        e.preventDefault();
        // let formData = new FormData(this);
        // $.ajax({
        //     url : "server/contact_us.php",
        //     type: "POST",
        //     data: formData,
        //     contentType: false,
        //     processData: false,
        //     success: function (response) {
        //         console.log(response);
        //     }
        // })
    })
});
