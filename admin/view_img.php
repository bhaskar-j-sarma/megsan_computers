<?php
    include('header_top.php');

    include('header_upload.php');

    //include('classes/functions.php');
  /*echo "ziasdfdg";
    exit;*/
   /* error_reporting(1);
    $con = new functions();
    session_start();
    $date = $con->get_datetime();   */
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body">
                    <h3>Upload/Delete <?php echo $_GET['type'];?> photos</h3>                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">                
                <div class="panel-body">
                    <!-- The file upload form used as target for the file upload widget -->
                    <form id="fileupload" action="" method="POST" enctype="multipart/form-data">        
                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                        <div class="row fileupload-buttonbar">
                            <div class="col-lg-7">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span class="btn btn-success fileinput-button">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    <span>Add images</span>
                                    <input type="file" name="files[]" accept="image/*" multiple>
                                </span>
                                <button type="submit" class="btn btn-primary start">
                                    <i class="glyphicon glyphicon-upload"></i>
                                    <span>Start upload</span>
                                </button>
                                <button type="reset" class="btn btn-warning cancel">
                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                    <span>Cancel upload</span>
                                </button>
                                <!-- <button type="button" class="btn btn-danger delete">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    <span>Delete</span>
                                </button>
                                <input type="checkbox" class="toggle"> -->
                                <!-- The global file processing state -->
                                <span class="fileupload-process"></span>
                            </div>
                            <!-- The global progress state -->
                            <div class="col-lg-5 fileupload-progress fade">
                                <!-- The global progress bar -->
                                <!-- <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                </div> -->
                                <div class="progress m-t-xs full progress-striped active">
                                    <div style="width: 0%" aria-valuemax="100" aria-valuemin="0" role="progressbar" class=" progress-bar progress-bar-success">
                                        
                                    </div>
                                </div>
                                <!-- The extended global progress state -->
                                <div class="progress-extended">&nbsp;</div>
                            </div>
                        </div>
                        <!-- The table listing the files available for upload/download -->
                        <table role="presentation" class="table table-striped image-data"><tbody class="files"></tbody></table>
                    </form>
                    <br>
                    
                </div>
                <!-- The blueimp Gallery widget -->
                <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                    <a class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <a class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    $('.image-data').on('click','.delete',function(){
        var img_name =  $(this).attr("data-image");
        var action =  $(this).attr("data-action");
        var imgtype =  $(this).attr("data-imgtype");
        //var removeImg =  $(this).attr("data-removeImg");
        //alert(type);
        //$('.removeImg').fadeOut();
        $.ajax({
            url:'delete_uploaded.php',
            data:'files='+img_name+'&action='+action+'&type='+imgtype,
            success:function(data){
                window.location.reload();
            }
        });
    });
</script>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">



{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade ">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress m-t-xs full progress-striped active">
                <div style="width: 0%" aria-valuemax="100" aria-valuemin="0" role="progressbar" class=" progress-bar progress-bar-success">
                    
                </div>
            </div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade removeImg{%=i%}">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-removeImg="removeImg{%=i%}" data-image="{%=file.name%}" data-action="<?php echo $_GET['action'];?>" data-imgtype="<?php echo $_GET['type'];?>" data-url="{%=file.deleteUrl%}&action=<?php echo $_GET['action'];?>"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>

<?php
    include('footer_upload.php');
    include('footer.php');
?>