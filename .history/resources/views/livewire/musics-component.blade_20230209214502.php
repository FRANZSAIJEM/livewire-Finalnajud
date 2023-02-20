{{--
<div>
    <div class="container m-5">
        @if (session()->has('message'))
            <div class="alert alert-success text-center">{{session('message')}}</div>

        @endif
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card mt-5 w-50">

                    <div class="card-header bg-primary text-white">
                        <h5 class="float-start"><strong>Add Music</strong></h5>
                    </div>

                    <div class="card-body">
                        <form wire:submit.prevent='storeMusicData'>
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
                            <label for="music_key col-3">Music Key</label>
                            <div class="col-12">
                                <input type="text" name="" id="music_key" class="form-control" wire:model='music_key'>
                                @error('music_key')
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
                <table class="table table-bordered m-lg-5">
                    <thead>
                        <tr>
                            <th>Music ID</th>
                            <th>Artist Name</th>
                            <th>Music Title</th>
                            <th>Record Label</th>
                            <th>Genre</th>
                            <th>Music Key</th>
                            <th>Tempo</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>
                        @if ($musics->count()>0)
                            @foreach ($musics as $music)
                            <tr>
                                <td>{{$music->id}}</td>
                                <td>{{$music->artist_name}}</td>
                                <td>{{$music->music_title}}</td>
                                <td>{{$music->label}}</td>
                                <td>{{$music->genre}}</td>
                                <td>{{$music->music_key}}</td>
                                <td>{{$music->tempo}}</td>
                                <td>
                                    <a href="/editMusics" class="btn btn-success" wire:click='editMusics({{$music->id}})'>Edit</a>
                                    <a class="btn btn-danger">Delete</a>

                                </td>

                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div> --}}
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-start">All Students</h3>
                        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addMusicModal">Add new Music</button>
                    </div>

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>


  <div class="modal fade" id="addMusicModal" tabindex="-1" role="dialog" aria-labelledby="addMusicModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Music</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent='storeMusicData'>
                <br>

                <div class="col-12">
                    <input type="text" name="" id="" class="form-control" wire:model='artist_name'>
                    @error('artist_name')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="music_title" class="col-3">Music Title</label>
                <div class="col-12">
                    <input type="text" name="" id="music_title" class="form-control" wire:model='music_title'>
                    @error('music_title')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="record_label" class="col-3">Record Label</label>
                <div class="col-12">
                    <input type="text" name="" id="record_label" class="form-control" wire:model='label'>
                    @error('label')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="genre" class="col-3">Genre</label>
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
                <label for="music_key" class="col-3">Music Key</label>
                <div class="col-12">
                    <input type="text" name="" id="music_key" class="form-control" wire:model='music_key'>
                    @error('music_key')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="tempo" class="col-3">Tempo</label>
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
