<style type="text/css" media="print">
@page 
{
  size: auto;   /* auto is the initial value */
  margin: 0mm;  /* this affects the margin in the printer settings */
}
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kasir
      <small>Daftar Penjualan</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Kasir</a></li>
      <!-- <li><a href="#">Pembelian</a></li> -->
      <!-- <li class="active">Blank page</li> -->
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Tabel Pembelian Barang</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box">
            <div class="box-header">
              <div class="row form-inline">
                <div>
                 <div class="pull-right"><a class="btn btn-sm btn-success" data-toggle="modal" id="btn_tambah_pembelian"><span class="fa fa-plus"></span>(F8) Tambah Pembelian</a></div>

               </div>
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table class="table table-bordered table-striped" id="mydata">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Faktur</th>
                  <th>Customer/Metode</th>
                  <th>Tanggal Beli</th>
                  <th>Tanggal Posting</th>
                  <th>Admin</th>
                  <th>Status</th>
                  <th style="text-align: right;">Actions</th>
                </tr>
              </thead>
              <tbody id="show_data">

              </tbody>
            </table>  
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
       <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
        How to use
      </button>
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<div class="modal fade" id="ModalBatal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
        <h4 class="modal-title" id="myModalLabel">Batal produk</h4>
      </div>
      <form class="form-horizontal">
        <div class="modal-body">

          <input type="hidden" name="faktur_batal" id="faktur_batal" value="">
          <div class="alert alert-warning"><p>Apakah Anda yakin mau membatalkan pembelian faktur <span id="faktur_batal"></span>?</p>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button class="btn_hapus btn btn-danger" id="btn_batal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--END MODAL batal-->
<!-- MODAL ADD -->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
       <!--  <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">×</button> -->
       <h3 class="modal-title" id="myModalLabel">Tambah Pembelian</h3>
     </div>
     <form class="form-horizontal">
      <div class="modal-body">
       <div class="box-body">
        <div class="form-group">
          <label>Nomor Faktur</label>
          <input name="nomor_faktur_input" id="nomor_faktur_input" class="form-control" type="text" placeholder="Nomor Faktur"  required>
          <span id="check_nomor_faktur"></span>  
        </div>
        <div class="form-group">
          <label>Supplier</label>
          <select name="customer_nama" id="customer_nama" class="form-control"  required="true" >
            <option selected disabled>Pilih Supplier</option>}
            option
          </select>
        </div>

        <!-- coba -->
      </div>
    </div>

    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
      <button class="btn btn-info" id="btn_simpan">Simpan</button>
    </div>
  </form>
</div>
</div>
</div>
<!-- MODAL ADD -->
<!--MODAL HAPUS-->
<div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
        <h4 class="modal-title" id="myModalLabel">Hapus Faktur</h4>
      </div>
      <form class="form-horizontal">
        <div class="modal-body">

          <input type="hidden" name="kode" id="id_faktur_hapus">
          <input type="hidden" name="kode" id="faktur_hapus">
          <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus <u> <span id="nomor_faktur_hapus"></span></u>?</p>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button class="btn_hapus btn btn-danger" id="btn_hapus_faktur">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.modal -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Cara Pemakaian</h4>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- /.modal -->
  <div class="modal fade" id="Modalpreviledge">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          Masukkan kode previledge
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <input name="kode_faktur_batal_faktur" id="kode_faktur_batal_faktur" class="form-control hidden" type="text" placeholder="Masukkan kode">

          </div>
          <div class="modal-body">
            <form>
             <input name="kode_previledge" id="kode_previledge" class="form-control" type="password" required>
           </form>
         </div>
         <div class="modal-footer">
          <button class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <div class="modal fade" id="modal_cutomer">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Pilih Customer</h4>
          </div>
          <div class="modal-body">
            <form>
             <select name="customer" id="customer" class="form-control"  required="true" >
              <option selected disabled>Pilih Customer</option>}
              option
            </select>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary pull-left" id="btn_tambah_customer">Tambah Customer</button>
          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <div class="modal fade" id="Modal_Faktur" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
         <!--  <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">×</button> -->
         <h3 class="modal-title" id="myModalLabel">Faktur</h3>
       </div>
       <form class="form-horizontal">
        <div class="modal-body">
         <x id="faktur_print">
         </div>


         <div class="modal-footer">
          <input type="button" class="btn" id="print_nota" onclick="printDiv('printableArea')" value="print Nota!" />

          <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="Modal_Surat_Jalan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
       <!--  <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">×</button> -->
       <h3 class="modal-title" id="myModalLabel">Surat Jalan</h3>
     </div>
     <form class="form-horizontal">
      <div class="modal-body">
       <x id="surat_jalan_print">
       </div>


       <div class="modal-footer">
        <input type="button" class="btn" id="print_nota" onclick="printDiv('printableArea')" value="print Surat Jalan!" />

        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
      </div>
    </form>
  </div>
</div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
  <!-- <script src="<?=base_url('assets/adminLTE')?>/bower_components/jquery/dist/jquery.min.js"></script>

  <script src="<?=base_url('assets/adminLTE')?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url('assets/adminLTE')?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->
  <script type="text/javascript" charset="utf-8" async defer>
    $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        show_product(); //call function show all product

        $('#mydata').dataTable();

        //function show all product
        function show_product(){
          $.ajax({
            type  : 'ajax',
            url   : '<?php echo site_url('kasir/pembelian_data')?>',
            async : false,
            dataType : 'json',
            success : function(data){
              var html = '';
              var i;
              var no = 1;
              for(i=0; i<data.length; i++){
                if (data[i].status == 0) {
                  status = '<label class="label label-warning">Belum diposting</label>';
                  html += '<tr>'+
                  '<td>'+ no++ +'</td>'+
                  '<td>'+data[i].nomor_faktur+'</td>'+
                  '<td>'+data[i].nama_customer+'|'+data[i].metode+'</td>'+
                  '<td>'+data[i].tanggal_buat+'</td>'+
                  '<td>'+data[i].tanggal_posting+'</td>'+
                  '<td>'+data[i].nama+'</td>'+
                  '<td>'+status+'</td>'+
                  '<td style="text-align:right;">'+
                  '<a href="<?=base_url('kasir/index/')?>'+data[i].nomor_faktur+'" class="btn btn-info btn-sm item_edit" data-product_code="'+data[i].product_code+'" data-product_name="'+data[i].product_name+'" data-price="'+data[i].product_price+'">Edit</a>'+' '+
                  '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" id_faktur="'+data[i].id_faktur+'"  nomor_faktur_hapus="'+data[i].nomor_faktur+'">Delete</a>'+
                  '</td>'+
                  '</tr>'
                }else{
                  status = '<label class="label label-success">Sudah diposting</label>';
                  html += '<tr>'+
                  '<td>'+ no++ +'</td>'+
                  '<td>'+data[i].nomor_faktur+'</td>'+
                  '<td>'+data[i].nama_customer+'|'+data[i].metode+'</td>'+
                  '<td>'+data[i].tanggal_buat+'</td>'+
                  '<td>'+data[i].tanggal_posting+'</td>'+
                  '<td>'+data[i].nama+'</td>'+
                  '<td>'+status+'</td>'+
                  '<td style="text-align:right;">'+
                  '<a href="javascript:void(0);" class="btn btn-default btn-sm cetak_surat_jalan" title="'+data[i].nomor_faktur+'" kode_faktur_surat_jalan="'+data[i].nomor_faktur+'">Surat Jalan</a>'+
                  '<a href="javascript:void(0);" class="btn btn-success btn-sm cetak_nota" title="'+data[i].nomor_faktur+'" kode_faktur_nota="'+data[i].nomor_faktur+'">Nota</a>'+
                  '<a href="javascript:void(0);" class="btn btn-warning btn-sm batal_posting" title="'+data[i].nomor_faktur+'" kode_faktur_batal="'+data[i].nomor_faktur+'">Batalkan</a>'+
                  '</td>'+
                  '</tr>'
                }
              }
              $('#show_data').html(html);
            }

          });
        }
        $('#show_data').on('click','.item_batal',function(){
            // var product_code = $(this).data('product_code');
            var faktur_batal = $(this).attr('faktur_batal');
            // $('[name="product_code"]').val("");
            // $('[name="product_name"]').val("");
            // $('[name="price"]').val("");

            $('#ModalBatal').modal('show');
            // $('#faktur').html(nomor_faktur);
            $('#faktur_batal').val(faktur_batal);
          });



        //Save product
        $('#btn_simpan').on('click',function(){
          var nomor_faktur = $('#nomor_faktur_input').val();
          var id_supplier = $('#customer_nama').val();

          $.ajax({
            type : "POST",
            url  : "<?php echo site_url('admin/simpan_faktur_pembelian')?>",
            dataType : "JSON",
            data : {nomor_faktur:nomor_faktur , id_supplier:id_supplier},
            success: function(data){
              $('#ModalAdd').modal('hide');
              show_product();
            }
          });
          return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
          var product_code = $(this).data('product_code');
          var product_name = $(this).data('product_name');
          var price        = $(this).data('price');

          $('#Modal_Edit').modal('show');
          $('[name="product_code_edit"]').val(product_code);
          $('[name="product_name_edit"]').val(product_name);
          $('[name="price_edit"]').val(price);
        });
        //update record to database
        $('#btn_batal').on('click',function(){
          var faktur = $('#faktur_batal').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo site_url('admin/batal_pembelian')?>",
            dataType : "JSON",
            data : {faktur:faktur},
            success: function(data){
              $('#ModalBatal').modal('hide');
              show_product();
            }
          });
          return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
          var nomor_faktur = $(this).attr('nomor_faktur_hapus');
          var id_faktur = $(this).attr('id_faktur');
          $('#nomor_faktur_hapus').html(nomor_faktur);
          $('#faktur_hapus').val(nomor_faktur);
          $('#id_faktur_hapus').val(id_faktur);
          $('#Modal_Delete').modal('show');
          
        });

        //delete record to database
        
        $('#btn_hapus_faktur').on('click',function(){
          var nomor_faktur = $('#faktur_hapus').val();
          var id_faktur = $('#id_faktur_hapus').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo site_url('kasir/hapus_faktur')?>",
            dataType : "JSON",
            data : {nomor_faktur:nomor_faktur,id_faktur:id_faktur},
            success: function(data){
              swal ( "Sukses" ,  "Produk Berhasil dihapus!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
              $('#Modal_Delete').modal('hide');
              show_product();
            }
          });
          return false;
        });
        $('#show_data').on('click','.batal_posting',function(){
          var kode_faktur =$(this).attr('kode_faktur_batal');
          $('#kode_faktur_batal_faktur').val(kode_faktur);
          $('#Modalpreviledge').modal('show');
          return false;
        });
        $('#kode_previledge').on('keyup change',function(){
          var kode_previledge = $('#kode_previledge').val();

          $.ajax({
            type : "POST",
            url  : "<?php echo site_url('kasir/konfirmasi_batal_faktur')?>",
            dataType : "JSON",
            data : {kode_previledge:kode_previledge},
            success: function(data){
             show_product();
             var kode =  $('#kode_faktur_batal_faktur').val();
             $.ajax({
              type : "POST",
              url  : "<?php echo site_url('kasir/batal_faktur')?>",
              dataType : "JSON",
              data : {kode:kode},
              success: function(data){
               show_product();
               $('#Modalpreviledge').modal('hide');
               swal ( "Sukses" ,  "Pembelian Berhasil Dibatalkan!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );

             }
           });
           }
         });
          return  $('select[name="customer_nama"]').empty();
        });





        $('#btn_tambah_pembeliana').on('click',function(){
          // var id_cat = $('#id_cat_hapus').val();

          $.ajax({
            type : "POST",
            url  : "<?php echo site_url('kasir/get_customer')?>",
            dataType : "JSON",
            success: function(supplier){

              $('#ModalAdd').modal('show');
              $.each(supplier, function(key, value) {
                $('select[name="customer_nama"]').append('<option value="'+ value.id +'">'+ value.nama +'</option>');

              });
            }
          });
          return  $('select[name="customer_nama"]').empty();
        });
      });
$('#btn_tambah_pembelian').on('click',function(){
  $.ajax({
    url: "<?php echo site_url('kasir/pilih_customer')?>",
    type: "GET",
    dataType: "json",
    success:function(data) {
      $('select[name="customer"]').empty();
      $.each(data, function(key, value) {

        $('select[name="customer"]').append('<option value="'+ value.id +'">'+ value.nama +'</option>');
        $('#modal_cutomer').modal('show');
      });
    }
  });

});
document.onkeyup = function(e) {
  if (e.which == 119) {
    $.ajax({
      url: "<?php echo site_url('kasir/pilih_customer')?>",
      type: "GET",
      dataType: "json",
      success:function(data) {
        $('select[name="customer"]').empty();
        $.each(data, function(key, value) {

          $('select[name="customer"]').append('<option value="'+ value.id +'">'+ value.nama +'</option>');
          $('#modal_cutomer').modal('show');
        });
      }
    });
  } else if (e.ctrlKey && e.which == 65) {
    alert("Ctrl + A shortcut combination was pressed"); //ctrl+a
  } 
};

$('#btn_tambah_customer').on('click',function(){
  var faktur_penjualan = "<?=$faktur_penjualan?>";
  var id_admin = "<?=$id_admin?>";
  var id_customer = $('#customer').val();

  $.ajax({
    url: "<?php echo base_url(); ?>kasir/tambah_faktur",
    method: "POST",
    data: {nomor_faktur_input:faktur_penjualan, id_admin:id_admin, id_customer:id_customer},
    success: function(data){
     window.location.replace("<?=base_url('kasir/index/')?>"+faktur_penjualan+"");
   }
 });

});
$('#show_data').on('click','.cetak_nota',function(){
  kode_faktur = $(this).attr('kode_faktur_nota');
  $.ajax({
    type : "POST",
    url  : "<?php echo site_url('kasir/nota_get_cus')?>",
    dataType : "JSON",
    data : {kode_faktur:kode_faktur},
    success: function(cus){
      var nama_perusahaan="<?=$nama_perusahaan?>";
      var logo="<?php echo site_url('assets/gambar/web/').$logo?>";
      var alamat="<?=$alamat?>";
      var nama_admin ="<?=$nama_admin?>";
      var telepon ="<?=$telepon?>";
      var email ="<?=$email?>";
      var tanggal ="<?=$tanggal?>";
      var nama_client = cus[0].nama;
      var alamat_client = cus[0].provinsi+"|"+cus[0].kabupaten+"|"+cus[0].kecamatan+"|"+cus[0].alamat+"|"+cus[0].kode_pos;
      var hp_client = cus[0].no_hp;
      var email_client = cus[0].username;
      
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('kasir/show_nota')?>",
        dataType : "JSON",
        data : {kode_faktur:kode_faktur},
        success: function(data){
          var faktur_tabel_html="";
          var faktur_header="";
          var faktur_footer="";
          
          var no = 1;
          var total_belanja = 0;
          var nomor_faktur = kode_faktur;
          var total_barang_harga = 0;

          for(i=0; i<data.length; i++){
            jumlah_akhir = data[i].jumlah*data[i].sub_jumlah2*data[i].sub_jumlah1;
            var harga_akhir = data[i].harga_jual-(data[i].harga_jual*data[i].disc_1/100)-((data[i].harga_jual-(data[i].harga_jual*data[i].disc_1/100))*data[i].disc_2/100)-((data[i].harga_jual-(data[i].harga_jual*data[i].disc_1/100)-((data[i].harga_jual-(data[i].harga_jual*data[i].disc_1/100))*data[i].disc_2/100))*data[i].disc_3/100)-data[i].potongan;
            var harga = harga_akhir*jumlah_akhir;
            total_belanja += harga;
            harga_awal = data[i].harga_jual;
            faktur_tabel_html +='<tr>'+
            '<td>'+no++ +'</td>'+
            '<td>'+data[i].barcode+'</td>'+
            '<td>'+data[i].nama_produk+'</td>'+
            '<td>'+data[i].jumlah+'</td>'+
            '<td>'+data[i].sub_jumlah1+' X '+data[i].sub_jumlah2+'</td>'+
            '<td>'+data[i].harga_jual+'</td>'+
            '<td>'+data[i].disc_1+'</td>'+
            '<td>'+data[i].disc_2+'</td>'+
            '<td>'+data[i].disc_3+'</td>'+
            '<td>'+data[i].potongan+'</td>'+
            '<td>'+harga_akhir+'</td>'+
            '<td>'+convertToRupiah(harga.toFixed(0))+'</td>'+
            '</tr>';
            total_barang_harga+=jumlah_akhir*harga_awal;

          }
          total_potongan = -1*(total_belanja-total_barang_harga);
          faktur_header = '<div id="printableArea">'+
          '<div class="wrapper">'+
          '<section class="invoice">'+
          '<div class="row">'+
          '<div class="col-xs-12">'+
          '<h2 class="page-header">'+
          '<img src="'+logo+'" height=80></i>'+
          '<small class="pull-right">Date: '+tanggal+'</small>'+
          '</h2>'+
          '</div>'+
          '</div>'+
          '<div class="row invoice-info">'+
          '<div class="col-sm-4 invoice-col">'+
          'From'+
          '<address>'+
          '<strong>Admin, '+nama_admin+'.</strong><br>'+
          ''+alamat+'<br/>'+
          'Phone: '+telepon+'<br>'+
          'Email: '+email+'<br>'+
          '</address>'+
          '</div>'+
          '<div class="col-sm-4 invoice-col">'+
          'To'+
          '<address>'+
          '<strong>'+nama_client+'</strong><br>'+
          'Alamat:'+alamat_client+'<br>'+
          'Phone: '+hp_client+'<br>'+
          'Email: '+email_client+''+
          '</address>'+
          '</div>'+
          '<div class="col-sm-4 invoice-col">'+
          '<b>Invoice #'+nomor_faktur+'</b><br>'+
          '<br>'+
          '<b>Nota:</b>Copy<br>'+
          '</div>'+
          '</div>'+
          '<div class="row">'+
          '<div class="col-xs-12 table-responsive">'+
          '<table class="table table-striped">'+
          '<thead>'+
          '<tr>'+
          '<th>No</th>'+
          '<th>Kode Produk</th>'+
          '<th>Nama</th>'+
          '<th>Qty</th>'+
          '<th>Size</th>'+
          '<th>Harga/produk</th>'+
          '<th>Disc 1</th>'+
          '<th>Disc 2</th>'+
          '<th>Disc 3</th>'+
          '<th>Potongan</th>'+
          '<th>Harga</th>'+
          '<th>Subtotal</th>'+
          '</tr>'+
          '</thead>'+
          '<tbody>';
          faktur_footer ='</tbody>'+
          '</table>'+
          '</div>'+
          '</div>'+
          '<div class="row">'+
          '<div class="col-xs-6">'+
          ' <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">'+
          ' Tanda Tangan <br><br><br>'+
          ' Penerima<br><br>'+
          ' ........'+
          '</p>'+
          '</div>'+
          ' <div class="col-xs-6">'+
          '<div class="table-responsive">'+
          ' <table class="table">'+
          '<tr>'+
          '<th style="width:50%">Subtotal</th>'+
          '<td>'+convertToRupiah(total_barang_harga.toFixed(0))+'</td>'+
          '</tr>'+
          '<tr>'+
          '<th>Potongan</th>'+
          '<td>'+convertToRupiah(total_potongan.toFixed(0))+'</td>'+
          '</tr>'+
          '<tr>'+
          '<th>Total</th>'+
          ' <td>'+convertToRupiah(total_belanja.toFixed(0))+'</td>'+
          '</tr>'+
          '</table>'+
          ' </div>'+
          ' </div>'+
          '</div>'+
          '</section>'+
          '</div>'+
          '</div>';
          faktur_print = ''+faktur_header+''+faktur_tabel_html+''+faktur_footer+'';

          $('#faktur_header').html(faktur_header);
          $('#faktur_tabel').html(faktur_tabel_html);
          $('#faktur_footer').html(faktur_footer);
          $('#faktur_id').val('kode_faktur');
          $('#faktur_print').html(faktur_print);
          $('#Modal_Faktur').modal('show');
        }
      });
}
});

});
$('#show_data').on('click','.cetak_surat_jalan',function(){
  kode_faktur = $(this).attr('kode_faktur_surat_jalan');
  $.ajax({
    type : "POST",
    url  : "<?php echo site_url('kasir/nota_get_cus')?>",
    dataType : "JSON",
    data : {kode_faktur:kode_faktur},
    success: function(cus){
      var nama_perusahaan="<?=$nama_perusahaan?>";
      var logo="<?php echo site_url('assets/gambar/web/').$logo?>";
      var alamat="<?=$alamat?>";
      var nama_admin ="<?=$nama_admin?>";
      var telepon ="<?=$telepon?>";
      var email ="<?=$email?>";
      var tanggal ="<?=$tanggal?>";
      var nama_client = cus[0].nama;
      var alamat_client = cus[0].provinsi+"|"+cus[0].kabupaten+"|"+cus[0].kecamatan+"|"+cus[0].alamat+"|"+cus[0].kode_pos;
      var hp_client = cus[0].no_hp;
      var email_client = cus[0].username;
      
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('kasir/show_nota')?>",
        dataType : "JSON",
        data : {kode_faktur:kode_faktur},
        success: function(data){
          var faktur_tabel_html="";
          var faktur_header="";
          var faktur_footer="";
          
          var total_jumlah_barang_harga = 0;
          var no = 1;
          var total_belanja = 0;
          var nomor_faktur = kode_faktur;
          var total_barang_harga = 0;

          for(i=0; i<data.length; i++){
            jumlah_akhir = data[i].jumlah*data[i].sub_jumlah2*data[i].sub_jumlah1;
            var harga_akhir = data[i].harga_jual-(data[i].harga_jual*data[i].disc_1/100)-((data[i].harga_jual-(data[i].harga_jual*data[i].disc_1/100))*data[i].disc_2/100)-((data[i].harga_jual-(data[i].harga_jual*data[i].disc_1/100)-((data[i].harga_jual-(data[i].harga_jual*data[i].disc_1/100))*data[i].disc_2/100))*data[i].disc_3/100)-data[i].potongan;
            var harga = harga_akhir*jumlah_akhir;
            total_belanja += harga;
            harga_awal = data[i].harga_jual;
            faktur_tabel_html +='<tr>'+
            '<td>'+no++ +'</td>'+
            '<td>'+data[i].nama_produk+'</td>'+
            '<td>'+data[i].jumlah+'</td>'+
            '<td>'+data[i].sub_jumlah1+' X '+data[i].sub_jumlah1+'</td>'+
            // '<td>'+data[i].harga_jual+'</td>'+
            // '<td>'+data[i].disc_1+'</td>'+
            // '<td>'+data[i].disc_2+'</td>'+
            // '<td>'+data[i].disc_3+'</td>'+
            // '<td>'+data[i].potongan+'</td>'+
            // '<td>'+harga_akhir+'</td>'+
            // '<td>'+convertToRupiah(harga.toFixed(0))+'</td>'+
            '</tr>';
            total_barang_harga+=jumlah_akhir*harga_awal;
            total_jumlah_barang_harga += 1*data[i].jumlah;

          }
          total_potongan = -1*(total_belanja-total_barang_harga);
          faktur_header = '<div id="printableArea">'+
          '<div class="wrapper">'+
          '<section class="invoice">'+
          '<div class="row">'+
          '<div class="col-xs-12">'+
          '<h2 class="page-header">'+
          '<img src="'+logo+'" height=80></i>'+
          '<small class="pull-right">Date: '+tanggal+'</small>'+
          '</h2>'+
          '</div>'+
          '</div>'+
          '<div class="row invoice-info">'+
          '<div class="col-sm-4 invoice-col">'+
          'From'+
          '<address>'+
          '<strong>'+nama_admin+', '+nama_perusahaan+'.</strong><br>'+
          ''+alamat+'<br/>'+
          'Phone: '+telepon+'<br>'+
          'Email: '+email+''+
          '</address>'+
          '</div>'+
          '<div class="col-sm-4 invoice-col">'+
          'To'+
          '<address>'+
          '<strong>'+nama_client+'</strong><br>'+
          'Alamat:'+alamat_client+'<br>'+
          'Phone: '+hp_client+'<br>'+
          'Email: '+email_client+''+
          '</address>'+
          '</div>'+
          '<div class="col-sm-4 invoice-col">'+
          '<b>Invoice #'+nomor_faktur+'</b><br>'+
          '<br>'+
          '<b>Nota:</b>Surat Jalan<br>'+
          '</div>'+
          '</div>'+
          '<div class="row">'+
          '<div class="col-xs-12 table-responsive">'+
          '<table class="table table-striped">'+
          '<thead>'+
          '<tr>'+
          '<th>No</th>'+
          '<th>Nama Barang</th>'+
          '<th>Jumlah</th>'+
          '<th>Keterangan</th>'+
          '</tr>'+
          '</thead>'+
          '<tbody>';
          faktur_footer ='</tbody>'+
          '</table>'+
          '</div>'+
          '</div>'+
          '<div class="row">'+
          '<div class="col-xs-6">'+
          ' <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">'+
          ' Tanda Tangan dan Stemple<br><br><br>'+
          '<tr>'+
          ' <td>Penerima</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Pengirim</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Admin</td><br>'+
          '</tr>'+
          '<tr>'+
          ' <td>________</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>________</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>______</td>'+
          '</tr>'+
          '</p>'+
          '</div>'+
          ' <div class="col-xs-6">'+
          '<div class="table-responsive">'+
          ' <table class="table">'+
          '<tr>'+
          '<th style="width:50%">Jumlah Item</th>'+
          '<td>'+total_jumlah_barang_harga+'</td>'+
          '</tr>'+
          '<tr>'+
          '<th style="width:50%">Subtotal</th>'+
          '<td>'+convertToRupiah(total_barang_harga.toFixed(0))+'</td>'+
          '</tr>'+
          '<tr>'+
          '<th>Potongan</th>'+
          '<td>'+convertToRupiah(total_potongan.toFixed(0))+'</td>'+
          '</tr>'+
          '<tr>'+
          '<th>Total</th>'+
          ' <td>'+convertToRupiah(total_belanja.toFixed(0))+'</td>'+
          '</tr>'+
          '</table>'+
          ' </div>'+
          ' </div>'+
          '</div>'+
          '</section>'+
          '</div>'+
          '</div>';
          surat_jalan_print = ''+faktur_header+''+faktur_tabel_html+''+faktur_footer+'';

          $('#faktur_header').html(faktur_header);
          $('#faktur_tabel').html(faktur_tabel_html);
          $('#faktur_footer').html(faktur_footer);
          $('#faktur_id').val('kode_faktur');
          $('#surat_jalan_print').html(surat_jalan_print);
          $('#Modal_Surat_Jalan').modal('show');
        }
      });
}
});

});
</script>
<script type="text/javascript">
  $('#nomor_faktur_input').on('keydown change keyup paste blur focus keyup',function(){
   var nomor_faktur_input = $('#nomor_faktur_input').val();
   if(nomor_faktur_input !=''){
    $.ajax({
      url: "<?php echo base_url(); ?>admin/check_nomor_faktur",
      method: "POST",
      data: {nomor_faktur_input:nomor_faktur_input},
      success: function(data){
        $('#check_nomor_faktur').html(data);
      }
    });
  }
});
</script>
<script> 
// var old_count = 0;
// var i = 0;
// setInterval(function(){    
//   $.ajax({
//     type : "POST",
//     url : "<?php echo base_url(); ?>kasir/notif",
//     success : function(data){
//       if (data > old_count) { if (i == 0){old_count = data;} 
//       else{
//         swal ( "Pesanan" ,  "Pesanan Baru Masuk!" ,  "success", {
//           buttons: false,
//           timer: 50000,
//         } );

//         old_count = data;}
//       } i=1;
//     }
//   });
// },10000);

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
$(document).ready(function(){
  $('#btn_tambah_faktur').on('click',function(){
    var id_admin = <?=$id_admin?>;
    $.ajax({
      type : "post",
      url  : "<?php echo site_url('kasir/get_faktur')?>",
      dataType : "JSON",
      data: {id_admin:id_admin},
      success: function(data){
        $('#faktur_pembelian').val(data);
        var faktur = $('#faktur_pembelian').val();
        window.location.replace("<?=base_url('kasir/index/')?>"+faktur+"");
      }
    });
    return false;
  });
});
</script>
<script type="text/javascript">
  function printDiv(divName) {
   var printContents = document.getElementById(divName).innerHTML;
   var originalContents = document.body.innerHTML;

   document.body.innerHTML = printContents;

   window.print();

   document.body.innerHTML = originalContents;
 }

 $('#print_nota').on('click',function(){
  $('#Modal_Faktur').modal('hide');
});
</script>