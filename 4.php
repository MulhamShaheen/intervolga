$randArray = [];
//гениратор случайных чисел

for($i = 0; $i<100; $i++){
    $randArray[] = rand(-5,5);
}
// случай если [1,1,1] - считается 1 пара                    
$res = 0;
for($i = 0; $i< count($randArray);$i++ ){
    $a = $randArray[$i];

    if($a == $randArray[$i+1]) {
        $res++;
        $i++;
    }
}
//-------------------------------------
$i = 0;
$res =0;
//случай если [1,1,1] - считается 2 пары

while ($i< count($randArray)){
    $a = $randArray[$i];
    $i++;
    if($a == $randArray[$i]) {
        $res++;
    }
}
