<?php 

    class Patient{
        private $id;
        private $fullname;
        private $gender;
        private $dateOfBirth;
        private $address;
        private $mobile;

        // Method
        

		public function __construct($id, $fullname, $gender, $dateOfBirth, $address, $mobile){
			$this->id = $id;
			$this->fullname = $fullname;
			$this->$gender = $gender;
			$this->dateOfBirth = $dateOfBirth;
			$this->address = $address;
			$this->mobile = $mobile;
		}

		//ID
		public function getId() {
			return $this->id;
		}
		
		public function setId($id){
			$this->id = $id;
			// return $this;
		}
		//Fullname
		public function getFullname() {
			return $this->fullname;
		}
		
		
		public function setFullname($fullname) {
			$this->fullname = $fullname;
			// return $this;
		}

		//gender
		public function getGender() {
			return $this->gender;
		}
		
		
		public function setGender($gender) {
			$this->gender = $gender;
			// return $this;
		}

		// date
		public function getDateOfBirth() {
			return $this->dateOfBirth;
		}
		
		
		public function setDateOfBirth($dateOfBirth) {
			$this->dateOfBirth = $dateOfBirth;
			// return $this;
		}

		// address
		public function getAddress() {
			return $this->address;
		}
		
		
		public function setAddress($address) {
			$this->address = $address;
			// return $this;
		}

		// mobile
		public function getMobile() {
			return $this->mobile;
		}
		
		
		public function setMobile($mobile) {
			$this->mobile = $mobile;
			// return $this;
		}
	}
?>