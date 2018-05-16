function validate()
{
	if(document.getElementById("email").value=="")
	{			
		$('#email').css('border', '2px solid #FF0000');		
		$("#email").attr('placeholder','Enter Your Email');
		return false;
	}
	if(document.getElementById("password").value=="")
	{		
		$('#password').css('border', '2px solid #FF0000');		
		$("#password").attr('placeholder','Enter Your Password');
		return false;
	}
}
function mailvalidate()
{
	if(document.getElementById("email").value=="")
	{			
		$('#email').css('border', '2px solid #FF0000');		
		$("#email").attr('placeholder','Enter Your Email');
		return false;
	}
	
}
function checkcategory()
{	
	if(document.getElementById("catname").value=="")
	{			
		$('#catname').css('border', '2px solid #FF0000');		
		$("#catname").attr('placeholder','Enter Your Category Name');
		return false;
	}
}
function checkproduct()
{
	if(document.getElementById("catname").value=="")
	{			
		$('#catname').css('border', '2px solid #FF0000');		
		$("#catname").attr('placeholder','Select Your Category Name');
		return false;
	}
	if(document.getElementById("prod_name").value=="")
	{			
		$('#prod_name').css('border', '2px solid #FF0000');		
		$("#prod_name").attr('placeholder','Enter Your Product Name');
		return false;
	}
	if(document.getElementById("description").value=="")
	{		
		$('#description').css('border', '2px solid #FF0000');		
		$("#description").attr('placeholder','Enter Your Description');
		return false;
	}
	if(document.getElementById("special").value=="")
	{		
		$('#special').css('border', '2px solid #FF0000');		
		$("#special").attr('placeholder','Enter Your Special Requirement');
		return false;
	}
	if(document.getElementById("price").value=="")
	{		
		$('#price').css('border', '2px solid #FF0000');		
		$("#price").attr('placeholder','Enter Your Price');
		return false;
	}
}

function checkprofile()
{
	if(document.getElementById("email").value=="")
	{			
		$('#email').css('border', '2px solid #FF0000');		
		$("#email").attr('placeholder','Enter Your Email');
		return false;
	}
	if(document.getElementById("password").value=="")
	{		
		$('#password').css('border', '2px solid #FF0000');		
		$("#password").attr('placeholder','Enter Your Password');
		return false;
	}
	if(document.getElementById("username").value=="")
	{		
		$('#username').css('border', '2px solid #FF0000');		
		$("#username").attr('placeholder','Enter Your Username');
		return false;
	}
}
function registervalidate()
{	
	if(document.getElementById("username").value=="")
	{			
		$('#username').css('border', '2px solid #FF0000');		
		$("#username").attr('placeholder','Enter Your Name');
		return false;
	}
	if(document.getElementById("secondname").value=="")
	{			
		$('#secondname').css('border', '2px solid #FF0000');		
		$("#secondname").attr('placeholder','Enter Your Second ame');
		return false;
	}
	if(document.getElementById("email").value=="")
	{			
		$('#email').css('border', '2px solid #FF0000');		
		$("#email").attr('placeholder','Enter Your Email');
		return false;
	}
	if(document.getElementById("password").value=="")
	{		
		$('#password').css('border', '2px solid #FF0000');		
		$("#password").attr('placeholder','Enter Your Password');
		return false;
	}
	if(document.getElementById("telnumber").value=="")
	{		
		$('#telnumber').css('border', '2px solid #FF0000');		
		$("#telnumber").attr('placeholder','Enter Your Telephone Number');
		return false;
	}
	if(document.getElementById("empnumber").value=="")
	{		
		$('#empnumber').css('border', '2px solid #FF0000');		
		$("#empnumber").attr('placeholder','Enter Your Employee Number');
		return false;
	}	
	if(document.getElementById("deptment").value=="")
	{		
		$('#deptment').css('border', '2px solid #FF0000');		
		$("#deptment").attr('placeholder','Enter Your Deptment');
		return false;
	}
}

function checkadmin()
{
	if(document.getElementById("varCompany").value=="")
	{			
		$('#varCompany').css('border', '2px solid #FF0000');		
		$("#varCompany").attr('placeholder','Select Your Company Name');
		return false;
	}	
	if(document.getElementById("varContactPerson").value=="")
	{			
		$('#varContactPerson').css('border', '2px solid #FF0000');		
		$("#varContactPerson").attr('placeholder','Enter Your Contact Person Name');
		return false;
	}
	if(document.getElementById("varAddress").value=="")
	{		
		$('#varAddress').css('border', '2px solid #FF0000');		
		$("#varAddress").attr('placeholder','Enter Your Address');
		return false;
	}
	if(document.getElementById("varCity").value=="")
	{		
		$('#varCity').css('border', '2px solid #FF0000');		
		$("#varCity").attr('placeholder','Enter Your City');
		return false;
	}
	if(document.getElementById("varState").value=="")
	{		
		$('#varState').css('border', '2px solid #FF0000');		
		$("#varState").attr('placeholder','Enter Your State');
		return false;
	}
	if(document.getElementById("varCountry").value=="")
	{		
		$('#varCountry').css('border', '2px solid #FF0000');		
		$("#varCountry").attr('placeholder','Enter Your Country');
		return false;
	}
	if(document.getElementById("varTelephone").value=="")
	{		
		$('#varTelephone').css('border', '2px solid #FF0000');		
		$("#varTelephone").attr('placeholder','Enter Your Telephone');
		return false;
	}
	if(document.getElementById("varSiteurl").value=="")
	{		
		$('#varSiteurl').css('border', '2px solid #FF0000');		
		$("#varSiteurl").attr('placeholder','Enter Your Site URL');
		return false;
	}
    //function cartbutton(){
        
    //$('#submit').button("disable");​​​​​​​​​​​​​
   // $('#madol').button("disable");​​​​​​​​​​​​​
  //  $('.fields').bind('keyup', function() { 
   // var nameLength = $("#sub_first_name").length;
    //var emailLength = $("#sub_email").length;

   //if (nameLength > 0 && emailLength > 0)
    //{
  // $('#yourButton').button("enable");​​​​​​​​​​​​​
    //}

   //} );
 //}
}
