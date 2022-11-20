<?php
Class Test2 extends CI_Controller{
    function __construct(){
        parent::__construct();
//        $this->load->library('fpdf');
        $this->load->library('Fpdf');
        $this->load->library('Fpdfmulticell');
     //   $this->load->library('Fpdfmulticellimplement');
    }
    //require('mc_table.php');
    
    function GenerateWord()
    {
        //Get a random word
        $nb=rand(3,10);
        $w='';
        for($i=1;$i<=$nb;$i++)
            $w.=chr(rand(ord('a'),ord('z')));
        return $w;
    }
    
    function GenerateSentence()
    {
        //Get a random sentence
        $nb=rand(1,10);
        $s='';
        for($i=1;$i<=$nb;$i++)
            $s.=$this->GenerateWord().' ';
        return substr($s,0,-1);
    }
    
    
    function index(){
        $pdf=new Fpdfmulticell();
        $pdf->AddPage();
        $pdf->SetFont('Arial','',14);
        //Table with 20 rows and 4 columns
        $pdf->SetWidths(array(10,50,30,90));
//        srand(microtime()*1000000);
        for($i=0;$i<20;$i++)
            $pdf->Row(array($i,$this->GenerateSentence(),$this->GenerateSentence(),$this->GenerateSentence()));
        $pdf->Output();
        }
}