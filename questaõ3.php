<?php 

$clientes = array(
	"jose" => array("idade"=>25,"CPF"=>"087883456-18", "RG" =>"2006089107117"),
	"maria" => array("idade"=>18, "CPF"=>"057825456-15","RG" =>"2001089097112"),
	"ana" => array("idade"=>24,"CPF"=>"037825445-30","RG" =>"2019089097118" )
);

echo $clientes["maria"]["RG"]."<br>";
echo $clientes["ana"]["idade"]."<br>";

echo "<br>";

foreach ($clientes as $association => $vetor) {
	echo $association."<br>";
	foreach ($vetor as $key => $valor) {
		echo $key." - ".$valor."<br>";
	}
	
}