<?php
    include_once ("dbh.php");
    $total = count($_POST['stuid']);

    for($i=0;$i<$total;$i++){
        $studentid = $_POST['stuid'][$i];
        $stuname = $_POST['stuname'][$i];
        $stuclass = $_POST['stuclass'][$i];
        $section = $_POST['section'][$i];
        $attdate = $_POST['attdate'][$i];
        $attndc = $_POST['attndc'][$i];

        $sql = $db->prepare("INSERT INTO sc_attendance (student_id, class, section, status,attendance_date) VALUES (?, ?, ?, ?, ?)");
        $sql->bind_param($studentid, $stuclass, $section, $attdate, $attndc);
        $db->execute($sql);
    }
?>