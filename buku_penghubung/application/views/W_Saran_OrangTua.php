<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>arrafi/ubold/assets/images/favicon_1.ico">

        <title>Ubold - Responsive Admin Dashboard Template</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>arrafi/ubold/assets/plugins/morris/morris.css">

        <link href="<?php echo base_url(); ?>arrafi/ubold/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>arrafi/ubold/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>arrafi/ubold/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>arrafi/ubold/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>arrafi/ubold/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>arrafi/ubold/assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>arrafi/ubold/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
		<script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/reload.js"></script>
		<script language="JavaScript">
			setInterval("SANAjaxPesan();", 1000 );  // set berapa detik melakukan refresh div

			$(function() {
				SANAjaxPesan = function(){
				$('#NotifPesan').load("<?php echo base_url(); ?>index.php/Wali_Kelas/NotifPesan").fadeIn("slow");  // load berarti melakukan load file
			}
			});
		</script>
		
		<script language="JavaScript">
			setInterval("SANAjaxInfo();", 1000 );  // set berapa detik melakukan refresh div

			$(function() {
				SANAjaxInfo = function(){
				$('#NotifInformasi').load("<?php echo base_url(); ?>index.php/Wali_Kelas/NotifInformasi").fadeIn("slow");  // load berarti melakukan load file
			}
			});
		</script>
		
		<script language="JavaScript">
			setInterval("SANAjaxSar();", 1000 );  // set berapa detik melakukan refresh div

			$(function() {
				SANAjaxSar = function(){
				$('#NotifSaran').load("<?php echo base_url(); ?>index.php/Wali_Kelas/NotifSaran").fadeIn("slow");  // load berarti melakukan load file
			}
			});
		</script>

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
			                     <input type="text" placeholder="Search..." class="form-control">
			                     <a href=""><i class="fa fa-search"></i></a>
			                </form>


                            <ul class="nav navbar-nav navbar-right pull-right">
								<li class="dropdown hidden-xs" id="NotifPesan">
								
								</li>
								
								<li class="dropdown hidden-xs" id="NotifInformasi">
								
								</li>
								
								<li class="hidden-xs" id="NotifSaran">
								
								</li>
								<li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                               
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url(); ?>arrafi/ubold/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/logout"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    </ul>
                                </li>
							</ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <?php if($jumlah == 2) { ?>
						<ul>
							<li class="text-muted menu-title">Guru</li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect active" ><i class=" ti-notepad"></i> <span>Kegiatan</span> </a>
                                <ul class="list-unstyled">
                                    <li  class="active"><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/addKegiatan">Buat Kegiatan</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/viewKegiatan">Lihat Kegiatan</a></li>
                                </ul>
                            </li>

                        	<li class="text-muted menu-title">Wali-Kelas</li>
							<li class="has_sub">
                                <a href="#" ><i class=" md-email"></i> <span>Pesan</span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/addPesan">Buat Pesan</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/viewPesanMasuk">Lihat Pesan Masuk</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/viewPesanTerkirim">Lihat Pesan Terkirim</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/viewPesanStatus">Lihat Status Pesan</a></li>
                                </ul>
                            </li>
							<li class="has_sub">
                                <a href="#" ><i class=" ti-info"></i> <span>Informasi</span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/addInformasi">Buat Informasi</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/viewInformasiTerbaca">Lihat Informasi Terbaca</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/viewInformasiTerkirim">Lihat Informasi Terkirim</a></li>
                                </ul>
                            </li>
							<li class="has_sub">
                                <a href="#"><i class="md-forum"></i> <span>Saran</span>  </a>
                                <ul class="list-unstyled">
                                    <li ><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/LihatPembahasan">Lihat Pembahasan</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/SaranOrtu">Lihat Saran Orang Tua</a></li>
                                </ul>
                            </li>
							<li class="has_sub">
                                <a href="#" ><i class="ion-ios7-compose-outline"></i>  <span>Laporan</span>  </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/homeLaporan">Buat Laporan</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/viewLaporan">Lihat Laporan</a></li>
                                </ul>
                            </li>
							 
                        </ul>
						<?php } else {  ?>
						<ul>
						<li class="text-muted menu-title">Guru</li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect active"><i class=" ti-notepad"></i> <span>Kegiatan</span> </a>
                                <ul class="list-unstyled">
                                    <li class="active"><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/addKegiatan">Buat Kegiatan</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/Wali_Kelas/viewKegiatan">Lihat Kegiatan</a></li>
                                </ul>
                            </li>
						</ul>
						<?php } ?>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12" >
                            </div>
                        </div>

                        <div class="row">
                           <div class="col-sm-12">
                        		<div class="card-box">
                                    <table id="datatable" class="table table-striped table-bordered">
                                            <thead align=center>
                                                <tr>
                                                    <th><h2 class="panel-title" align=center>Data Saran Orang Tua</h2></th>
                                                </tr>
                                            </thead>


                                            <tbody>
											<?php foreach($ListSaranOrtu as $row) { ?>
                                                <tr>
												<?php if($row->notifikasi_T =='dibaca') { ?>
                                                    <td>
													
													
													<div class="panel panel-primary">
									<div class="panel-heading">
									
										<h5 class="panel-title" align=center style="color:white;">Pembahasan : 
										<?php 
										$c = $this->db->query("SELECT nama_pembahasan nama_p FROM pembahasan where id_pembahasan=$row->id_pembahasan limit 1")->row_array();
										$nama = $c['nama_p'];
										echo $nama?><br><br>
										Tanggal :<?php echo $row->tanggal?></h5>
									
									</div>
									<div class="panel-body">
										<p  class="page-header">Group Wali Kelas <?php echo $row->nama?><br> 
										Kelas : <?php echo $row->kelas?> </p><br>
										<p  align=right>
										<p align=right>
													<button type="submit" class="btn btn-primary waves-effect waves-light">
                                                   <a href="<?php echo base_url(); ?>index.php/Wali_Kelas/LihatSaranOrtu/<?php echo $row->nip ?>/<?php echo $row->tanggal ?>/<?php echo $row->id_pembahasan ?>" style="color:white;">Terbaca </a></button>
										
										</p>
										</p>
									</div>
									</div>
													
													</td>
												<?php } else { ?>
													<td>
													
													
													<div class="panel panel-inverse">
									<div class="panel-heading">
									
										<h5 class="panel-title" align=center style="color:white;">Pembahasan : 
										<?php 
										$c = $this->db->query("SELECT nama_pembahasan nama_p FROM pembahasan where id_pembahasan=$row->id_pembahasan limit 1")->row_array();
										$nama = $c['nama_p'];
										echo $nama?><br><br>
										Tanggal :<?php echo $row->tanggal?></h5>
									
									</div>
									<div class="panel-body">
										<p  class="page-header">Group Wali Kelas <?php echo $row->nama?><br> 
										Kelas : <?php echo $row->kelas?> </p>
										<br>
										<p  align=right>
										<p align=right>
													<button type="submit" class="btn btn-inverse waves-effect waves-light">
                                                   <a href="<?php echo base_url(); ?>index.php/Wali_Kelas/LihatSaranOrtu/<?php echo $row->nip ?>/<?php echo $row->tanggal ?>/<?php echo $row->id_pembahasan ?>" style="color:white;">Lihat</a></button>
										
										</p>
										</p>
									</div>
									</div>
													
													</td>
												<?php } ?>
                                                </tr>
												
												<?php } ?>
                                            </tbody>
                                        </table>
                        			</div>
                        		</div>
                        	</div>
                                
								
                            
                            </div>
                        <!-- end row -->


                        

                            <!-- col -->

                        	
                        	<!-- end col -->



                        
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Arrafi.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            

        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/plugins/counterup/jquery.counterup.min.js"></script>



        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/plugins/raphael/raphael-min.js"></script>

        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/pages/jquery.dashboard.js"></script>

        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/js/jquery.app.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>arrafi/ubold/assets/plugins/parsleyjs/dist/parsley.min.js"></script>
		<script src="<?php echo base_url(); ?>arrafi/ubold/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>arrafi/ubold/assets/plugins/datatables/dataTables.bootstrap.js"></script>
        
        
        <script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
		</script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>
		
		<script type="text/javascript">
			$(document).ready(function() {
                $('#datatable').dataTable();
            } );
		</script>
		
			





    </body>
</html>