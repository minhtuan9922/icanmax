<!-- Main content -->
<div class="content-wrapper">
	<!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">About</span> - Edit about</h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?php echo base_url("admin/about")?>/edit" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span>Edit</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-database-export"></i><span>Export</span></a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=site_url("/admin")?>"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="<?=site_url("/admin/about")?>">about</a></li>
                <li class="active">List land</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">

        <!-- HTML sourced data -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">land data</h5>

                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
            </div>
			<form action="<?php echo base_url('admin/about/save'); ?>" enctype="multipart/form-data" method="post">
            	<textarea name="content_txt"><?php echo $about_file; ?></textarea>
            	<input type="submit" name="save" value="Save" />
            </form>
        </div>
        <!-- /HTML sourced data -->
    </div>
    <!-- /content area -->
</div>

<script>
	tinymce.init({
	  selector: 'textarea',
	  height: 500,
	  theme: 'modern',
	  images_upload_url: '<?php echo base_url("admin/about/upload"); ?>',
  	  images_upload_base_path: '<?php echo base_url(); ?>',
  	  images_upload_credentials: true,
	  relative_urls : false,
      remove_script_host: false,
	  plugins: [
		'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		'searchreplace wordcount visualblocks visualchars code fullscreen',
		'insertdatetime media nonbreaking save table contextmenu directionality',
		'template paste textcolor colorpicker textpattern imagetools codesample toc help emoticons hr'
	  ],
	  toolbar1: 'formatselect | bold italic  strikethrough  forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
	  image_advtab: true,
	  templates: [
		{ title: 'Test template 1', content: 'Test 1' },
		{ title: 'Test template 2', content: 'Test 2' }
	  ],
	  content_css: [
		'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		'//www.tinymce.com/css/codepen.min.css'
	  ]
	});
    jQuery(document).ready(function($) {
        $('.btn-index').css({display:'none'});
        $('.btn-edit').css({display:'inline-block'});
        $('.btn-copy').css({display:'none'});
        $('.btn-add').css({display:'none'});
        $('.content input[type="checkbox"]').iCheck({checkboxClass: 'icheckbox_minimal'});
        $('.content input[type="radio"]').iCheck({radioClass: 'iradio_minimal'});
    });

    $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                CKEDITOR.replace('editor2');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });

    function Edit(){
        $(".content").mask("<?php echo 'Loading...'; ?>");
        $("#frm_Server_New").submit();
    }

    /*function back_to_list(){
        $(".content").mask("<?php echo 'Loading...'; ?>");
        var url = '<?php echo base_url("admin/pages");?>';
        window.location.href = url;
    }*/
</script>