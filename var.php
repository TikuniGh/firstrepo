SELECT
    fname, lname
FROM
    reg_table
WHERE
    id = 1;

    <a href="#" class="btn btn-info btn-sh">
  <span class="gliphicon gliphicon-sort-by-alphabet">
  </span>
    Sort by Alphabet
    <?php

foreach($conn->query('SELECT * FROM tblmember ') as $row){
  echo "<tr>";
  echo "<td>" .$row['last_name']."</td>";
  echo "<td>" .$row['first_name']."</td>";
  echo "</tr>";

}

  ?>
</a>

$sql ="SELECT * FROM tblmember ORDER BY first_name ,last_name";

<script>
      function sort(){
        btn = "SELECT * FROM tblmember ORDER BY first_name ";
      }
      btn.addActionListener("click", sort);
    </script>

    