<div>
    <div class="row col-12 mt-5">

        <div class="col-5">

            {{-- Form add item --}}
            <div class="col-11 row">
                <div class="col-10">
                    <input class="@error('name') is-invalid @enderror form-control" type="text" wire:model="name"
                        placeholder="Enter item Name and Click Add">
                    @error('name')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-1">
                    <button wire:click="store" wire:keydown.enter="store" class="btn btn-primary">Add</button>
                </div>
            </div>
            {{-- End form add item --}}

            {{-- Table items --}}
            <table class="table table-bordered mt-2 table-hover">
                @foreach ($items as $item)
                    <tr>
                        <td wire:click="select({{ $item->id }})">
                            {{ $item->name }}
                        </td>
                    </tr>
                @endforeach
            </table>
            {{-- End table items --}}

        </div>


        {{-- Button to move items --}}
        <div class="col-1 mx-auto mt-5">
            <div class="row mt-4">
                <button wire:click="moveToItemsSelected" class="btn btn-success mx-auto">
                    >
                </button>
            </div>
            <div class="row mt-2">
                <button wire:click="moveToItemsNonSelected" class="btn btn-danger mx-auto">
                    < </button>
            </div>
        </div>
        {{-- End of buttons to move items --}}

        {{-- Selected items table --}}
        <div class="col-5">
            <h2>Selected items:</h2>
            <div class="row">
                <table class="table table-bordered table-hover">
                    @foreach ($items_selected as $item)
                        <tr>
                    <td wire:click="select({{ $item->id }})">
                        {{ $item->name }}
                    </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        {{-- End of selected items table --}}
    </div>

</div>
