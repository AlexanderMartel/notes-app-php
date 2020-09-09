const formulario = document.getElementById('formulario');
const usuario = document.getElementById('usuario');
const email = document.getElementById('email');
const password = document.getElementById('password');

formulario.addEventListener('submit', (e) => {
    e.preventDefault();

    const registrarUsuario = () => {
        const formData = new FormData();

        formData.append('usuario', usuario.value.toLocaleLowerCase());
        formData.append('email', email.value.toLocaleLowerCase());
        formData.append('password', password.value.toLocaleLowerCase());

        const ruta = 'http://localhost/notes-app/registrarUsuario.php';
        fetch(ruta, {
            method: 'POST',
            body: formData
        }).then((response) => {
            response.ok
                ? Promise.resolve(response)
                : Promise.reject(response);
        }).then((response) => {
            console.log(response.text());
        }).then((data) => {
            if(data == "ok") {
                location.href = 'index.php';
            };
        }).catch((err) => {
            console.log(err);
        });
    };
    registrarUsuario();
});