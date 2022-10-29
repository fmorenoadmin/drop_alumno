<?php
	/**
	 * summary
	 */
	class alumnos extends database
	{
		/**
		 * summary
		 */
		private $table  = 'alumnos';
		//--------------------------
		public function datalist($con){
			$inf = null;
			//--------------------------
			$sql = "SELECT * FROM ".$this->table." ;";
			$res = mysqli_query($con, $sql) OR $inf.= 'Error: '.(mysqli_error($con));
			//--------------------------
			if ($res) {
				if ($res->num_rows > 0) {
					while ($row = mysqli_fetch_array($res)) {
						$inf .= '<option value="'.$row['codigo'].'" />';
					}
				}else{
					$inf .= '<option value="Sin rresultados" />'; 
				}
			}
			//--------------------------
			return $inf;
		}
	}