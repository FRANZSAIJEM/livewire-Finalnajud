

<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5 shadow-lg">
                    <div class="card-header">
                        <h1 class="float-start"> <i class="fa fa-music"></i> Music</h1>
                    </div>

                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{session('message')}}</div>
                        @endif
                        <button class="btn btn-primary float-end mb-3" data-bs-toggle="modal" data-bs-target="#addMusicModal"> <i class="fa fa-plus"></i> Add New Music</button>
                        @if ($musics->count()>0)
                        @foreach ($musics as $music)
                        <div class="card col-md-5 d-inline-flex">
                            <div class="card-header">
                                <h1 class="text-center">{{$music->music_title}}</h1>
                            </div>
                            <div class="card-body text-center">
                                <div class="artist border border-2 p-2 rounded-pill mb-2" style="background-color: rgb(191, 219, 238)">
                                    <h3>Artist</h3>
                                    <h5>{{$music->artist_name}}</h5>
                                </div>


                                <div class="artist border border-2 p-2 rounded-pill mb-2" style="background-color: rgb(191, 219, 238)">
                                    <h3>Music Label</h3>
                                    <h5>{{$music->label}}</h5>
                                </div>


                                <div class="artist border border-2 p-2 rounded-pill mb-2" style="background-color: rgb(191, 219, 238)">
                                    <h3>Genre</h3>
                                    <h5>{{$music->genre}}</h5>
                                </div>

                                <div class="artist border border-2 p-2 rounded-pill mb-2" style="background-color: rgb(191, 219, 238)">
                                    <h3>Music Key</h3>
                                    <h5>{{$music->music_key}}</h5>
                                </div>

                                <div class="artist border border-2 p-2 rounded-pill mb-2" style="background-color: rgb(191, 219, 238)">
                                    <h3></h3>
                                    <h5>{{$music->music_key}}</h5>
                                </div>



                                {{$music->tempo}}
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success" wire:click='editMusics({{$music -> id}})'> <i class="fa fa-edit"></i> Edit</button>
                                <button class="btn btn-danger" wire:click='deleteConfirmation({{$music -> id}})'> <i class="fa fa-remove"></i> Delete</button>
                            </div>
                        </div>
                        @endforeach
                    @endif

                        {{-- <table class="table table-bordered">
                            <thead>

                                <tr class="text-center">
                                    <th> <i class="fa fa-music"></i> Music ID</th>
                                    <th> <i class="fa fa-user"></i>  Artist Name</th>
                                    <th> <i class="fa-brands fa-itunes-note"></i> Music Title</th>
                                    <th> <i class="fa-solid fa-record-vinyl"></i> Record Label</th>
                                    <th> <i class="fa-brands fa-renren"></i> Genre</th>
                                    <th> <i class="fa-solid fa-key"></i> Music Key</th>
                                    <th> <i class="fa-solid fa-arrow-down-wide-short"></i> Tempo</th>
                                    <th> <i class="fa-solid fa-triangle-exclamation"></i> Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($musics->count()>0)
                                    @foreach ($musics as $music)
                                    <tr class="text-center">
                                        <td>{{$music->id}}</td>
                                        <td>{{$music->artist_name}}</td>
                                        <td>{{$music->music_title}}</td>
                                        <td>{{$music->label}}</td>
                                        <td>{{$music->genre}}</td>
                                        <td>{{$music->music_key}}</td>
                                        <td>{{$music->tempo}}</td>
                                        <td>
                                            <button class="btn btn-success" wire:click='editMusics({{$music -> id}})'> <i class="fa fa-edit"></i> Edit</button>
                                            <button class="btn btn-danger" wire:click='deleteConfirmation({{$music -> id}})'> <i class="fa fa-remove"></i> Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


  <div wire:ignore.self class="modal fade " id="addMusicModal" tabindex="-1" role="dialog" aria-labelledby="addMusicModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> <i class="fa fa-music"></i> Add New Music</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent='storeMusicData'>
                <br>
                <label for="artist_name" class="col-3"><i class="fa fa-user"></i>  Artist Name</label>
                <div class="col-12">
                    <input type="text" name="" id="" class="form-control" wire:model='artist_name'>
                    @error('artist_name')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="music_title" class="col-3"> <i class="fa-brands fa-itunes-note"></i> Music Title</label>
                <div class="col-12">
                    <input type="text" name="" id="music_title" class="form-control" wire:model='music_title'>
                    @error('music_title')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="record_label" class="col-3"><i class="fa-solid fa-record-vinyl"></i> Record Label</label>
                <div class="col-12">
                    <input type="text" name="" id="record_label" class="form-control" wire:model='label'>
                    @error('label')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="genre" class="col-3"> <i class="fa-brands fa-renren"></i> Genre</label>
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
                <label for="music_key" class="col-3"><i class="fa-solid fa-key"></i> Music Key</label>
                <div class="col-12">
                    <input type="text" name="" id="music_key" class="form-control" wire:model='music_key'>
                    @error('music_key')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="tempo" class="col-3"> <i class="fa-solid fa-arrow-down-wide-short"></i> Tempo</label>
                <div class="col-12">
                    <input type="number" name="" id="tempo" class="form-control" wire:model='tempo'>
                    @error('tempo')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary float-end"> <i class="fa fa-music"></i> Add Music</button>
                </div>


            </form>
        </div>
      </div>
    </div>
  </div>

  <div wire:ignore.self class="modal fade" id="editMusicModal" tabindex="-1" role="dialog" aria-labelledby="editMusicModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> <i class="fa fa-edit"></i> Edit Music</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent='editMusicData'>
                <br>
                <label for="artist_name" class="col-3"><i class="fa fa-user"></i>  Artist Name</label>
                <div class="col-12">
                    <input type="text" name="" id="" class="form-control" wire:model='artist_name'>
                    @error('artist_name')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="music_title" class="col-3"> <i class="fa-brands fa-itunes-note"></i> Music Title</label>
                <div class="col-12">
                    <input type="text" name="" id="music_title" class="form-control" wire:model='music_title'>
                    @error('music_title')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="record_label" class="col-3"><i class="fa-solid fa-record-vinyl"></i> Record Label</label>
                <div class="col-12">
                    <input type="text" name="" id="record_label" class="form-control" wire:model='label'>
                    @error('label')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="genre" class="col-3"> <i class="fa-brands fa-renren"></i> Genre</label>
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
                <label for="music_key" class="col-3"><i class="fa-solid fa-key"></i> Music Key</label>
                <div class="col-12">
                    <input type="text" name="" id="music_key" class="form-control" wire:model='music_key'>
                    @error('music_key')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <label for="tempo" class="col-3"> <i class="fa-solid fa-arrow-down-wide-short"></i> Tempo</label>
                <div class="col-12">
                    <input type="number" name="" id="tempo" class="form-control" wire:model='tempo'>
                    @error('tempo')
                        <span class="text-danger text-lg">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary float-end"> <i class="fa-solid fa-file-pen"></i> Update Music</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <div wire:ignore.self class="modal fade" id="deleteMusicModal" tabindex="-1" role="dialog" aria-labelledby="deleteMusicModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> <i class="fa fa-remove"></i> Delete Confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pt-4 pb-4">
            <h6>Are you sure you want to delete this music?</h6>
        </div>
        <div class="modal-footer">
            <button class="btn btn-warning" data-bs-dismiss="modal" aria-label="Close"> <i class="fa fa-cancel"></i> Cancel</button>
            <button class="btn btn-danger" wire:click='deleteMusicData()'> <i class="fa fa-remove"></i> Delete</button>

        </div>
      </div>
    </div>
  </div>

  <style>
    .card-header, .modal-header{
        background: linear-gradient(to left, rgb(162, 233, 255), rgb(180, 170, 255));
    }
</style>

</div>


@push('scripts')
    <script>
        window.addEventListener('close-modal', event =>{
            $('#addMusicModal').modal('hide');
            $('#editMusicModal').modal('hide');
            $('#deleteMusicModal').modal('hide');

        });

        window.addEventListener('show-edit-music-modal', event =>{
            $('#editMusicModal').modal('show');
        });

        window.addEventListener('show-delete-confirmation-modal', event =>{
            $('#deleteMusicModal').modal('show');
        });
    </script>
@endpush
