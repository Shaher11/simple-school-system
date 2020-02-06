<html>
<head>
	<title><?php echo "School";?></title>
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
	span.yellow{
		background-color:yellow;
	}
	div.fullRow{
		width:100%;
	}
	label {
		width:100px;
		clear:left;
		text-align:left;
		background-color:#cccccc;
	}
	input, label,button {
		float:left;
		padding:10px;
	}
	button{
		clear:left;
		position:relative;
		background-color:green;
	}
	div.clearStyle{
		clear:left;
		position:relative;
	}
	</style>
</head>
<body>
<h1><?php echo "School";?></h1>
<?php 

session_start(); // start session to be able to use $_SESSION variable 
//unset($_SESSION["dataRow"]);   // clear session row
//unset($_SESSION["dataColumn"]);// clear session column
// all my predefined functions
function buildSessionData($inputs){
	if(!isset($_SESSION["dataRow"])) $_SESSION["dataRow"]=array();
	if(!isset($_SESSION["dataColumn"])) $_SESSION["dataColumn"]=array();
	if(isset($_POST) && !empty($_POST)){
		//print_r($_POST);
		$dataRow=array();
		$dataColumn=$_SESSION["dataColumn"];
		foreach($inputs as $field=>$label){
			if(isset($_POST[$field])){
				// rows
				$dataRow[$field] =	$_POST[$field];
				// columns 
				if(!isset($dataColumn[$field])) 
					$dataColumn[$field]=array();
				array_push($dataColumn[$field],$_POST[$field]);
			}
		}
		array_push($_SESSION["dataRow"],$dataRow);
		$_SESSION["dataColumn"]=$dataColumn;
	}
}
function buildTableHeaderWithInput($enableTableHeader=0){
	$inputs=array(
			"id"=>"Id",
			"name"=>"Name",
			"address"=>"Address",
			"class_num"=>"Class Number",
			"grade"=>"Grade",
		);
	if($enableTableHeader){
		$labels=array_values($inputs);
		return array_merge(["index"], $labels);
	}
	return $inputs;
}
function applyChangeTableDataValues($text){
	$arr=['a','A'];
	foreach($arr as $value){
		$text=str_replace($value,"<span class='yellow'>".$value."</span>",$text);
	}	
	return $text;
}
function array_sort($arr,$column,$order="ASC"){
	$sortedArray=[];
	if(isset($arr[$column])){
		$orderedValues=$arr[$column];
	}else{
		$orderedValues=array_column($arr,$column);
	}
	if($order=="ASC"){
		sort($orderedValues);
	}else{
		rsort($orderedValues);
	}
	foreach($orderedValues as $value){
		if(isset($arr[$column])){
			foreach($arr[$column] as $index=>$col){
				if($col==$value){			
					foreach($arr as $key=>$col){
						if(!isset($sortedArray[$key])) $sortedArray[$key]=array();
						array_push($sortedArray[$key],$arr[$key][$index]);
					}
				}
			}
		}else{
			foreach($arr as $row){
				if($row[$column]==$value){
					array_push($sortedArray,$row);
				}
			}
		}
	}
	return $sortedArray;
}
?>
<?php 
// All my logic 
$inputs = buildTableHeaderWithInput(); 
$tableHeaders = buildTableHeaderWithInput(1);
buildSessionData($inputs);
$tableDataRows = $_SESSION["dataRow"];
$tableDataColumns = $_SESSION["dataColumn"];
$sortColumn = 'grade';
?>
<div class="fullRow">
	<form method="POST" >
		<?php foreach($inputs as $field=>$label){?>
			<label><?php echo $label;?></label>
			<input type='text' name="<?php echo $field;?>" />
			<br>
		<?php }?>
		<button type='submit'><?php echo "Save";?></button>
	</form>
</div>
<br/>
<div class="clearStyle"></div>

<?php
	/* */
	// multidiminsion array as data row  
?>
<?php for($k=0;$k<2;$k++): // loop for tables to not repeat html?>
<div class="dataRow">
<h3>
<?php 
	if($k==1){
		$tableDataRows=array_sort($tableDataRows,$sortColumn);
		echo 'MultiDiminsion Array Row Sorted';
	}else{
		echo 'MultiDiminsion Array Row';
	}
?>
</h3>
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
			<td class="<?php if($key=="grade") echo $gradeClass;?>"><?php echo applyChangeTableDataValues($rowValue);?></td>
		<?php endforeach;?>
	</tr>
	<?php endforeach;?>
</table>
</div>
<?php endfor;?>
<?php /* */ ?>
<br/>

<?php
	/* */
	// multidiminsion array as data column  
?>
<?php for($k=0;$k<2;$k++):  // loop for tables to not repeat html?>
<div class="dataRow">
<h3>
<?php 
	if($k==1){
		$tableDataColumns=array_sort($tableDataColumns,$sortColumn,"DESC");
		echo 'MultiDiminsion Array Column Sorted';
	}else{
		echo 'MultiDiminsion Array Column'; 
	}
	
?>
</h3>
<table>
	<tr>
	<?php for($i=0;$i<count($tableHeaders);$i++):?>
		<th><?php echo $tableHeaders[$i]; ?></th>
	<?php endfor;?>
	</tr> 
	<?php 
	$firstColumn=key($tableDataColumns);
	$counter=isset($tableDataColumns[$firstColumn])?count($tableDataColumns[$firstColumn]):0;
	for($index=0;$index<$counter;$index++):?>
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
		<td class="<?php if($key=="grade") echo $gradeClass;?>"><?php echo applyChangeTableDataValues($colData[$index]);?></td>
	<?php endforeach;?>	
	</tr>
	<?php endfor;?>
</table>
</div>
<?php endfor;?>
<?php /* */?>
</body>
</html>