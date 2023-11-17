function irGalerias() {
    window.open('https://www.google.com/maps?q=Italiannis+Galerias+Queretaro', '_blank');
}
function irAntea() {
    window.open('https://www.google.com/maps?q=Italiannis+Antea+Queretaro', '_blank');
}
document.getElementById('horarios').addEventListener('click', function () {
    var listaHorarios = document.getElementById('listaHorarios');
    if (listaHorarios.style.display === 'none' || listaHorarios.style.display === '') {
        listaHorarios.style.display = 'block';
    } else {
        listaHorarios.style.display = 'none';
    }
});
document.getElementById('horariosg').addEventListener('click', function () {
    var listaHorarios = document.getElementById('listaHorariosg');
    if (listaHorarios.style.display === 'none' || listaHorarios.style.display === '') {
        listaHorarios.style.display = 'block';
    } else {
        listaHorarios.style.display = 'none';
    }
});