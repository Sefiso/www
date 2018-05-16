<?php
 include("includes/header.php");
 if(isset($_POST['submit']))
{
extract($_POST);
$result			= 	$connect->Chklogin(LOGIN,$username,$password);
if($result!="1")
{
   foreach($result as $res){
		 $id = $res->id;
		 $name = $res->name;
		 $surname = $res->surname;
		 $username = $res->username;
		 $password = $res->password;
		 $telephone = $res->tel_number;
	 }
     header("location:dashboard.php");
}
else if($result=="1")
{
	header("location:admin.php?msg=1");
}
}
?>


<div class="container">
<!--form build starts-->
<div class="row">
          <div class="col-sm-12 col-md-offset-4 col-md-4">
            <div class="thumbnail info-thumbnail background-lead mar-75" style="background-color: rgba(169, 167, 167, 0.84);color: #000" style="border: 0">
			<?php if(!empty($_GET['msg'])&&($_GET['msg']=='1')) { ?>
			<div id="error">Wrong email address and password </div>
			<?php }?>			
              <div class="caption">
                <h3><span class="fa fa-user"></span> Login</h3>                
				<form role="form" method="post" id="form-form" name="form-form" onSubmit="return validate();">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" style="border: 1px solid #000" id="username" name="username" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" style="border: 1px solid #000" id="password" name="password" placeholder="Insert password">
                  </div>                
                  <span style="text-align: center"><button type="submit" class="button_login button1" name="submit">Login</button></span>
                </form>
              </div>
            </div>
          </div>
        </div>
<!--form build starts-->
</div>
<?php include("includes/footer.php")?>