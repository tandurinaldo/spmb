@extends('layouts.mainUser')

@section('navbar')

    <body class="bg-light">
        <div class="container">
            <div class="pt-5 text-center">
                <img class="d-block mx-auto mb-4" src="/img/logo.jpeg" alt="daftar" width="80" height="65">
                <h2>
                    Register form PMB 2024/2025
                </h2>
                <p class="lead">Daftarkan diri Anda dengan memasukan data berikut ini ( Yang bertanda <sup
                        class="text-danger">*</sup> harus diisi) :</p>
            </div>
            <div class="row">
                <div class="col-md-12 order-md-1">
                    <!--<h4 class="mb-3">Billing address</h4>-->
                    <form name="regfrm" id="regfrm" method="post" class="needs-validation" novalidate>
                        <input type="hidden" name="do" id="do" value="regist" />
                        <input type="hidden" name="sttsfrm" id="sttsfrm" value="" />
                        <input type="hidden" name="sttsfrm" id="sttsfrm" value="" />
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="nama_lengkap" id="title_nama_lengkap">Nama Lengkap </label> <sup
                                    class="text-danger">*</sup>
                                <input type="text" class="form-control alphabet" name="nama_lengkap" id="nama_lengkap"
                                    value="" autocomplete="off" placeholder="Nama Lengkap" required>
                                <div class="invalid-feedback" id="label_nama_lengkap">
                                    Isi Nama Lengkap </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="col-md-12 mb-1 pb-1 border-bottom border-dark">Alamat</h5>
                            <div class="col-md-4 mb-3">
                                <label for="negara" id="negara">Kewarganegaraan</label> <sup
                                    class="text-danger">*</sup>
                                <select class="custom-select d-block w-100 select2" name="negara" id="negara" required>
                                    <option value="">Pilih Negara</option>
                                    @foreach ($negara as $negara)
                                        <option value="{{ $negara->id }}">{{ $negara->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback" id="label_kode_negara">
                                    Pilih Negara </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="kode_propinsi" id="title_kode_propinsi">Propinsi</label> <sup
                                    class="text-danger">*</sup>
                                <select class="custom-select d-block w-100 select2" name="kode_propinsi" id="kode_propinsi"
                                    required>
                                    <option>Pilih Provinsi</option>
                                    @foreach ($provinces as $provinsi)
                                        <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback" id="label_kode_propinsi">
                                    Pilih Propinsi </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="kode_kota" id="title_kode_kota">Kota</label> <sup class="text-danger">*</sup>
                                <select class="custom-select d-block w-100 select2" name="kode_kota" id="kode_kota"
                                    required>

                                </select>
                                <div class="invalid-feedback" id="label_kode_kota">
                                    Pilih Kota </div>
                            </div>
                            {{-- <div class="col-md-4 mb-3">
                                <label for="kode_kecamatan" id="title_kode_kecamatan">kecamatan</label> <sup class="text-danger">*</sup>
                                <select class="custom-select d-block w-100 select2" name="kode_kecamatan" id="kode_kecamatan"
                                    required>
                                    <option value="">Pilih Kecamatan</option>
                                    @foreach ($disctrict as $kecamtan)
                                        <option>{{ $kecamatan->name }}</option>
                                    @endforeach 
                                </select>
                                <div class="invalid-feedback" id="label_kode_kecamatan">
                                    Pilih Kecamatan </div>
                            </div> --}}
                            <div class="col-md-10 mb-3">
                                <label for="alamat" id="title_alamat">Jalan</label> <sup class="text-danger">*</sup>
                                <input type="text" class="form-control alphanum" name="alamat" id="alamat"
                                    value="" autocomplete="off" placeholder="Jalan" required>
                                <div class="invalid-feedback" id="label_alamat">
                                    Isi Alamat
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="text" class="form-control postal_code" name="kode_pos" id="kode_pos"
                                    value="" autocomplete="off" placeholder="Kode Pos">
                                <div class="invalid-feedback" id="label_kode_pos">
                                    Isi Kode Pos </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="col-md-12 mb-1 pb-1 border-bottom border-dark">Kontak</h5>
                            <div class="col-md-4 mb-3">
                                <label for="email" id="title_email">Email</label> <sup class="text-danger">*</sup>
                                <input type="email" class="form-control email" name="email" id="email"
                                    value="" autocomplete="off" placeholder="Email" required>
                                <div class="invalid-feedback" id="label_email">
                                    Isi Email
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="whatsapp">Whatsapp</label> <sup class="text-danger">*</sup>
                                <input type="text" class="form-control mobile" name="whatsapp" id="whatsapp"
                                    value="62" autocomplete="off" placeholder="Whatsapp">
                                <div class="invalid-feedback" id="label_whatsapp">
                                    Isi Whatsapp
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="col-md-12 mb-1 pb-1 border-bottom border-dark">Sekolah</h5>
                            <div class="col-md-6 mb-3">
                                <label for="lulusan" id="lulusan">Pendidikan Terakhir / Lulusan : </label> <sup
                                    class="text-required">*</sup> &nbsp;&nbsp;
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lulusan" id="lulusan1"
                                            value="SMU">
                                        <label class="form-check-label" for="lulusan1">SMA</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lulusan" id="lulusan2"
                                            value="SMK">
                                        <label class="form-check-label" for="lulusan2">SMK</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lulusan" id="lulusan3"
                                            value="MA">
                                        <label class="form-check-label" for="lulusan3">MA</label>
                                    </div>
                                    <div class="invalid-feedback" id="label_lulusan"></div>
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="tahun_lulus">Tahun Lulus <sup class="text-required">*</sup></label>
                                <select name="tahun_lulus" id="tahun_lulus" class="custom-select d-block w-100 select2"
                                    data-error="Pilih Tahun Lulus" required>
                                    <option value="">...</option>
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                </select>
                                <div class="help-block with-errors hlp-tahun_lulus"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="negara" id="negara">Kewarganegaraan</label> <sup
                                    class="text-danger">*</sup>
                                <select class="custom-select d-block w-100 select2" name="negara" id="negara"
                                    required>
                                    <option value="">...</option>
                                    <option value="1">WNI(Warga Negara Indonesia)</option>
                                    <option value="2">WNA(Warga Negara Asing)</option>
                                </select>
                                <div class="invalid-feedback" id="label_kode_negara">
                                    Pilih Negara </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="skul_kode_proinsi" id="title_skul_kode_propinsi">Provinsi</label> <sup
                                    class="text-danger">*</sup>
                                <select class="custom-select d-block w-100 select2" name="skul_kode_propinsi"
                                    id="skul_kode_propinsi" required>
                                    <option>Pilih Provinsi</option>
                                    @foreach ($provinces as $provinsi)
                                        <option>{{ $provinsi->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback" id="label_skul_kode_propinsi">
                                    Pilih Provinsi Sekolah
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="skul_kode_kota" id="title_skul_kode_kota">Kota</label> <sup
                                    class="text-danger">*</sup>
                                <select class="custom-select d-block w-100 select2" name="skul_kode_kota"
                                    id="skul_kode_kota" required>

                                </select>
                                <div class="invalid-feedback" id="label_skul_kode_kota">
                                    Pilih Kota Sekolah
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="text" id="sekolah">Nama Sekolah</label> <sup
                                    class="text-danger">*</sup>
                                <div class="col-md-2 mb-3">
                                    <select class="custom-select d-block w-100 select2" name="skul_kode_kota"
                                        id="skul_kode_kota" required>
                                        <option value="179" selected="selected">SMA</option>
                                        <option value="166">SMK</option>
                                        <option value="184">MA</option>
                                        <option value="190">MAK</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="sekolah" class="form-control" name="sekolah" id="sekolah"
                                        value="" autocomplete="off" placeholder="nama sekolah" required>
                                    <div class="invalid-feedback" id="label_sekolah">
                                        Nama sekolah
                                    </div>
                                    <div class="invalid-feedback" id="label_kode_sekolah">
                                        Pilih Nama Sekolah
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="text" id="jurusan">Jurusan / Peminatan / Prodi di sekolah</label> <sup
                                    class="text-danger">*</sup>
                                <input type="jurusan" class="form-control" name="jurusan" id="jurusan" value=""
                                    autocomplete="off" placeholder="jurusan" required>
                                <div class="invalid-feedback" id="label_jurusan">
                                    Jurusan / Peminatan / Prodi di sekolah
                                </div>
                                <div class="invalid-feedback" id="label_kode_sekolah">
                                    Jurusan / Peminatan / Prodi di sekolah
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lulusan" id="lulusan">Pendidikan Terakhir / Lulusan : </label> <sup
                                    class="text-required">(bagi yang Transfer/Alih jenjang)*</sup> &nbsp;&nbsp;
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lulusan" id="lulusan4"
                                            value="D3">
                                        <label class="form-check-label" for="lulusan4">D3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lulusan" id="lulusan6"
                                            value="S1">
                                        <label class="form-check-label" for="lulusan6">S1</label>
                                    </div>
                                    <div class="invalid-feedback" id="label_lulusan"></div>
                                </div>
                            </div>
                            <div class="col-md-7 mb-3">
                                <input type="text" class="form-control alphanum" name="sekolah_blank"
                                    id="sekolah_blank" value="" autocomplete="off"
                                    placeholder="Isi Nama Sekolah disini jika tidak ada pada pilihan">
                                <div class="invalid-feedback" id="label_sekolah_blank">
                                    Isi Nama Sekolah disini jika tidak ada pada pilihan </div>
                            </div>
                            <div class="col-md-5 mb-3">
                                <input type="text" class="form-control" name="prodi_blank" id="prodi_blank"
                                    value="" autocomplete="off"
                                    placeholder="Isi Jurusan / Peminatan  disini jika Tidak ada pada pilihan">
                                <div class="invalid-feedback alphabet" id="label_prodi_blank">
                                    Isi Jurusan / Peminatan disini jika tidak ada pada pilihan
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="col-md-12 mb-1 pb-1 border-bottom border-dark">Program Studi</h5>
                            <div class="col-md-4 mb-3">
                                <label for="pilihan1" id="title_pilihan1">Pilihan 1</label> <sup
                                    class="text-danger">*</sup>
                                <select class="custom-select d-block w-100 select2" name="pilihan1" id="pilihan1"
                                    required>
                                    <option value="">Pilih Prodi</option>
                                    <option value="0.1">S1 Akuntansi</option>
                                    <option value="0.2">S1 Manajemen</option>
                                    <option value="0.3">S1 Pendidikan Bahasa Mandarin</option>
                                    <option value="0.4">S1 Sastra Inggris</option>
                                    <option value="0.5">S1 Arsitektur</option>
                                    <option value="0.6">S1 Teknik Elektro</option>
                                    <option value="0.7">S1 Teknik Informatika</option>
                                    <option value="0.8">S1 Teknik Sipil</option>
                                </select>
                                <div class="invalid-feedback" id="label_pilihan1">
                                    Pilih Program Studi Pilihan 1
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="kelas" id="kelas">Kelas pagi/sore(Kelas Karyawan)</label> <sup
                                    class="text-danger">*</sup>
                                <select class="custom-select d-block w-100 select2" name="kelas" id="kelas"
                                    required>
                                    <option value="">Kelas pagi/sore(Kelas Karyawan)</option>
                                    <option value="0.1">Pagi</option>
                                    <option value="0.2">Sore(Kelas Karyawan)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="col-md-12 mb-1 pb-1 border-bottom border-dark">Info PMB dari <sup
                                    class="text-required">*</sup></h5>
                            <div class="col-md-12 mb-3 mt-2">
                                <div class="col-md-12 mb-1">
                                    <h6>Online</h6>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="info_pmb_dari"
                                            id="info_pmb_dari1" value="1">
                                        <label class="form-check-label" for="info_pmb_dari">Pop Up Ads Aplikasi
                                            Smartphone</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="info_pmb_dari"
                                            id="info_pmb_dari22" value="22">
                                        <label class="form-check-label" for="info_pmb_dari">Influencer</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="info_pmb_dari"
                                            id="info_pmb_dari23" value="23">
                                        <label class="form-check-label" for="info_pmb_dari">E-Brosur</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="info_pmb_dari"
                                            id="info_pmb_dari2" value="2">
                                        <label class="form-check-label" for="info_pmb_dari">Instagram</label>
                                        <input type="hidden" name="status_info_pmb_input2" id="status_info_pmb_input2"
                                            value="Y" />
                                        <input type="hidden" name="nama_info_pmb_input2" id="nama_info_pmb_input2"
                                            value="Instagram" />
                                        <label for="info_pmb_dari2" id="info_pmb_dari2"> </label>
                                        &nbsp;&nbsp;<input type="text" class="form-control alphabet2"
                                            name="info_pmb_input2" id="info_pmb_input2" value=""
                                            autocomplete="off" placeholder="Instagram" required>
                                        <div class="invalid-feedback" id="label_info_pmb_input2">
                                            Isi Instagram </div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="info_pmb_dari"
                                            id="info_pmb_dari3" value="3">
                                        <label class="form-check-label" for="info_pmb_dari">Facebook</label>

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="info_pmb_dari"
                                            id="info_pmb_dari4" value="4">
                                        <label class="form-check-label" for="info_pmb_dari">Youtube</label>

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="info_pmb_dari"
                                            id="info_pmb_dari5" value="5">
                                        <label class="form-check-label" for="info_pmb_dari">Google</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="info_pmb_dari"
                                            id="info_pmb_dari6" value="6">
                                        <label class="form-check-label" for="info_pmb_dari">Twitter</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="info_pmb_dari"
                                            id="info_pmb_dari20" value="20">
                                        <label class="form-check-label" for="info_pmb_dari">Tiktok</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="info_pmb_dari"
                                            id="info_pmb_dari18" value="18">
                                        <label class="form-check-label" for="info_pmb_dari">E-Brosur</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="info_pmb_dari"
                                            id="info_pmb_dari19" value="19">
                                        <label class="form-check-label" for="info_pmb_dari">Lainnya</label>
                                        <input type="hidden" name="status_info_pmb_input19" id="status_info_pmb_input19"
                                            value="Y" />
                                        <input type="hidden" name="nama_info_pmb_input19" id="nama_info_pmb_input19"
                                            value="Lainnya" />
                                        <label for="info_pmb_dari19" id="info_pmb_dari19"> </label>
                                        &nbsp;&nbsp;<input type="text" class="form-control alphabet2"
                                            name="info_pmb_input19" id="info_pmb_input19" value=""
                                            autocomplete="off" placeholder="Lainnya" required>
                                        <div class="invalid-feedback" id="label_info_pmb_input19">
                                            Isi Lainnya </div>
                                        <div class="col-md-12 mb-3 mt-2">
                                            <div class="col-md-12 mb-1">
                                                <h6>Offline</h6>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="info_pmb_dari"
                                                        id="info_pmb_dari11" value="11">
                                                    <label class="form-check-label" for="info_pmb_dari">Baligho</label>

                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="info_pmb_dari"
                                                        id="info_pmb_dari24" value="24">
                                                    <label class="form-check-label" for="info_pmb_dari">Media
                                                        Cetak/Fasilitas
                                                        Umum</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="info_pmb_dari"
                                                        id="info_pmb_dari12" value="12">
                                                    <label class="form-check-label" for="info_pmb_dari">Koran</label>
                                                    <input type="hidden" name="status_info_pmb_input12"
                                                        id="status_info_pmb_input12" value="Y" />
                                                    <input type="hidden" name="nama_info_pmb_input12"
                                                        id="nama_info_pmb_input12" value="Koran" />
                                                    <label for="info_pmb_dari12" id="info_pmb_dari12"> </label>
                                                    &nbsp;&nbsp;<input type="text" class="form-control alphabet2"
                                                        name="info_pmb_input12" id="info_pmb_input12" value=""
                                                        autocomplete="off" placeholder="Koran" required>
                                                    <div class="invalid-feedback" id="label_info_pmb_input12">
                                                        Isi Koran </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="info_pmb_dari"
                                                        id="info_pmb_dari13" value="13">
                                                    <label class="form-check-label" for="info_pmb_dari">Brosur</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="info_pmb_dari"
                                                        id="info_pmb_dari14" value="14">
                                                    <label class="form-check-label" for="info_pmb_dari">Flyer</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="info_pmb_dari"
                                                        id="info_pmb_dari15" value="15">
                                                    <label class="form-check-label" for="info_pmb_dari">Alumni / Kakak
                                                        Kelas</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="info_pmb_dari"
                                                        id="info_pmb_dari16" value="16">
                                                    <label class="form-check-label" for="info_pmb_dari">Teman/ Saudara/
                                                        Orang
                                                        tua</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="info_pmb_dari"
                                                        id="info_pmb_dari17" value="17">
                                                    <label class="form-check-label" for="info_pmb_dari">Sekolah</label>
                                                </div>
                                            </div>
                                        </div>
                                        <label for="info_pmb_dari" id="info_pmb_dari"> </label>
                                        <div class="invalid-feedback" id="label_info_pmb_dari"></div>
                                    </div>
                                    <div class="row">
                                        <h5 class="col-md-12 mb-1 pb-1 border-bottom border-dark">Referensi Dari / Nama
                                            Petugas <sup>(
                                                tidak wajib di isi )</sup></h5>
                                        <div class="col-md-8 mb-3">
                                            <label for="perekomendasi" id="perekomendasi">Nama Referensi /
                                                Petugas</label>
                                            <select name="perekomendasi" id="perekomendasi"
                                                class="select2 form-control required"
                                                data-error="Referensi Dari / Nama Petugas" required>
                                                <option value="">...</option>
                                                <option value="15">AGUS SEPTIAN HERYANTO</option>
                                                <option value="5">ASNA MANZILLAH</option>
                                                <option value="13">ATRIANI PRAMESTI PRATIWI</option>
                                                <option value="3">AYU PUTRI PUSPITASARI</option>
                                                <option value="17">LUTFI TRIWIJAYANTI</option>
                                                <option value="7">MAULIDA PUTRI</option>
                                                <option value="16">RAISSA SALSABILA</option>
                                                <option value="2">RANI APRILIANI ADITYA</option>
                                                <option value="14">SHEVIRA ALSAHRA SAHIFA</option>
                                                <option value="11">TEAM REG B</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7 mb-3">
                                            <label for="kelas" id="kelas">Kelas pagi/sore(Kelas Karyawan)</label>
                                            <sup class="text-danger">*</sup>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="inputGroupFile04"
                                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                <button class="btn btn-outline-secondary" type="button"
                                                    id="inputGroupFileAddon04">Button</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-primary" type="button">Submit Register</button>
                                    </div>
                                    <!--<div class="alert alert-danger" role="alert" id="rest_reg_err" style="display:none;"></div>-->
                                    <div class="alert alert-success" role="alert" id="rest_reg_succ"
                                        style="display:none;">
                                    </div>
                                    <p class="mt-5 mb-3 text-center"><strong>Hubungi Kami</strong><br /> <strong>Media &
                                            Communication
                                            Center
                                            Universitas Widyakartika</strong><br />Jl. Sutorejo Prima Utara II No.1,
                                        Kalisari, Kec.
                                        Mulyorejo, Surabaya,<br /> Jawa Timur ,
                                        Indonesia, 60112<br />WA :&nbsp;<a
                                            href="https://api.whatsapp.com/send/?phone=6281232770503&amp;text=Saya+Ingin+info+PMB+Universitas+widyakartika&amp;app_absent=0">081232770503</a>
                                    </p>
                    </form>
                    <div class="col-md-12 mb-3 alert alert-success" role="alert" id="info_result"
                        style="display:none;">
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <footer class="my-2 pt-2 text-muted text-center text-small">
                <p class="mb-1">&copy;Universitas Widyakartika</p>
            </footer>
        </div>
    </body>
@endsection
