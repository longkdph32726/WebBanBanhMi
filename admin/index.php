<?php 
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/uudai.php";
include "model/taikhoan.php";
include "model/binhluan.php";
include "model/ban.php";
include "model/donhang.php";
include "model/thongke.php";
include "header.php";
$listthongkesp = loadall_thongkesp();
$listthongketk = loadall_thongketk();
$client = "../duong";

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':
            $listdm = list_danhmuc();
            include "danhmuc/list.php";
            break;
        
        case 'themdanhmuc':
            $listdm = list_danhmuc();
            include "danhmuc/create.php";
            break;

        case 'themdm':
            if(isset($_POST['themdm'])) {
                $tendm = $_POST['ten_dm'];
                $filename=$_FILES['anh']['name'];
                $target_dir="../img/";
                $target_file=$target_dir.basename($_FILES["anh"]["name"]);
                if(move_uploaded_file($_FILES["anh"]["tmp_name"],$target_file)){

                }
            }
            them_danhmuc($tendm,$filename);
            $listdm = list_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'editdanhmuc':
            $id_dm = $_GET['id'];
            $one_dm = one_danhmuc($id_dm);
            include "danhmuc/edit.php";
            break;
        
        case 'deletedanhmuc':
            $id_dm = $_GET['id'];
            xoa_danhmuc($id_dm);
	        $listdm = list_danhmuc();
            include "danhmuc/list.php";
            break;     
        case 'updatedm':
            if(isset($_POST['sua'])) {
                $id_dm = $_POST['id_dm'];
                $tendm = $_POST['ten_dm'];
                $filename=$_FILES['anh']['name'];
                $target_dir="../img/";
                $target_file=$target_dir.basename($_FILES["anh"]["name"]);
                if(move_uploaded_file($_FILES["anh"]["tmp_name"],$target_file)){

                }
                sua_danhmuc($id_dm,$tendm,$filename);
            }
            $listdm = list_danhmuc();
            include "danhmuc/list.php";
            break;


        
        case 'sanpham':
            $listsp = list_sanpham();
            include "sanpham/list.php";
            break;


            
            case 'them':
                $listdm = list_danhmuc();
                include "sanpham/create.php";
                break;

        case 'themsanpham':
            if(isset($_POST['themsanpham'])&&($_POST['themsanpham'])) {
                $ud = $_POST['uudai'];
                $id_dm = $_POST['id_dm'];
                $ten_sp = $_POST['tensp'];
                $giatri_ud = $_POST['giatri_ud'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $filename=$_FILES['anh']['name'];
                $target_dir="../img/";
                $target_file=$target_dir.basename($_FILES["anh"]["name"]);
                if(move_uploaded_file($_FILES["anh"]["tmp_name"],$target_file)){

                }

                them_sanpham($ten_sp,$filename,$gia,$mota,$id_dm,$ud,$giatri_ud);
                

            }
            $listsp = list_sanpham();
            include "sanpham/list.php";
            break;

        case 'editsanpham':
            $id_sp = $_GET['id'];
            $listdm = list_danhmuc();
            $one_sp = one_sanpham($id_sp);
            include "sanpham/edit.php";
            break;

        case 'updatesp':
            if(isset($_POST['suasanpham'])) {
                $id_sp = $_POST['id_sp'];
                $tensp = $_POST['ten_sp'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $id_dm = $_POST['id_dm'];
                $ud = $_POST['uudai'];
                $giatri_ud = $_POST['giatri_ud'];
                $filename=$_FILES['anh']['name'];
                $target_dir="../img/";
                $target_file=$target_dir.basename($_FILES["anh"]["name"]);
                if(move_uploaded_file($_FILES["anh"]["tmp_name"],$target_file)){

                }
                sua_sanpham($id_sp,$tensp,$filename,$gia,$mota,$id_dm,$ud,$giatri_ud);
            }
            $listsp = list_sanpham();
            include "sanpham/list.php";
            break;
        
        case 'xoasanpham':
            $id_sp = $_GET['id'];
            xoa_sanpham($id_sp);
	        $listsp = list_sanpham();
            include "sanpham/list.php";
            break;     

        case 'chitietsanpham':
            $id_sp=$_GET['id']; 
            $binhluan = list_binhluan($id_sp);
            $sp = one_sanpham($id_sp);
            include "sanpham/ctsp.php";
            break;


        
        case 'donhang':
            $listdh = list_donhang($_GET['id_tk']);
            include "taikhoan/donhang/list.php";
            break;

        case 'editdonhang':
            $id_dh = $_GET['id'];
            $one_dh = one_donhang($id_dh);
            include "taikhoan/donhang/edit.php";
            break;

        case 'updatedh':
            if(isset($_POST['suadonhang'])) {
                $id_dh = $_GET['id'];
                $trangthai = $_POST['trangthai'];
                sua_donhang($id_dh,$trangthai);
            }
            $id_tk = $_POST['id_tk'];
            $listdh = list_donhang($id_tk);
            include "taikhoan/donhang/list.php";
            break;
        
        case 'xoadonhang':
            $id_dh = $_GET['id'];
            xoa_donhang($id_dh);
	        $listdh = list_donhang($_GET['id_tk']);
            include "taikhoan/donhang/list.php";
            break; 

        

        



            case 'taikhoan':
                $listtk = list_taikhoan();
                include "taikhoan/list.php";
                break;
    
                case 'themtaikhoan':
                    include "taikhoan/create.php";
                    break;
    
                    case 'edittaikhoan':
                        $id_tk = $_GET['id'];
                        $onetk = one_taikhoan($id_tk);
                        include "taikhoan/edit.php";
                        break;
    
                        case 'createtaikhoan':
                            if(isset($_POST['themtaikhoan'])){
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                $sdt = $_POST['sdt'];
                                $email = $_POST['email'];
                                $role = $_POST['rolee'];
                                $filename = $_FILES['anh']['name'];
                                $target_dir = "../img/";
                                $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                                if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                                    //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                                  } else {
                                    //echo "Sorry, there was an error uploading your file.";
                                  }
                                  them_taikhoan($user,$pass,$filename,$sdt,$email,$role);
                            }
                            $listtk = list_taikhoan();
                            include "taikhoan/list.php";
                            break;
    
                            case 'edittk':
                                if(isset($_POST['sua'])){
                                    $id_tk = $_POST['id_tk'];
                                    $user = $_POST['user'];
                                    $pass = $_POST['pass'];
                                    $sdt = $_POST['sdt'];
                                    $email = $_POST['email'];
                                    $filename = $_FILES['anh']['name'];
                                    $target_dir = "../img/";
                                    $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                                    if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                                      } else {
                                        //echo "Sorry, there was an error uploading your file.";
                                      }
                                      sua_taikhoan($id_tk,$user,$pass,$filename,$sdt,$email);
                                }
                                $listtk = list_taikhoan();
                                include "taikhoan/list.php";
                                break;
    
                                case 'xoataikhoan':
                                    $id_tk = $_GET['id'];
                                    xoa_taikhoan($id_tk);
	                                $listtk = list_taikhoan();
                                    include "taikhoan/list.php";
                                    break;

            case 'xoabinhluan':
                xoa_binhluan($_GET['id_bl']);
                $binhluan = list_binhluan($_GET['id_sp']);
                $sp = one_sanpham($_GET['id_sp']);
                include "sanpham/ctsp.php";
                break;

        case 'donhang':
            
            break;

        case 'dangnhap':
            include "body.php";
            break;

        case 'xemtrangweb':
            header("Location: ../duong");
            break;

        default:
        include "body.php";
            break;
    }
}else{
    include "body.php";
}
include "footer.php";
?>