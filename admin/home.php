<header>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</header>
<style>
	.custom-menu {
        z-index: 1000;
	    position: absolute;
	    background-color: #ffffff;
	    border: 1px solid #0000001c;
	    border-radius: 5px;
	    padding: 8px;
	    min-width: 13vw;
}
a.custom-menu-list {
    width: 100%;
    display: flex;
    color: #4c4b4b;
    font-weight: 600;
    font-size: 1em;
    padding: 1px 11px;
}
	span.card-icon {
    position: absolute;
    font-size: 3em;
    bottom: .2em;
    color: #ffffff80;
}
.file-item{
	cursor: pointer;
}
a.custom-menu-list:hover,.file-item:hover,.file-item.active {
    background: #80808024;
}
table
        {
          border-collapse: collapse; 
          width: 92.5%; 
          border-spacing: 0;
          border: 1px solid #ddd;
          background-color: #fff; 
          margin-top: 50px; 
          margin-left: 50px; 
          margin-right: 50px;
        }
th, td {
  text-align: left;
  padding: 8px;
}
a.custom-menu-list span.icon{
		width:1em;
		margin-right: 5px
}
.candidate {
    margin: auto;
    width: 23vw;
    padding: 0 10px;
    border-radius: 20px;
    margin-bottom: 1em;
    display: flex;
    border: 3px solid #00000008;
    background: #8080801a;

}
.candidate_name {
    margin: 8px;
    margin-left: 3.4em;
    margin-right: 3em;
    width: 100%;
}
	.img-field {
	    display: flex;
	    height: 8vh;
	    width: 4.3vw;
	    padding: .3em;
	    background: #80808047;
	    border-radius: 50%;
	    position: absolute;
	    left: -.7em;
	    top: -.7em;
	}
	
	.candidate img {
    height: 100%;
    width: 100%;
    margin: auto;
    border-radius: 50%;
}
.vote-field {
    position: absolute;
    right: 0;
    bottom: -.4em;
}
tr:nth-child(even){background-color: #f2f2f2;}

@media (max-width: 1131px)
{
  .doc
          {
            margin-left: 50px;
            margin-right: 50px;
            overflow-x: auto;
          }
          table
          {
            width: 100%;
            margin-right:0px;
            margin-left: 0px;
          }
}

</style>

<?php
$con=mysqli_connect("localhost","root","","hotel_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM checked WHERE status = '0'";
$sql1="SELECT * FROM rooms WHERE status = '0'";
$sql2="SELECT * FROM room_categories";
$sql3="SELECT * FROM users";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $booking = $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
if ($result=mysqli_query($con,$sql1))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $rooms = $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
 if ($result=mysqli_query($con,$sql2))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $type = $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
 if ($result=mysqli_query($con,$sql3))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $users = $rowcount;
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>

<div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fas fa-hotel w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo "$booking"; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>New Bookings</h4>
      </div>
    </div>

    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fas fa-bed w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo "$rooms"; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Available Rooms</h4>
      </div>
    </div>

    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo "$type"; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Room Types</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo "$users"; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>

    <div class="doc">
      <h1 style="margin-top: 150px;">Massages</h1>
  <table>
    <tr>
        <th nowrap="true" style="text-align: center; padding: 8px; background-color: #000; color: #fff; font-size: 18px;">FIRST NAME</th>
        <th nowrap="true" style="text-align: center; padding: 8px; background-color: #000; color: #fff; font-size: 18px;">LAST NAME</th>
        <th nowrap="true" style="text-align: center; padding: 8px; background-color: #000; color: #fff; font-size: 18px;">TEL</th>
        <th nowrap="true" style="text-align: center; padding: 8px; background-color: #000; color: #fff; font-size: 18px;">EMAIL</th>
        <th nowrap="true" style="text-align: center; padding: 8px; background-color: #000; color: #fff; font-size: 18px;">SUBJECT</th>
    </tr>

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT fname, lname, tel, email, discription FROM contact ";

    $result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    ?>

    <?php
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
    ?>
      <td nowrap="true" style="text-align: center; padding: 8px; font-size: 18px;"><?php echo $row['fname']; ?></a></td>
      <td nowrap="true" style="text-align: center; padding: 8px; font-size: 18px;"><?php echo $row['lname']; ?></a></td>
      <td nowrap="true" style="text-align: center; padding: 8px; font-size: 18px;"><?php echo $row['tel']; ?></a></td>
      <td nowrap="true" style="text-align: center; padding: 8px; font-size: 18px;"><?php echo $row['email']; ?></a></td>
      <td nowrap="true" style="text-align: center; padding: 8px; font-size: 18px;"><?php echo $row['discription']; ?></a></td>
    </tr>  
    <?php
    }
} 
else 
{
    echo "";
}
$conn->close();
?>
</table> 

</div>
<script>
	
</script>