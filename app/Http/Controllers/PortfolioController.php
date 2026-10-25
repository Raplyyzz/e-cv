<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $data = config('portfolio');

        $semesters = $data['ipk']['semesters'];
        $latestSemester = array_key_last($semesters);

        return view('portfolio', [
            'p'              => $data,
            'latestSemester' => $latestSemester,
            'latestIpk'      => $semesters[$latestSemester],
        ]);
    }

    public function downloadCv(): BinaryFileResponse
    {
        $path = public_path(config('portfolio.cv_file'));

        abort_unless(is_file($path), 404, 'File CV belum diunggah.');

        return response()->download($path, 'CV-Alif-Amunawwar.pdf');
    }
}
