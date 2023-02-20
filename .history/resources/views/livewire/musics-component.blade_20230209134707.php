<div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="float-start"><strong>All Music</strong></h5>

                    </div>

                    <div class="card-body">
                        <form class="form-group row">
                            <label for="artist_name col-3">Music ID</label>
                            <div class="col-12">
                                <input type="text" name="" id="" class="form-control" wire:model='music_id'>
                                @error('music_id')
                                    <span class="text-danger text-lg">{{$message}}</span>
                                @enderror
                            </div>

                            <label for="artist_name col-3">Music ID</label>
                            <div class="col-12">
                                <input type="text" name="" id="" class="form-control" wire:model='music_id'>
                                @error('music_id')
                                    <span class="text-danger text-lg">{{$message}}</span>
                                @enderror
                            </div>
                        </form>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary float-end">Add Music</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
