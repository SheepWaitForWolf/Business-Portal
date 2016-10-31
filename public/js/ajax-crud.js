$(document).ready(function(){

    var url = "/registration";

    //display modal form for child editing
    $('.open-modal').click(function(){
        var child_id = $(this).val();

        $.get(url + '/' + child_id, function (data) {
            //success data
            // console.log(data);
            $('#child_id').val(data.child_id);
            $('#f_name').val(data.f_name);
            $('#l_name').val(data.l_name);
             $('#btn-save').attr('value', child_id);

            $('#myModal').modal('show');
        }) 
    });

    //delete child and remove it from list
    $('.delete-child').on('click', function(){
        var child_id = $(this).val();
        console.log(child_id);
        var delete_url = url + "/" + child_id;
        console.log(delete_url);
    
 $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        $.ajax({

            type: "DELETE",
            url: delete_url,
            success: function (data) {

                $("#child" + child_id).remove();
                //call some new function that renders the view again
                // console.log(data);
                document.write(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    //create new child / update existing child
    $("#btn-save").click(function (e) {
        // console.log($(this));

        var child_id = $(this).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        e.preventDefault(); 

        var formData = {
            child_id: child_id,
            f_name: $('#f_name').val(),
            l_name: $('#l_name').val(),
            gender: $('#gender').val(),
            dob: $('#dob').val()
        }

        
        var state = $('#btn-save').val();
        var type = "PUT"; //for creating new resource
        var my_url = url + '/' + child_id;


        $.ajax({

            type: "PUT",
            url: my_url,
            data: formData,
            // dataType: "json",
            success: function (data) {
               
                $('#frmchilds').trigger('reset');

                $('#myModal').modal('hide');
                // var child = '<tr id="child' + data.id + '"><td>' + data.id + '</td><td>' + data.child + '</td><td>' + data.l_name + '</td><td>' + data.created_at + '</td>';
                // child += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.child_id + '">Edit</button>';
                // child += '<button class="btn btn-danger btn-xs btn-delete delete-child" value="' + data.child_id + '">Delete</button></td></tr>';

              
                var child = '<div class="col-lg-3" id="child{{$child->child_id}}"> <div class="box box-solid box-success"> <div class="box-header with-border"> <h3 class="box-title">{{ ' + data.f_name + '}}  {{' + data.l_name + '}}</h3>';
                    child += '<div class="box-tools pull-right"> <span class="label label-primary">#{{' + data.child_id + '}}</span> </div><!-- /.box-tools -->  </div><!-- /.box-header --><div class="box-body"><ul class="list-unstyled">';
                    child += '<li>Date of Birth : {{ ' + data.dob + '}} </li>  <li>Gender : {{ ' + data.gender + ' }}</li> <li>School : {{ ' + data.school + ' }} </li> <li>Class : {{ ' + data.class_level + '}}</li>  <li>Attendance : </li></ul></div><!-- /.box-body --><div class="box-footer">';
                    child += '<button class="btn btn-warning btn-xs btn-detail open-modal pull-center" value={{ ' + data.child_id + '}}>Edit</button>   <button class="btn btn-danger btn-xs btn-delete delete-child pull-right" value={{ ' + data.child_id + '}}>Delete</button> </div><!-- box-footer --></div><!-- /.box --> </div>';

                $('#child' + child_id).replaceWith( child );
              
                                document.write(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});