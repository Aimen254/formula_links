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
        <div class="col-xxl-12">
            <div class="row">
              @foreach($images as $image)
              
                <div class="col-md-4">
               
                    <div class="card text-center">
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">
                                    <div class=" badge bg-primary p-2 px-3 rounded">
                                        {{ ucfirst($image->name) }}
                                    </div>
                                </h6>

                            </div>

                          
                        </div>
                        <div class="card-body full-card">
                           <div class="img-fluid rounded-circle card-avatar">
                                    <img src="@if(!empty($image->image)) {{asset('/images/'.$image->image)}} @endif" alt="kal" class="img-user wid-30 width="300" height="300" ">
                            </div>
                            <h4 class=" mt-2 text-primary">
                              
                                <a onclick="getdata({{$image}})" class="btn btn-info btn-outline" data-toggle="modal" data-target="#myModal7" ><i class="fa fa-check"></i></a>
                                
                             
                            
                            </h4>
                        
                        </div>
                    </div>

                </div>
                
              @endforeach
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
                <h4 class="modal-title">Add Team</h4>
            </div>
            <div class="modal-body">
                <form  method="POST" enctype="multipart/form-data" action="{{route('imaget.store')}}" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="">Name</label>
                        <input class="form-control" type="text" name="id" id="imageid">
                       
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                      <img src="" alt="" id="image" name="image" style="width:100%;">
                    </div>
                    <div class="form-group">
                        <label><strong>Width</strong></label><br/>
                        <input class="form-control" type="number" name="width" id="width">
                    </div>
                    <div class="form-group">
                        <label><strong>Height</strong></label><br/>
                        <input class="form-control" type="number" name="height" id="height">
                    </div>
                    
                    <div class="form-group">
                        <label for=""></label>
                        <input type="submit" class="btn btn-info  btn-block" onClick="get()" name="submit" value="Save">
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
<script>
    function getdata(image){
       
        document.getElementById('imageid').value = image.id;
        document.getElementById('name').value = image.name;
        document.getElementById('image').src = image.url;
    
    }


 
 
 
</script>

<script>
$('select').selectpicker();
</script>
</html>