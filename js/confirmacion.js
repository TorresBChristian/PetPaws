const confirmacion = new Carrito();
const listaCompra = document.querySelector("#lista-compra tbody");
const carrito = document.getElementById('carrito');
const cliente = document.getElementById('cliente');
const correo = document.getElementById('correo');
const ubicacion = document.getElementById('ubicacion');
const tarjeta = document.getElementById('tarjeta');
const contacto = document.getElementById('contacto');
const expiracion = document.getElementById('expiracion');
const codigo = document.getElementById('codigo');
const confirmarCompraBtn = document.getElementById('confirmar-compra');
const cargandogift = document.querySelector('#cargando');

cargarEventos();

function cargarEventos() {
    document.addEventListener('DOMContentLoaded', confirmacion.leerLocalStorageCompra());

    //Eliminar productos del carrito
    carrito.addEventListener('click', (e) => { confirmacion.eliminarProducto(e) });

    confirmacion.calcularTotal();

    //cuando se selecciona confirmar
    confirmarCompraBtn.addEventListener('click', confirmarCompra);

    carrito.addEventListener('change', (e) => { confirmacion.obtenerEvento(e) });
    carrito.addEventListener('keyup', (e) => { confirmacion.obtenerEvento(e) });
}


function confirmarCompra() { 
    (function () {
        emailjs.init("user_lWGAaeSlGC4aGjZFcGoTN");
    })();

    var myform = $("form#procesar-pago");

    myform.submit( (event) => {
        event.preventDefault();

        // Change to your service ID, or keep using the default service
        var service_id = "service_sk7stao";
        var template_id = "template_f3hnpf6";

        const cargandoGif = document.querySelector('#cargando');
        cargandoGif.style.display = 'block';

        const enviado = document.createElement('img');
        enviado.src = './public/assets/mail.gif';
        enviado.style.display = 'block';
        enviado.width = '100';

        emailjs.sendForm(service_id, template_id, myform[0])
            .then(() => {
                cargandoGif.style.display = 'none';
                document.querySelector('#loaders').appendChild(enviado);
                setTimeout(() => {
                    enviado.remove();
                    confirmacion.vaciarLocalStorage();
                    window.location = "carrito.html";
                }, 4000);               
            }, (err) => {
                alert("Error al enviar el email\r\n Response:\n " + JSON.stringify(err));
                // myform.find("button").text("Send");
            });
        return false;
    });
}