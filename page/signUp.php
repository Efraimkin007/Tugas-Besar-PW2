<section>
    <h2>Form Pelanggan</h2>
    <label ></label>
    <label ></label>
    <form method="POST" action="">
        <div >
            <div class="col-2">
                <div >
                    <label >ID Pelanggan </label>
                </div>
                <div >
                    <input class="input--style-4" type="text" name="txtIdPelanggan" placeholder="ID Pelanggan" required=""/>
                    <label ></label>
                    <label ></label>
                </div>

            </div>
        </div>


        <div >
            <div class="col-2">
                <div>
                    <label >Nama Pelanggan</label>
                </div>
                <div>
                    <input class="input--style-4" type="text" name="txtNamaPelanggan" placeholder="Nama Pelanggan" required=""/>
                    <label ></label>
                    <label ></label>
                </div>
            </div>
        </div>
        <div >
            <div class="col-2">
                <div>
                    <label >Status Member</label>
                </div>
                <div>
                    <input class="input--style-4" type="text" name="txtStatusMember" placeholder="Status Member" required=""/>
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
            <th>ID Pelangaan</th>
            <th>Nama Pelanggan</th>
            <th>Status member</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        <?php

        ?>
        <tr>
            <td>EmptyEmptyEmpty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>EmptyEmptyEmptyEmpty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>EmptyEmptyEmptyEmpty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


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