// Simulando carga de tatuadores y estudios
document.addEventListener('DOMContentLoaded', function() {
    cargarTatuadores();
    cargarEstudios();
});

function cargarTatuadores() {
    const listaTatuadores = document.getElementById('listaTatuadores');
    const tatuadores = [
        { 
            nombre: 'Carlos Gómez', 
            especialidad: 'Tatuajes en Realismo', 
            foto: 'img/carlos.jpg', 
            galeria: ['img/tatuaje1.jpg', 'img/tatuaje2.jpg']
        },
        {
            nombre: 'Ana Pérez',
            especialidad: 'Tatuajes Geométricos',
            foto: 'img/ana.jpg',
            galeria: ['img/tatuaje3.jpg', 'img/tatuaje4.jpg']
        }
    ];

    tatuadores.forEach(tatuador => {
        const divTatuador = document.createElement('div');
        divTatuador.innerHTML = `
            <img src="${tatuador.foto}" alt="${tatuador.nombre}">
            <h3>${tatuador.nombre}</h3>
            <p>${tatuador.especialidad}</p>
            <div class="galeria-tatuajes">
                ${tatuador.galeria.map(img => `<img src="${img}" alt="Tatuaje realizado">`).join('')}
            </div>
            <div class="calificacion">
                <button>Calificar</button>
            </div>
        `;
        listaTatuadores.appendChild(divTatuador);
    });
}

function cargarEstudios() {
    const listaEstudios = document.getElementById('listaEstudios');
    const estudios = [
        { 
            nombre: 'Estudio Black Ink', 
            direccion: 'Cra 10 #20-30, Bogotá', 
            foto: 'img/blackink.jpg'
        },
        {
            nombre: 'Estudio Urban Tatto',
            direccion: 'Cl 45 #15-10, Bogotá',
            foto: 'img/urbantattoo.jpg'
        }
    ];

    estudios.forEach(estudio => {
        const divEstudio = document.createElement('div');
        divEstudio.innerHTML = `
            <img src="${estudio.foto}" alt="${estudio.nombre}">
            <h3>${estudio.nombre}</h3>
            <p>${estudio.direccion}</p>
            <div class="calificacion">
                <button>Calificar</button>
            </div>
        `;
        listaEstudios.appendChild(divEstudio);
    });
}
