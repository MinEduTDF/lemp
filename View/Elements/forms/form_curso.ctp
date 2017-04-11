<?php echo $this->Html->script(array('acordeon', 'tooltip', 'datepicker', 'moment', 'bootstrap-datetimepicker')); ?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="row">
	<div class="col-xs-6 col-sm-3">
	    <?php echo $this->Form->input('created', array('label' => 'Creado*', 'id' => 'datetimepicker1', 'type' => 'text', 'class' => 'input-group date', 'class' => 'form-control', 'span class' => 'fa fa-calendar')); ?>
  </div>
</div><hr />
<div class="row"><!--<div class="subtitulo">Datos del curso</div>-->
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="unit"><strong><h3>Datos Generales</h3></strong><hr />
  		<?php
          if($current_user['role'] == 'superadmin'): 
            echo $this->Form->input('centro_id', array('label' => false, 'empty' => 'Ingrese una institución...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('centro_id', array('label' => false, 'empty' => 'Ingrese un nivel...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione opciones de la lista'));
          endif ;  
          if($centroNivel[$current_user['centro_id']] == 'INICIAL') {
            $anios = array('1ro' => '1ro', '2do' => '2do', '3ro' => '3ro');
          } else {
            $anios = array(
            '1ro' => '1ro', '2do' => '2do', '3ro' => '3ro', '4to' => '4to', '5to' => '5to', '6to' => '6to', '7mo' => '7mo');
          }
          echo $this->Form->input('anio', array('label' =>'Año*', 'empty' => 'Ingrese un año...', 'options' => $anios, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => '
            tooltip', 'data-placement' => 'bottom', 'title' => 'Selecciones una opción de la lista'));
      ?>
    </div>
  </div>     
  <div class="col-md-6 col-sm-6 col-xs-12"><!--<div class="subtitulo">Datos de contacto</div>-->
		<div class="unit"><strong><h3>Datos Específicos</h3></strong><hr />
			  <?php		
          if($centroNivel[$current_user['centro_id']] == 'INICIAL') {
            $divisiones = array(
              'Inicial' => array('ROJA' => 'ROJA', 'CELESTE' => 'CELESTE', 'AMARILLA' => 'AMARILLA', 'VERDE' => 'VERDE', 'NARANJA' => 'NARANJA'),);
          } else {
            $divisiones = array(
              'Primaria' => array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E'),);
          }
          echo $this->Form->input('division', array('label' => 'División*', 'empty' => 'Ingrese una división...', 'options' => $divisiones, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
          $turnos = array('Manana' => 'Manana', 'Tarde' =>'Tarde', 'Mañana Extendida' =>'Mañana Extendida', 'Tarde Extendida' => 'Tarde Extendida', 'Doble Extendida' =>'Doble Extendida', 'Otro' =>'Otro');
          echo $this->Form->input('turno', array('label' => 'Turno*', 'empty' => 'Ingrese un turno...', 'options' => $turnos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
          echo $this->Form->input('aula_nro', array('label' => 'Aula Nro*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca un número de aula', 'Placeholder' => 'Ingrese un nº de Aula...'));
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
