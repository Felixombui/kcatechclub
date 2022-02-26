<?php
include 'config.php';
if(isset($_POST['register'])){
    $names=addslashes($_POST['Fullname']);
    $regno=addslashes($_POST['RegNo']);
    $course=addslashes($_POST['Course']);
    $contact=addslashes($_POST['Contact']);
    if(mysqli_query($config,"INSERT INTO members(regno,names,course,contacts) VALUES('$regno','$names','$course','$contact')")){
        $result='Thank you for registering with Tech Club. You are our hero.';
    }else{
        $result='Registration Failed!';
    }
}
?>
<img src="images/logo.PNG">
<form  method="post">
<h1><b>KCA TECH CLUB</b></h1>
    <table width="40%" style="border-collapse: collapse;">
    <tr><td><input type="text" name="Fullname" placeholder="Enter your full name e.g Felix Ombui"  required="required"></td></tr>
    <tr><td> <input type="text" name="RegNo" placeholder="Enter your registration number e.g 19/04042"  required="required"></td></tr>
    <tr><td><input type="text" name="Course" placeholder="Enter your course e.g bsd"  required="required"></td></tr>
    <tr><td> <input type="text" name="Contact" placeholder="Enter your Phone number e.g 0745032454"  required="required"></td></tr>
    <tr><td><input type="submit" name="register" value="Register" >
    </td></tr></table>
    <p>
    <?php echo $result ?>
    </p>
    
</form>
<?php
include 'styles.html';
?>