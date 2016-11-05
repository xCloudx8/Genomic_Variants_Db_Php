<?php
  $servername = "localhost";
  $username = "root";
  $password = "mysql";
  $dbname = "genomics";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  //Redirection
  header("location: http://127.0.0.1/PgDb_V2/insert.php");

  //Variables
  $pg_id = mysqli_real_escape_string($conn, $_POST['pg_id']);
  $age = mysqli_real_escape_string($conn, $_POST['age']);
  $sex = mysqli_real_escape_string($conn, $_POST['sex']);
  $ancestry = mysqli_real_escape_string($conn, $_POST['ancestry']);
  $living = mysqli_real_escape_string($conn, $_POST['living']);
  $phenotype = mysqli_real_escape_string($conn, $_POST['phenotype']);
  $nuc = mysqli_real_escape_string($conn, $_POST['nuc']);
  $pro = mysqli_real_escape_string($conn, $_POST['pro']);
  $chrpos = mysqli_real_escape_string($conn, $_POST['chrpos']);
  $genei = mysqli_real_escape_string($conn, $_POST['genei']);
  $cong = mysqli_real_escape_string($conn, $_POST['cong']);
  $cdna = mysqli_real_escape_string($conn, $_POST['cDna']);
  $moi = mysqli_real_escape_string($conn, $_POST['moi']);
  $mut = mysqli_real_escape_string($conn, $_POST['mut']);
  $screen = mysqli_real_escape_string($conn, $_POST['screen']);
  $geno = mysqli_real_escape_string($conn, $_POST['geno']);
  $var = mysqli_real_escape_string($conn, $_POST['var']);
  $fin = mysqli_real_escape_string($conn, $_POST['fin']);

  //Query
  $sql = "INSERT INTO pg_data(pg_id,age,sex,ancestry,phenotype,chr_pos,nuc_change,aa_change,cdna_change,gene_involved,living_region,congenital,moi,mutation_type,screening_method,genotype,variant_zygosity,final_statement)
          VALUES ('$pg_id','$age','$sex','$ancestry','$phenotype','$chrpos','$nuc','$aa','$cdna','$genei','$living','$cong','$moi','$mut','$screen','$geno','$var','$fin')";

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
