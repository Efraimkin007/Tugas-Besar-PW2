<section>
    <?php
    if($_SESSION['my_session']){
    ?>
    <h2>Form Pegawai</h2>
    <label ></label>
    <label ></label>
    <form method="POST" action="">
        <div >
            <div class="col-2">
                <div >
                    <label >ID Pegawai </label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtIdPegawai" placeholder="ID Pegawai" required=""/>
                    <label ></label>
                    <label ></label>
                </div>

            </div>
        </div>
        <div >
            <div class="col-2">
                <div >
                    <label >Nama Pegawai </label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtNamaPegawai" placeholder="Nama Pegawai" required=""/>
                    <label ></label>
                    <label ></label>
                </div>

            </div>
        </div>
        <div >
            <div class="col-2">
                <div >
                    <label>Akumulasi Nilai</label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtAkumulasiNilai" placeholder="Nilai " required=""/>
                    <label ></label>
                    <label ></label>
                </div>
            </div>
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
            <th>ID Pegawai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Nama Pegawai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Akumulasi Nilai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Action </th>


        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($result as $row){
        ?>
        <tr>
            <td><?php echo $row->getIdPegawai();?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row->getNamaPegawai();?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row->getAkumulasiNilai();?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

            <?php
            if($_SESSION['my_session']){

            ?>
            <td>
                <input type="button" class="btn btn--radius-2 btn--pill btn--green" onclick="updatePegawai()" name="btnUpdate" value="Update"/>
                <input type="button" class="btn btn--radius-2 btn--pill btn--red" onclick="deletePegawai(<?php echo $row->getIdPegawai(); ?>)" name="btnDelete" value="Delete"/>
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



