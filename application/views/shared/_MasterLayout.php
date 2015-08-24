<?php require "application/views/shared/commonLabels.php"; ?>
<?php require "application/models/_models.php"; ?>
<?php require "application/accesscontrol/permissions.php"; ?>

<!doctype html>
<html>

	<head>
    
		<title><?php echo "LTSS - {$page}" ?></title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

        <?php require '_StylesPartial.php';?>
        <?php require '_ScriptsPartial.php';?>
        
	    <!-- Mobile Specific Metas -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
	</head>
    
    <body id="body">
        <div id="main-layout" class="container ">
            <div id="layoutWrapper">
            	<div  id="printArea">
                
                    <!-- Global Header -->
                    <header id="mainHeader-MenuBar">
                        <div class="header">
                            <?php require '_HeaderPartial.php'; ?>
                        </div>
                    </header>
        
                    <!-- Main Body -->
                    <div id="body-content">
                        <!-- Main Content Area -->
                        <?php 
							if (!empty($layout)) {
								require "application/views/shared/{$layout}.php";
							} else {
								require "application/views/areas/{$area}/{$page}.php";
							}


                            //Common Dialog Modals
                            require "application/views/shared/_NewMessagePartial.php";

							require '_AdditionalScriptsPartial.php'; 
							
							if (!empty($Script)) {
								echo $Script;
							}

						?>
                        
                    </div>
                    
                </div>
            </div>
        </div>
	</body>
    
</html>
