<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class AddCar extends Component
{
    public $car_name = '';
    public $car_brand = '';
    public $car_engine_capacity = '';
    public $car_fuel_type = '';

    public function saveCar()
    {
        $this->validate([
            'car_name' =>'required',
            'car_brand' => 'required',
            'car_engine_capacity' => 'required',
            'car_fuel_type' => 'required'
        ]);

        try {
            $new_car = new Car;
            $new_car->car_name = $this->car_name;
            $new_car->car_brand = $this->car_brand;
            $new_car->car_engine_capacity = $this->car_engine_capacity;
            $new_car->car_fuel_type = $this->car_fuel_type;
            $new_car->save();
            return $this->redirect('/cars', navigate:true);
        }catch(\Exception $e){
            dd($e);
        }
        
    }
    public function render()
    {
        return view('livewire.add-car');
    }
}
