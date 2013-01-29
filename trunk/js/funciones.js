$(document).ready(function() {
    $("#agregarImagen").fancybox({
        'type'			:   'ajax',
        'transitionIn'	:	'elastic',
        'transitionOut'	:	'elastic',
        'speedIn'		:	600, 
        'speedOut'		:	200, 
        'overlayShow'	:	false
    });
	
    $("#agregarDireccionCliente").fancybox({
        'type'			:   'ajax',
        'transitionIn'	:	'elastic',
        'transitionOut'	:	'elastic',
        'speedIn'		:	600, 
        'speedOut'		:	200, 
        'overlayShow'	:	false
    });
});

function actualizarProductosCarro() {
    $('#form_actualizar_carro').submit();
}

function finalizarPedido() {
    $('#frm-pedido').submit();
}
