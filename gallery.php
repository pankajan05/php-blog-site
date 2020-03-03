<?php
include("helper.php");
include("header.php");
?>

<?php
$images = images();
foreach($images as $image) {
    echo "<img class='' src='" . $image['src'] . "' alt='".$image['title']. "' height='200px'>";
}
?>


<?php
include('footer.php');
?>
