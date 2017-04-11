<?php echo $this->Form->create('Centro',array('type'=>'get','url'=>'index', 'novalidate' => true));?>
<div class="form-group">
    <?php 
   		echo $this->Form->input('cue', array('label' => false, 'class' => 'form-control', 'Placeholder' => 'Ingrese Nº de CUE...'));
    ?><br>
    <?php
	    $niveles = array('NINGUNO' => 'NINGUNO', 'INICIAL' => 'INICIAL', 'PRIMARIA' => 'PRIMARIA');
	    echo $this->Form->input('nivel', array('label' =>false, 'empty' => 'Ingrese un nivel...', 'options' => $niveles, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Selecciones una opción de la lista'));
	?><br>    
</div>
<hr>
<div class="text-center">
   <?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-primary'));?>
</div>
