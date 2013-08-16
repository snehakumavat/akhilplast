
<div id="nav">
     <ul class="sf-menu dropdown">
        	
        	<li class="selected"><a href="home.php">Home</a>      	           
            </li>
                      
            <li><a class="has_submenu" href="clients.php">Client</a>
            	<ul>               	                     
                    <li><a href="reciept.php">Delivery Chalan</a></li>                    
                </ul>
            </li>                           
            <li><a class="has_submenu" href="products.php">Product</a>
             
             </li>                                                           
            <li><a class="has_submenu" href="view_stock.php">Stock</a>
            <ul>
                	<li><a href="add_stock.php">Add Stock</a></li>                	

            </ul></li>
             
              
           
            <li><a class="has_submenu" href="loghistory.php">log_history</a>
                      </li> 
                                  
           <li>
           <a class="has_submenu" href="logout.php">logout</a>
           </li> 
           <li>
           <?php
 if(isset($_SESSION['uname']) && isset($_SESSION['password']))
{
	echo '<h4 style="color:#000;margin-left:20px;margin-top:12px;">Welcome: '.$_SESSION['uname'].'</h4>';
}
 ?></li>
                          
        </ul>
  
</div>
