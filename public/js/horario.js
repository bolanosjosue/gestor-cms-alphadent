function estadoClinica() {

    const ahora = new Date();

    // Hora Costa Rica
    const opciones = { timeZone: 'America/Costa_Rica' };
    const horaCR = new Date(ahora.toLocaleString('en-US', opciones));

    const dia = horaCR.getDay(); // 0 domingo, 6 sábado
    const hora = horaCR.getHours();
    const minutos = horaCR.getMinutes();
    const horaActual = hora + minutos / 60;

    let abierto = false;

    switch (dia) {

        case 1: // lunes
        case 2: // martes
        case 3: // miércoles
        case 4: // jueves
        case 5: // viernes
            if (horaActual >= 8 && horaActual < 18) {
                abierto = true;
            }
            break;

        case 6: // sábado
            if (horaActual >= 8 && horaActual < 14) {
                abierto = true;
            }
            break;

        case 0: // domingo
            abierto = false;
            break;

    }

    const elemento = document.getElementById("estadoClinica");

    if (abierto) {
        elemento.innerHTML = "Abierto ahora";
        elemento.style.color = "#16a34a";
        elemento.style.fontWeight = "600";
    } else {
        elemento.innerHTML = "Cerrado ahora";
        elemento.style.color = "#dc2626";
        elemento.style.fontWeight = "600";
    }

}

estadoClinica();

// actualizar cada minuto
setInterval(estadoClinica, 60000);