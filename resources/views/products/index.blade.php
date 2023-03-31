@extends('products.layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            <h2>Laravel crud operation</h2>
        </div>
        <div class="pull-right">
        <button type="button" id="add_new_btn" class="btn btn-primary"><i class="icon-plus3 mr-2"></i> {{('add-new') }}
        </button>
        </div>

    </div>
</div>
<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($product as $key => $products)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $products->product_name }}</td>
            <td>{{ $products->description }}</td>
            <td>
                <form action="#" method="POST">
    
                    <a class="btn btn-primary" onclick="Javascript: return editAction(`{{ route('productEdit',$products->id) }}`)">Edit</a>

                    <a class="btn btn-danger" onclick="Javascript: return deleteAction('$products->id', `{{ route('productDelete',$products->id) }}`)" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div id="roleModel" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title " id="modelHeading">{{ __('add-new') }}</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form id="roleForm" name="roleForm" class="form-horizontal" enctype="multipart/form-data">
                              @csrf

                    <div class="modal-body">
                        <div class="form-group row ">
                            <label class="col-form-label col-sm-3">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="product_name" id="product_name" class="form-control"  placeholder="name" >
                                <input type="hidden" name="product_id" id="product_id" />
                                
                            </div>
                        </div>
                        <div class="form-group row required">
                            <label class="col-form-label col-sm-3">{{ __('description') }}</label>
                            <div class="col-sm-9">
                                <textarea type="text" name="description" id="description" class="form-control"  placeholder="description" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row required">
                            <label class="col-form-label col-sm-3">{{ __('product_image') }}</label>
                            <div class="col-sm-9">
                                <input type="file" name="product_image" id="product_image" class="form-control" />
                                <img src="">
                            </div>
                        </div>
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">{{ __('close') }}</button>
                        <button type="submit" id="saveBtn" class="btn btn-primary" >Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var message = "{{session()->get('message')}}";
    var status = "{{session()->get('status')}}";

    if(message && status == true){
        swal({
            title: message,
            text: "{{ __('successfully') }}",
            icon: "success",
        }).then((value) => {        
            window.location.reload();
        });
    }

    if(message && status == false){
        swal({
            title: "{{ __('errors') }}",
            text: message,
            icon: "error",
        }).then((value) => {        
            window.location.reload();
        });
    }

function editAction(actionUrl){
    $.ajax({
        url:actionUrl,
        type:"GET",
        dataType:'json',
        success: function (data){
                $('#saveBtn').val("edit-product");
                $('#roleModel').modal('show');
                $('#modelHeading').html("{{ __('Edit Product') }}");
                $('#saveBtn').show();
                $('#product_id').val(data.products.id);
                $('#product_name').val(data.products.product_name);
                $('#description').val(data.products.description);

        }
    });
    return false;

}

$(function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#add_new_btn').click(function(){
            $('#roleForm').trigger("reset");
            $('#modelHeading').html("{{ __('Add Product') }}");
            $('#roleModel').modal('show');
            $('#saveBtn').val("add_product");
    });

    $('#saveBtn').click(function (e){
        e.preventDefault();

        var formData = new FormData();
        formData.append('id',$('#product_id').val());
        formData.append('product_name',$('#product_name').val());
        formData.append('description',$('#description').val());
        formData.append('product_image',$('#product_image').prop('files')[0]);
        var btnVal = $(this).val();
        if(btnVal == 'edit-product'){
            $.ajax({
                data: formData,
                url: "{{ route('productUpdate')}}",
                type:"POST",
                dataType: 'json',
                contentType : false,
                processData: false,
                success: function (data) {
                        $('#roleForm').trigger("reset");
                        $('#roleModel').modal('hide');
                        swal({
                            title: "{{ __('data-updated') }}",
                            text: "{{ __('data-updated-successfully') }}",
                            icon: "success",
                            }).then((value) => {
                                location.reload();
                            });
                        },           
            });
        }else{
            $.ajax({
                data: formData,
                url: "{{route('productSave')}}",
                type: "POST",
                dataType: 'json',
                contentType : false,
                processData: false,
                success: function (data) {
                        $('#roleForm').trigger("reset");
                        $('#roleModel').modal('hide');
                        swal({
                            title: "{{ __('data-added') }}",
                            text: "{{ __('data-added-successfully') }}",
                            icon: "success",
                            }).then((value) => {
                                location.reload();
                            });
                        
                    },
        });
    }

    });

});
</script>

@endsection
