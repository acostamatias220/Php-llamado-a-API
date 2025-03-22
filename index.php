<?php
require "const.php";
require "functions.php";
$until_message = get_until_message($data["days_until"]);
?>


<!-- HTML de aca para abajo -->

<?php render_template('head', ["title" => $data["title"]]); ?>

<?php render_template('main', array_merge($data, 
["until_message" => $until_message])); ?>


<!-- CSS -->
<?php render_template('styles'); ?>



