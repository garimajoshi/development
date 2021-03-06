<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Employee id', 'employee_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('employee_id', Input::post('employee_id', isset($leafe) ? $leafe->employee_id : ''), array('class' => 'span4', 'placeholder'=>'Employee id')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Date of leave', 'date_of_leave', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('date_of_leave', Input::post('date_of_leave', isset($leafe) ? $leafe->date_of_leave : ''), array('class' => 'span4', 'placeholder'=>'Date of leave')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Reason', 'reason', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('reason', Input::post('reason', isset($leafe) ? $leafe->reason : ''), array('class' => 'span4', 'placeholder'=>'Reason')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Type', 'type', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('type', Input::post('type', isset($leafe) ? $leafe->type : ''), array('class' => 'span4', 'placeholder'=>'Type')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>