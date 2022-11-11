<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Document</title>
</head>
<body>
<div class="container">
   


    <div class="row">
            <div class="col-xl-12">
                <div>
                <h2 class="text-center">Formula Table</h2>
                <a class="btn btn-info btn-outline" data-toggle="modal" data-target="#myModal7" style="margin-top:40px;">
                <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
            </a>
                </div>
             
                <div class="card">
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
      
                            <table class="table datatable" >
                                <thead>
                                <tr>
                                  
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Type')}}</th>
                                    <th>{{__('Size')}}</th>
                                    <th>{{__('Action')}}</th>
                                </tr>
                            
                                </thead>
                                <tbody id="myTable">
                                <!-- @if(count($formulas) > 0) -->
                                    @foreach ($formulas as $formula)
                                     
                                        <tr>
                                           
                                            <td>{{ $formula->name }}</td>
                                            <td>{{$formula->type}}</td>
                                            <td>{{$formula->size}}</td>
                                                <td class="Action">
                                                           
                                                    <a href="{{route('formula.show',$formula->id)}}" class="mx-3 btn btn-sm d-inline-flex align-items-center"  data-size="xl" data-bs-toggle="tooltip" title="{{__('View')}}" data-title="{{__('Lead Detail')}}">
                                                        <i class="fa fa-eye "></i>
                                                    </a>
                                                    <a href="#" class="mx-3 btn btn-sm d-inline-flex align-items-center" data-url="{{ route('formula.edit',$formula->id) }}" data-ajax-popup="true" data-size="xl" data-bs-toggle="tooltip" title="{{__('Edit')}}" data-title="{{__('Lead Edit')}}">
                                                        <i class="fa fa-pencil "></i>
                                                    </a>
                                                          
                                                </td>
                                        </tr>
                                      
                                    @endforeach
                                <!-- @else
                                    <tr class="font-style">
                                        <td colspan="6" class="text-center">{{ __('No data available in table') }}</td>
                                    </tr>
                                @endif -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>



<!-- Modal Start -->
<div class="modal inmodal fade" id="myModal7" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Add Formula</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('formula.store')}}" method="POST" enctype="multipart/form-data"  >
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="">Name</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                  
                    <div class="form-group">
                        <label class="">Type</label>
                        <input class="form-control" type="text" name="type">
                    </div>
                    <div class="form-group">
                        <label class="">Size</label>
                        <input class="form-control" type="size" name="size">
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <input type="submit" class="btn btn-info  btn-block" name="submit" value="Save">
                    </div>
             
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- model end -->
</body>


</html>