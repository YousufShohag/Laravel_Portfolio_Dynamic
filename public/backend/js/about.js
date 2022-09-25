jQuery(document).ready(function(){

    jQuery("#about_form").on("submit",function(e){
        e.preventDefault();
        var aboutAllData = new FormData(this);
        $.ajax({
            url:"/store",
            type:"POST",
            dataType:"JSON",
            data:aboutAllData,
            contentType:false,
            processData:false,
            success:function(response){
                jQuery('.msg').html("<div class='alert alert-primary' role='alert'> save About Data</div>");
                jQuery('.msg').fadeOut(2000);
                showHome()
            }
        })
    })

    showHome()
    function showHome(){
               $.ajax({
                    url:"/showAbout",
                    type:"get",
                    dataType:"JSON",
                    success:function(response){
                       var alldata = "";
        
                        $.each(response.data,function(key, item){
                            var image = "<img height='100px' src='/backend/about/"+item.image+"' />";
                            alldata +="<tr>\
                            <td>"+item.title+"</td>\
                            <td>"+image+"</td>\
                            <td>"+item.birthday+"</td>\
                            <td>"+item.email+"</td>\
                            <td>"+item.phone+"</td>\
                            <td>\
                                <button value="+item.id+" class='btnupdate btn btn-info btn-sm'  data-toggle='modal' data-target='#update'><i class='fas fa-edit'></i></button>\
                               <button value="+item.id+" class='btnDeleteAbout btn btn-danger btn-sm' data-toggle='modal' data-target='#delete'><i class='fas fa-trash-alt'></i></button>\
                            </td>\
                        </tr>";
                        })
                        jQuery(".allData").html(alldata);
                    }
                })
            }

            jQuery(document).on("click",".btnDeleteAbout",function(){
                var id = jQuery(this).val();
                jQuery(".delete").val(id);
            })
            jQuery(document).on("click",".delete",function(){
                var id = jQuery(this).val();
               $.ajax({
                url:"/destroy/"+id,
                type:"get",
                dataType:"JSON",
                success:function(response){
                    jQuery(".modal").hide();
                    jQuery(".modal-backdrop").hide();
                    jQuery('.msg').html("<div class='alert alert-primary' role='alert'> Delete Data</div>");
                    jQuery('.msg').fadeOut(2000);
                    showHome()
                }
               })
            })

            jQuery(document).on("click",".btnupdate",function(){
                var id = jQuery(this).val();
                jQuery('.update').val(id);
                $.ajax({
                    url:"/editAbout/"+id,
                    type:"get",
                    dataType:"JSON",
                    success:function(response){
                        var image = "<img height='100px' src='/backend/about/"+response.data.image+"' />";
                        jQuery("#title").val(response.data.title);
                        jQuery("#about_long_description").val(response.data.about_long_description);
                        jQuery("#about_short_description").val(response.data.about_short_description);
                        jQuery("#img").html(image);
                        jQuery("#birthday").val(response.data.birthday);
                        jQuery("#website").val(response.data.website);
                        jQuery("#phone").val(response.data.phone);
                        jQuery("#age").val(response.data.age);
                        jQuery("#city").val(response.data.city);
                        jQuery("#degree").val(response.data.degree);
                        jQuery("#freelance").val(response.data.freelance);
                        jQuery("#email").val(response.data.email);
                        jQuery("#about_footer_desscription").val(response.data.about_footer_desscription);

                        //alert(response.data.image);
                    },
                       
                })
            })

            jQuery("#update_about_form").on("submit", function(e){
                e.preventDefault();
                 var id = jQuery(".update").val();
                 var updateData = new FormData(this);
            
                $.ajax({
                        url:"/aboutUpdate/"+id,
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