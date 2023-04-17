<?php

class Transaksi extends Controller{
    protected $sesiModel;
    protected $filmModel;
    protected $screenModel;

    public function __construct() 
    {
        $this->sesiModel = $this->model('Sesi_model');
        $this->filmModel = $this->model('Film_model');
        $this->screenModel = $this->model('Screen_model');
    }
}