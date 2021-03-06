<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Custom fonts for this template -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <? 
        //session_start()
          session_start();
          $_SESSION['userID']='id1';
          
        //PHP DB Connect init
        include "/php/dbConnect.php";
        //east_partner_board 게시판출력
        $sql = "SELECT boardID,country,region,subject,DATE_FORMAT(app_date,'%Y-%m-%d')DATEONLY ,title,userID
                ,requiredPeople,engagedPeople,contents,hits,reg_date FROM east_partner_board ";
        
        $result = mysql_query($sql,$connect);
    ?>
  </head>
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

     <!-- Page Header -->
     <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>EAST EUROPE</h1>
              <span class="subheading">동유럽 여행 동행 게시판</span>
            </div>
          </div>
        </div>
      </div>
    </header>
            <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <p>
          <? //게시판 목록출력
              $i=0;
              while($row = mysql_fetch_array($result)){
                $i +=1;
                echo('<div class="post-preview">');
                echo("<a onclick='$click=$row[boardID]' data-toggle='collapse' href='#collapseExample$i' ");
                echo (' role="button" aria-expanded="false" aria-controls="collapseExample"></br>');
                //title
                echo('<h2 class="post-title">');
                echo("$row[title]");
                echo("</h2>");
                //subtitle
                echo('<h3 class="post-subtitle">');
                echo("$row[country] / $row[region] / $row[subject] / 희망 날짜 $row[4]");
                echo('</h3>');
                //username을 출력하기 위해 user DB와 연동 
                $sql = "SELECT name,userID FROM user WHERE userID IN ($row[6])";
                $nameSQL = mysql_query($sql);
                if(!$nameSQL) echo"sql error";
                $namerow = mysql_fetch_array($nameSQL);

                echo('<p class="post-meta">Posted by <a href="#"> ');
                echo("$namerow[0]</a>  $row[reg_date]</p>");
                echo('</a></div>');
              ?>
              <!--게시판 글,댓글출력-->
                <div class='collapse' id='collapseExample<?=$i?>'>
                    <div class='card card-body'>  
                                
                    <table>
                    <tr><td text-align='right'>조회수 :<?= $row[hits]?></td></tr>
                    <tr><td colspan='3' height='200px'><?=$row[contents]?></td></tr>
                    </table>

                    <?
                    //덧글 East_Partner_ripple 출력
                        $psql = "SELECT * from east_partner_ripple where boardID IN ($row[boardID])";
                        $presult = mysql_query($psql,$connect);
          
                        while($prow = mysql_fetch_array($presult)){
                          //userID , name 연동
                          $sql = "SELECT name,userID FROM user WHERE userID IN ($prow[userID])";
                          $nameSQL = mysql_query($sql);
                          if(!$nameSQL) echo"sql error";
                          $namerow = mysql_fetch_array($nameSQL);
                    ?>
                    <div class = "container">
                      <div class="col-sm-1">
                        <div class="thumbnail">
                          <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                        </div><!-- /thumbnail -->
                      </div><!-- /col-sm-1 -->

                      <div class="col-sm-5">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <strong><?=$namerow[0]?></strong> <span class="text-muted"><?=$prow[reg_date]?></span>
                          </div>
                          <div class="panel-body">
                            <?=$prow[contents]?>
                          </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                      </div><!-- /col-sm-5 -->
                    </div><!-- /container of 댓글출력-->
                        <?
                          }   //ripple while close
                        ?>
                    <!--댓글 입력창 -->
                    <div class = "container">
                      <div class="col-sm-1">
                        <div class="thumbnail">
                          <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                        </div><!-- /thumbnail -->
                      </div><!-- /col-sm-1 -->
                    <form name="RippleInput" id="rippleinputForm" action ="php/insert_ripple.php" method="post" novalidate>
                      <div class="col-sm-5">
                        <input type="hidden" name="boardID" value="<?=$row[boardID]?>">
                        <div class="control-group">
                          <div class="form-group floating-label-form-group controls">
                            <label>댓글입력</label>
                            <input type="text" class="form-control" placeholder="댓글을 입력하세요" 
                              name="ripple_content" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                          </div>
                        </div><!-- /control-group -->
                      </div><!-- /col-sm-5 -->
                      <button type="submit" class="btn btn-secondary" id="RippleButton">Enter</button>
                    </form>
                    </div><!-- /container of 댓글입력-->

                    </div><!-- /게시판 글출력 close-->
                </div>
              <?}?> <!--게시판 출력 close-->

          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>

        </div>
      </div><!-- /row of main-->
    </div><!-- /container of main-->
 <!-- Footer -->
 <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
    </body>
</html>