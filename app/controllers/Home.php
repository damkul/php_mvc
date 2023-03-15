<?php

class Home extends Controller
{
   public function index(){
      // call all model functions from here
    //  $blog = new Blog;
   //   $result =  $model->delete(80,'blogId');// actual id and name of id column from table
   //$arr['blogName'] = 'testing complete flow';
      //$blog->insert($arr);
      //$result =  $model->update(81,$arr,'blogId');// actual id and name of id column from table
      $this->view('home');
   }
   public function edit(){
      print_r("edit function");
      $this->view('home');
   }
}