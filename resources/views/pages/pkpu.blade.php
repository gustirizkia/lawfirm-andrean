@extends('layouts.front')

@section('title')
PKPU
@endsection

@push('addStyle')
    <style>
        .accordion-button{
            background-color: #F7F9FB !important;
            font-weight: bold;
        }
        .accordion-button:not(.collapsed){
            box-shadow: unset;
        }

        .accordion-item {
            border: unset;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <h3 class="text-center mt-md-4">
            INFORMASI <br>
            TENTANG PKPU & KEPAILITAN
        </h3>
        <p>
            <br>
            Informasi yang diberikan dalam situs sini adalah bersifat umum dan tidak ada satupun kalimat dalam situs ini yang dapat
            diartikan sebagai saran hukum dan saran lainnya. Informasi ini juga tidak ditujukan kepada kalangan atau pihak-pihak
            tertentu. Artikel ini ditujukan bagi pengunjung situs M. Andrean Saefudin & Co yang ingin memahami bagaimana proses Kepailitan dan PKPU
            berpengaruh pada hak-hak kreditor. Informasi ini bukan pendapat resmi dari M. Andrean Saefudin & Co, dan hanya dimaksudkan sebagai
            pengetahuan umum. Kreditor yang ingin menjaga hak-haknya dalam proses Kepailitan dan PKPU disarankan untuk menghubungi
            advokat/pengacara. <br> <br>
            
            M. Andrean Saefudin & Co tidak bertanggung jawab atas kesalahan dan atau kelalaian pada informasi yang terkandung dan disajikan di situs
            ini. Kepercayaan pada informasi yang dicantumkan dalam situs ini sepenuhnya tanggung jawab dari pengguna dan pengguna
            dengan ini membebaskan M. Andrean Saefudin & Co dari segala tuntutan dikemudian hari atas kerugian yang timbul dari penggunaan informasi
            pada situs ini.
        </p>

        <div class="my-5">
            <hr>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <h2>
                    Pengertian, Istilah dan Stakeholder dalam PKPU atau Kepailitan
                </h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                1. Kepailitan
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Kepailitan adalah sita umum atas semua kekayaan Debitor Pailit yang pengurusan dan pemberesannya dilakukan oleh Kurator
                                di bawah pengawasan Hakim Pengawas sebagaimana diatur dalam UU K-PKPU.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. PKPU
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Penundaan Kewajiban Pembayaran Utang (PKPU) adalah suatu masa yang diberikan oleh undang - undang melalui putusan hakim
                                Pengadilan Niaga. Dalam masa tersebut Debitor dan Kreditor diberikan kesempatan untuk bermusyarah mengenai cara
                                penyelesaian atau restrukturisasi seluruh atau sebagian utang debitor melalui penawaran rencana perdamaian.
                                
                                PKPU terdiri dari PKPU Sementara yang berlaku selama 45 hari sejak putusan putusan PKPU Sementara di ucapkan, dan PKPU
                                tetap berlaku paling lama 270 hari setelah putusan putusan PKPU Sementara di ucapkan.
                                
                                Pada masa ini, Kreditor dilarang memaksa debitor untuk membayar utangnya.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. Utang
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Utang adalah kewajiban yang dinyatakan atau dapat dinyatakan dalam jumlah uang baik dalam mata uang Indonesia maupun
                                mata uang asing, baik secara langsung maupun yang akan timbul di kemudian hari atau kontinjen, yang timbul karena
                                perjanjian atau undang-undang dan yang wajib dipenuhi oleh Debitor dan bila tidak dipenuhi memberi hak kepada Kreditor
                                untuk mendapat pemenuhannya dari harta kekayaan Debitor. <strong>(Ps 1 Ayat (6) UU K-PKPU)</strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                4. Debitor
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                orang yang mempunyai utang karena perjanjian atau undang - undang yang pelunasannya dapat ditagih di muka pengadilan.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                5. Kreditor dan Kedudukan
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                orang yang mempunyai piutang karena perjanjian atau Undang-Undang yang penyelesaiannya dapat ditagih di muka pengadilan.
                                
                                Kedudukan Kreditor :
                                <ul>
                                    <li>Separatis <br>
                                    Pemegang Jaminan Kebendaan berdasarkan Ps 1134 KUH Perdata seperti gadai dan hipotik serta jaminan-jaminan kebendaan
                                    lainnya yaitu, Fidusia, Hak Tanggungan, Hipotek Kapal, Resi Gudang.</li>
                                    <li>
                                        Preferen <br>
                                        Kreditor yang mempunyai hak mendahului karena sifat piutangnya diistimewakan terhadap benda tertentu (Ps 1139 KUH
                                        bergerak dan tak bergerak, Ps 1149 KUH Perdata).
                                    </li>
                                    <li>
                                        Konkuren <br>
                                        Kreditur yang tidak termasuk dalam Kreditor Separatis dan Kreditor Preferen sebagaimana ditentukan berdasarkan Ps 1131
                                        jo. Ps 1132 KUH Perdata. Dalam pelunasan piutang, kreditur konkuren mendapatkan pelunasan yang paling terakhir setelah
                                        kreditur preferen dan kreditur separatis terlunasi piutangnya.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                6. Kurator
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Balai Harta Peninggalan atau Perseorangan yang diangkat oleh Pengadilan untuk mengurus dan membereskan <strong>HARTA DEBITOR
                                PAILIT</strong> di bawah pengawasan Hakim Pengawas sesuai UU K-PKPU.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                7. Pengurus PKPU
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Pengurus PKPU adalah Advokat atau Akuntan Publik yang terdaftar di Kementerian Hukum dan Hak Asasi Manusia (“MenkumHAM”)
                                sebagai kurator dan pengurus. Untuk menjadi seorang Pengurus dan Kurator, seorang advokat harus melalui pendidikan dan
                                telah lulus ujian kurator dan pengurus yang diadakan oleh asosiasi kurator dan pengurus bersama-sama dengan MenkumHAM.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                8. Hakim Pengawas
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Hakim yang ditunjuk oleh Pengadilan dalam putusan pailit atau putusan penundaan kewajiban pembayaran utang, untuk
                                mengawasi proses Kepailitan atau PKPU.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                9. Asal/Rencana Perdamaian
                            </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Usul/Rencana Perdamaian dapat diajukan dalam perkara kepailitan maupun perkara PKPU.
                                
                                <ul class="mt-4">
                                    <li>
                                        Usul/Rencana Perdamaian <strong>dalam PKPU</strong> merupakan rancangan kesepakatan atau umumnya disebut proposal perdamaian antara
                                        debitor dan para kreditornya mengenai penyesuaian jumlah piutang (yang diajukan Kreditor) dengan jumlah utang yang
                                        diajukan debitor, dalam rangka menghindari pailit dan likuidasi.
                                    </li>
                                    <li>
                                        Usul/Rencana Perdamaian <strong>dalam PKPU</strong> harus disetujui oleh para kreditor konkuren dan Separatis dalam rapat kreditor, dan
                                        untuk beberapa kriteria harus disetujui oleh Pengadilan. Jika disetujui, maka akan mengikat seluruh Kreditor. Jika
                                        Kreditor atau Pengadilan menolak rencana perdamaian, maka Debitor akan Pailit dan dilikuidasi.
                                    </li>
                                    <li>
                                        Berbeda dengan PKPU, <strong>Usulan/Rencana perdamaian dalam Kepailitan</strong> harus disetujui oleh para kreditor konkuren dalam rapat
                                        kreditor. Tujuan dari Usul/Rencana Perdamaian agar Debitornya dapat melunasi utang kepada para Kreditor (sesuai
                                        kesepakatan), sehingga proses Kepailitan lebih cepat diakhiri dan Debitor dapat melanjutkan kegiatan usaha.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2>
                    Informasi Umum Bagi Kreditor Dalam PKPU atau Kepailitan
                </h2>
                <div class="accordion2" id="accordion2Example">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"
                                aria-expanded="false" aria-controls="collapse1">
                                1. Terjadinya PKPU
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion2Example">
                            <div class="accordion-body">
                                Permohonan PKPU dapat diajukan atas inisiatif Debitor ataupun Kreditor, atas pertimbangan Debitor tidak dapat atau
                                memperkirakan tidak dapat membayar utangnya yang sudah jatuh waktu dan dapat ditagih. Jika Pengadilan menganggap
                                Permohonan PKPU layak dikabulkan, maka Pengadilan akan menunjuk seorang Hakim Pengawas dan seorang atau beberapa orang
                                Tim Pengurus.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2"
                                aria-expanded="false" aria-controls="collapse2">
                                2. Pengurus Harta Debitor dalam PKPU
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion2Example">
                            <div class="accordion-body">
                                Debitor tidak dapat melakukan tindakan pengurusan atau kepemilikan terhadap seluruh atau sebagian hartanya, kecuali
                                dengan persetujuan Pengurus PKPU. Kewajiban Debitor yang dilakukan setelah PKPU dan tanpa persetujuan dari Pengurus
                                PKPU, hanya dapat dibebankan kepada Harta Debitor sejauh menguntungkan Harta Debitor (vide: Ps 240 (1) dan (3) UU
                                K-PKPU)
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3"
                                aria-expanded="false" aria-controls="collapse3">
                                3. Hak Kreditor dalam PKPU
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion2Example">
                            <div class="accordion-body">
                                Kepentingan hukum kreditor dilindungi UU K-PKPU, hak Kreditor antara lain:
                                <ul>
                                    <li>
                                        Mendaftarkan tagihan;
                                    </li>
                                    <li>
                                        Mengikuti agenda rapat-rapat;
                                    </li>
                                    <li>
                                        Melakukan pemungutan suara/voting.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4-2"
                                aria-expanded="false" aria-controls="collapse4-2">
                                4. Hak Kreditor dalam PKPU
                            </button>
                        </h2>
                        <div id="collapse4-2" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion2Example">
                            <div class="accordion-body">
                                Pada tahap awal, Pengadilan dapat menunjuk Panitia Kreditor Sementara. Setelahnya, para kreditor dapat meminta
                                penunjukan kreditor lain atau berbeda untuk duduk dalam kepanitiaan. Panitia kreditor memberikan saran kepada kurator
                                atau pengurus dalam menjalankan proses kepailitan atau PKPU. <br>
                                
                                Pengangkatan Panitia Kreditor dilakukan apabila utang bersifat rumit atau banyak Kreditor, atau diminta oleh Kreditor
                                yang mewakili paling sedikit 1/2 bagian dari seluruh tagihan yang diakui.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5-2"
                                aria-expanded="false" aria-controls="collapse5-2">
                                5. Rapat Kreditor
                            </button>
                        </h2>
                        <div id="collapse5-2" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion2Example">
                            <div class="accordion-body">
                                Rapat Kreditor merupakan forum resmi bagi para Kreditor untuk memutuskan berbagai hal yang berkaitan dengan kepailitan
                                atau PKPU yang terjadi. Rapat tersebut dipimpin oleh seorang hakim pengawas.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6-2"
                                aria-expanded="false" aria-controls="collapse6-2">
                                6. Rapat Verifikasi atau Pencocokan Piutang
                            </button>
                        </h2>
                        <div id="collapse6-2" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion2Example">
                            <div class="accordion-body">
                                Ini adalah salah satu tipe dari rapat kreditor. Rapat verifikasi atau rapat pencocokan piutang diadakan untuk menentukan
                                status dari piutang masing-masing Kreditor terhadap debitornya. Rapat ini juga dipimpin oleh seorang Hakim Pengawas.
                                Panggilan untuk rapat akan dikirimkan langsung kepada seluruh kreditor dan juga diterbitkan dalam 2 (dua) surat kabar.
                                
                                Hal - hal yang harus diperhatikan saat rapat Pencocokan Piutang:

                                <ul class="mt-4">
                                    <li>
                                        Persyaratan formal pengajuan tagihan harus terpenuhi;
                                    </li>
                                    <li>
                                        Keabsahan alas hak atau dasar tagihan (Perjanjian);
                                    </li>
                                    <li>
                                        Telah dipenuhi hak dan/atau kewajiban oleh para pihak sebagai pelaksanaan dari Perjanjian;
                                    </li>
                                    <li>
                                        Sifat piutang apakah dijamin dengan hak kebendaan atau tidak;
                                    </li>
                                    <li>
                                        Keterangan (termasuk dokumen) maupun bantahan Debitor mengenai Piutang tersebut (jika ada).
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7-2"
                                aria-expanded="false" aria-controls="collapse7-2">
                                7. Pembahasan pada Rapat Kreditor
                            </button>
                        </h2>
                        <div id="collapse7-2" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion2Example">
                            <div class="accordion-body">
                                Sebagai tambahan dari Rapat Verifikasi, seluruh Kreditor dapat dipangil untuk bertemu dan mendiskusikan hal-hal berikut
                                ini, antara lain:

                                <ul class="mt-4">
                                    <li>
                                        Usul untuk mengajukan perpanjangan waktu PKPU menjadi 270 hari;
                                    </li>
                                    <li>
                                        Usul untuk pemecatan atau penggantian kurator;
                                    </li>
                                    <li>
                                        Usul untuk pembubaran atau penggantian panitia kreditor sementara (yang telah ditunjuk oleh Pengadilan sebelumnya) dan
                                        menggantinya dengan panitia kreditor tetap.
                                    </li>
                                    <li>
                                        Usul untuk menyetujui rencana perdamaian;
                                    </li>
                                    <li>
                                        Cara untuk menjual harta atau aset debitor dalam perkara kepailitan.
                                    </li>
                                </ul>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8-2"
                                aria-expanded="false" aria-controls="collapse8-2">
                                8. Pengajuan dan Pengakuan Piutang
                            </button>
                        </h2>
                        <div id="collapse8-2" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion2Example">
                            <div class="accordion-body">
                                Piutang harus diajukan kepada Pengurus dengan menyerahkan surat tagihan atau bukti tertulis lainnya yang menyebutkan
                                sifat dan jumlah tagihan, disertai bukti atau salinan bukti tersebut. Atas pengajuan piutang, Kreditor berhak meminta
                                tanda terima dari Pengurus.
                                
                                Selanjutnya Pengurus membuat daftar piutang yang memuat nama, tempat tinggal kreditur, jumlah piutang masing-masing,
                                penjelasan piutang, dan apakah piutang diakui atau dibantah oleh Pengurus, dan Pengurus wajib menyediakan salinan Daftar
                                Piutang di Kepaniteraan Pengadilan. Penyediaan salinan daftar tersebut disediakan secara cuma cuma. (vide: Ps 276 UU
                                K-PKPU)

                                <ol class="mt-4">
                                    <li>
                                        Piutang yang saat penagihannya belum jelas atau yang memberikan hak untuk memperoleh pembayaran secara berkala, wajib
                                        dimasukkan dalam daftar untuk nilai yang berlaku pada tanggal diucapkannya putusan penundaan kewajiban pembayaran utang
                                        sementara.
                                    </li>
                                    <li>
                                        Semua piutang yang dapat ditagih dalam jangka waktu 1 (satu) tahun sejak putusan penundaan kewajiban pembayaran utang
                                        diucapkan, wajib diperlakukan sebagai piutang yang dapat ditagih pada tanggal tersebut.
                                    </li>
                                    <li>
                                        Semua piutang yang dapat ditagih setelah lewat 1 (satu) tahun sejak putusan penundaan kewajiban pembayaran utang
                                        diucapkan, wajib dimasukkan dalam daftar untuk nilai yang berlaku 1 (satu) tahun setelah putusan penundaan kewajiban
                                        pembayaran utang tersebut diucapkan.
                                    </li>
                                    <li>
                                        Dalam melakukan perhitungan nilai piutang sebagaimana dimaksud pada ayat (2) dan ayat (3), wajib diperhatikan:
                                        <ul>
                                            <li>waktu dan cara pembayaran angsuran;</li>
                                            <li>keuntungan yang mungkin diperoleh; dan</li>
                                            <li>besarnya bunga apabila diperjanjikan.
                                            (vide: PS 275 UU K-PKPU)</li>
                                        </ul>
                                    </li>
                                </ol>   
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9-2"
                                aria-expanded="false" aria-controls="collapse9-2">
                                9. Persetujuan PKPU dan Perpanjangan
                            </button>
                        </h2>
                        <div id="collapse9-2" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion2Example">
                            <div class="accordion-body">
                                PKPU tetap dan perpanjangan diberikan oleh Pengadilan berdasarkan (vide Ps 229 ayat (1) UU K-PKPU);
                                
                                <ol class="mt-4">
                                    <li>Persetujuan lebih dari ½ Kreditur Konkuren yang diakui dan hadir, serta mewakili 2/3 bagian dari seluruh tagihan
                                    Kreditur Konkuren; dan</li>
                                    <li>
                                        Persetujuan lebih dari ½ Kreditur separatis yang hadir dan mewakili 2/3 bagian dari seluruh tagihan Kreditur.
                                        Perselisihan Hak Suara antara Kreditor dan Pengurus diputus oleh Hakim Pengawas (vide: Ps 229 ayat (2) UU K-PKPU);
                                    </li>
                                </ol>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-3 mt-md-4">
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h3>
                    Hal Penting Untuk diperhatikan Kreditor dalam PKPU / Kepailitan
                </h3>
            </div>
            <div class="col-md-6">
                <div class="accordion3" id="accordion3Example">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1-3"
                                aria-expanded="false" aria-controls="collapse1-3">
                                1. Hal yang perlu di perhatikan saat mempertimbangkan Usul/Rencana Perdamaian
                            </button>
                        </h2>
                        <div id="collapse1-3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion3Example">
                            <div class="accordion-body">
                                Hal Penting untuk di perhatikan saat mempertimbangkan Usul/Rencana Perdamaian:
                                
                                Kewajaran Ekuitas dan Utang;
                                Rasio DER dan kaitkan dengan Forecasting model bisnis yang ditawarkan
                                
                                <ul>
                                    <li>
                                        Kewajaran Laporan Keuangan; <br>
                                        Perlu di telaah apakah ada indikasi kegagalan Debitor karena Fraud atau Financial Distress atau hal lain
                                    </li>
                                    <li>
                                        Asumsi Kewajaran LK (YoY Financial Statement); <br>
                                        Cek kewajaran naik turunnya (year to year/ yoy financial statement)
                                    </li>
                                    <li>
                                        Posisi Keuangan Terakhir; <br>
                                        Cek tingat Kesehatan keuangan perusahaan, kemampuan perusahaan membayar utang.
                                    </li>
                                    <li>
                                        Visibilitas Forcasting Model Binis Baru yang di usulkan; <br>
                                        Apakah Rencana Perdamaian tersebut Visible dapat di realisasi secara logis
                                    </li>
                                    <li>
                                        Klasifikasi dan Perlakuan pada Jenis Kreditor; <br>
                                        Tinjau usulan jangka waktu pembayaran terhadap Kreditor dengan kualifikasi tertentu.
                                    </li>
                                    <li>
                                        Meminta Jaminan Likuiditas Keuangan <br>
                                        dimungkinkan meminta Jaminan Likuiditas yang stabil untuk kesinambungan Going Concern, dari Debitor dan/atau Pemegang
                                        Saham Debitor.
                                    </li>
                                    <li>
                                        Jika Proposal Perdamaian dapat disetujui, perlu dimasukan klasul Pembatalan Perjanjian Perdamaian oleh salah satu
                                        Kreditor apabila Debitor lalai memenuhi ketentuan dalam Perjanjian Perdamaian.
                                    </li>
                                    <li>
                                        Cek Validitas Perizinan Usaha dan perkara Pidana yang berpotensi menyebabkan sita Aset Debitor;
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-3"
                                aria-expanded="false" aria-controls="collapse2-3">
                                2. Pola Restrukturisasi Utang
                            </button>
                        </h2>
                        <div id="collapse2-3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion3Example">
                            <div class="accordion-body">
                               <div class="elementskit-card-body ekit-accordion--content">
                                <ul>
                                    <li>
                                        Penjadwalan Kembali Utang (Rescheduling)
                                        <p>Perubahan Jadwal dan/atau jangka waktu pembayaran, dengan mempertibangkan likuiditas keuangan Debitor.</p>
                                    </li>
                                    
                                </ul>
                                <ul>
                                    <li>
                                        Persyaratan Kembali (Reconditioning)
                                        <p>Perubahan Sebagian atau seluruh syarat perjanjian, tidak terbatas pada jadwal dan jangka waktu. Akan tetapi tidak
                                            meliputi penambahan plafon utang dengan atau tanpa konversi utang menjadi modal. Contoh:</p>
                                        <ol>
                                            <li>Kapitalisasi Bunga menjadi utang pokok;</li>
                                            <li>Penundaan Bayar Bunga, Namun pokok tetap dibayarkan sesuai jadwal;</li>
                                            <li>Pengurangan atau pembebasan bunga;</li>
                                        </ol>
                                    </li>
                                </ul>
                                
                                <ul>
                                    <li>
                                        Penataan Kembali (Restructuring)
                                        <p>Perubahan struktur perjanjian tidak terbatas Jadwal dan/atau jangka waktu pembayaran, dengan mengadopsi model
                                            financing baru, dengan atau tanpa konversi. Contoh:</p>
                                        <ol>
                                            <li>Penambahan Modal Kerja oleh Pemegang Saham atau Kreditur;</li>
                                            <li>Konversi seluruh atau Sebagian bunga menjadi pokok kredit baru;</li>
                                            <li>Konversi seluruh atau Sebagian utang menjadi penyertaan modal pada entitas usaha Debitur (debt to equity
                                                swap), baik permanent atau temporer.</li>
                                            <li>Debt buy back, pembelian utang kreditur oleh Debitur;</li>
                                            <li>Hair cut pemotongan pokok dan/atau bunga;</li>
                                            <li>Debt to Asset Swap</li>
                                            <li>Write off, dll</li>
                                        </ol>
                                    </li>
                                </ul>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-3"
                                aria-expanded="false" aria-controls="collapse3-3">
                                3. Hak Suara Kreditor
                            </button>
                        </h2>
                        <div id="collapse3-3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion3Example">
                            <div class="accordion-body">
                                <div class="elementskit-card-body ekit-accordion--content">
                                    <ul>
                                        <li>Setiap Kreditor mempunyai piutang Rp10.000.000, berhak atas 1 (satu) suara;</li>
                                        <li>Dalam hal piutang lebih dari Rp10.000.000, maka Kreditor berhak atas 1 (satu) suara tambahan setiap
                                            kelipatan Rp 10.000.000;</li>
                                        <li>Dalam hal sisa piutang tidak mencapai kelipatan Rp 10.000.000, penghitungan suara tambahan ditentukan
                                            sebagai berikut :</li>
                                    </ul>
                                    <ol>
                                        <li>Jika kurang dari Rp 5.000.000, Kreditor tidak berhak atas suara tambahan;</li>
                                        <li>Jika piutang Rp 5.000.000, atau lebih, Kreditor berhak atas 1 (satu) suara tambahan.</li>
                                    </ol>
                                    <p>(vide: PP 10/2005)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4-3"
                                aria-expanded="false" aria-controls="collapse4-3">
                                4. Korum Persetujuan Rencana Perdamaian
                            </button>
                        </h2>
                        <div id="collapse4-3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion3Example">
                            <div class="accordion-body">
                                <div class="elementskit-card-body ekit-accordion--content">
                                    <p>Rencana perdamaian dapat diterima berdasarkan:</p>
                                    <ol>
                                        <li>persetujuan lebih dari 1/2 (satu perdua) jumlah kreditor konkuren yang haknya diakui atau sementara diakui
                                            yang hadir pada rapat Kreditor sebagaimana dimaksud dalam Pasal 268 termasuk Kreditor sebagaimana dimaksud
                                            dalam Pasal 280, yang bersama-sama mewakili paling sedikit 2/3 (dua pertiga) bagian dari seluruh tagihan
                                            yang diakui atau sementara diakui dari kreditor konkuren atau kuasanya yang hadir dalam rapat tersebut; dan
                                        </li>
                                        <li>persetujuan lebih dari 1/2 (satu perdua) jumlah Kreditor yang piutangnya dijamin dengan gadai, jaminan
                                            fidusia, hak tanggungan, hipotek, atau hak agunan atas kebendaan lainnya yang hadir dan mewakili paling
                                            sedikit 2/3 (dua per tiga) bagian dari seluruh tagihan dari Kreditor tersebut atau kuasanya yang hadir dalam
                                            rapat tersebut.</li>
                                    </ol>
                                    <p>Kreditor sebagaimana dimaksud pada ayat (1) huruf b yang tidak menyetujui rencana perdamaian diberikan kompensasi
                                        sebesar nilai terendah di antara nilai jaminan atau nilai aktual pinjaman yang secara langsung dijamin dengan
                                        hak agunan atas kebendaan.</p>
                                    <p>Ketentuan sebagaimana dimaksud dalam Pasal 152 dan Pasal 153 berlaku juga dalam pemungutan suara untuk menerima
                                        rencana perdamaian sebagaimana dimaksud pada ayat (1).</p>
                                    <p>(vide: Ps 281 UU K-PKPU)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5-3"
                                aria-expanded="false" aria-controls="collapse5-3">
                                5. Hal yang perlu disiapkan menghadapi PKPU/Kepailitan
                            </button>
                        </h2>
                        <div id="collapse5-3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion3Example">
                            <div class="accordion-body">
                                <div class="elementskit-card-body ekit-accordion--content">
                                    <ul>
                                        <li>Mengetahui proses apa yang sedang dialami oleh debitor, kepailitan atau PKPU.</li>
                                        <li>Mengetahui jenis Kreditor. setiap kreditor mempunyai kedudukan yang berbeda-beda dalam Kepailitan atau PKPU.
                                        </li>
                                        <li>Pastikan Kreditor mendaftarkan piutang tepat waktu;</li>
                                        <li>Pastikan mendaftarkan piutang dengan benar kepada kurator atau pengurus. Dan menerima tanda bukti, dengan
                                            tanggal dan tandatangan yang jelas, dari kurator atau pengurus.</li>
                                        <li>Menghadiri setiap Rapat - Rapat Kreditor.</li>
                                        <li>Gunakan Pengacara dan Konsultan Keuangan. Proses kepailitan dan PKPU cukup sulit dan kompleks.
                                            <b>Kecuali</b> <b>anda</b> <b>Terbiasa</b> <b>mengurus</b> <b>Pailit</b><b> dan PKPU</b></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="kontak py-5">
            <form action="{{ route('store-layanan') }}" method="POST">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>
                                Dapatkan Penawaran Khusus Untuk Anda
                            </h4>
        
                            <div class="mt-2 d-flex justify-content-center">
                                <p class="" style="font-size: 14px; color: #717171; margin-bottom: unset">
                                    Penawaran Jasa Hukum hanya berlaku khusus bagi Anda sesuai lingkup yang telah disampaikan
                                    kepada Kami. Setelah mengisi Form, mohon konfirmasi permintaan penawaran Anda dengan
                                    mengakses fitur chat Whatsapp yang tersedia di halaman Website. Terima Kasih
                                </p>
                            </div>
                            <hr>
                        </div>
        
                        <div class="mb-3 col-md-4">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" required placeholder="masukan nama anda">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required placeholder="masukan email anda">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="">Nomor Telephon/WhatsApp</label>
                            <input type="number" class="form-control" name="phone" required placeholder="08XXXXXXXXXX">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="">Pilih Jenis</label>
                            <select name="jenis" id="" class="form-select">
                                <option value="perorangan">Perorangan</option>
                                <option value="badan hukum">Badan hukum/usaha</option>
        
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Layanan</label>
                            <select name="layanan" id="" class="form-select">
                                <option value="Jasa Pendampingan PKPU atau Kepailitan" selected="selected"
                                    data-calc-value="Jasa Konsultasi dan/atau Somasi">
                                    Jasa Pendampingan PKPU atau Kepailitan </option>
                                <option value="Jasa di tingkat Kepolisian dan/atau Kejaksaan"
                                    data-calc-value="Jasa di tingkat Kepolisian dan/atau Kejaksaan">
                                    Jasa di tingkat Kepolisian dan/atau Kejaksaan </option>
                                <option value="Jasa Sidang Pidana Umum atau Khusus"
                                    data-calc-value="Jasa Sidang Pidana Umum atau Khusus">
                                    Jasa Sidang Pidana Umum atau Khusus </option>
                                <option value="Jasa Sidang Perdata Bisnis dan/atau Personal (Cerai, Waris dll.)"
                                    data-calc-value="Jasa Sidang Perdata Bisnis dan/atau Personal (Cerai, Waris dll.)">
                                    Jasa Sidang Perdata Bisnis dan/atau Personal (Cerai, Waris dll.) </option>
                                <option value="Jasa Uji Tuntas Hukum dan/atau Pendampingan Transaksi "
                                    data-calc-value="Jasa Uji Tuntas Hukum dan/atau Pendampingan Transaksi ">
                                    Jasa Uji Tuntas Hukum dan/atau Pendampingan Transaksi </option>
                                <option value="Jasa Penyusunan dan/atau Review Dokumen (Perjanjian. Gugatan, dll)"
                                    data-calc-value="Jasa Penyusunan dan/atau Review Dokumen (Perjanjian. Gugatan, dll)">
                                    Jasa Penyusunan dan/atau Review Dokumen (Perjanjian. Gugatan, dll) </option>
                                <option value="Jasa Hukum Siaga Untuk Badan Usaha (Perbulan)"
                                    data-calc-value="Jasa Hukum Siaga Untuk Badan Usaha (Perbulan)">
                                    Jasa Hukum Siaga Untuk Badan Usaha (Perbulan) </option>
                                <option value="Jasa Konsultasi dan/atau Somasi"
                                    data-calc-value="Jasa Pendampingan PKPU &amp; Kepailitan">
                                    Jasa Konsultasi dan/atau Somasi </option>
                                <option value="Jasa Hukum Lainnya" data-calc-value="Jasa Hukum Lainnya">
                                    Jasa Hukum Lainnya </option>
        
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="">Jelaskan Masalah dan Kebutuhan Anda</label>
                            <textarea name="deskripsi" required rows="6" placeholder="jelaskan secara rinci . . ."
                                class="form-control"></textarea>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button type="submit" class="btn btn__primary ">Kirim Pesan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection