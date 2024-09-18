<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\RealEstate;
use App\Models\Region;
use Illuminate\Http\Request;

class RealEstateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = Region::query()->orderBy('id', 'asc')->get();

        if (count($regions) === 0) {
            abort(404);
        }

        $regionReq = request()->region ? request()->region : '';
        $priceReq = request()->price ? explode('-', request()->get('price')) : [];
        $areaReq = request()->area ? explode('-', request()->get('area')) : [];
        $bedroomsReq = request()->bedrooms ? request()->bedrooms : '';

        $query = RealEstate::query()->with('city');

        if (!request()->region && !request()->price && !request()->area && !request()->bedrooms) {
            $query->orderBy('created_at', 'desc');
        }

        if ($regionReq !== '') {
            $query->whereHas('city.region', function ($query) use ($regionReq) {
                $query->where('name', '=', $regionReq);
            });
        }

        if (count($priceReq) === 2) {
            $minPrice = $priceReq[0];
            $maxPrice = $priceReq[1];
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        }

        if (count($areaReq) === 2) {
            $minArea = $areaReq[0];
            $maxArea = $areaReq[1];
            $query->whereBetween('area', [$minArea, $maxArea]);
        }

        if ($bedroomsReq !== '') {
            $query->where('bedrooms', '=', $bedroomsReq);
        }

        $realEstates = $query->get();

        return view('pages.listings.index', [
            'regions' => $regions,
            'realEstates' => $realEstates
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
