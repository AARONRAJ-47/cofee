 ?>
            <table class='table table-lg table-hover' id='myTable'>
              <thead>
                <tr>
                  <th>ID<br><i class=ti-credit-card></th><br>
                  <th>ROLL NUMBER</th><br>
                  <th>TAMIL</th><br>
                  <th>ENGLISH</th><br>
                  <th>MATHS</th><br>
                  <th>SCIENCE</th><br>
                  <th>SOCIAL</th><br>
                </tr>
              </thead>
              <tbody>
                <?php
                $i=1;
                while($row = $result->fetch_assoc()) {
                  ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row["no"];?> </td>
                  <td> <?php echo $row["tamil"];?> </td>
                  <td> <?php echo $row["english"];?> </td>
                   <td> <?php echo $row["maths"];?> </td>
                   <td> <?php echo $row["science"];?> </td>
                  <td> <?php echo $row["social"];?> </td>       
                </tr>
                <?php
                $i++;
                  }
                  ?>
              </tbody>
            </table>
            <?php
}