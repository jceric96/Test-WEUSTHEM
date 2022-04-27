<?php
function sanitizeData($data) {
    $cleanData = trim($data);
    $cleanData = stripslashes($cleanData);
    $cleanData = htmlspecialchars($cleanData);
    return $cleanData;
}
?>