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
  <!-- Always shows a header, even in smaller screens. -->
  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Search for data</span>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" id="search">
            <label class="mdl-textfield__label" for="search">Enter your query...</label>
          </div>
        </div>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
          <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
          <li class="mdl-menu__item">About</li>
          <li class="mdl-menu__item">Contact</li>
          <li class="mdl-menu__item">Legal information</li>
        </ul>
      </div>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
      <span class="mdl-layout-title"><h6>PersonalGenomics Database</h6></span>
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
        <h2 class="mdl-card__title-text">How to search</h2>
      </div>
      <div class="mdl-card__supporting-text">
      V 1.0 of DB in material design has been dropped!
      </div>

      <div class="mdl-card__menu">

      </div>
    </div>


    <main class="mdl-layout__content">
      <div class="page-content">
        <form method="post" action="process_search.php">

          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="pg_id" />
            <label class="mdl-textfield__label" for="sample3">Search for Pg_id term</label>
          </div>
          <br/>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="pheno" />
            <label class="mdl-textfield__label" for="sample3">Search for Phenotype term</label>
          </div>
          <br/>
          <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Submit">
      </div>

    </main>
  </div>

</html>
