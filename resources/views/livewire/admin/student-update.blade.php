

<div  class="modal fade" id="updatestudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: lightgreen;">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Edit Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         @if(Session::has('message'))
          <div class="alert alert-success">
            <strong> Success  :</strong> {{ Session('message') }}
          </div>
          @endif
        <form enctype="multipart/form-data">
                  @csrf
                  
                <div class="form-row">
                  <input type="text" name="id" wire:model="ids">
                  <div class="form-group col-md-12">
                    <label for="name">Name</label>
                    <input type="name"class="form-control"  name="name" id="name" placeholder="Enter name" value="" wire:model="name">
                @error('name') <p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                  <div class="form-group col-md-12">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" wire:model="email">
                @error('email') <p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                    <div class="form-group col-md-12">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile" wire:model="mobile">
                     @error('mobile') <p class="text-danger">{{ $message }}</p>@enderror
                  </div>

                  <div class="form-group col-md-12">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter address" wire:model="address">
                     @error('address') <p class="text-danger">{{ $message }}</p>@enderror
                  </div>

                  <div class="form-group col-md-12">
                    <label for="status">Address</label>
                    <select class="form-control form-control-md" name="status" id="status"  wire:model="status">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                     @error('status') <p class="text-danger">{{ $message }}</p>@enderror
                  </div>




                    <div class="form-group col-md-12"> 
                    <label for="image" class="col-sm-3 col-form-label text-right"> Image</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" wire:model="image">
                     @error('image') <p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                  @if($image)
                  <img style="margin-left: 200px" src="{{ $image->temporaryUrl() }}" width="60px">
                  @endif
                  </div>
                 
                   </form>
                  </div>
                 
      </div>
      <div class="modal-footer" style="background-color: lightgreen;color: white">
        <button type="button" class="btn btn-danger font-weight-bold" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning font-weight-bold" wire:click.prevent="update()">Update Student</button>
        
      </div>
    </div>
  </div>
</div>