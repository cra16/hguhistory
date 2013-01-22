<?php
/**
 * @class  hiswikiAdminModel
 * @author CRA (cra.handong@gmail.com)
 * @brief  hiswiki 모듈의 admin model class
 **/

class hiswikiAdminModel extends hiswiki {

	/**
	 * @brief 초기화
	 **/
	function init() {

	}

	
	function getCategoryTable($tableName){
			
		$table = "<table width='170px' height='1000px' cellpadding='5' cellspacing='5'
		border='1' align='center';>
			<tr>
				<td><p style='text-align:center'>".$tableName."</p></td>
			</tr>
		</table>";
		
		
		
		return $table;
	}
	
	function getMainTable($tableName){
		$table = "<table width='800px' height='400px' cellpadding='5' cellspacing='5' border='1'
				align='center';>
				<tr>
					<td><p style='text-align:center'>".$tableName."</p></td>
				</tr>
			</table>";
		return $table;
	}
	
	function getTable($tableName){
			
		$table = "<table width='400px' height='300px' cellpadding='10' cellspacing='5' border='1'
		align='center';>
			<tr>
				<td><p style='text-align:center'>".$tableName."</p></td>
			</tr>
		</table>";
		return $table;
	}
	
}
?>