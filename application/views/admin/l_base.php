<?php
$mode		= $this->uri->segment(3);

// if ($mode == "edt" || $mode == "act_edt") {
// 	$act		= "act_edt";
// 	$idp		= $datpil->id;
// 	$no_agenda	= $datpil->no_agenda;
// 	$indek_berkas= $datpil->indek_berkas;
// 	$kode		= $datpil->kode;
// 	$dari		= $datpil->dari;
// 	$no_surat	= $datpil->no_surat;
// 	$tgl_surat	= $datpil->tgl_surat;
// 	$uraian		= $datpil->isi_ringkas;
// 	$ket		= $datpil->keterangan;
// 	$sifat		= $datpil->sifat_surat;
// 	$kepada		= $datpil->kepada;
// 	$id_pegawai		= $datpil->id_pegawai;
// } else {
// 	$act		= "act_add";
// 	$ta 		= $this->session->userdata('admin_ta');
// 	$idp		= "";
// 	$no_agenda	= gli("t_surat_masuk", "no_agenda", 4,$ta);
// 	$indek_berkas="";
// 	$kode		= "";
// 	$kode2		= "";
// 	$nama		= "";
// 	$uraian		= "";
// 	$dari		= "";
// 	$no_surat	= "";
// 	$tgl_surat	= "";
// 	$uraian		= "";
// 	$ket		= "";
// 	$sifat		= "";
// 	$kepada		= "";
// }
?>
<div class="">
    <div class="page-title">
        <div class="title_full">
            <h1>Daftar Rekrutmen</h1>
        </div>

    </div>
    <div class="clearfix"></div>


    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <!-- <form class="nav navbar-right panel_toolbox" method="post" action="<?php echo base_URL(); ?>index.php/base/cari">
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <input type="text" class="form-control has-feedback-left" name="q" placeholder="Kata kunci pencarian ..." required>
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <button type="submit" class="btn btn-danger"><i class="icon-search icon-white"> </i> Cari</button>
                            </div>
                        </form> -->
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">No.</th>
                                <th class="column-title">Tanggal</th>
                                <th class="column-title">Indentitas</th>
                                <th class="column-title">Posisi</th>
                                <th class="column-title">Pengalaman</th>
                                <th class="column-title">Penilaian</th>
                            </tr>
                        </thead>
                        
                        <!-- id	"1"
                        timestamp	"7/12/2023 9:13:26"
                        nama	"Zainal Pratama Sapta Yananda, S.Kom."
                        nip	"199109022020121004"
                        satuan_kerja	"Pengadilan Agama Kaimana"
                        posisi_yang_dipilih	"System / Business Analyst"
                        bahasa_pemrograman_yang_dikuasai	"PHP"
                        framework_bahasa_pemrograman_yang_dikuasai	"CodeIgniter, Laravel"
                        database_yang_dikuasai	"MySQL"
                        tools_yang_dikuasai	"Visual Studio"
                        pernah_membuat_mobile_apps	"Tidak" -->
                        <?php
                        
                        $decoded_data = json_decode($data);
                        foreach ($decoded_data as $form) {
                            foreach ($form as $b) {
                        ?>
                            <tr>
                                <td class=" ">
                                    <?php echo $b->id; ?>
                                </td>
                                <td class=" "><?php echo "<i>". $b->timestamp ."</i>"?></td>
                                <td class=" ">
                                    NIP : <?php echo $b->nip; ?><br/>
                                    Nama : <?php echo $b->nama; ?><br/>
                                    Satker : <?php echo $b->satuan_kerja; ?><br/>
                                </td>
                                <td class=" ">
                                    <?php echo $b->posisi_yang_dipilih; ?>
                                </td>
                                <td class=" ">
                                    Bahasa Pemrograman : <?php echo ($b->bahasa_pemrograman_yang_dikuasai) ? $b->bahasa_pemrograman_yang_dikuasai : ''; ?><br/>
                                    Framework : <?php echo (property_exists($b, 'framework_bahasa_pemrograman_yang_dikuasai')) ? $b->framework_bahasa_pemrograman_yang_dikuasai : ''; ?><br/>
                                    Database : <?php echo ($b->database_yang_dikuasai) ? $b->database_yang_dikuasai : ''; ?><br/>
                                    Tools yang Dikuasai : <?php echo ($b->tools_yang_dikuasai) ? $b->tools_yang_dikuasai : ''; ?><br/>
                                    Pernah Membuat Mobile Apps : <?php echo ($b->pernah_membuat_mobile_apps) ? $b->pernah_membuat_mobile_apps : ''; ?><br/>
                                </td>
                                    <!-- {
                                    "id_pendaftar": 1,
                                    "jenis_attr": "nilai_t1",
                                    "value": 75
                                    }, -->
                                <td class=" ">
                                    <?php 
                                        $decoded_attribut = json_decode($data_attribut);
                                        foreach ($decoded_attribut as $atr) {
                                            if ($atr->id_pendaftar == $b->id){
                                                echo 'Jenis : ' . $atr->jenis_attr . '<br>';
                                                echo 'Nilai : ' . $atr->value . '<br>';
                                            }
                                        }
                                    ?>
                                </td>
                            </tr>
                        <?php
                            }
                        }
                        ?>

                        <tbody>
                            
                        </tbody>
                        </table>
                    </div>

                </div>
                    
            </div>
        </div>
    </div>
    

