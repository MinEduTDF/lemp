<?php echo $this->Html->script(array('tooltip', 'datepicker', 'moment', 'bootstrap-datetimepicker')); ?>
<?php $this->TinyMCE->editor(array('theme' => 'advanced', 'mode' => 'textareas')); ?>
<div class="row">
	<div class="col-xs-6 col-sm-3">
	    <?php echo $this->Form->input('created', array('label' => 'Creado*', 'id' => 'datetimepicker1', 'type' => 'text', 'class' => 'input-group date', 'class' => 'form-control', 'span class' => 'fa fa-calendar')); ?>
    </div>
</div><hr />
<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-12">
  		<div class="unit"><strong><h3>Datos Generales</h3></strong><hr />	
  	  	<?php
		 	echo $this->Form->input('anio', array('label' => 'Año', 'empty' => 'Ingrese un año...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un año'));
		 	echo $this->Form->input('resolucion_id', array('label' => 'Resolución N°*', 'empty' => 'Ingrese una resolución...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
		 	echo $this->Form->input('titulacion_id', array('label' => 'Titulación*', 'empty' => 'Ingrese una titulación...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
		?>
		</div>
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12">
  		<div class="unit"><strong><h3>Datos Específicos</h3></strong><hr />	
  	  	<?php
		 	echo $this->Form->input('contenidos', array('label' => 'Contenidos', 'type' => 'file', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
            echo $this->Form->input('plan_de_estudio', array('label' => 'Plan de Estudio', 'type' => 'file', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
        ?>
		</div>
	</div>
	<div class="col-md-12 col-sm-6 col-xs-12">
        <?php
         	echo $this->Form->input('participantes', array('label'=>'Docentes Participantes', 'type' => 'textarea', 'between' => '<br>', 'class' => 'form-control')); 
        ?>
    </div>
</div>
<script type="text/javascript">
            $('#datetimepicker1').datetimepicker({ 
			useCurrent: true, //this is important as the functions sets the default date value to the current value
			format: 'YYYY-MM-DD hh:mm',
			}).on('dp.change', function (e) {
                  var specifiedDate = new Date(e.date);
				  if (specifiedDate.getMinutes() == 0)
				  {
					  specifiedDate.setMinutes(1);
					  $(this).data('DateTimePicker').date(specifiedDate);
				  }
            });
  </script>
</div>