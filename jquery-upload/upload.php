<?php
$output=array('errcode'=>0,'msg'=>'ok');
// print_r($_FILES['file']);
if($_FILES['file']['name']){
    $file=$_FILES['file'];
    $src='./uploads/'.uniqid().strrchr($file['name'],'.');
    move_uploaded_file($file['tmp_name'],$src);
    $output['src']=$src;
}else{
    $output['errcode']=1;
    $output['msg']='没有选择文件';

}

echo json_encode($output);
?>