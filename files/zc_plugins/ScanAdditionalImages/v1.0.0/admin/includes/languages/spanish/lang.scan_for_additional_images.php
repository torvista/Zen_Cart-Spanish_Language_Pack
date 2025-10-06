<?php // Spanish Language Pack for Zen Cart: https://github.com/torvista/Zen_Cart-Spanish_Language_Pack

$define = [
    'HEADING_TITLE' => 'Buscar y Registrar Imágenes Adicionales de Productos',
    'TEXT_MAIN' => '<p>En Zen Cart un producto tiene una imagen principal y imágenes adicionales.</p>
<p>Tiene dos maneras de asignar imágenes adicionales a un producto:</p>
<ol><li>Directamente en la página de edición del producto, un producto a la vez, donde puede asignar (y eliminar) una imagen adicional, sin preocuparse por el nombre del archivo ni cambiar el nombre de las imágenes para que conformen a un patrón. Esto requiere que la configuración de <strong>Admin-&gt;Configuration-&gt;Images-&gt;Additional Images filename matching pattern</strong> esté establecida en <strong>Database</strong>.</li>
<li>Mediante FTP, nombrando todas las imágenes adicionales según una <a href="https://docs.zen-cart.com/user/images/image_filename_conventions/" target="_blank">convención de nomenclatura</a> prescrita.<br>Así Zen Cart se muestran las imágenes adicionales <strong>automáticamente</strong> junto con la imagen principal.</li></ol>
<p>Esta herramienta está diseñada para cambiar del método 2 al método 1 escaneando el directorio/subdirectorios de imágenes en busca de imágenes, registrándolas en la base de datos, asignadas al producto correspondiente.<br>
Utiliza el nombre de la imagen principal (p. ej., my-main-product-image.jpg) como referencia y asigna otras imágenes que encuentra con <a href="https://docs.zen-cart.com/user/images/image_filename_conventions/" target="_blank">nombres coincidentes con sufijos</a> (p. ej., my-main-product-image_anytext.jpg) al ese producto como imágenes adicionales.<br>
Se crean entradas en la base de datos que permiten gestionar todas las imágenes del producto desde la página de edición del producto.<br>No se modifican ni se suben imágenes.',
    'TEXT_TIP_1' => 'Consejo: Puede ejecutar esta herramienta varias veces. Omitirá las asignaciones duplicadas de imágenes de productos, por lo que es seguro volver a ejecutarlo si agrega más imágenes más adelante, como después de que un proveedor proporcione actualizaciones... pero recuerde, la herramienta solo selecciona imágenes cuyos nombres de archivo coinciden con las convenciones de nomenclatura (vea los enlaces anteriores).',
    'TEXT_STEP_1' => 'Paso 1: Realice una copia de seguridad de sus datos',
    'TEXT_STEP_1_DETAIL' => 'Antes de continuar, asegúrese de tener una copia de seguridad completa de su base de datos e imágenes. Esta herramienta no es destructiva, pero es un buen momento para asegurarse de tener una copia de seguridad de todo.',
    'TEXT_STEP_2' => 'Paso 2: Iniciar Scan',
    'TEXT_STEP_2_DETAIL' => 'Haga clic en el botón "Iniciar Scan" a continuación para comenzar el proceso.',
    'TEXT_STEP_3' => 'Paso 3: Finalización',
    'TEXT_STEP_3_DETAIL' => 'Verá en el área de Registro de mensajes cuando el proceso se haya completado. Luego, verifica que las imágenes de su producto y categoría se muestren correctamente en la tienda.<br><br>
Recuerda que, para usar estas imágenes registradas en la base de datos, la configuración de <strong>Admin-&gt;Configuration-&gt;Images-&gt;Additional Images filename matching pattern</strong> debe estar establecida en <strong>Database</strong>. Si es la primera vez que usas esta herramienta, asegúrate de cambiarla; de lo contrario, no podrás administrar las imágenes adicionales en la página de edición del producto.',
    'BUTTON_START_SCANNING' => 'Iniciar Scan',
    'TEXT_SETTINGS' => 'Configuración',
    'TEXT_TOGGLE_SECTION' => '(Mostrar/Esconder)',
    'TEXT_START_AT' => 'Iniciar en (por defecto 0)',
    'TEXT_BATCH_SIZE' => 'Cantidad de Productos en cada paso (por defecto 10, máximo 50)',
    'TEXT_SETTINGS_HELP' => 'Ajuste solo si es necesario. Los valores se leen una vez al presionar <strong>Iniciar Scan</strong>. Los pasos más pequeños son más eficientes y evitan tiempos de espera.',
    'TEXT_PROGRESS' => 'Progreso',
    'TEXT_TOTAL_PRODUCTS_WITH_IMAGES' => 'Total de Productos con Imágenes',
    'TEXT_CUMULATIVE_PROCESSED' => 'Total procesadas',
    'TEXT_CUMULATIVE_INSERTED' => 'Total de Imágenes Adicionales insertadas',
    'TEXT_PRODUCTS_REMAINING' => 'Productos restantes por escanear',
    'TEXT_THIS_BATCH_FOUND' => 'Este lote - Registros encontrados',
    'TEXT_THIS_BATCH_INSERTED' => 'Este lote - Imágenes insertadas',
    'TEXT_MESSAGE_LOG' => 'Mensajes',
    'TEXT_RUNNING' => 'En ejecución...',
    'TEXT_IDLE' => 'Inactivo',

    'TEXT_STARTED_WITH' => 'Iniciado con start_at=',
    'TEXT_WITH_BATCH_SIZE' => 'batch_size=',
    'ERROR_EMPTY_RESPONSE' => 'Respuesta vacía/inválida (2xx). Cancelando.',
    'TEXT_ERROR' => 'ERROR: ',
    'TEXT_SERVER_ENDED' => 'El servidor solicitó la finalización.',
    'TEXT_MISSING_RESPONSE' => 'Falta información restante en la respuesta. Cancelando.',
    'TEXT_WARNING' => 'ADVERTENCIA: ',

    'TEXT_STATUS_FOUND' => 'Lote completado. Encontrado: ',
    'TEXT_STATUS_PRODUCTS' => 'Productos inspeccionados: ',
    'TEXT_STATUS_IMAGES' => 'Imágenes insertadas: ',
    'TEXT_STATUS_REMAINING' => 'Restantes: ',

    'TEXT_COMPLETED' => 'Trabajo completado (restante = 0).',
    'TEXT_NETWORK_ERROR' => 'Error de red, tiempo de espera agotado o solicitud cancelada. (Error HTTP). Pruebe lotes más pequeños.',
    'TEXT_HTTP_ERROR' => 'Error HTTP',
    'TEXT_CANCELLED' => 'Cancelado por el usuario.',
];

return $define;
