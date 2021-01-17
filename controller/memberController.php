<?php


class memberController
{
    private $memberDAO;
    public function __construct(){
        $this->memberDAO=new MemberDAOimpl();
    }
    public function index(){
        $command= filter_input(INPUT_GET,"cmd");
        if(isset ($command)&& $command=="del") {
            $idMember = filter_input(INPUT_GET, "cid");
            //connect ke DB
            if (isset($idMember)) {
                $this->memberDAO->deleteMember($idMember);
            }
        }

        $submitPressed= filter_input(INPUT_POST,"btnSubmit");
        if($submitPressed){
            //get Data dari form
            $id = filter_input(INPUT_POST,"txtIdMember");
            $tglLahir = filter_input(INPUT_POST,"txtTanggalLahir");
            $platMobil = filter_input(INPUT_POST,"txtPlatMobil");
            $platMotor = filter_input(INPUT_POST,"txtPlatMotor");
            $poin = filter_input(INPUT_POST,"txtPoin");
            $pelanggan = filter_input(INPUT_POST,"txtNamaPelangganMember");


            $member=new Member();
            $member->setIdMember($id);
            $member->setTglLahir($tglLahir);
            $member->setPlatMobil($platMobil);
            $member->setPlatMotor($platMotor);
            $member->setPoin($poin);
            $member->setPelangganIdPelanggan($pelanggan);

            //connect ke DB
            $result = $this->memberDAO->addMember($member);
            if($result){
                echo '<div class="bg-success">Data successfully added(Member:'.$id.')</div>';
            }
            else{
                echo '<div class="bg-error">Error add data</div>';
            }
        }
        $result = $this->memberDAO->fetchMemberData();
        $result2 = $this->memberDAO->fetchMemberData();
        include_once 'page/member.php';
}
}