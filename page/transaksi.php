<section>
    <?php
    echo "Transaksi Pelanggan-Pegawai MetaOil ANS";
    ?>
    <h2>Form Transaksi</h2>
    <label ></label>
    <label ></label>
    <form method="POST" action="">
        <div >
            <div class="col-2">
                <div >
                    <label >ID Transkasi </label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtIdTranskasi" placeholder="ID Transaksi" required=""/>
                    <label ></label>
                    <label ></label>
                </div>

            </div>
        </div>
        <div >
            <div class="col-2">
                <div >
                    <label >Tanggal  </label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtTanggalTransaksi" placeholder="Tanggal Transaksi" required=""/>
                    <label ></label>
                    <label ></label>
                </div>

            </div>
        </div>
        <div >
            <div class="col-2">
                <div >
                    <label>Jumlah Liter</label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtJumlahLiter" placeholder="Jumlah Liter" required=""/>
                    <label ></label>
                    <label ></label>
                </div>
            </div>
        </div>
        <div >
            <div class="col-2">
                <div>
                    <label >Nilai Pelayanan</label>
                </div>
                <div>
                    <input class="input--style-4" type="text" name="txtNilaiPelayanan" placeholder="Nilai Pelayanan" required=""/>
                    <label ></label>
                    <label ></label>
                </div>
            </div>
        </div>
        <div class="input-group">
            <label >Pelanggan</label>
            <?php
            ?>
            <div class="rs-select2 js-select-simple select--no-search">
                <select name="txtNamaPelanggan">
                    <option disabled="disabled" selected="selected">Choose option</option>
                    <?php

                    ?>

                </select>
                <div class="select-dropdown"></div>
            </div>

        </div>

        <div class="input-group">
            <label >Jenis Bahan Bakar</label>
            <?php
            ?>
            <div class="rs-select2 js-select-simple select--no-search">
                <select name="txtJenisBahanBakar">
                    <option disabled="disabled" selected="selected">Choose option</option>
                    <?php

                    ?>

                </select>
                <div class="select-dropdown"></div>
            </div>

        </div>
        <div class="input-group">
            <label >Pegawai/Operator</label>
            <?php
            ?>
            <div class="rs-select2 js-select-simple select--no-search">
                <select name="txtNamaPegawai">
                    <option disabled="disabled" selected="selected">Choose option</option>
                    <?php

                    ?>

                </select>
                <div class="select-dropdown"></div>
            </div>

        </div>


        <div class="p-t-15">
            <input class="btn btn--radius-2 btn--green"type="submit" Value="Submit" name="btnSubmit" />
        </div>
    </form>

    <br/>
    <table id="tableId" class="display">
        <thead>
        <tr>
            <th>ID Transaksi</th>
            <th>Tanggal</th>
            <th>Jumlah Liter</th>
            <th>Nilai Pelayanan</th>
            <th>Pelanggan</th>
            <th>Jenis Bahan Bakar</th>
            <th>Pegawai/Operator</th>
            <th>&nbsp;&nbsp;Action</th>


        </tr>
        </thead>
        <tbody>
        <?php

        ?>
        <tr>
            <td>Empty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Empty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Empty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Empty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>EmptyEmpty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>EmptyEmpty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>EmptyEmpty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <?php
            ?>
            <td>
                <input type="button" class="btn btn--radius-2 btn--pill btn--green" onclick="updateTransaksi()" name="btnUpdate" value="Update"/>
                <input type="button" class="btn btn--radius-2 btn--pill btn--red" onclick="deleteTransaksi()" name="btnDelete" value="Delete"/>
            </td>
            <?php

            ?>
        </tr>
        <?php

        $link=null;
        ?>
        </tbody>
    </table>
    <?php

    ?>
</section>

</section>



