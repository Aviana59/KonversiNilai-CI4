<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function hitung()
    {
        $partisipasi = $this->request->getPost('partisipasi');
        $tugas = $this->request->getPost('tugas');
        $uas = $this->request->getPost('uts');
        $uas = $this->request->getPost('uas');

        // Validator
        $rules = [
            'partisipasi' => 'required|decimal|less_than_equal_to[100]',
            'tugas' => 'required|decimal|less_than_equal_to[100]',
            'uts' => 'required|decimal|less_than_equal_to[100]',
            'uas' => 'required|decimal|less_than_equal_to[100]',
        ];

        $this->validator->setRules($rules);
        if (!$this->validate($this->request->getPost())) {
            // masukan fungsi buat hitung dan konversi
            $nilai = (($this->request->getVar('partisipasi') * 2) + ($this->request->getVar('tugas') * 3) + ($this->request->getVar('uts') * 2) + ($this->request->getVar('uas') * 3)) / 10;
            if ($nilai < 100 && $nilai >= 85) {
                $nilaiAkhir = "A";
            } elseif ($nilai < 85 && $nilai >= 80) {
                $nilaiAkhir = "A-";
            } elseif ($nilai < 80 && $nilai >= 75) {
                $nilaiAkhir = "B+";
            } elseif ($nilai < 75 && $nilai >= 70) {
                $nilaiAkhir = "B";
            } elseif ($nilai < 70 && $nilai >= 65) {
                $nilaiAkhir = "B-";
            } elseif ($nilai < 65 && $nilai >= 60) {
                $nilaiAkhir = "C+";
            } elseif ($nilai < 60 && $nilai >= 55) {
                $nilaiAkhir = "C";
            } elseif ($nilai < 55 && $nilai >= 40) {
                $nilaiAkhir = "D";
            } else {
                $nilaiAkhir = 'E';
            }
            $data['nilaiAkhir'] =  $nilaiAkhir;
        } else {
            // return error
            return $rules;
        }
        $data['nilaiAkhir'] =  $nilaiAkhir;
        return view('hasil', $data);
    }
}
