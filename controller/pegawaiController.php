<?php


class pegawaiController
{
    private $pegawaiDao;
    public function __construct(){
        $this->pegawaiDao=new PegawaiDAOimpl();
    }
    public function index(){
        $command= filter_input(INPUT_GET,"cmd");
        if(isset ($command)&& $command=="del") {
            $idPegawai = filter_input(INPUT_GET, "cid");
            //connect ke DB
            if (isset($idPegawai)) {
                $this->pegawaiDao->deletePegawai($idPegawai);
            }
        }

        $submitPressed= filter_input(INPUT_POST,"btnSubmit");
        if($submitPressed){
            //get Data dari form
            $id = filter_input(INPUT_POST,"txtIdPegawai");
            $nama = filter_input(INPUT_POST,"txtNamaPegawai");
            $nilai = filter_input(INPUT_POST,"txtAkumulasiNilai");

            $pegawai=new Pegawai();
            $pegawai->setIdPegawai($id);
            $pegawai->setNamaPegawai($nama);
            $pegawai->setAkumulasiNilai($nilai);

            //connect ke DB
            $result = $this->pegawaiDao->addPegawai($pegawai);
            if($result){
                echo '<div class="bg-success">Data successfully added(Pegawai:'.$nama.')</div>';
            }
            else{
                echo '<div class="bg-error">Error add data</div>';
            }
        }
        $result = $this->pegawaiDao->fetchPegawaiData();
        include_once 'page/dataPegawai.php';

}}