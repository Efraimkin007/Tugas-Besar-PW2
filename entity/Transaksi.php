<?php


class Transaksi
{
    private $idTransaksi;
    private $TglTransaksi;
    private $JumlahLiter;
    private $NilaiPelayanan;
    private $Pelanggan_idPelanggan;
    private $BahanBakar_idBahanBakar;
    private $Pegawai_idPegawai;

    /**
     * @return mixed
     */
    public function getIdTransaksi()
    {
        return $this->idTransaksi;
    }

    /**
     * @param mixed $idTransaksi
     */
    public function setIdTransaksi($idTransaksi)
    {
        $this->idTransaksi = $idTransaksi;
    }

    /**
     * @return mixed
     */
    public function getTglTransaksi()
    {
        return $this->TglTransaksi;
    }

    /**
     * @param mixed $TglTransaksi
     */
    public function setTglTransaksi($TglTransaksi)
    {
        $this->TglTransaksi = $TglTransaksi;
    }

    /**
     * @return mixed
     */
    public function getJumlahLiter()
    {
        return $this->JumlahLiter;
    }

    /**
     * @param mixed $JumlahLiter
     */
    public function setJumlahLiter($JumlahLiter)
    {
        $this->JumlahLiter = $JumlahLiter;
    }

    /**
     * @return mixed
     */
    public function getNilaiPelayanan()
    {
        return $this->NilaiPelayanan;
    }

    /**
     * @param mixed $NilaiPelayanan
     */
    public function setNilaiPelayanan($NilaiPelayanan)
    {
        $this->NilaiPelayanan = $NilaiPelayanan;
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

    /**
     * @return mixed
     */
    public function getBahanBakarIdBahanBakar()
    {
        return $this->BahanBakar_idBahanBakar;
    }

    /**
     * @param mixed $BahanBakar_idBahanBakar
     */
    public function setBahanBakarIdBahanBakar($BahanBakar_idBahanBakar)
    {
        $this->BahanBakar_idBahanBakar = $BahanBakar_idBahanBakar;
    }

    /**
     * @return mixed
     */
    public function getPegawaiIdPegawai()
    {
        return $this->Pegawai_idPegawai;
    }

    /**
     * @param mixed $Pegawai_idPegawai
     */
    public function setPegawaiIdPegawai($Pegawai_idPegawai)
    {
        $this->Pegawai_idPegawai = $Pegawai_idPegawai;
    }
    
    


}