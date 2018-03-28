<!DOCTYPE html>
<html>
<head>
    <title>Lista Vendedor</title>
</head>
<body>
    <h1>Lista Vendedores Bienvenido</h1>
    
    <div id="VendedorTableContainer"></div>




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
        $('#VendedorTableContainer').jtable({
            title: 'Lista de Vendedores',
            actions: {
                listAction: '<?php echo site_url(); ?>/Vendedor/listaVendedor',
                createAction: '<?php echo site_url(); ?>/Vendedor/insertarVendedor',
                updateAction: '<?php echo site_url(); ?>/Vendedor/editarVendedor',
                deleteAction: '<?php echo site_url(); ?>/Vendedor/eliminarVendedor'
            },
            fields: {
                idVendedor: {
                    key: true,
                    list: false
                },
                nomVendedor: {
                    title: 'Nombre Completo',
                    width: '40%'
                },
                telVendedor: {
                    title: 'Telefono ',
                    width: '20%'
                }
            }
        });
        $('#VendedorTableContainer').jtable('load');
    });
</script>
</body>
</html>