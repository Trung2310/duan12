<?php
// function loadall_tour_home(){
//     $sql="select * from tour where 1 order by id_tour desc limit 0,9";
//     $listtour=pdo_query($sql);
//     return  $listtour;
// }
// function loadall_tour_top10(){
//     $sql="select * from tour where 1 order by luotxem desc limit 0,10";
//     $listtour=pdo_query($sql);
//     return $listtour;
// }
function loadall_donhang(){
    $sql = "SELECT * from datve join tour on datve.id_tour = tour.id_tour join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi join diadiem on tour.id_diadiem = diadiem.id_diadiem join nguoidung on datve.id_nguoidung = nguoidung.id_nguoidung join giohang on datve.id_giohang = giohang.id_giohang";
    $list_donhang=pdo_query($sql);
    return  $list_donhang;
}


// function loadone_tour($id_tour){
//     $sql = "select * from tour join diadiem on tour.id_diadiem = diadiem.id_diadiem join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi where id_tour = ".$id_tour;
//     $result = pdo_query_one($sql);
//     return $result;
// }

// function load_gallery($id_khuvuichoi){
//     $sql = "select * from gallery";
//     $result = pdo_query($sql);
//     return $result;
// }
// function load_tour_cungloai($id_tour, $id_tourdm){
//     $sql = "select * from tour where id_tourdm = $id_tourdm and id_tour <> $id_tour";
//     $result = pdo_query($sql);
//     return $result;
// }
function insert_donhang($tongtien, $ngaydat, $id_tour, $id_giohang, $id_nguoidung){
    $sql = "INSERT INTO `datve`(`tongtien`, `ngaydat`, `id_tour`, `id_giohang`, `id_nguoidung`) VALUES ('$tongtien', '$ngaydat', '$id_tour', '$id_giohang', '$id_nguoidung');";
    pdo_execute($sql);
}
// function update_tour($id_tour, $gia, $ngaybatdau, $ngayketthuc, $soluong, $mota, $thongtinchitiet, $hinh, $id_khuvuichoi, $trangthai, $id_diadiem){
//     if($hinh!=""){
//         $sql =  "UPDATE `tour` SET `gia` = '{$gia}', `ngaybatdau` = '{$ngaybatdau}', `ngayketthuc` = '{$ngayketthuc}',`soluong` = '{$soluong}', `mota` = '{$mota}', `thongtinchitiet` = '{$thongtinchitiet}', `img` = '{$hinh}', `id_khuvuichoi` = '{$id_khuvuichoi}', `trangthai` = '{$trangthai}', `id_diadiem` = '{$id_diadiem}', //`img` = '{$hinh}' WHERE `tour`.`id_tour` = $id_tour";
//     }else{
//         $sql =  "UPDATE `tour` SET `gia` = '{$gia}', `ngaybatdau` = '{$ngaybatdau}', `ngayketthuc` = '{$ngayketthuc}',`soluong` = '{$soluong}', `mota` = '{$mota}', `thongtinchitiet` = '{$thongtinchitiet}', `id_khuvuichoi` = '{$id_khuvuichoi}', `trangthai` = '{$trangthai}', `id_diadiem` = '{$id_diadiem}' WHERE `tour`.`id_tour` = $id_tour";
//     }
//     pdo_execute($sql);
// }
// function delete_tour($id_tour){
//     $sql = "DELETE FROM tour WHERE id_tour=" .$id_tour;
//     pdo_execute($sql);
// }
?>
