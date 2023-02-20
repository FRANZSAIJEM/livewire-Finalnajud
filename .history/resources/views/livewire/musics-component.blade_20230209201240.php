<div>
    <div class="container m-5">
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card mt-5 w-">
                    <div class="card-header bg-primary text-white">
                        <h5 class="float-start"><strong>Add Music</strong></h5>
                    </div>

                    <div class="card-body">
                        <form wire:submit.prevent='storeMusicData'>
                            <label for="music_id col-3">Music ID</label>
                            <div class="col-12">
                                <input type="text" name="" id="music_id" class="form-control" wire:model='music_id'>
                                @error('music_id')
                                    <span class="text-danger text-lg">{{$message}}</span>
                                @enderror
                            </div>
                            <br>
                            <label for="artist_name col-3">Artist Name</label>
                            <div class="col-12">
                                <input type="text" name="" id="" class="form-control" wire:model='artist_name'>
                                @error('artist_name')
                                    <span class="text-danger text-lg">{{$message}}</span>
                                @enderror
                            </div>
                            <br>
                            <label for="music_title col-3">Music Title</label>
                            <div class="col-12">
                                <input type="text" name="" id="music_title" class="form-control" wire:model='music_title'>
                                @error('music_title')
                                    <span class="text-danger text-lg">{{$message}}</span>
                                @enderror
                            </div>
                            <br>
                            <label for="record_label col-3">Record Label</label>
                            <div class="col-12">
                                <input type="text" name="" id="record_label" class="form-control" wire:model='label'>
                                @error('label')
                                    <span class="text-danger text-lg">{{$message}}</span>
                                @enderror
                            </div>
                            <br>
                            <label for="genre col-3">Genre</label>
                            <div class="col-12">
                                <select name="" id="" wire:model='genre' class="form-control">
                                    <option value="" hidden>Select Genre</option>
                                    <option value="Pop">Pop</option>
                                    <option value="EDM">EDM</option>
                                    <option value="Future Bass">Future Bass</option>
                                    <option value="House">House</option>
                                    <option value="Bounce">Bounce</option>
                                    <option value="Melodic Dubstep">Melodic Dubstep</option>
                                    <option value="Dubstep">Dubstep</option>
                                    <option value="Synth Wave">Synth Wave</option>


                                </select>
                                @error('genre')
                                    <span class="text-danger text-lg">{{$message}}</span>
                                @enderror
                            </div>
                            <br>
                            <label for="tempo col-3">Tempo</label>
                            <div class="col-12">
                                <input type="number" name="" id="tempo" class="form-control" wire:model='tempo'>
                                @error('tempo')
                                    <span class="text-danger text-lg">{{$message}}</span>
                                @enderror
                            </div>
                            <br>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-sm btn-primary float-end">Add Music</button>
                            </div>


                        </form>
                    </div>


                </div>
                <table class="table table-bordered">
                    <thead>
                        <th>Music ID</th>
                        <th>Artist Name</th>
                        <th>Music Title</th>
                        <th>Record Label</th>
                        <th>Genre</th>
                        <th>Tempo</th>
                    </thead>

                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
