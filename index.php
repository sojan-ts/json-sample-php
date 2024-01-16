<?php 
header('Content-Type: application/json');

function json_sample_1() {
    $data = array(
        "username" => "hello",
        "email" => "hello@d.com",
        "status" => false
    );
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    echo $jsonData;
}

function json_sample_2() {
$result = array();
$result['data'] = array();

$userCount = 5;

for ($i = 1; $i <= $userCount; $i++) {
    $index = array();

    $index['id'] = $i;
    $index['name'] = 'user' . $i;
    $index['email'] = 'user' . $i . '@example.com';
    $index['contact'] = 'Contact' . $i;
    $index['address'] = 'Address' . $i;

    array_push($result['data'], $index);
}

$result["success"] = "1";

echo json_encode($result, JSON_PRETTY_PRINT);
}

function json_sample_3() {
    $data = array(
        "username" => "hello",
        "email" => "hello@d.com",
        "status" => false,
        "courses" => array(
            array(
                "course_name" => "physics",
                "course_code" => "PH101"
            ),
            array(
                "course_name" => "computer science",
                "course_code" => "CS101"
            )
        )
    );

    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    echo $jsonData;
}

function json_sample_4() {

$result = array();
$result['data'] = array();

$userCount = 5;

for ($i = 1; $i <= $userCount; $i++) {

    $index = array();

    $index['id'] = $i;
    $index['name'] = 'user' . $i;
    $index['email'] = 'user' . $i . '@example.com';
    $index['contact'] = 'Contact' . $i;
    $index['address'] = 'Address' . $i;

    $courses = array();
    for ($j = 1; $j <= 2; $j++) {
        $course = array(
            "course_name" => "Course " . $j,
            "course_code" => "C" . $j
        );
        array_push($courses, $course);
    }

    $index['courses'] = $courses;
    array_push($result['data'], $index);
}

$result["success"] = "1";
echo json_encode($result, JSON_PRETTY_PRINT);
}

json_sample_1();

?>