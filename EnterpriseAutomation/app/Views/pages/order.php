<?php $this->extend("layout/template.php", $title);

$this->section('content');

?>

<!-- PASSING FLASH DATA FOR SWEETALERT2 -->
<div data-flash="<?= session()->getFlashdata('input_msg') ?>" class="data-input d-none"> </div>
<div data-flash="<?= session()->getFlashdata('del_msg') ?>" class="data-delete d-none"> </div>
<div data-flash="<?= session()->getFlashdata('edit_msg') ?>" class="data-edit d-none"> </div>
<div data-flash="<?= session()->getFlashdata('validate_msg') ?>" class="data-valid d-none"> </div>


<div class="row mt-4">
    <div class="col-lg-7">
        <div class="card z-index-2">
            <div class="card-header pb-0">
                <div class="my-auto d-flex text-start">
                    <div class="icon my-auto icon-shape bg-gradient-warning shadow text-center border-radius-md">
                        <i class='fs-4 bx bxs-cart-alt'></i>
                    </div>
                    <div class="d-flex">
                        <h3 class="text-dark lh-1 ms-3 my-auto poppins-bold">Order<br>
                            <span class="text-sm lh-1 poppins-regular text-dark text-start"> No.SPK : PM2004.01
                            </span>
                        </h3>
                    </div>
                </div>
                <div class="row text-start mt-3">

                    <div class="col-lg-4 mb-lg-0 mb-3 text-start">
                        <button type="submit" name="submit" class="my-auto w-lg-100 py-2 btn btn-success">ACC
                            Project</button>
                    </div>
                    <div class="col text-start my-auto">
                        <span class="py-2 h-100 badge badge-sm bg-gradient-success">status : Tervalidasi</span>
                    </div>
                </div>
            </div>
            <div class="card-body p-3">

            </div>
        </div>
    </div>
    <div class="col-lg-5 mt-4 mt-lg-0">
        <div class="card h-100 z-index-2">
            <div class="card-header mb-3 pb-0">
                <div class="my-auto text-center">
                    <!-- <div class="icon icon-shape bg-gradient-danger shadow text-center border-radius-md">
                        <i class='fs-4 bx bxs-calendar'></i>
                    </div> -->
                    <h3 class="text-dark text-center my-auto poppins-bold">Batas Waktu</h3>
                </div>
            </div>
            <div class="card-body text-center pt-0">
                <h3 class="text-dark">24/03/2024 | H-18</h3>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header pe-0">
        <div class="row">
            <div class="col col-10 col-lg mb-lg-0 mb-3">
                <div class="w-100 d-flex my-auto text-start">
<!--                     <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md"><i
                            class='fs-4 bx bxs-briefcase-alt-2'></i>
                    </div> -->
                    <h4 class="d-flex ms-3 mt-2 poppins-bold mb-0 text-dark">Data Order Logistik</h4>
                </div>
            </div>
            <div class="col pe-0 d-flex  justify-content-lg-end justify-content-center">
                <div class="row">
                    <div class="col px-0">
                        <div
                            class="ms-md-auto pe-md-3 d-flex align-items-center justify-content-end ms-sm-auto me-lg-0 me-sm-3">
                            <form action="" id="searchbar" method="GET">
                                <div class="input-group">
                                    <input type="text" id="searchbox" class="form-control" placeholder="Type here..."
                                        name="keyword">
                                    <button type="submit" class="searchicon px-3 py-auto btn m-0"><i
                                            class='text-white fs-6 bx bx-search'></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col">
                        <div class="dropdown h-100 w-0">
                            <button class="h-100 my-auto dropdown-toggle btn btn-info ps-3 pe-2" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Show <?= $entries ?> Data
                                <span class="ms-2 me-0 pe-0"><i class='bx bxs-chevron-down'></i></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="text-dark text-center dropdown-item" href="/Order?page=1&entries=5">5 Data /
                                        Halaman</a></li>
                                <li><a class="text-dark text-center dropdown-item" href="/Order?page=1&entries=10">10 Data
                                        / Halaman</a></li>
                                <li><a class="text-dark text-center dropdown-item" href="/Order?page=1&entries=15">15 Data
                                        / Halaman</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="card-body pt-0 mt-0">
        <div class="table-responsive p-0">
            <table class="table align-items-center">
                <thead>
                    <tr>
                        <th class="text-uppercase text-center text-sm text-dark font-weight-bolder opacity-10">
                            No.
                        </th>
                        <th class="text-uppercase text-center text-sm text-dark font-weight-bolder opacity-10">
                            Jumlah</th>
                        <th class="text-uppercase text-center text-sm text-dark font-weight-bolder opacity-10">
                            Nama Barang/Uraian/Ukuran</th>
                        <th class="text-uppercase text-center text-sm text-dark font-weight-bolder opacity-10">
                            No.Barang</th>
                        <th class="text-uppercase text-center text-sm text-dark font-weight-bolder opacity-10">
                            No.Gambar</th>
                        <th class="text-uppercase text-center text-sm text-dark font-weight-bolder opacity-10">
                            Tanggal Penerima</th>
                        <th class="text-uppercase text-center text-sm text-dark font-weight-bolder opacity-10">
                            Nama Penerima</th>
                        <th class="text-uppercase text-center text-sm text-dark font-weight-bolder opacity-10">
                            Berat(kg)</th>
                        <th class="text-uppercase text-center text-sm text-dark font-weight-bolder opacity-10">
                            Tanggal Pelaporan/Pembelian</th>
                        <th class="text-uppercase text-center text-sm text-dark font-weight-bolder opacity-10">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 + ($entries * ($current_page - 1)); foreach($getOrder as $dataOrder){?>
                        <tr>
                            <td data-label="No" class="text-dark text-center"><?= $no;?></td>
                            <td data-label="Jumlah" class="text-dark text-center"><?= $dataOrder['jml_satuan'] ?></td>
                            <td data-label="Nama Barang/Uraian/Ukuran" class="text-dark text-center"><?= $dataOrder['nama_barang'] ?></td>
                            <td data-label="No.Barang" class="text-dark text-center"><?= $dataOrder['no_barang'] ?></td>
                            <td data-label="No.Gambar" class="text-dark text-center"><?= $dataOrder['no_gambar'] ?></td>
                            <td data-label="Tanggal Penerima" class="text-dark text-center"><?= $dataOrder['tgl_penerima'] ?></td>
                            <td data-label="Nama Penerima" class="text-dark text-center"><?= $dataOrder['nama_penerima'] ?></td>
                            <td data-label="Berat(kg)" class="text-dark text-center"><?= $dataOrder['berat_barang'] ?></td>
                            <td data-label="Tanggal Pelaporan/Pembelian" class="text-dark text-center"><?= $dataOrder['tgl_pembelian'] ?></td>
                            <td data-label="Aksi" class="text-dark text-center">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_info" class="btn btn-edit btn-info">Edit</a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="p-2 btn btn-danger"><i class='fs-4 bx bxs-trash'></i></a>
                            </td>
                        </tr>
                        <?php $no++;}?>
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <?= $pager->links() ?>
        </div>
    </div>
</div>


<div class="fixed-plugin">
    <a data-bs-toggle="modal" data-bs-target="#createModal"
        class=" fixed-plugin-button text-white position-fixed px-3 py-2">
        <i class='fs-4 bx bx-plus py-2'></i>
    </a>
</div>

<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" id="tambahOrder" action="/Order/createOrder">
            <div class="modal-content">
                <div class="bg-polman modal-header">
                    <h5 class="text-white poppins-bold modal-title" id="exampleModalLabel">Tambah Order</h5>
                    <!-- <button type="button" class="text-white opacity-10 btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button> -->

                </div>
                <div class="modal-body">
                    <div class="tab">
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Pemesan</label>
                            <input type="text" name="pengorder" class="form-control" id="pengorder"
                                placeholder="Masukan Nama Pemesan" >
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Tanggal</label>
                            <input type="text" class="dateselect form-control" id="tgl_create"
                                placeholder="Masukkan Tanggal (YYYY/MM/DD)">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Unit Kerja</label>
                            <input type="text" class="form-control" id="id_worker">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Batas Waktu</label>
                            <input type="text" class="dateselect form-control" id="batas_waktu"
                                placeholder="Masukkan Batas Waktu (YYYY/MM/DD">
                        </div>
                    </div>

                    <div class="tab">
                        <div class="mb-1">
                            <label for="disetujui" class="text-uppercase form-label">Disetujui</label>
                            <select name="approval_status" class="form-control" id="disetujui">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                                <option value="2">Belum Disetujui</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">No. Pembebanan</label>
                            <input type="text" class="form-control" id="id_spk" name="id_spk" value="PM<?=substr(date("Y"), -2);?><?=str_pad(($latest_id ?? '0'), 4, '0', STR_PAD_LEFT);?>">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Jumlah/Satuan</label>
                            <input type="number" name="jml_satuan" class="form-control" id="jml_satuan">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Nama Barang/Uraian/Ukuran</label>
                            <input type="text" name="" class="form-control" id="nama_barang_ukuran">
                        </div>
                    </div>

                    <div class="tab">
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">No. Barang</label>
                            <input type="text" class="form-control" id="no_gambar">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">No. Gambar</label>
                            <input type="text" class="form-control" id="no_gambar">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Tanggal Penerima</label>
                            <input type="text" class="dateselect form-control" id="tgl_penerima">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Nama & Paraf Penerima</label>
                            <input type="text" class="form-control" id="nama_penerima">
                        </div>
                    </div>

                    <div class="tab">
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Berat (Kg)</label>
                            <input type="number" class="form-control" id="berat_barang">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Tanggal Pelaporan/Pembelian</label>
                            <input type="text" class="dateselect form-control" id="tgl_pembelian">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Tanggal Pelaksana Pesanan</label>
                            <input type="text" class="dateselect form-control" id="tgl_pesan">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Nama & Paraf Pelaksana Pesanan</label>
                            <input type="text" class="form-control" id="nama_pelaksana">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Catatan</label>
                            <textarea class="form-control" id="catatan"> </textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-secondary" id="prevBtn">Previous</button>
                    <button type="button" class="btn btn-info" id="nextBtn">Next</button>
                    <button type="submit" id="submitInput" name="submit" class="btn btn-info">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-polman">
                <h5 class="modal-title text-white poppins-bold" id="myModalLabel">Konfirmasi Hapus Data</h5>
            </div>

            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini ?</p>
                <p class="debug-url"></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <a class="btn btn-danger btn-ok">Hapus</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_info" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" id="edit-form" action="/Order/editOrder">
            <div class="modal-content">
                <div class="modal-header bg-polman">
                    <h5 class="modal-title text-white poppins-bold" id="">Edit Data Order</h5>
                </div>
                <div class="modal-body">
                    <div class="tab_edit">
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Pemesan</label>
                            <input type="text" name="pengorder" class="form-control" id="edit_pemesan">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Tanggal</label>
                            <input type="text" class="dateselect form-control" id="edit_tgl_created">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Unit Kerja</label>
                            <input type="text" class="form-control" id="edit_id_worker">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Batas Waktu</label>
                            <input type="text" class="dateselect form-control" id="edit_batas_waktu">
                        </div>
                    </div>    
                    <div class="tab_edit">
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Disetujui</label>
                            <input type="text" name="Disetujui" class="form-control" id="edit_disetujui">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">No. Pembebanan</label>
                            <input type="text" name="No. Pembebanan" class="form-control" id="edit_id_spk">
                        </div>

                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Jumlah/Satuan</label>
                            <input type="number" name="jml_satuan" class="form-control" id="edit_jml_satuan">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Nama Barang/Uraian/Ukuran</label>
                            <input type="text" name="nama_barang" class="form-control" id="edit_nama_barang">
                        </div>
                    </div> 
                    <div class="tab_edit">
                        <div class="row">
                            <div class="col">
                                <div class="mb-1">
                                    <label for="" class="text-uppercase form-label">No. Barang</label>
                                    <input type="text" class="form-control" id="edit_no_barang">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-1">
                                    <label for="" class="text-uppercase form-label">No. Gambar</label>
                                    <input type="text" class="form-control" id="edit_no_gambar">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-1">
                                    <label for="" class="text-uppercase form-label">Tanggal Penerima</label>
                                    <input type="text" class="dateselect form-control" id="edit_tgl_penerima">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-1">
                                    <label for="" class="text-uppercase form-label">Nama & Paraf Penerima</label>
                                    <input type="text" class="form-control" id="edit_nama_penerima">
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="tab_edit">
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Berat (Kg)</label>
                            <input type="number" class="form-control" id="edit_berat_barang">
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Tanggal Pelaporan/Pembelian</label>
                            <input type="text" class="dateselect form-control" id="edit_tgl_pembelian">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-1">
                                    <label for="" class="text-uppercase form-label">Tanggal Pelaksana Pesanan</label>
                                    <input type="text" class="dateselect form-control" id="edit_tgl_pelaksana">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-1">
                                    <label for="" class="text-uppercase form-label">Nama & Paraf Pelaksana Pesanan</label>
                                    <input type="text" class="form-control" id="edit_nama_pelaksana">
                                </div>
                            </div>
                        </div>
                        <div class="mb-1">
                            <label for="" class="text-uppercase form-label">Catatan</label>
                            <textarea class="form-control" id="edit_catatan"> </textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                <div class="row w-100">
                        <div class="col text-start">
                            <button type="button" class="btn btn-warning btn-edit-allow">Edit</button>
                        </div>
                        <div class="col text-end">
                            <button type="button" class="btn btn-secondary" id="prevBtn_edit">Previous</button>
                            <button type="button" class="btn btn-info" id="nextBtn_edit">Next</button>
                            <button type="submit" name="submit" class="btn btn-info">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="validation_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" id="validate-form" action="/Order/validateOrder"> <!-- Adjust the action URL to point to the validateOrder function -->
            <div class="modal-content">
                <div class="modal-header bg-polman">
                    <h5 class="modal-title text-white poppins-bold" id="myModalLabel">Validasi</h5>
                </div>

                <div class="modal-body">
                    <p class="text-sm">Validasi diperlukan untuk melakukan ACC pada Project</p>
                        <div class="modal-body">
                            <p class="text-sm">Validasi diperlukan untuk melakukan ACC pada Project,
                                silahkan lampirkan link gambar kerja. Link dapat berupa link google drive.</p>
                            <div class="mb-1">
                                <label for="disetujui" class="text-uppercase form-label">Disetujui</label>
                                <select id="disetujui" class="form-control" name="disetujui">
                                    <option value="">Pilih...</option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                        </div>
                    <!-- Add a hidden input for the 'disetujui' field -->
                    <input type="hidden" name="disetujui" value="1">
                </div>

                <div class="modal-footer">
                    <div class="row w-100">
                        <div class="col text-start">
                            <button type="button" class="btn btn-warning btn-edit-valid">Edit</button>
                        </div>
                        <div class="col text-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" name="submit" class="btn btn-info btn-valid">Simpan</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
                   

<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"
    integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js
"></script>
<script src="/assets/js/myfunction.js"></script>

<script>
  // Creating response and call Sweet alert 

    const input_response = $('.data-input');
    const edit_response = $('.data-edit');
    const valid_response = $('.data-valid');
    const delete_response = $('.data-delete');

    response(input_response, "Data Berhasil Ditambahkan", "Data Gagal Ditambahkan");
    response(edit_response, "Data Berhasil Diedit", "Data Gagal Diedit");
    response(delete_response, "Data Berhasil Dihapus", "Data Gagal Dihapus");
    response(valid_response, "Validasi Berhasil Ditambahkan", "Validasi Gagal Ditambahkan");

    /*Beberapa fungsi harus masuk document ready function 
    karena beberapa akan / baru bisa bekerja ketika halaman
    sudah selesai melakukan proses load , tapi untuk fungsi yang
    bisa tanpa ready function silahkan taro diluar saja, ingat pakai sesuai 
    kaidah dan fungsinya
    
    debugging url silahkan di uncomment jika ingin melihat url yang digunakan
    untuk memanggil method dari controller*/

    $(document).ready(function () {

        /*saat modal akan tampil (event show pada modal berarti saat modal hendak popup)
        jika shown adalah modal saat sudah popup. lakukan fungsi dibawah ini.
        
        modal delete*/

        $('#confirm-delete').on('show.bs.modal', function (e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

            //debugging url
            // $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') +
            //     '</strong>');
        });

        //modal validation
        $('#validation_modal').on('show.bs.modal', function (e) {
            $(this).find('#validate-form').attr('action', $(e.relatedTarget).data('href'));
            if ($(e.relatedTarget).data('valid')) {
                $(".arrowicon").css('display', 'inline-block').attr('href', $(e.relatedTarget).data(
                    'valid'));
                $(".btn-edit-valid").css('display', 'inline-block');
                $('#validation_input').val($(e.relatedTarget).data('valid')).prop('disabled', true)
                    .addClass('border-tb-none');
            } else {
                $(".arrowicon").css('display', 'none');
                $(".btn-edit-valid").css('display', 'none');
                $('#validation_input').val($(e.relatedTarget).data('valid')).prop('disabled', false)
                    .removeClass('border-tb-none');
            }
            //debugging url
            // $('.debug-url-valid').html('Delete URL: <strong>' + $(this).find('#validate-form').attr(
            //         'action') +
            //     '</strong>');
        });

        //button edit pada modal edit dan validasi
        $(".btn-edit-allow").click(function () {
            $('#edit-form').find(':input(:disabled)').prop('disabled', false);
        });

        $(".btn-edit-valid").click(function () {
            $('#validate-form').find(':input(:disabled)').prop('disabled', false);
        });

        /*event hide pada modal adalah saat modal hendak hilang sepenuhnya
        jika hidden saat sudah hilang sepenuhnya.*/
        arguments

        $('#modal_info').on('hide.bs.modal', function (e) {
            $('#edit-form .modal-body').find(':input:not(:disabled)').prop('disabled', true);
        });

        /*passing data from front to backend, kelemahannya kelihatan di inspect Element
        dan dapat dirubah dari situ, untuk lebih aman dan efektif harus memakai AJAX
        tapi kesampingkan AJAX dulu, yang penting beres dulu aja, ini masih cara kasar*/

        $('.btn-edit').on('click', function () {

            // Get data from button edit
            const id_orderlog = $(this).data('id_orderlog');
            const pemesan = $(this).data('pemesan');
            const tgl_created = $(this).data('tgl_created');
            const id_worker = $(this).data('id_worker');
            const batas_waktu = $(this).data('batas_waktu');
            const disetujui = $(this).data('disetujui');
            const id_spk = $(this).data('id_spk');
            const jml_satuan = $(this).data('jml_satuan');
            const nama_barang = $(this).data('nama_barang');
            const no_barang = $(this).data('no_barang');
            const no_gambar = $(this).data('no_gambar');
            const tgl_penerima = $(this).data('tgl_penerima');
            const nama_penerima = $(this).data('nama_penerima');
            const tgl_pembelian = $(this).data('tgl_pembelian');
            const berat_barang = $(this).data('berat_barang');
            const tgl_pesanan = $(this).data('tgl_pesanan');
            const record_order = $(this).data('record_order');
            const nama_pelaksana = $(this).data('nama_pelaksana');
            const catatan = $(this).data('catatan');

            // Set data to Form Edit
            $('#edit_id_orderlog').val(id_orderlog);
            $('#edit_pemesan').val(pemesan);
            $('#edit_tgl_created').val(tgl_created);
            $('#edit_id_worker').val(id_worker);
            $('#edit_batas_waktu').val(batas_waktu);
            $('#edit_disetujui').val(disetujui);
            $('#edit_id_spk').val(id_spk);
            $('#edit_jml_satuan').val(jml_satuan);
            $('#edit_nama_barang').val(nama_barang);
            $('#edit_no_barang').val(no_barang);
            $('#edit_no_gambar').val(no_gambar);
            $('#edit_tgl_penerima').val(tgl_penerima);
            $('#edit_nama_penerima').val(nama_penerima);
            $('#edit_tgl_pembelian').val(tgl_pembelian);
            $('#edit_berat_barang').val(berat_barang);
            $('#edit_tgl_pesanan').val(tgl_pesanan);
            $('#edit_record_order').val(record_order);
            $('#edit_nama_pelaksana').val(nama_pelaksana);
            $('#edit_catatan').val(catatan);

            // Call Modal Edit
            $('#modal_info').modal('show');
        });

        $(".btn-valid-status").each(function () {
            let arrlength = $(this).data('valid').length;
            if(arrlength > 0) {
                $(this).find(".status_validate").html("TERVALIDASI").addClass('bg-gradient-success');
                
            } else {
                $(this).find(".status_validate").html("BELUM ADA").addClass('bg-gradient-secondary');
            }
        });
        
    });

    /*ini fungsi buat modal input sama edit yang input formnya banyak bgt 
    karena jelek kalau manjang dan perlu scroll scroll, jadi kita buat Multi step 
    aja, silahkan di amati struktur htmlnya sama fungsi js dibawah ini
    
    MULTI STEP INPUT MODAL*/

    let currentInputTab = {
        nilai: 0
    };

    const tabInput = $(".tab")
    const tabInputLength = tabInput.length - 1;
    const prevBtnInput = $("#prevBtn");
    const nextBtnInput = $("#nextBtn");
    const forminput = $("#tambahOrder");
    const modalinput = "#createModal";

    showTab(currentInputTab, tabInput, tabInputLength, prevBtnInput, nextBtnInput);

    $('body').on('click', "#nextBtn", function () {
        nextPrev(1, tabInput, tabInputLength, currentInputTab, forminput, modalinput, prevBtnInput,
            nextBtnInput);
    });

    $('body').on('click', "#prevBtn", function () {
        nextPrev(-1, tabInput, tabInputLength, currentInputTab, forminput, modalinput, prevBtnInput,
            nextBtnInput);
    });

    //MULTI STEP EDIT MODAL
    let currentEditTab = {
        nilai: 0
    };

    const tabEdit = $(".tab_edit")
    const tabEditLength = tabEdit.length - 1;
    const prevBtnEdit = $("#prevBtn_edit");
    const nextBtnEdit = $("#nextBtn_edit");
    const formEdit = $("#edit-form");
    const modalEdit = "#modal_info";

    showTab(currentEditTab, tabEdit, tabEditLength, prevBtnEdit, nextBtnEdit);

    $('body').on('click', "#nextBtn_edit", function () {
        nextPrev(1, tabEdit, tabEditLength, currentEditTab, formEdit, modalEdit, prevBtnEdit, nextBtnEdit);
    });

    $('body').on('click', "#prevBtn_edit", function () {
        nextPrev(-1, tabEdit, tabEditLength, currentEditTab, formEdit, modalEdit, prevBtnEdit, nextBtnEdit);
    });
</script>
<?=$this->endSection();?>