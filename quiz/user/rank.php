<?php
session_start();
define('page','rank.php');
define('TITLE','rank.php');
include('../dbcon.php');
include('includes/header.php');
if(isset($_SESSION['ruser']))
{
$email= $_SESSION['remail'];
}
else
{
    header("location:login.php");
}
echo' <div class="col-sm-9 col-md-10 text-center" id="gob">
    <p class="p-2 bg-dark text-white mt-5 ">List of Ranks</p>';
echo '<table class="table">
    <tbody>
    <tr>
    <th>rank</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Collage</th>
    <th>Score</th>
    ';
$sq=mysqli_query($conn,"select * from ranks order by rank desc");
$c=1;
while($row=mysqli_fetch_array($sq))
{
    $rank=$row['rank'];
    $email=$row['email'];
    $sql=mysqli_query($conn,"select * from user where email='$email'");
    while($row=mysqli_fetch_array($sql))
    {
        $name=$row['name'];
        $gender=$row['gender'];
        $collage=$row['collage'];
        echo '<tr>
        <th>'.$c++.'</th>
        <td>'.$name.'</td>
        <td>'.$gender.'</td>
        <td>'.$collage.'</td>
        <td>'.$rank.'</td>
        </tr>';

    }
}
echo '<tbody>
</table>
 '; 

?>
</div>
</div>




<?php
include('includes/footer.php')
?>