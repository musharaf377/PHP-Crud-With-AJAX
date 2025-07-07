<?php 
include 'db.php';

$query = "SELECT * FROM student";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){ ?>
  
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['department']; ?></td>
        <td><button class="btn btn-outline-primary m-3" onclick="studentEdit('<?php echo $row['id']; ?>')">Edit</button></td>
        <td><button class="btn btn-outline-danger" onclick="studentDelete(<?php echo $row['id']; ?>)">Delete</button></td>
    </tr>

<?php }
