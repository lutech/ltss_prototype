<?php
    require_once "application/views/shared/commonLabels.php";
    require_once "application/models/_models.php";
    require_once "application/accesscontrol/permissions.php";
?>

<!doctype html>
<html>

	<head>
    
		<title><?php echo "LTSS - {$page}" ?></title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

        <?php require_once '_StylesPartial.php';?>
        <?php require_once '_ScriptsPartial.php';?>
        
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
                            <?php require_once '_HeaderPartial.php'; ?>
                        </div>
                    </header>
        
                    <!-- Main Body -->
                    <div id="body-content">
                        <!-- Main Content Area -->
                        <?php 
							if (!empty($layout)) {
                                require_once "application/views/shared/{$layout}.php";
							} else {
                                require_once "application/views/areas/{$area}/{$page}.php";
							}


                            //Common Dialog Modals
                        require_once "application/views/shared/_NewMessagePartial.php";
                        require_once '_AdditionalScriptsPartial.php';
                        require_once 'application/models/_db.php"';
							
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
