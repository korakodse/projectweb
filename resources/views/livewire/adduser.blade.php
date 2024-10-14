<div>
    <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Create Account</div>
          </div>
          <section class="content">
          <form wire:submit.prevent="update" wire:ignore.self class="form-horizontal">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" wire:model="name" name="name" class="form-control" id="name" placeholder="Enter Name"/>
                  </div>
                  <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" wire:model="email" class="form-control" id="email" placeholder="Enter Email"/>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" wire:model="password" id="password" class="form-control" placeholder="Enter Password"/>
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
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
          </form>
          </section>
        </div>
      </div>
</div>
