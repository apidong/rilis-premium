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

$__ = 'printf'; $_ = 'Loading donjo-app/controllers/Kelompok_master.php';

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
