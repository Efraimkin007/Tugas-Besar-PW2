<?php


class Pegawai
{
    private $idPegawai;
    private $NamaPegawai;
    private $AkumulasiNilai;

    /**
     * @return mixed
     */
    public function getIdPegawai()
    {
        return $this->idPegawai;
    }

    /**
     * @param mixed $idPegawai
     */
    public function setIdPegawai($idPegawai)
    {
        $this->idPegawai = $idPegawai;
    }

    /**
     * @return mixed
     */
    public function getNamaPegawai()
    {
        return $this->NamaPegawai;
    }

    /**
     * @param mixed $NamaPegawai
     */
    public function setNamaPegawai($NamaPegawai)
    {
        $this->NamaPegawai = $NamaPegawai;
    }

    /**
     * @return mixed
     */
    public function getAkumulasiNilai()
    {
        return $this->AkumulasiNilai;
    }

    /**
     * @param mixed $AkumulasiNilai
     */
    public function setAkumulasiNilai($AkumulasiNilai)
    {
        $this->AkumulasiNilai = $AkumulasiNilai;
    }

    



}