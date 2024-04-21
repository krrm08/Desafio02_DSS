<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Comidas</title>
    <link rel="stylesheet" href="Assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <header>
        <div class="logo">
            <img src="Assets/img/pollocampero.jpeg" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <h1>Pollo Campero</h1>

    <div class="btnCarrito">
    <button onclick="verCarrito()" ><i class="fas fa-shopping-cart"></i></button>
    </div>

    <div class="menu-container">
        <?php
        // Lee el archivo JSON
        $menu_json = file_get_contents('Assets/data/menu.json');
        // Decodifica el JSON en un array asociativo
        $menu_items = json_decode($menu_json, true);

        // Itera sobre cada elemento del menú
        foreach ($menu_items as $item) {
            echo '<div class="menu-item">';
            echo '<img src="./Assets/img/' . $item['imagen'] . '" alt="' . $item['nombre'] . '">';
            echo '<h3>' . $item['nombre'] . '</h3>';
            echo '<p>Precio: $' . number_format($item['precio'], 2) . '</p>';
            echo '<button onclick="addToCart(\'' . $item['nombre'] . '\', ' . $item['precio'] . ')">Añadir al carrito</button>';
            echo '</div>';
        }
        ?>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal()">&times;</span>
            <div id="carrito-contenido">
                <!-- Aquí se mostrará el contenido del carrito -->
            </div>
        </div>
    </div>

    <script src="Assets/js/script.js"></script>

    <div class="footer">
        <footer>
            <p>© POLLO CAMPERO, 2020</p>
            <a href="https://www.facebook.com/PolloCamperoElSalvador/" target="_blank"> <img
                    src="assets/img/facebook.svg">
            </a>
            <a href="https://twitter.com/camperosv" target="_blank"> <img src="assets/img/twitter.svg">
            </a>
            <a href="https://www.instagram.com/camperosv/?hl=en" target="_blank"> <img src="assets/img/instagram.svg">
            </a>
            <a href="https://www.youtube.com/channel/UCSwtzMCMAcElbNQZugelpSQ" target="_blank"> <img
                    src="assets/img/youtube.svg">
            </a>
        </footer>
    </div>

</body>

</html>