<?php
	include("include/database.php");
	
 	$product= $_GET['p_id'];
	$query="SELECT * FROM stock WHERE product_id='$product'";
	$result=mysql_query($query) or die(mysql_error());
?>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<table>
 <tr>
 	<td class="l_form">Product Name:</td>
    <td><select id="pname1" class="q_in2" name="p_name">            	
		<option>Select</option>
			<?php 	while($row=mysql_fetch_array($result)) 
			{ ?>
			<option value="<?php echo $row[3];?>">
			<?php echo $row[3];?>	  
        </option>
			<?php } ?>
	</select>
</td></tr>
<?php
  $query="SELECT * FROM stock WHERE product_id='$product'";
	$result=mysql_query($query) or die(mysql_error());
?>
	<tr><td class="l_form">Size:</td>
                <td><select  id="size" class="q_in2" name="p_size">
                <option value="0">Select</option>
                 <?php 	while($row=mysql_fetch_array($result)) 
				 { ?>
					<option value="<?php echo $row[4];?>">
					<?php echo $row[4];?>	  
        			</option>
				 <?php } ?>
                </select></td></tr>
                
  <?php
    $query="SELECT * FROM stock WHERE product_id='$product'";
	$result=mysql_query($query) or die(mysql_error());
  ?>
                
                <tr><td class="l_form">Weight:</td>
                <td><select id="quality" class="q_in2" name="p_qual">
                <option value="0">Select</option>
                 <?php 	while($row=mysql_fetch_array($result)) 
				 { ?>
					<option value="<?php echo $row[5];?>">
					<?php echo $row[5];?>	  
        			</option>
				 <?php } ?>
                </select></td></tr>
  <?php
    $query="SELECT * FROM stock WHERE product_id='$product'";
	$result=mysql_query($query) or die(mysql_error());
  ?>
                				
                <tr><td class="l_form">Color:</td>
                <td><select  id="color" class="q_in2" type="text" name="p_color"><option value="0">Select</option>
                <?php 	while($row=mysql_fetch_array($result)) 
			{ ?>
			<option value="<?php echo $row[6];?>">
			<?php echo $row[6];?>	  
        </option>
			<?php } ?>
                </select></td></tr>
                <?php
    			$query="SELECT * FROM stock WHERE product_id='$product'";
				$result=mysql_query($query) or die(mysql_error());
  				?>
                <tr><td class="l_form">Shape:</td>
                <td><select  id="shape" class="q_in2" type="text" name="p_shape"><option value="0">Select</option>
                 <?php 	while($row=mysql_fetch_array($result)) 
			{ ?>
			<option value="<?php echo $row[8];?>">
			<?php echo $row[8];?>	  
        </option>
			<?php } ?>
                </select></td></tr>
                
                
                
               <tr><td class="l_form">Quantity:</td>
                <td><input id="quant" class="q_in2" type="text" name="p_quant" /></td></tr>
               
                 <?php
    			$query="SELECT * FROM stock WHERE product_id='$product'";
				$result=mysql_query($query) or die(mysql_error());
  				?>	
               <tr><td class="l_form">Available Stock:</td>
                <td> <input type="text" value="<?php ?>" />
                   
                </td></tr>
                <?php
    			$query="SELECT * FROM stock WHERE product_id='$product'";
				$result=mysql_query($query) or die(mysql_error());
  				?>	
                 <tr><td class="l_form">Shift Type:</td>
                <td><select  id="shift" class="q_in2" type="text" name="shift">
                <option value="0">Select</option>
                 <?php 	while($row=mysql_fetch_array($result)) 
			    { ?>
			     <option value="<?php echo $row[9];?>">
			     <?php echo $row[11];?>	  
                </option>
			      <?php } ?>
                </select></td></tr>
                <tr><tr><td class="l_form">Date:</td>
                 <td>
                 <input id="s_date" class="q_in" type="text" name="s_date"/>
                	</select>
                 </td></tr>
                 
                
                </table>
                
                
                
                 <div class="san">
         <input name="p_add" class="formbutton" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
         <input name="can" class="formbutton" value="Cancel" type="submit" />
        </div>
        
                