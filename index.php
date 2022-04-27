<?php

require_once "includes/db.php";

require_once "includes/header.php";

?>

<main id="main-content" class="form-main-content">
<?php
	if(!isset($_GET['show']) || $_GET['show'] =='contacts'){
?>
        <nav class="primary-nav">
	        <h1><a href="index.php">Contacts</a></h1>
	        <a id="add" href="index.php?show=create"> + </a>
        </nav>
<?php
        $_GET['show']='contacts';
        require_once "includes/contact.php";

	}else if($_GET['show'] =='create'){

		require_once "includes/create.php";
	}
?>
</main>

<?php
require_once "includes/footer.php";
?>