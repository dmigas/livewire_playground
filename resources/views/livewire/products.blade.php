<div>
    <div class="card">
        <div class="card-body">
            <div class="form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" wire:model="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" wire:model="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <button type="submit" wire:click="store()" class="btn btn-secondary btn-sm">Save</button>
            </div>
        </div>
    </div>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td><a href="" class="btn btn-primary btn-sm">Edit</a></td>
            </tr>
        @endforeach
    </table>
</div>
