<?php
include("include/database.php");


?>


<?php
$per_page = 20; 

if($_GET)
{
  $page=$_GET['page'];
}
	
	$start = ($page-1)*$per_page;
	$c_qry_f="select * from stock order by st_id desc limit $start,$per_page";
	
	$c_res_f=mysql_query($c_qry_f);
		
?>
<link href="id_popup/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="id_popup/jquery.js" type="text/javascript"></script>
<script src="id_popup/facebox.js" type="text/javascript"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
		 
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
	
	 
</script>
        <table class="emp_tab">
        <tr class="emp_header">
         <td>Product_id</td>
		 <td width="250">Product Name</td>
        <td width="160">Shift</td>
        <td width="160">Size</td>
          <td>Quantity</td>	        
        <td width="100">Action</td>
        </tr>
<?php
        if(mysql_num_rows($c_res_f)==0)
		{
		?>
        <tr class='emp_header'>
         <td colspan='6' align="center"><h3> No Data available</h3></td>
        </tr>
		
		<?php
        }
		?>
        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td width='160'>";
		echo $c_row[2];
		echo "</td>";
        echo "<td width='240'>";
		echo $c_row[3];
		echo "</td>";
		echo "<td>";
		echo $c_row[9];
		echo "</td>";
		
		echo "<td>";
		echo $c_row[4];
		echo "</td>";
		echo "<td>";
		echo $c_row[7];
		echo "</td>";
        echo "<td width='100' class='print'>";
		echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()'><img src='imgs1/green_delete.png' height='20px' width='20px' /></a>&nbsp;<a rel='facebox' href='updatestock.php?c_id2=$c_row[0]'><img src='imgs1/updt.png' height='20px' width='20px' /></a>&nbsp;<a rel='facebox' href='stockview.php?c_id3=$c_row[0]'><img src='imgs1/view.png' /></a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
