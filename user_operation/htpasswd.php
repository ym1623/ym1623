<?php
	class Htpasswd {

		private $file = '';
		private $salt = 'AynlJ2H.74VEfI^BZElc-Vb6G0ezE9a55-Wj';

		private function write($pairs = array()) {
			$str = '';
			foreach ($pairs as $username => $password) {
				$str .= "$username:{SHA}$password\n";
			}
			file_put_contents($this -> file, $str);
		}

		private function read() {
			$pairs = array();
			$fh = fopen($this -> file, 'r');
			while (!feof($fh)) {
				$pair_str = str_replace("\n", '', fgets($fh));
				$pair_array = explode(':{SHA}', $pair_str);
				if (count($pair_array) == 2) {
					$pairs[$pair_array[0]] = $pair_array[1];
				}
			}
			return $pairs;
		}

		private function getHash($clear_password = '') {
			if (!empty($clear_password)) {
				return base64_encode(sha1($clear_password, true));
			} else {
				return false;
			}
		}

		public function __construct($file) {
			if (file_exists($file)) {
				$this -> file = $file;
			} else {
				die($file." doesn't exist.");
				return false;
			}
		}

		public function addUser($username = '', $clear_password = '') {
			if (!empty($username) && !empty($clear_password)) {
				$all = $this -> read();
				if (!array_key_exists($username, $all)) {
					$all[$username] = $this -> getHash($clear_password);
					$this -> write($all);
				}
			} else {
				return false;
			}
		}

		public function deleteUser($username = '') {
			$all = $this -> read();
			if (array_key_exists($username, $all)) {
				unset($all[$username]);
				$this -> write($all);
			} else {
				return false;
			}
		}

		public function doesUserExist($username = '') {
			$all = $this -> read();
			if (array_key_exists($username, $all)) {
				return true;
			} else {
				return false;
			}
		}

		public function getClearPassword($username) {
			return strtolower(substr(sha1($username.$this -> salt), 4, 12));
		}

	}

// $passwdHandler = new Htpasswd('/home/myuser/.htpasswd');
// 02
 
// 03
// // Add a user with name 'user1' and password 'I prefer to use passphrase rather than password.' if it doesn't exist in .htpasswd.
// 04
// $passwdHandler -> addUser('user1', 'I prefer to use passphrase rather than password.');
// 05
// // Delete the user 'user1' if it exists in .htpasswd.
// 06
// $passwdHandler -> deleteUser('user1');
// 07
 
// 08
// // Check if user 'user1' exists in .htpasswd.
// 09
// if ($passwdHandler -> doesUserExist('user1')) {
// 10
//     // User 'user1' exists.
// 11
