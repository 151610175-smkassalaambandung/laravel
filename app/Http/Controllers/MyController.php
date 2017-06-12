<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
	//percobaan = method
	//return = menampilkan
    //passing data basic
    public function percobaan()
    {
    	$a = "Ahmad Muhaimin";
    	return "Nama Saya Adalah ".$a;
    }

    //passing data show view
    public function percobaan2()
    {
    	return view('latihan.about');
    }

    //passing data variable to view
    public function percobaan3()
    {
    	$a = "Muhaimin";
    	return view('latihan.saya',compact('a'));
    	//compact=untuk transfer
    }

    //passing data variable to view
    public function percobaan4()
    {
    	$a = "Muhaimin";
    	$b = "XI RPL 1";
    	$c = "SMK Assalaam";
    	return view('latihan.bio',compact('a','b','c'));
    	//compact=untuk transfer
    }

    //if dan else
    public function percobaan5()
    {
    	$a = 1;
    	$b = 2;
    	$c = 3;
    	return view('latihan.seleksi',compact('a','b','c'));
    	//compact=untuk transfer
    }

    //array
    public function percobaan6($id)
    {
    	$buah = ['Mangga','Jeruk','Apel','Anggur','Manggis'];
    	$mahlukhidup = ['Manusia','Hewan','Tumbuhan','Mamalia','Aligator'];
    	$komputer = ['Hardware','Software','Mouse','CPU','Keyboard'];
    	dd($id);
    	return view('latihan.buah',compact('buah','mahlukhidup','komputer'));
    }

    public function percobaan7($data,$data2=null)
    {
        $array = array(
                'buah' => ['mangga'=>['Harumanis','Marijan'],
                            'jeruk'=>['Bali','Purut'],
                            'apel'=>['Fuji','Malang']
                          ],
                'binatang' => ['kucing'=>['Persia','Anggora'],
                               'hamster'=>['Hamtaro','Hamtari'],
                               'kelinci'=>['Anggora','Persia']
                              ],
                'komputer' => ['dell'=>['Alienware','Insipron'],
                               'asus'=>['456UR','456']
                              ],
                );
        if ($data) {
        $query = (array_keys($array[$data]));
        }
        if ($data2) {
        $query = ($array[$data][$data2]);
        }
        return view('latihan.looping',compact('query','data','data2'));
    }
}