<?php


class DetailBahanBakar
{
    private $idDetailBahanBakar;
    private $TglPerubahan;
    private $HargaModal;
    private $HargaJual;
    private $BahanBakar_idBahanBakar;

    /**
     * @return mixed
     */
    public function getIdDetailBahanBakar()
    {
        return $this->idDetailBahanBakar;
    }

    /**
     * @param mixed $idDetailBahanBakar
     */
    public function setIdDetailBahanBakar($idDetailBahanBakar)
    {
        $this->idDetailBahanBakar = $idDetailBahanBakar;
    }

    /**
     * @return mixed
     */
    public function getTglPerubahan()
    {
        return $this->TglPerubahan;
    }

    /**
     * @param mixed $TglPerubahan
     */
    public function setTglPerubahan($TglPerubahan)
    {
        $this->TglPerubahan = $TglPerubahan;
    }

    /**
     * @return mixed
     */
    public function getHargaModal()
    {
        return $this->HargaModal;
    }

    /**
     * @param mixed $HargaModal
     */
    public function setHargaModal($HargaModal)
    {
        $this->HargaModal = $HargaModal;
    }

    /**
     * @return mixed
     */
    public function getHargaJual()
    {
        return $this->HargaJual;
    }

    /**
     * @param mixed $HargaJual
     */
    public function setHargaJual($HargaJual)
    {
        $this->HargaJual = $HargaJual;
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
    

}