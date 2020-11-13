<?php
    require_once 'shared/header.php';
?>

<div class="row">
    <div class="col-lg-3">
        <div class="widget catagory">
            <aside id="show_side_bar" class="container_sombreado">
                <h6 class="widget-title pt-2 mb-30 text-center colorMarino">Categor&iacute;as</h6>

                <div class="categories-menu">
                    <ul id="menu-categorias" class="menu-content collapse show">
                    
                    </ul>
                </div>
            </aside>

        </div>
    </div>

    <section class="col-lg-9">

        <div id="contenido-productos" class="container_sombreado">
        
        </div>

    </section>
</div>

<?php require_once 'shared/footer.php'; ?>
<script src="/assets/js/pages/index.js?v=<?php echo date('his'); ?>"></script>

</body>

</html>