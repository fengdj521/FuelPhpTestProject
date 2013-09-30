<html>
<head>
    <title></title>
</head>
<body>

    <!-- ●ページネーション -->
    <!-- 「<<<< << 1 2 3 4 5 >> >>>>」 -->
    <?php echo Pagination::create_links(); ?>

    <!-- 「1 2 3 4 5」 -->
    <?php echo Pagination::page_links(); ?>

    <!-- << -->
    <?php echo Pagination::prev_link(); ?>

    <!-- >> -->
    <?php echo Pagination::next_link(); ?>


<!-- ●Formクラス利用 -->
<?php echo Form::open(array('action' => 'example/', 'method' => 'post', 'name' => 'f1', 'id' => 'id_f1', 'class' => 'class_f1')) . "\n"; ?>

<?php echo Form::fieldset_open(array('id' => 'id_fieldset', 'class' => 'class_fieldset')) . "\n"; ?>

<?php echo Form::input('name', 'value', array('id' => 'id_input', 'class' => 'class_input')) . "\n"; ?>

<?php echo Form::hidden('name', 'value', array('id' => 'id_hidden', 'class' => 'class_hidden')) . "\n"; ?>

<?php echo Form::password('name', 'value', array('id' => 'id_password', 'class' => 'class_password')) . "\n"; ?>

<?php echo Form::radio('name', 'value', null, array('id' => 'form_id_radio', 'class' => 'class_radio')) . "\n"; ?>
<?php echo Form::label('value', 'id_radio') . "\n"; ?>
<?php echo Form::radio('name', 'value2', true, array('id' => 'form_id_radio2', 'class' => 'class_radio')) . "\n"; ?>
<?php echo Form::label('value2', 'id_radio2') . "\n"; ?>
<?php echo Form::radio('name', 'value3', null, array('id' => 'form_id_radio3', 'class' => 'class_radio')) . "\n"; ?>
<?php echo Form::label('value3', 'id_radio3') . "\n"; ?>

<?php echo Form::checkbox('name', 'value', null, array('id' => 'form_id_checkbox', 'class' => 'class_checkbox')) . "\n"; ?>
<?php echo Form::label('value', 'id_checkbox') . "\n"; ?>
<?php echo Form::checkbox('name', 'value2', true, array('id' => 'form_id_checkbox2', 'class' => 'class_checkbox')) . "\n"; ?>
<?php echo Form::label('value2', 'id_checkbox2') . "\n"; ?>
<?php echo Form::checkbox('name', 'value3', null, array('id' => 'form_id_checkbox3', 'class' => 'class_checkbox')) . "\n"; ?>
<?php echo Form::label('value3', 'id_checkbox3') . "\n"; ?>

<?php echo Form::file('name', array('id' => 'id_file', 'class' => 'class_file')) . "\n"; ?>

<?php echo Form::button('name', 'value', array('id' => 'id_button', 'class' => 'class_button')) . "\n"; ?>

<?php echo Form::reset('name', 'value', array('id' => 'id_reset', 'class' => 'class_reset')) . "\n"; ?>

<?php echo Form::submit('name', 'value', array('id' => 'id_submit', 'class' => 'class_submit')) . "\n"; ?>

<?php echo Form::textarea('name', 'value', array('id' => 'id_textarea', 'class' => 'class_textarea')) . "\n"; ?>

<?php echo Form::select('name', 'value', array('value','value2','value3'), array('id' => 'form_id_select', 'class' => 'class_select')) . "\n"; ?>

<?php echo Form::label('value', 'id_label') . "\n"; ?>

<?php echo Form::fieldset_close() . "\n"; ?>

<?php echo Form::close() . "\n"; ?>
<form action="./example/sendtest">
	<input type="text" name="text01" value="てすとテスト">
	<input type="submit" name="s1" value="送信">
</form>

<form action="./example/sendtest01" method="post">
	<input type="text" name="text01" value="てすとテスト">
	<input type="submit" name="s1" value="送信">
</form>

</body>
</html>