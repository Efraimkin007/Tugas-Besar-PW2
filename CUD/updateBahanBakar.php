<section>
    <?php
    echo "Harga : Rp. 10000 - Poin 10";
    ?>
    <h2>Form Update Bahan Bakar</h2>
    <label ></label>
    <label ></label>
    <form method="POST" action="">
        <div >
            <div class="col-2">
                <div >
                    <label >ID Bahan Bakar </label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtIdBahanBakar" placeholder="ID Bahan Bakar" value="<?php echo $result->getIdBahanBakar();?>" required=""/>
                    <label ></label>
                    <label ></label>
                </div>

            </div>
        </div>
        <div >
            <div class="col-2">
            </div>
            <div >
                <div class="col-2">
                    <div >
                        <label>Jenis Bahan Bakar</label>
                    </div>
                    <div >
                        <input class="input--style-4" type="text" name="txtJenisBahanBakar" placeholder="Jenis" value="<?php echo $result->getJenisBahanBakar();?>"required=""/>
                        <label ></label>
                        <label ></label>
                    </div>
                </div>
            </div>
            <div >
                <div class="col-2">
                    <div>
                        <label >Harga Modal</label>
                    </div>
                    <div>
                        <input class="input--style-4" type="text" name="txtHargaModal" placeholder="Harga Modal" value="<?php echo $result->getHargaModal();?>"required=""/>
                        <label ></label>
                        <label ></label>
                    </div>
                </div>
            </div>
            <div >
                <div class="col-2">
                    <div>
                        <label >Harga Jual</label>
                    </div>
                    <div>
                        <input class="input--style-4" type="text" name="txtHargaJual" placeholder="Harga Jual" value="<?php echo $result->getHargaJual();?>" required=""/>
                        <label ></label>
                        <label ></label>
                    </div>
                </div>
            </div>

            <div class="p-t-15">
                <input class="btn btn--radius-2 btn--green"type="submit" Value="Submit" name="btnSubmit" />
            </div>
    </form>
