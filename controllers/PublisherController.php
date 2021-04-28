<?php
  // file: controllers/PublisherController.php

  require_once('model/Publishers.php');

  class PublisherController extends Controller {

    public function index() {  
      return view('publisher/index',
       ['publishers'=>Publisher::all(),
        'title'=>'Publishers List']);
    }

    public function show($id) {
      $publisher = Publisher::find($id);
      return view('publisher/show',
        ['publisher'=>$publisher,
         'title'=>'Publisher Detail']);
    }
  }
