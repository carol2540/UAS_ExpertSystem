<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\DataGejala;
use App\Models\DataKerusakan;
use App\Models\Solution;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Admin::create([
            "email"=> "admin@gmail.com",
            "password"=> bcrypt("tai123")
        ]);

        DataGejala::create([
            "gejala"=>"Tidak dapat terhubung ke komputer lain ketika melakukan PING",
            "cf"=> 0.6
        ]);

        DataGejala::create([
            "gejala"=>"Konfigurasi jaringan/IP address salah",
            "cf"=> 0.8
        ]);

        DataGejala::create([
            "gejala"=>"Komputer tidak dapat mengkases ke komputer lain",
            "cf"=> 0.7
        ]);

        DataGejala::create([
            "gejala"=>"Konfigurasi file sharing salah",
            "cf"=> 0.8
        ]);

        DataGejala::create([
            "gejala"=>"Kesalahan DHCP server",
            "cf"=> 0.7
        ]);

        DataGejala::create([
            "gejala"=>"Terdapat peringatan IP address komputer konflik",
            "cf"=> 0.9
        ]);

        DataGejala::create([
            "gejala"=>"Konfigurasi jaringan menggunakan IP statik",
            "cf"=> 0.8
        ]);

        DataGejala::create([
            "gejala"=>"Konfigurasi router/modem memblokir IP tertentu",
            "cf"=> 0.7
        ]);

        DataGejala::create([
            "gejala"=>"Tidak dapat terkoneksi ke router",
            "cf"=> 0.6
        ]);

        DataGejala::create([
            "gejala"=>"Tidak dapat mengakses keluar jaringan",
            "cf"=> 0.7
        ]);

        DataGejala::create([
            "gejala"=>"Tidak dapat mengakses domain di internet",
            "cf"=> 0.8
        ]);

        DataGejala::create([
            "gejala"=>"Tidak dapat melakukan ping ke DNS server",
            "cf"=> 0.8
        ]);

        DataGejala::create([
            "gejala"=>"Akses ke domain/website lambat",
            "cf"=> 0.7
        ]);

        DataGejala::create([
            "gejala"=>"Respon ping lambat",
            "cf"=> 0.7
        ]);

        DataGejala::create([
            "gejala"=>"Tidak dapat terhubung internet",
            "cf"=> 0.7
        ]);

        DataGejala::create([
            "gejala"=>"Koneksi internet cenderung intermittent/berselang",
            "cf"=> 0.6
        ]);

        DataKerusakan::create([
            "kerusakan"=>"Komputer tidak dapat mengakses ke komputer lain"
        ]);

        DataKerusakan::create([
            "kerusakan"=>"Komputer tidak dapat mengakses sharing file komputer lain"
        ]);

        DataKerusakan::create([
            "kerusakan"=>"Komputer tidak dapat terhubung ke jaringan lokal"
        ]);

        DataKerusakan::create([
            "kerusakan"=>"Konflik IP Address"
        ]);

        DataKerusakan::create([
            "kerusakan"=>"Komputer tidak dapat mengakses router"
        ]);

        DataKerusakan::create([
            "kerusakan"=>"Komputer tidak dapat terhubung ke jaringan luar"
        ]);

        DataKerusakan::create([
            "kerusakan"=>"Komputer dapat koneksi internet tapi tidak dapat mengakses nama domain"
        ]);

        DataKerusakan::create([
            "kerusakan"=>"Koneksi internet lambat"
        ]);

        DataKerusakan::create([
            "kerusakan"=>"Komputer tidak dapat mengakses internet"
        ]);

        DataKerusakan::create([
            "kerusakan"=>"Koneksi ke internet putus-putus"
        ]);

        Solution::create([
            "solution"=>"Periksa kabel jaringan",
            "solutionforid"=>"1",
            "linkarticle"=>"https://www.asus.com/id/support/FAQ/1043785/"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke IP komputer sendiri apakah reply atau tidak",
            "solutionforid"=>"1",
            "linkarticle"=>"https://blog.myorbit.id/produktivitas/cara-cek-ping-internet#:~:text=Caranya%20yaitu%20ketik%20'ping'%20kemudian,koneksi%20internet%20yang%20Anda%20gunakan"
        ]);

        Solution::create([
            "solution"=>"Periksa perangkat jaringan berjalan dengan baik atau tidak",
            "solutionforid"=>"1",
            "linkarticle"=>"https://helpdesk.kallagroup.co.id/faq/item/masalah-jaringan-dan-penanganannya"
        ]);

        Solution::create([
            "solution"=>"Periksa IP address sesuai dengan jaringan atau tidak",
            "solutionforid"=>"1",
            "linkarticle"=>"https://bintangsekolahindonesia.com/komputer/cara-melihat-ip-address/"
        ]);

        Solution::create([
            "solution"=>"Periksa kabel jaringan",
            "solutionforid"=>"2",
            "linkarticle"=>"https://www.asus.com/id/support/FAQ/1043785/"
        ]);

        Solution::create([
            "solution"=>"Periksa IP address sesuai dengan jaringan atau tidak",
            "solutionforid"=>"2",
            "linkarticle"=>"https://bintangsekolahindonesia.com/komputer/cara-melihat-ip-address/"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke komputer lain reply atau tidak",
            "solutionforid"=>"2",
            "linkarticle"=>"https://www.tutorialengkap.com/2018/10/cara-ping-ke-banyak-komputer-sekaligus.html"
        ]);

        Solution::create([
            "solution"=>"Periksa perangkat jaringan yang terhubung (switch, modem, router)",
            "solutionforid"=>"2",
            "linkarticle"=>"https://www.bhinneka.com/blog/cara-setting-router-agar-dapat-terhubung-ke-wifi/"
        ]);

        Solution::create([
            "solution"=>"Periksa firewall atau antivirus komputer yang dituju apakah membatasi akses atau tidak",
            "solutionforid"=>"2",
            "linkarticle"=>"https://support.microsoft.com/id-id/windows/mengaktifkan-atau-menonaktifkan-firewall-pertahanan-microsoft-ec0844f7-aebd-0583-67fe-601ecf5d774f"
        ]);

        Solution::create([
            "solution"=>"Periksa file sharing pastikan sudah terkonfigurasi dengan baik",
            "solutionforid"=>"2",
            "linkarticle"=>"http://www.belajarpc.com/networking/cara-melihat-yang-membuka-sharing-folder.html"
        ]);

        Solution::create([
            "solution"=>"Periksa kabel jaringan",
            "solutionforid"=>"3",
            "linkarticle"=>"https://www.asus.com/id/support/FAQ/1043785/"
        ]);

        Solution::create([
            "solution"=>"Periksa IP address sesuai dengan jaringan atau tidak",
            "solutionforid"=>"3",
            "linkarticle"=>"https://bintangsekolahindonesia.com/komputer/cara-melihat-ip-address/"
        ]);

        Solution::create([
            "solution"=>"Periksa perangkat jaringan yang terhubung (switch, modem, router)",
            "solutionforid"=>"3",
            "linkarticle"=>"https://www.bhinneka.com/blog/cara-setting-router-agar-dapat-terhubung-ke-wifi/"
        ]);

        Solution::create([
            "solution"=>"Jika pada jaringan tersebut menggunakan DHCP server gunakan settingan obtain an IP address automatically pada adapter jaringan yang digunakan",
            "solutionforid"=>"3",
            "linkarticle"=>"https://www.linksys.com/support-article?articleNum=141017"
        ]);

        Solution::create([
            "solution"=>"Jika pada jaringan tersebut menggunakan DHCP server gunakan settingan obtain an IP address automatically pada adapter jaringan yang digunakan",
            "solutionforid"=>"4",
            "linkarticle"=>"https://www.linksys.com/support-article?articleNum=141017"
        ]);

        Solution::create([
            "solution"=>"Ganti IP address sesuai dengan IP lain sesuai dengan jaringan lokal",
            "solutionforid"=>"4",
            "linkarticle"=>"https://kumparan.com/how-to-tekno/cara-mengganti-ip-address-di-berbagai-peran"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke komputer lain reply atau tidak",
            "solutionforid"=>"5",
            "linkarticle"=>"https://www.tutorialengkap.com/2018/10/cara-ping-ke-banyak-komputer-sekaligus.html"
        ]);

        Solution::create([
            "solution"=>"Periksa perangkat jaringan yang terhubung (switch, modem, router)",
            "solutionforid"=>"5",
            "linkarticle"=>"https://www.bhinneka.com/blog/cara-setting-router-agar-dapat-terhubung-ke-wifi/"
        ]);

        Solution::create([
            "solution"=>"Periksa firewall atau antivirus komputer yang dituju apakah membatasi akses atau tidak",
            "solutionforid"=>"5",
            "linkarticle"=>"https://support.microsoft.com/id-id/windows/mengaktifkan-atau-menonaktifkan-firewall-pertahanan-microsoft-ec0844f7-aebd-0583-67fe-601ecf5d774f"
        ]);

        Solution::create([
            "solution"=>"Periksa IP address sesuai dengan jaringan komputer lain atau tidak",
            "solutionforid"=>"5",
            "linkarticle"=>"https://bintangsekolahindonesia.com/komputer/cara-melihat-ip-address/"
        ]);

        Solution::create([
            "solution"=>"Periksa konfigurasi perangkat modem/router",
            "solutionforid"=>"5",
            "linkarticle"=>"https://www.tokopedia.com/blog/cara-setting-router-wifi-tek/"
        ]);

        Solution::create([
            "solution"=>"Periksa koneksi ke router/modem dengan melakukan ping ke IP router/modem",
            "solutionforid"=>"6",
            "linkarticle"=>"https://www.griyapc.com/cara-cek-ping-internet/"
        ]);

        Solution::create([
            "solution"=>"Periksa default gateway sesuai atau tidak",
            "solutionforid"=>"6",
            "linkarticle"=>"https://itpoin.com/cara-menemukan-atau-melihat-default-gateway/#:~:text=Dalam%20jendela%20Command%20Prompt%2C%20ketik,IP%20perangkat%20di%20sebelah%20kanannya."
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke IP gateway lancar atau tidak",
            "solutionforid"=>"6",
            "linkarticle"=>"https://krisnablog.wordpress.com/2011/04/27/cara-ping-ke-gatewaywebsite-di-window/"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke DNS server lancar atau tidak",
            "solutionforid"=>"6",
            "linkarticle"=>"https://idwebhost.com/blog/cara-ping-name-server/"
        ]);

        Solution::create([
            "solution"=>"Restart perangkat jaringan (switch, modem, router)",
            "solutionforid"=>"6",
            "linkarticle"=>"https://itechmagz.id/2022/05/10/wifi-sering-error-ini-cara-restart-yang-benar/#:~:text=Anda%20bisa%20mencoba%20untuk%20restart,tombol%20tersebut%20untuk%20menyalakan%20router."
        ]);

        Solution::create([
            "solution"=>"Periksa koneksi ke router/modem dengan melakukan ping ke IP router/modem",
            "solutionforid"=>"7",
            "linkarticle"=>"https://www.griyapc.com/cara-cek-ping-internet/"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke DNS server lancar atau tidak",
            "solutionforid"=>"7",
            "linkarticle"=>"https://idwebhost.com/blog/cara-ping-name-server/"
        ]);

        Solution::create([
            "solution"=>"Gunakan DNS server lain seperti 1.1.1.1",
            "solutionforid"=>"7",
            "linkarticle"=>"https://idwebhost.com/blog/cara-mengganti-dns-google/"
        ]);

        Solution::create([
            "solution"=>"Periksa kabel jaringan",
            "solutionforid"=>"8",
            "linkarticle"=>"https://www.asus.com/id/support/FAQ/1043785/"
        ]);

        Solution::create([
            "solution"=>"Periksa perangkat jaringan yang terhubung (switch, modem, router)",
            "solutionforid"=>"8",
            "linkarticle"=>"https://www.bhinneka.com/blog/cara-setting-router-agar-dapat-terhubung-ke-wifi/"
        ]);

        Solution::create([
            "solution"=>"Periksa koneksi ke router/modem dengan melakukan ping ke IP router/modem",
            "solutionforid"=>"8",
            "linkarticle"=>"https://www.griyapc.com/cara-cek-ping-internet/"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke DNS server lancar atau tidak",
            "solutionforid"=>"8",
            "linkarticle"=>"https://idwebhost.com/blog/cara-ping-name-server/"
        ]);

        Solution::create([
            "solution"=>"Restart perangkat jaringan (switch, modem, router)",
            "solutionforid"=>"8",
            "linkarticle"=>"https://itechmagz.id/2022/05/10/wifi-sering-error-ini-cara-restart-yang-benar/#:~:text=Anda%20bisa%20mencoba%20untuk%20restart,tombol%20tersebut%20untuk%20menyalakan%20router."
        ]);

        Solution::create([
            "solution"=>"Gunakan DNS server lain seperti 1.1.1.1",
            "solutionforid"=>"8",
            "linkarticle"=>"https://idwebhost.com/blog/cara-mengganti-dns-google/"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke berbagai domain lancar atau tidak",
            "solutionforid"=>"8",
            "linkarticle"=>"https://www.jagoanhosting.com/tutorial/tutorial-domain/cek-ping-cmd"
        ]);

        Solution::create([
            "solution"=>"Periksa kabel jaringan",
            "solutionforid"=>"9",
            "linkarticle"=>"https://www.asus.com/id/support/FAQ/1043785/"
        ]);

        Solution::create([
            "solution"=>"Periksa default gateway sesuai atau tidak",
            "solutionforid"=>"9",
            "linkarticle"=>"https://itpoin.com/cara-menemukan-atau-melihat-default-gateway/#:~:text=Dalam%20jendela%20Command%20Prompt%2C%20ketik,IP%20perangkat%20di%20sebelah%20kanannya."
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke IP gateway lancar atau tidak",
            "solutionforid"=>"9",
            "linkarticle"=>"https://krisnablog.wordpress.com/2011/04/27/cara-ping-ke-gatewaywebsite-di-window/"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke DNS server lancar atau tidak",
            "solutionforid"=>"9",
            "linkarticle"=>"https://idwebhost.com/blog/cara-ping-name-server/"
        ]);

        Solution::create([
            "solution"=>"Restart perangkat jaringan (switch, modem, router)",
            "solutionforid"=>"9",
            "linkarticle"=>"https://itechmagz.id/2022/05/10/wifi-sering-error-ini-cara-restart-yang-benar/#:~:text=Anda%20bisa%20mencoba%20untuk%20restart,tombol%20tersebut%20untuk%20menyalakan%20router."
        ]);

        Solution::create([
            "solution"=>"Gunakan DNS server lain seperti 1.1.1.1",
            "solutionforid"=>"9",
            "linkarticle"=>"https://idwebhost.com/blog/cara-mengganti-dns-google/"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke berbagai domain lancar atau tidak",
            "solutionforid"=>"9",
            "linkarticle"=>"https://www.jagoanhosting.com/tutorial/tutorial-domain/cek-ping-cmd"
        ]);

        Solution::create([
            "solution"=>"Periksa default gateway sesuai atau tidak",
            "solutionforid"=>"10",
            "linkarticle"=>"https://itpoin.com/cara-menemukan-atau-melihat-default-gateway/#:~:text=Dalam%20jendela%20Command%20Prompt%2C%20ketik,IP%20perangkat%20di%20sebelah%20kanannya."
        ]);

          
        Solution::create([
            "solution"=>"Periksa koneksi ke router/modem dengan melakukan ping ke IP router/modem",
            "solutionforid"=>"10",
            "linkarticle"=>"https://www.griyapc.com/cara-cek-ping-internet/"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke DNS server lancar atau tidak",
            "solutionforid"=>"10",
            "linkarticle"=>"https://idwebhost.com/blog/cara-ping-name-server/"
        ]);

        Solution::create([
            "solution"=>"Restart perangkat jaringan (switch, modem, router)",
            "solutionforid"=>"10",
            "linkarticle"=>"https://itechmagz.id/2022/05/10/wifi-sering-error-ini-cara-restart-yang-benar/#:~:text=Anda%20bisa%20mencoba%20untuk%20restart,tombol%20tersebut%20untuk%20menyalakan%20router."
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke berbagai domain lancar atau tidak",
            "solutionforid"=>"10",
            "linkarticle"=>"https://www.jagoanhosting.com/tutorial/tutorial-domain/cek-ping-cmd"
        ]);
    }

}
