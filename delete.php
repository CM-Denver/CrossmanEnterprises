<?php

include("top.php");

$correctPassword = "diegonutsinchildern";

if (isset($_POST['submit'])){
    $ids = $_POST['ids'];
    $password = $_POST['password'];
    
    //Confirm that password matches the correct password:
    if($password == $correctPassword){
        $postsArray = explode(" ",$ids,1000);
        
        //delete requested files (posts):
        chdir('./posts');
        foreach($postsArray as $id) {
            unlink("./slaveinfo/$id.txt");
            unlink("./slaves/$id.jpg");
        }
    }
}

echo "<br><br><br><br><br>";

?>
<div class='center width750'>
    <div class='mainFont'>
        <form action='delete.php' method='POST'>
            <label>Product IDs:</label>
            <textarea class='width750' name="ids" rows="32"></textarea>
            
            <label>Password:</label>
            <input class='width750' type="password" name="password">

            <input type="submit" name="submit" value="delete products">
    </div>
</div>

<?php

include("bottom.php");

?>