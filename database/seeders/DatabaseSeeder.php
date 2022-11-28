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
            "solutionforid"=>"1"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke IP komputer sendiri apakah reply atau tidak",
            "solutionforid"=>"1"
        ]);

        Solution::create([
            "solution"=>"Periksa perangkat jaringan berjalan dengan baik atau tidak",
            "solutionforid"=>"1"
        ]);

        Solution::create([
            "solution"=>"Periksa IP address sesuai dengan jaringan atau tidak",
            "solutionforid"=>"1"
        ]);

        Solution::create([
            "solution"=>"Periksa kabel jaringan",
            "solutionforid"=>"2"
        ]);

        Solution::create([
            "solution"=>"Periksa IP address sesuai dengan jaringan atau tidak",
            "solutionforid"=>"2"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke komputer lain reply atau tidak",
            "solutionforid"=>"2"
        ]);

        Solution::create([
            "solution"=>"Periksa perangkat jaringan yang terhubung (switch, modem, router)",
            "solutionforid"=>"2"
        ]);

        Solution::create([
            "solution"=>"Periksa firewall atau antivirus komputer yang dituju apakah membatasi akses atau tidak",
            "solutionforid"=>"2"
        ]);

        Solution::create([
            "solution"=>"Periksa file sharing pastikan sudah terkonfigurasi dengan baik",
            "solutionforid"=>"2"
        ]);

        Solution::create([
            "solution"=>"Periksa kabel jaringan",
            "solutionforid"=>"3"
        ]);

        Solution::create([
            "solution"=>"Periksa IP address sesuai dengan jaringan atau tidak",
            "solutionforid"=>"3"
        ]);

        Solution::create([
            "solution"=>"Periksa perangkat jaringan yang terhubung (switch, modem, router)",
            "solutionforid"=>"3"
        ]);

        Solution::create([
            "solution"=>"Jika pada jaringan tersebut menggunakan DHCP server gunakan settingan obtain an IP address automatically pada adapter jaringan yang digunakan",
            "solutionforid"=>"3"
        ]);

        Solution::create([
            "solution"=>"Jika pada jaringan tersebut menggunakan DHCP server gunakan settingan obtain an IP address automatically pada adapter jaringan yang digunakan",
            "solutionforid"=>"4"
        ]);

        Solution::create([
            "solution"=>"Ganti IP address sesuai dengan IP lain sesuai dengan jaringan lokal",
            "solutionforid"=>"4"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke komputer lain reply atau tidak",
            "solutionforid"=>"5"
        ]);

        Solution::create([
            "solution"=>"Periksa perangkat jaringan yang terhubung (switch, modem, router)",
            "solutionforid"=>"5"
        ]);

        Solution::create([
            "solution"=>"Periksa firewall atau antivirus komputer yang dituju apakah membatasi akses atau tidak",
            "solutionforid"=>"5"
        ]);

        Solution::create([
            "solution"=>"Periksa IP address sesuai dengan jaringan komputer lain atau tidak",
            "solutionforid"=>"5"
        ]);

        Solution::create([
            "solution"=>"Periksa konfigurasi perangkat modem/router",
            "solutionforid"=>"5"
        ]);

        Solution::create([
            "solution"=>"Periksa koneksi ke router/modem dengan melakukan ping ke IP router/modem",
            "solutionforid"=>"6"
        ]);

        Solution::create([
            "solution"=>"Periksa default gateway sesuai atau tidak",
            "solutionforid"=>"6"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke IP gateway lancar atau tidak",
            "solutionforid"=>"6"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke DNS server lancar atau tidak",
            "solutionforid"=>"6"
        ]);

        Solution::create([
            "solution"=>"Restart perangkat jaringan (switch, modem, router)",
            "solutionforid"=>"6"
        ]);

        Solution::create([
            "solution"=>"Periksa koneksi ke router/modem dengan melakukan ping ke IP router/modem",
            "solutionforid"=>"7"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke DNS server lancar atau tidak",
            "solutionforid"=>"7"
        ]);

        Solution::create([
            "solution"=>"Gunakan DNS server lain seperti 1.1.1.1",
            "solutionforid"=>"7"
        ]);

        Solution::create([
            "solution"=>"Periksa kabel jaringan",
            "solutionforid"=>"8"
        ]);

        Solution::create([
            "solution"=>"Periksa perangkat jaringan yang terhubung (switch, modem, router)",
            "solutionforid"=>"8"
        ]);

        Solution::create([
            "solution"=>"Periksa koneksi ke router/modem dengan melakukan ping ke IP router/modem",
            "solutionforid"=>"8"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke DNS server lancar atau tidak",
            "solutionforid"=>"8"
        ]);

        Solution::create([
            "solution"=>"Restart perangkat jaringan (switch, modem, router)",
            "solutionforid"=>"8"
        ]);

        Solution::create([
            "solution"=>"Gunakan DNS server lain seperti 1.1.1.1",
            "solutionforid"=>"8"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping  ke berbagai domain lancar atau tidak",
            "solutionforid"=>"8"
        ]);

        Solution::create([
            "solution"=>"Periksa kabel jaringan",
            "solutionforid"=>"1"
        ]);

        Solution::create([
            "solution"=>"Periksa default gateway sesuai atau tidak",
            "solutionforid"=>"9"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke IP gateway lancar atau tidak",
            "solutionforid"=>"9"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke DNS server lancar atau tidak",
            "solutionforid"=>"9"
        ]);

        Solution::create([
            "solution"=>"Restart perangkat jaringan (switch, modem, router)",
            "solutionforid"=>"9"
        ]);

        Solution::create([
            "solution"=>"Gunakan DNS server lain seperti 1.1.1.1",
            "solutionforid"=>"9"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping  ke berbagai domain lancar atau tidak",
            "solutionforid"=>"9"
        ]);

        Solution::create([
            "solution"=>"Periksa default gateway sesuai atau tidak",
            "solutionforid"=>"10"
        ]);

          
        Solution::create([
            "solution"=>"Periksa koneksi ke router/modem dengan melakukan ping ke IP router/modem",
            "solutionforid"=>"10"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping ke DNS server lancar atau tidak",
            "solutionforid"=>"10"
        ]);

        Solution::create([
            "solution"=>"Restart perangkat jaringan (switch, modem, router)",
            "solutionforid"=>"10"
        ]);

        Solution::create([
            "solution"=>"Lakukan ping  ke berbagai domain lancar atau tidak",
            "solutionforid"=>"10"
        ]);
    }

}
