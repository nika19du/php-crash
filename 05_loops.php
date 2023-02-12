<?php
    echo 'For loop here: ';
    for($x=0;$x<=10;$x++){
        echo 'Number '. $x . '<br>';
    }
    echo '<br>' . 'While loop here';
    $x= 1;
    while($x<=15){
        echo 'Number '.$x.'<br>';
        $x++;
    }
    echo'<br>';
    //DO WHILE LOOP
    echo 'DO While here: ';
    $x=1;
    do{
        echo 'Number '.$x.'<br>';
        $x++;
    }while($x<=5);

    //FOR EACH SPECIFACLY FOR ARRAYS
    echo '<br>' . 'FOREACH';
    $posts=['First Post','Second Post','Third Post'];
    for($x=0;$x<count($posts);$x++){
        echo $posts[$x];
    }
    echo '<br>';
    foreach($posts as $post){
        echo $post;
    }
    echo '<br>';
    foreach($posts as $index=>$post){
        echo $index+1 . ' - ' . $post . '<br>';
    }

    $person=[
        'first_name'=>'Brad',
        'last_name'=>'Pit',
        'email'=>'bradPit@gmail.com'
    ];

    foreach($person as $key=>$value){
        echo "$key - $value<br>";
    }
?>