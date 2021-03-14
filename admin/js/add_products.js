$(document).ready(function(){

    // Toastr options
    toastr.options = {
        "debug": false,
        "newestOnTop": false,
        "positionClass": "toast-top-center",
        "closeButton": true,
        "debug": false,
        "toastClass": "animated fadeInDown",
    };

    

    $(".main-image #blogs_main_image").change(function(){
        readURL(this);
    });

    $(".main-image #removePhoto").click(function(){
        $('.main-image #uploadImg').attr('src', 'blogs_images/default_blogs.jpg');
        e=$('#blogs_main_image');
        e.wrap('<form>').parent('form').trigger('reset');
        e.unwrap();
    });

    $('.main-image .overlay').click(function(){
        $('.main-image #blogs_main_image').trigger('click');
    });

    $('#add_blogs').click(function(){
        var product_name = document.forms["blogsFormData"]["product_name"].value;
        var category_name = document.forms["blogsFormData"]["category_name"].value;
        var brand_name = document.forms["blogsFormData"]["brand_name"].value;
        var price = document.forms["blogsFormData"]["price"].value;
        var description = CKEDITOR.instances.description.getData()
        

        var flag = validateFields(product_name,category_name, brand_name, price,description);

        if(flag == false){            
            return false;
        }

        var formData = new FormData($('#blogsFormData')[0]);
        formData.append('blogs_main_image', $("#blogs_main_image")[0].files[0]);
        formData.append('action', 'add_blogs');
        formData.append('category_name', category_name);
        formData.append('brand_name', brand_name);
        formData.append('price', price);
        formData.append('description', description);

        var product_name = $('#product_name').val();
        $.ajax({
            type: "POST",
            url:"webservices/ajax_add_products.php",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('.body_loader').show();
                $('.lightboxOverlay').show();
            },      
            success:function(data){
            //alert(data);   
            console.log(data); 
            //return false;        
                if(data ==1){
                    //toastr.success('Event Successfully Added!');
                    alert('blogs Successfully Added!');
                    location.reload();
                }else if(data == 0){
                    //toastr.danger('Member Not Added!');
                    alert('blogs Not Added!');
                }else if(data == 2){
                    alert('"'+title+'" blogs is already added!');
                }else if(data == 4){
                    alert('Pleae select Image!');
                }

            },
            complete:function(){
                $('.body_loader').hide();
                $('.lightboxOverlay').hide();
            }
        });
    });

});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $('#uploadImg').attr('src', e.target.result);
        }            
        reader.readAsDataURL(input.files[0]);
    }
}

function validateFields(product_name, category_name, brand_name, price, description){
    if (product_name == null || product_name == "") {
        alert("Product Name must be filled out");
        return false;
    }
    if (category_name == null || category_name == "") {
        alert("Category Name must be filled out");
        return false;
    }
    if (brand_name == null || brand_name == "") {
        alert("Brand Name must be filled out");
        return false;
    }
    if (price == null || price == "") {
        alert("Price Name must be filled out");
        return false;
    }
    if (description == null || description == "") {
        alert("Description must be filled out");
        return false;
    }

  
    return true;
}