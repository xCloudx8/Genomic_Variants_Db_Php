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
        <a class="mdl-navigation__link" href="http://127.0.0.1/Db_V2/index.html">Home</a>
        <a class="mdl-navigation__link" href="http://127.0.0.1/Db_V2/insert.php">Insert</a>
        <a class="mdl-navigation__link" href="http://127.0.0.1/Db_V2/search.php">Search</a>
        <a class="mdl-navigation__link" href="http://127.0.0.1/Db_V2/updates.html">Update</a>
        <a class="mdl-navigation__link" href="http://127.0.0.1/Db_V2/faq.html">FAQ</a>
        <a class="mdl-navigation__link" href="http://127.0.0.1/Db_V2/about.html">About</a>
      </nav>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content">
        <?php
          $db_host = 'localhost';
          $db_user = 'root';
          $db_pwd = 'mysql';

          $database = 'genomics';
          $table = 'pg_data';

          if (!mysql_connect($db_host, $db_user, $db_pwd))
              die("Can't connect to database");

          if (!mysql_select_db($database))
              die("Can't select database");

          $conn = mysqli_connect($db_host, $db_user, $db_pwd, $database);

          $pg_id = mysqli_real_escape_string($conn, $_POST['pg_id']);
          $pheno = mysqli_real_escape_string($conn, $_POST['pheno']);

          // sending query
          if ($pg_id != null){
            $result = mysql_query("SELECT * FROM {$table} WHERE pg_id = '$pg_id' ");
          }
          else{
            $result = mysql_query("SELECT * FROM {$table} WHERE phenotype = '$pheno' ");
          }
          if (!$result) {
              die("Query to show fields from table failed");
          }

          $fields_num = mysql_num_fields($result);
          ?>
          <style>
            .mdl-data-table{
              margin-top: 25px;
              border-spacing: 10px;
            }
            table {
              width: 85%;
              border-collapse: collapse;
              margin-top: 25px;
              margin-left: 15px;
            }

            table:first-child{
              border-top: 1px solid grey;
              border-bottom: 1px solid grey;
            }
            table:last-child{
              border-bottom: 0px solid #e0e0e0;
            }

            th {
              background: #e0e0e0;
              color: #e0e0e0;
              font-weight: bold;
            }
            th:first-child{
              border-top: 1px solid #e0e0e0;
            }
            th:last-child{
              border-bottom: 0px solid #e0e0e0;
            }
            td, th {
              padding: 5px;
              text-align: left;
              border-right: solid 1px #e0e0e0;
              border-left: solid 1px #e0e0e0;
            }
            tr:first-child{
              border-top: 0px solid #e0e0e0;
              border-bottom: 1px solid #e0e0e0;
            }
            tr:last-child{
              border-bottom: 0px solid #e0e0e0;
            }
            tr:hover{
              background: #eeeeee;
            }

          </style>


          <table>
            <tr>
          <?php
          // printing table headers
          for($i=0; $i<$fields_num; $i++)
          {
              $field = mysql_fetch_field($result);
              echo "<td>{$field->name}</td>";
          }
          echo "</tr>\n";
          // printing table rows
          while($row = mysql_fetch_row($result))
          {
              echo "<tr>";

              // $row is array... foreach( .. ) puts every element
              // of $row to $cell variable
              foreach($row as $cell)
                  echo "<td>$cell</td>";

              echo "</tr>\n";
          }
          mysql_free_result($result);
        ?>
      </div>
    </main>
  </div>





</html>
