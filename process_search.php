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
        <?php
            $servername = "157.27.254.179";
            $username = "daniele";
            $password = "Cloudtesi8!";
            $dbname = "genomes";

            // Create connection
            $conn = new pg_connect($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM project_infos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table><tr><th>ID</th><th>Name</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>


      </div>
    </main>
  </div>





</html>
