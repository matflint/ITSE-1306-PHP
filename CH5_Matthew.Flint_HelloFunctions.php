/*
Matthew Flint
ITSE-1306
1-25-18
CH4 code
*/
<?php

	function fix_names($n1);
	{
		$n1 = ucfirst(strtolower($n1));
		return $n1;
	}
	
	$object = new PotentialUser;
	
	class PotentialUser
	{
		function __construct($Uname, $Fname, $Lname, $Pword, $Pnum, $Eml, $Addr)
		{
			public $Username = $Uname;
			public $FirstName = $Fname;
			public $LastName = $Lname;
			public $Password = $Pword;
			public $PhoneNumber = $Pnum;
			public $Email = #Eml;
			public $Address $Addr;
		}
	}
	class EnrolledUser extends PotentialUser($class, $subject, $instr)
	{
		public ClassName = $class;
		public Subject = $subject;
		public Instructor = $instr;
	}