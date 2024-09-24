<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class EditCar extends Component
{
    public $car_id;

    public Car $car_data;

    public $car_name = '';
    public $car_brand = '';
    public $car_engine_capacity = '';
    public $car_fuel_type = '';

    public function update()
    {
        $this->validate([
            'car_name' =>'required',
            'car_brand' => 'required',
            'car_engine_capacity' => 'required',
            'car_fuel_type' => 'required'
        ]);

        try {
            Car::where("id",$this->car_id)->update([
            "car_name" => $this->car_name,
            "car_brand" => $this->car_brand,
            "car_engine_capacity" => $this->car_engine_capacity,
            "car_fuel_type" => $this->car_fuel_type
            ]);
            return $this->redirect('/cars', navigate:true);
        }catch(\Exception $e){
            dd($e);
        }
        
    }

    public function mount($id){
        $this->car_id = $id;
        $this->car_data = Car::where("id", $id)->first();
        $this->car_name = $this->car_data->car_name;
        $this->car_brand = $this->car_data->car_brand;
        $this->car_engine_capacity = $this->car_data->car_engine_capacity;
        $this->car_fuel_type = $this->car_data->car_fuel_type;
    }
    public function render()
    {
        return view('livewire.edit-car');
    }
}
