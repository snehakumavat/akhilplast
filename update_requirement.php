<?php
	include("include/database.php");
	$c_id=$_REQUEST['c_id2'];
 	
	if(isset($_REQUEST['p_add']))
	{
	$c_t1=$_POST['p_code'];
	$c_t2=$_POST['p_name'];
	$c_t3=$_POST['p_size'];
	$c_t4=$_POST['p_wt'];
	$c_t5=$_POST['p_color'];
	$c_t6=$_POST['p_shape'];
	$c_t7=$_POST['p_quant'];
	$c_t8=$_POST['p_aquant'];
	$c_t9=$_POST['p_rquant'];
	$c_t10=$_POST['remark'];
		
 	$c_qry="update requirement set r_code='".$c_t1."',r_name='".$c_t2."',r_size='".$c_t3."',r_weight='".$c_t4."',r_color='".$c_t5."',r_shape='".$c_t6."',r_quantity='".$c_t7."',r_aquant='".$c_t8."',r_rquant='".$c_t9."',r_remark='".$c_t10."' where c_id=".$c_id;
	 
	$c_res=mysql_query($c_qry);
	if($c_res)
	{
		header("location:view_requirement.php?id=$c_id1");
	}
	else
	{
		header("location:view_requirement.php");
	}
	}
	if(isset($_REQUEST['can']))
	{
		header("location:view_requirement.php");
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
		
		var strURL="require.php?p_id="+countryId;
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
function validateMyForm ( ) 
{ 
/*
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
	
	 else if ( document.form1.pin.value == "" ) { 
            alert ( "Please enter Pincode" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.email.value == "" ) { 
            alert ( "Please enter Email Address" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.ph.value == "" ) { 
            alert ( "Please enter Phone Number" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.mo.value == "" ) { 
            alert ( "Please enter Mobile Number" ); 
            isValid = false;
    } 
    return isValid;*/
}
</script>

</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("include/database.php");
	include("header.php");
	
	$id=$_REQUEST['c_id2'];
	$query="select * from requirement where c_id=".$id;
	$exe=mysql_query($query);
	$req=mysql_fetch_array($exe);
	
	?><br />
		<div class="quotation"><center>Update Requirement</center></div>
        <div>
        <form name="form1" action="" method="post">
        <table class="q_clients11">
         <tr><td class="l_form">Product Code:</td>
             <td>
             
                	<select id="pcode" class="q_in22" name="p_code" onChange="getState(this.value)" >
                    	
                        <?php
    						$query="select * from products";
							$exe=mysql_query($query);
							while($res=mysql_fetch_array($exe))
							{
								if($res[1]==$req[3])
								echo "<option value='$res[1]' selected>$res[1]</option>";
								else
								echo "<option value='$res[1]'>$res[1]</option>";
							}
						?>  
                	</select>
                </td></tr>
                </table>
              <div id="pname" class="q_clients">
              <table class="req">
                <tr><td class="l_form">Product Name:</td>
                <td>
                	<select id="pname1" class="q_in2"  name="p_name" ><option value="0"><?php echo $req[4];?></option></select>
                </td></tr>
                <tr><td class="l_form">Size:</td>
                <td><select  id="size" class="q_in2" name="p_size"><option value="0"><?php echo $req[5];?></option></select></td></tr>
                
                <tr><td class="l_form">Weight:</td>
                <td><select id="quality" class="q_in2" name="p_wt"><option value="0"><?php echo $req[6];?></option>
                
                </select></td></tr>
                				
                <tr><td class="l_form">Color:</td>
                <td><select  id="color" class="q_in2"  name="p_color"><option value="0"><?php echo $req[7];?></option>
                
                </select></td></tr>
                <tr><td class="l_form">Shape:</td>
                <td><select  id="shape" class="q_in2" type="text" name="p_shape"><option value="0"><?php echo $req[8];?></option>
                </select></td></tr>
                
                <tr><td class="l_form">Quantity:</td>
                <td><input id="quant" class="q_in2" type="text" name="p_quant" value="<?php echo $req[9];?>" /></td></tr>
               
               	<tr><td class="l_form">Available Quantity:</td>
                <td><input id="aquant" class="q_in2" type="text" name="p_aquant" value="<?php echo $req[10];?>" /></td></tr>
                
                <tr><td class="l_form">Remaining Quantity:</td>
                <td><input id="rquant" class="q_in2" type="text" name="p_rquant" value="<?php echo $req[11];?>"/></td></tr>
               
                <tr><td class="l_form">Remark:</td>
                <td><input id="rem" class="q_in2" name="remark" type="text" value="<?php echo $req[12];?>"/> </td></tr>
                 
                </table>
                 </div>
                 <div class="addclients_b">
         <input name="p_add" class="formbutton" value=" Update " type="submit" onClick="javascript:return validateMyForm();" />
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
