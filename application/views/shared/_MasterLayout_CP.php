<!doctype html>
<html id="html">

	<head>
    
		<title><?php echo "LTSS - {$page}" ?></title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

        <?php require '_StylesPartial.php';?>
        <?php require '_ScriptsPartial.php';?>
        
	    <!-- Mobile Specific Metas -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
	</head>
    
    <body id="body" class="font-size-reg">
        <div id="main-layout">
            <div id="layoutWrapper">
                <div  id="printArea">
                
                    <!-- Global Header -->
                    <header id="mainHeader-MenuBar" class="clearfix">
                        <div class="container">
                            <div class="sixteen columns alpha omega">
                                <?php require '_HeaderPartial_CP.php'; ?>
                            </div>
                        </div>
                    </header>

                    <!-- Main Body -->
                    <div id="body-content" class="container">
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
                    
                    <!--Footer Area -->
                    <footer class="container" id="Footer">
                    	<?php require '_FooterPartial_CP.php'; ?>
		            </footer> 
                    
                </div>
            </div>
        </div>
	</body>
    
</html>
