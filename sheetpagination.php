<?php
include("include/database.php");
error_reporting(0);
include("session.php");
	
$per_page = 20; 

if($_GET)
{
  $page=$_GET['page'];
}
	
	$start = ($page-1)*$per_page;
 $c_qry_f="select * from requirement order by c_id desc limit $start,$per_page";
	
	$c_res_f=mysql_query($c_qry_f);
	
		
?>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="150">Client ID</td>
        <td width="160">Product Name</td>
        <td>Required Quantity</td>	
        <td>Available Quantity</td>
		
        <td>Remaining Quantity</td>	        
        <td width="430">Action</td>
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
        echo "<td width='200'>";
		echo $c_row[2];
		echo "</td>";
        echo "<td width='100'>";
		echo $c_row[4];
		echo "</td>";
		echo "<td width='150'>";
		echo $c_row[9];
		echo "</td>";
		echo "<td width='150'>";
		echo $c_row[10];
		echo "</td>";
		echo "<td width='150'>";
		echo $c_row[11];		
        echo "<td width='200'>";
		echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()'><img src='imgs1/green_delete.png' height='20px;'/></a>&nbsp;<a href='update_requirement.php?c_id2=$c_row[0]'> <img src='imgs1/updt.png' height='20px;'/></a>&nbsp;<a  href='viewwork.php?c_id3=$c_row[0]'><img src='imgs1/view.png'  /></a>&nbsp;<a href='assignstock.php?job_id=$c_row[0]' class='print'>assign stock</a>&nbsp;<a class='print' href='view_assgn.php'>view_assign</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
