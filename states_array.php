<?php
$statesInfo = [
['state' => 'Alabama', 'capital' => 'Montgomery', 'bird' => 'Yellowhammer'],
['state' => 'Alaska' , 'capital' => 'Juneau', 'bird' => 'Willow Ptarmigan'],
['state' => 'Arizona', 'capital' => 'Phoenix', 'bird' => 'Cactus Wren'],
['state' => 'Arkansas', 'capital' => 'Little Rock', 'bird' => 'Mockingbird'],
['state' => 'California', 'capital' => 'Sacramento', 'bird' => 'California Valley Quail'],
['state' => 'Colorado', 'capital' => 'Denver', 'bird'=> 'Lark Bunting'],
['state' => 'Connecticut', 'capital' => 'Hartford', 'bird' => 'Robin'],
['state' => 'Delaware', 'capital' => 'Dover', 'bird' => 'Blue Hen Chicken'],
['state' => 'Florida', 'capital' => 'Tallahassee', 'bird' => 'Mockingbird'],
['state' => 'Georgia', 'capital' => 'Atlanta', 'bird' => 'Brown Thrasher'],
['state' => 'Hawaii', 'capital' => 'Honolulu', 'bird' => 'Nene'],
['state' => 'Idaho', 'capital' => 'Boise', 'bird' => 'Mountain Bluebird'],
['state' => 'Illinois', 'capital' => 'Springfield', 'bird' => 'Cardinal'],
['state' => 'Indiana', 'capital' => 'Indianapolis', 'bird' => 'Cardinal'],
['state' => 'Iowa', 'capital' => 'Des Moines', 'bird' => 'Easter Goldfinch'],
['state' => 'Kansas', 'capital' => 'Topeka', 'bird' => 'Western Meadowlark'],
['state' => 'Kentucky', 'capital' => 'Frankfort', 'bird' => 'Cardinal'],
['state' => 'Louisiana', 'capital' => 'Baton Rouge', 'bird' => 'Eastern Brown Pelican'],
['state' => 'Maine', 'capital' => 'Augusta', 'bird' => 'Chickadee'],
['state' => 'Maryland', 'capital' => 'Annapolis', 'bird' => 'Baltimore Oriole'],
['state' => 'Massachusetts', 'capital' => 'Boston', 'bird' => 'Chickadee'],
['state' => 'Michigan', 'capital' => 'Lansing', 'bird' => 'Robin'],
['state' => 'Minnesota', 'capital' => 'St. Paul', 'bird' => 'Common Loon'],
['state' => 'Mississippi', 'capital' => 'Jackson', 'bird' => 'Mockingbird'],
['state' => 'Missouri', 'capital' => 'Jefferson City', 'bird' => 'Bluebird'],
['state' => 'Montana', 'capital' => 'Helena', 'bird' => 'Western Meadowlark'],
['state' => 'Nebraska', 'capital' => 'Lincoln', 'bird' => 'Western Meadowlark'],
['state' => 'Nevada', 'capital' => 'Carson City', 'bird' => 'Mountain Bluebird'],
['state' => 'New Hampshire', 'capital' => 'Concord', 'bird' => 'Purple Finch'],
['state' => 'New Jersey', 'capital' => 'Trenton', 'bird' => 'Eastern Goldfinch'],
['state' => 'New Mexico', 'capital' => 'Santa Fe', 'bird' => 'Roadrunner'],
['state' => 'New York', 'capital' => 'Albany', 'bird' => 'Bluebird'],
['state' => 'North Carolina', 'capital' => 'Raleigh', 'bird' => 'Cardinal'],
['state' => 'North Dakota', 'capital' => 'Bismarck', 'bird' => 'Western Meadowlark'],
['state' => 'Ohio', 'capital' => 'Columbus', 'bird' => 'Cardinal'],
['state' => 'Oklahoma', 'capital' => 'Oklahoma City', 'bird' => 'Scissor-taile Flycatcher'],
['state' => 'Oregon', 'capital' => 'Salem', 'bird' => 'Western Meadowlark'],
['state' => 'Pennsylvania', 'capital' => 'Harrisburg', 'bird' => 'Ruffed Grouse'],
['state' => 'Rhode Island', 'capital' => 'Providence', 'bird' => 'Rhode Island Red'],
['state' => 'South Carolina', 'capital' => 'Columbia', 'bird' => 'Great Carolina Wren'],
['state' => 'South Dakota', 'capital' => 'Pierre', 'bird' => 'Ring-necked Pheasant'],
['state' => 'Tennessee', 'capital' => 'Nashville', 'bird' => 'Mockingbird'],
['state' => 'Texas', 'capital' => 'Austin', 'bird' => 'Mockingbird'],
['state' => 'Utah', 'capital' => 'Salt Lake City', 'bird' => 'Common American Gull'],
['state' => 'Vermont', 'capital' => 'Montpelier', 'bird' => 'Herimt Thrush'],
['state' => 'Virginia', 'capital' => 'Richmond', 'bird' => 'Cardinal'],
['state' => 'Washington', 'capital' => 'Olympia', 'bird' => 'Willow Goldfinch'],
['state' => 'West Virginia', 'capital' => 'Madison', 'bird' => 'Robin'],
['state' => 'Wisconsin', 'capital' => 'Hartford', 'bird' => 'Robin'],
['state' => 'Wyoming', 'capital' => 'Cheyenne', 'bird' => 'Western Meadowlark']

];

function ListStates($array1){
	foreach ($array1 as $array1_key) {
		if($array1_key == 'state'){
			echo $array1_key;
		}
	}
	return $array1_key;
	var_dump($array1_key);
}




ListStates($statesInfo);