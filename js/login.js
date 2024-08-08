function login(){
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Evita el envío del formulario
      
        // Obtén los valores del usuario y contraseña ingresados
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
      
        // Realiza la validación de usuario y contraseña
        if (username === "usuario" && password === "contraseña") {
          window.location = "index.html";
          // Aquí puedes redirigir a otra página o realizar otras acciones necesarias para la sesión iniciada correctamente
        } else {
          alert("Nombre de usuario o contraseña incorrectos");
        }
      });
    }