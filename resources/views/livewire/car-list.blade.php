<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Laravel 11.x + Livewire 3.x crud</h2>
                </div>
                <div class="col">
                    <a href="/add/new" wire:navigate class="btn btn-success btn-sm float-end">Add New</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Car Name</th>
      <th scope="col">Brand</th>
      <th scope="col">Engine Capacity</th>
      <th scope="col">Fuel Type</th>
      <th colspan="2" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cars as $car)
        <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $car->car_name }}</td>
        <td>{{ $car->car_brand }}</td>
        <td>{{ $car->car_engine_capacity }}</td>
        <td>{{ $car->car_fuel_type }}</td>
        <td><a href="/edit/car/{{ $car->id }}" wire:navigate class="btn btn-primary btn-sm">Edit</a></td>
        <td><button class="btn btn-danger btn-sm" wire:click="delete({{ $car->id }})" wire:confirm="Are you sure you want to delete?">Delete</button></td>
        </tr>
    @endforeach
  </tbody>
</table>

        </div>
    </div>    
</div>
