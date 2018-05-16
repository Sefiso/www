<?php include("includes/header.php"); 
//$result			= 	$connect->login();
$get_rec = $connect->get_recipients(RECIPIENTS);
$per_page = 10; 
$cur_page = 1;
$total_rows =10;
if(isset($_GET['page']))
{
$cur_page = $_GET['page'];
$cur_page = ($cur_page < 1)? 1 : $cur_page;         
} 
$pager 			= 	$connect->getPagerData($total_rows, $per_page, $cur_page); 
$offset 		= 	$pager->offset; 
$limit  		= 	$pager->limit; 
$page   		= 	$pager->page;
$NumRows        =   ($page - 1) * $limit;
for($i = 0;$i<=count($get_rec);$i++);
foreach($get_rec as $rec)
{
$id			=	$rec['id'];
$name		=	$rec['name'];
$address   =    $rec['email'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
    
  .style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
</style>
</head>
<body>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Upload recipients</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Manage emails</button>
  <button class="tablinks" onclick="openCity(event, 'Mail')">Send bulk mail</button>
</div>

<div id="London" class="tabcontent">
  <div class="order-rht clearfix">
 <h3>Manage Emails</h3>
	
 <hr>
      <div class="row col-md-10 col-md-offset-1 custyle">
          <form role="form" method="post" id="form-form" name="form-form" onSubmit="return validate();">
                  <div class="form-group">
                    <label for="username">Recipient name</label>
                    <input type="text" class="form-control" style="border: 1px solid #000" id="username" name="username" placeholder="Enter recipient name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" style="border: 1px solid #000" id="email" name="email" placeholder="Enter email">
                  </div>                
                  <span style="text-align: center"><button type="submit" class="button_login button1" onclick="myAjax()" name="submit">Uplaoad</button></span>
                </form>
          </div>
     <div id="pagination" style="margin-left:100px;">
   <div id="pagiCount">
           <?php
				if($limit < $total_rows)
					{
					echo'<table width="61%"  border="0" align="left" cellpadding="3" cellspacing="3">
          <tr>
            <td width="97%" align="right" class="test">';
							if ($page == 1)
							{
								echo ""; 
							}
							else 
							{       
								echo "<a href=\"manage_product.php?page=" . ($page - 1) . "\" class='linksnew'>Prev</a>"; 
							}
							for ($i = 1; $i <= $pager->numPages; $i++) 
							{ 
								echo " | "; 
								if ($i == $pager->page)
								{ 
									echo "<span class='Hint1'>"."$i"."</span>"; 
								}
								else
								{	 
									echo "<a href=\"manage_product.php?page=$i\" class='linksnew'> $i</a>"."</font>"; 
								}
							} 
					 
							if ($i > 1)
							{
								echo " | "; 
							}
							if ($page == $pager->numPages) 
							{
								echo "";
							} 
							else   
							{     
								echo "<a href=\"manage_product.php?page=" . ($page + 1) . "\" class='linksnew'>Next</a>";
							}
					}
					echo'</td></tr></table>';
               
            ?>
        </div>
     </div>
</div>
</div>

<div id="Paris" class="tabcontent">
  <div class="order-rht clearfix">
<p class="intro-text"><a href="export.php" class="btn btn-primary btn-xs" style="background-color: #808080;border-color: #000" id="btn">Export Survey Ratings</a></p>
<hr>
<div class="row col-md-10 col-md-offset-1 custyle">

<hr>
<form name="frm_frm" id="frm_frm" method="get">
<div class="cart" style="overflow-x: auto">   
 <table class="table table-striped custab" style="margin-top: 0px;">   
 <thead>        
 <tr>           
 <!--<th>QID</th> -->          
 <th>Question</th>
 <th>Rating</th>                      
 <th>Smiley</th>                      
 <th>Stars</th>          
 <th>Hearts</th>         
 <th>Rooks</th>        
 <th>Comment</th>
 <th>Date</th>
 <th>Name</th> 
 <th>Surname</th>       
 <th>Email</th>        
 <!--<th>Status</th>-->    
 </tr> 
 </thead>	
 <tbody>	
 <?php
 
 ?>		

 <tr class="showmore" id="<?php echo $priority;?>" data="<?php echo $i;?>">	
 <td></td>						
 <td></td>
  <td></td>							
 <td></td>						
			
 <td></td>	
 <td></td>
<td></td>
<td></td> 
<td></td>	
<td></td>
<td></td>			
 </tr>            

 <tr id="showmore"></tr>
 </tbody> 	    
 </table>
    </div>	
 <ul class="pagination">
 <?php				
 if($limit < $total_rows)			
 {				
 echo'<li>';	
 if ($page == 1)			
 {								
 echo ""; 						
 }						
 else 						
 {       				
 echo "<a href=\"manage_order.php?page=" . ($page - 1) . "\" class='linksnew'>Prev</a>"; 			
 }							
 for ($i = 1; $i <= $pager->numPages; $i++) 							
 { 								 						
 if ($i == $pager->page)							
 { 									
 echo "<span class='Hint1'>"."$i"."</span>"; 					
 }								
 else								
 {	 								
 echo "<a href=\"manage_order.php?page=$i\" class='linksnew'> $i</a>"."</font>"; 				
 }		
 }
 if ($i > 1)							
 {								
 				
 }							
 if ($page == $pager->numPages) 		
 {								
 echo "";						
 } 							
 else   							
 {     								
 echo "<a href=\"manage_order.php?page=" . ($page + 1) . "\" class='linksnew'>Next</a>";}					
 }					
 echo'</li>';    
 ?>        
 </ul>
 </form>   
 </div>    
 </div> 
</div>
<div id="Mail" class="tabcontent">
   
<div class="order-rht clearfix">

<div class="row">

<div class="col-md-8 col-md-offset-2 pad">
<p class="intro-text">Send bulk mail</p>
<hr>								
	<form role="form" class="form-horizontal" method="post" id="form-form" name="form-form" action="massmail.php">
	<div class="form-group">
        <label class="col-sm-2 control-label"  for="subject">Addresses</label>
        <div class="col-sm-10">
             <input type="text" placeholder="addresses" id="email_list" name="email_list" class="form-control" value="<?php ?>">

        </div>
    </div>
	<div class="form-group">
        <label class="col-sm-2 control-label"  for="subject">Subject</label>
        <div class="col-sm-10">
             <input type="text" placeholder="Title" id="subject" name="subject" class="form-control" value="">

        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="message">Message</label>
        <div class="col-sm-10">
            <textarea id="message" name="message" class="form-control" rows="10" cols="20"></textarea>
        </div>
    </div>	
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" id="mail" class="button button1" name="mail">Send</button>
        </div>
    </div>
</form>

</div>
            
</div>

</div>
</div>
<!-- mid-sec ends here -->
<?php include("includes/footer.php");  ?>

<script>
    function myAjax() {
        var name = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var dataString = 'name1=' + name + '&email1=' + email;
        if (name == '' || email == '') {
          alert("Please Fill All Fields");
           }
           else{
           $.ajax({
           type: "POST",
           url: "ajax.php",
           data: dataString,
           cache: false,
           success: function(html) {
           alert(html);
                  }
               });
           }
          return false;
    }
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
  <style>.timepicker { margin-top: -270px; }</style>
 <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
 <!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>-->
 <script src="css/dist/js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
 <script src="js/bootstrap-datetimepicker.min.js"></script>
 <script type="text/javascript">	
 $(function () {			
 $('#start').datetimepicker();			
 $('#stop').datetimepicker();	
 });</script>    
</body>
</html> 
