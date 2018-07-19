<html>
<header>
<style type="text/css" media="print">
 @page
   {
    size: 85mm 53mm;
    size: landscape;
    margin : 0;
  }

</style>
</header>
<body>


      <div style="width:85mm;height:53mm;border:1px solid #cecece;border-radius:10px;padding:5px; background-image:url('<?php echo base_url()."assets/images/1.jpg')"; ?>;background-repeat: no-repeat;background-size:cover" >
      <table> 
        <tr>
        <td rowspan="3"> <img src="<?php echo base_url('assets/images/logo.png'); ?>"  width="50px"></td>
        <td style="font-size:10px;font-family:arial" align="center"><b>KARTU PELAJAR</b></td>
        <td></td>
        </tr>
        <tr>
        <td style="font-size:12px;font-family:arial"  align="center">PRESENSI PESANTREN DARUL ILMI</td>
        <td></td>
        </tr>
        <tr>
        <td style="font-size:8px;font-family:arial"  align="center">JL. A. YANI KM. 19.2 KEL. LANDASAN ULIN BARAT, KEC. LIANGANGGANG 
BANJARBARU - KALIMANTAN SELATAN 70722
</td>
        <td></td>
        </tr>
      </table>
      <table border="0px" style="font-size:11px;font-family:arial;margin-top:5px">
 
        <tr>
        <td rowspan="5" style="padding-right:10px;padding-left:5px">
        <?php if ($data['foto']=='') { ?>
                  <img src="<?php echo base_url()."assets/images/foto/"; ?>default.png" class="thumbnail" width="60px"/>
                <?php } else { ?>
                  <img src="<?php echo base_url()."assets/images/foto/".$data['foto']; ?>" class="thumbnail" width="60px"/>
                <?php } ?>
        </td>
        <td>Nama</td>  <td style="width:120px"> : <?php echo $data['nama_lengkap']; ?></td>
        <td rowspan="5"> <img src="<?php echo base_url()."assets/barcode/".$data['nis_lokal']."_BCGcode39.png"; ?>" class="thumbnail" width="80px"/></td>
        </tr>
        <tr>
        <td>NIS</td> 
        <td> : <?php echo $data['nis_lokal']; ?> </td>
        </tr>
        <tr>
        <td>TTL</td> <td> : <?php echo $data['tempat_lahir']; ?>, <?php echo $data['tgl_lahir']; ?></td>
        </tr>
        <tr>
        <td  valign="top">Alamat</td> <td rowspan="2" valign="top"> : <?php echo $data['alamat_lengkap']; ?></td>
        </tr>
        <tr>
        <td>&nbsp</td>
        </tr>
        
   
       

      </table>
      <table  style="font-size:7px;font-family:arial;line-height:4px">
            <tr>
            <td style="width:225px"></td>
            <td>Banjarbaru, <?php echo date("d-m-Y") ?></td>
            </tr>   
            <tr>
            <td></td>
            <td>Kepala Sekolah</td>
            </tr> 
            <tr>
            <td></td>
            <td><img src="<?php echo base_url() ?>assets/images/mualimat.png" width="50px"/></td>
            </tr>
            <tr>
            <td></td>
            <td><?php echo $kepsek['kepsekmualimat'] ?></td>
            </tr>
            <tr>
            <td></td>
            <td><?php echo $kepsek['nipkepsekmualimat'] ?></td>
            </tr>
      </table>
      </div>

      <script>
window.print();
</script>
      </body>
</html>