<?php 






  $result = [
      [
        'name'    => 'Asraf',
        'age'     => 10,
        'cell'    => '01717700811',
        'marks'   => [80, 90, 46, 55, 98, 33]
        ],
        [
          'name'    => 'Ruma',
          'age'     => 12,
          'cell'    => '01717700812',
          'marks'   => [80, 40, 46, 88, 98, 33]
          ],
          [
            'name'    => 'Tarannam',
            'age'     => '15',
            'cell'    => '01717700813',
            'marks'   => [80, 90, 46, 55, 68, 33]
            ],
            [
              'name'    => 'Farah tabira',
              'age'     => 13,
              'cell'    => '01717700819',
              'marks'   => [80, 90, 86, 55, 38, 93]
            ]             

  ];



  foreach($result as $data ){
    echo "Name = " . $data['name'] . "<br>";
    echo "Age = " . $data['age'] . "<br>";
    echo "Cell = " . $data['cell'] . "<br>";
    echo "Ban = " . $data['marks'][0] . "<br>";
    echo "Eng = " . $data['marks'][1] . "<br>";
    echo "Math = " . $data['marks'][2] . "<br>";
    echo "SC = " . $data['marks'][3] . "<br>";
    echo "SS = " . $data['marks'][4] . "<br>";
    echo "Rel = " . $data['marks'][5] . "<br>";
    echo "--------------------------------------- <br>";
    
    $total = 0;
    foreach( $data['marks'] as $mark ){
      $total += $mark;
    }

    echo " Total Marks =  ". $total;
 
    echo "<hr>";
  }

