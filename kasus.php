<?php 

$conn = mysqli_connect("localhost", "root", "", "project_sig");

$sql = "SELECT OGR_FID, desa, ST_asGeoJson(SHAPE) geom, kode FROM kab_boyolali";
$result = mysqli_query($conn, $sql);

$i = 0;
$json = array();

while($row = mysqli_fetch_array($result)){
	
	$attributes = array("OGR_FID"=>$row['OGR_FID'],"NAME"=>$row['desa'], "KODE"=>$row['kode']);

	$geom = json_decode($row['geom'], true);

	$data = array("type"=>"Feature", "id"=>$row['OGR_FID'], "properties"=>$attributes, "geometry"=>$geom);
	$json[$i] = $data;
	$i++;

}

$jsons = array("type"=>"FeatureCollection","features"=>$json);

echo json_encode($jsons);

mysqli_close($conn);

?>

