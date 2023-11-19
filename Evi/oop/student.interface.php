<?php

interface IStudent{   
    public static function index();
    public function save();
    public function find($id);
    public function update();
    public function delete($id);   
}