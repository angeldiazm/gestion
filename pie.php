<?php

echo ' <div class="container" id="pie">
     <!-- Example row of columns -->';
      
if (isset($_SERVER['HTTP_REFERER'])){    
    echo'<br>';    
    echo ' <h4><a href= "' . $_SERVER['HTTP_REFERER'] . '"' . "'>Volver atrás </a></h4>";
    }

   echo'   <hr>

      <footer>
        <p>&copy; ANDY 2015</p>';

    
  
  
  echo'    </footer>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>';

