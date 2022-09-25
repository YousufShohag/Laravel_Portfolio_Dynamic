jQuery(document).ready(function(){

    showHome();


    jQuery("#form").on("submit", function(e){
        e.preventDefault();

        var allData = new FormData(this);

        $.ajax({
            url:"/storeHome",
            type:"POST",
            dataType:"JSON",
            data:allData,
            contentType:false,
            processData:false,
            success:function(response){
                    jQuery('.msg').html("<div class='alert alert-primary' role='alert'> save Data</div>");
                    jQuery('.msg').fadeOut(2000);
                    showHome();
                    
            }
        })

    })
    
    function showHome(){

//         $.ajax({
//             url:"/showHome",
//             type:"get",
//             dataType:"JSON",
//             success:function(response){
//                 var show = "";
//                 // var path = '{{ URL::asset('/backend/category/') }}';
//                 $.each(response.show,function(key,item){
//                     var status = "";
//                     // var image = "<img height='100px' src='/backend/category/"+item.image+"' />";
//                     // if (item.status==1) {
//                     //     status="<button value="+item.id+" class='status btn btn-info btn-sm'><i class='fas fa-check-circle'></i></button>";
//                     // }else{
//                     //     status="<button value="+item.id+" class='status btn btn-danger btn-sm'><i class='fas fa-check-circle'></i></button>";
//                     // }
// // <td><img height="100px" src="{{asset("backend/category"'+item.image+')}}"></img></td>\
//                     show += '<tr>\
//                     <td>'+item.name+'</td>\
//                     <td>'+item.description+'</td>\
//                     <td>\
//                         <button value='+item.id+' class="btnupdate btn btn-info btn-sm"  data-toggle="modal" data-target="#update"><i class="fas fa-edit"></i></button>\
//                         <button value='+item.id+' class="btnDelete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>\
//                     </td>\
//                     </tr>';
                    
//                 })
//                 jQuery(".allData").html(show);
//             }
//         })

       $.ajax({
            url:"/showHome",
            type:"get",
            dataType:"JSON",
            success:function(response){
               var alldata = "";

                $.each(response.show,function(key, item){
                    var image = "<img height='100px' src='/backend/home/"+item.image+"' />";
                    alldata +="<tr>\
                    <td>"+item.name+"</td>\
                    <td>"+item.description+"</td>\
                    <td>"+image+"</td>\
                    <td>\
                        <button value="+item.id+" class='btnupdate btn btn-info btn-sm'  data-toggle='modal' data-target='#update'><i class='fas fa-edit'></i></button>\
                       <button value="+item.id+" class='btnDelete btn btn-danger btn-sm'><i class='fas fa-trash-alt'></i></button>\
                    </td>\
                </tr>";
                })
                jQuery(".allData").html(alldata);
            }
        })
    }

    jQuery(document).on("click",".btnDelete",function(){
        var id = jQuery(this).val();
        $.ajax({
            url:"/deleteHome/"+id,
            type:"get",
            dataType:"JSON",
            success:function(response){
                jQuery('.msg').html("<div class='alert alert-primary' role='alert'> Delete Data</div>");
                jQuery('.msg').fadeOut(2000);
                showHome();
            }
        })
    })

    jQuery(document).on("click",".btnupdate",function(){
        var id = jQuery(this).val();
        jQuery('.update').val(id);
        $.ajax({
            url:"/editteHome/"+id,
            type:"get",
            dataType:"JSON",
            success:function(response){
                var image = "<img height='100px' src='/backend/home/"+response.data.image+"' />";
                jQuery(".name").val(response.data.name);
                jQuery(".description").val(response.data.description);
                jQuery("#img").html(image);
                //alert(response.data.image);
            },
               
        })
    })


    jQuery("#updateform").on("submit", function(e){
        e.preventDefault();
         var id = jQuery(".update").val();
         var updateData = new FormData(this);
    
        $.ajax({
                url:"/update/"+id,
                type:"POST",
                dataType:"JSON",
                data:updateData,
                contentType:false,
                processData:false,
            success:function(response){
                alert("UPDATED");
                showHome();
            }
        })
    
    })


})