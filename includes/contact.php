<?php
require_once "db.php";

require_once "header.php";

if($_GET['show']=='contacts'){
?>

<main id="contacts_main">
    <form id="search-bar" action="index.php?show=contacts" method="post">
    <input type="search" id="key-contact" name="contact-input" placeholder="Input Contact name">
    <input type="submit" id="search-submit" name="contact-search"><br>
    </form>
    <div id="data" name="data-display">

    <?php
    if(!isset($_POST['contact-input'])){ 
        $Key = "SELECT * FROM contact_info";
        $Data = $conn->query($Key);
        if($Data->num_rows>0){
            while($row = $Data->fetch_assoc()){
                echo $row['first_name'].' '. $row['last_name'];?><br>
       <?php
           }
        }
    }else{
        $input =$_POST['contact-input'];
        $Key = "SELECT * FROM contact_info WHERE first_name LIKE '%{$input}%' OR last_name LIKE '%{$input}%'";
        $Data = $conn->query($Key);
        if($Data->num_rows>0){
            while($row = $Data->fetch_assoc()){
                echo $row['first_name'].' '. $row['last_name'];?><br>
<?php
           }
        }
    }
?> 
    </div>
</main>
<?php
}
    require_once "footer.php";
?>