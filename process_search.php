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
            border-spacing: 10px;
            width: 50px;
          }
          table {
            width: auto;
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
            width: auto;;
            border-bottom: 0px solid #e0e0e0;
          }
          td, th {
            width: auto;
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
            width: auto;
            border-bottom: 0px solid #e0e0e0;
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


          $query = 'select * from project_infos';

          $result = pg_query($query);

          $i = 0;
          echo '
                    <table>
                      <tr>';
                          while ($i < pg_num_fields($result))
                          {
                          	$fieldName = pg_field_name($result, $i);
                          	echo '<td>' . $fieldName . '</td>';
                          	$i = $i + 1;
                          }
                          echo '</tr>';
                          $i = 0;

                          while ($row = pg_fetch_row($result))
                          {
                          	echo '<tr>';
                          	$count = count($row);
                          	$y = 0;
                          	while ($y < $count)
                          	{
                          		$c_row = current($row);
                          		echo '<td>' . $c_row . '</td>';
                          		next($row);
                          		$y = $y + 1;
                          	}
                          	echo '</tr>';
                          	$i = $i + 1;
                          }
                          pg_free_result($result);

                          echo '
                    </table>';
        ?>


      </div>
    </main>
  </div>
</html>
