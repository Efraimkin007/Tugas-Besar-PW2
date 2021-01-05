<?php


class Pelanggan
{
    private $idPelanggan;
    private $NamaPelanggan;
    private $StatusMember;

    /**
     * @return mixed
     */
    public function getIdPelanggan()
    {
        return $this->idPelanggan;
    }

    /**
     * @param mixed $idPelanggan
     */
    public function setIdPelanggan($idPelanggan)
    {
        $this->idPelanggan = $idPelanggan;
    }

    /**
     * @return mixed
     */
    public function getNamaPelanggan()
    {
        return $this->NamaPelanggan;
    }

    /**
     * @param mixed $NamaPelanggan
     */
    public function setNamaPelanggan($NamaPelanggan)
    {
        $this->NamaPelanggan = $NamaPelanggan;
    }

    /**
     * @return mixed
     */
    public function getStatusMember()
    {
        return $this->StatusMember;
    }

    /**
     * @param mixed $StatusMember
     */
    public function setStatusMember($StatusMember)
    {
        $this->StatusMember = $StatusMember;
    }
    

}