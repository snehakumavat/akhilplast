<?php
include("include/database1.php");
error_reporting(0);
include("session.php");
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
<?php
$per_page = 20; 

if($_GET)
{
 $page=$_GET['page'];
}
	
	$start = ($page-1)*$per_page;
	$c_qry_f="select * from products order by id desc limit $start,$per_page";
	
	$c_res_f=mysql_query($c_qry_f);
		
?>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="250">Product Code</td>
        <td width="360">Product Name.</td>        
		<td width='160'>Weight</td>	        
        <td width="340">Quantity</td>
         <td width="340">Action</td>
        </tr>

        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td  >";
		echo $c_row[1];
		echo "</td>";
        echo "<td >";
		echo $c_row[2];
		echo "</td>";		
		echo "<td>";
		echo $c_row[4];	
		echo "</td>";
		echo "<td>";
		echo $c_row[7];	
		echo "</td>";
		echo "<td >";		
        echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()'><img src='imgs1/green_delete.png' height='20px;'/></a>&nbsp;<a rel='facebox' href='updateproducts.php?c_id2=$c_row[0]'><img src='imgs1/updt.png' height='20px;'/></a>&nbsp;<a rel='facebox' href='productsview.php?c_id3=$c_row[0]'><img src='imgs1/view.png'  /></a> ";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
