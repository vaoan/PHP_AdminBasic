<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//namespace application\model_view;

class Inicio {

    //var $sesion = null;

    function __construct() {
        
    }

    function index() {
        showHeaders();
        showMenu();
        showFoot();
    }

}
