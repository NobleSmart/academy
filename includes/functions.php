<?php
// Report all PHP errors
error_reporting(-1);

// define (Clark, "Clark");

function sayHello($f, $l, $y, $s, $nick){
    $age = 2019 - $y;
    $gender = ($s=="M" || $s=="m") ? "male" : "female";
    echo "Hello $f $l, you are $age years old. 
        You are a $gender<br/>";
    switch ($nick){
        case "Batman":
        case "batman":
            echo "You are from Gotham City";
            break;
        case "Superman":
            echo "You are from Metropolis";
            break;
        case "Wonder Woman":
            echo "You are from Amazon";
            break;
        default:
            echo "You are unknown superhero";
            break;
    }
    echo "<br/>";
}

function convertCtoF($temp){
    $tempF = 9/5 * $temp + 32;
    return $tempF;
}

function showTable($r, $c){
    // starts the initial string
    $strOut = "<h2>Creating a table of $r rows and $c cols</h2>";
    $strOut .= "<table border='1'><thead>";
    // creates a table header
    for($i = 0; $i<=$c; $i++){
        if ($i==0) $strOut .= "<th>&nbsp;</th>";
        else $strOut .= "<th>Col $i</th>";
    }
    $strOut .= "</thead><tbody>";
    // creates the table body
    for($i = 0; $i<$r; $i++){
        $class = $i%2!=0 ? " style='background-color:lightgrey;'" : "";
        $strOut .= "<tr $class>";
        for($j = 0; $j<=$c; $j++){
            $k = $i + 1;
            $v = $k * $j;
            if ($j==0) $strOut .= "<td><strong>Row $k</strong></td>";
            else $strOut .= "<td>$v</td>";
        }
        $strOut .= "</tr>";
    }
    // closes the body and table
    $strOut .= "</tbody></table>";
    echo $strOut;
}

function showMonths($months){
    echo "<ol>Months in a year:";
    $i=0;
    while($i < sizeof($months)){
        echo "<li>$months[$i]</li>";
        $i++;
    }
    echo "</ol>";
}

function showAAMonths($aaMonths){
    var_dump($aaMonths);
    $strOut = "<ul>Months in the year";
    echo sizeof($aaMonths);
    for($i=0; $i < sizeof($aaMonths); $i++){
        $m = $aaMonths[$i]["name"];
        $d = $aaMonths[$i]["days"];
        $strOut .= "<li>$m has $d days</li>";
    }
    $strOut .= "</ul>";
    echo $strOut;
}

function getCourses(){
    global $link;
    $sql='SELECT id, code, title from courses ORDER BY title asc';
    $result = mysqli_query($link, $sql);
    if (!$result) {
      $error = 'Error fetching data: ' . mysqli_error($link);
      echo $error;
      exit();
    }       
    while($courses=mysqli_fetch_array($result)){
        $id=htmlspecialchars($courses['id'],ENT_QUOTES, 'UTF-8');
        $code= htmlspecialchars($courses['code'],ENT_QUOTES, 'UTF-8');
        $title=htmlspecialchars($courses['title'],ENT_QUOTES, 'UTF-8');
        $lnkDetail = '<a href="courses.php?id='.$id.'">'.$code.'</a>';        
        echo $lnkDetail . ' - ';
        echo $title . '<br/>';
    }

}

function getCourseDetail($cId){
    global $link;
    $sql="SELECT id, code, title, description from courses where id=".$cId;
    $result = mysqli_query($link, $sql);
    if (!$result) {
      $error = 'Error fetching data: ' . mysqli_error($link);
      echo $error;
      exit();
    }       
    while($courses=mysqli_fetch_array($result)){
        $id=htmlspecialchars($courses['id'],ENT_QUOTES, 'UTF-8');
        $code= htmlspecialchars($courses['code'],ENT_QUOTES, 'UTF-8');
        $title=htmlspecialchars($courses['title'],ENT_QUOTES, 'UTF-8');
        $desc=htmlspecialchars($courses['description'],ENT_QUOTES, 'UTF-8');
        echo "<p><strong>Course ID</strong>: ".$code."</p>";
        echo "<p><strong>Course Title</strong>: ".$title."</p>";
        echo "<p><strong>Description</strong>: ".$desc."</p>";
        echo "<p><br/></p>";
        $lnkEdit = "<a href='course_edit.php?id=".$id."'>Edit Course</a><br/>";
        echo $lnkEdit;
    }

}

function getCourseForm($cId, $page){
    global $link;
    $sql="SELECT id, code, title, description from courses where id=".$cId;
    $result = mysqli_query($link, $sql);
    if (!$result) {
      $error = 'Error fetching data: ' . mysqli_error($link);
      echo $error;
      exit();
    } 
    echo "<form action='$page' method='post'>";    
    while($courses=mysqli_fetch_array($result)){
        $id=htmlspecialchars($courses['id'],ENT_QUOTES, 'UTF-8');
        $code= htmlspecialchars($courses['code'],ENT_QUOTES, 'UTF-8');
        $title=htmlspecialchars($courses['title'],ENT_QUOTES, 'UTF-8');
        $desc=htmlspecialchars($courses['description'],ENT_QUOTES, 'UTF-8');
        $inpCode = "<input type='text' name='code' value='".$code."'>";
        $inpTitle = "<input type='text' size=60' name='title' value='".$title."'>";
        $inpDesc = "<textarea name='desc' cols='40' rows='10'>".$desc."</textarea>";
        echo "<p><strong>Course ID</strong>: ".$inpCode."</p>";
        echo "<p><strong>Course Title</strong>: ".$inpTitle."</p>";
        echo "<p><strong>Description</strong>: ".$inpDesc."</p>";
        echo "<p><br/></p>";
        $inpId = "<input type='hidden' name='id' value=".$id." />";
        $btnSave = "<input type='submit' value='Save Course'/>&nbsp;";
        $btnCancel = "<input type='reset' value='Cancel'/>";
        echo $inpId;
        echo $btnSave;
        echo $btnCancel;
    }
    echo "</form>";
}

function saveCourse(){
    global $link;
    $id = $_POST["id"];
    $code = $_POST["code"];
    $title = $_POST["title"];
    $desc = $_POST["desc"];
    $sql="update `courses` set `id`=".$id.", `code`='".$code."', `title`='".$title.
        "', `description`='".$desc."' where id=".$id;
    echo "SQL: ".$sql;
    // $result = mysqli_query($link, $sql);
    // if (!$result) {
    //   $error = 'Error fetching data: ' . mysqli_error($link);
    //   echo $error;
    //   exit();
    // } 

}

function getClasses(){
    global $link;
    $sql='SELECT C.id, S.code as code, S.title as title, C.location as location, 
    concat(I.fname," ", I.lname) as fullname 
    FROM `classes` as C, `instructors` as I, `courses` as S 
    where C.instructor_id=I.id and C.course_id = S.id 
    order by S.code asc';
    $result = mysqli_query($link, $sql);
    if (!$result) {
      $error = 'Error fetching data: ' . mysqli_error($link);
      echo $error;
      exit();
    }       
    echo "<table style='border:solid 1px black;width:80%;margin-left:auto;margin-right:auto'><thead>
        <th>Code</th>
        <th>Title</th><th>Instructor</th>
        <th>Action</th>
        </thead>
        <tbody>";
    while($courses=mysqli_fetch_array($result)){
        $id=htmlspecialchars($courses['id'],ENT_QUOTES, 'UTF-8');
        $code= htmlspecialchars($courses['code'],ENT_QUOTES, 'UTF-8');
        $title=htmlspecialchars($courses['title'],ENT_QUOTES, 'UTF-8');
        $fullname=htmlspecialchars($courses['fullname'],ENT_QUOTES, 'UTF-8');
        $lnkDetail = '<tr><td><a href="courses.php?id='.$id.'">'.$code.'</a></td>';
        echo '<td>'.$lnkDetail.'</td><td>'.$title.'</td>';
        echo '<td>'.$fullname.'</td>';
        if (isset($_COOKIE["fullname"])){
            $userId = $_COOKIE["userid"];
            $btnSignup = '<input type="button" onclick="signup('.$id.','.$userId.')" value="Signup"/>';
            echo '<td>'.$btnSignup.'</td>';
        } else {
            $lnkLogin = '<a href="login.php">Login to Signup<a/>';
            echo '<td>'.$lnkLogin.'</td>';
        }
        echo "</tr>";
    }
    echo "</tbody></table>";

}

function signupForClass($courseId, $userId){
    global $link;
    $sql='insert into `registration` (student_id, course_id, reg_date, status)
        values ($userId, $courseId, DATE(), 0)';
    $result = mysqli_query($link, $sql);
    if (!$result) {
      $error = 'Error fetching data: ' . mysqli_error($link);
      echo $error;
      exit();
    }       
    return $sql;
    while($signup=mysqli_fetch_array($result)){
        
    }

}

function getUser($email, $password){
    global $link;
    $sql = "select * from students where email='$email' and password=MD5('$password')";
//    echo $sql;
    $result = mysqli_query($link, $sql);
    if (!$result) {
      $error = 'Error fetching data: ' . mysqli_error($link);
      echo $error;
      exit();
    }       
    $fullname = "";
    // $user=mysqli_fetch_array($result);
    // return $sql;
    while($user=mysqli_fetch_array($result)){
        $id=htmlspecialchars($user['id'],ENT_QUOTES, 'UTF-8');
        $fname = htmlspecialchars($user['first_name'],ENT_QUOTES, 'UTF-8');
        $lname = htmlspecialchars($user['last_name'],ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($user['email'],ENT_QUOTES, 'UTF-8');
        $fullname = "$fname $lname";
        $cookie_name = "fullname";
        $cookie_value = $fullname;        
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day    
        $cookie_name = "userid";
        $cookie_value = $id;        
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day    
    }
    return $fullname;
}

?>