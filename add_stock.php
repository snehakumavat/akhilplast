<?php
include("include/database.php");


	if(isset($_REQUEST['s_add']))
	{
	
	$c_t1=$_POST['p_code'];
	$c_t2=$_POST['p_name'];
	$c_t3=$_POST['p_size'];
	$c_t4=$_POST['p_wt'];
	$c_t5=$_POST['shift'];
	$c_t6=$_POST['p_color'];
	$c_t7=$_POST['p_shape'];
	$c_t8=$_POST['p_quant'];
	$c_t10=date('Y-m-d - h:i:s');
	
	echo  $c_qry="insert into stock(product_id,product_name,st_size,st_wt,shift_type,st_color,shape,quantity,st_date) values('".$c_t1."','".$c_t2."','".$c_t3."','".$c_t4."','".$c_t5."','".$c_t6."','".$c_t7."','".$c_t8."','".$c_t10."')";
		
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
function validateMyForm ( ) { 

    var isValid = true;
    if ( document.form1.cname.value == "" ) 
	{ 
	    alert ( "Please enter Client Name" ); 
	    isValid = false; 
    }
	    else if ( document.form1.compname.value == "") { 
            alert ( "please enter Company Name" ); 
            isValid = false;
		}
		 else if ( document.form1.address1.value == "" ) { 
            alert ( "Please enter Address1" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.city.value == "" ) { 
            alert ( "Please enter City" ); 
            isValid = false;
    } 
	
		/* else if ( document.form1.pin.value == "" ) { 
            alert ( "Please enter Pincode" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.email.value == "" ) { 
            alert ( "Please enter Email Address" ); 
            isValid = false;
    } 
	*/
		 else if ( document.form1.ph.value == "" ) { 
            alert ( "Please enter Phone Number" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.mo.value == "" ) { 
            alert ( "Please enter Mobile Number" ); 
            isValid = false;
    } 
    return isValid;
}
</script>

</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	?><br />
		<div class="quotation"><center>Add New Stock</center></div>
        <div > </div>
        <div>
        <form name="form1" action="" method="post">
        <table class="q_clients">
                <tr><td class="l_form">Product Code:</td><td>
               <select class="q_in2" type="text" name="p_code">
                    	<option value="0">Select</option>
                        <?php
    						$query="select * from products";
							$exe=mysql_query($query);
							while($res=mysql_fetch_array($exe))
							{
								echo "<option value='$res[1]'>$res[1]</option>";
							}
						?>  
                	</select>
                </td></tr>
                 <tr><td class="l_form">Product Name:</td>
                <td>
                	<select id="pname" class="q_in2" type="text" name="p_name">
                    	<option value="0">Select</option>
                        <?php
    						$query="select * from products";
							$exe=mysql_query($query);
							while($res=mysql_fetch_array($exe))
							{
								echo "<option value='$res[2]'>$res[2]</option>";
							}
						?>  
                	</select>
                </td></tr>
                <tr><td class="l_form">Size:</td>
                <td>
                <select id="size" class="q_in" name="p_size"/>
                <option value="0">Select</option>
                        <?php
    						$query="select * from products";
							$exe=mysql_query($query);
							while($res=mysql_fetch_array($exe))
							{
								echo "<option value='$res[3]'>$res[3]</option>";
							}
						?>  
                	</select>
                </td></tr>
                 <tr><td class="l_form">Weight:</td>
                 <td>
                 <select id="wt" class="q_in" name="p_wt"/>
                 <option value="0">Select</option>
                        <?php
    						$query="select * from products";
							$exe=mysql_query($query);
							while($res=mysql_fetch_array($exe))
							{
								echo "<option value='$res[4]'>$res[4]</option>";
							}
						?>  
                	</select>
                 </td></tr>  
                 <tr><td class="l_form">Shift Type:</td>
                 <td>
                 <select type="shift" class="q_in" name="shift"/>
                 <option value="0">Select</option>
                        <?php
    						$query="select * from stock";
							$exe=mysql_query($query);
							while($res=mysql_fetch_array($exe))
							{
								echo "<option value='$res[9]'>$res[9]</option>";
							}
						?>  
                	</select>
                 </td></tr>                                
                				
                <tr><td class="l_form">Color:</td><td>
                <select id="color" class="q_in" type="text" name="p_color"/> 
                <option value="0">Select</option>
                        <?php
    						$query="select * from products";
							$exe=mysql_query($query);
							while($res=mysql_fetch_array($exe))
							{
								echo "<option value='$res[5]'>$res[5]</option>";
							}
						?>  
              	</select>  
                </td></tr>
                <tr><td class="l_form">Shape:</td><td>
                <select id="shape" class="q_in" type="text" name="p_shape"/> 
                <option value="0">Select</option>
                        <?php
    						$query="select * from products";
							$exe=mysql_query($query);
							while($res=mysql_fetch_array($exe))
							{
								echo "<option value='$res[6]'>$res[6]</option>";
							}
						?>  
                	</select>
                </td></tr>
                <tr><td class="l_form">Quantity:</td>
                <td><input id="quant" class="q_in" type="text" name="p_quant"/>
                
                </td></tr>
      
                  <tr><td class="l_form">Date:</td>
                 <td>
                 <input id="s_date" class="q_in" type="text" name="s_date"/>
                	</select>
                 </td></tr>
                 
                 
                </table>
        <div class="addclients_b">
         <input name="s_add" class="formbutton" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
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
