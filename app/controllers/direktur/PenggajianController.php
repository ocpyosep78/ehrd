<?php namespace Direktur;

use BaseController, View, Input, Redirect, LaporanAbsensi, user, Karyawan, Auth, PDF; // Tanggal;

class PenggajianController extends BaseController {

	public function __construct(){
		$this->menu = array(
          array('menu' => '',
                      'link' => ''
                      )
        );
      	$this->tanda = array('');
	    $this->title = 'Penggajian';
	    $this->absensi = new LaporanAbsensi();
	}

	public function index(){
    	$data['menu'] = $this->menu;
    	$data['tanda'] = $this->tanda;
    	$data['title'] = $this->title;
    	return View::make('direktur.penggajian.index')
                  ->with('data', $data);
	}

	public function show($id)
	{
            $data['menu'] = $this->menu;
            $data['tanda'] = $this->tanda;
            $data['title'] = $this->title;
            return View::make('hrdstaff.agama.show')
                        ->with('data', $data);

	}

	public function store()
	{
		$input = Input::all();
		$data['penggajian'] = $this->absensi->getLaporanAbsensi($input);
		$bulan = array('Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
		$i = 1;
		foreach ($bulan as $value) {
			if ($i == $input['bulan']) {
				$data['bulan'] = $value;
			}
			$i++;
		}
		$data['tahun'] = $input['tahun'];
		$pdf = PDF::loadView('direktur.pdfreport.laporanpenggajian', array('data' => $data))->setPaper('a4')->setOrientation('portrait');
		return $pdf->stream('penggajian-'.$data['bulan'].'/'.$input['tahun'].'.pdf');

	}

}