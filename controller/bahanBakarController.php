<?php


class bahanBakarController
{
    private $bahanBakarDao;
    public function __construct(){
        $this->bahanBakarDao=new BahanBakarDAOimpl();
    }
    public function index(){
        $command= filter_input(INPUT_GET,"cmd");
        if(isset ($command)&& $command=="del") {
            $idBahanBakar = filter_input(INPUT_GET, "cid");
            //connect ke DB
            if (isset($idBahanBakar)) {
                $this->bahanBakarDao->deleteBahanBakar($idBahanBakar);
            }
        }

        $submitPressed= filter_input(INPUT_POST,"btnSubmit");
        if($submitPressed){
            //get Data dari form
            $id = filter_input(INPUT_POST,"txtIdBahanBakar");
            $jenis = filter_input(INPUT_POST,"txtJenisBahanBakar");
            $modal = filter_input(INPUT_POST,"txtHargaModal");
            $jual = filter_input(INPUT_POST,"txtHargaJual");

            $bahanBakar=new BahanBakar();
            $bahanBakar->setIdBahanBakar($id);
            $bahanBakar->setJenisBahanBakar($jenis);
            $bahanBakar->setHargaModal($modal);
            $bahanBakar->setHargaJual($jual);

            //connect ke DB
            $result = $this->bahanBakarDao->addBahanBakar($bahanBakar);
            if($result){
                echo '<div class="bg-success">Data successfully added(BahanBakar:'.$jenis.')</div>';
            }
            else{
                echo '<div class="bg-error">Error add data</div>';
            }
        }
        $result = $this->bahanBakarDao->fetchBahanBakarData();
        include_once 'page/bahanBakar.php';

    }

}