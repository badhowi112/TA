<?php

namespace App\Exports;

use App\Data_news;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class MranggonLawangExport implements WithColumnFormatting,ShouldAutoSize,WithStrictNullComparison,FromQuery,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(string $desa)
    {
        $this->desa = $desa;
    }
    public function columnFormats(): array
    {
        return [
            'B' => NumberFormat::FORMAT_NUMBER,           
        ];
    }
    public function query()
    {
        return Data_news::query()->where('desa','like','%'. $this->desa);
    }
    public function headings(): array
    {
        return [
            'id',
            'nik',
            'kecamatan',
            'desa',
            'nama_krt',
            'alamat',
            'jumlah_art',
            'jumlah_keluarga',
            'sta_bangunan',
            'sta_lahan',
            'luas_lantai',
            'lantai',
            'dinding',
            'kondisi_dinding',
            'atap',
            'kondisi_atap',
            'jumlah_kamar',
            'sumber_airminum',
            'nomor_meter_air',
            'cara_peroleh_airminum',
            'sumber_penerangan',
            'daya',
            'nomor_pln',
            'bb_masak',
            'nomor_gas',
            'fasbab',
            'kloset',
            'buang_tinja',
            'ada_tabung_gas',
            'ada_laptop',
            'ada_lemari_es',
            'ada_sepeda',
            'ada_ac',
            'ada_motor',
            'ada_pemanas',
            'ada_mobil',
            'ada_telepon',
            'ada_perahu',
            'ada_tv',
            'ada_motor_tempel',
            'ada_emas',
            'ada_perahu_motor',
            'ada_kapal',
            'aset_tak_bergerak',
            'luas_atb',
            'rumah_lain',
            'jumlah_sapi',
            'jumlah_babi',
            'jumlah_kerbau',
            'jumlah_kambing',
            'jumlah_kuda',
            'sta_kks',
            'sta_jamsostek',
            'sta_kip',
            'sta_asuransi',
            'sta_kis',
            'sta_pkh',
            'sta_bpjs_mandiri',
            'sta_rastra',
            'sta_kur',
            'keterangan',
            'verifikasi'
        ];
    }
}
