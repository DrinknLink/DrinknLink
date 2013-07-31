<?php
function querySql($sql){
	$db = DB();
	return $db->query($sql);
}


function latestTabel($prefix){
	$db = DB();
	$sql = 'SELECT MAX(TABLE_NAME) as tablename FROM information_schema.TABLES WHERE TABLE_SCHEMA=DATABASE() AND TABLE_NAME LIKE "'.$prefix.'%"';
	return $db->query($sql);
}
/*
 select操作封装
* @param $sql 查询语句
* 返回一个索引数组  暂时是*
*/
function selectSql($table,$data=null,$orderby=null,$desc=false,$page=1,$num=10,$like=null,$range=null){
	$db = DB();
	$page = ' Limit '.($page - 1)*$num. ' , '.$num;
	if($table===NULL || $table === ''){
		throw new Comm_Exception_Program('Should enter a table name');
	}
	//组合sql查询语句
	if($orderby != null){
		$orderby = ' ORDER BY '.$orderby;
		if($desc != null){
			$orderby = $orderby.' DESC';
		}
	}
	
	$condition = '';
	if($data!=null){
		$conditiontemp = array();
		foreach ($data as $ckey => $cvalue) {
			if($cvalue==-9){
				$conditiontemp[] = ''.$ckey."=0";
			}
			elseif($cvalue==null)
				$conditiontemp[] = ''.$ckey." IS NULL ";
			else				
				$conditiontemp[] = ''.$ckey."='".$cvalue."'";
		}
		if(count($conditiontemp)>0){
			$condition = implode(' AND ', $conditiontemp);
		}
	}
	if($like!=null){
		$conditiontemp1 = array();
		foreach ($like as $ckey => $cvalue) {
			if($cvalue != null)
				$conditiontemp1[] = ''.$ckey." LIKE '%".$cvalue."%'";
		}
		if(count($conditiontemp1)>0){
			$conditiontemp1 = implode(' AND ', $conditiontemp1);
			if($condition != '')
				$condition = $condition.' AND '.$conditiontemp1;
			else
				$condition = $condition;
		}
	}
	if($range!=null){
		$conditiontemp2 = array();
		foreach ($range as $ckey => $cvalue) {
			if($cvalue['from']!=null && $cvalue['to']!=null)
				$conditiontemp2[] = ''.$ckey.' >= '.$cvalue['from'].' AND '.$ckey.' <= '.$cvalue['to'];
		}
		if(count($conditiontemp2)>0){
			$conditiontemp2 = implode(' AND ', $conditiontemp2);
			if($condition != '')
				$condition = $condition.' AND '.$conditiontemp2;
			else
				$condition = $condition;
		}
	}
	if($data!=null||$like!=null||$range!=null)
		$where = 'WHERE '.$condition;
	
	$sql = 'SELECT * FROM `' . $table.'`' . $where . $orderby . $page;
// 	echo $sql;
	return $db->query($sql); 
}

/*
 * update操作封装
* @param $table 表名
* @param $condtion 数组，字段名=>值
* @param $data 数据数组， 字段名=>值
*
*/
function updateSql($table, $condition, $data){
	$db = DB();
	if($table===NULL || $table === ''){
		throw new Comm_Exception_Program('Should enter a table name');
	}
	if($condition==='' || $condition===NULL){
		throw new Comm_Exception_Program('Should enter update conditions');
	}
	//组合sql查询语句
	$sql = $condition1 = $condition2 = '';
	$condtiontemp1 = $condtiontemp2 = array();
	foreach ($condition as $ckey => $cvalue) {
		$conditiontemp[] = '`'.$ckey."`='".$cvalue."'";
	}
	$condition1 = implode(' AND ', $conditiontemp);
	foreach ($data as $key => $value) {
		$condtiontemp2[] = '`'.$key."`='".$value."'";
	}
	$condition2 = implode(', ', $condtiontemp2);
	$sql = 'UPDATE `'.$table.'` SET '.$condition2.' WHERE '.$condition1;
	$db->query($sql);
	return;
}
/*
 * insert操作封装
* @param $table 表名
* @param $data 数据数组，字段名=>值
*
*/
function insertSql($table, $data){
	$db = DB();
	if($table===NULL || $table === ''){
		throw new Comm_Exception_Program('Should enter a table name');
	}
	//组合sql查询语句
	$sql = $condition1 = $condition2 = '';
	$keys = array_keys($data);
	$values = array_values($data);
	foreach ($values as $key => $value) {
		if(is_string($value)){
			$values[$key] = "'".$value."'";
		}
	}
	$condition1 = implode(',', $keys);
	$condition2 = implode(',', $values);
	$sql = 'INSERT INTO `'.$table.'` ('.$condition1.') VALUES ('.$condition2.')';

	$db->query($sql);
	return;
}

function countSql($table=null,$data=null,$like=null,$range=null){
	$db = DB();
	if($table===NULL || $table === ''){
		throw new Comm_Exception_Program('Should enter a table name');
	}
	$condition = '';
	if($data!=null){
		$conditiontemp = array();
		foreach ($data as $ckey => $cvalue) {
			if($cvalue==-9){
				$conditiontemp[] = ''.$ckey."=0";
			}
			elseif($cvalue==null)
				$conditiontemp[] = ''.$ckey." IS NULL ";
			else				
				$conditiontemp[] = ''.$ckey."='".$cvalue."'";
		}
		if(count($conditiontemp)>0){
			$condition = implode(' AND ', $conditiontemp);
		}
	}
	if($like!=null){
		$conditiontemp1 = array();
		foreach ($like as $ckey => $cvalue) {
			if($cvalue != null)
				$conditiontemp1[] = ''.$ckey." LIKE '%".$cvalue."%'";
		}
		if(count($conditiontemp1)>0){
			$conditiontemp1 = implode(' AND ', $conditiontemp1);
			if($condition != '')
				$condition = $condition.' AND '.$conditiontemp1;
			else
				$condition = $condition;
		}
	}
	if($range!=null){
		$conditiontemp2 = array();
		foreach ($range as $ckey => $cvalue) {
			if($cvalue['from']!=null && $cvalue['to']!=null)
				$conditiontemp2[] = ''.$ckey.' >= '.$cvalue['from'].' AND '.$ckey.' <= '.$cvalue['to'];
		}
		if(count($conditiontemp2)>0){
			$conditiontemp2 = implode(' AND ', $conditiontemp2);
			if($condition != '')
				$condition = $condition.' AND '.$conditiontemp2;
			else
				$condition = $condition;
		}
	}
	if($data!=null||$like!=null||$range!=null)
		$where = 'WHERE '.$condition;
	
	$sql = 'SELECT count(*) FROM `' . $table.'`' . $where;
	return $db->query($sql);
}
