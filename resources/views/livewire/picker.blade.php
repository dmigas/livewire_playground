<div>
    {{-- The whole world belongs to you --}}
    @foreach($documents as $doc)
        <p><button data-dismiss="modal" class="btn btn-secondary btn-sm" wire:click.prevent="$emit('docAdd', {{$doc}})">{{ $doc->name }}</button></p>
    @endforeach
</div>
