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
            <th>ID Bahan Bakar&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Jenis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Harga Modal&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Harga Jual&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($result as $row){
            ?>
            <tr>
                <td><?php echo $row->getIdBahanBakar();?></td>
                <td><?php echo $row->getJenisBahanBakar();?>&nbsp;&nbsp;&nbsp;</td>
                <td><?php echo $row->getHargaModal();?></td>
                <td><?php echo $row->getHargaJual();?></td>
                <?php
                    ?>
                    <td>
                        <input type="button" class="btn btn--radius-2 btn--pill btn--green" onclick="updateBahanBakar(<?php echo $row->getIdBahanBakar();?>)" name="btnUpdate" value="Update"/>
                        <input type="button" class="btn btn--radius-2 btn--pill btn--red" onclick="deleteBahanBakar(<?php echo $row->getIdBahanBakar();?>)" name="btnDelete" value="Delete"/>
                    </td>
                    <?php

                ?>
            </tr>
            <?php
        }
        $link=null;
        ?>
        </tbody>
    </table>
    <?php

    ?>
</section>



