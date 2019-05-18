<?php
	class School {
		public $highschool = 'SMK Brantas Karangkates';
		public $university = 'None';
	}

	class Skill {
		public $name = array();
		public $score = array();
	}

	function biodata(){
		$name = 'Frendi';
		$address = 'Sidomulyo';
		$hobbies = array("Membaca", "Nonton Film");
		$is_married = false;
		$school = new School();
		$skill = new Skill();
		$skill->name[] = "PHP";
		$skill->score[] = "75";
		$skill->name[] = "Javascript";
		$skill->score[] = "60";

		$out = array(
			'name' => $name,
			'address' => $address,
			'hobbies' => $hobbies,
			'is_married' => $is_married,
			'school' => $school,
			'skill' => $skill
		);
		return json_encode($out);
	}
	echo biodata();
?>