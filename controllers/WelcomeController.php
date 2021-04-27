<?php

class WelcomeController extends Controller
{
  public function index()
  {
    echo '<?php require("routes.php")?>
          <html><head>
          <title>Index of Books</title>
          </head>
          <body>
          <br>
          <h3 style="color:red;">Books:</h3>
          <ul>
              <li><a href="libro1"> Operating System Concepts</a></li>
              <li><a href="libro2"> Database System Concepts </a></li>
              <li><a href="libro3"> Computer Networks </a></li>
              <li><a href="libro4"> Modern Operating Systems</a></li>
          </ul>
      </body></html>
      ';
  }
}
