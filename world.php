<?php
mysql_connect(
"0.0.0.0",
"kimmie01"
);
mysql_select_db("world");


$LOOKUP = $_REQUEST['lookup'];


# execute a SQL query on the database

if($_REQUEST['all'] == 'true')

{
  $results = mysql_query("SELECT * FROM countries");
  print $results;
}
else
{
  $results = mysql_query("SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';");
}
print $results;

# loop through each country
while ($row = mysql_fetch_array($results)) {
  ?>
  <li> <?php echo $row["name"]; ?>, ruled by <?php echo $row["head_of_state"]; ?> </li>
  <?php
}

/*$xml = new XMLWriter();

$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);

$xml->startElement('countrydata');

while ($row = mysql_fetch_assoc($results)) 
{
  $xml->startElement("country");

  $xml->writeRaw($row['name']);
  $xml->writeRaw($row['ruler']);

  $xml->endElement();
}

$xml->endElement();*/

?>
