<?php

function hammerOID_setup_database () {
    // initial code for database mirror kept
	/*
	$data = array();
	$data['columns'][] = array('name' => 'id', 'type' => 'int(11)', 'NULL' => false, 'auto_increment' => true);
	$data['columns'][] = array('name' => 'output', 'type' => 'text', 'NULL' => false);
	$data['columns'][] = array('name' => 'unix_time', 'type' => 'datetime', 'NULL' => false, 'default' => '0000-00-00 00:00:00');
	$data['columns'][] = array('name' => 'local_data_id', 'type' => 'mediumint(8)', 'NULL' => false, 'default' => '0');
	$data['columns'][] = array('name' => 'rrd_path', 'type' => 'varchar(255)', 'NULL' => false, 'default' => '');
	$data['columns'][] = array('name' => 'rrd_name', 'type' => 'varchar(19)', 'NULL' => false, 'default' => '');
	$data['columns'][] = array('name' => 'rrd_num', 'type' => 'tinyint(2)', 'NULL' => false, 'default' => '0');
	$data['primary'] = 'id';
	$data['keys'][] = array('name' => 'id', 'columns' => 'id');
	$data['keys'][] = array('name' => 'output', 'columns' => 'output');
	$data['keys'][] = array('name' => 'unix_time', 'columns' => 'unix_time');
	$data['keys'][] = array('name' => 'local_data_id', 'columns' => 'local_data_id');
	$data['keys'][] = array('name' => 'rrd_path', 'columns' => 'rrd_path');
	$data['keys'][] = array('name' => 'rrd_name', 'columns' => 'rrd_name');
	$data['keys'][] = array('name' => 'rrd_num', 'columns' => 'rrd_num');

	$data['type'] = 'MyISAM';
	$data['comment'] = 'Mirage data';
	api_plugin_db_table_create('mirage', 'mirage_data', $data);
	*/
	
	// Create Table to store Mirage User Settings/Options
	/*
	$data = array();
	$data['columns'][] = array('name' => 'id', 'type' => 'int(12)', 'NULL' => false, 'auto_increment' => true);
	$data['columns'][] = array('name' => 'name', 'type' => 'varchar(128)', 'NULL' => false);
	$data['columns'][] = array('name' => 'description', 'type' => 'varchar(512)', 'NULL' => false);
	$data['columns'][] = array('name' => 'emails', 'type' => 'varchar(512)', 'NULL' => false);
	$data['primary'] = 'id';
	$data['type'] = 'MyISAM';
	$data['comment'] = 'Mirage Plugin Settings';
	api_plugin_db_table_create ('mirage', 'mirage_settings', $data);
	*/
	
}

?>