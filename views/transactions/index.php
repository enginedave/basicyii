<?php
$this->breadcrumbs=array(
	'Transactions',
);

$this->menu=array(
	array('label'=>'Create Transactions','url'=>array('create')),
	array('label'=>'Manage Transactions','url'=>array('admin')),
);
?>

<h1>Transactions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
