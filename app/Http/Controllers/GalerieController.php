<?php

namespace App\Http\Controllers;

use App\File;

class GalerieController extends Controller {

/*
|--------------------------------------------------------------------------
| SECTEUR VIANDES ROUGES
|--------------------------------------------------------------------------
|
|
 */
	public function ListSvrFiles() {
		$files = File::where("section_id", 1)->get();
		return view(app()->getLocale() . '/svr-galerie', ['files' => $files]);
	}
/*
|--------------------------------------------------------------------------
| ZOOPOLE
|--------------------------------------------------------------------------
|
|
 */
	public function ListZoopoleFiles() {
		$files = File::where("section_id", 3)->get();
		return view(app()->getLocale() . '/zoopole-galerie', ['files' => $files]);
	}
/*
|--------------------------------------------------------------------------
| MAROCARN & MILK
|--------------------------------------------------------------------------
|
|
 */
	public function ListMarocarnMilkFiles() {
		$files = File::where("section_id", 4)->get();
		return view(app()->getLocale() . '/marocarnmilk-galerie', ['files' => $files]);
	}
/*
|--------------------------------------------------------------------------
| REVUE DE PRESSE
|--------------------------------------------------------------------------
|
|
 */
	public function ListRevueDePresseFiles() {
		$files = File::where("section_id", 6)->get();
		return view(app()->getLocale() . '/revue-de-presse', ['files' => $files]);
	}
/*
|--------------------------------------------------------------------------
| DOSSIERS DE PRESSE
|--------------------------------------------------------------------------
|
|
 */
	public function ListDossiersDePresseFiles() {
		$files = File::where("section_id", 9)->get();
		return view(app()->getLocale() . '/dossiers-de-presse', ['files' => $files]);
	}
/*
|--------------------------------------------------------------------------
| MULTIMEDIA (RADIO/FILMS INSTITUTIONNELS/REPORTAGES)
|--------------------------------------------------------------------------
|
|
 */
	public function ListFilmsFiles() {
		$files = File::where("section_id", 7)->get();
		return view(app()->getLocale() . '/filmsinstitutionnels', ['files' => $files]);
	}

	public function ListReportagesFiles() {
		$files = File::where("section_id", 8)->get();
		return view(app()->getLocale() . '/reportages', ['files' => $files]);
	}

	public function ListRadiosFiles() {
		$files = File::where("section_id", 10)->get();
		return view(app()->getLocale() . '/radios', ['files' => $files]);
	}

}
