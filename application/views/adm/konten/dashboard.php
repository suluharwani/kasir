  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Terjual</span>
              <span class="info-box-number"><?= "Rp " . number_format($jumlah_transaksi,2,',','.');?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-percent"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Potongan&discount</span>
              <span class="info-box-number"><?= "Rp " . number_format($jumlah_disc,2,',','.');?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Barang Terjual</span>
              <span class="info-box-number"><?=$barang_terjual?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Kasir</span>
              <span class="info-box-number"><?=$kasir_transaksi?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Cari Penjualan</h3>
              <!-- Date and time range -->
              <div class="form-group">
                <label>Range Laporan:</label>
                <form>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker">
                  </div>
                  Sampai
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker2">
                  </div>
                  <div class="input-group">
                    <a class="btn btn-info" id="btn_cari_laporan">Cari</a>
                  </div>

                </form>
                <!-- /.input group -->
              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive" >
               <table class="table table-bordered table-striped" id="tabel_penjualan">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nomor Faktur</th>
                    <th>Sub Total</th>
                    <th>Potongan</th>
                    <th>Jumlah</th>
                    <th>Terbilang</th>
                  </tr>
                </thead>
                <tbody id="show_data_bulan_ini">

                </tbody>
              </table>  
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
      <!-- /.col -->

      <div class="col-md-4">
        <!-- Info Boxes Style 2 -->
        <div class="info-box bg-yellow">
          <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Inventory</span>
            <span class="info-box-number"><?=$inventory?></span>

            <div class="progress">
              <!-- <div class="progress-bar" style="width: 50%"></div> -->
            </div>
            <span class="progress-description">
              Jumlah barang tersedia hari ini
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Uang Masuk sepanjang waktu</span>
            <span class="info-box-number"><?="Rp " . number_format($uang_masuk,2,',','.')?></script></span>

            <div class="progress">
              <div class="progress-bar" style="width: 20%"></div>
            </div>
            <span class="progress-description">
              Penjualan Bruto
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-red">
          <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Laba</span>
            <span class="info-box-number"><?="Rp " . number_format($laba,2,',','.')?></span>

            <div class="progress">
              <div class="progress-bar" style="width: <?=$persentase_laba?>%"></div>
            </div>
            <span class="progress-description">
              <?=$persentase_laba?>% Dari total uang masuk.
              <br/>
              pastikan hpp dicantumkan

            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-aqua">
          <span class="info-box-icon"><i class="ion-ios-pricetag-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Barang Terjual Sepanjang Waktu</span>
            <span class="info-box-number"><?=$jumlah_terjual?></span>

            <div class="progress">
              <div class="progress-bar" style="width: <?=$persentase_terjual?>%"></div>
            </div>
            <span class="progress-description">
              Terjual <?=number_format("$persentase_terjual",2)?>% dari stock
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript" charset="utf-8" async defer>
  $(document).ready(function() {
    $('#btn_cari_laporan').on('click',function(){
      var tanggal_mulai = $('#datepicker').val();
      var tanggal_selesai = $('#datepicker2').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/laporan_bulanan')?>",
        dataType : "JSON",
        data : {tanggal_mulai:tanggal_mulai, tanggal_selesai:tanggal_selesai},
        success: function(laporan){
            $('#tabel_penjualan').DataTable().destroy();
          var html = '';
          var i;
          var no = 1;
          for(i=0; i<laporan.length; i++){
            html += '<tr>'+
            '<td>'+ no++ +'</td>'+
            '<td>'+laporan[i].tanggal_buat+'</td>'+
            '<td>'+laporan[i].nomor_faktur+'</td>'+
            '<td>'+(laporan[i].nilai_jual)+'</td>'+
            '<td>'+(laporan[i].potongan_jual)+'</td>'+
            '<td>'+laporan[i].jumlah_pembayaran+'</td>'+
            '<td>'+sayit(laporan[i].jumlah_pembayaran)+'</td>'+
            '</tr>';
            }
            lap = html;
            $('#show_data_bulan_ini').html(lap);
            $('#tabel_penjualan').DataTable({
              "pageLength": 50000,
              dom: 'Bfrtip',
              buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
              ]
            });
          }
        });
    });
    // show_product();
    
  } );






  function format(s,r) {
    s=Math.round(s*Math.pow(10,r))/Math.pow(10,r);
    s=String(s);s=s.split(".");var l=s[0].length;var t="";var c=0;
    while(l>0){t=s[0][l-1]+(c%3==0&&c!=0?thoudelim:"")+t;l--;c++;}
    s[1]=s[1]==undefined?"0":s[1];
    for(i=s[1].length;i<r;i++) {s[1]+="0";}
      return curr+t+decdelim+s[1];
  }

  function threedigit(word) {
    eja=Array("Nol","Satu","Dua","Tiga","Empat","Lima","Enam","Tujuh","Delapan","Sembilan");
    while(word.length<3) word="0"+word;
    word=word.split("");
    a=word[0];b=word[1];c=word[2];
    word="";
    word+=(a!="0"?(a!="1"?eja[parseInt(a)]:"Se"):"")+(a!="0"?(a!="1"?" Ratus":"ratus"):"");
    word+=" "+(b!="0"?(b!="1"?eja[parseInt(b)]:"Se"):"")+(b!="0"?(b!="1"?" Puluh":"puluh"):"");
    word+=" "+(c!="0"?eja[parseInt(c)]:"");
    word=word.replace(/Sepuluh ([^ ]+)/gi, "$1 Belas");
    word=word.replace(/Satu Belas/gi, "Sebelas");
    word=word.replace(/^[ ]+$/gi, "");

    return word;
  }
  function sayit(s) {
    var thousand=Array("","Ribu","Juta","Milyar","Trilyun");
    s=Math.round(s*Math.pow(10,2))/Math.pow(10,2);
    s=String(s);s=s.split(".");
    var word=s[0];
    var cent=s[1]?s[1]:"0";
    if(cent.length<2) cent+="0";

    var subword="";i=0;
    while(word.length>3) {
      subdigit=threedigit(word.substr(word.length-3, 3));
      subword=subdigit+(subdigit!=""?" "+thousand[i]+" ":"")+subword;
      word=word.substring(0, word.length-3);
      i++;
    }
    subword=threedigit(word)+" "+thousand[i]+" "+subword;
    subword=subword.replace(/^ +$/gi,"");

    word=(subword==""?"NOL":subword.toUpperCase())+" RUPIAH";
    subword=threedigit(cent);
    cent=(subword==""?"":" ")+subword.toUpperCase()+(subword==""?"":" SEN");
    return word+cent;
  }
  function convertToRupiah(angka)
  {
    var rupiah = '';    
    var angkarev = angka.toString().split('').reverse().join('');
    for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
      return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
  }



</script>
<!-- date-range-picker -->
<script src="<?=base_url('assets/adminLTE')?>/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url('assets/adminLTE')?>/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript">
 $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'YYYY/MM/DD h:mm A' })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
      )

    </script>