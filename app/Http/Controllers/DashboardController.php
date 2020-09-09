<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Domain\Dashboard\Actions\GetAssetsGroupByManufaturerCountAction;

class DashboardController extends Controller
{
    public function index(GetAssetsGroupByManufaturerCountAction $GetAssetsGroupByManufaturerCountAction) {
        try {
            // dd($GetAssetsGroupByManufaturerCountAction());
            return view('pages.dashboard', ['data' => $GetAssetsGroupByManufaturerCountAction()]);
        } catch (\Exception $e) {
            //Error handling for future coding
        }

    }
}
