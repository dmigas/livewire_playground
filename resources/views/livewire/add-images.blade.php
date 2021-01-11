<div>
    
    <button data-toggle="modal" data-target="#updateModal" wire:click.prevent="" class="btn btn-primary btn-sm">Add Document</button>

    @foreach( $documents as $key => $document)
        <input wire:model="documents.{{$key}}.id" type="hidden" name="documents[]">
        <div class="card">
            <div class="card-header">
                Document: {{ $document['name'] }}
              </div>
            <div class="card-body">
              This model has no descriptio yet. But it would have been displayed here.

              <p><b>Document-ID is: {{ $document['id'] }}</b><small> Array_Key: {{ $key }} </small></p>

              <p><a href="" wire:click.prevent="removeDocument({{$key}})" class="btn btn-primary">Delete this Document again</a></p>
            </div>
        </div>
    @endforeach

    <div class="modal" id="updateModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Select something</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @livewire('picker')
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
</div>
