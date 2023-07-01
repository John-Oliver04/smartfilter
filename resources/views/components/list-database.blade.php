<div class="">
    <!-- Button trigger modal -->

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
                        <button type="button" class="text-white rounded-sm bg-danger btn btn-danger" data-bs-dismiss="modal" aria-label="Close">x</button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info" role="alert">
                            Step 1. Download this file. <a href="{{ asset('csv\ADL-1023-0012.csv') }}" class="p-1 rounded bg-success">Download Now</a><br>
                            Step 2. Rename the csv file with same to your ADL. <br>
                            Step 3. Paste all the beneficiary to the csv file. <br>
                            Step 4. Import :)
                        </div>
                        <div class="mb-3 input-group">
                            <span class="input-group-text" id="basic-addon1">Uploader</span>
                            <input type="text" required name="uploader" class="form-control" placeholder="full name of uploader.." aria-label="Uploader Name" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3 input-group">
                            <span class="input-group-text" id="basic-addon1">ADL</span>
                            <input type="text" required name="adl" class="form-control" placeholder="type ADL" aria-label="ADL" aria-describedby="basic-addon1">
                        </div>
                        <input type="file" required name="importfile" id="importfile">
                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="p-2 text-white rounded bg-slate-800 hover:bg-slate-900" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Import" class="p-2 text-white bg-indigo-800 rounded hover:bg-indigo-900">
                        
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form method="POST" action="/create-database" class="modal-content">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Database</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input name="dbname" type="text" class="form-control" placeholder="Database Name" aria-label="Database Name" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input name="dbuploader" type="text" class="form-control" placeholder="Created by" aria-label="Created by" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="p-2 text-white rounded bg-slate-800 hover:bg-slate-900" data-bs-dismiss="modal">Close</button>
                <input type="submit" value="Create" class="p-2 text-white bg-indigo-800 rounded hover:bg-indigo-900">
                
            </div>
        </form>
        </div>
    </div>

    <div class="">
        {{-- Tables --}}
        <table class="table table-striped table-hover">
            <thead>
                <th>#</th>
                <th>ADL</th>
                <th>UPLOADED BY</th>
                <th>DATE CREATED</th>
            </thead>
            <tbody>
    
                @php
                    $files = App\Models\Excelfile::all();
                @endphp
                @foreach ($files as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->adl}}</td>
                        <td>{{$item->uploader}}</td>
                        <td>{{$item->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
    </div>

</div>