<?php
error_reporting(0);
include("session.php");

	include("include/database1.php");
	$c_up=$_REQUEST['c_id2'];
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
<?php
	
	if(isset($_REQUEST['c_up']))
	{	
		$c=$_REQUEST['c_id2'];
	$t1=$_POST['p_code'];
	$t2=$_POST['p_name'];
	$t3=$_POST['p_size'];
    $t5=$_POST['p_wt'];	
	$t6=$_POST['p_color'];
	$t7=$_POST['p_shape'];
	$t8=$_POST['p_quant'];	
	$t9=$_POST['remark'];	
		
		 $qry_up="update products SET p_code='".$t1."', p_name='".$t2."', p_size='".$t3."', p_wt='".$t5."', p_color='".$t6."', p_shape='".$t7."', p_quant='".$t8."' remark='".$t9."' where id=".$c;
		$res_up=mysql_query($qry_up);
		if($res_up)
		{
			header("location:clients.php");
		}
		else
		{
			echo "error";
		}
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
		<div class="quotation"><center>Update Product Details</center></div>
        <div>
        
         <form name="form1" action="" method="post">
        <table class="q_clients">
                <tr><td class="l_form">Product Code:</td><td><input id="pcode" class="q_in" type="text" name="p_code"  value="<?php echo $c_row[1]; ?>" /></td></tr>
                <tr><td class="l_form">Product Name:</td><td><input id="pname" class="q_in" type="text" name="p_name" value="<?php echo $c_row[2]; ?>" /></td></tr>
                <tr><td class="l_form">Size:</td><td><input id="size" class="q_in" name="p_size" value="<?php echo $c_row[3]; ?>" /></td></tr>
                 <tr><td class="l_form">Weight:</td><td><input id="wt" class="q_in" name="p_wt" value="<?php echo $c_row[4]; ?>" /></td></tr>             
                				
                <tr><td class="l_form">Color:</td><td><input id="color" class="q_in" type="text" name="p_color" value="<?php echo $c_row[5]; ?>" /></td></tr>
                <tr><td class="l_form">Shape:</td><td><input id="shape" class="q_in" type="text" name="p_shape" value="<?php echo $c_row[6]; ?>" /></td></tr>
                <tr><td class="l_form">Quantity:</td><td><input id="quant" class="q_in" type="text" name="p_quant" value="<?php echo $c_row[7]; ?>" /></td></tr>
               
                </tr>     
            
                 <tr><td class="l_form">Remark:</td><td><textarea id="remark" class="q_add" name="remark" value="<?php echo $c_row[8]; ?>" ></textarea></td></tr>
                </table>
        <div class="addclients_b">
         <input name="c_up" class="formbutton" value=" Update " type="submit" />
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
