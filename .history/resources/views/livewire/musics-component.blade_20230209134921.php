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
                            <label for="music_id col-3">Music ID</label>
                            <div class="col-12">
                                <input type="text" name="" id="music_id" class="form-control" wire:model='music_id'>
                                @error('music_id')
                                    <span class="text-danger text-lg">{{$message}}</span>
                                @enderror
                            </div>

                            <label for="artist_name col-3">Artist Name</label>
                            <div class="col-12">
                                <input type="text" name="" id="" class="form-control" wire:model='artist_name'>
                                @error('music_id')
                                    <span class="text-danger text-lg">{{$message}}</span>
                                @enderror
                            </div>

                            <label for="music_title col-3">Music Title</label>
                            <div class="col-12">
                                <input type="text" name="" id="music_title" class="form-control" wire:model='music_title'>
                                @error('music_id')
                                    <span class="text-danger text-lg">{{$message}}</span>
                                @enderror
                            </div>

                            <label for="record_label col-3">Record Label</label>
                            <div class="col-12">
                                <input type="text" name="" id="record_label" class="form-control" wire:model='label'>
                                @error('music_id')
                                    <span class="text-danger text-lg">{{$message}}</span>
                                @enderror
                            </div>

                            <label for="genre col-3">Genre</label>
                            <div class="col-12">
                                <input type="text" name="" id="genre" class="form-control" wire:model='music_id'>
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
