<?php

namespace App\Imports;

use App\Data_news;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\WithValidation;
class SumbersukoImport implements ToModel,WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Data_news([
            //
            'nik' => $row['nik'],
            'kecamatan' =>$row['kecamatan'],
            'desa' =>$row['desa'],
            'nama_krt' =>$row['nama_krt'],
            'alamat' =>$row['alamat'],
            'jumlah_art' =>$row['jumlah_art'],
            'jumlah_keluarga' =>$row['jumlah_keluarga'],
            'sta_bangunan' =>$row['sta_bangunan'],
            'sta_lahan' =>$row['sta_lahan'],
            'luas_lantai' =>$row['luas_lantai'],
            'lantai' =>$row['lantai'],
            'dinding' =>$row['dinding'],
            'kondisi_dinding' =>$row['kondisi_dinding'],
            'atap' =>$row['atap'],
            'kondisi_atap' =>$row['kondisi_atap'],
            'jumlah_kamar' =>$row['jumlah_kamar'],
            'sumber_airminum' =>$row['sumber_airminum'],
            'nomor_meter_air' =>$row['nomor_meter_air'],
            'cara_peroleh_airminum' =>$row['cara_peroleh_airminum'],
            'sumber_penerangan' =>$row['sumber_penerangan'],
            'daya' =>$row['daya'],
            'nomor_pln' =>$row['nomor_pln'],
            'bb_masak' =>$row['bb_masak'],
            'nomor_gas' =>$row['nomor_gas'],
            'fasbab' =>$row['fasbab'],
            'kloset' =>$row['kloset'],
            'buang_tinja' =>$row['buang_tinja'],
            'ada_tabung_gas' =>$row['ada_tabung_gas'],
            'ada_laptop' =>$row['ada_laptop'],
            'ada_lemari_es' =>$row['ada_lemari_es'],
            'ada_sepeda' =>$row['ada_sepeda'],
            'ada_ac' =>$row['ada_ac'],
            'ada_motor' =>$row['ada_motor'],
            'ada_pemanas' =>$row['ada_pemanas'],
            'ada_mobil' =>$row['ada_mobil'],
            'ada_telepon' =>$row['ada_telepon'],
            'ada_perahu' =>$row['ada_perahu'],
            'ada_tv' =>$row['ada_tv'],
            'ada_motor_tempel' =>$row['ada_motor_tempel'],
            'ada_emas' =>$row['ada_emas'],
            'ada_perahu_motor' =>$row['ada_perahu_motor'],
            'ada_kapal' =>$row['ada_kapal'],
            'aset_tak_bergerak' =>$row['aset_tak_bergerak'],
            'luas_atb' =>$row['luas_atb'],
            'rumah_lain' =>$row['rumah_lain'],
            'jumlah_sapi' =>$row['jumlah_sapi'],
            'jumlah_babi' =>$row['jumlah_babi'],
            'jumlah_kerbau' =>$row['jumlah_kerbau'],
            'jumlah_kambing' =>$row['jumlah_kambing'],
            'jumlah_kuda' =>$row['jumlah_kuda'],
            'sta_kks' =>$row['sta_kks'],
            'sta_jamsostek' =>$row['sta_jamsostek'],
            'sta_kip' =>$row['sta_kip'],
            'sta_asuransi' =>$row['sta_asuransi'],
            'sta_kis' =>$row['sta_kis'],
            'sta_pkh' =>$row['sta_pkh'],
            'sta_bpjs_mandiri' =>$row['sta_bpjs_mandiri'],
            'sta_rastra' =>$row['sta_rastra'],
            'sta_kur' =>$row['sta_kur'],
            'keterangan' =>$row['keterangan'],
            'verifikasi' =>$row['verifikasi'],
        ]);
    }
    public function rules(): array 
    {
        return [
            '*.nik' => 'unique:data_news_2,nik',    
        ];
    }
    public function customValidationMessages()
    {
    return [
        'nik.unique' => 'Terdapat Data Yang Sama Pada Kolom :attribute, Mohon Di Cek Kembali',
    ];
    }
}
