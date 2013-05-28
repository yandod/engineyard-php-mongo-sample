<?php
define('NAME_OF_REPLICA', 'sample');

require '../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
$file = '../../../shared/config/mongoid.yml';
$data = Yaml::parse($file);

#$data = Spyc::YAMLLoad('../../../shared/config/mongodb.yml');
echo '<pre>';
var_dump($data);
echo '</pre>';

$client =  new MongoClient(
    implode(',',$data['production']['sessions']['default']['hosts']),
    array(
        'replicaSet' => NAME_OF_REPLICA
    )
);

$db = $client->selectDB(
    $data['production']['sessions']['default']['database']
);

$things = $db->things;

$things->save(array('name' => 'test'));
echo '---';
echo '<pre>';
$cur = $things->find();
foreach ($cur as $row) {
    var_dump($row);
}
echo '</pre>';