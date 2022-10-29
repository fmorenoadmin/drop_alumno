<?php
	/**
	 * De esta forma es más segura
	 */
	class database
	{
		/**
		 * summary
		 */
		public function connect(){
			$con = mysqli_connect('localhost','root','');
			mysqli_select_db($con, 'iestp');
			//----------------------------------
			return $con;
		}
	}