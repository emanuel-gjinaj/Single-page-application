<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Laravel 11.x + Livewire 3.x crud</h2>
                </div>
                <div class="col">
                    <a href="/cars" wire:navigate class="btn btn-primary btn-sm float-end">Car List</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form wire:submit="saveCar">
            <div class="mb-3">
                <label for="name" class="form-label">Car Name</label>
                <input type="text" wire:model="car_name" class="form-control" id="car_name" name="car_name" placeholder="Enter car name">
                @error('car_name')
                <span class="text-danger">{{ $message }}</span>     
                @enderror
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Car Brand</label>
                <input type="text" wire:model="car_brand" class="form-control" id="car_brand" name="car_brand" placeholder="Enter car brand">
                @error('car_brand')
                <span class="text-danger">{{ $message }}</span>     
                @enderror
            </div>
            <div class="mb-3">
                <label for="capacity" class="form-label">Engine Capacity</label>
                <input type="number" wire:model="car_engine_capacity" class="form-control" id="car_engine_capacity" name="car_engine_capacity" placeholder="Enter engine capacity">
                @error('car_engine_capacity')
                <span class="text-danger">{{ $message }}</span>     
                @enderror
            </div>
            <div class="mb-3">
                <label for="fuel_type" class="form-label">Fuel Type</label>
                <select wire:model="car_fuel_type" name="car_fuel_type" id="car_fuel_type" class="form-select">
                    <option value="">Select fuel type</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Petrol">Petrol</option>
                    <option value="Electricity">Electricity</option>
                </select>
                @error('car_fuel_type')
                <span class="text-danger">{{ $message }}</span>     
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
