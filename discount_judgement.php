<?php
$age = 19;
$is_member = false;
$is_student = true;

// 条件1: 18歳以上かつ会員
if ($age >= 18 && $is_member) {
    echo "会員割引が適用されます<br>";
} else{
    echo "会員割引が適用されません<br>";
}

// 条件2: 65歳以上または学生
if ($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます<br>";
} else{
    echo "シニア・学生割引が適用されません<br>";
}

