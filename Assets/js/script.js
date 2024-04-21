function addToCart(nombre, precio) {
    // Aquí puedes implementar la lógica para añadir el artículo al carrito
    alert('Añadido al carrito: ' + nombre + ' - Precio: $' + precio);
}

function verCarrito() {
    var carritoContenido = ''; // Variable para almacenar el contenido del carrito

    // Verifica si hay elementos en el carrito
    if (carritoContenido === '') {
        carritoContenido = 'Carrito vacío'; // Si está vacío, muestra el mensaje de "carrito vacío"
    }

    document.getElementById('carrito-contenido').innerHTML = carritoContenido; // Inserta el contenido en el modal
    document.getElementById('myModal').style.display = 'block'; // Muestra el modal
}

function cerrarModal() {
    document.getElementById('myModal').style.display = 'none'; // Oculta el modal al hacer clic en la X
}
