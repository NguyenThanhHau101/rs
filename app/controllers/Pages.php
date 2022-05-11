<?php
  class Pages extends Controller {
    public function index(){
      $data = [
      ];
      $this->view('pages/index', $data);
    }
    public function products(){
      $data = [
      ];
      $this->view('pages/products', $data);
    }
    public function cart(){
      $data = [
      ];
      $this->view('pages/cart', $data);
    }
  }
?>