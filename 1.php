<!-- Страницу с полной новостью решил сделать через гет запрос, для компактности  :) -->

<?php
$a = "Some news talking about stuff happening in the world,
     if it gets bigger then 180 symbols i need to cut it and make it smaller,
     at this point it is 149, I will write some
     nonsense so we reach more then 180";
// В обчном случае новость из БД берется, тут я просто вводил строку в переменную "а" 
?>

<?php
// проверка на гет параметры
if(isset($_GET['details'])&&$_GET['details']=='y'):?>
<!-- В случае истинности выводим детальную страницу -->
<p>
    <?=$a?>
</p>
<?php else:?>
<!-- В противном случае выводим основную -->
<?php
$link = $_SERVER['SCRIPT_FILENAME'].'?details=y';
if(strlen($a)>180){
    $b = substr($a,0,178) .  //подстрока первых 178 символов
         '<a href="'.$link.'">' . // настройка ссылки элемента HTML
         substr($a,178,2).'...</a>'; // подстрока последних двух элементов 
}
echo ($b);
?>
<?php endif;?>

