<html>
<head>
<title><?php echo "School"; ?></title>
<style>
table{
	border:1px solid black;
}
th{
	background-color:#cccccc;
}
td{
	border:1px groove;
}
td.violet{
	background-color:violet;
}
td.red{
	background-color:red;
}
td.green{
	background-color:green;
}
div.dataRow{
	width:45%;
	position: relative;
	float: left;
}
</style>
</head>
<body>
<h1><?php echo "School"; ?></h1>
<?php 
	/* */
	// multidiminsion array as data row
	$tableHeaders = array( "index" , "ID" , "Name" , "Address" , "Class Number" , "Grade"); 
	$tableDataRows = array(
		array(
			"id"=>"10",
			"name"=>"Ahmed",
			"address"=>"Cairo",
			"class_num"=>"1",
			"grade"=>"50"
		),
		array(
			"id"=>"20",
			"name"=>"Mohamed",
			"address"=>"Aswan",
			"class_num"=>"2",
			"grade"=>"80"
		),
		array(
			"id"=>"30",
			"name"=>"Mahmoud",
			"address"=>"Alex",
			"class_num"=>"1",
			"grade"=>"100"
		),
		array(
			"id"=>"40",
			"name"=>"Mostafa",
			"address"=>"Luxor",
			"class_num"=>"2",
			"grade"=>"10"
		)
	); 
?>
<div class="dataRow">
<h3><?php echo 'MultiDiminsion Array Row'; ?></h3>
<table>
	<tr>
	<?php foreach($tableHeaders as $tableHeader):?>
		<th><?php echo $tableHeader; ?></th>
	<?php endforeach;?>
	</tr>
	<?php foreach($tableDataRows as $index=>$dataRow):?>
	<?php 
			$gradeClass="";
			if($dataRow["grade"]==100){
				$gradeClass="violet";
			}elseif($dataRow["grade"]>50){
				$gradeClass="green";
			}else{
				$gradeClass="red";
			}
	?>
	<tr>
		<td><?php echo ($index+1);?></td>
		<?php foreach($dataRow as $key=>$rowValue):?>
			<td class="<?php if($key=="grade") echo $gradeClass;?>"><?php echo $rowValue;?></td>
		<?php endforeach;?>
	</tr>
	<?php endforeach;?>
</table>
</div>
<?php 
$tableDataRowsSorted=array();
$orderedGrades=array_column($tableDataRows,"grade");
sort($orderedGrades);
foreach($orderedGrades as $orderedGrade){
	foreach($tableDataRows as $row){
		if($row['grade']==$orderedGrade){
			array_push($tableDataRowsSorted,$row);
		}
	}
}
?>
<div class="dataRow">
<h3><?php echo 'MultiDiminsion Array Row Sorted'; ?></h3>
<table>
	<tr>
	<?php foreach($tableHeaders as $tableHeader):?>
		<th><?php echo $tableHeader; ?></th>
	<?php endforeach;?>
	</tr>
	<?php foreach($tableDataRowsSorted as $index=>$dataRow):?>
	<?php 
			$gradeClass="";
			if($dataRow["grade"]==100){
				$gradeClass="violet";
			}elseif($dataRow["grade"]>50){
				$gradeClass="green";
			}else{
				$gradeClass="red";
			}
	?>
	<tr>
		<td><?php echo ($index+1);?></td>
		<?php foreach($dataRow as $key=>$rowValue):?>
			<td class="<?php if($key=="grade") echo $gradeClass;?>"><?php echo $rowValue;?></td>
		<?php endforeach;?>
	</tr>
	<?php endforeach;?>
</table>
</div>

<?php /* */ ?>
<br/>

<?php
	/* */
	// multidiminsion array as data column 
	$tableDataColumns = array(
		"id"=>["10","20","30","40"],
		"name"=>["Ahmed","Mohamed","Mahmoud","Mostafa"],
		"address"=>["Cairo","Aswan","Alex","Luxor"],
		"class_num"=>["1","2","1","2"],
		"grade"=>["50","80","100","10"],
	); 
?>
<div class="dataRow">
<h3><?php echo 'MultiDiminsion Array Column'; ?></h3>
<table>
	<tr>
	<?php for($i=0;$i<count($tableHeaders);$i++):?>
		<th><?php echo $tableHeaders[$i]; ?></th>
	<?php endfor;?>
	</tr>
	<?php for($index=0;$index<count($tableDataColumns["id"]);$index++):?>
	<?php 
			$gradeClass="";
			if($tableDataColumns["grade"][$index]==100){
				$gradeClass="violet";
			}elseif($tableDataColumns["grade"][$index]>50){
				$gradeClass="green";
			}else{
				$gradeClass="red";
			}
	?>
	<tr>
		<td><?php echo ($index+1);?></td>
	<?php foreach($tableDataColumns as $key=>$colData):?>
		<td class="<?php if($key=="grade") echo $gradeClass;?>"><?php echo $colData[$index];?></td>
	<?php endforeach;?>	
	</tr>
	<?php endfor;?>
</table>
</div>
<?php /* */?>

<?php 
$tableDataColumnsSorted=array();
$orderedGrades=$tableDataColumns["grade"];
rsort($orderedGrades);
foreach($orderedGrades as $orderedGrade){
	foreach($tableDataColumns["grade"] as $index=>$col){
		if($col==$orderedGrade){			
			foreach($tableDataColumns as $key=>$col){
				if(!isset($tableDataColumnsSorted[$key])) $tableDataColumnsSorted[$key]=array();
				array_push($tableDataColumnsSorted[$key],$tableDataColumns[$key][$index]);
			}
		}
	}
}
?>
<div class="dataRow">
<h3><?php echo 'MultiDiminsion Array Columns Sorted'; ?></h3>
<table>
	<tr>
	<?php for($i=0;$i<count($tableHeaders);$i++):?>
		<th><?php echo $tableHeaders[$i]; ?></th>
	<?php endfor;?>
	</tr>
	<?php for($index=0;$index<count($tableDataColumnsSorted["id"]);$index++):?>
	<?php 
			$gradeClass="";
			if($tableDataColumnsSorted["grade"][$index]==100){
				$gradeClass="violet";
			}elseif($tableDataColumnsSorted["grade"][$index]>50){
				$gradeClass="green";
			}else{
				$gradeClass="red";
			}
	?>
	<tr>
		<td><?php echo ($index+1);?></td>
	<?php foreach($tableDataColumnsSorted as $key=>$colData):?>
		<td class="<?php if($key=="grade") echo $gradeClass;?>"><?php echo $colData[$index];?></td>
	<?php endforeach;?>	
	</tr>
	<?php endfor;?>
</table>
</div>
</body>
</html>