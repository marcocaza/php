const formLogin = document.querySelector("#formLogin")
btnLogin.addEventListener('click', event => {
    event.preventDefault()
    if (username.value == "" || pass.value == "") {
        alert("Completa todos los campos...")
        return false
    }



    const form = new FormData(formLogin)
    form.append("function", "login")
    fetch("data/users.php", {
            method: "POST",
            body: form
        })
        .then(response => response.json())
        .then(json => {

            if (json == "no") {
                console.log(json);
                alert("no ha ingresado bien los datos");
            } else if (username.value == json["correo"] && pass.value == json["password"]) {
                console.log(json);
                alert('datos correctos');
                location.href = "vistas/index.html";
            } else {

            }



        })

})