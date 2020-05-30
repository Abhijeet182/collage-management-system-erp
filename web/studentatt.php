<form name="insert-attendance.php" action="insert-attendance.php" method="post">
    <?php
        include_once('dbh.php');
        $result = $db->prepare("SELECT * FROM addstudent WHERE dept_id=10 AND  year=18");

        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++ ) {
            ?>

            <tr>
                <td><input type="text" name="stuid[]" value="<?php echo $row['Serial_number'] ?>"></input></td>
                <td><input type="text" name="stuname[]" value="<?php echo $row['full_name'] ?>"></input></td>
                <td><input type="text" name="stuclass[]" value="<?php echo $row['dept_id'] ?>"></input></td>
                <td>
                  <input type="text" name="year[]" value="<?php echo $row['year'] ?>"></input>
                    <input type="hidden" value="<?php echo date("Y-m-d"); ?>" name="attdate[]">
                <td>
                    <select name="attndc[]">
                        <option value="present">PRESENT</option>
                        <option value="absent">ABSENT</option>
                        <option value="leave">LEAVE</option>
                    </select>
                </td>
            </tr>
            <?php  echo $row['serial_number'];
        }
    ?>
    <input type="submit" value="submit">
</form>