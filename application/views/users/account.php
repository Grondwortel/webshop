<!DOCTYPE html>
<html lang="en">  
<head>

</head>
<body>
<div class="container">
    <?php
    $this->user->getRolesForUserID(array('id'=>$user['id'])); //aanroepen functie NEW!
    ?>
    <h2>User Account</h2>
    <h3>Welcome <?php echo $user['name']; ?>!</h3>
    <div class="account-info">
        <p><b>Name: </b><?php echo $user['name']; ?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
        <p><b>Phone: </b><?php echo $user['phone']; ?></p>
        <p><b>Gender: </b><?php echo $user['gender']; ?></p>
    </div>
</div>
</body>
</html>