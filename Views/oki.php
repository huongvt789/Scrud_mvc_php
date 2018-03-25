
<?php
	$conn = mysqli_connect("mysql", "root", "root", "thuctapPHP");
	    if(!$conn)
	    {
	    	echo "Connect Failed!". mysqli_connect_error($conn);
	    }
	    	echo "Successsful";
	    	 $sql = "SELECT * FROM student";
            $result = $conn->query($sql);
?>
<html>
<head></head>
<body>
	<table id="Confirms" border ="2" style="length:900px;width:350px;">
                  <thead>
                    <tr style= "background-color: #A4A4A4;">
                      <td>Booking ID:</td>
                  
                      <td>No. of Seats:</td>
                      <td>Person:</td>
                    </tr>
                  </thead>
                <tbody>
                    <?php
                      while(($row = $result->fetch_assoc()) !== null){
                        echo
                        "<tr>
                          <td>{$row['studentId']}</td>
                          <td>{$row['tudentName']}</td>
                          <td>{$row['studentStatus']}</td>
                        </tr>\n";
                      }
                    ?>
                </tbody>
            </table>
</body>
</html>
