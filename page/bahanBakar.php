<section>
    <?php
    echo "Harga : Rp. 10000 - Poin 10";
    ?>
    <h2>Form Bahan Bakar</h2>
    <label ></label>
    <label ></label>
    <form method="POST" action="">
        <div >
            <div class="col-2">
                <div >
                    <label >ID Bahan Bakar </label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtIdBahanBakar" placeholder="ID Bahan Bakar" required=""/>
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
                    <input class="input--style-4" type="text" name="txtTanggalPerubahan" placeholder="Tanggal" required=""/>
                    <label ></label>
                    <label ></label>
                </div>

            </div>
        </div>
        <div >
            <div class="col-2">
                <div >
                    <label>Jenis Bahan Bakar</label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtJenisBahanBakar" placeholder="Jenis" required=""/>
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
                    <input class="input--style-4" type="text" name="txtHargaModal" placeholder="Harga Modal" required=""/>
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
                    <input class="input--style-4" type="text" name="txtHargaJual" placeholder="Harga Jual" required=""/>
                    <label ></label>
                    <label ></label>
                </div>
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
            <th>ID Bahan Bakar</th>
            <th>Jenis</th>
            <th>Harga Modal</th>
            <th>Harga Jual</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        <?php

            ?>
            <tr>
                <td>EmptyEmptyEmpty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>EmptyEmptyEmpty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>EmptyEmptyEmpty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>EmptyEmptyEmpty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <?php
                    ?>
                    <td>
                        <input type="button" class="btn btn--radius-2 btn--pill btn--green" onclick="updateBahanBakar()" name="btnUpdate" value="Update"/>
                        <input type="button" class="btn btn--radius-2 btn--pill btn--red" onclick="deleteBahanBakar()" name="btnDelete" value="Delete"/>
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



