<?php
	Class ViewDirect
	{
		private $variables = array();
		private $file_include;
		
		function __construct($file_include)
		{
			$this->file_include = $file_include;
		}
		
		function assign($name,$value)
		{
			$this->variables[$name] = $value;	
			
		}		
		
		function show_display()
		{				
			require_once $this->file_include;
		}
	}
?>
