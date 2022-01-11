const envio = new Carrito();
const listaCompra = document.querySelector("#lista-compra tbody");
const formulario = document.querySelector('#procesar-pago');
const ccv = document.querySelector('#procesar-pago .ccv');
const carrito = document.getElementById('carrito');
const relizarPedidoBtn = document.getElementById('realizar-pedido');
const cliente = document.getElementById('cliente');
const correo = document.getElementById('correo');
const ubicacion = document.getElementById('ubicacion');
const tarjeta = document.getElementById('tarjeta');
const contacto = document.getElementById('contacto');
const expiracion = document.getElementById('expiracion');
const codigo = document.getElementById('codigo');

//Validar datos formulario
const idFormulario = document.getElementById('procesar-pago');
const inputs = document.querySelectorAll('#procesar-pago input');

//PARA VALIDAR FORMULARIO
const expresiones = {
	ubicacion: /^[a-zA-ZÀ-ÿ-Z0-9\s\_\-\.\#]{3,50}$/, // Letras, numeros, guion, espacio, #, . y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{3,16}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
    tarjeta: /^[0-9\-]{14}$/,
    expiracion: /^[0-9\-\/]{7}$/,
    cvv: /^\d{3}$/
}

const campos = {
    nombre: false,
    apellidos: false,
    correo: false,
    ubicacion: false,
    tarjeta: false,
    contacto: false,
    expiracion: false,
    cvv: false
}

const validarFormulario = (e) => {
    switch(e.target.name){
        case "destinatario":
            validarCampo(expresiones.nombre, e.target, 'nombre');
        break;
        case "Apellidos":
            validarCampo(expresiones.nombre, e.target, 'apellidos');
        break;
        case "cc_to":
            validarCampo(expresiones.correo, e.target, 'correo');
        break;
        case "ubicacion":
            validarCampo(expresiones.ubicacion, e.target, 'ubicacion');
        break;
        case "tarjeta":
            validarCampo(expresiones.tarjeta, e.target, 'tarjeta');
        break;
        case "contacto":
            validarCampo(expresiones.telefono, e.target, 'contacto');
        break;
        case "expiracion":
            validarCampo(expresiones.expiracion, e.target, 'expiracion');
        break;
        case "cvv":
            validarCampo(expresiones.cvv, e.target, 'cvv');
        break;
        
    }
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`group__${campo}`).classList.remove('nombre-incorrecto');
		document.getElementById(`group__${campo}`).classList.add('nombre-correcto');
		document.querySelector(`#group__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#group__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#group__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    } else {
		document.getElementById(`group__${campo}`).classList.add('nombre-incorrecto');
		document.getElementById(`group__${campo}`).classList.remove('nombre-correcto');
		document.querySelector(`#group__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#group__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#group__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }
}

inputs.forEach((input)=> {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});
//FIN VALIDACION FORMULARIO

cargarEventos();

function cargarEventos() {
    document.addEventListener('DOMContentLoaded', envio.leerLocalStorageCompra());

    //Eliminar productos del carrito
    carrito.addEventListener('click', (e) => { envio.eliminarProducto(e) });

    envio.calcularTotal();

    //cuando se selecciona realizar pedido
    relizarPedidoBtn.addEventListener('click', (e) => { envio.relizarPedido(e) });

    carrito.addEventListener('change', (e) => { envio.obtenerEvento(e) });
    carrito.addEventListener('keyup', (e) => { envio.obtenerEvento(e) });
}

