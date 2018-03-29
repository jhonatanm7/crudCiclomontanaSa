<!DOCTYPE html>
<html>
<head>
	<title>Visitas CLientes</title>
</head>
<body>
	<h1>Hola Cliente Bienvenido</h1>
	
	<div id="PersonTableContainer"></div>





	<!--llamado a las librerias de Jquery y jtable -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css">	
	<script src="<?php echo base_url() ?>assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<link href="<?php echo base_url() ?>assets/plugins/jtable.2.4.0/themes/metro/blue/jtable.min.css" rel="stylesheet" type="text/css" />
	 
	<!-- Include jTable script file. -->

	<script src="<?php echo base_url() ?>assets/plugins/jtable.2.4.0/jquery.jtable.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jtable.2.4.0/localization/jquery.jtable.es.js" type="text/javascript"></script>

	<script type="text/javascript">
    $(document).ready(function () {
        $('#PersonTableContainer').jtable({
            title: 'Lista de clientes',
            actions: {
                listAction: '<?php echo site_url(); ?>/Visitas/listaCliente',
                createAction: '<?php echo site_url(); ?>/Visitas/insertarCliente',
                updateAction: '<?php echo site_url(); ?>/Visitas/editarCliente',
                deleteAction: '<?php echo site_url(); ?>/Visitas/eliminarCliente'
            },
            fields: {
            	idCliente: {
                    key: true,
                    list: false
                },
                nitCliente: {
                    title: 'Nit',
                    width: '20%'
                },
                nomClienteCom: {
                    title: 'Nombre Completo',
                    width: '30%'
                },
                dirCliente: {
                    title: 'Direccion ',
                    width: '20%'
                },
                telCliente: {
                    title: 'Telefono',
                    width: '10%', 
                },
				ciudadCliente: {
                    title: 'Ciudad',
                    width: '20%', 
                },
				deptoCliente: {
                    title: 'Departamento',
                    width: '20%', 
                },
				cupo: {
                    title: 'Cupo',
                    width: '20%', 
                },
				saldoCupo: {
                    title: 'Saldo Cupo',
                    width: '20%', 
                }
            }
        });
        $('#PersonTableContainer').jtable('load');
    });
</script>
</body>
</html>