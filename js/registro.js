function Registro(){
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault();
        var nombres = document.getElementById("nombres").value;
        var correo = document.getElementById("correo").value;
        var contraseña1 = document.getElementById("contraseña1").value;
        var contraseña2 = document.getElementById("contraseña2").value;

        if (nombres=="nombre" && correo=="correo@gmail.com"){
            if (contraseña1=="123" && contraseña2==contraseña1){
                window.location = "login.html";
            }else{
                alert("Las contraseñas no son iguales");
            }
        }else{
            alert("Complete todos los campos");
        }
    })
}