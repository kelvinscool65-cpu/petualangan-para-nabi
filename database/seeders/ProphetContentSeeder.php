<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prophet;
use App\Models\Material;
use App\Models\Question;
use Illuminate\Support\Facades\Log;

class ProphetContentSeeder extends Seeder
{
    public function run(): void
    {
        $prophetsData = [
            // 1. ADAM
            [
                'urutan_nabi' => 1,
                'nama_nabi' => 'Adam',
                'deskripsi' => 'Manusia dan Nabi pertama yang diciptakan Allah SWT dari tanah.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Penciptaan dari Tanah dan Peniupan Ruh',
                        'teks' => "Allah SWT menciptakan jasad Adam dari sari pati tanah yang berasal dari tanah liat kering yang dibentuk hitam berbau, kemudian disempurnakan bentuknya. Setelah itu, Allah meniupkan ruh ciptaan-Nya ke dalam jasad tersebut. Untuk membuktikan keunggulan Adam di hadapan para Malaikat, Allah mengajarkan kepada Adam nama-nama benda seluruhnya. Allah lalu mengemukakannya kepada para Malaikat dan berfirman: \"Sebutkanlah kepada-Ku nama benda-benda itu jika kamu memang benar orang-orang yang benar!\" Para Malaikat menjawab tunduk: \"Maha Suci Engkau, tidak ada yang kami ketahui selain dari apa yang telah Engkau ajarkan kepada kami...\" (QS. Al-Baqarah: 31-32).",
                        'audio_path' => 'audio/adam_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Sujud Penghormatan dan Pembangkangan Iblis',
                        'teks' => "Setelah Adam membuktikan kapasitas ilmunya, Allah memerintahkan para Malaikat dan Iblis untuk bersujud menghormati Adam sebagai bentuk penghormatan (tahiyyah). Seluruh Malaikat sujud seketika tanpa membantah. Namun, Iblis menolak dengan angkuh. Iblis berkata dengan sombong: \"Aku lebih baik daripadanya; Engkau ciptakan aku dari api, sedangkan dia Engkau ciptakan dari tanah.\" Akibat kesombongan dan pembangkangan ini, Iblis dikutuk, diusir dari surga, dan diancam laknat hingga hari kiamat.",
                        'audio_path' => 'audio/adam_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Ujian di Surga, Taubat, dan Turun ke Bumi',
                        'teks' => "Adam dan Hawa ditempatkan di surga, diperbolehkan menikmati segala kenikmatan kecuali mendekati satu pohon tertentu. Iblis membisikkan tipu daya hingga mereka memakan buah terlarang. Seketika aurat mereka terbuka, dan mereka segera menutupinya dengan daun-daun surga. Adam dan Hawa menyesal dan berdoa: \"Rabbana zhalamna anfusana wa in lam taghfirlana wa tarhamna lanakunanna minal khasirin\" (QS. Al-A'raf: 23). Allah menerima taubat mereka, namun menetapkan bumi sebagai tempat tinggal dan ujian bagi mereka serta keturunannya.",
                        'audio_path' => 'audio/adam_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_adam',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Berdasarkan QS. Al-Baqarah ayat 30, apa alasan dasar para Malaikat sempat mempertanyakan penciptaan manusia (Adam) di muka bumi?', 'opsi_a' => 'Karena manusia terbuat dari bahan api yang panas', 'opsi_b' => 'Kekhawatiran bahwa manusia akan membuat kerusakan dan menumpahkan darah di bumi', 'opsi_c' => 'Karena malaikat merasa lebih berhak menjadi khalifah di bumi', 'opsi_d' => 'Karena Adam tidak memiliki akal pikiran untuk memimpin', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Bahan dasar fisik penciptaan Nabi Adam a.s. sebelum ditiupkan ruh ke dalamnya adalah...', 'opsi_a' => 'Cahaya yang menyilaukan dari langit', 'opsi_b' => 'Air murni yang mengalir dari surga', 'opsi_c' => 'Tanah liat kering dari sari pati tanah yang dibentuk (salsal / hama\' masnun)', 'opsi_d' => 'Angin topan dan awan putih yang dipadatkan', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Apa alasan utama Iblis menolak perintah Allah untuk bersujud menghormati Nabi Adam a.s.?', 'opsi_a' => 'Karena Iblis tidak melihat keberadaan Nabi Adam di hadapannya', 'opsi_b' => 'Karena Iblis merasa dirinya lebih mulia dan baik daripada Adam (diciptakan dari api, sedangkan Adam dari tanah)', 'opsi_c' => 'Karena Iblis sedang sibuk beribadah kepada Allah yang lain', 'opsi_d' => 'Karena Iblis merasa dirinya adalah pemimpin agung para malaikat langit', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Larangan apa yang diberikan Allah SWT kepada Nabi Adam dan Hawa ketika mereka tinggal di dalam surga?', 'opsi_a' => 'Dilarang memakan buah dari pohon tertentu yang telah ditentukan batasannya', 'opsi_b' => 'Dilarang berbicara kepada Iblis selama berada di dalam lingkungan surga', 'opsi_c' => 'Dilarang meninggalkan istana surga menuju ke bumi', 'opsi_d' => 'Dilarang memetik bunga hias di taman surga', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Kalimat doa taubat yang dibaca dan diamalkan oleh Nabi Adam a.s. setelah menyadari kesalahannya termaktub dalam Al-Qur\'an Surah...', 'opsi_a' => 'QS. Al-Baqarah: 255', 'opsi_b' => 'QS. Al-A\'raf: 23', 'opsi_c' => 'QS. Al-Ikhlas: 1-4', 'opsi_d' => 'QS. Yasin: 58', 'jawaban_benar' => 'B'],
                ],
            ],
            // 2. IDRIS
            [
                'urutan_nabi' => 2,
                'nama_nabi' => 'Idris',
                'deskripsi' => 'Nabi yang dikenal cerdas, pelopor tulis-menulis, dan diangkat ke tempat yang tinggi.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Kedudukan Mulia dan Sifat Shiddiq di Sisi Allah',
                        'teks' => "Nabi Idris a.s. adalah keturunan keenam dari Nabi Adam a.s. Di dalam Al-Qur'an, Allah SWT memberikan pujian yang sangat tinggi kepada beliau. Dalam Surah Maryam ayat 56-57, Allah berfirman: \"Dan ceritakanlah (wahai Muhammad) kisah Idris di dalam Kitab. Sesungguhnya ia adalah seorang yang sangat benar dan seorang nabi. Dan Kami telah mengangkatnya ke martabat yang tinggi.\" Para ahli tafsir menjelaskan bahwa pengangkatan derajat yang tinggi ini berkaitan dengan ketinggian akhlaknya dan kedekatannya pada ketaatan.",
                        'audio_path' => 'audio/idris_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Pelopor Keterampilan Peradaban (Menulis, Menjahit, dan Ilmu Hitung)',
                        'teks' => "Berdasarkan riwayat dari para sahabat dan ulama sejarah Islam, Nabi Idris a.s. adalah manusia pertama yang dianugerahi kecerdasan luar biasa untuk mempelopori berbagai kemajuan peradaban. Beliau adalah orang pertama yang pandai menjahit pakaian sehingga manusia bisa berpakaian rapi dan menutup aurat dengan layak. Selain itu, beliau adalah orang pertama yang menggunakan pena untuk menulis ilmu pengetahuan, serta menguasai ilmu perbintangan (astronomi) dan hitungan matematika.",
                        'audio_path' => 'audio/idris_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Dakwah Menegakkan Keadilan dan Ketekunan Ibadah',
                        'teks' => "Nabi Idris a.s. tidak hanya mengajarkan keterampilan duniawi, tetapi tugas utamanya adalah menegakkan kalimat tauhid. Ia mendakwahi kaumnya untuk beribadah hanya kepada Allah, meninggalkan kemaksiatan, serta menegakkan keadilan di antara sesama manusia. Beliau dikenal sebagai seorang yang sangat tekun beribadah, rajin bersyukur, dan tidak pernah menyia-nyiakan waktu malam dan siangnya kecuali dalam ketaatan kepada Allah SWT.",
                        'audio_path' => 'audio/idris_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_idris',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Nabi Idris a.s. merupakan keturunan keberapa dari bapak manusia pertama, Nabi Adam a.s.?', 'opsi_a' => 'Keturunan kedua', 'opsi_b' => 'Keturunan keempat', 'opsi_c' => 'Keturunan keenam', 'opsi_d' => 'Keturunan kesepuluh', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Sifat mulia apa yang secara khusus disematkan oleh Allah SWT kepada Nabi Idris a.s. di dalam Surah Maryam ayat 56?', 'opsi_a' => 'Seorang yang sangat jujur / benar (shiddiq) dan seorang nabi', 'opsi_b' => 'Seorang raja penguasa wilayah timur dan barat', 'opsi_c' => 'Seorang panglima perang yang gagah berani', 'opsi_d' => 'Seorang ahli bangunan yang membangun piramida', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Penemuan atau keterampilan praktis apa yang secara tradisional dihubungkan dengan Nabi Idris a.s. dalam sejarah Islam?', 'opsi_a' => 'Menciptakan mata uang emas dinar dan perak dirham', 'opsi_b' => 'Pandai menggunakan pena untuk menulis dan menjahit pakaian', 'opsi_c' => 'Membuat kapal laut besar dari kayu jati pilihan', 'opsi_d' => 'Menemukan api pertama dari gesekan batu', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Di langit ke berapakah Nabi Muhammad SAW bertemu dengan Nabi Idris a.s. saat peristiwa perjalanan Isra\' Mi\'raj?', 'opsi_a' => 'Langit pertama', 'opsi_b' => 'Langit kedua', 'opsi_c' => 'Langit ketiga', 'opsi_d' => 'Langit keempat', 'jawaban_benar' => 'D'],
                    ['pertanyaan' => 'Keteladanan utama apa yang dapat dipetik oleh seorang mukmin dari kisah kehidupan Nabi Idris a.s.?', 'opsi_a' => 'Menggunakan kecerdasan, ilmu, dan keterampilan hidup untuk memperkuat ketaatan kepada Allah', 'opsi_b' => 'Mengasingkan diri sepenuhnya dari peradaban masyarakat luar', 'opsi_c' => 'Mengumpulkan kekayaan duniawi sebanyak-banyaknya untuk keturunan', 'opsi_d' => 'Menjadi penguasa mutlak atas suatu wilayah kekaisaran', 'jawaban_benar' => 'A'],
                ],
            ],
            // 3. NUH
            [
                'urutan_nabi' => 3,
                'nama_nabi' => 'Nuh',
                'deskripsi' => 'Nabi yang berdakwah selama ratusan tahun dan membangun bahtera besar.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Penyimpangan Berhala dan Pengutusan Nabi Nuh',
                        'teks' => "Setelah berabad-abad wafatnya Nabi Adam, manusia mulai lupa pada ajaran tauhid. Setan membisikkan kaum musyrikin untuk membuat patung-patung penghormatan bagi orang-orang saleh yang telah meninggal (seperti Wadd, Suwa', Yaghuts, Ya'uq, dan Nasr). Lama-kelamaan, generasi berikutnya menyembah patung-patung tersebut sebagai tuhan selain Allah. Dalam kondisi kesyirikan yang parah inilah Allah mengutus Nabi Nuh a.s. kepada kaumnya untuk memperingatkan mereka dari azab yang pedih.",
                        'audio_path' => 'audio/nuh_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Dakwah 950 Tahun yang Penuh Penolakan dan Ejekan',
                        'teks' => "Nabi Nuh a.s. menjalankan misi dakwah dengan kesabaran yang luar biasa. Beliau menyeru kaumnya siang dan malam, secara sembunyi-sembunyi maupun terang-terangan. Beliau mendebat mereka dengan logika keimanan yang lurus. Namun, mayoritas mereka menolak mentah-mentah. Para pemuka kaum kafir mengejek Nuh, mengatakan bahwa Nuh hanyalah manusia biasa seperti mereka, dan pengikut Nuh hanyalah orang-orang miskin dan hina dina. Meskipun dicaci dan dihina selama 950 tahun, Nabi Nuh tidak pernah putus asa.",
                        'audio_path' => 'audio/nuh_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Pembuatan Bahtera, Banjir Besar, dan Keselamatan',
                        'teks' => "Allah memerintahkan Nuh untuk membuat kapal besar di daratan kering, yang diejek oleh kaumnya. Ketika azab tiba, air memancar deras dari bumi dan hujan lebat dari langit. Nuh membawa pengikut yang beriman dan sepasang hewan ke dalam bahtera. Anak kandung Nuh, Kan'an, menolak naik dan tenggelam. Setelah air surut, bahtera berlabuh di Gunung Judi. Nabi Nuh dan pengikutnya turun untuk memulai peradaban baru yang bersih dari kesyirikan.",
                        'audio_path' => 'audio/nuh_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_nuh',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Berapa lama usia masa dakwah yang ditempuh oleh Nabi Nuh a.s. kepada kaumnya yang ingkar berdasarkan keterangan Al-Qur\'an (QS. Al-Ankabut: 14)?', 'opsi_a' => '500 tahun', 'opsi_b' => '750 tahun', 'opsi_c' => '950 tahun', 'opsi_d' => '1000 tahun lebih', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Apa reaksi dan sikap utama yang ditunjukkan oleh kaum kafir saat melihat Nabi Nuh a.s. sedang membuat kapal besar di daratan kering?', 'opsi_a' => 'Mereka ikut membantu menyediakan kayu bakar untuk pembangunan kapal', 'opsi_b' => 'Mereka mengejek, menertawakan, dan menganggap Nuh telah kehilangan akal', 'opsi_c' => 'Mereka merasa ketakutan dan langsung meminta maaf kepada Nabi Nuh', 'opsi_d' => 'Mereka menawarkan diri untuk membeli kapal tersebut dengan harga tinggi', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Peristiwa alam apa yang menandai datangnya azab pemusnahan total bagi kaum Nabi Nuh a.s. yang kafir?', 'opsi_a' => 'Gempa bumi vulkanik yang meruntuhkan seluruh gedung kota', 'opsi_b' => 'Angin topan dingin yang berhembus kencang selama berminggu-minggu', 'opsi_c' => 'Air yang memancar deras dari perut bumi dan hujan lebat dari langit yang mencurahkan air tanpa henti', 'opsi_d' => 'Munculnya wabah penyakit sampar mematikan yang menyebar dalam semalam', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Siapakah nama anak kandung Nabi Nuh a.s. yang menolak ajakan ayahnya untuk naik ke kapal dan akhirnya binasa dalam banjir besar?', 'opsi_a' => 'Kan\'an', 'opsi_b' => 'Sam', 'opsi_c' => 'Ham', 'opsi_d' => 'Yafits', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Di atas gunung manakah kapal (bahtera) Nabi Nuh a.s. akhirnya berlabuh dengan selamat setelah banjir besar surut?', 'opsi_a' => 'Gunung Sinai (Tur Sina)', 'opsi_b' => 'Gunung Jabal Nur', 'opsi_c' => 'Gunung Judi', 'opsi_d' => 'Gunung Uhud', 'jawaban_benar' => 'C'],
                ],
            ],
            // 4. HUD
            [
                'urutan_nabi' => 4,
                'nama_nabi' => 'Hud',
                'deskripsi' => 'Nabi yang diutus kepada kaum Ad yang kuat.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Kemegahan Kota Iram dan Kekuatan Fisik Kaum Ad',
                        'teks' => "Nabi Hud a.s. diutus kepada Kaum 'Ad yang tinggal di wilayah Al-Ahqaf. Mereka dianugerahi postur tubuh yang sangat kuat, tinggi besar, serta kesehatan fisik yang prima. Peradaban mereka sangat maju; mereka membangun kota-kota megah dengan pilar-pilar tinggi yang menopang bangunan indah (dikenal sebagai Kota Iram), yang belum pernah dibangun bangunan serupa di negeri-negeri lain.",
                        'audio_path' => 'audio/hud_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Kesombongan Materialisme dan Penolakan terhadap Dakwah Hud',
                        'teks' => "Dengan kekayaan melimpah dan kekuatan fisik yang hebat, Kaum 'Ad menjadi sombong dan melampaui batas. Mereka menyembah berhala-berhala. Nabi Hud a.s. datang menyeru mereka untuk bertakwa kepada Allah, bersyukur atas nikmat-nikmat-Nya, dan meninggalkan penyembahan berhala. Namun, kaumnya justru menentang keras dengan nada angkuh: \"Siapakah yang lebih besar kekuatannya daripada kami?\" Mereka menuduh Nabi Hud sebagai orang yang kurang akal dan pembohong.",
                        'audio_path' => 'audio/hud_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Azab Badai Angin Dingin dan Kebinasaan Kaum Ad',
                        'teks' => "Karena mereka terus-menerus menantang, Allah menghentikan hujan bagi mereka. Ketika mereka melihat awan hitam, mereka mengira itu awan hujan, padahal itu awal azab. Allah mendatangkan angin topan yang sangat dingin dan kencang (rihun sarsar 'atimah) yang bergemuruh dahsyat selama 7 malam dan 8 hari berturut-turut. Angin tersebut mengangkat manusia-manusia sombong itu ke udara, lalu membanting mereka kembali ke tanah hingga mati bergelimpangan seperti batang pohon kurma yang tumbang.",
                        'audio_path' => 'audio/hud_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_hud',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Kepada kaum manakah Nabi Hud a.s. diutus untuk menyampaikan risalah tauhid dan peringatan Allah SWT?', 'opsi_a' => 'Kaum Tsamud', 'opsi_b' => 'Kaum \'Ad', 'opsi_c' => 'Kaum Madyan', 'opsi_d' => 'Kaum Qum', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Kelebihan fisik dan peradaban apa yang dibanggakan secara berlebihan oleh Kaum \'Ad hingga membuat mereka sombong?', 'opsi_a' => 'Kecerdasan luar biasa dalam menciptakan mesin uap', 'opsi_b' => 'Postur tubuh yang kuat, tinggi besar, serta pembangunan kota Iram dengan pilar-pilar tinggi', 'opsi_c' => 'Kemampuan berenang melintasi samudra luas', 'opsi_d' => 'Kecepatan lari yang bisa mengejar binatang buas', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Apa bentuk azab yang ditimpakan Allah SWT untuk membinasakan Kaum \'Ad yang ingkar?', 'opsi_a' => 'Badai pasir bercampur api yang membakar seluruh kota', 'opsi_b' => 'Angin topan dingin yang sangat kencang (sarsar) selama 7 malam dan 8 hari', 'opsi_c' => 'Hujan batu belerang panas yang menghujani dari langit', 'opsi_d' => 'Tenggelamnya seluruh daratan ke dalam dasar laut', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Di manakah wilayah geografis tempat tinggal utama Kaum \'Ad menurut keterangan sejarah dan Al-Qur\'an?', 'opsi_a' => 'Wilayah Al-Ahqaf (bukit-bukit pasir)', 'opsi_b' => 'Lembah Sungai Nil di Mesir Kuno', 'opsi_c' => 'Kota Babylon di wilayah Irak modern', 'opsi_d' => 'Lembah Yordania kuno', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Sifat buruk utama apa yang menyebabkan kehancuran total Kaum \'Ad di muka bumi?', 'opsi_a' => 'Sifat kikir dan enggan membayar zakat harta', 'opsi_b' => 'Sifat sombong karena merasa tidak ada yang lebih kuat dari kekuatan fisik mereka', 'opsi_c' => 'Sifat pengecut saat menghadapi musuh di medan perang', 'opsi_d' => 'Sifat suka berkhianat dalam urusan perjanjian dagang', 'jawaban_benar' => 'B'],
                ],
            ],
            // 5. SHALEH
            [
                'urutan_nabi' => 5,
                'nama_nabi' => 'Shaleh',
                'deskripsi' => 'Nabi yang diutus kepada kaum Tsamud dengan mukjizat unta betina.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Keahlian Arsitektur Kaum Tsamud di Al-Hijr',
                        'teks' => "Nabi Shaleh a.s. diutus kepada Kaum Tsamud yang mendiami wilayah Al-Hijr (Madain Saleh). Mereka adalah kaum penerus peradaban Kaum 'Ad. Kaum Tsamud memiliki keahlian arsitektur yang sangat tinggi; mereka sangat terampil memahat batu-batu gunung yang besar untuk dijadikan rumah-rumah tempat tinggal yang megah, kokoh, dan merasa aman dari bencana.",
                        'audio_path' => 'audio/saleh_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Tuntutan Mukjizat dan Munculnya Unta Betina dari Batu',
                        'teks' => "Meskipun cerdas secara fisik dan arsitektur, Kaum Tsamud menyembah berhala. Nabi Shaleh berdakwah mengajak mereka menyembah Allah. Mereka menuntut bukti kenabian Shaleh dengan meminta dikeluarkan seekor unta betina yang sedang hamil tua dari dalam celah batu besar di gunung. Atas izin Allah SWT, mukjizat besar itu terwujud: batu karang terbelah dan keluarlah unta betina yang sesuai dengan permintaan mereka.",
                        'audio_path' => 'audio/saleh_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Unta Disembelih dan Azab Suara Menggelegar',
                        'teks' => "Nabi Shaleh memberi peringatan agar unta dibiarkan makan dan minum bergiliran dengan warga. Namun, tokoh-tokoh jahat menyembelih unta itu. Shaleh memperingatkan mereka hanya memiliki waktu tiga hari sebelum azab Allah datang. Pada hari yang ditentukan, gempa bumi dahsyat disertai suara petir dan teriakan yang sangat keras (shaihah) menyambar mereka, membuat mereka mati bergelimpangan di dalam rumah-rumah batu hasil pahatan mereka sendiri dalam sekejap.",
                        'audio_path' => 'audio/saleh_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_saleh',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Wilayah manakah yang menjadi pusat peradaban dan tempat tinggal utama Kaum Tsamud tempat Nabi Shaleh a.s. berdakwah?', 'opsi_a' => 'Kota Babilonia kuno', 'opsi_b' => 'Wilayah Al-Hijr (Madain Saleh)', 'opsi_c' => 'Kota Yerusalem di Palestina', 'opsi_d' => 'Lembah Saba\' di Yaman', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Apa keahlian teknik arsitektur yang sangat dibanggakan oleh Kaum Tsamud dalam membangun tempat tinggal?', 'opsi_a' => 'Membangun istana kayu terapung di atas air sungai', 'opsi_b' => 'Memahat tebing-tebing gunung batu yang keras menjadi rumah-rumah megah yang kokoh', 'opsi_c' => 'Menyusun jembatan gantung raksasa antarbukit pasir', 'opsi_d' => 'Menyusun batu bata merah menjadi piramida bertingkat', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Bentuk mukjizat apa yang dituntut oleh Kaum Tsamud kepada Nabi Shaleh a.s. sebagai syarat agar mereka mau beriman?', 'opsi_a' => 'Tongkat yang bisa berubah menjadi ular besar penelan sihir', 'opsi_b' => 'Seekor unta betina hamil yang keluar langsung dari celah batu besar', 'opsi_c' => 'Kemampuan menghidupkan kembali orang tua mereka yang telah mati', 'opsi_d' => 'Kitab suci utuh yang turun langsung dari gumpalan awan putih', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Apa aturan ketat yang diberikan Nabi Shaleh terkait pemanfaatan sumber air dan perlindungan unta mukjizat?', 'opsi_a' => 'Unta harus disembelih setiap hari raya sebagai bentuk kurban berhala', 'opsi_b' => 'Unta dibiarkan bebas merumput dan mendapat jatah giliran khusus minum air sumur bergantian dengan warga', 'opsi_c' => 'Unta harus dikurung di dalam istana raja agar tidak merusak kebun warga', 'opsi_d' => 'Unta hanya boleh diberi makan buah-buahan impor pilihan', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Bentuk azab apa yang akhirnya menghancurkan Kaum Tsamud secara total setelah mereka nekat membunuh unta mukjizat Nabi Shaleh?', 'opsi_a' => 'Disambar oleh gempa bumi hebat dan suara petir yang sangat keras (shaihah) hingga mati bergelimpangan', 'opsi_b' => 'Diserang oleh jutaan pasukan burung berapi dari arah lautan', 'opsi_c' => 'Seluruh tubuh penduduknya berubah menjadi batu karang hitam', 'opsi_d' => 'Negeri mereka ditenggelamkan oleh gelombang lumpur panas beracun', 'jawaban_benar' => 'A'],
                ],
            ],
            // 6. IBRAHIM
            [
                'urutan_nabi' => 6,
                'nama_nabi' => 'Ibrahim',
                'deskripsi' => 'Bapak para nabi (Abul Anbiya) yang selamat dari kobaran api.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Pencarian Tuhan yang Kritis di Tengah Masyarakat Penyembah Berhala',
                        'teks' => "Nabi Ibrahim a.s. lahir dan dibesarkan di kota Ur, Babilonia. Masyarakatnya, termasuk ayahnya Azar, adalah pembuat patung dan penyembah berhala. Sejak muda, Ibrahim dikaruniai akal pikiran yang sangat tajam. Ia mengamati bintang, bulan, dan matahari yang disembah kaumnya. Ketika benda-benda langit itu terbenam, Ibrahim menyadari bahwa Tuhan yang sejati tidak boleh tunduk pada perubahan. Ia pun menyimpulkan bahwa pencipta alam semesta adalah Zat Yang Maha Esa.",
                        'audio_path' => 'audio/ibrahim_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Penghancuran Berhala dan Perdebatan dengan Raja Namrud',
                        'teks' => "Nabi Ibrahim bertekad membuktikan kebatilan berhala. Suatu hari, ketika penduduk pergi merayakan hari raya, Ibrahim masuk ke tempat penyimpanan berhala dan menghancurkan seluruh patung, kecuali satu yang terbesar, dan meletakkan kapak di lehernya. Ketika penduduk kembali dan bertanya, Ibrahim menjawab agar mereka bertanya kepada berhala besar tersebut jika patung itu bisa berbicara. Mereka murka dan menghukum Ibrahim dengan membakarnya. Allah menyelamatkan Ibrahim dengan mukjizat: \"Hai api, menjadi dinginlah, dan menjadi keselamatanlah bagi Ibrahim!\" (QS. Al-Anbiya: 69). Ibrahim keluar tanpa terluka.",
                        'audio_path' => 'audio/ibrahim_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Ujian Kurban Ismail dan Pembangunan Fondasi Kabah',
                        'teks' => "Puncak ujian ketaatan terjadi ketika Ibrahim diperintahkan dalam mimpi untuk menyembelih putranya, Ismail. Dengan kepatuhan mutlak, Ibrahim menyampaikan mimpi itu kepada Ismail. Sang anak menjawab dengan ikhlas agar ayahnya segera melaksanakan perintah Allah. Ketika pisau hendak ditekankan, Allah menggantikan Ismail dengan seekor domba besar sebagai tebusan. Kemudian, atas perintah Allah, Ibrahim dan Ismail meninggikan fondasi Kabah di Mekkah sebagai pusat ibadah tauhid pertama.",
                        'audio_path' => 'audio/ibrahim_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_ibrahim',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Siapakah nama ayah kandung Nabi Ibrahim a.s. yang kesehariannya bekerja membuat patung berhala di Babilonia?', 'opsi_a' => 'Azar / Terah', 'opsi_b' => 'Namrud bin Kan\'an', 'opsi_c' => 'Tarikh al-Kabir', 'opsi_d' => 'Laban al-Arabi', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Apa alasan logis yang mendasari Nabi Ibrahim menolak menyembah bintang, bulan, dan matahari?', 'opsi_a' => 'Karena benda-benda tersebut terlalu jauh untuk dijangkau tangan', 'opsi_b' => 'Karena benda-benda langit itu mengalami pergerakan terbenam dan tidak abadi', 'opsi_c' => 'Karena dilarang keras oleh peraturan kerajaan Raja Namrud', 'opsi_d' => 'Karena benda-benda tersebut tidak memiliki cahaya yang cukup terang', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Mukjizat apa yang diberikan Allah SWT kepada Nabi Ibrahim ketika ia dihukum mati dengan cara dibakar hidup-hidup oleh Raja Namrud?', 'opsi_a' => 'Api tersebut berubah menjadi air sungai yang sangat dingin', 'opsi_b' => 'Kobaran api yang besar menjadi dingin dan menyelamatkan keselamatan Ibrahim', 'opsi_c' => 'Muncul angin topan badai salju yang memadamkan seluruh bara api seketika', 'opsi_d' => 'Kulit tubuh Ibrahim berubah menjadi baja yang tahan api', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Putra siapakah yang mendampingi Nabi Ibrahim a.s. saat bersama-sama meninggikan fondasi Kabah di kota Mekkah?', 'opsi_a' => 'Nabi Ishaq a.s.', 'opsi_b' => 'Nabi Ismail a.s.', 'opsi_c' => 'Nabi Yakub a.s.', 'opsi_d' => 'Nabi Yusuf a.s.', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Peristiwa agung apa yang diabadikan dalam sejarah Islam sebagai bentuk kepatuhan mutlak Nabi Ibrahim dan Nabi Ismail kepada perintah Allah?', 'opsi_a' => 'Peristiwa Isra\' dan Mi\'raj Nabi Muhammad', 'opsi_b' => 'Perintah penyembelihan kurban di bulan Dzulhijjah', 'opsi_c' => 'Peristiwa pembebasan kota Mekkah (Fathu Makkah)', 'opsi_d' => 'Perjalanan hijrah dari negeri Irak ke Palestina', 'jawaban_benar' => 'B'],
                ],
            ],
            // 7. LUTH
            [
                'urutan_nabi' => 7,
                'nama_nabi' => 'Luth',
                'deskripsi' => 'Nabi yang diutus untuk memperingatkan kaum Sodom.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Pengutusan ke Negeri Sodom dan Kerusakan Moral Penduduknya',
                        'teks' => "Nabi Luth a.s. adalah keponakan Nabi Ibrahim. Ia diutus oleh Allah kepada penduduk negeri Sodom (wilayah sekitar Laut Mati). Penduduk Sodom hidup dalam kemakmuran materi, namun terjerumus ke dalam perilaku amoral yang sangat buruk: melakukan hubungan sesama jenis (homoseksual) serta gemar merampok dan melakukan kejahatan secara terang-terangan di jalanan tanpa rasa malu.",
                        'audio_path' => 'audio/luth_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Dakwah Sabar dan Kedatangan Tamu Malaikat',
                        'teks' => "Nabi Luth dengan penuh kesabaran memperingatkan kaumnya agar meninggalkan perbuatan keji dan kembali kepada fitrah yang suci. Namun, kaum Sodom menolak dengan sombong, bahkan mengancam akan mengusir Luth. Suatu hari, datanglah para malaikat berwujud pemuda-pemuda tampan bertamu ke rumah Luth. Istri Luth yang kafir membocorkan kehadiran tamu tersebut kepada penduduk kota.",
                        'audio_path' => 'audio/luth_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Azab Pembalikan Negeri dan Hujan Batu Belerang',
                        'teks' => "Penduduk Sodom mengepung rumah Luth dengan niat buruk. Malaikat mengungkapkan jati diri dan memerintahkan Luth serta keluarganya pergi di malam hari dengan larangan menengok ke belakang. Ketika fajar, Allah menjungkirbalikkan negeri Sodom dan menghujani mereka dengan batu dari tanah yang terbakar (sijjil) secara bertubi-tubi. Istri Luth yang menengok ke belakang tertinggal dan binasa bersama kaum kafir.",
                        'audio_path' => 'audio/luth_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_luth',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Apa bentuk penyimpangan moral terbesar yang dilakukan oleh penduduk negeri Sodom tempat Nabi Luth a.s. diutus?', 'opsi_a' => 'Menyembah matahari dan bintang-bintang di langit malam', 'opsi_b' => 'Melakukan praktik riba berlipat ganda dalam perdagangan pasar', 'opsi_c' => 'Melakukan hubungan sesama jenis (homoseksual) serta kebiasaan merampok di jalanan', 'opsi_d' => 'Membunuh anak-anak perempuan karena dianggap membawa sial', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Apa hubungan kekerabatan antara Nabi Luth a.s. dan Nabi Ibrahim a.s.?', 'opsi_a' => 'Ayah dan anak kandung', 'opsi_b' => 'Paman dan keponakan', 'opsi_c' => 'Kakak dan adik kandung', 'opsi_d' => 'Kakek dan cucu', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Bagaimana wujud para malaikat ketika bertamu ke rumah Nabi Luth a.s. untuk menyampaikan kabar azab?', 'opsi_a' => 'Burung raksasa berukuran besar yang bersinar', 'opsi_b' => 'Pemuda-pemuda yang berwajah sangat tampan', 'opsi_c' => 'Cahaya putih menyilaukan mata yang memenuhi ruangan', 'opsi_d' => 'Orang-orang tua renta yang membawa tongkat kayu', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Apa instruksi penting yang diberikan kepada Nabi Luth dan keluarganya saat meninggalkan kota Sodom sebelum azab tiba?', 'opsi_a' => 'Harus membawa seluruh harta benda berharga miliknya', 'opsi_b' => 'Harus berjalan dengan mata tertutup kain putih', 'opsi_c' => 'Dilarang menengok ke belakang saat azab turun menghancurkan kota', 'opsi_d' => 'Harus memanggil penduduk lain untuk ikut berlari bersama', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Bentuk azab apa yang akhirnya menghancurkan negeri Sodom secara total berdasarkan Al-Qur\'an?', 'opsi_a' => 'Negeri dijungkirbalikkan dan dihujani batu dari tanah yang terbakar (sijjil)', 'opsi_b' => 'Seluruh penduduknya tertidur lelap selamanya karena racun gas bumi', 'opsi_c' => 'Negeri tersebut tenggelam ke dasar laut yang sangat dalam seketika', 'opsi_d' => 'Diserang oleh badai salju abadi yang membekukan seluruh bangunan', 'jawaban_benar' => 'A'],
                ],
            ],
            // 8. ISMAIL
            [
                'urutan_nabi' => 8,
                'nama_nabi' => 'Ismail',
                'deskripsi' => 'Nabi yang sabar saat hendak disembelih dan membangun Kakbah bersama ayahnya.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Pengasingan ke Lembah Gersang Mekkah dan Siti Hajar',
                        'teks' => "Nabi Ismail a.s. adalah putra pertama Nabi Ibrahim dari Siti Hajar. Atas perintah Allah, Ibrahim membawa Hajar dan bayi Ismail ke lembah tandus Mekkah. Ibrahim meninggalkan mereka dengan bekal kurma dan air, lalu berjalan pulang. Ketika Hajar bertanya apakah ini perintah Allah, Ibrahim menjawab ya, dan Hajar ikhlas.",
                        'audio_path' => 'audio/ismail_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Mukjizat Air Zamzam dan Asal-usul Suku Jurhum',
                        'teks' => "Ketika perbekalan habis dan bayi Ismail menangis kehausan, Siti Hajar berlari bolak-balik tujuh kali antara Safa dan Marwah (kini diabadikan dalam sa'i). Atas rahmat Allah, air Zamzam memancar dari dekat kaki Ismail. Keberadaan air menarik perhatian burung dan kafilah suku Jurhum, yang kemudian menetap di sana. Ismail tumbuh besar di tengah masyarakat Arab Jurhum.",
                        'audio_path' => 'audio/ismail_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Mimpi Kurban Agung dan Pembangunan Kabah',
                        'teks' => "Ketika Ismail remaja, Ibrahim mendapat mimpi wahyu untuk menyembelih putranya. Ibrahim menyampaikan mimpi itu, dan Ismail menjawab: \"Wahai ayahku, kerjakanlah apa yang diperintahkan kepadamu; insya Allah kamu akan mendapati aku termasuk orang-orang yang sabar.\" (QS. Ash-Shaffat: 102). Saat pisau hendak ditekankan, Allah menggantinya dengan domba kurban. Kemudian, Ibrahim dan Ismail bersama-sama meninggikan fondasi Kabah.",
                        'audio_path' => 'audio/ismail_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_ismail',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Siapakah nama ibu kandung dari Nabi Ismail a.s.?', 'opsi_a' => 'Siti Sarah', 'opsi_b' => 'Siti Hajar', 'opsi_c' => 'Siti Zulaikha', 'opsi_d' => 'Siti Maryam', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Aktivitas lari-lari kecil antara bukit Safa dan Marwah yang dilakukan oleh Siti Hajar untuk mencari air dinamakan dengan...', 'opsi_a' => 'Tawaf', 'opsi_b' => 'Sa\'i', 'opsi_c' => 'Wukuf di Arafah', 'opsi_d' => 'Tahallul', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Mata air suci yang terpancar dari dekat kaki Nabi Ismail kecil di lembah Mekkah dikenal dengan nama...', 'opsi_a' => 'Air Kautsar', 'opsi_b' => 'Air Salsabil', 'opsi_c' => 'Air Zamzam', 'opsi_d' => 'Air Madinah', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Suku bangsa Arab pertama yang datang dan menetap di sekitar mata air tempat Nabi Ismail tumbuh besar adalah...', 'opsi_a' => 'Suku Quraisy', 'opsi_b' => 'Suku Jurhum', 'opsi_c' => 'Suku Aus dan Khazraj', 'opsi_d' => 'Suku Tsamud', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Bagaimana sikap mental Nabi Ismail a.s. ketika diberitahu ayahnya tentang mimpi perintah penyembelihan kurban?', 'opsi_a' => 'Menolak dan melarikan diri ke dalam gua di gunung', 'opsi_b' => 'Meminta waktu pertimbangan selama satu bulan penuh', 'opsi_c' => 'Menerima dengan ikhlas dan meminta ayahnya melaksanakan perintah Allah tanpa ragu', 'opsi_d' => 'Menangis ketakutan dan meminta perlindungan kepada penduduk suku Jurhum', 'jawaban_benar' => 'C'],
                ],
            ],
            // 9. ISHAQ
            [
                'urutan_nabi' => 9,
                'nama_nabi' => 'Ishaq',
                'deskripsi' => 'Anak Nabi Ibrahim yang diberkahi keturunan para nabi.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Kelahiran yang Dikabarkan Malaikat di Usia Senja Siti Sarah',
                        'teks' => "Nabi Ishaq a.s. adalah putra kedua Nabi Ibrahim dari istri pertamanya, Siti Sarah. Kelahiran Ishaq sudah diprediksi dan dikabarkan langsung oleh para malaikat ketika mereka bertamu ke rumah Ibrahim dalam perjalanan untuk melanda negeri Sodom. Meskipun Siti Sarah sudah lanjut usia dan mandul, kekuasaan mutlak Allah mewujudkan mukjizat kelahiran anak yang penuh keberkahan ini, membuat Sarah tertawa takjub.",
                        'audio_path' => 'audio/ishaq_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Kehidupan dan Dakwah di Wilayah Kan\'an (Palestina)',
                        'teks' => "Nabi Ishaq a.s. tumbuh menjadi seorang nabi yang sangat santun, berilmu tinggi, dan penuh ketenangan jiwa. Ia menetap dan berdakwah di wilayah Kan'an (Palestina). Melalui garis keturunan Nabi Ishaq a.s., Allah melahirkan banyak nabi besar selanjutnya yang membawa risalah tauhid ke bumi, di antaranya putranya sendiri Nabi Yakub a.s., cucunya Nabi Yusuf a.s., hingga seluruh garis kenabian Bani Israil.",
                        'audio_path' => 'audio/ishaq_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Keturunan yang Mulia dan Hikmah',
                        'teks' => "Nabi Ishaq diberkahi dengan keturunan yang terus menerus menjadi nabi dan pemimpin bagi umat. Kesabarannya dalam menghadapi ujian dan keberkahannya dalam berdoa menjadikan namanya harum sepanjang masa. Allah menganugerahkan kepadanya anak-anak yang saleh dan menjadi teladan bagi umat manusia.",
                        'audio_path' => 'audio/ishaq_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_ishaq',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Siapakah ibu kandung dari Nabi Ishaq a.s.?', 'opsi_a' => 'Siti Hajar', 'opsi_b' => 'Siti Sarah', 'opsi_c' => 'Siti Khadijah', 'opsi_d' => 'Siti Aisyah', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Melalui jalur anak siapakah dari Nabi Ibrahim a.s. lahirnya para nabi dari kalangan Bani Israil?', 'opsi_a' => 'Nabi Ismail a.s.', 'opsi_b' => 'Nabi Ishaq a.s.', 'opsi_c' => 'Nabi Luth a.s.', 'opsi_d' => 'Nabi Ayyub a.s.', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Di wilayah geografis manakah pusat dakwah dan tempat tinggal utama Nabi Ishaq a.s. semasa hidupnya?', 'opsi_a' => 'Wilayah Kan\'an (Palestina)', 'opsi_b' => 'Lembah Sungai Nil di Mesir', 'opsi_c' => 'Kota Mekkah Al-Mukarramah', 'opsi_d' => 'Wilayah Babilonia di Irak', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Bagaimana cara malaikat menyampaikan kabar kelahiran Nabi Ishaq kepada Nabi Ibrahim dan istrinya?', 'opsi_a' => 'Melalui mimpi yang berulang selama tiga malam berturut-turut', 'opsi_b' => 'Disampaikan langsung saat para malaikat bertamu ke rumah Ibrahim dan Sarah', 'opsi_c' => 'Melalui suara gaib dari balik pohon kurma di halaman rumah', 'opsi_d' => 'Dituliskan di atas lembaran batu putih oleh malaikat Jibril', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Sifat mulia apa yang sering disematkan kepada sosok Nabi Ishaq a.s. dalam literatur sejarah dan tafsir Islam?', 'opsi_a' => 'Ketegasan militer yang luar biasa dalam memimpin perang', 'opsi_b' => 'Ketenangan, kesantunan, dan limpahan hikmah ilmu pengetahuan', 'opsi_c' => 'Kekayaan harta benda yang melampaui raja-raja di masanya', 'opsi_d' => 'Keahlian dalam mengobati segala macam penyakit berat manusia', 'jawaban_benar' => 'B'],
                ],
            ],
            // 10. YAKUB
            [
                'urutan_nabi' => 10,
                'nama_nabi' => 'Yaqub',
                'deskripsi' => 'Nabi bergelar Israil yang memiliki kesabaran tinggi atas cobaan keluarganya.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Sifat Penyabar dan Gelar Israil',
                        'teks' => "Nabi Yakub a.s. adalah putra Nabi Ishaq dan cucu Nabi Ibrahim. Ia memiliki julukan atau gelar Israil (yang berarti hamba pilihan Allah). Nabi Yakub dikenal sebagai sosok ayah yang sangat bijaksana, penyabar, dan sangat mencintai anak-anaknya, terutama dua orang putranya yang lahir dari Rahel, yaitu Yusuf dan Benjamin.",
                        'audio_path' => 'audio/yaqub_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Ujian Berat Kehilangan Yusuf dan Ketabahan Hati (Shabr Jamil)',
                        'teks' => "Nabi Yakub diuji dengan kesedihan mendalam ketika anak-anaknya yang lain (dari istri berbeda) iri dan membuang Yusuf ke dalam sumur. Mereka datang dengan berlumuran darah palsu dan berdusta bahwa Yusuf telah diterkam serigala. Meskipun Yakub mengetahui itu adalah kebohongan, ia memilih bersabar dengan kesabaran yang indah (shabr jamil). Kesedihannya membuat matanya menjadi putih (buta).",
                        'audio_path' => 'audio/yaqub_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Pertemuan Kembali di Mesir dan Pulangnya Penglihatan',
                        'teks' => "Setelah puluhan tahun, anak-anak Yakub pergi ke Mesir untuk meminta bantuan pangan. Mereka tidak menyangka bahwa penguasa Mesir adalah Yusuf. Atas petunjuk Yusuf, mereka membawa ayah mereka ke Mesir. Ketika baju gamis Yusuf diusapkan ke wajah Yakub, atas izin Allah penglihatan Yakub kembali normal seketika. Seluruh keluarganya akhirnya berkumpul dan bersujud syukur di hadapan Allah di Mesir.",
                        'audio_path' => 'audio/yaqub_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_yaqub',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Siapakah ayah kandung dari Nabi Yakub a.s.?', 'opsi_a' => 'Nabi Ibrahim a.s.', 'opsi_b' => 'Nabi Ismail a.s.', 'opsi_c' => 'Nabi Ishaq a.s.', 'opsi_d' => 'Nabi Luth a.s.', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Apa gelar mulia lain yang disematkan kepada Nabi Yakub a.s. yang juga menjadi asal-usul sebutan Bani Israil?', 'opsi_a' => 'Al-Amin', 'opsi_b' => 'Khalilullah', 'opsi_c' => 'Israil', 'opsi_d' => 'Zun-Nurain', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Apa alasan utama saudara-saudara Yusuf merasa iri hati kepada Nabi Yusuf a.s. di masa kecil mereka?', 'opsi_a' => 'Karena Yusuf diangkat menjadi pemimpin keluarga terlebih dahulu', 'opsi_b' => 'Karena mereka mengira ayah mereka (Yakub) lebih mencintai Yusuf dan adiknya (Benjamin)', 'opsi_c' => 'Karena Yusuf menolak membantu pekerjaan ladang bersama mereka', 'opsi_d' => 'Karena Yusuf mendapatkan warisan harta yang lebih banyak dari kakeknya', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Apa reaksi fisik yang dialami oleh Nabi Yakub a.s. akibat terlalu lama menangisi kepergian Nabi Yusuf?', 'opsi_a' => 'Tubuhnya menjadi lumpuh total tidak bisa berjalan', 'opsi_b' => 'Pendengarannya menjadi tuli total', 'opsi_c' => 'Penglihatannya hilang (buta) karena sering menangis menahan rindu', 'opsi_d' => 'Rambutnya berubah memutih seketika dalam satu malam', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Bagaimana cara penglihatan Nabi Yakub a.s. akhirnya bisa pulih kembali saat tiba di Mesir?', 'opsi_a' => 'Disembuhkan dengan ramuan obat herbal buatan para tabib istana Mesir', 'opsi_b' => 'Dengan mengusapkan baju gamis Nabi Yusuf ke wajahnya atas izin Allah SWT', 'opsi_c' => 'Terkena pancaran cahaya suci dari istana raja Mesir', 'opsi_d' => 'Berdoa di bawah terik matahari pagi di tepi sungai Nil', 'jawaban_benar' => 'B'],
                ],
            ],
            // 11. YUSUF
            [
                'urutan_nabi' => 11,
                'nama_nabi' => 'Yusuf',
                'deskripsi' => 'Nabi yang tampan, ahli takwil mimpi, dan penguasa di Mesir.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Mimpi Sebelas Bintang dan Dibuang ke Sumur',
                        'teks' => "Nabi Yusuf a.s. dikaruniai ketampanan luar biasa serta keahlian menakwilkan mimpi sejak dini. Suatu hari, ia menceritakan mimpinya kepada ayahnya: \"Aku bermimpi melihat sebelas bintang, matahari dan bulan; kulihat semuanya sujud kepadaku.\" (QS. Yusuf: 4). Yakub berpesan merahasiakannya karena khawatir iri. Namun, rasa iri saudara-saudaranya mendorong mereka memasukkan Yusuf ke dalam sumur gelap.",
                        'audio_path' => 'audio/yusuf_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Ditemukan Musafir, Dijual ke Istana, dan Fitnah Zulaikha',
                        'teks' => "Yusuf ditemukan oleh kafilah musafir, dibawa ke Mesir dan dijual sebagai budak kepada pejabat istana Al-Aziz (Qithfir). Yusuf tumbuh di istana. Istri Al-Aziz (Zulaikha) tergoda dan mencoba merayunya. Ketika Yusuf menolak dan berlari, bajunya robek dari belakang. Bukti ini membebaskan Yusuf dari fitnah, namun ia tetap dipenjara selama bertahun-tahun demi menjaga kehormatan.",
                        'audio_path' => 'audio/yusuf_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Menakwilkan Mimpi Raja dan Diangkat Menjadi Penguasa Mesir',
                        'teks' => "Di penjara, Yusuf menakwilkan mimpi raja tentang tujuh sapi gemuk dimakan tujuh kurus dan tujuh bulir hijau serta kering. Karena kagum, raja membebaskannya dan mengangkatnya sebagai bendaharawan negara (menteri ekonomi) yang mengendalikan pangan Mesir menghadapi paceklik. Saat saudara-saudaranya datang meminta gandum, Yusuf membuka jati diri dan memaafkan mereka dengan lapang dada.",
                        'audio_path' => 'audio/yusuf_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_yusuf',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Apa isi mimpi masa kecil Nabi Yusuf a.s. yang ia ceritakan kepada ayahnya dalam Surah Yusuf ayat 4?', 'opsi_a' => 'Melihat sebelas bintang, matahari, dan bulan bersujud kepadanya', 'opsi_b' => 'Melihat dua ekor singa emas menjaga gerbang istana kerajaan', 'opsi_c' => 'Melihat aliran sungai susu yang membelah padang pasir luas', 'opsi_d' => 'Melihat tongkat kayunya berubah menjadi ular raksasa yang menakutkan', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Siapakah pejabat tinggi istana Mesir yang membeli Nabi Yusuf dari kafilah pedagang dan membawanya ke rumahnya?', 'opsi_a' => 'Raja Fir\'aun Ramses II', 'opsi_b' => 'Al-Aziz (Qithfir)', 'opsi_c' => 'Panglima perang utama istana Mesir Kuno', 'opsi_d' => 'Perdana Menteri Mesir pengelola lumbung pangan', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Bukti hukum apa yang menunjukkan bahwa Nabi Yusuf tidak bersalah saat difitnah oleh istri Al-Aziz (Zulaikha)?', 'opsi_a' => 'Kesaksian langsung dari para pelayan istana yang melihat kejadian', 'opsi_b' => 'Pengakuan jujur dari Zulaikha sendiri di hadapan hakim istana', 'opsi_c' => 'Baju gamis Yusuf yang robek dari bagian belakang', 'opsi_d' => 'Cap jempol di atas lembaran surat keputusan pengadilan', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Keahlian khusus apa yang membuat Nabi Yusuf dibebaskan dari penjara dan diangkat menjadi pengelola keuangan Mesir oleh Raja?', 'opsi_a' => 'Keahlian membuat senjata perang modern dan strategi benteng', 'opsi_b' => 'Kemampuan menakwilkan mimpi dengan sangat akurat dan bijaksana', 'opsi_c' => 'Keahlian dalam bidang kedokteran meracik obat wabah penyakit', 'opsi_d' => 'Kemampuan memimpin pasukan berkuda menaklukkan wilayah tetangga', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Sikap mental apa yang ditunjukkan oleh Nabi Yusuf a.s. ketika saudara-saudaranya yang dulu mendzaliminya datang meminta pertolongan pangan?', 'opsi_a' => 'Menghukum mereka dengan kerja paksa seumur hidup di tambang', 'opsi_b' => 'Mengusir mereka kembali ke negeri Kan\'an tanpa memberikan gandum', 'opsi_c' => 'Memaafkan seluruh kesalahan masa lalu mereka dengan lapang dada tanpa dendam', 'opsi_d' => 'Meminta tebusan harta benda yang sangat mahal sebagai syarat bantuan', 'jawaban_benar' => 'C'],
                ],
            ],
            // 12. AYYUB
            [
                'urutan_nabi' => 12,
                'nama_nabi' => 'Ayyub',
                'deskripsi' => 'Nabi teladan dalam kesabaran menghadapi cobaan penyakit berat.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Kekayaan Melimpah, Keluarga Harmonis, dan Syukur yang Tinggi',
                        'teks' => "Nabi Ayyub a.s. adalah seorang nabi yang dikenal memiliki harta kekayaan sangat melimpah, ternak tak terhitung, serta keturunan dan keluarga besar yang harmonis. Meskipun hidup di tengah kenikmatan duniawi, Nabi Ayyub tidak pernah terbuai oleh kesombongan. Ia justru menjadi hamba Allah yang paling rajin bersyukur, dermawan, serta sangat peduli membantu fakir miskin, anak yatim, dan musafir.",
                        'audio_path' => 'audio/ayyub_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Ujian Berat Kehilangan Harta, Anak, dan Kesehatan Fisik',
                        'teks' => "Untuk menguji keimanan sejati, Iblis memohon izin menggoda Ayyub. Allah mengizinkan ujian menimpa harta dan fisiknya. Seketika itu, seluruh ternak Ayyub musnah, anak-anaknya meninggal dunia, dan tubuhnya terserang penyakit kulit parah (borok menahun) yang mengeluarkan bau tidak sedap. Akibat penyakitnya, Ayyub dikucilkan dari masyarakat kecuali istrinya yang setia, Rahmah.",
                        'audio_path' => 'audio/ayyub_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Kesembuhan Ajaib dengan Air Sejuk',
                        'teks' => "Selama bertahun-tahun menanggung penderitaan, Nabi Ayyub tidak pernah mengeluh. Ketika ujian mencapai puncaknya, beliau berdoa: \"Rabbanaa ad-durru wa anta arhamur rahimin\" (QS. Al-Anbiya: 83). Allah mengabulkannya dan memerintahkan: \"Hantamkanlah kakimu; inilah air sejuk untuk mandi dan untuk minum.\" (QS. Sad: 42). Ayyub menghentakkan kaki, terpancarlah mata air yang menyembuhkan seluruh penyakitnya, dan Allah melipatgandakan harta serta keluarganya.",
                        'audio_path' => 'audio/ayyub_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_ayyub',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Sifat terpuji apa yang paling melekat dan menjadi teladan utama dari sosok Nabi Ayyub a.s. dalam sejarah Islam?', 'opsi_a' => 'Keberanian luar biasa dalam berperang di garis depan musuh', 'opsi_b' => 'Kesabaran yang mutlak dalam menerima ujian berat bertubi-tubi', 'opsi_c' => 'Kecerdasan tinggi dalam mengatur sistem hukum politik negara', 'opsi_d' => 'Ketegasan dalam menegakkan aturan pidana bagi pelanggar hukum', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Ujian apa yang pertama kali menimpa Nabi Ayyub a.s. atas izin Allah SWT dari serangkaian ujian Iblis?', 'opsi_a' => 'Diusir oleh raja yang kejam keluar dari batas wilayah negeri', 'opsi_b' => 'Kehilangan seluruh harta benda, ternak, dan meninggalnya anak-anaknya', 'opsi_c' => 'Dijebloskan ke dalam penjara bawah tanah istana yang sangat gelap', 'opsi_d' => 'Kehilangan kemampuan berbicara dan mendengar selama bertahun-tahun', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Penyakit fisik apa yang diderita oleh Nabi Ayyub a.s. selama masa ujian panjangnya di pengasingan?', 'opsi_a' => 'Penyakit buta permanen pada kedua bola matanya', 'opsi_b' => 'Penyakit kulit borok parah di sekujur tubuhnya hingga dikucilkan', 'opsi_c' => 'Kelumpuhan total pada kedua kaki dan tangannya', 'opsi_d' => 'Gangguan pernapasan akut yang melelahkan fisik', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Siapakah anggota keluarga yang tetap setia mendampingi, merawat, dan melayani Nabi Ayyub selama masa-masa sulitnya?', 'opsi_a' => 'Istrinya (Rahmah)', 'opsi_b' => 'Anak sulungnya', 'opsi_c' => 'Paman kandungnya', 'opsi_d' => 'Sahabat setianya dari kota sebelah', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Bagaimana cara Allah SWT menyembuhkan penyakit dan memulihkan kondisi Nabi Ayyub a.s.?', 'opsi_a' => 'Melalui ramuan daun surga khusus yang dibawa malaikat Jibril', 'opsi_b' => 'Dengan menghentakkan kaki ke tanah hingga terpancar air sejuk untuk mandi dan minum', 'opsi_c' => 'Disembuhkan secara gaib saat sedang tidur lelap di malam hari', 'opsi_d' => 'Dengan meminum air dari aliran sungai Nil di Mesir', 'jawaban_benar' => 'B'],
                ],
            ],
            // 13. SYUAIB
            [
                'urutan_nabi' => 13,
                'nama_nabi' => 'Syuaib',
                'deskripsi' => 'Nabi yang berdakwah meluruskan kecurangan dalam perdagangan.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Pengutusan ke Penduduk Madyan dan Aikah',
                        'teks' => "Nabi Syu'aib a.s. diutus oleh Allah SWT kepada kaum Madyan (serta penduduk Aikah), sebuah masyarakat yang tinggal di wilayah persimpangan jalur perdagangan penting di barat laut Semenanjung Arab. Masyarakat Madyan adalah kaum pedagang yang makmur secara ekonomi, namun rusak secara moral dan etika perniagaan.",
                        'audio_path' => 'audio/syuaib_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Praktik Curang Timbangan dan Penolakan Dakwah',
                        'teks' => "Kejahatan sosial ekonomi terbesar di Madyan adalah kecurangan dalam takaran dan timbangan: mereka curang saat menjual, namun meminta takaran pas saat membeli. Mereka juga gemar merampok kafilah dagang. Nabi Syu'aib menyeru mereka untuk bertakwa, menyempurnakan takaran, dan tidak membuat kerusakan. Namun, kaum Madyan menolak dengan mengejek, mengancam akan merajam dan mengusir Syu'aib.",
                        'audio_path' => 'audio/syuaib_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Tiga Bentuk Azab Dahsyat yang Membinasakan Madyan',
                        'teks' => "Karena melampaui batas, Allah menurunkan azab bertubi-tubi: gempa bumi dahsyat yang mengguncang kota hingga mereka mati bergelimpangan; azab hari awan panas yang membakar (yaum azh-zullah); serta sambaran petir dan teriakan keras (shaihah) yang mencabut nyawa mereka. Nabi Syu'aib dan para pengikutnya diselamatkan.",
                        'audio_path' => 'audio/syuaib_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_syuaib',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Kepada penduduk negeri manakah Nabi Syu\'aib a.s. diutus untuk menyampaikan risalah tauhid dan perbaikan sosial?', 'opsi_a' => 'Penduduk negeri Sodom', 'opsi_b' => 'Penduduk Madyan dan Aikah', 'opsi_c' => 'Penduduk Babilonia kuno', 'opsi_d' => 'Penduduk negeri Saba\'', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Apa bentuk kejahatan sosial ekonomi utama yang sering dilakukan secara sengaja oleh masyarakat Madyan?', 'opsi_a' => 'Melakukan praktik riba berlipat ganda dan monopoli emas perdagangan', 'opsi_b' => 'Curang dalam takaran dan timbangan barang dagangan serta merampok di jalan', 'opsi_c' => 'Menjual barang-barang palsu beracun kepada musafir asing', 'opsi_d' => 'Mengambil pajak rakyat secara paksa dengan jumlah yang berlebihan', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Bagaimana reaksi kaum Madyan saat mendengarkan nasihat dan dakwah kebaikan dari Nabi Syu\'aib a.s.?', 'opsi_a' => 'Mereka langsung bertaubat dan memperbaiki sistem perdagangan pasar', 'opsi_b' => 'Mereka mengejek, menolak, dan mengancam akan merajam Syu\'aib serta pengikutnya', 'opsi_c' => 'Mereka meminta mukjizat berupa turunnya makanan mewah dari langit', 'opsi_d' => 'Mereka mengangkat Syu\'aib menjadi pengawas utama pasar kota', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Sifat terpuji apa yang sering dipuji oleh Allah melalui karakter Nabi Syu\'aib saat beliau berdakwah dengan santun?', 'opsi_a' => 'Ketegasan militer dalam memimpin barisan pertahanan kota', 'opsi_b' => 'Kepandaian dalam meracik obat-obatan herbal penyembuh penyakit', 'opsi_c' => 'Kejujuran, kesantunan, dan rasa kasih sayang yang tulus kepada umatnya', 'opsi_d' => 'Kekayaan harta benda yang dibagikan kepada fakir miskin kota Madyan', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Bentuk azab apa yang akhirnya membinasakan penduduk Madyan yang durhaka berdasarkan ayat Al-Qur\'an?', 'opsi_a' => 'Gempa bumi dahsyat, sambaran petir, dan azab hari awan panas yang membakar', 'opsi_b' => 'Badai salju abadi yang membekukan seluruh kota dalam semalam', 'opsi_c' => 'Wabah penyakit sampar menular yang menyebar cepat di pasar', 'opsi_d' => 'Banjir bandang dari jebolnya bendungan besar di hulu lembah', 'jawaban_benar' => 'A'],
                ],
            ],
            // 14. MUSA
            [
                'urutan_nabi' => 14,
                'nama_nabi' => 'Musa',
                'deskripsi' => 'Nabi Kalimullah yang membelah Laut Merah dan melawan Firaun.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Kelahiran, Dihanyutkan di Sungai Nil, dan Asuhan Istana Firaun',
                        'teks' => "Nabi Musa a.s. lahir pada masa Firaun mengeluarkan titah membunuh setiap bayi laki-laki Bani Israil. Atas ilham Allah, ibu Musa menghanyutkan bayi Musa dalam peti kayu ke Sungai Nil. Takdir Allah mempertemukan peti tersebut dengan istri Firaun (Asiyah) yang terpesona dan mengangkat Musa sebagai anak angkat di istana musuh besar.",
                        'audio_path' => 'audio/musa_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Pelarian ke Madyan dan Pengangkatan Kenabian di Lembah Tuwa',
                        'teks' => "Setelah dewasa, Musa membela Bani Israil dan memukul seorang pejabat Mesir hingga mati. Ia melarikan diri ke Madyan, tinggal bertahun-tahun menggembalakan domba Nabi Syu'aib. Dalam perjalanan pulang, di Lembah Suci Tuwa, Allah memanggilnya, mengangkatnya menjadi rasul, dan menganugerahkan mukjizat tongkat menjadi ular serta tangan bersinar putih.",
                        'audio_path' => 'audio/musa_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Konfrontasi dengan Penyihir Firaun dan Terbelahnya Laut Merah',
                        'teks' => "Musa dan Harun mendatangi Firaun, menantang para penyihir. Tongkat Musa menelan seluruh tali dan tongkat sihir mereka, sehingga penyihir bersujud dan beriman. Firaun murka. Musa memimpin Bani Israil keluar Mesir; Firaun mengejar hingga tepi Laut Merah. Atas wahyu Allah, Musa memukulkan tongkatnya, laut terbelah menjadi jalan kering. Bani Israil selamat, sedangkan Firaun dan pasukannya tenggelam.",
                        'audio_path' => 'audio/musa_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_musa',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Siapakah ratu istana Mesir yang berhati mulia dan merawat bayi Musa setelah ditemukan di aliran Sungai Nil?', 'opsi_a' => 'Zulaikha', 'opsi_b' => 'Asiyah (istri Fir\'aun)', 'opsi_c' => 'Ratu Balqis dari Saba\'', 'opsi_d' => 'Siti Sarah', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Di wilayah manakah Nabi Musa tinggal, bekerja, dan menikah selama masa pelariannya dari kejaran istana Mesir?', 'opsi_a' => 'Wilayah Madyan', 'opsi_b' => 'Kota Babilonia kuno', 'opsi_c' => 'Tanah Kan\'an (Palestina)', 'opsi_d' => 'Wilayah Yaman Selatan', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Apa dua mukjizat utama yang diberikan Allah kepada Nabi Musa saat pertama kali diangkat menjadi rasul di Lembah Suci Tuwa?', 'opsi_a' => 'Bisa berbicara dengan burung dan angin utara', 'opsi_b' => 'Tongkat yang berubah menjadi ular besar dan tangan yang bercahaya putih', 'opsi_c' => 'Mampu menghidupkan orang mati dan menyembuhkan penyakit kusta berat', 'opsi_d' => 'Memiliki baju kebal senjata perang dan pedang bercahaya', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Siapakah tokoh yang mendampingi Nabi Musa a.s. saat menghadap, berdebat, dan berdakwah kepada Raja Fir\'aun di istana?', 'opsi_a' => 'Nabi Ibrahim a.s.', 'opsi_b' => 'Nabi Harun a.s. (saudaranya)', 'opsi_c' => 'Nabi Yusuf a.s.', 'opsi_d' => 'Nabi Khidir a.s.', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Mukjizat apa yang menyelamatkan Nabi Musa dan pengikutnya dari kejaran pasukan berkuda Raja Fir\'aun di tepi pantai?', 'opsi_a' => 'Terbelahnya Laut Merah menjadi jalan kering saat tongkat dipukulkan', 'opsi_b' => 'Turunnya hujan api dari langit yang membakar seluruh pasukan musuh', 'opsi_c' => 'Munculnya kabut tebal ajaib yang membutakan pandangan tentara Mesir', 'opsi_d' => 'Terangkatnya daratan bumi menjadi gunung tinggi seketika di hadapan musuh', 'jawaban_benar' => 'A'],
                ],
            ],
            // 15. HARUN
            [
                'urutan_nabi' => 15,
                'nama_nabi' => 'Harun',
                'deskripsi' => 'Nabi yang fasih berbicara mendampingi saudaranya, Musa.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Anugerah Lidah yang Fasih sebagai Pendamping Musa',
                        'teks' => "Nabi Harun a.s. adalah kakak kandung Nabi Musa. Ketika Allah memerintahkan Musa mendatangi Firaun, Musa memohon agar Allah menyertakan Harun sebagai pembantu dan juru bicara karena lidah Musa kurang fasih. Allah mengabulkan karena Harun memiliki kepiawaian berbicara yang jelas, terstruktur, dan sangat fasih.",
                        'audio_path' => 'audio/harun_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Kepemimpinan Sementara Bani Israil di Gunung Sinai',
                        'teks' => "Ketika Musa pergi memenuhi panggilan Allah selama 40 hari di Gunung Sinai, Harun ditunjuk untuk memimpin dan menjaga Bani Israil. Di masa itu, Samiri memanfaatkan kesempatan membuat patung anak sapi emas yang bisa mengeluarkan suara, dan sebagian Bani Israil mulai menyembahnya.",
                        'audio_path' => 'audio/harun_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Perjuangan Mencegah Kesesatan dan Kemarahan Nabi Musa',
                        'teks' => "Harun berjuang keras melarang dan memperingatkan kaumnya agar tidak menyembah patung sapi, namun mereka hampir membunuhnya. Ketika Musa kembali dan murka, Harun menjelaskan keadaannya dengan jujur. Musa memaafkan Harun dan memohon ampun kepada Allah. Harun tetap menjadi nabi yang mulia dan setia.",
                        'audio_path' => 'audio/harun_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_harun',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Apa hubungan kekerabatan antara Nabi Harun a.s. dan Nabi Musa a.s.?', 'opsi_a' => 'Paman dan keponakan kandung', 'opsi_b' => 'Kakak dan adik kandung', 'opsi_c' => 'Sepupu sekali dari jalur paman', 'opsi_d' => 'Ayah dan anak angkat istana', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Alasan utama apa yang membuat Nabi Musa memohon kepada Allah agar menyertakan Nabi Harun dalam tugas dakwahnya ke istana Fir\'aun?', 'opsi_a' => 'Karena Harun memiliki kekuatan fisik pasukan militer yang kuat', 'opsi_b' => 'Karena Harun memiliki lidah yang lebih fasih, jelas, dan lancar berbicara', 'opsi_c' => 'Karena Harun sudah berpengalaman menjadi menteri utama istana Mesir', 'opsi_d' => 'Karena Harun memiliki banyak pengikut setia di kota Memphis', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Tugas penting apa yang diamanahkan kepada Nabi Harun ketika Nabi Musa pergi mendaki Gunung Sinai selama 40 hari?', 'opsi_a' => 'Menjaga harta rampasan perang milik Bani Israil di kemah', 'opsi_b' => 'Memimpin, menjaga, dan mengawasi Bani Israil yang ditinggalkan di dataran rendah', 'opsi_c' => 'Membangun istana batu baru yang megah di padang pasir Sinai', 'opsi_d' => 'Bernegosiasi dagang dengan raja-raja tetangga wilayah Mesir', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Berhala apa yang berhasil diprovokasi oleh Samiri untuk disembah oleh sebagian Bani Israil saat ditinggal Nabi Musa?', 'opsi_a' => 'Patung anak sapi yang dibuat dari leburan perhiasan emas', 'opsi_b' => 'Patung burung rajawali raksasa bermata permata', 'opsi_c' => 'Patung ular naga besar berkepala tiga', 'opsi_d' => 'Patung matahari dari batu pualam putih', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Bagaimana sikap Nabi Harun saat menghadapi gelombang pembangkangan kaumnya yang menyembah patung anak sapi?', 'opsi_a' => 'Ikut serta menyembah patung agar tidak dimusuhi oleh kaumnya', 'opsi_b' => 'Melarikan diri seorang diri menyelamatkan diri ke tengah gurun pasir', 'opsi_c' => 'Berjuang keras melarang, memperingatkan, dan mencegah mereka dari kesesatan tersebut', 'opsi_d' => 'Mendiamkan perbuatan mereka tanpa memberikan nasihat apapun', 'jawaban_benar' => 'C'],
                ],
            ],
            // 16. ZULKIFLI
            [
                'urutan_nabi' => 16,
                'nama_nabi' => 'Zulkifli',
                'deskripsi' => 'Nabi yang sangat sabar dan selalu menepati janji kepemimpinannya.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Asal-usul Nama dan Janji Kepemimpinan',
                        'teks' => "Nabi Zulkifli a.s. (diyakini putra Nabi Ayyub, Basyar) dikenal sebagai sosok pemuda saleh. Nama Zulkifli berarti 'Yang memiliki kesanggupan' atau 'Yang menepati janji'. Ia pernah berjanji kepada seorang raja saleh: jika diberi amanah, ia akan berpuasa di siang hari, beribadah di malam hari, dan tidak pernah marah dalam memutuskan perkara.",
                        'audio_path' => 'audio/zulkifli_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Kepemimpinan yang Adil dan Konsistensi Sifat Sabar',
                        'teks' => "Karena kesanggupannya, ia diangkat menjadi pemimpin dan nabi bagi kaumnya. Selama masa kepemimpinannya, Zulkifli memimpin dengan bijaksana, mendengarkan keluhan rakyat dengan kepala dingin, tidak pernah marah meskipun diprovokasi. Konsistensinya menepati janji ibadah dan keadilan membuat kaumnya hidup dalam kedamaian dan kesejahteraan di bawah ridha Allah.",
                        'audio_path' => 'audio/zulkifli_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Teladan Kesabaran dan Amanah',
                        'teks' => "Nabi Zulkifli adalah contoh sempurna dalam menepati amanah. Ia tidak pernah menyalahgunakan kekuasaan dan selalu mengutamakan kepentingan rakyat. Kesabarannya dalam menghadapi berbagai masalah dan keteguhannya dalam beribadah menjadikannya teladan bagi para pemimpin setelahnya.",
                        'audio_path' => 'audio/zulkifli_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_zulkifli',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Apa arti harfiah dari nama julukan **Zulkifli** yang disematkan kepada nabi Allah ini dalam sejarah kenabian?', 'opsi_a' => 'Yang memiliki kesanggupan / yang menepati janji', 'opsi_b' => 'Yang memiliki kekayaan harta benda melimpah ruah', 'opsi_c' => 'Yang memiliki mukjizat tongkat sakti penakluk musuh', 'opsi_d' => 'Yang memiliki umur paling panjang di antara umatnya', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Syarat berat apa yang harus dipenuhi oleh Zulkifli ketika diminta oleh Raja sebelumnya untuk menggantikan posisinya memimpin kaum?', 'opsi_a' => 'Sanggup memperluas wilayah kekuasaan militer kerajaan', 'opsi_b' => 'Sanggup berpuasa di siang hari, salat di malam hari, dan tidak mudah marah', 'opsi_c' => 'Sanggup membayar pajak kerajaan kepada seluruh fakir miskin', 'opsi_d' => 'Sanggup membangun istana baru dari batu pualam putih', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Sifat utama apakah yang paling ditonjolkan oleh Nabi Zulkifli a.s. dalam catatan sejarah kenabian Islam?', 'opsi_a' => 'Keberanian bertempur di garis depan medan perang', 'opsi_b' => 'Kesabaran luar biasa dan konsistensi menepati janji amanah', 'opsi_c' => 'Keahlian dalam bidang arsitektur tata kota modern', 'opsi_d' => 'Kemampuan meramal masa depan kemenangan politik kerajaan', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Siapakah tokoh yang diyakini oleh sebagian besar sejarawan sebagai ayah kandung dari Nabi Zulkifli a.s.?', 'opsi_a' => 'Nabi Musa a.s.', 'opsi_b' => 'Nabi Ayyub a.s.', 'opsi_c' => 'Nabi Ibrahim a.s.', 'opsi_d' => 'Nabi Daud a.s.', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Bagaimana cara Nabi Zulkifli memperlakukan rakyat yang datang kepadanya untuk meminta keadilan hukum?', 'opsi_a' => 'Dengan mendengarkan secara adil, sabar, dan tidak pernah terpancing emosi amarah', 'opsi_b' => 'Dengan meminta imbalan harta benda yang mahal sebagai syarat sidang', 'opsi_c' => 'Dengan menyerahkan seluruh keputusan kepada pengadilan militer istana', 'opsi_d' => 'Dengan menolak laporan kecil dan hanya mengurus masalah besar kerajaan', 'jawaban_benar' => 'A'],
                ],
            ],
            // 17. DAUD
            [
                'urutan_nabi' => 17,
                'nama_nabi' => 'Daud',
                'deskripsi' => 'Nabi raja yang memiliki suara merdu dan melunakkan besi.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Prajurit Muda Mengalahkan Jalut dan Karunia Kerajaan',
                        'teks' => "Nabi Daud a.s. mulanya adalah prajurit muda Bani Israil yang bergabung dengan pasukan Raja Thalut melawan raksasa Jalut (Goliath). Dengan ketapel dan batu kerikil, Daud melempar tepat ke dahi Jalut hingga tewas. Berkat keberanian ini, setelah Thalut wafat, Allah menganugerahkan kepada Daud kekuasaan kerajaan dan hikmah kenabian.",
                        'audio_path' => 'audio/daud_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Mukjizat Melunakkan Besi dan Suara Merdu Zabur',
                        'teks' => "Allah melimpahkan mukjizat kepada Daud: besi dilunakkan di tangannya bagaikan lilin tanpa api, sehingga ia dapat membuat baju besi pelindung perang. Selain itu, Allah menurunkan Kitab Zabur dan menganugerahkan suara yang sangat merdu; ketika Daud melantunkan tasbih, burung-burung di udara dan gunung-gunung ikut bertasbih bersamanya.",
                        'audio_path' => 'audio/daud_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Keadilan dan Kebijaksanaan Raja Daud',
                        'teks' => "Nabi Daud adalah raja yang adil dan bijaksana. Ia memutuskan perkara dengan hikmah dan tidak pernah menzalimi rakyatnya. Di bawah kepemimpinannya, Bani Israil merasakan keamanan dan kemakmuran. Daud juga terkenal dengan ibadahnya yang tekun, puasa selang-seling, dan shalat malam yang panjang.",
                        'audio_path' => 'audio/daud_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_daud',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Senjata sederhana apa yang digunakan oleh Nabi Daud saat berhasil merobohkan panglima raksasa Jalut (Goliath)?', 'opsi_a' => 'Pedang bermata dua yang tajam', 'opsi_b' => 'Panah beracun jarak jauh', 'opsi_c' => 'Ketapel (katapel) pelempar batu kecil', 'opsi_d' => 'Tombak panjang berlapis baja murni', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Kitab suci apakah yang diturunkan oleh Allah SWT kepada Nabi Daud a.s. untuk membimbing kaumnya?', 'opsi_a' => 'Kitab Taurat', 'opsi_b' => 'Kitab Zabur', 'opsi_c' => 'Kitab Injil', 'opsi_d' => 'Kitab Suhuf Ibrahim', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Apa mukjizat spesifik yang diberikan Allah kepada Nabi Daud terkait pengolahan bahan logam keras?', 'opsi_a' => 'Mampu mengubah batu kali biasa menjadi emas murni batangan', 'opsi_b' => 'Besi dilunakkan di tangannya tanpa api untuk membuat baju besi pelindung perang', 'opsi_c' => 'Mampu melebur pasir gurun menjadi kaca bening dalam sedetik', 'opsi_d' => 'Mampu membuat senjata api kuno dari lahar gunung berapi', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Makhluk apa saja yang dikisahkan ikut bertasbih bersama Nabi Daud ketika ia melantunkan dzikir kitab sucinya?', 'opsi_a' => 'Ikan-ikan di dasar laut dalam', 'opsi_b' => 'Singa dan harimau di padang rumput', 'opsi_c' => 'Burung-burung di udara dan gunung-gunung karang', 'opsi_d' => 'Malaikat-malaikat penjaga pintu langit', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Sifat kepemimpinan apa yang dianugerahkan Allah kepada Nabi Daud selain kedudukan kenabiannya?', 'opsi_a' => 'Menjadi panglima seluruh bangsa di dunia', 'opsi_b' => 'Kekuasaan kerajaan yang kuat serta kebijaksanaan agung dalam memutuskan hukum', 'opsi_c' => 'Kekayaan harta yang tidak akan habis hingga akhir zaman', 'opsi_d' => 'Kemampuan menguasai seluruh bahasa hewan di bumi', 'jawaban_benar' => 'B'],
                ],
            ],
            // 18. SULAIMAN
            [
                'urutan_nabi' => 18,
                'nama_nabi' => 'Sulaiman',
                'deskripsi' => 'Nabi raja kaya raya yang dapat berbicara dengan hewan dan jin.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Pewaris Ilmu Daud dan Kemampuan Menguasai Angin serta Hewan',
                        'teks' => "Nabi Sulaiman a.s. adalah putra Nabi Daud. Sejak muda, ia mewarisi ilmu, hikmah, dan kenabian ayahnya, serta terkenal bijaksana dalam memutuskan perkara. Allah menundukkan kekuatan alam baginya: angin bertiup kencang atas perintahnya, dan Allah mengajarinya memahami bahasa berbagai jenis hewan dan burung.",
                        'audio_path' => 'audio/sulaiman_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Kerajaan Megah, Pasukan Jin, dan Peristiwa Ratu Balqis',
                        'teks' => "Sulaiman memiliki kerajaan termegah di bumi. Pasukannya terdiri dari manusia, jin yang patuh, dan barisan burung. Melalui burung Hud-hud, Sulaiman mendapat informasi tentang Ratu Balqis di Saba' yang memuja matahari. Sulaiman mengirim surat dakwah, dan Ratu Balqis datang ke istana, terpesona oleh mukjizat lantai kaca transparan, lalu tunduk beriman kepada Allah.",
                        'audio_path' => 'audio/sulaiman_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Kekuasaan dan Ibadah Nabi Sulaiman',
                        'teks' => "Meskipun diberi kekuasaan luar biasa, Sulaiman tetap rendah hati dan selalu bersyukur kepada Allah. Ia memanfaatkan kekuasaannya untuk menegakkan keadilan dan menyebarkan tauhid. Allah mengujinya dengan kehilangan sebagian kerajaan, namun Sulaiman selalu kembali bertaubat dan memohon ampun.",
                        'audio_path' => 'audio/sulaiman_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_sulaiman',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Siapakah ayah kandung dari Nabi Sulaiman a.s. yang juga merupakan seorang nabi dan raja agung Bani Israil?', 'opsi_a' => 'Nabi Musa a.s.', 'opsi_b' => 'Nabi Daud a.s.', 'opsi_c' => 'Nabi Ibrahim a.s.', 'opsi_d' => 'Nabi Yakub a.s.', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Makhluk gaib golongan apa yang ditundukkan Allah dan dipekerjakan untuk membantu pembangunan infrastruktur kerajaan Nabi Sulaiman?', 'opsi_a' => 'Golongan Malaikat langit', 'opsi_b' => 'Golongan Jin', 'opsi_c' => 'Golongan Syaitan yang bertaubat', 'opsi_d' => 'Golongan raksasa bumi purba', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Jenis burung apakah yang membawa kabar penting kepada Nabi Sulaiman tentang Ratu Balqis dan kerajaan Saba\'?', 'opsi_a' => 'Burung Merpati pos istana', 'opsi_b' => 'Burung Rajawali emas', 'opsi_c' => 'Burung Hud-hud', 'opsi_d' => 'Burung Elang hitam besar', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Apa keistimewaan transportasi udara yang dianugerahkan Allah kepada Nabi Sulaiman a.s. untuk mobilitas kerajaannya?', 'opsi_a' => 'Dapat menerbangkan karpet permadani besar dengan bantuan hembusan angin', 'opsi_b' => 'Dapat menaiki gumpalan awan putih kemerahan di angkasa', 'opsi_c' => 'Memiliki kuda bersayap emas murni', 'opsi_d' => 'Dapat menembus ruang angkasa luar bumi', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Ratu dari negeri manakah yang akhirnya masuk Islam setelah singgasananya dipindahkan ke istana Nabi Sulaiman secara kilat?', 'opsi_a' => 'Ratu Cleopatra dari Mesir', 'opsi_b' => 'Ratu Balqis dari negeri Saba\'', 'opsi_c' => 'Ratu Zenobia dari Palmyra', 'opsi_d' => 'Ratu Candace dari Ethiopia', 'jawaban_benar' => 'B'],
                ],
            ],
            // 19. ILYAS
            [
                'urutan_nabi' => 19,
                'nama_nabi' => 'Ilyas',
                'deskripsi' => 'Nabi yang berdakwah meluruskan penyembahan berhala Baal di Bani Israil.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Pengutusan di Kota Baalbek dan Penyembahan Berhala Baal',
                        'teks' => "Nabi Ilyas a.s. diutus kepada kaum Bani Israil di kota Baalbek (Libanon). Masyarakat telah menyimpang jauh dari Taurat dan menyembah berhala besar bernama Baal. Nabi Ilyas dengan berani menyeru mereka agar meninggalkan berhala dan kembali menyembah Allah, namun para pemuka kaum menolak peringatannya.",
                        'audio_path' => 'audio/ilyas_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Ancaman Kemarau Panjang dan Keteguhan Dakwah',
                        'teks' => "Karena kaumnya tetap keras kepala, atas doa Ilyas, Allah menimpakan kemarau panjang yang sangat parah. Sumber air mengering, tanaman layu, dan kelaparan meluas. Melihat penderitaan itu, Ilyas tetap sabar membimbing agar mereka tersadar. Sebagian kecil mau bertaubat, sebelum akhirnya Allah mengangkat Ilyas ke sisi-Nya dalam kemuliaan.",
                        'audio_path' => 'audio/ilyas_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Kemenangan Tauhid dan Pengangkatan ke Langit',
                        'teks' => "Nabi Ilyas terus berjuang menegakkan tauhid hingga akhirnya Allah mengangkatnya ke langit. Kisahnya menjadi pelajaran bahwa kesabaran dan keteguhan dalam membela kebenaran akan mendapat pertolongan Allah, meskipun mayoritas menolak.",
                        'audio_path' => 'audio/ilyas_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_ilyas',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Kepada kaum manakah Nabi Ilyas a.s. diutus untuk menyampaikan dakwah tauhid melawan kemusyrikan?', 'opsi_a' => 'Penduduk negeri Sodom yang amoral', 'opsi_b' => 'Kaum Bani Israil di kota Baalbek', 'opsi_c' => 'Penduduk Madyan pedagang yang curang', 'opsi_d' => 'Kaum \'Ad di wilayah Al-Ahqaf', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Apa nama berhala utama yang disembah secara fanatik oleh kaum tempat Nabi Ilyas a.s. berdakwah?', 'opsi_a' => 'Berhala Latta dan Uzza', 'opsi_b' => 'Berhala Baal', 'opsi_c' => 'Berhala Wadd dan Suwa\'', 'opsi_d' => 'Berhala Hubal di Mekkah', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Bentuk azab alam apa yang ditimpakan kepada kaum Nabi Ilyas karena menolak keras dakwah tauhidnya?', 'opsi_a' => 'Hujan badai es besar yang menghancurkan rumah', 'opsi_b' => 'Kemarau panjang yang parah dan kekeringan meluas di seluruh negeri', 'opsi_c' => 'Serangan hama belalang raksasa pemakan tanaman', 'opsi_d' => 'Gempa vulkanik bumi yang berkepanjangan', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Di kota manakah pusat dakwah utama dari Nabi Ilyas a.s. berpusat menurut catatan sejarah?', 'opsi_a' => 'Kota Yerusalem', 'opsi_b' => 'Kota Baalbek', 'opsi_c' => 'Kota Babilonia', 'opsi_d' => 'Kota Damaskus', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Sikap mental apa yang ditunjukkan oleh Nabi Ilyas a.s. dalam menghadapi pembangkangan kaumnya?', 'opsi_a' => 'Keteguhan iman yang luar biasa tanpa kenal rasa takut kepada penguasa tiran', 'opsi_b' => 'Kemarahan destruktif yang menghancurkan kota tempat tinggal', 'opsi_c' => 'Sikap menyerah dan meninggalkan umat selamanya tanpa nasihat', 'opsi_d' => 'Kerja sama politik dengan raja kafir setempat', 'jawaban_benar' => 'A'],
                ],
            ],
            // 20. ILYASA
            [
                'urutan_nabi' => 20,
                'nama_nabi' => 'Ilyasa',
                'deskripsi' => 'Nabi penerus risalah Ilyas yang setia membimbing Bani Israil.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Pengganti dan Murid Setia Nabi Ilyas',
                        'teks' => "Nabi Ilyasa a.s. adalah murid sekaligus kerabat dekat yang setia mendampingi Nabi Ilyas. Sebelum Ilyas diangkat ke hadirat Allah, Ilyasa dipersiapkan dan diangkat menjadi nabi untuk melanjutkan estafet kepemimpinan dakwah membimbing Bani Israil agar tetap di jalan ketaatan kepada Allah.",
                        'audio_path' => 'audio/ilyasa_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Kelanjutan Perjuangan dan Masa Kesejahteraan Umat',
                        'teks' => "Nabi Ilyasa melanjutkan misi risalah dengan penuh kesabaran, kelembutan, dan ketekunan. Di bawah kepemimpinannya, Bani Israil merasakan masa damai, kesuburan tanah pertanian pulih kembali, dan hukum-hukum Allah ditegakkan dengan adil.",
                        'audio_path' => 'audio/ilyasa_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Keteladanan dalam Kepemimpinan',
                        'teks' => "Nabi Ilyasa adalah teladan dalam hal kesetiaan, kesabaran, dan kebijaksanaan. Ia tidak pernah mencari kemasyhuran, tetapi mengabdikan diri sepenuhnya untuk umatnya. Kisahnya mengajarkan pentingnya meneruskan perjuangan kebenaran setelah para pendahulu.",
                        'audio_path' => 'audio/ilyasa_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_ilyasa',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Apa hubungan kedekatan antara Nabi Ilyasa a.s. dan Nabi Ilyas a.s. sebelum diangkat menjadi nabi?', 'opsi_a' => 'Ayah dan anak kandung', 'opsi_b' => 'Murid setia dan kerabat dekat yang mendampingi Nabi Ilyas', 'opsi_c' => 'Pesaing politik di istana raja Baalbek', 'opsi_d' => 'Saudara kandung seibu', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Siapakah umat yang didakwahi oleh Nabi Ilyasa a.s. dalam melanjutkan risalah kenabian?', 'opsi_a' => 'Kaum Bani Israil', 'opsi_b' => 'Penduduk Mesir Kuno di Lembah Nil', 'opsi_c' => 'Kaum Quraisy Mekkah', 'opsi_d' => 'Penduduk Babilonia kuno', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Sifat kepemimpinan apa yang paling menonjol pada diri Nabi Ilyasa a.s. dalam membimbing kaumnya?', 'opsi_a' => 'Ketegasan militer yang agresif menyerang musuh', 'opsi_b' => 'Kesabaran, kelembutan, dan konsistensi melanjutkan risalah damai', 'opsi_c' => 'Kemampuan merancang sistem ekonomi moneter negara', 'opsi_d' => 'Keahlian dalam bidang pelayaran samudera luas', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Perubahan kondisi alam apa yang dirasakan kaum Bani Israil saat Nabi Ilyasa memimpin mereka ke jalan yang benar?', 'opsi_a' => 'Tanah kembali subur dan makmur setelah masa kemarau panjang berlalu', 'opsi_b' => 'Sering terjadi gempa bumi kecil sebagai peringatan harian', 'opsi_c' => 'Lautan di dekat mereka meluap setiap bulan purnama', 'opsi_d' => 'Suhu udara menjadi sangat dingin bersalju abadi', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Di dalam surah manakah nama Nabi Ilyasa a.s. disandingkan bersama para nabi mulia lainnya di dalam Al-Qur\'an?', 'opsi_a' => 'Surah Al-Baqarah dan Ali \'Imran', 'opsi_b' => 'Surah Al-An\'am dan Sad', 'opsi_c' => 'Surah Yasin dan Al-Waqiah', 'opsi_d' => 'Surah Ar-Rahman dan Al-Mulk', 'jawaban_benar' => 'B'],
                ],
            ],
            // 21. YUNUS
            [
                'urutan_nabi' => 21,
                'nama_nabi' => 'Yunus',
                'deskripsi' => 'Nabi yang ditelan ikan paus setelah bertobat di dalam perut ikan.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Dakwah di Ninawa dan Kepergian karena Kecewa',
                        'teks' => "Nabi Yunus a.s. (Zun-Nun) diutus kepada penduduk kota Ninawa (Irak kuno) yang ingkar dan menyembah berhala. Selama bertahun-tahun berdakwah, hanya sedikit yang beriman. Karena putus asa dan kecewa, Yunus pergi meninggalkan kota tanpa izin Allah.",
                        'audio_path' => 'audio/yunus_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Ditelan Ikan Nun di Tengah Lautan Lepas',
                        'teks' => "Yunus menaiki kapal, diterjang badai, lalu diundi dan namanya keluar. Ia dilempar ke laut, dan Allah memerintahkan ikan besar (paus) menelannya hidup-hidup. Di dalam perut ikan yang gelap, Yunus bertaubat dan berdoa: \"La ilaha illa anta subhanaka inni kuntu minaz zhalimin\" (QS. Al-Anbiya: 87).",
                        'audio_path' => 'audio/yunus_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Taubat Massal Penduduk Ninawa dan Keselamatan',
                        'teks' => "Allah mengabulkan doa Yunus dan memerintahkan ikan memuntahkannya di daratan tandus. Sekembalinya ke Ninawa, ia mendapati seluruh penduduk telah sadar dan bertobat massal dengan tulus sebelum azab datang, sehingga Allah mengangkat azab dan melimpahkan kedamaian bagi mereka.",
                        'audio_path' => 'audio/yunus_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_yunus',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Apa nama kota besar tempat asal kaum yang didakwahi oleh Nabi Yunus a.s.?', 'opsi_a' => 'Kota Ninawa', 'opsi_b' => 'Kota Sodom', 'opsi_c' => 'Kota Madyan', 'opsi_d' => 'Kota Babylon', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Apa alasan utama yang membuat Nabi Yunus pergi meninggalkan kota dakwahnya sebelum mendapat izin Allah?', 'opsi_a' => 'Karena diusir oleh raja kota dengan ancaman hukuman mati', 'opsi_b' => 'Karena merasa kecewa, lelah, dan putus asa atas pembangkangan keras kaumnya', 'opsi_c' => 'Karena mendapat tugas mendadak untuk berdakwah ke negeri Mesir', 'opsi_d' => 'Karena kehabisan seluruh bekal makanan di kota tersebut', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Hewan besar apa yang menelan Nabi Yunus a.s. setelah ia dilemparkan dari atas kapal laut yang diterjang badai?', 'opsi_a' => 'Buaya raksasa muara sungai Nil', 'opsi_b' => 'Ikan paus / ikan Nun', 'opsi_c' => 'Monster laut purba bermata satu', 'opsi_d' => 'Ular air raksasa beracun', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Doa taubat yang dibaca oleh Nabi Yunus a.s. di dalam perut ikan yang gelap diabadikan dalam Al-Qur\'an Surah...', 'opsi_a' => 'Surah Al-Anbiya ayat 87', 'opsi_b' => 'Surah Al-Baqarah ayat 255', 'opsi_c' => 'Surah Al-Kahfi ayat 10', 'opsi_d' => 'Surah Yasin ayat 58', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Bagaimana kondisi akhir dari penduduk kota Ninawa setelah mereka ditinggalkan oleh Nabi Yunus yang marah?', 'opsi_a' => 'Seluruh kotanya musnah tertelan gempa bumi dahsyat', 'opsi_b' => 'Mereka bertobat secara massal dengan tulus sehingga azab Allah dibatalkan dan mereka selamat', 'opsi_c' => 'Mereka saling berperang saudara hingga binasa satu sama lain', 'opsi_d' => 'Mereka pindah keyakinan menyembah matahari dan bulan', 'jawaban_benar' => 'B'],
                ],
            ],
            // 22. ZAKARIYA
            [
                'urutan_nabi' => 22,
                'nama_nabi' => 'Zakariya',
                'deskripsi' => 'Nabi yang sabar merawat Maryam dan dikaruniai anak di usia senja.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Pelayanan di Baitul Maqdis dan Doa Meminta Keturunan',
                        'teks' => "Nabi Zakaria a.s. adalah imam dan nabi yang merawat Siti Maryam di Baitul Maqdis. Meskipun usianya sangat lanjut dan istrinya mandul, ia tidak pernah berputus asa dari rahmat Allah. Ia berdoa dengan lembut dan khusyuk di mihrabnya agar dikaruniai anak pewaris yang saleh.",
                        'audio_path' => 'audio/zakariya_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Mukjizat Kelahiran Nabi Yahya dan Tanda Kebisuan Sementara',
                        'teks' => "Allah mengabulkan doa Zakaria dengan memberinya kabar gembira melalui malaikat bahwa ia akan dikaruniai putra bernama Yahya, nama yang belum pernah diberikan sebelumnya. Sebagai tanda, Zakaria tidak dapat berbicara kepada manusia selama tiga hari tiga malam kecuali dengan isyarat.",
                        'audio_path' => 'audio/zakariya_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Pengabdian dan Keikhlasan',
                        'teks' => "Nabi Zakaria dan keluarganya adalah orang-orang yang bersegera dalam kebaikan, berdoa dengan penuh harap dan cemas, serta rendah hati di hadapan Allah. Kisahnya mengajarkan bahwa doa tidak pernah sia-sia dan Allah selalu mendengar hamba-Nya yang memohon dengan tulus.",
                        'audio_path' => 'audio/zakariya_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_zakariya',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Di tempat suci manakah Nabi Zakaria a.s. sehari-hari mengabdikan diri dan merawat Siti Maryam binti Imran?', 'opsi_a' => 'Masjidil Haram di kota Mekkah', 'opsi_b' => 'Baitul Maqdis di wilayah Yerusalem', 'opsi_c' => 'Masjid Nabawi di kota Madinah', 'opsi_d' => 'Haikal Sulaiman kuno di Babilonia', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Apa permohonan utama yang selalu dipanjatkan oleh Nabi Zakaria a.s. di usia senjanya kepada Allah SWT?', 'opsi_a' => 'Permohonan kekayaan harta benda yang melimpah ruah', 'opsi_b' => 'Permohonan agar dikaruniai keturunan yang saleh untuk meneruskan risalah', 'opsi_c' => 'Permohonan agar disembuhkan dari penyakit fisik usia tua', 'opsi_d' => 'Permohonan kemenangan militer atas musuh-musuh Bani Israil', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Siapa nama anak laki-laki yang dianugerahkan Allah kepada Nabi Zakaria sebagai jawaban atas doa khusyuknya?', 'opsi_a' => 'Nabi Isa a.s.', 'opsi_b' => 'Nabi Yahya a.s.', 'opsi_c' => 'Nabi Ilyasa a.s.', 'opsi_d' => 'Nabi Sulaiman a.s.', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Tanda fisik apa yang diberikan kepada Nabi Zakaria setelah ia meminta bukti atas kehamilan istrinya?', 'opsi_a' => 'Kedua kakinya menjadi lumpuh sementara waktu', 'opsi_b' => 'Tidak dapat berbicara kepada manusia selama tiga hari tiga malam kecuali dengan isyarat', 'opsi_c' => 'Matanya menjadi buta sebelah selama masa kehamilan istrinya', 'opsi_d' => 'Rambutnya berubah warna menjadi putih bersih seketika', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Sifat mulia apa yang diabadikan Al-Qur\'an mengenai karakter Nabi Zakaria dan keluarganya dalam beribadah?', 'opsi_a' => 'Mereka adalah orang-orang yang bersegera dalam kebaikan dan berdoa dengan penuh harap serta cemas', 'opsi_b' => 'Mereka adalah para panglima perang militer yang tak terkalahkan', 'opsi_c' => 'Mereka adalah para pedagang sukses internasional yang sangat dermawan', 'opsi_d' => 'Mereka adalah ahli sains astronomi terkemuka di zamannya', 'jawaban_benar' => 'A'],
                ],
            ],
            // 23. YAHYA
            [
                'urutan_nabi' => 23,
                'nama_nabi' => 'Yahya',
                'deskripsi' => 'Nabi yang alim, berhati lembut, dan senantiasa berbakti sejak kecil.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Karakter Zuhud, Hikmah Sejak Kecil, dan Kasih Sayang',
                        'teks' => "Nabi Yahya a.s. adalah putra Zakaria. Sejak kecil ia dianugerahi hikmah, kecerdasan, hati yang lembut, dan taat berbakti kepada orang tua. Yahya hidup sederhana, zuhud, menjauhi kemewahan dunia, dan sangat takut kepada Allah hingga sering menangis merenungkan hari akhir.",
                        'audio_path' => 'audio/yahya_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Penegak Hukum Kebenaran dan Gugur sebagai Syahid',
                        'teks' => "Nabi Yahya tumbuh menjadi penegak hukum Allah, meluruskan penyimpangan moral masyarakat. Ia tidak takut mencela penguasa tiran (Herodes) yang hendak melanggar syariat. Karena keberaniannya menentang pernikahan terlarang, ia dizalimi dan gugur sebagai syahid di jalan Allah.",
                        'audio_path' => 'audio/yahya_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Keteladanan dan Keutamaan',
                        'teks' => "Nabi Yahya adalah teladan dalam keberanian membela kebenaran, kesederhanaan, dan ketakwaan. Allah memujinya dalam Al-Qur'an sebagai orang yang saleh, berbakti, dan mendapat keselamatan. Kisahnya menginspirasi umat untuk berpegang teguh pada agama meskipun menghadapi risiko besar.",
                        'audio_path' => 'audio/yahya_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_yahya',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Apa hubungan kekerabatan antara Nabi Yahya a.s. dan Nabi Isa a.s. berdasarkan riwayat sejarah dan nasab?', 'opsi_a' => 'Mereka berdua adalah kakak beradik kandung seibu', 'opsi_b' => 'Mereka berdua adalah sepupu (ibu mereka bersaudara)', 'opsi_c' => 'Paman dan keponakan kandung', 'opsi_d' => 'Guru dan murid setia di Baitul Maqdis', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Gaya hidup seperti apa yang diamalkan oleh Nabi Yahya a.s. semasa hidupnya di dunia?', 'opsi_a' => 'Hidup mewah di istana megah bertabur emas dan permata', 'opsi_b' => 'Hidup zuhud, sangat sederhana, dan penuh kehati-hatian menjaga diri', 'opsi_c' => 'Menjadi penguasa politik militer di tanah Palestina', 'opsi_d' => 'Mengasingkan diri di tengah lautan luas menaiki perahu', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Sifat terpuji apa yang secara khusus dipuji oleh Allah dalam Al-Qur\'an mengenai masa kecil Nabi Yahya (QS. Maryam: 12)?', 'opsi_a' => 'Diberikan hikmah (kebijaksanaan) sejak ia masih anak-anak', 'opsi_b' => 'Memiliki kekuatan fisik bertarung yang setara dengan sepuluh orang', 'opsi_c' => 'Mampu menguasai seluruh bahasa bangsa di muka bumi', 'opsi_d' => 'Memiliki kekayaan warisan keluarga yang melimpah', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Apa penyebab utama Nabi Yahya a.s. dizalimi hingga menemui ajalnya sebagai seorang syahid?', 'opsi_a' => 'Karena menolak membayar pajak tahunan kepada kerajaan Romawi', 'opsi_b' => 'Karena ketegasannya menentang pernikahan terlarang penguasa tiran (Herodes)', 'opsi_c' => 'Karena merebut kekuasaan politik pemerintahan dari tangan raja', 'opsi_d' => 'Karena menyebarkan ajaran sihir di tengah kota Yerusalem', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Apa keteladanan utama yang bisa diambil oleh umat Islam dari sosok Nabi Yahya a.s.?', 'opsi_a' => 'Keberanian mutlak dalam menegakkan kebenaran tanpa takut risiko duniawi', 'opsi_b' => 'Kecerdasan dalam merancang strategi taktik militer perang', 'opsi_c' => 'Keahlian dalam berdagang lintas negara tetangga', 'opsi_d' => 'Kemampuan mengumpulkan harta dunia untuk amal sosial masyarakat', 'jawaban_benar' => 'A'],
                ],
            ],
            // 24. ISA
            [
                'urutan_nabi' => 24,
                'nama_nabi' => 'Isa',
                'deskripsi' => 'Nabi Ruhullah yang lahir tanpa ayah dan membawa Kitab Injil.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Kelahiran Tanpa Ayah dan Mukjizat Bayi Berbicara',
                        'teks' => "Nabi Isa a.s. adalah putra Siti Maryam binti Imran, lahir tanpa ayah atas tiupan ruh Allah melalui malaikat Jibril. Ketika Maryam dituduh berbuat nista, bayi Isa yang masih dalam buaian berbicara membela ibunya: \"Sesungguhnya aku hamba Allah, Dia memberiku Kitab (Injil) dan menjadikan aku nabi...\" (QS. Maryam: 30).",
                        'audio_path' => 'audio/isa_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Berbagai Mukjizat Penyembuhan dan Kitab Injil',
                        'teks' => "Isa diutus kepada Bani Israil dengan membawa Kitab Injil dan berbagai mukjizat: membentuk tanah menjadi burung lalu meniupnya hingga hidup, menyembuhkan orang buta sejak lahir dan penderita kusta, serta menghidupkan orang mati atas izin Allah.",
                        'audio_path' => 'audio/isa_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Penyelamatan dari Penyaliban dan Pengangkatan ke Langit',
                        'teks' => "Ketika pemuka Bani Israil bersekongkol menyalib Isa, Allah melindunginya dan mengangkatnya ke sisi-Nya. Al-Qur'an menegaskan bahwa mereka tidak membunuh dan tidak menyalib Isa, melainkan Allah mengangkatnya ke langit, dan kelak ia akan turun kembali menjelang akhir zaman.",
                        'audio_path' => 'audio/isa_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_isa',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Siapakah ibu kandung mulia dari Nabi Isa a.s. yang namanya diabadikan sebagai nama surah dalam Al-Qur\'an?', 'opsi_a' => 'Siti Aisyah binti Abu Bakar', 'opsi_b' => 'Siti Maryam binti Imran', 'opsi_c' => 'Siti Fatimah binti Muhammad', 'opsi_d' => 'Siti Khadijah binti Khuwailid', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Apa mukjizat luar biasa yang ditunjukkan oleh Nabi Isa saat ia masih berupa bayi di dalam buaian?', 'opsi_a' => 'Mengubah air susu ibu menjadi madu murni manis', 'opsi_b' => 'Berbicara untuk membersihkan nama baik ibunya dari fitnah keji kaumnya', 'opsi_c' => 'Mengangkat tempat tidurnya terbang melayang ke udara', 'opsi_d' => 'Memancarkan cahaya terang benderang dari keningnya', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Kitab suci apakah yang diturunkan oleh Allah SWT kepada Nabi Isa a.s. untuk membimbing Bani Israil?', 'opsi_a' => 'Kitab Taurat', 'opsi_b' => 'Kitab Zabur', 'opsi_c' => 'Kitab Injil', 'opsi_d' => 'Kitab Al-Qur\'an', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Di antara mukjizat Nabi Isa a.s. atas izin Allah kepada Bani Israil dalam bidang medis adalah...', 'opsi_a' => 'Membelah bulan menjadi dua bagian sama besar di langit', 'opsi_b' => 'Menyembuhkan orang buta sejak lahir dan menghidupkan orang mati', 'opsi_c' => 'Mengubah seluruh air laut menjadi air tawar yang bisa diminum', 'opsi_d' => 'Menghentikan perputaran matahari selama satu hari penuh', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Bagaimana kejelasan peristiwa akhir hayat Nabi Isa a.s. menurut penegasan ayat Al-Qur\'an (Surah An-Nisa: 157)?', 'opsi_a' => 'Beliau berhasil disalib dan wafat di kayu salib oleh musuhnya', 'opsi_b' => 'Beliau tidak dibunuh dan tidak disalib, melainkan Allah mengangkatnya langsung ke sisi-Nya di langit', 'opsi_c' => 'Beliau wafat secara tenang karena usia tua di kota Yerusalem', 'opsi_d' => 'Beliau hilang di tengah padang pasir luas tanpa jejak', 'jawaban_benar' => 'B'],
                ],
            ],
            // 25. MUHAMMAD
            [
                'urutan_nabi' => 25,
                'nama_nabi' => 'Muhammad',
                'deskripsi' => 'Nabi akhir zaman (Khotimul Anbiya) pembawa rahmat bagi seluruh alam.',
                'materials' => [
                    [
                        'bab_ke' => 1,
                        'judul_bab' => 'Kelahiran di Tahun Gajah dan Julukan Al-Amin',
                        'teks' => "Nabi Muhammad SAW lahir di Mekkah pada Tahun Gajah (571 M) dari pasangan Abdullah dan Aminah. Ayahnya wafat sebelum lahir, ibunya wafat saat ia kecil, sehingga diasuh oleh kakek Abdul Muthalib lalu pamannya Abu Thalib. Sejak muda, ia terkenal jujur dan amanah hingga mendapat gelar Al-Amin (yang terpercaya).",
                        'audio_path' => 'audio/muhammad_1.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 2,
                        'judul_bab' => 'Wahyu Pertama di Gua Hira dan Dakwah di Mekkah',
                        'teks' => "Pada usia 40 tahun, saat berkhalwat di Gua Hira, Muhammad menerima wahyu pertama (QS. Al-Alaq 1-5) melalui Jibril, diangkat menjadi nabi dan rasul penutup. Selama 13 tahun di Mekkah, ia berdakwah menghadapi penolakan, penyiksaan, dan pemboikotan dari kaum Quraisy.",
                        'audio_path' => 'audio/muhammad_2.mp3',
                        'video_url' => null,
                    ],
                    [
                        'bab_ke' => 3,
                        'judul_bab' => 'Hijrah ke Madinah, Piagam Madinah, dan Fathu Makkah',
                        'teks' => "Atas perintah Allah, Nabi Muhammad hijrah ke Madinah, membangun masyarakat Islam, mempersatukan Muhajirin dan Ansar, serta menyusun Piagam Madinah. Setelah berbagai perang, beliau memimpin Fathu Makkah (Penaklukan Mekkah) tanpa pertumpahan darah, membersihkan Kabah dari berhala. Beliau wafat pada usia 63 tahun, meninggalkan Al-Qur'an dan Sunnah sebagai pedoman abadi.",
                        'audio_path' => 'audio/muhammad_3.mp3',
                        'video_url' => 'https://www.youtube.com/embed/sample_muhammad',
                    ],
                ],
                'questions' => [
                    ['pertanyaan' => 'Pada tahun berapakah Nabi Muhammad SAW dilahirkan di kota Mekkah Al-Mukarramah?', 'opsi_a' => 'Tahun Gajah (571 M)', 'opsi_b' => 'Tahun Paceklik Besar Dunia', 'opsi_c' => 'Tahun Perang Fiil', 'opsi_d' => 'Tahun Hijrah Agung ke Madinah', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Gelar kehormatan apakah yang diberikan oleh penduduk Mekkah kepada Nabi Muhammad karena kejujuran dan sifat amanahnya?', 'opsi_a' => 'Al-Faruq', 'opsi_b' => 'Al-Amin', 'opsi_c' => 'As-Siddiq', 'opsi_d' => 'Zun-Nurain', 'jawaban_benar' => 'B'],
                    ['pertanyaan' => 'Di manakah tempat Nabi Muhammad SAW menerima wahyu yang pertama kali dari Allah SWT melalui Malaikat Jibril?', 'opsi_a' => 'Di dalam gua Hira (Jabal Nur)', 'opsi_b' => 'Di atas bukit Safa dan Marwah', 'opsi_c' => 'Di dalam bangunan Kabah suci Mekkah', 'opsi_d' => 'Di pekarangan rumah Abu Bakar as-Siddiq', 'jawaban_benar' => 'A'],
                    ['pertanyaan' => 'Peristiwa perpindahan Nabi Muhammad SAW dan kaum Muslimin dari Mekkah ke Madinah dikenal dalam sejarah Islam dengan nama...', 'opsi_a' => 'Isra\' dan Mi\'raj', 'opsi_b' => 'Fathu Makkah', 'opsi_c' => 'Hijrah', 'opsi_d' => 'Ba\'ith Nabawi', 'jawaban_benar' => 'C'],
                    ['pertanyaan' => 'Apa peristiwa besar yang menandai kemenangan dakwah Islam masuk kembali ke kota Mekkah secara damai tanpa pertumpahan darah?', 'opsi_a' => 'Perjanjian Hudaibiyah', 'opsi_b' => 'Fathu Makkah (Penaklukan Mekkah)', 'opsi_c' => 'Perang Badar Kubro', 'opsi_d' => 'Penyusunan Piagam Madinah', 'jawaban_benar' => 'B'],
                ],
            ],
        ];

        foreach ($prophetsData as $data) {
            try {
                $prophet = Prophet::updateOrCreate(
                    ['urutan_nabi' => $data['urutan_nabi']],
                    [
                        'nama_nabi' => $data['nama_nabi'],
                        'deskripsi' => $data['deskripsi'],
                    ]
                );

                foreach ($data['materials'] as $mat) {
                    Material::updateOrCreate(
                        ['prophet_id' => $prophet->id, 'bab_ke' => $mat['bab_ke']],
                        [
                            'judul_bab' => $mat['judul_bab'],
                            'teks' => $mat['teks'],
                            'audio_path' => $mat['audio_path'],
                            'video_url' => $mat['video_url'],
                        ]
                    );
                }

                foreach ($data['questions'] as $q) {
                    Question::updateOrCreate(
                        ['prophet_id' => $prophet->id, 'pertanyaan' => $q['pertanyaan']],
                        [
                            'opsi_a' => $q['opsi_a'],
                            'opsi_b' => $q['opsi_b'],
                            'opsi_c' => $q['opsi_c'],
                            'opsi_d' => $q['opsi_d'],
                            'jawaban_benar' => $q['jawaban_benar'],
                        ]
                    );
                }
            } catch (\Exception $e) {
                $this->command->error("❌ Gagal menyisipkan data Nabi " . $data['nama_nabi'] . ": " . $e->getMessage());
                Log::error("Seeder Error pada Nabi " . $data['nama_nabi'] . ": " . $e->getMessage());
            }
        }
    }
}