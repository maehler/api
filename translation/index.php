<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require 'src/config/db2.php';

//initialize new SLim App
$app = new \Slim\App; 

//Slim testing
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

// Customer Routes
//require 'src/routes/customers.php';
$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
			->withHeader('Content-Type', 'application/json')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});

//Get ortholog genes
$app->map(['GET', 'POST', 'PUT'],'/{sp1}/{sp2}/{method}', function(Request $request, Response $response){
	$db_name = strtoupper($request->getAttribute('name'));
	if($db_name==""){$db_name="plantgenie_translation";}
	$sp1 = $request->getAttribute('sp1');
	$sp2 = $request->getAttribute('sp2');
	$method = strtoupper($request->getAttribute('method'));
	$list= $request->getParam('q');
	$vowels = array(",", ";", "\t", "\n", "\r", "s+", " ",",,");
	$input_list = strtolower(str_replace($vowels, ",", $list));
	$input_array = explode(",", $input_list);
	$input_str="'".implode("','",$input_array)."'";
	$sql = "SELECT gene_id,hit_id FROM $method where sp1='$sp1' and sp2='$sp2' and gene_id in ($input_str)";
    try{
        $db = new db();
        $db = $db->connect($db_name);
        $stmt = $db->query($sql);
        $genelist_results = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
		echo json_encode($genelist_results);
    } catch(PDOException $e){
		print_r($e);
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});



$app->run();