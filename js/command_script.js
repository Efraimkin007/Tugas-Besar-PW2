function updateBahanBakar(idBahanBakar){
    window.location = "?page=bahanBakarUpdate&cid="+idBahanBakar;
}
function deleteBahanBakar(idBahanBakar){
    let confirmation= window.confirm("Are you sure want to delete?")
    if(confirmation){
        window.location = "?page=dataPegawai&cmd=del&cid="+idBahanBakar;
    }
}

function deletePegawai(idPegawai){
    let confirmation= window.confirm("Are you sure want to delete?")
    if(confirmation){
        window.location = "?page=dataPegawai&cmd=del&cid="+idPegawai;
    }
}



