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

$__ = 'printf'; $_ = 'Loading donjo-app/controllers/Laporan_inventaris.php';

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
