<?php
require_once "db.php";

require_once "header.php";

require_once "sanitizeData.php";

require_once "array.php";

if($_GET['show']=='create'){
?>

<main id="create_main">
<form id="contact_form" action="index.php?show=create" method="post">
    <div id ="title">
    <a id="cancel" href="index.php"> Cancel</a>
    <h4>New Contact</h4>

    <input type="submit" id ="done" name="save" value="Done" onclick="validate()">
    </div> 
        <div id="firstname">

            <input type="text" id ="first-name" required="required" name="contact-first-name" placeholder="First Name">
        </div>
        <div id="lastname">

            <input type="text" id ="last-name" name="contact-last-name" placeholder="Last Name">
        </div>
        <div id="email">

            <input type="text" id ="email-address" name="contact-email" placeholder="Email address"> 
        </div>
		<div id="phone">
		    <input type="text" id ="phone-number" name="contact-phone" placeholder="Phone number">
		</div>

    </form>
    <?php
    $FirstName = sanitizeData($_POST['contact-first-name']);
    $LastName = sanitizeData($_POST['contact-last-name']);
    $ContactEmail = sanitizeData($_POST['contact-email']);
    $ContactPhone =  sanitizeData($_POST['contact-phone']);
    $Capital = sanitizeData(strtoupper(substr($FirstName,0,1)));
    if(isset($_POST['save'])){
        $insert = "INSERT INTO contact_info (first_name, last_name, email, phone_number,capital)
        VALUES ('{$FirstName}','{$LastName}','{$ContactEmail}','{$ContactPhone}', '{$Capital}')";  
        $result = mysqli_query($conn, $insert) or die ('Error querying database.'. mysqli_error($conn));
        header("Location:index.php?show=contacts");
    }	
?>

</main>

<?php
}
require_once "footer.php";

?>