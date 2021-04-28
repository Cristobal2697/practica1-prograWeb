<?php
  // file: controllers/AuthorController.php

  require_once('model/Authors.php');

  class AuthorController extends Controller {

    public function index() {  
      return view('author/index',
       ['authors'=>Author::all(),
        'title'=>'Authors List']);
    }

    public function show($id) {
      $author = Author::find($id);
      return view('author/show',
        ['author'=>$author,
         'title'=>'Author Detail']);
    }
  }
?>