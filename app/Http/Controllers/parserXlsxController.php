<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shuchkin\SimpleXLSX;


class parserXlsxController extends Controller
{
    public function parser()
    {
        if ( $xlsx = SimpleXLSX::parse(request()->file('file')) ) {
            dd( $xlsx->rows() );

        } else {
            return SimpleXLSX::parseError();
        }
//
//        if ( $xlsx = SimpleXLSX::parse(request()->file('file'))) {
//            // Produce array keys from the array values of 1st array element
//            $header_values = $rows = [];
//            foreach ( $xlsx->rows() as $k => $r ) {
//                if ( $k === 0 ) {
//                    $header_values = $r;
//                    continue;
//                }
//                $rows[] = array_combine( $header_values, $r );
//            }
//            dd( $rows );
//        }

    }
}
