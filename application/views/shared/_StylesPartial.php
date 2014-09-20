<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/Content/jquery.dataTables.css"/>
<?php 
	if(isset($_COOKIE['role']))	{
		if ( $_COOKIE['role'] == 'client'){
				echo '<link rel="stylesheet" type="text/css" href="'.base_url().'application/Content/ltss_clientportal.css"/>
						<link rel="stylesheet" type="text/css" href="'.base_url().'application/Content/Grid_CP.css"/>
					';
			} else {
				echo  '
						<link rel="stylesheet" type="text/css" href="'.base_url().'application/Content/ltss.css"/>
						<link rel="stylesheet" type="text/css" href="'.base_url().'application/Content/Grid.css"/>
					';
			}
	} else {
		echo '
				<link rel="stylesheet" type="text/css" href="'.base_url().'application/Content/ltss.css"/>
				<link rel="stylesheet" type="text/css" href="'.base_url().'application/Content/Grid.css"/>
			';
	}
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/Content/ltss_legacy.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/Content/ie10.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/Content/ltss_loader.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/Content/Kendo Q1 2014/kendo.common.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/Content/Kendo Q1 2014/kendo.default.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/Content/themes/base/jquery-ui-1.10.2.custom.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/Content/jquery.fancybox.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/Content/jquery.jscrollpane.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/Content/font-awesome-ie7.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/Content/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/Content/jquery.qtip.min.css"/>

