<?php
include("include/database.php");
error_reporting(0);
include("session.php");

	if(isset($_REQUEST['c_id2']))
	{
	$id=$_REQUEST['c_id2'];
	$c_qry="select * from stock where st_id=".$id;
	$c_res=mysql_query($c_qry);
	$result=mysql_fetch_array($c_res);
	//print_r($result);
	}
	if(isset($_POST['s_up']))
	{
	$c_t1=$_POST['avail_id'];
	$c_t2=$_POST['pname'];
	$c_t4=$_POST['size'];
	$c_t8=$_POST['qunt'];
	$c_t6=$_POST['shifttype'];	
 $c_t7=date('Y-m-d - h:i:s');	

	$c_qry="update `stock` set `st_id`='".$c_t1."', `product_name`='".$c_t2."',`st_size`='".$c_t4."',`quantity`='".$c_t8."', `shift_type`='".$c_t6."', `st_date`='".$c_t7."' where st_id=".$id;

	$c_res=mysql_query($c_qry);
	if($c_res)
	{
		header("location:view_stock.php");
	}
	else
	{
		header("location:add_stock.php");
	}
	}
	if(isset($_REQUEST['can']))
	{
		header("location:view_stock.php");
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Akhil Plast</title>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" language="javascript">

</script>

</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	?><br />
		<div class="quotation"><center>Update Stock Details</center></div>
        <div > </div>
        <div>
        <form name="form1" action="" method="post">
        
        <table class="addpay_tab">
                <tr><td class="l_form"> Stock ID:</td><td><input id="id" class="q_in" type="text" name="avail_id" value="<?php echo $result[0];?>" /></td></tr>
                <tr><td class="l_form">Product Name:</td><td><input id="nm1" class="q_in" type="text" name="pname" value="<?php echo $result[3] ;?>" /></td></tr>
                <tr><td class="l_form">Size:</td><td><input type="text" id="cate" class="q_in" name="size" value="<?php echo $result[4];?>" /></td></tr>
                 <tr><td class="l_form">Quantity:</td><td><input type="text" id="qunt" class="q_in" name="qunt" value="<?php echo $result[7];?>" /></td></tr>		
                 <tr><td class="l_form">Shift Type:</td><td><input type="text" id="qunt" class="q_in" name="shifttype" value="<?php echo $result[9];?>" /></td></tr>		
                 <tr><td class="l_form">Date:</td><td><input type="text" id="qunt" class="q_in" name="date" value="<?php echo $result[10];?>" /></td></tr>		
                
                 			
                </table>
                
                
        <div class="addemp_button">
         <input name="s_up" class="formbutton" value=" Update " type="submit" />
         <input name="can" class="formbutton" value="Back" type="submit" />
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