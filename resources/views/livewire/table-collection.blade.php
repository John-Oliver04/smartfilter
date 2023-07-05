<div class="">
    {{-- <div class="mt-4">
        <input type="button" wire:click='filternow' value="Filter" class="p-2 px-5 text-white bg-indigo-800 rounded hover:bg-indigo-900">
    </div>
    <div class="flex flex-row justify-between p-3 mb-2 rounded bg-light">
        

        <div class="flex">

            <ul class="mx-1 list-group">
                <div class="">
                    <li class="list-group-header">ID Number: <span class="text-white badge bg-danger">{{$dupidcount}}</span></li>
                        <select wire:change.prevent='idpass'  wire:model='optitem' class="mb-3 form-select form-select-lg" aria-label=".form-select-lg example">
                            <option selected></option>
                            @foreach ((array) $dupid as $key => $item)
                                <option value="{{$item}}">{{$item}} </option>
                            @endforeach
                        </select>
                </div>
            </ul>        
            <ul class="mx-1 list-group">
                <div class="">
                    <li class="list-group-header">First Name: <span class="text-white badge bg-warning">{{$dupfnamecount}}</span></li>
                        <select wire:change.prevent='fnamepass'  wire:model='optitem' class="mb-3 form-select form-select-lg" aria-label=".form-select-lg example">
                            <option selected></option>
                            @foreach ((array) $dupfname as $key => $item)
                                <option value="{{$item}}">{{$item}} </option>
                            @endforeach
                        </select>
                </div>
            </ul>        
            <ul class="mx-1 list-group">
                <div class="">
                    <li class="list-group-header">Last Name: <span class="text-white badge bg-warning">{{$duplnamecount}}</span></li>
                        <select wire:change.prevent='lnamepass' wire:model='optitem' class="mb-3 form-select form-select-lg" aria-label=".form-select-lg example">
                            <option selected></option>
                            @foreach ((array) $duplname as $key => $item)
                                <option value="{{$item}}">{{$item}}</option>
                            @endforeach
                        </select>
                </div>
            </ul>
        </div>

    </div> --}}
    <div class="flex justify-between">
        <div class="">
            <div class="mb-3 input-group">
                <span class="input-group-text" id="basic-addon1">Search</span>
                <input wire:model='search' value={{$search}} type="search" class="form-control" placeholder="type to search.." aria-label="type to search.." aria-describedby="basic-addon1">
              </div>
        </div>
    </div>

    {{-- Tables --}}
    <div class="overflow-scroll w-100">
        <table class="table table-striped table-success table-hover">
            <thead>
                <th></th>
                <th>#</th>
                <th>COLLECTIONS ID</th>
                <th>FULL NAME</th>
                <th>ADDRESS</th>
                <th>OTHER INFORMATION</th>
            </thead>
            <tbody>
                @foreach ($benesearch as $bene)
                <tr class="text-sm uppercase">
                    <td> 
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn-sm btn btn-primary bg-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-info" href="#">View</a></li>
                                <li><a class="dropdown-item text-warning" href="#">Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="#">Delete</a></li> 
                            </ul>
                        </div>    
                    </td>
                    <td> {{$loop->iteration}} </td>
                    <td> <b>{{$bene->adl}}</b>  </td>
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
        {{$benesearch->links()}}
    </div>
</div>