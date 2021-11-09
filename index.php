
<?php
$a = "Some news talking about stuff happening in the world,
     if it gets bigger then 180 symbols i need to cut it and make it smaller,
     at this point it is 149, I will write some
     nonsense so we reach more then 180";
?>
<?php
if(isset($_GET['details'])&&$_GET['details']=='y'):?>
<p>
    <?=$a?>
</p>
<?php else:?>
<?php
$link = $_SERVER['SCRIPT_FILENAME'].'?details=y';
if(strlen($a)>180){
    $b = substr($a,0,178) . '<a href="'.$link.'">' .substr($a,178,2).'...</a>';
}
echo ($b);
?>
<?php endif;?>

