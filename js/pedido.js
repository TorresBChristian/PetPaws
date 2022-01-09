const carro = new Carrito();
const carrito = document.getElementById('carrito');
const productos = document.getElementById('lista-productos');
const listaProductos = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.getElementById('vaciar-carrito');
const procesarPedidoBtn = document.getElementById('procesar-pedido');
const agregarBtn = document.getElementById('btn-agregar');
const agregarBtn2 = document.getElementById('btn-agregar2');
const agregarBtn3 = document.getElementById('btn-agregar3');
const agregarBtn4 = document.getElementById('btn-agregar4');
const agregarBtn5 = document.getElementById('btn-agregar5');
const agregarBtn6 = document.getElementById('btn-agregar6');
const agregarBtn7 = document.getElementById('btn-agregar7');
const agregarBtn8 = document.getElementById('btn-agregar8');
const agregarBtn9 = document.getElementById('btn-agregar9');

cargarEventos();

function cargarEventos(){

    //Se ejecuta cuando se presionar agregar carrito
    productos.addEventListener('click', (e)=>{carro.comprarProducto(e)});

    //Cuando se elimina productos del carrito
    carrito.addEventListener('click', (e)=>{carro.eliminarProducto(e)});

    //Al vaciar carrito
    vaciarCarritoBtn.addEventListener('click', (e)=>{carro.vaciarCarrito(e)});

    //Cuando se presiona el boton agregar al carrito
    agregarBtn.addEventListener('click', (e)=>{carro.agregar(e)});
    agregarBtn2.addEventListener('click', (e)=>{carro.agregar(e)});
    agregarBtn3.addEventListener('click', (e)=>{carro.agregar(e)});
    agregarBtn4.addEventListener('click', (e)=>{carro.agregar(e)});
    agregarBtn5.addEventListener('click', (e)=>{carro.agregar(e)});
    agregarBtn6.addEventListener('click', (e)=>{carro.agregar(e)});
    agregarBtn7.addEventListener('click', (e)=>{carro.agregar(e)});
    agregarBtn8.addEventListener('click', (e)=>{carro.agregar(e)});
    agregarBtn9.addEventListener('click', (e)=>{carro.agregar(e)});

    //Al cargar documento se muestra lo almacenado en LS
    document.addEventListener('DOMContentLoaded', carro.leerLocalStorage());

    //Enviar pedido a otra pagina
    procesarPedidoBtn.addEventListener('click', (e)=>{carro.procesarPedido(e)});
}