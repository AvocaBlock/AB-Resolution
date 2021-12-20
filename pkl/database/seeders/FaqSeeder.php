<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // FAQ
        faq::create([
            's_id' => '5',
            'question' => 'Apa itu OASE?',
            'answer' => 'OASE adalah Learning Management System (LMS) untuk menjalankan perkuliahan online. OASE dibangun dengan infrastruktur load balancing server berbasiskan Moodle LMS. OASE terintegrasi ke IMISSU untuk pendaftaran mata kuliah, enrolment dosen dan mahasiswa, serta sedang dikembangkan untuk bisa terintegrasi dalam hal nilai akhir mata kuliah.'
        ]);
        faq::create([
            's_id' => '5',
            'question' => 'Dimana mendaftarkan mata kuliah untuk di OASE?',
            'answer' => 'Untuk bisa menggunakan OASE, daftarkan mata kuliah anda di SIMAK-NG. Setelah pendaftaran, akses OASE, dimana mata kuliah sudah langsung dibuatkan dan juga mahasiswa peserta sudah langsung dienrolkan ke OASE.'
        ]);
        faq::create([
            's_id' => '5',
            'question' => 'Apakah dengan menggunakan OASE saya boleh tidak datang ke kelas mengajar?',
            'answer' => 'Ingat!!! Sistem SKS mengamanatkan tiga hal yang harus kita berikan kepada mahsiswa di tiap minggu pembelajaran: 1) Tatap muka [jumlah sks x 50 menit], 2) Belajar mandiri [jumlah sks x 60 menit], dan 3) Tugas Terstruktur [jumlah sks x 60 menit]. OASE bisa dipergunakan untuk memfasilitasi mahasiswa untuk Belajar mandiri dengan memberikan konten pembelajaran yang disertai kuis self assessment, ataupun untuk menyelenggarakan Tugas terstruktur menggunakan fitur Assignment dengan Rubrik penilaian. Komponen tatap muka masih harus dijalankan di kelas dengan mahasiswa. Note: Unud sekarang berlangganan Webex yang bisa dipergunakan untuk menyelenggarakan Videoconference. Videoconference bisa dijadikan alternatif tatap muka dengan mahasiswa. Videoconference dengan webex bisa direkam loooo sehingga bisa dijadikan bukti pelaksanaan tatap muka. Yuuk lihat  Panduannya!'
        ]);
        faq::create([
            's_id' => '5',
            'question' => 'Akun OASE daftar dimana?',
            'answer' => 'Tidak perlu melakukan pendaftaran akun karena untuk mengakses OASE menggunakan akun IMISSU. Pastikan anda menggunakan fitur Udayana OAuth2 untuk login.'
        ]);
        faq::create([
            's_id' => '5',
            'question' => 'Bagaimana cara memasukkan mahasiswa ke mata kuliah?',
            'answer' => 'Mahasiswa tidak perlu mendaftar atau menggunakan enrolment key karena dengan pendaftaran di SIMAK sudah otomatis mendaftarkan mahasiswa kedalam kelas.'
        ]);
        faq::create([
            's_id' => '5',
            'question' => 'Mahasiswa tidak secara otomatis masuk ke course',
            'answer' => 'Integrasi OASE dan SIMAK-NG secara otomatis memasukkan mahasiswa ke kelas di OASE. Apabilpa ternyata setelah menunggu periode sinkronisasi selama 30 menit mahasiswa belum masuk ke OASE maka dosen bisa memasukkan mahasiswa secara manual. Ikuti langkah-langkahnya seperti dijelaskan pada link berikut ini: https://usdi.unud.ac.id/posts/mahasiswa-tidak-secara-otomatis-masuk-ke-course-di-oase-ikuti-tips-berikut'
        ]);
        faq::create([
            's_id' => '5',
            'question' => 'Saya sudah daftar di SIMAK tapi mata kuliah saya tidak muncul ketika saya login di OASE',
            'answer' => 'OASE diseting sinkronisasi tiap 30 menit dengan IMISSU, sehingga. Apabila anda baru pertama kali mengakses OASE dan anda tidak menemukan mata kuliah yang didaftar, silahkan LOGOUT terlebih dahulu baru kemudian LOGIN lagi kembali 30 menit kemudian.'
        ]);
        faq::create([
            's_id' => '5',
            'question' => 'Dimana saya bisa bertanya jika mengalami masalah teknis ketika menggunakan OASE',
            'answer' => 'Untuk masalah teknis seperti:1.Tidak bisa login2.Tidak masuk ke course 3.Course yang dibuat tidak muncul di OASE 4.Salah masuk course 5.Tidak bisa mengakses OASE Bisa menyampaikan permasalahan melalui USERCARE -> https://usercare.unud.ac.id/ Pastikan anda menyampaikan permasalahan dengan lengkap disertai dengan: 1.Nama 2.NIM/NIP 3.Nama mata kuliah dan kode mata kuliah 4.Screenshoot yang mengilustrasikan posisi dimana terjadi permasalahan (Bisa lebih dari satu yang menunjukkan apa yang sudah dilakukan sehingga muncul error)'
        ]);
        faq::create([
            's_id' => '5',
            'question' => 'Ingin mengupload file lebih dari batas maksimal',
            'answer' => 'OASE membatasi ukuran file yang bisa diupload oleh dosen dan mahasiswa sebesar 10 MB. Apabila ingin mengupload file dengan ukuran yang lebih besar, bisa dengan mengupload file tersebut melalui Google Drive dan menempatkan linknya di OASE.Ikuti langkah-langkahnya seperti yang dijelaskan pada link berikut ini: https://usdi.unud.ac.id/posts/tips-menjalankan-tugas-dengan-file-ukuran-besar-di-oase'
        ]);
        
    }
}
