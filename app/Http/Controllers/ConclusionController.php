<?php

namespace App\Http\Controllers;

use App\Models\Prophet;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ConclusionController extends Controller
{
    // 🔥 Data pencerahan untuk 25 nabi (pindahkan ke property class agar aman)
    private static $pencerahanData = [
        1 => [
            'ayat' => 'QS. Al-Baqarah: 37: "Kemudian Adam menerima beberapa kalimat dari Tuhannya, maka Allah menerima taubatnya. Sesungguhnya Allah Maha Penerima taubat lagi Maha Penyayang."',
            'pelajaran' => 'Nabi Adam a.s. adalah manusia pertama yang diciptakan dari tanah. Allah mengajarkan kepadanya nama-nama benda, lalu memerintahkan malaikat sujud kepadanya. Iblis menolak dan menjadi musuh abadi. Adam dan Hawa tergoda memakan buah terlarang, bertaubat, dan diturunkan ke bumi sebagai ujian. Keteladanan: rendah hati, mau bertaubat, dan tidak putus asa dari rahmat Allah.'
        ],
        2 => [
            'ayat' => 'QS. Maryam: 56-57: "Dan ceritakanlah (Muhammad) kisah Idris di dalam Kitab. Sesungguhnya ia adalah seorang yang sangat benar dan seorang nabi. Dan Kami telah mengangkatnya ke martabat yang tinggi."',
            'pelajaran' => 'Nabi Idris a.s. adalah keturunan keenam dari Adam. Beliau adalah pelopor peradaban: pandai menjahit, menggunakan pena untuk menulis, dan menguasai astronomi serta matematika. Beliau juga dikenal sebagai nabi yang tekun beribadah dan menegakkan keadilan. Diangkat ke martabat tinggi oleh Allah. Keteladanan: menggabungkan kecerdasan duniawi dengan ketaatan spiritual.'
        ],
        3 => [
            'ayat' => 'QS. Al-Ankabut: 15: "Dan Kami selamatkan dia beserta orang-orang yang bersamanya di dalam bahtera, dan Kami jadikan peristiwa itu sebagai pelajaran bagi semua umat manusia."',
            'pelajaran' => 'Nabi Nuh a.s. berdakwah selama 950 tahun kepada kaumnya yang ingkar menyembah berhala. Atas perintah Allah, beliau membangun bahtera raksasa di daratan kering. Azab banjir besar menenggelamkan kaum kafir, termasuk anak kandungnya Kan\'an yang menolak naik kapal. Bahtera berlabuh di Gunung Judi. Keteladanan: kesabaran dalam berdakwah dan tawakal kepada Allah.'
        ],
        4 => [
            'ayat' => 'QS. Hud: 58: "Dan tatkala datang perintah Kami, Kami selamatkan Hud dan orang-orang yang beriman bersama dia dengan rahmat dari Kami."',
            'pelajaran' => 'Nabi Hud a.s. diutus kepada kaum \'Ad yang sombong karena kekuatan fisik dan kemegahan Kota Iram. Mereka menolak dakwah dan menantang azab. Allah mendatangkan angin topan dingin (sarsar) selama 7 malam 8 hari yang membinasakan mereka. Keteladanan: jangan sombong dengan kekuatan duniawi, karena Allah Maha Kuasa.'
        ],
        5 => [
            'ayat' => 'QS. Hud: 66: "Maka tatkala datang perintah Kami, Kami selamatkan Shaleh dan orang-orang yang beriman bersama dia dengan rahmat dari Kami."',
            'pelajaran' => 'Nabi Shaleh a.s. diutus kepada kaum Tsamud yang ahli memahat gunung. Mukjizat unta betina keluar dari batu, tetapi mereka menyembelihnya. Azab berupa gempa dan suara keras (shaihah) membinasakan mereka dalam sekejap. Keteladanan: hargai mukjizat Allah dan jangan melampaui batas.'
        ],
        6 => [
            'ayat' => 'QS. Al-Anbiya: 69: "Kami berfirman: \'Hai api, menjadi dinginlah, dan menjadi keselamatanlah bagi Ibrahim!\'"',
            'pelajaran' => 'Nabi Ibrahim a.s. adalah bapak para nabi (Abul Anbiya). Beliau menghancurkan berhala, dilempar ke api oleh Raja Namrud tetapi selamat. Diuji menyembelih putranya Ismail, diganti dengan domba. Bersama Ismail membangun fondasi Kabah. Keteladanan: kepasrahan total dan keyakinan akan pertolongan Allah.'
        ],
        7 => [
            'ayat' => 'QS. Hud: 82: "Maka tatkala datang perintah Kami, Kami jungkir balikkan negeri itu dan Kami hujani mereka dengan batu dari tanah yang terbakar secara bertubi-tubi."',
            'pelajaran' => 'Nabi Luth a.s. diutus kepada kaum Sodom yang melakukan homoseksual dan kejahatan. Para malaikat datang sebagai tamu, penduduk mengepung rumah Luth. Azab berupa negeri dijungkirbalikkan dan hujan batu (sijjil). Istri Luth yang menengok ke belakang binasa. Keteladanan: menjauhi perbuatan keji dan mengikuti fitrah.'
        ],
        8 => [
            'ayat' => 'QS. Ash-Shaffat: 107: "Dan Kami tebus anak itu dengan seekor sembelihan yang besar."',
            'pelajaran' => 'Nabi Ismail a.s. adalah putra Ibrahim dari Siti Hajar. Ditinggalkan di lembah gersang Mekkah, muncul air Zamzam dari dekat kakinya. Suku Jurhum menetap di sana. Diuji untuk disembelih, tetapi diganti dengan domba. Bersama Ibrahim membangun Kabah. Keteladanan: kesabaran dan kepasrahan kepada Allah.'
        ],
        9 => [
            'ayat' => 'QS. Hud: 71: "Dan istrinya (Sarah) berdiri (di balik tirai) lalu dia tersenyum, maka Kami sampaikan kepadanya kabar gembira tentang (kelahiran) Ishaq."',
            'pelajaran' => 'Nabi Ishaq a.s. adalah putra Ibrahim dari Siti Sarah yang sudah lanjut usia. Kelahirannya dikabarkan malaikat. Dari keturunannya lahir banyak nabi Bani Israil, termasuk Yakub dan Yusuf. Keteladanan: keyakinan pada janji Allah dan doa yang tidak putus.'
        ],
        10 => [
            'ayat' => 'QS. Yusuf: 87: "Hai anak-anakku, pergilah, carilah berita tentang Yusuf dan saudaranya, dan janganlah kamu berputus asa dari rahmat Allah."',
            'pelajaran' => 'Nabi Yakub a.s. adalah putra Ishaq, bergelar Israil. Beliau sangat mencintai Yusuf dan Benjamin. Saudara-saudara Yusuf iri dan membuang Yusuf ke sumur. Yakub sabar menghadapi ujian, matanya buta karena menangis. Akhirnya bertemu Yusuf di Mesir dan penglihatannya pulih. Keteladanan: kesabaran yang indah dan tidak putus asa dari rahmat Allah.'
        ],
        11 => [
            'ayat' => 'QS. Yusuf: 92: "Pada hari ini tak ada cercaan terhadap kamu, mudah-mudahan Allah mengampuni kamu. Dan Dia adalah Maha Penyayang di antara para penyayang."',
            'pelajaran' => 'Nabi Yusuf a.s. bermimpi sebelas bintang sujud kepadanya. Dibuang ke sumur oleh saudara-saudaranya, ditemukan kafilah, dijual di Mesir, menjadi budak, dipenjara karena fitnah Zulaikha, kemudian menjadi bendaharawan negara. Di akhir hayatnya, ia memaafkan saudara-saudaranya. Keteladanan: memaafkan kesalahan orang lain dan tetap berbuat baik.'
        ],
        12 => [
            'ayat' => 'QS. Al-Anbiya: 83-84: "Dan (ingatlah) Ayyub, ketika ia berdoa kepada Tuhannya: \'Sesungguhnya aku telah ditimpa penyakit dan Engkau adalah Tuhan Yang Maha Penyayang.\'"',
            'pelajaran' => 'Nabi Ayyub a.s. adalah nabi yang kaya raya, tetapi diuji dengan kehilangan harta, anak, dan menderita penyakit kulit parah. Istrinya Rahmah setia mendampingi. Beliau sabar tanpa mengeluh, berdoa kepada Allah, dan disembuhkan dengan air sejuk. Keteladanan: sabar dalam ujian dan yakin akan pertolongan Allah.'
        ],
        13 => [
            'ayat' => 'QS. Hud: 94: "Dan tatkala datang perintah Kami, Kami selamatkan Syuaib dan orang-orang yang beriman bersama dia dengan rahmat dari Kami."',
            'pelajaran' => 'Nabi Syuaib a.s. diutus kepada kaum Madyan yang curang dalam takaran dan timbangan serta gemar merampok. Beliau mengajak mereka bertakwa dan menyempurnakan timbangan. Kaumnya menolak dan mengancam. Azab berupa gempa, hari awan panas, dan teriakan keras. Keteladanan: kejujuran dalam berdagang dan menegakkan keadilan.'
        ],
        14 => [
            'ayat' => 'QS. Taha: 77: "Dan sesungguhnya telah Kami wahyukan kepada Musa: \'Pergilah di malam hari dengan hamba-hamba-Ku, maka buatlah untuk mereka jalan yang kering di laut.\'"',
            'pelajaran' => 'Nabi Musa a.s. lahir di masa Firaun membunuh bayi laki-laki, dihanyutkan ke Sungai Nil, dan diangkat sebagai anak angkat oleh istri Firaun. Beliau diangkat menjadi rasul di Lembah Tuwa, diberi mukjizat tongkat menjadi ular dan tangan bercahaya. Menghadapi Firaun dan penyihir, memimpin Bani Israil keluar Mesir, dan membelah Laut Merah. Keteladanan: keberanian menghadapi kezaliman dan tawakal kepada Allah.'
        ],
        15 => [
            'ayat' => 'QS. Taha: 29-32: "Dan jadikanlah untukku seorang pembantu dari keluargaku, yaitu Harun saudaraku. Teguhkanlah kekuatanku dengan (keberadaan)nya."',
            'pelajaran' => 'Nabi Harun a.s. adalah kakak Musa yang fasih berbicara. Mendampingi Musa dalam dakwah kepada Firaun. Ketika Musa pergi ke Gunung Sinai, Harun memimpin Bani Israil. Samiri membuat patung anak sapi emas, Harun berjuang mencegah kesesatan. Keteladanan: saling mendukung dalam kebaikan dan menyempurnakan kekurangan.'
        ],
        16 => [
            'ayat' => 'QS. Al-Anbiya: 85-86: "Dan (ingatlah) Ismail, Idris, dan Zulkifli. Semua mereka termasuk orang-orang yang sabar. Kami masukkan mereka ke dalam rahmat Kami."',
            'pelajaran' => 'Nabi Zulkifli a.s. dikenal sebagai pemuda yang menepati janji: berpuasa siang, shalat malam, dan tidak pernah marah dalam memutuskan perkara. Diangkat menjadi pemimpin dan nabi karena kesanggupannya. Keteladanan: kesabaran, amanah, dan keadilan dalam kepemimpinan.'
        ],
        17 => [
            'ayat' => 'QS. Saba: 10: "Dan sesungguhnya telah Kami berikan kepada Daud karunia dari Kami. \'Hai gunung-gunung dan burung-burung, bertasbihlah berulang-ulang bersama Daud.\' Dan Kami telah melunakkan besi untuknya."',
            'pelajaran' => 'Nabi Daud a.s. adalah prajurit muda yang mengalahkan Jalut (Goliath) dengan ketapel. Diberi kerajaan dan Kitab Zabur. Mukjizat melunakkan besi dan suara merdu yang membuat gunung dan burung bertasbih. Keteladanan: memanfaatkan kekuatan fisik dan suara merdu untuk beribadah.'
        ],
        18 => [
            'ayat' => 'QS. An-Naml: 15: "Dan sesungguhnya Kami telah memberikan ilmu kepada Daud dan Sulaiman; dan keduanya mengucapkan: \'Segala puji bagi Allah yang melebihkan kami dari banyak hamba-hamba-Nya yang beriman.\'"',
            'pelajaran' => 'Nabi Sulaiman a.s. adalah putra Daud, diberi kerajaan megah yang belum pernah diberikan kepada siapapun. Memahami bahasa hewan, menguasai angin, dan memimpin jin. Melalui burung Hud-hud, Ratu Balqis dari Saba\' masuk Islam setelah melihat mukjizatnya. Keteladanan: kekuasaan besar tetap rendah hati dan bersyukur.'
        ],
        19 => [
            'ayat' => 'QS. As-Saffat: 123-124: "Dan sesungguhnya Ilyas termasuk salah seorang rasul. (Ingatlah) ketika ia berkata kepada kaumnya: \'Mengapa kamu tidak bertakwa? Apakah kamu menyembah Baal dan meninggalkan sebaik-baik Pencipta?\'"',
            'pelajaran' => 'Nabi Ilyas a.s. diutus kepada Bani Israil di kota Baalbek yang menyembah berhala Baal. Beliau menyeru mereka bertakwa kepada Allah. Karena menolak, Allah menimpakan kemarau panjang. Sebagian kecil bertaubat sebelum Ilyas diangkat ke langit. Keteladanan: keteguhan dalam berdakwah meskipun ditolak.'
        ],
        20 => [
            'ayat' => 'QS. Al-An\'am: 86: "Dan Ismail, Ilyasa, Yunus, dan Luth. Masing-masing Kami lebihkan derajatnya di atas umat (di masanya)."',
            'pelajaran' => 'Nabi Ilyasa a.s. adalah murid dan kerabat dekat Ilyas yang melanjutkan risalah setelah Ilyas diangkat ke langit. Beliau memimpin Bani Israil dengan kesabaran dan kelembutan, membawa kesejahteraan dan kesuburan. Keteladanan: melanjutkan perjuangan kebenaran dengan hikmah dan kesabaran.'
        ],
        21 => [
            'ayat' => 'QS. Al-Anbiya: 87-88: "Dan (ingatlah) Zun-Nun (Yunus), ketika ia pergi dalam keadaan marah, lalu ia menyangka bahwa Kami tidak akan mempersempitnya, maka ia berdoa dalam kegelapan: \'La ilaha illa anta, subhanaka, inni kuntu minaz-zhalimin.\'"',
            'pelajaran' => 'Nabi Yunus a.s. diutus kepada penduduk Ninawa. Karena putus asa, beliau pergi tanpa izin Allah, dikejar badai, dan ditelan ikan paus. Dalam perut ikan beliau bertaubat dengan doa yang agung. Kaum Ninawa kemudian bertobat massal. Keteladanan: jangan putus asa, dan kembali kepada Allah dalam kesulitan.'
        ],
        22 => [
            'ayat' => 'QS. Maryam: 7: "Hai Zakariya, sesungguhnya Kami memberi kabar gembira kepadamu dengan seorang anak bernama Yahya, yang sebelumnya Kami belum pernah memberikan nama itu kepada siapa pun."',
            'pelajaran' => 'Nabi Zakaria a.s. adalah imam Baitul Maqdis yang merawat Siti Maryam. Di usia senja dan istrinya mandul, beliau berdoa meminta keturunan. Allah mengabulkan dengan kelahiran Yahya, dan Zakaria tidak bisa berbicara selama tiga hari sebagai tanda. Keteladanan: tidak pernah putus asa dalam berdoa dan yakin akan kekuasaan Allah.'
        ],
        23 => [
            'ayat' => 'QS. Maryam: 12-13: "Hai Yahya, ambillah Kitab itu dengan sungguh-sungguh. Dan Kami anugerahkan kepadanya hikmah selagi dia masih kecil, dan rasa kasih sayang dari sisi Kami dan kesucian."',
            'pelajaran' => 'Nabi Yahya a.s. adalah putra Zakaria, diberi hikmah sejak kecil. Beliau hidup zuhud, sederhana, dan sangat bertakwa. Beliau menentang pernikahan terlarang Raja Herodes hingga akhirnya syahid. Keteladanan: keberanian membela kebenaran dan kesederhanaan.'
        ],
        24 => [
            'ayat' => 'QS. Maryam: 30-31: "Berkata Isa: \'Sesungguhnya aku hamba Allah, Dia memberiku Kitab dan menjadikan aku seorang nabi. Dan Dia menjadikan aku seorang yang diberkati di mana saja aku berada.\'"',
            'pelajaran' => 'Nabi Isa a.s. adalah putra Maryam yang lahir tanpa ayah, berbicara saat masih bayi, dan diberi Kitab Injil. Mukjizat beliau: menyembuhkan buta, kusta, dan menghidupkan orang mati. Allah mengangkatnya ke langit dan kelak akan turun kembali. Keteladanan: mukjizat dan kebenaran risalah Allah.'
        ],
        25 => [
            'ayat' => 'QS. Al-Ahzab: 40: "Muhammad itu sekali-kali bukanlah bapak dari seorang laki-laki di antara kamu, tetapi dia adalah Rasulullah dan penutup para nabi. Dan Allah Maha Mengetahui segala sesuatu."',
            'pelajaran' => 'Nabi Muhammad SAW adalah nabi terakhir dan penutup para nabi (Khatamul Anbiya). Lahir di Tahun Gajah, mendapat gelar Al-Amin. Menerima wahyu pertama di Gua Hira. Hijrah ke Madinah, membangun masyarakat Islam, dan Fathu Makkah. Wafat pada usia 63 tahun, meninggalkan Al-Qur\'an dan Sunnah sebagai pedoman abadi. Keteladanan: akhlak mulia, perjuangan dakwah, dan rahmat bagi seluruh alam.'
        ],
    ];

    public function show($prophetId)
    {
        $prophetId = (int) $prophetId;

        // Cari di database
        $prophet = Prophet::where('urutan_nabi', $prophetId)->first();

        // Fallback jika tidak ditemukan
        if (!$prophet) {
            $daftarNabi = [
                1 => 'Adam', 2 => 'Idris', 3 => 'Nuh', 4 => 'Hud', 5 => 'Shaleh',
                6 => 'Ibrahim', 7 => 'Luth', 8 => 'Ismail', 9 => 'Ishaq', 10 => 'Yaqub',
                11 => 'Yusuf', 12 => 'Ayyub', 13 => 'Syuaib', 14 => 'Musa', 15 => 'Harun',
                16 => 'Zulkifli', 17 => 'Daud', 18 => 'Sulaiman', 19 => 'Ilyas', 20 => 'Ilyasa',
                21 => 'Yunus', 22 => 'Zakariya', 23 => 'Yahya', 24 => 'Isa', 25 => 'Muhammad'
            ];
            $nama = $daftarNabi[$prophetId] ?? 'Nabi';
            $prophet = new Prophet();
            $prophet->id = $prophetId;
            $prophet->urutan_nabi = $prophetId;
            $prophet->nama_nabi = $nama;
        }

        // Ambil data pencerahan (gunakan properti class)
        $pencerahan = self::$pencerahanData[$prophet->urutan_nabi] ?? ['ayat' => '', 'pelajaran' => ''];

        return Inertia::render('Conclusion/Show', [
            'prophet' => [
                'id'          => $prophet->id ?? $prophetId,
                'nama_nabi'   => $prophet->nama_nabi,
                'urutan_nabi' => $prophet->urutan_nabi,
            ],
            'ayat'      => $pencerahan['ayat'] ?? '',
            'pelajaran' => $pencerahan['pelajaran'] ?? '',
        ]);
    }
}