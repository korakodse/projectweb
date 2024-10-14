<div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Edit Items</div>
        </div>
        <form wire:submit.prevent="insert" wire:ignore.self class="form-horizontal">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" wire:model="name" name="name" class="form-control" id="name" placeholder="Enter Name"/>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" wire:model="description" class="form-control" id="description" placeholder="Enter Drescription"/>
                </div>

                <div class="form-group">
                    <label for="img">Images</label>
                    <div class="col-sm-12">
                      <input type="file" wire:model="photo" class="form-control" id="img">
                    </div>
                </div>
          </div>
        </div>
            <div class="card-action">
            <button class="btn btn-success">Submit</button>
            <button class="btn btn-danger">Cancel</button>
            </div>
            </form>
        </div>
        </div>
    </div>
</div>
