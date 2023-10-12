<?php

namespace App\Enum\Penduduk;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;


enum Pekerjaan: string implements HasLabel
{
    case BELUM_TIDAK_BEKERJA = 'BELUM/TIDAK BEKERJA';
    case MENGURUS_RUMAH_TANGGA = 'MENGURUS RUMAH TANGGA';
    case PELAJAR_MAHASISWA = 'PELAJAR/MAHASISWA';
    case PENSIUNAN = 'PENSIUNAN';
    case PEGAWAI_NEGERI_SIPIL = 'PEGAWAI NEGERI SIPIL';
    case TENTARA = 'TENTARA';
    case KEPOLISIAN = 'KEPOLISIAN';
    case PERDAGANGAN = 'PERDAGANGAN';
    case PETANI_PEKEBUN = 'PETANI/PEKEBUN';
    case PETERNAK = 'PETERNAK';
    case NELAYAN_PERIKANAN = 'NELAYAN/PERIKANAN';
    case INDUSTRI = 'INDUSTRI';
    case KONSTRUKSI = 'KONSTRUKSI';
    case TRANSPORTASI = 'TRANSPORTASI';
    case KARYAWAN_SWASTA = 'KARYAWAN SWASTA';
    case KARYAWAN_BUMN = 'KARYAWAN BUMN';
    case KARYAWAN_BUMD = 'KARYAWAN BUMD';
    case KARYAWAN_HONORER = 'KARYAWAN HONORER';
    case BURUH_HARIAN_LEPAS = 'BURUH HARIAN LEPAS';
    case BURUH_TANI_PERKEBUNAN = 'BURUH TANI/PERKEBUNAN';
    case BURUH_NELAYAN_PERIKANAN = 'BURUH NELAYAN/PERIKANAN';
    case BURUH_PETERNAKAN = 'BURUH PETERNAKAN';
    case PEMBANTU_RUMAH_TANGGA = 'PEMBANTU RUMAH TANGGA';
    case TUKANG_CUKUR = 'TUKANG CUKUR';
    case TUKANG_LISTRIK = 'TUKANG LISTRIK';
    case TUKANG_BATU = 'TUKANG BATU';
    case TUKANG_KAYU = 'TUKANG KAYU';
    case TUKANG_SOL_SEPATU = 'TUKANG SOL SEPATU';
    case TUKANG_LAS_PANDAI_BESI = 'TUKANG LAS/PANDAI BESI';
    case TUKANG_JAHIT = 'TUKANG JAHIT';
    case PENATA_RAMBUT = 'PENATA RAMBUT';
    case PENATA_RIAS = 'PENATA RIAS';
    case PENATA_BUSANA = 'PENATA BUSANA';
    case MEKANIK = 'MEKANIK';
    case TUKANG_GIGI = 'TUKANG GIGI';
    case SENIMAN = 'SENIMAN';
    case TABIB = 'TABIB';
    case PARAJI = 'PARAJI';
    case PERANCANG_BUSANA = 'PERANCANG BUSANA';
    case PENTERJEMAH = 'PENTERJEMAH';
    case IMAM_MASJID = 'IMAM MASJID';
    case PENDETA = 'PENDETA';
    case TOKOH_AGAMA = 'TOKOH AGAMA';
    case NOTARIS = 'NOTARIS';
    case ARSITEK = 'ARSITEK';
    case AKUNTAN = 'AKUNTAN';
    case KONSULTAN = 'KONSULTAN';
    case DOKTER = 'DOKTER';
    case BIDAN = 'BIDAN';
    case PERAWAT = 'PERAWAT';
    case APOTEKER = 'APOTEKER';
    case PSIKIATER_PSIKOLOG = 'PSIKIATER/PSIKOLOG';
    case PENYIAR_TELEVISI = 'PENYIAR TELEVISI';
    case PENYIAR_RADIO = 'PENYIAR RADIO';
    case PELAUT = 'PELAUT';
    case PENELITI = 'PENELITI';
    case SOPIR = 'SOPIR';
    case PIALANG = 'PIALANG';
    case PRESIDEN = 'PRESIDEN';
    case WAKIL_PRESIDEN = 'WAKIL PRESIDEN';
    case ANGGOTA_MAHKAMAH_KONSTITUSI = 'ANGGOTA MAHKAMAH KONSTITUSI';
    case ANGGOTA_KABINET_KEMENTRIAN = 'ANGGOTA KABINET/KEMENTRIAN';
    case DUTA_BESAR = 'DUTA BESAR';
    case GUBERNUR = 'GUBERNUR';
    case WAKIL_GUBERNUR = 'WAKIL GUBERNUR';
    case BUPATI = 'BUPATI';
    case WAKIL_BUPATI = 'WAKIL BUPATI';
    case ANGGOTA_DPRD_PROVINSI = 'ANGGOTA DPRD PROVINSI';
    case ANGGOTA_DPRD_KAB_KOTA = 'ANGGOTA DPRD KAB/KOTA';
    case DOSEN = 'DOSEN';
    case GURU = 'GURU';
    case PILOT = 'PILOT';
    case PENGACARA = 'PENGACARA';
    case PARANORMAL = 'PARANORMAL';
    case PEDAGANG = 'PEDAGANG';
    case WIRASWASTA = 'WIRASWASTA';
    case WARTAWAN = 'WARTAWAN';
    case LAINNYA = 'LAINNYA';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::BELUM_TIDAK_BEKERJA => 'BELUM/TIDAK BEKERJA',
            self::MENGURUS_RUMAH_TANGGA => 'MENGURUS RUMAH TANGGA',
            self::PELAJAR_MAHASISWA => 'PELAJAR/MAHASISWA',
            self::PENSIUNAN => 'PENSIUNAN',
            self::PEGAWAI_NEGERI_SIPIL => 'PEGAWAI NEGERI SIPIL',
            self::TENTARA => 'TENTARA',
            self::KEPOLISIAN => 'KEPOLISIAN',
            self::PERDAGANGAN => 'PERDAGANGAN',
            self::PETANI_PEKEBUN => 'PETANI/PEKEBUN',
            self::PETERNAK => 'PETERNAK',
            self::NELAYAN_PERIKANAN => 'NELAYAN/PERIKANAN',
            self::INDUSTRI => 'INDUSTRI',
            self::KONSTRUKSI => 'KONSTRUKSI',
            self::TRANSPORTASI => 'TRANSPORTASI',
            self::KARYAWAN_SWASTA => 'KARYAWAN SWASTA',
            self::KARYAWAN_BUMN => 'KARYAWAN BUMN',
            self::KARYAWAN_BUMD => 'KARYAWAN BUMD',
            self::KARYAWAN_HONORER => 'KARYAWAN HONORER',
            self::BURUH_HARIAN_LEPAS => 'BURUH HARIAN LEPAS',
            self::BURUH_TANI_PERKEBUNAN => 'BURUH TANI/PERKEBUNAN',
            self::BURUH_NELAYAN_PERIKANAN => 'BURUH NELAYAN/PERIKANAN',
            self::BURUH_PETERNAKAN => 'BURUH PETERNAKAN',
            self::PEMBANTU_RUMAH_TANGGA => 'PEMBANTU RUMAH TANGGA',
            self::TUKANG_CUKUR => 'TUKANG CUKUR',
            self::TUKANG_LISTRIK => 'TUKANG LISTRIK',
            self::TUKANG_BATU => 'TUKANG BATU',
            self::TUKANG_KAYU => 'TUKANG KAYU',
            self::TUKANG_SOL_SEPATU => 'TUKANG SOL SEPATU',
            self::TUKANG_LAS_PANDAI_BESI => 'TUKANG LAS/PANDAI BESI',
            self::TUKANG_JAHIT => 'TUKANG JAHIT',
            self::PENATA_RAMBUT => 'PENATA RAMBUT',
            self::PENATA_RIAS => 'PENATA RIAS',
            self::PENATA_BUSANA => 'PENATA BUSANA',
            self::MEKANIK => 'MEKANIK',
            self::TUKANG_GIGI => 'TUKANG GIGI',
            self::SENIMAN => 'SENIMAN',
            self::TABIB => 'TABIB',
            self::PARAJI => 'PARAJI',
            self::PERANCANG_BUSANA => 'PERANCANG BUSANA',
            self::PENTERJEMAH => 'PENTERJEMAH',
            self::IMAM_MASJID => 'IMAM MASJID',
            self::PENDETA => 'PENDETA',
            self::TOKOH_AGAMA => 'TOKOH AGAMA',
            self::NOTARIS => 'NOTARIS',
            self::ARSITEK => 'ARSITEK',
            self::AKUNTAN => 'AKUNTAN',
            self::KONSULTAN => 'KONSULTAN',
            self::DOKTER => 'DOKTER',
            self::BIDAN => 'BIDAN',
            self::PERAWAT => 'PERAWAT',
            self::APOTEKER => 'APOTEKER',
            self::PSIKIATER_PSIKOLOG => 'PSIKIATER/PSIKOLOG',
            self::PENYIAR_TELEVISI => 'PENYIAR TELEVISI',
            self::PENYIAR_RADIO => 'PENYIAR RADIO',
            self::PELAUT => 'PELAUT',
            self::PENELITI => 'PENELITI',
            self::SOPIR => 'SOPIR',
            self::PIALANG => 'PIALANG',
            self::PRESIDEN => 'PRESIDEN',
            self::WAKIL_PRESIDEN => 'WAKIL PRESIDEN',
            self::ANGGOTA_MAHKAMAH_KONSTITUSI => 'ANGGOTA MAHKAMAH KONSTITUSI',
            self::ANGGOTA_KABINET_KEMENTRIAN => 'ANGGOTA KABINET/KEMENTRIAN',
            self::DUTA_BESAR => 'DUTA BESAR',
            self::GUBERNUR => 'GUBERNUR',
            self::WAKIL_GUBERNUR => 'WAKIL GUBERNUR',
            self::BUPATI => 'BUPATI',
            self::WAKIL_BUPATI => 'WAKIL BUPATI',
            self::ANGGOTA_DPRD_PROVINSI => 'ANGGOTA DPRD PROVINSI',
            self::ANGGOTA_DPRD_KAB_KOTA => 'ANGGOTA DPRD KAB/KOTA',
            self::DOSEN => 'DOSEN',
            self::GURU => 'GURU',
            self::PILOT => 'PILOT',
            self::PENGACARA => 'PENGACARA',
            self::PILOT => 'PILOT',
            self::NOTARIS => 'NOTARIS',
            self::ARSITEK => 'ARSITEK',
            self::AKUNTAN => 'AKUNTAN',
            self::KONSULTAN => 'KONSULTAN',
            self::DOKTER => 'DOKTER',
            self::BIDAN => 'BIDAN',
            self::PERAWAT => 'PERAWAT',
            self::APOTEKER => 'APOTEKER',
            self::PSIKIATER_PSIKOLOG => 'PSIKIATER/PSIKOLOG',
            self::PENYIAR_TELEVISI => 'PENYIAR TELEVISI',
            self::PENYIAR_RADIO => 'PENYIAR RADIO',
            self::PELAUT => 'PELAUT',
            self::PENELITI => 'PENELITI',
            self::SOPIR => 'SOPIR',
            self::PIALANG => 'PIALANG',
            self::PARANORMAL => 'PARANORMAL',
            self::PEDAGANG => 'PEDAGANG',
            self::WIRASWASTA => 'WIRASWASTA',
            self::LAINNYA => 'LAINNYA',
            self::WARTAWAN => 'WARTAWAN',
            default => null,
        };
    }
}
