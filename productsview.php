<?php
	include("include/database1.php");
	error_reporting(0);
include("session.php");
	$c_up=$_REQUEST['c_id3'];
	$c_qry_f="select * from products where id=".$c_up;
	$c_res_f=mysql_query($c_qry_f);
	$c_row=mysql_fetch_array($c_res_f);
?>
<?php
	if(isset($_REQUEST['can']))
	{
		header("location:clients.php");
	}
?>
<html>
<head>
<title>Akhil Plast</title>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	?><br />
		<div class="quotation"><center>Product Details</center></div>
        <div>
        <form action="" method="post">
        <table class="q_clients">
                <tr><td class="l_form">Product Code:</td><td><label><?php echo $c_row[1]; ?></label></td></tr>
                <tr><td class="l_form">Product Name:</td><td><label><?php echo $c_row[2]; ?></label></td></tr>
                
                <tr><td class="l_form">Size:</td><td><label><?php echo $c_row[3]; ?></label></td></tr>
                 <tr><td class="l_form" >Weight:</td><td><label><?php echo $c_row[4]; ?></label></td></tr>    
                
                <tr><td class="l_form">Color:</td><td><label><?php echo $c_row[5]; ?></label></td></tr>
                <tr><td class="l_form">Shape:</td><td><label><?php echo $c_row[6]; ?></label></td></tr>
                <tr><td class="l_form">Quantity:</td><td><label><?php echo $c_row[7]; ?></label></td></tr>
                
                <tr><td class="l_form">Remark:</td><td><label><?php  echo $c_row[8]; ?></label></td></tr>
               
                
                </table>
        <div class="addclients_b">
       
         <input name="can" class="formbutton" value="Cancel" type="submit" />
        </div>
        
        </form>
    </div>
    </div>
        
    
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
