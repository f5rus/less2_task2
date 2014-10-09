<?php
	Class Controller
	{
		private $model;
		private $view;
		
		function __construct($model,$view)
		{
			$this->model = $model;			
			$this->view = $view;
		}
		function showListing()
		{				
			 $this->view->assign("list",$this->model->read());
			 $this->view->show_display();
		}
	}
?>
