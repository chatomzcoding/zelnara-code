<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Homepage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $menu;

    public function __construct($menu='beranda')
    {
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $datapokok = [
            'nama' => 'Zelnara Code',
            'deskripsi' => 'wadah inspiratif untuk para pengembang perangkat lunak yang mencari pengetahuan, kreativitas, dan kolaborasi. Melalui konsultasi web aplikasi, tutorial mendalam, dan kumpulan kode terkini, ZelnaraCode membentuk komunitas yang membangun pemikiran inovatif dan memungkinkan pertumbuhan profesional dalam dunia coding. Temukan pengalaman belajar yang mendalam dan jalin koneksi dengan sesama pengembang di platform ini, di mana setiap baris kode memiliki arti dan memberdayakan perjalanan Anda dalam mengembangkan solusi perangkat lunak yang unggul',
            'deskripsi-singkat' => 'Komunitas dinamis bagi pengembang yang menyajikan konsultasi web, tutorial eksklusif, dan kumpulan kode terkini. Temukan inspirasi, kolaborasi, dan pertumbuhan profesional di dalam wadah kreativitas coding ini',
            'wa' => '+62 851-5653-2847',
            'alamat' => 'Bungursari, Kota tasikmalaya',
            'email' => 'ngoding.chatomz@gmail.com'
        ];
        return view('components.homepage', compact('datapokok'));
    }
}
