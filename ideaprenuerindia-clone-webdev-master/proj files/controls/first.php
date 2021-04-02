<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../my-css.css">
    <title>DashBoard</title>
    <script src="https://cdn.tiny.cloud/1/me4va309q9vlmmjbu7jjz4oqmwd98ys67rv6zogwzu7786nh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   <script>
 tinymce.init({
   selector: 'textarea#full-featured-non-premium',
   plugins: 'print preview page paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',

   imagetools_cors_hosts: ['picsum.photos'],
   menubar: 'file edit view insert format tools table help',
   toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
   toolbar_sticky: true,
   autosave_ask_before_unload: true,
   autosave_interval: "30s",
   autosave_prefix: "{path}{query}-{id}-",
   autosave_restore_when_empty: false,
   autosave_retention: "2m",
   image_advtab: true,
   content_css: [
     '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
     '//www.tiny.cloud/css/codepen.min.css'
   ],
   link_list: [
     { title: 'My page 1', value: 'http://www.tinymce.com' },
     { title: 'My page 2', value: 'http://www.moxiecode.com' }
   ],
   image_list: [
     { title: 'My page 1', value: 'http://www.tinymce.com' },
     { title: 'My page 2', value: 'http://www.moxiecode.com' }
   ],
   image_class_list: [
     { title: 'None', value: '' },
     { title: 'Some class', value: 'class-name' }
   ],
   importcss_append: true,
   height: 400,
   file_picker_callback: function (callback, value, meta) {
     /* Provide file and text for the link dialog */
     if (meta.filetype === 'file') {
       callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
     }

     /* Provide image and alt text for the image dialog */
     if (meta.filetype === 'image') {
       callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
     }

     /* Provide alternative source and posted for the media dialog */
     if (meta.filetype === 'media') {
       callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
     }
   },
   templates: [
         { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
     { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
     { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
   ],
   template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
   template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
   height: 600,
   image_caption: true,
   quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
   noneditable_noneditable_class: "mceNonEditable",
   toolbar_drawer: 'sliding',
   contextmenu: "link image imagetools table",
  });


 </script>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <div class="container font-weight-bold">
    	<!-- <div class="row"> -->
    	<h1 class="text-primary">Write your content here</h1>

		<form action="admin-php.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<!-- <label for="id">Id</label>
				    <input type="text" class="form-control" id="id" name ="id" placeholder="1"><br> -->
					<label for="author">Author</label>
				    <input type="text" class="form-control" id="author" name ="author" placeholder="enter name"><br>
				    <label for="id">Heading</label>
				    <input type="text" class="form-control" id="heading" name ="heading" placeholder="enter heading"><br>
					<label for="exampleFormControlFile1">Choose a File</label>



					<input type="file" class="form-control-file" id="exampleFormControlFile1" name="file"><br>
					<label for="exampleFormControlTextarea1">Content</label>
    				<textarea class="" id="full-featured-non-premium" rows="6" name="content"></textarea><br>

                  <label for="Category">Category</label>
	                   <select class="form-control" id="Category" name="category">
	                    <option value="Tech" name="Tech">Tech</option>
	                    <option value="Governance" name="Governance">Governance</option>
	                    <option value="Interview" name="Interview">Interview</option>
	                    <option value="Business" name ="Business">Business</option>
	                    <!-- <option value="Caste (Freeship)">Caste (Freeship)</option>
	                    <option value="Merit">Merit</option> -->
					</select>
					<label for="id">Tags</label>
				    <input type="text" class="form-control" id="tags" name ="tags" placeholder="tag name"><br>

				    <input class="btn btn-info btn-lg" type="submit" value="Add to Database">

  				</div><!-- inner div -->
		</form><!-- ends form -->
		<!-- </div>end row -->
	</div><!-- ends container -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
