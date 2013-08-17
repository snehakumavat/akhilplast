<?php
	include("include/database.php");
	//$c_id=$_REQUEST['c_id3'];
 	
	if(isset($_REQUEST['s_add']))
	{
	
	$c_t1=$_POST['p_code'];
	$c_t2=$_POST['p_name'];
	$c_t3=$_POST['p_size'];
	$c_t4=$_POST['p_wt'];
	$c_t5=$_POST['p_color'];
	$c_t6=$_POST['p_shape'];
	$c_t7=$_POST['p_quant'];
	$c_t8=$_POST['shift'];
	$c_t9=date('Y-m-d - h:i:s');
	$c_t11=$_POST['st_avail'];
	
			
	  $c_qry="insert into stock (product_id,product_name,st_size,st_wt,st_color,shape,quantity,shift_type,st_date,st_avail) values('".$c_t1."','".$c_t2."','".$c_t3."','".$c_t4."','".$c_t5."','".$c_t6."','".$c_t7."','".$c_t8."','".$c_t9."','".$c_t11."')";	
	$c_res=mysql_query($c_qry);
	
	if($c_res)
	{
		header("location:view_stock.php?id=$r_id");
	}
	else
	{
		header("location:add_stock1.php");
	}
	}
	if(isset($_REQUEST['can']))
	{
		header("location:view_stock.php");
	} 

?>
<html>
<head>
<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(countryId) {		
		
		var strURL="st_require.php?p_id="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('pname').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	
</script>
<script type="text/javascript" language="javascript">
</script>

</head>

<body>
	
    <?php
	
	$query="select * from products";
	$exe=mysql_query($query);
	$res=mysql_fetch_array($exe);
	
	?>
		<div class="quotation"><center>Add New Stock</center></div>
        <div>
        <form name="form1" action="" method="post">
        <table class="q_clients11">
         <tr><td class="l_form">Product Code:</td>
             <td>
                	<select id="pcode" class="q_in22" name="p_code" onChange="getState(this.value)">
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
                </table>
              <div id="pname" class="y_clients">
              <table class="req">
                <tr><td class="l_form">Product Name:</td>
                <td>
                	<select id="pname1" class="q_in2"  name="p_name"><option value="0">Select</option></select>
                </td></tr>
                <tr><td class="l_form">Size:</td>
                <td><select  id="size" class="q_in2" name="p_size"><option value="0">Select</option></select></td></tr>
                
                <tr><td class="l_form">Weight:</td>
                <td><select id="quality" class="q_in2" name="p_wt"><option value="0">Select</option>
                
                </select></td></tr>
                				
                <tr><td class="l_form">Color:</td>
                <td><select  id="color" class="q_in2"  name="p_color"><option value="0">Select</option>
                
                </select></td></tr>
                <tr><td class="l_form">Shape:</td>
                <td><select  id="shape" class="q_in2" type="text" name="p_shape"><option value="0">Select</option>
                </select></td></tr>
                
                <tr><td class="l_form">Quantity:</td>
                <td><input id="quant" class="q_in2" type="text" name="p_quant" /></td></tr>
               
               	<tr><td class="l_form">Available Stock:</td>
                <td><input id="aquant" class="q_in2" type="text" name="st_avail" /></td></tr>
                
                <tr><td class="l_form">Shift Type:</td>
                <td><select  id="shift" class="q_in2" type="text" name="shift"><option value="0">                    Select</option>
                </select></td></tr>
                <tr><tr><td class="l_form">Date:</td>
                 <td>
                 <input id="s_date" class="q_in" type="text" name="s_date"/>
                	</select>
                 </td></tr>
                 
                 
                </table>
                 </div>
                  <br><br><br>
                 <div class="addclients_b">
         <input name="s_add" class="formbutton" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
         <input name="can" class="formbutton" value="Cancel" type="submit" />
        </div>
        
        </form>
</div>
    
    	
</body>
</html>
