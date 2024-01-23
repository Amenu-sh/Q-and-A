<?php
//Clean up
function cleanUp($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
}

//Register
function registerUser($fname, $lname, $email, $password) {
    global $sqlConnect;
    $fname = cleanUp($fname);
    $lname = cleanUp($lname);
    $email = cleanUp($email);
    $password = md5($password);
    $join_date = date("Y-m-d H:i:s");
    $uHash = md5($email);

    //create query
    $query_text = "INSERT INTO Users (fName, lName, email, pass, join_date, uHash) VALUES ('$fname', '$lname', '$email', '$password', '$join_date', '$uHash')";

    $query = mysqli_query($sqlConnect, $query_text);

    //handle if there is an error
    if ($query) {
        //send email
        // $to = $email;
        // $subject = "Welcome to Q&A";
        // $message = "Thank you for registering with Q&A. 
        
    } else {
        // echo "Error: " . $query_text . "<br>" . mysqli_error($sqlConnect);
        
    }

}

//Login
function loginUser($email, $password) {
    global $sqlConnect;
    $email = cleanUp($email);
    $password = md5($password);

    $fetched_data = array();

    //create query
    $query_text = "SELECT * FROM Users WHERE email='$email' AND pass='$password'";

    $query = mysqli_query($sqlConnect, $query_text);

    //handle if there is an error
    if($query){
        while($row = mysqli_fetch_assoc($query)){
            $fetched_data = $row;
        }
    }
    return $fetched_data;
}

//Add Topic
function addTopic($topic) {
    global $sqlConnect;
    $topic = cleanUp($topic);

    //create query
    $query_text = "INSERT INTO Topics (topicName) VALUES ('$topic')";

    $query = mysqli_query($sqlConnect, $query_text);

    //handle if there is an error
    if ($query) {
        // echo "New record created successfully";
    } else {
        // echo "Error: " . $query_text . "<br>" . mysqli_error($sqlConnect);
    }
}

//Get Topics
function getTopics() {
    global $sqlConnect;
    $fetched_data = array();

    //create query
    $query_text = "SELECT * FROM Topics";

    $query = mysqli_query($sqlConnect, $query_text);

    //handle if there is an error
    if($query){
        while($row = mysqli_fetch_assoc($query)){
            $fetched_data[] = $row;
        }
    }
    return $fetched_data;
}

//Get the user info from the uHash
function getUserInfoFromHash($uHash) {
    global $sqlConnect;
    $userHash = cleanUp($uHash);
    $fetched_data = array();

    //create query
    $query_text = "SELECT * FROM Users WHERE uHash='$userHash'";

    $query = mysqli_query($sqlConnect, $query_text);

    //handle if there is an error
    if($query){
        while($row = mysqli_fetch_assoc($query)){
            $fetched_data = $row;
        }
    }
    return $fetched_data;
}

//Add Question
function addQuestion($uid, $tid, $question, $explanation) {
    global $sqlConnect;
    $uid = cleanUp($uid);
    $tid = cleanUp($tid);
    $question = cleanUp($question);
    $explanation = cleanUp($explanation);
    $askedDate = date("Y-m-d H:i:s");
    $qHash = md5($question.$askedDate);

    //create query
    $query_text = "INSERT INTO Question (uid, tid, question, explanation, date) VALUES ('$uid', '$tid', '$question', '$explanation', '$askedDate', '$qHash')";

    $query = mysqli_query($sqlConnect, $query_text);

    //handle if there is an error
    if ($query) {
        // echo "New record created successfully";
    } else {
        // echo "Error: " . $query_text . "<br>" . mysqli_error($sqlConnect);
    }
}
