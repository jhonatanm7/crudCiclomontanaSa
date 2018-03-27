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
                createAction: '/GettingStarted/CreatePerson',
                updateAction: '/GettingStarted/UpdatePerson',
                deleteAction: '/GettingStarted/DeletePerson'
            },
            fields: {
            	idCliente: {
                    key: true,
                    list: false
                },
                nitCliente: {
                    title: 'Nit',
                    width: '40%'
                },
                nomClienteCom: {
                    title: 'Nombre Completo',
                    width: '40%'
                },
                dirCliente: {
                    title: 'Direccion ',
                    width: '20%'
                },
                telCliente: {
                    title: 'Telefono',
                    width: '30%', 
                }
            }
        });
        $('#PersonTableContainer').jtable('load');
    });
</script>
</body>
</html>