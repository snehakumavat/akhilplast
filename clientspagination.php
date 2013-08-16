<?php
include("include/database.php");
error_reporting(0);
include("session.php");
?>
<?php
$per_page = 20; 

if($_GET)
{
 $page=$_GET['page'];
}
	
	$start = ($page-1)*$per_page;
	$c_qry_f="select * from clients order by c_id desc limit $start,$per_page";
	
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
	
	function confirmSubmit()
{
var agree=confirm("Are you sure to Delete this Entry?");
if (agree)
	return true ;
else
	return false ;
}
</script>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="250">Contact Person Name</td>
        <td width="160">Company Name.</td>        
		<td width='160'>PhoneNo.</td>	        
        <td width="340">Action</td>
        </tr>

        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td width='250'>";
		echo $c_row[2];
		echo "</td>";
        echo "<td width='160'>";
		echo $c_row[3];
		echo "</td>";		
		echo "<td>";
		echo $c_row[8];	
		echo "</td>";
		echo "<td >";		
        echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()'>
		<img src='imgs1/green_delete.png' height='20px;'/></a>&nbsp;
		<a rel='facebox' href='updateclients.php?c_id2=$c_row[0]'>
		<img src='imgs1/updt.png' height='20px;'/></a>&nbsp;<a rel='facebox' href='clientsview.php?c_id3=$c_row[0]'><img src='imgs1/view.png'/></a>&nbsp;<a href='add_requirement.php?c_id3=$c_row[0]' class='print'>Requirment</a>&nbsp;<a href='view_requirment.php?c_id3=$c_row[0]' class='print'>ViewRequirment</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
 