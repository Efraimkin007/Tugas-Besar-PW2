<?php


class pelangganController
{
    private $pelangganDao;
    public function __construct(){
        $this->pelangganDao=new PelangganDAOimpl();
    }
    public function index(){
        $command= filter_input(INPUT_GET,"cmd");
        if(isset ($command)&& $command=="del") {
            $idPelanggan = filter_input(INPUT_GET, "cid");
            //connect ke DB
            if (isset($idPelanggan)) {
                $this->pelangganDao->deleteBahanBakar($idPelanggan);
            }
        }

        $submitPressed= filter_input(INPUT_POST,"btnSubmit");
        if($submitPressed){
            //get Data dari form
            $id = filter_input(INPUT_POST,"txtIdPelanggan");
            $nama = filter_input(INPUT_POST,"txtNamaPelanggan");
            $status = filter_input(INPUT_POST,"txtStatusMember");

            $pelanggan=new Pelanggan();
            $pelanggan->setIdPelanggan($id);
            $pelanggan->setNamaPelanggan($nama);
            $pelanggan->setStatusMember($status);

            //connect ke DB
            $result = $this->pelangganDao->addPelanggan($pelanggan);
            if($result){
                echo '<div class="bg-success">Data successfully added(BahanBakar:'.$nama.')</div>';
            }
            else{
                echo '<div class="bg-error">Error add data</div>';
            }
        }
        $result = $this->pelangganDao->fetchPelangganData();
        include_once 'page/signUp.php';

}}