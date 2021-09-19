if($query){
echo
'<script>
alert("Create Data Success"); window.location = "../page/listMahasiswaPage.php"
</script>';
}else{
echo
'<script>
alert("Create Data Failed");
</script>';

}else{
echo
'<script>
window.history.back()
</script>';
}
?> 