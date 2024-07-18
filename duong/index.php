<?php 
ob_start();
session_start();
include "model/pdo.php";
include "model/amthuc.php";
include "model/ban.php";
include "model/binhluan.php";
include "model/login.php";
include "model/giohang.php";
include "model/donhang.php";
$listdm = list_danhmuc();
include "header.php";
$hinhpath = "../img/";
$targetdir= "../img/";



if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'amthuc':
            $listdm = list_danhmuc();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }else{
                $id=0;
            }
            $listsp = list_sp($id);
            include "amthuc/list.php";
            break;


            case 'chitietsanpham':
                $luotxem = $_GET['luotxem']+1;
                $idsp = $_GET['idsp'];
                $iddm = $_GET['iddm'];
                $ctsp = ctsp($idsp);
                $binhluan = list_binhluan($idsp);
                $listspdm = list_spdm($iddm,$idsp);
                tang_luotxem($luotxem,$idsp);
                include "amthuc/ctsp.php";
                break;

                case 'muahang':
                    $idsp = $_GET['idsp'];
                    $ctsp = ctsp($idsp);
                    include "cart/cart.php";
                    break;


        case 'datban':
            $listban = list_ban();
            include "datban/list.php";
            break;
        case 'formdatban':
            $listban = list_ban();
            include "datban/form.php";
            break;

        case 'uudai':
            $listuudai = list_uudai();
            include "uudai/list.php";
            break;


        case 'dangky':
            if(isset($_POST['dk'])){
                $user = $_POST['user'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $pass = $_POST['pass'];
                dangkytaikhoan($user,$pass,$sdt,$email);
            }
            header("Location: login.php");
        break;   
        
        case 'dangnhap':
            if(isset($_POST['dn'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $cehckuser = checkuser($user,$pass);
                if(is_array($cehckuser)){
                    $_SESSION['user'] = $cehckuser;
                    extract($_SESSION['user']);
                    if($rolee==1){
                        header("location: ../admin");
                    }elseif($rolee==0){
                        header("Location: index.php");
                    }
                }else{
                    $thongbao = "Sai tên tài khoản hoặc mật khẩu";
                    header("location: login.php");
                }
            }
            break;
        
        //Giỏ hàng-------------------

        case 'giohang':
            if(is_array($_SESSION['user'])){
                extract($_SESSION['user']);
            }
            $listgh = list_giohang($id_tk);
            $listspgh = list_sp_gh($id_tk);
            include "giohang/list.php";
            break;

            case 'themgiohang':
                if(is_array($_SESSION['user'])){
                    extract($_SESSION['user']);
                }
                $id_sp = $_GET['idsp'];
                them_giohang($id_sp,$id_tk);
                $idsp = $_GET['idsp'];
                $iddm = $_GET['iddm'];
                $ctsp = ctsp($idsp);
                $binhluan = list_binhluan($idsp);
                $listspdm = list_spdm($iddm,$idsp);
                include "amthuc/ctsp.php";
                break;

            case 'xoagiohang':
                xoa_giohang($_GET['id']);
                $listgh = list_giohang($_GET['id_tk']);
                $listspgh = list_sp_gh($id_tk);
                include "giohang/list.php";
                break;


        //Đơn hàng------------
        case 'trangthaidonhang':
            if(empty($_GET['trangthai'])){
                $_GET['trangthai'] = 0;
            }
            $infor_user = infor_user($_GET['id_tk']);
            $listdonhang = trangthaidonhang($_GET['trangthai'],$_GET['id_tk']);
            include 'taikhoan/infor.php';

        break;

        //Tài khoản-----------------
        case 'thaydoithongtintaikhoan':
            $infor_user = infor_user($_GET['id_tk']);
            include 'taikhoan/edit.php';
            break;

            case 'edituser':
                if(isset($_POST['capnhat'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $filename = $_FILES['anh']['name'];
                    $target_file = $targetdir.basename($filename);
                    move_uploaded_file($_FILES['anh']['tmp_name'],$target_file);
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    edit_user($id_tk,$user,$pass,$filename,$sdt,$email);
                }
                if(empty($_GET['trangthai'])){
                    $_GET['trangthai'] = 0;
                }
                $infor_user = infor_user($_GET['id_tk']);
                    $listdonhang = trangthaidonhang($_GET['trangthai'],$_GET['id_tk']);
                include 'taikhoan/infor.php';
                break;

        // Đặt hàng
        case 'dathang':
            if(isset($_POST['dathang'])){
                $ho = $_POST['ho'];
                $ten = $_POST['ten'];
                $sdt = $_POST['sdt'];
                $hovaten = $ho.' '.$ten;
                $id_tk = $_GET['id_tk'];
                $diachi = $_POST['diachi'];
                $pay = $_POST['paymentMethod'];
                if($pay==0){
                    dathang($id_tk,$_GET['idsp'],$hovaten,$sdt,$diachi);
                }else{
                    
                }
            }
            header("location: index.php");
            break;


            case 'danhanduochang':
                danhanhang($_GET['id_dh']);
                if(empty($_GET['trangthai'])){
                    $_GET['trangthai'] = 0;
                }
                $infor_user = infor_user($_GET['id_tk']);
                $listdonhang = trangthaidonhang($_GET['trangthai'],$_GET['id_tk']);
                include 'taikhoan/infor.php';
                break;

        //Đánh giá
        case 'danhgia':
            $ctsp = ctsp($_GET['id_sp']);
            dadanhgia($_GET['id_dh']);
            include 'amthuc/danhgia.php';
            break;

            case 'binhluan':
                if(isset($_POST['binhluan'])){
                    $noidung = $_POST['noidungcmt'];
                    $date = date("l jS \of F Y h:i:s A");
                    insert_binhluan($_GET['id_sp'],$_GET['id_tk'],$noidung,$date);
                }

                $ctsp = ctsp($_GET['id_sp']);
                $binhluan = list_binhluan($_GET['id_sp']);
                $listspdm = list_spdm($_POST['id_dm'],$_GET['id_sp']);
                include "amthuc/ctsp.php";
                break;

        case 'dangxuat':
            session_unset();
            header("location: index.php");
            break;
        case 'quenmatkhau':
            if(isset($_POST['xacnhan'])){
                $user = $_POST['user'];
                $email = $_POST['email'];
                $checkforgot = checkforgot($user,$email);
                if($checkforgot){
                    $_SESSION['pass'] = $checkforgot;
                    include "forgot.php";
                }else{
                    header('Location: forgotpass.php');
                }
            }
            
            break;
            
        default:
            include "mcl.php";
            break;
    }
}else{
    include "mcl.php";
}
include "footer.php";
ob_end_flush();
