<?php

$users = [

    [
        'name' => 'Venkay',
        'age' => '19',
    ],
    [
        'name' => 'Wilson',
        'age' => '20',
    ],
    [
        'name' => 'Maori',
        'age' => '18',
    ],
];
$user = 3;
$i = 0;

while($i < $user){
/*echo "My name is {$users[$i]['name']} et j'ai {$users[$i]['age']} ans <br />";*/ 
echo 'My name is ' . $users[$i]['name'] . ' and i have ' . $users[$i]['age'] . ' ans' . '<br \>';
$i++;
}

?>