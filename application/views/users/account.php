<!DOCTYPE html>
<html lang="en">  
<head>

</head>
<body>
<div class="container">
    <?php
    //$this->user->getRolesForUserID(array('id'=>$user['id'])); //aanroepen functie NEW!
    //var_dump($_SESSION["userRoles"]);
    foreach ($_SESSION["userRoles"] as $key => $value) {
        if (!empty($value["role_id"])) { // Is de session niet leeg? Dan dit, anders niks doen.
            // De bijpassende rol naam pakken uit de database.
            $this->db->select('name'); // pak het kopje name
            $this->db->from('roles'); // uit de tabel roles

            $this->db->where('id', $value["role_id"]); // waar id = role id
            $query = $this->db->get();
            $roles = $query->result_array();
            //var_dump($roles);
            foreach ($roles as $key2 => $value2) {
                echo "U bent ingelogd als een ".$value2["name"].".<br /><br />";
            }
        }
    }
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