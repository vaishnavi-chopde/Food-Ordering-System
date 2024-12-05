<?php include "header.php";
error_reporting(0);
 ?> 
<body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
  <script>

$("document").ready(function(){
$("#save").click(function(){
if($("input[name=old_pass]").val().trim()=="")
{
alert("Enter old password");
}
else if($("input[name=new_pass]").val().trim()=="")
{
alert("Enter new password"); 
}
else if($("input[name=conf_pass]").val().trim()=="")
{
alert("Enter confirm pasword.");
}
else
{

  if($("input[name=new_pass]").val().trim()==$("input[name=conf_pass]").val().trim())
  {
      
  $.get("ajax.php?act=savepass&old_pass="+$("input[name=old_pass]").val()+"&new_pass="+$("input[name=new_pass]").val(),function(data){
  if(data.trim()=="ok")
   {
 
        alert("Password changed successfully.");

   }
   else
   {
   alert(data.trim());
   }
  })
}
else
{

alert("Password do not match.");
}
}
   $("#old").val("");
   $("#new").val("");
   $("#con").val("");
  
   
})

})
</script>

  <div class="contact-box" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading-title text-center">
            
            <p>Our Main Goal is Client Satisfaction</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12"style="margin-top: 5%;">
          <form  name="changepass" method="POST" action="changepass.php">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="password" class="form-control" id="old_pass" name="old_pass" placeholder="Old Password" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input type="password" placeholder="New Password" id="new_pass" class="form-control" name="new_pass" required data-error="Please enter your email">
                  <div class="help-block with-errors"></div>
                </div> 
              </div> 
              <div class="col-md-12">
                <div class="form-group">
                  <input type="password" placeholder="Confirm Password" id="conf_pass" class="form-control" name="conf_pass" required data-error="Please enter your email">
                  <div class="help-block with-errors"></div>
                </div> 
              </div> 
              
              </div>
              <div class="col-md-12">
                
                <div class="submit-button text-center">
                  <button name="save" class="btn btn-common" id="save" type="submit">Change Password</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div> 
                  <div class="clearfix"></div> 
                </div>
              </div>
            </div>            
          </form>
          


        </div>
      </div>
    
    </div>
  </div>
  <!-- End Contact -->
<?php include "footer.php"; ?>