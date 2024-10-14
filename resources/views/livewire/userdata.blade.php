<div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Profile</div>
                  </div>
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{asset('storage')}}/{{auth()->user()->profile_photo_path}}"
                         alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

                  <p class="text-muted text-center">{{ auth()->user()->email }}</p>

                </div>
                <!-- /.card-body -->
              </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Edit Profile</div>
            </div>
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
