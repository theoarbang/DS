<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdb {

        public function db()
        {
			//-- database configurations
			$dbhost='localhost';
			$dbuser='root';
			$dbpass='';
			$dbname='sispakjantung';
			//-- database connections
			$db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
			//-- halt and show error message if connection fail
			if ($db->connect_error) {
				die('Connect Error ('.$db->connect_errno.')'.$db->connect_error);
			}

			return $db;
        }
}