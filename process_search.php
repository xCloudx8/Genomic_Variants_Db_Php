<html>

  <head>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-red.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>

  <!-- Always shows a header, even in smaller screens. -->
  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Results</span>
      </div>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
      <span class="mdl-layout-title"><h6> Database</h6></span>
      <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
        <a class="mdl-navigation__link" href="http://157.27.254.179/PgDb/index.html">Home</a>
        <a class="mdl-navigation__link" href="http://157.27.254.179/PgDb/search.php">Search</a>
        <a class="mdl-navigation__link" href="http://157.27.254.179/PgDb/updates.html">Update</a>
        <a class="mdl-navigation__link" href="http://157.27.254.179/PgDb/faq.html">FAQ</a>
        <a class="mdl-navigation__link" href="http://157.27.254.179/PgDb/about.html">About</a>
      </nav>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content">
      <style>
          .mdl-data-table{
            margin-top: 25px;
            border-spacing: 3px;
            table-layout: auto;
            width: 40px;
          }

          table {
            width: 85%;
            border-collapse: collapse;
            margin-top: 25px;
            margin-left: 15px;
          }
          th {
            width: auto;
            background: #e0e0e0;
            color: #e0e0e0;
            font-weight: bold;
          }
          th:first-child{
            width: auto;
            border-top: 1px solid #e0e0e0;
          }
          th:last-child{
            width: auto;
            border-bottom: 0px solid #e0e0e0;
          }
          td, th {
            width: auto;
            padding: 5px;
            text-align: left;
            border-right: solid 1px #e0e0e0;
            border-left: solid 1px #e0e0e0;
          }
          tr:hover{
            background: #eeeeee;
          }

        </style>
        <?php

          $host = '157.27.254.179';
          $port = '5432';
          $database = 'genomes';
          $user = 'daniele';
          $password = 'Cloudtesi8!';

          $connectString = 'host=' . $host . ' port=' . $port . ' dbname=' . $database .
          	' user=' . $user . ' password=' . $password;


          $link = pg_connect ($connectString);
          if (!$link)
          {
          	die('Error: Could not connect: ' . pg_last_error());
          }


          $pg_id = pg_escape_string($link, $_POST['pg_id']);
          $pheno = pg_escape_string($link, $_POST['pheno']);

          // sending query
          if ($pg_id != null){
            $result = pg_query("SELECT * FROM project_infos  ");
          }
          else{
            $result = pg_query("SELECT * FROM project_infos  ");
          }
          if (!$result) {
              die("Query to show fields from table failed");
          }

          $fields_num = pg_num_fields($result);

        ?>

          <table>
              <tr>
                <th>Family_id</th>
                <th>Patient_id</th>
                <th>Father_id</th>
                <th>Mother_id</th>
                <th>Arrival_date</th>
                <th>Project_id</th>
                <th>Library_type</th>
                <th>Capture_id</th>
                <th>Run_id</th>
                <th>Patient_age</th>
                <th>Patient_sex</th>
                <th>Patient_ethnic_group</th>
                <th>Disease_id</th>
                <th>Phenotype_notes</th>
                <th>Notes</th>
              </tr>
              <?php
              // printing table rows
              while($row = pg_fetch_row($result))
              {
                  echo "<tr>";

                  // $row is array... foreach( .. ) puts every element
                  // of $row to $cell variable
                  foreach($row as $cell)
                      echo "<td>$cell</td>";

                  echo "</tr>\n";
              }
              pg_free_result($result);
            ?>
          </table>


      </div>
    </main>
  </div>
</html>
