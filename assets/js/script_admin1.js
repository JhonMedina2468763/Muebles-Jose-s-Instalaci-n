const btnUsuario = document.querySelector('#btnUsuario'), contentUsuario = document.querySelector('#container-usuario');
const btnProveedores = document.querySelector('#btnProveedores'), contentProveedores = document.querySelector('#container-proveedores');
const btnClientes = document.querySelector('#btnClientes'), contentClientes = document.querySelector('#container-clientes');

btnUsuario.addEventListener('click', ()=>{
    contentUsuario.classList.add('encender');
    producto.classList.remove('encender');
});

btnProveedores.addEventListener('click', ()=>{
    contentProveedores.classList.add('encender');
    btnProveedores.classList.remove('encender');
});

btnClientes.addEventListener('click', ()=>{
    contentClientes.classList.add('encender');
    clientes.classList.remove('encender');
});