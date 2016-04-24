<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script src="https://github.com/darsain/sly/raw/master/dist/sly.min.js" ></script>

</head>
<body>
    <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/socketleague/">Accueil</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="listeCompetition/" />Competitions</a></li>
          </ul>
              <?php
                  if(session_id() == "") {
                  session_start();}
                  if(isset($_SESSION['connected']))
                  {
                    $tmp = $_SESSION['connected'];
                  } else {
                    $tmp = 0;
                  }
                  if($tmp == 0) { ?>
                  <div class="pull-right" style="padding:15px 10px">
                      <a class="btn btn-sm" href="/socketleague/viewlogin" />
                        <span class="glyphicon glyphicon-off" style= "padding-right: 5px"></span>Se connecter
                      </a>
                  </div>
                  <?php } else { ?>
                  <div class="pull-right" style="padding:15px 10px">
                      <a class="btn btn-sm" href="/socketleague/deconnect">
                        <span class="glyphicon glyphicon-off" style= "padding-right: 5px"></span>Déconnexion
                      </a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                  <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Back-Office<span class="caret" style="margin-left: 5px"></span></a>
                                <ul class="dropdown-menu">
                                  <li><?php echo $this->Html->link('Equipes',array ('controller' => 'Equipes','action' => 'index')); ?></li>
                                  <li><?php echo $this->Html->link('Stades',array ('controller' => 'Stades','action' => 'index')); ?></li>
                                  <li><?php echo $this->Html->link('Competitions',array ('controller' => 'Competitions','action' => 'index')); ?></li>
                                  <li><?php echo $this->Html->link('Journees',array ('controller' => 'Journees','action' => 'index')); ?></li>
                                  <li><?php echo $this->Html->link('Matchs',array ('controller' => 'Matchs','action' => 'index')); ?></li>
                                  <li><?php echo $this->Html->link('Users',array ('controller' => 'Users','action' => 'index')); ?></li>

                                </ul>
                              </li>
                                </ul>
                              </div>
                            </div>
              <?php } ?>
            </div>
        </div>
      </div>
    </nav>


    
    <?= $this->Flash->render() ?>
    <div class="container" style="padding-top: 100px;">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
