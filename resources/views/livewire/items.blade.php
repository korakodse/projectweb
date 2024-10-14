<div>
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Edit Profile</div>
          </div>

          <div class="card-body">
            <table class="table table-striped projects">
                <thead>
                    <tr >
                        <th style="width: 1%">
                            ID
                        </th>
                        <th style="width: 20%">
                            Name
                        </th>
                        <th style="width: 20%">
                            Drescription
                        </th>
                        <th style="width: 8%">
                            Photo
                        </th>
                    </tr>
                </thead>
                <tbody>
                 {{-- การวนลูปตามจำนวน array ใน db --}}
                  @foreach ($data as $item)
                    <tr>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                              {{$item->name}}
                        </td>
                        <td>
                              {{$item->description}}
                        </td>
                        <td>
                          <img alt="Avatar" class="profile-user-img img-fluid img-circle" src="{{asset('storage')}}/{{$item->profile_photo_path}}">
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href={{route('edititem',['id'=>$item->id])}}>
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" wire:confirm="Are you sure you want to delete this post?" wire:click='delete({{$item->id}})'>
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-center">
          {{$data->links()}}
          </div>
          </div>
      </div>
</div>
