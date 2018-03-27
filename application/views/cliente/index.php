<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hola Cliente Bienvenido</h1>


	<!--llamado a las librerias de Jquery y jtable -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>/asstes/plugins/jquery-ui-1.12.1.custom/jquery-ui-min.css">
	<script src="<?php echo base_url() ?>/asstes/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<!-- Include one of jTable styles. -->
	<link href="<?php echo base_url() ?>/asstes/plugins/jtable.2.4.0/themes/metro/blue/jtable.min.css" rel="stylesheet" type="text/css" />
	 
	<!-- Include jTable script file. -->
	<script src="<?php echo base_url() ?>/asstes/plugins/jtable.2.4.0/jquery.jtable.min.js" type="text/javascript"></script>

	<script type="text/javascript">
    $(document).ready(function () {
        $('#PersonTableContainer').jtable({
            title: 'Table of people',
            actions: {
                listAction: '/GettingStarted/PersonList',
                createAction: '/GettingStarted/CreatePerson',
                updateAction: '/GettingStarted/UpdatePerson',
                deleteAction: '/GettingStarted/DeletePerson'
            },
            fields: {
                PersonId: {
                    key: true,
                    list: false
                },
                Name: {
                    title: 'Author Name',
                    width: '40%'
                },
                Age: {
                    title: 'Age',
                    width: '20%'
                },
                RecordDate: {
                    title: 'Record date',
                    width: '30%',
                    type: 'date',
                    create: false,
                    edit: false
                }
            }
        });
    });
</script>
</body>
</html>