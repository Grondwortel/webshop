<!DOCTYPE html>
<html lang="en">  
<head>

</head>
<body>
  <?php echo $this->session->flashdata('error'); ?>
  <?php echo $this->session->flashdata('success'); ?>
<div class="container">
    <h2>Ticket indienen</h2>

    <p>Wilt u contact met ons opnemen? Voel je vrij om dit formulier in te vullen</p>
  	
  	<form action="<?php echo (URL . 'tickets/submitCreate'); ?>" method="post">
<table width="450px">
<tr>
 <td valign="top">
  <label for="subject">Onderwerp *</label>
 </td>
 <td valign="top">
  <input  type="text" name="subject" id="subject" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="ticket">Uw Ticket *</label>
 </td>
 <td valign="top">
  <textarea  name="ticket" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" name="ticketSubmit" value="Indienen" button type="button" id='submit' class="btn btn-success">

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