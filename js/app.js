const formulario = document.getElementById('formulario');
const respuesta = document.getElementById('respuesta');
const usuario = document.getElementById('usuario');
const email = document.getElementById('email');
const password = document.getElementById('password');

formulario.addEventListener('submit', e => {
    e.preventDefault();
    insertarUsuario();
})

const insertarUsuario = () => {
    const ruta = 'registro.php';
    
    const datos = new FormData();
    datos.append('usuario', usuario.value.toLowerCase());
    datos.append('email', email.value.toLowerCase());
    datos.append('password', password.value.toLowerCase());

    fetch(ruta, {
        method: 'POST',
        body: datos
    }).then(resultado => {
        resultado.ok 
            ? Promise.resolve(resultado)
            : Promise.reject(new Error('error'))
    }).then(resultado => resultado.text())
    .then(resultado => {
        console.log(resultado)
        if(resultado === 'ok') {
            location.href = 'home.php';
        }
    })
}


