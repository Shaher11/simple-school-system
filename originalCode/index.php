<html>
<head><title></title>
<style>
tr.red{
	background-color:red;
}
table{
	border:1px solid black;
}
th{
	background-color:#cccccc;
}
td{
	border:1px groove;
}
</style>
</head>
<body>
	<h1><?php echo 'School';?></h1>
	<?php $i=5;echo $i++; echo $i;echo ++$i; echo $i;?>
	
	<table>
		<tr>
			<th><?php echo "id";?></th>
			<th><?php echo "name";?></th>
			<th><?php echo "address";?></th>
			<th><?php echo "class number";?></th>
		</tr>
		<?php
			$tableDataRows = array(
				array(
					"id"=>"1",
					"name"=>"Ahmed",
					"address"=>"Cairo",
					"class_num"=>"1",
				),
				array(
					"id"=>"2",
					"name"=>"Mohamed",
					"address"=>"Aswan",
					"class_num"=>"2",
				),
				array(
					"id"=>"1",
					"name"=>"Mahmoud",
					"address"=>"Alex",
					"class_num"=>"2",
				)
			);
		
		?>
		<?php $index=0;?>
		<tr class="<?php echo ($tableDataRows[$index]["class_num"]==2)?'red':'';?>">
			<td><?php echo $tableDataRows[$index]["id"];?></td>
			<td><?php echo $tableDataRows[$index]["name"];?></td>
			<td><?php echo $tableDataRows[$index]["address"];?></td>
			<td><?php echo $tableDataRows[$index]["class_num"];?></td>
		</tr>
		
		<?php $index=1;?>
		<tr class="<?php if($tableDataRows[$index]["class_num"]==2) echo 'red';?>">
			<td><?php echo $tableDataRows[$index]["id"];?></td>
			<td><?php echo $tableDataRows[$index]["name"];?></td>
			<td><?php echo $tableDataRows[$index]["address"];?></td>
			<td><?php echo $tableDataRows[$index]["class_num"];?></td>
		</tr>
		
		<?php $index=2;?>
		<tr class="<?php if($tableDataRows[$index]["class_num"]==2){ echo 'red';}?>">
			<td><?php echo $tableDataRows[$index]["id"];?></td>
			<td><?php echo $tableDataRows[$index]["name"];?></td>
			<td><?php echo $tableDataRows[$index]["address"];?></td>
			<td><?php echo $tableDataRows[$index]["class_num"];?></td>
		</tr>
	</table>
	
	
	<table>
		<tr>
			<th><?php echo "id";?></th>
			<th><?php echo "name";?></th>
			<th><?php echo "address";?></th>
			<th><?php echo "class number";?></th>
		</tr>
	<?php 
		$tableDataColumn = array(
			"id"=>["1","2","3"],
			"name"=>["Ahmed","Mohamed","Mahmoud"],
			"address"=>["Cairo","Aswan","Alex"],
			"class_num"=>["1","2","2"]
		);
	?>
		<?php $index=0;?>
		<tr class="<?php echo ($tableDataColumn["class_num"][$index]==2)?'red':'';?>">
			<td><?php echo $tableDataColumn["id"][$index];?></td>
			<td><?php echo $tableDataColumn["name"][$index];?></td>
			<td><?php echo $tableDataColumn["address"][$index];?></td>
			<td><?php echo $tableDataColumn["class_num"][$index];?></td>
		</tr>
		<?php $index=1;?>
		<tr class="<?php echo ($tableDataColumn["class_num"][$index]==2)?'red':'';?>">
			<td><?php echo $tableDataColumn["id"][$index];?></td>
			<td><?php echo $tableDataColumn["name"][$index];?></td>
			<td><?php echo $tableDataColumn["address"][$index];?></td>
			<td><?php echo $tableDataColumn["class_num"][$index];?></td>
		</tr>
		<?php $index=2;?>
		<tr class="<?php echo ($tableDataColumn["class_num"][$index]==2)?'red':'';?>">
			<td><?php echo $tableDataColumn["id"][$index];?></td>
			<td><?php echo $tableDataColumn["name"][$index];?></td>
			<td><?php echo $tableDataColumn["address"][$index];?></td>
			<td><?php echo $tableDataColumn["class_num"][$index];?></td>
		</tr>
	</table>
	
</body>
</html>


