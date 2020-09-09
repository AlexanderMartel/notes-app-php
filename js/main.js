const formulario = document.getElementById('formulario');
const usuario = document.getElementById('usuario');
const email = document.getElementById('email');
const password = document.getElementById('password');

formulario.addEventListener('submit', (e) => {
    e.preventDefault();

    const datos = new FormData();

    datos.append('usuario', usuario.value.toLocaleLowerCase());
    datos.append('email', email.value.toLocaleLowerCase());
    datos.append('password', password.value.toLocaleLowerCase());

    const registrarUsuario = () => {
        const ruta = 'http://localhost/notes-app-php/registrarUsuario.php';
        fetch(ruta, {
            method: 'post',
            body: datos
        }).then((respuesta) => {
            respuesta.ok
                ? Promise.resolve(respuesta)
                : Promise.reject(respuesta);
        }).then((respuesta) => {
            respuesta.text();
        }).then((data) => {
            if(data == 'ok') {
                location.href = 'index.php';
            };
        }).catch((err) => {
            console.log(err);
        });
    };
    registrarUsuario();
});