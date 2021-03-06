<script type="text/javascript" language="javascript">
					function validasi() {
						var myForm = document.form;
						var kode = document.getElementById('kode');
						var nama_matkul = document.getElementById('nama_matkul');
					
						
						if (!isAlphabet(nama_matkul, "Nama mata kuliah hanya boleh diisi dengan huruf")){
							return (false);
						}
						return (true);
					}
						
						/////// Validator \\\\\\
					
						function isNumeric(elem, helperMsg){
							var numericExpression = /^[0-9]+$/;
							if(elem.value.match(numericExpression)){
								return true;
							}else{
								alert(helperMsg);
								elem.focus();
								return false;
							}
						}
						
						function isAlphabet(elem, helperMsg){
							var alphaExp = /^[a-z A-Z]+$/;
							if(elem.value.match(alphaExp)){
								return true;
							}else{
								alert(helperMsg);
								elem.focus();
								return false;
							}
						}
						
						function madeSelection(elem, helperMsg){
							if(elem.value == ""){
								alert(helperMsg);
								elem.focus();
								return false;
							}else{
								return true;
							}
						}
						
						function isAlphanumeric(elem, helperMsg){
							var alphaExp = /^[0-9 a-z A-Z]+$/;
							if(elem.value.match(alphaExp)){
								return true;
							}else{
								alert(helperMsg);
								elem.focus();
								return false;
							}
						}
						
						function emailValidator(elem, helperMsg){
							var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
							if(elem.value.match(emailExp)){
								return true;
							}else{
								alert(helperMsg);
								elem.focus();
								return false;
							}
						}
						
						function getCheckedVal(elem, helperMsg) {
							var element;
							var len = document.form.length;
							var str = "";
							for (i = 0; i < len; i++) {
								element = document.form[i];
								if (element.type == "checkbox") {
									if (element.checked == true) {
										str = str + element.value + "\n";
									}
								}
							}
							if (str.length == 0) {
								alert(helperMsg);
								elem.focus();
								return false;
							}else{
								return true;
							}
						}
</script>
					
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">

	<!-- Start content -->
    <div class="content">
		<div class="container">			
			<div class="row" >
                <!-- /.panel-heading -->
                <div class="panel-body" > 
					<div class="col-lg-6" >
						<form role="form" method="post" action="<?php echo site_url()?>/c_arSatpam/simpan_form_kunjungan" enctype="multipart/form-data" >
							<h3 style="margin-left:70px"><label><center>Form Kunjungan</center></label></h3>
							
							<div class="form-group">
								<label for="tgl_kunjungan">Tgl Kunjungan</label>
			                    <input type="hidden" name="id_pegawai" value="">
			                    <input type="date" name="tgl_kunjungan" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="Jam Kunjungan">Jam Kunjungan</label>
			                    <input type="hidden" name="id_pegawai" value="">
			                    <input type="time" name="jam_kunjungan" class="form-control"  required>
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input class="form-control" name="nama" id="username" placeholder="Nama Pengunjung" required>
							</div>
							<div class="form-group">
								<label>Institusi</label>
								<input class="form-control" name="institusi" id="username" placeholder="Institusi Pengunjung" required>
							</div>
							<div class="form-group">
								<label>Agenda</label>
								<textarea class="form-control" name="agenda" id="username" cols="40" rows="6" placeholder="Agenda Kunjungan" required></textarea>
							</div>
							<button type="submit" class="btn btn-default" onClick="return validasi()">Simpan</button>
							<button type="reset" class="btn btn-default">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;
							
						</form>
					</div>
				</div>
			</div>
		</div> <!-- container -->
	</div> <!-- content -->
</div> <!-- content page -->