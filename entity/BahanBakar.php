<?php


class BahanBakar
{
    private $idBahanBakar;
    private $JenisBahanBakar;
    private $HargaModal;
    private $HargaJual;

    /**
     * @return mixed
     */
    public function getIdBahanBakar()
    {
        return $this->idBahanBakar;
    }

    /**
     * @param mixed $idBahanBakar
     */
    public function setIdBahanBakar($idBahanBakar)
    {
        $this->idBahanBakar = $idBahanBakar;
    }

    /**
     * @return mixed
     */
    public function getJenisBahanBakar()
    {
        return $this->JenisBahanBakar;
    }

    /**
     * @param mixed $JenisBahanBakar
     */
    public function setJenisBahanBakar($JenisBahanBakar)
    {
        $this->JenisBahanBakar = $JenisBahanBakar;
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
    

}