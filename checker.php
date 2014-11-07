<?php
	function checkUDID($udid) 
	{
		$acceptedUDID = array('34524d1af971e58355fac6ec0911aed3b0146409', 'efgh');
		
		if (in_array($udid, $acceptedUDID))
			return 'YES';
		else
			return 'NO';	
	}
?>