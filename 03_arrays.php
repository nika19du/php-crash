<?php
    //Simple Array
    $numbers=[1,44,55,22];
    $fruits=array('apple','orange','pear');

    print_r($numbers);   
    
    var_dump($numbers);

    echo $fruits[0];

    //Associative array 
    $colors=[
        1=> 'red',
        2=>'blue',
        3=>'green'
    ];

    echo $colors[2];

    $hex=[
        'red'=>'#f00',
        'blue'=>'#0f0',
        'green'=>'#00f'
    ];

    echo $hex['blue'];

    $person=[
        'first_name'=>'Brad',
        'last_name'=>'Traversy',
        'email'=>'brad@gmail.com'
    ];

    echo $person['first_name'];

    //multi demensional arrays
    $people=[
        [
            'first_name'=>'Brad',
            'last_name'=>'Traversy',
            'email'=>'brad@gmail.com'
        ],
        [
            'first_name'=>'John',
            'last_name'=>'Smith',
            'email'=>'john@gmail.com'
        ],
        [
            'first_name'=>'Jane',
            'last_name'=>'Smith',
            'email'=>'jane@gmail.com'
        ]
    ];
    
    echo $people[1]['email'];

    var_dump(json_encode($people));
?>