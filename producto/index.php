<?php
    require_once '../shared/header.php';
?>

<section id="detalle_producto" class="container_sombreado">
    <h3 class="text-center colorMarino">Nombre del producto</h3>
    <hr>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-2 producto">
            <img src="https://blazetv.es/wp-content/uploads/2018/12/PantanosPortada.png" alt="Producto" />
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pr-4">
            <h3 class="text-center colorDarkBlue">Descripción</h3>

            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, fuga error! Recusandae commodi adipisci
                corrupti maiores? Impedit nostrum sit consequatur, iste et ut quod, ratione consequuntur corrupti sequi
                a blanditiis? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem labore asperiores,
                reiciendis laborum
                voluptates nihil blanditiis fugiat non velit corrupti iure molestiae vel eligendi debitis eius unde
                ratione numquam dolores
            </p>

            <p>Precio: 5000 colones</p>

            <button class="btn btn-primary">Comprar</button>
        </div>
    </div>

</section>

<?php require_once '../shared/footer.php'; ?>
<script src="/assets/js/index.js?v=<?php echo date('his'); ?>"></script>

</body>

</html>