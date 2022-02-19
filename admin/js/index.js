
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

