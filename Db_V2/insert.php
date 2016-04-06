<html>

  <head>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-red.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>

  <style>
    .mdl-button{
      margin-left: 50px;
    }
    .mdl-textfield{
      margin-left: 50px;
      margin-top: 5px;
      margin-bottom: 5px;
    }

    .demo-card-wide.mdl-card {
      width: 512px;
      margin-left: 1350px;
      position: absolute;
      margin-top: 25px;

    }
    .demo-card-wide > .mdl-card__title {
      color: #fff;
      height: 170px;
      background: url('http://www.dallinhitchcock.com/content/images/2015/09/code-1.jpg') center / cover;

    }
    .demo-card-wide > .mdl-card__menu {
      color: #fff;
    }
  </style>

  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Inserting data form</span>
        <div class="mdl-layout-spacer"></div>
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

    <div class="demo-card-wide mdl-card mdl-shadow--2dp" margin-top="2px">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">How to insert</h2>
      </div>
      <div class="mdl-card__supporting-text">
      V 1.0 of DB in material design has been dropped!
      </div>

    </div>

    <main class="mdl-layout__content">
      <div class="page-content">
        <form method="post" action="process.php">

          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="pg_id"/>
            <label class="mdl-textfield__label" for="sample3">Pg_id</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="age" pattern="-?[0-9]*(\.[0-9]+)?"/>
            <label class="mdl-textfield__label" for="sample3">Age</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="sex"/>
            <label class="mdl-textfield__label" for="sample3">Sex</label>
          </div>
          </br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="ncestry"/>
            <label class="mdl-textfield__label" for="sample3">Ancestry</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="living"/>
            <label class="mdl-textfield__label" for="sample3">Living region</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="phenotype"/>
            <label class="mdl-textfield__label" for="sample3">Phenotype</label>
          </div>
          </br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="nuc"/>
            <label class="mdl-textfield__label" for="sample3">Nucleotide change</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="aa"/>
            <label class="mdl-textfield__label" for="sample3">Aminoacidic change</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="pro"/>
            <label class="mdl-textfield__label" for="sample3">Protein change</label>
          </div>
          <br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="chrpos"/>
            <label class="mdl-textfield__label" for="sample3">Chr:Pos</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="genei"/>
            <label class="mdl-textfield__label" for="sample3">Gene involved</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="cong"/>
            <label class="mdl-textfield__label" for="sample3">Congenital?</label>
          </div>
          <br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="cDna"/>
            <label class="mdl-textfield__label" for="sample3">cDna change</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="moi"/>
            <label class="mdl-textfield__label" for="sample3">Mode of Inheritance</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="mut"/>
            <label class="mdl-textfield__label" for="sample3">Mutation type</label>
          </div>
          <br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="screen"/>
            <label class="mdl-textfield__label" for="sample3">Screening method</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="geno"/>
            <label class="mdl-textfield__label" for="sample3">Genotype</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="var"/>
            <label class="mdl-textfield__label" for="sample3">Variant zygosity</label>
          </div>
          <br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="fin"/>
            <label class="mdl-textfield__label" for="sample3">Final statement</label>
          </div>
          </br>

          <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"  value="Submit">
        </form>
      </div>
    </main>
  </div>





</html>
