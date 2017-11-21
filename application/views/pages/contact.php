<!DOCTYPE html>
<html lang="en">  
<head>

</head>
<body>
<div class="container">
    <h2>Contact Page</h2>

    <p>Do want te be in contact with us? Feel free to full in this form</p>
  	
  	<form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top"">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit" button type="button" class="btn btn-success">

 </td>
</tr>
</table>
</form>

  <!-- <h3>Welcome <?php echo $user['name']; ?>!</h3> -->
  <!--  <div class="form-group"> -->
  <!--		<label for="comment">Comment:</label> -->
  <!--		<textarea class="form-control" rows="5" id="comment"></textarea> -->
	</div>
    </div>
</div>
</body>
</html>