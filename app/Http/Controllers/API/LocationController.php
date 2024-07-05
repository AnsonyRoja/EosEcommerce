<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use Illuminate\Http\Request;
use App\States;
use App\Regions;
use App\Cities;

class LocationController extends BaseController
{
    public function getStates() {
        $States = States::where("status","A")->get();
        return $this->sendResponse($States);
    }

    public function getRegionsByState($state_id) {
        $Regions = Regions::where("status","A")->where("states_id",$state_id)->get();
        return $this->sendResponse($Regions);
    }

    public function getRegions() {
        $Regions = Regions::where("status","A")->get();
        return $this->sendResponse($Regions);
    }

    public function getCitiesByRegion($state_id) {
        $Regions = Cities::where("status","A")->where("regions_id",$state_id)->get();
        return $this->sendResponse($Regions);
    }

    public function getCities() {
        $Cities = Cities::where("status","A")->get();
        return $this->sendResponse($Cities);
    }

    public function getAllStates() {
        $States = States::All();
        return $this->sendResponse($States);
    }

    public function getAllRegions() {
        $Regions = Regions::All();
        return $this->sendResponse($Regions);
    }

    public function getAllCities() {
        $Cities = Cities::All();
        return $this->sendResponse($Cities);
    }
}
