<?php
class Guru_model {
    private $guru = [
        [
            "penulis" => "Ivans Zuwanta,S.Kom",
            "judul" => "39",
            "tulisan" => "Basis Data"
        ],
        [
            "penulis" => "Labib Fayumi,S.Pd.Gr",
            "judul" => "79",
            "tulisan" => "PKWU"
        ],
        [
            "penulis" => "fikrotu Dwi Fuadatuzzahro,S.Pd",
            "judul" => "57",
            "tulisan" => "Pemrograman Web Dan Perangkat Bergerak"
        ],
        [
            "penulis" => "Estri Handayani,S.Pd",
            "judul" => "42",
            "tulisan" => "Pemrograman Berorientasi Objek"
        ]
    ];
    public function getAllBlog()
    {
        return $this->guru;
    }

}