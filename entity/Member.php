<?php


class Member
{
    private $idMember;
    private $TglLahir;
    private $PlatMobil;
    private $PlatMotor;
    private $Poin;
    Private $Pelanggan_idPelanggan;

    /**
     * @return mixed
     */
    public function getIdMember()
    {
        return $this->idMember;
    }

    /**
     * @param mixed $idMember
     */
    public function setIdMember($idMember)
    {
        $this->idMember = $idMember;
    }

    /**
     * @return mixed
     */
    public function getTglLahir()
    {
        return $this->TglLahir;
    }

    /**
     * @param mixed $TglLahir
     */
    public function setTglLahir($TglLahir)
    {
        $this->TglLahir = $TglLahir;
    }

    /**
     * @return mixed
     */
    public function getPlatMobil()
    {
        return $this->PlatMobil;
    }

    /**
     * @param mixed $PlatMobil
     */
    public function setPlatMobil($PlatMobil)
    {
        $this->PlatMobil = $PlatMobil;
    }

    /**
     * @return mixed
     */
    public function getPlatMotor()
    {
        return $this->PlatMotor;
    }

    /**
     * @param mixed $PlatMotor
     */
    public function setPlatMotor($PlatMotor)
    {
        $this->PlatMotor = $PlatMotor;
    }

    /**
     * @return mixed
     */
    public function getPoin()
    {
        return $this->Poin;
    }

    /**
     * @param mixed $Poin
     */
    public function setPoin($Poin)
    {
        $this->Poin = $Poin;
    }

    /**
     * @return mixed
     */
    public function getPelangganIdPelanggan()
    {
        return $this->Pelanggan_idPelanggan;
    }

    /**
     * @param mixed $Pelanggan_idPelanggan
     */
    public function setPelangganIdPelanggan($Pelanggan_idPelanggan)
    {
        $this->Pelanggan_idPelanggan = $Pelanggan_idPelanggan;
    }
    




}