<div>
    {{ $message }}
    <input type="text" wire:model="message">
    {{-- The Master doesn't talk, he acts. --}}
    <button wire:click="loadUser({{ auth()->user()->id }})" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    @isset($user->name)
                    <h5 class="modal-title" id="exampleModalLabel">{{ $user->name }}</h5>
                    @endisset
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
