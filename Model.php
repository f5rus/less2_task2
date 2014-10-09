<?php
	Class ModelDirect
	{		
		private $listDir = array();
		
		public function read()
		{			
			if ($handle = opendir('.')) 
			{
				while (false !== ($file = readdir($handle))) 
				{ 
					if ($file != "." && $file != "..") 
					{ 
						array_push($this->listDir,$file);						
					} 
				}
				closedir($handle); 
			}
			return $this->listDir;		
		}
	}
?>
