
<?php
include('menu.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Select a timetable</title>
    </head>
    <body>
        <div id="uploadpage">
            <h3>Select a timetable</h3>
            
            <form action="selected.php" method="post" enctype="multipart/form-data">
                <?php
                $sql = "SELECT Name FROM timetable ORDER BY idTimetable DESC;";
                $result = mysqli_query($db, $sql);

                echo "<select name='Name'>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='" . $row['Name'] . "'>" . $row['Name'] . "</option>";
                }
                echo "</select>";
                ?>
                <input type="submit" value="Select a timetable" name="submit">
            </form>
              
        </div>
    </body>
</html>