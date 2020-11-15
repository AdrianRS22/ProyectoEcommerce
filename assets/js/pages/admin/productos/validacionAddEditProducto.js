$("#nombreProducto").parsley({
    required: true,
    requiredMessage: "El nombre del producto es requerido",
});

$("#descripcionProducto").parsley({
    required: true,
    requiredMessage: "La descripción del producto es requerida",
});

$("#precioProducto").parsley({
    required: true,
    requiredMessage: "El precio del producto es requerido",
});

$("#categoriaProducto").parsley({
    required: true,
    requiredMessage: "La categoría del producto es requerida",
});

$("#subcategoriaProducto").parsley({
    required: true,
    requiredMessage: "La subcategoría del producto es requerida",
});