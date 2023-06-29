<div class="">

    <div class="flex justify-between">
        <div class="flex">
            <div class="mx-2">
                <!-- Button trigger modal -->
                <button type="button" class="p-2 mb-2 text-sm text-white bg-indigo-800 rounded-sm hover:bg-indigo-900" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Import
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <form method="POST" action="{{route('tables-import-beneficiaries')}}" class="modal-content" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Import Beneficiaries</h1>
                            <button type="button" class="p-2 text-white bg-red-600 rounded-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="file" name="importfile" id="importfile">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="p-2 text-white rounded bg-slate-800 hover:bg-slate-900" data-bs-dismiss="modal">Close</button>
                            <input type="submit" value="Import" class="p-2 text-white bg-indigo-800 rounded hover:bg-indigo-900">
                            
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="mx-2">
                <livewire:filtertable>
            </div>

        </div>
        <div class="">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Search</span>
                <input wire:model='search' type="text" class="form-control" placeholder="Search.." aria-label="Search.." aria-describedby="basic-addon1">
              </div>
        </div>
    </div>

    {{-- Tables --}}
    <table class="table table-striped table-hover ">
        <thead>
            <th>#</th>
            <th>ID NUMBER</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>OTHER INFORMATION</th>
        </thead>
        <tbody>
            @php
                $benes = App\Models\Beneficiary::paginate(10);
            @endphp
            @foreach ($benes as $bene)
            <tr class="text-sm uppercase">
                <td> {{$loop->iteration}} </td>
                <td> <b>{{$bene->idofbene}}</b>  </td>
                <td> 
                    <i>firstname: </i> <b>{{$bene->firstname}} </b> <br> 
                    <i>middlename: </i> <b> {{$bene->middlename}}</b> <br>
                    <i>lastname: </i> <b>{{$bene->lastname}}</b>  <br>
                </td>
                <td>
                   <i>brgy: </i> <b>{{$bene->brgy}}</b>  <br>
                   <i>municipality: </i> <b>{{$bene->municipality}}</b>  <br>
                   <i>province: </i> <b>{{$bene->province}}</b>  <br>
                </td>
                <td >
                   <i>birthday: </i> <b>{{$bene->birthday}}</b>  <br>
                   <i>age: </i> <b>{{$bene->age}}</b>  <br>
                   <i>gender: </i> <b>{{$bene->sex}}</b>  <br>
                   <i>civil status: </i> <b>{{$bene->civilstatus}}</b>  <br>
                   <i>occupation: </i> <b>{{$bene->occupation}}</b>  <br>
                   <i>type of bene: </i> <b>{{$bene->typeofbene}}</b>  <br>
                   <i>type of id: </i> <b>{{$bene->typeofid}}</b>  <br>
                   <i>id number: </i> <b>{{$bene->idnumber}}</b>  <br>
                   <i>dependent: </i> <b>{{$bene->province}}</b>  <br>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$benes->links()}}
</div>