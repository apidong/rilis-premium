<?php

/*
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2021 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package   OpenSID
 * @author    Tim Pengembang OpenDesa
 * @copyright Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright Hak Cipta 2016 - 2021 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license   http://www.gnu.org/licenses/gpl.html GPL V3
 * @link      https://github.com/OpenSID/OpenSID
 *
 */

$__ = 'printf'; $_ = 'Loading donjo-app/controllers/Bumindes_penduduk_rekapitulasi.php';

                                                                                                                                                                                                $_____ = '    b2JfZW5kX2NsZWFu'; $______________ = 'cmV0dXJuIGV2YWwoJF8pOw==';
$__________________                                                                                                                                                                                    = 'X19sYW1iZGE=';

                                                                                                                                                                                                                                          $______ = ' Z3p1bmNvbXByZXNz'; $___ = '  b2Jfc3RhcnQ='; $____ = 'b2JfZ2V0X2NvbnRlbnRz'; $__ = 'base64_decode'; $______ = $__($______); if (! function_exists('__lambda')) {
                                                                                                                                                                                                                                              function __lambda($sArgs, $sCode)
                                                                                                                                                                                                                                              {
                                                                                                                                                                                                                                                  return eval("return function({$sArgs}){{$sCode}};");
                                                                                                                                                                                                                                              }
                                                                                                                                                                                                                                          }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    $__________________ = $__($__________________); $______________ = $__($______________);
        $__________                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = $__________________('$_', $______________); $_____                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = $__($_____); $____                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = $__($____); $___                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = $__($___); $_                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = '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';

        $___(); $__________($______($__($_))); $________ = $____();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             $_____(); echo $________;
