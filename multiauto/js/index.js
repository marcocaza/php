const formLogin = document.querySelector("#formLogin")
btnLogin.addEventListener('click', event => {
    event.preventDefault()
    if (username.value == "" || pass.value == "") {
        alert("Completa todos los campos...")
        return false
    }



    const form = new FormData(formLogin);
    form.append("function", "login");
    fetch("data/users.php", {
            method: "POST",
            body: form
        })
        .then(response => response.json())
        .then(json => {

            if (json == "no") {
                console.log(json);
                alert("no ha ingresado bien los datos");
                
                document.getElementById("estadoLogin").textContent="no ha ingresado bien los datos del usuario";
            } else if (username.value == json["correo"] && pass.value == json["password"]) {
                console.log(json);
                alert('datos correctos');
                enviarDato(json["correo"], json["password"]);
                location.href = 'sesiones/isLogin.php';
                document.getElementById("estadoLogin").textContent ="datos correctos";
                
            } else {

            }



        })
        
})

async function enviarDato(userr, pass){
    var dato = {usuario: userr, contra: pass};
    const result = JSON.stringify(dato);
    console.log(result);
    let resp = await fetch("sesiones/isLogin.php", {
        method: "POST",
        mode: 'cors',
        cache: 'no-cache',
        body: result
    });
    console.log(resp);
              
}