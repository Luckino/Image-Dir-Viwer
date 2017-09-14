<?php
//echo '<pre>'.print_r($_SERVER,true).'</pre>';
//sleep(1);
$lista=[
['name'=>'Abstract','count'=>1234,'img'=>'http://lorempixel.com/1200/900/abstract'],
['name'=>'Animals','count'=>1234,'img'=>'http://lorempixel.com/1200/900/animals'],
['name'=>'Business','count'=>1234,'img'=>'http://lorempixel.com/1200/900/business'],
['name'=>'Cats','count'=>1234,'img'=>'http://lorempixel.com/1200/900/cats'],
['name'=>'City','count'=>1234,'img'=>'http://lorempixel.com/1200/900/city'],
['name'=>'Food','count'=>1234,'img'=>'http://lorempixel.com/1200/900/food'],
['name'=>'Nightlife','count'=>1234,'img'=>'http://lorempixel.com/1200/900/nightlife'],
['name'=>'Fashion','count'=>1234,'img'=>'http://lorempixel.com/1200/900/fashion'],
['name'=>'People','count'=>1234,'img'=>'http://lorempixel.com/1200/900/people'],
['name'=>'Nature','count'=>1234,'img'=>'http://lorempixel.com/1200/900/nature'],
['name'=>'Sports','count'=>1234,'img'=>'http://lorempixel.com/1200/900/sports'],
['name'=>'Technics','count'=>1234,'img'=>'http://lorempixel.com/1200/900/technics'],
['name'=>'Transport','count'=>1234,'img'=>'http://lorempixel.com/1200/900/transport']
];

function getSubLista($nombre){
  $subLista=[];
  for ($i=1; $i < 10; $i++) { 
    array_push($subLista,'http://lorempixel.com/1200/900/'.$nombre.'/'.$i);
  }
  return $subLista;
}



if($_SERVER['HTTP_ORIGIN']==$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']) {
  
  if(isset($_POST['init'])){
    shuffle($lista);
    echo json_encode($lista);
  } elseif(isset($_POST['view'])){
    $lista=getSubLista(strtolower($_POST['view']));
    shuffle($lista);
    echo json_encode($lista);
  } else echo json_encode('e');
}

