<section>
    <?php
    if($_SESSION['my_session']){
        ?>
    <h2>Form Member</h2>
    <label ></label>
    <label ></label>
    <form method="POST" action="">
        <div >
            <div class="col-2">
                <div >
                    <label >ID Member </label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtIdMember" placeholder="ID Member" required=""/>
                    <label ></label>
                    <label ></label>
                </div>

            </div>
        </div>
        <div >
            <div class="col-2">
                <div >
                    <label >Tanggal Lahir </label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtTanggalLahir" placeholder="Tanggal Lahir" required=""/>
                    <label ></label>
                    <label ></label>
                </div>

            </div>
        </div>
        <div >
            <div class="col-2">
                <div >
                    <label>Plat Mobil</label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtPlatMobil" placeholder="No Plat" required=""/>
                    <label ></label>
                    <label ></label>
                </div>
            </div>
        </div>
        <div >
            <div class="col-2">
                <div>
                    <label >Plat Motor</label>
                </div>
                <div>
                    <input class="input--style-4" type="text" name="txtPlatMotor" placeholder="No Plat" required=""/>
                    <label ></label>
                    <label ></label>
                </div>
            </div>
        </div>
        <div >
            <div class="col-2">
                <div>
                    <label >Poin</label>
                </div>
                <div>
                    <input class="input--style-4" type="text" name="txtPoin" placeholder="Poin" required=""/>
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
                <select name="txtNamaPelangganMember">
                    <option disabled="disabled" selected="selected">Choose option</option>
                    <?php
                    foreach ($result2 as $row2){
                        echo"<option value='".$row2->getIdMember()."'>".$row2->getIdPelanggan()."</option>";
                    }
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
    <?php
}

?>
    <table id="tableId" class="display">
        <thead>
        <tr>
            <th>ID Member</th>
            <th>Tgl Lahir</th>
            <th>Plat Mobil</th>
            <th>Plat Motor</th>
            <th>Poin</th>
            <th>Id Pelanggan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($result as $row){
        ?>
        <tr>
            <td><?php echo $row->getIdMember();?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row->getTglLahir();?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row->getPlatMobil();?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row->getPlatMotor();?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row->getPoin();?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row->getPelangganIdPelanggan();?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

            <?php
            if($_SESSION['my_session']){
            ?>
            <td>
                <input type="button" class="btn btn--radius-2 btn--pill btn--green" onclick="updateMember(<?php echo $row->getIdMember(); ?>)" name="btnUpdate" value="Update"/>
                <input type="button" class="btn btn--radius-2 btn--pill btn--red" onclick="deleteMember(<?php echo $row->getIdMember(); ?>)" name="btnDelete" value="Delete"/>
            </td>
            <?php
            }

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
