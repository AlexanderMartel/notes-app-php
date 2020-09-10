const formRegistro = document.getElementById('formRegistro')
const respuesta = document.getElementById('respuesta')

formRegistro.addEventListener('submit', e => {
    e.preventDefault()
    const formData = new FormData(formRegistro)

    fetch('http://localhost/notes-app-php/registrarUsuario.php', {
        method: 'POST',
        body: formData
    }).then(response => response.ok ? Promise.resolve(response) : Promise.reject(response))
    .then(response => response.text())
    .then(data => {
        if(data === 'ok') {
            location.href = 'index.php'
        } else {
            respuesta.textContent = data
        }
    }).catch(err => console.log(err))
})



