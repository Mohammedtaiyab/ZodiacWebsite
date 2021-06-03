 <?php
    require("include/head.php");
    require("include/style.php");
    ?>
 <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="plugins/editors/quill/quill.snow.css">
 <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <!-- END PAGE LEVEL STYLES -->
 <?php
    require("include/header.php");
    require("include/sidebar.php");
    if (isset($_GET['id'])) {

        $id = $_GET['id'];
    }
    $aboutus = $home->getdatabyid($id);

    ?>

 <!--  BEGIN CONTENT AREA  -->
 <div id="content" class="main-content">
     <div class="layout-px-spacing">

         <div class="page-header">
             <div class="page-title">
                 <h3>Page Context</h3>
             </div>
         </div>

         <div class="row" id="cancel-row">

             <div class="col-xl-8 col-lg-8 col-sm-8  layout-spacing">
                 <div class="widget-content widget-content-area br-6">
                     <form method="post" action="function.php" enctype="multipart/form-data">

                         <input type="hidden" name="page" value="<?php echo $aboutus[0]["ID"]; ?>">
                         <div class="input-group mb-5">
                             <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon6">Title</span>
                             </div>
                             <input type="text" class="form-control" placeholder="Title" aria-label="Recipient's username" aria-describedby="basic-addon2" name="topic" value="<?php echo $aboutus[0]["Topic"]; ?>">
                         </div>

                         <div class="input-group mb-4">
                             <div class="input-group">
                                 <span class="input-group-text">Description</span>
                             </div>
                             <textarea class="form-control" aria-label="With textarea" id="description" name="description"><?php echo $aboutus[0]["Description"]; ?></textarea>
                         </div>
                         <div class="input-group">
                             <span class="input-group-text">Paragraph</span>
                         </div>
                         <textarea class="form-control mb-4" id="paragraph" name="paragraph" aria-label="With textarea"><?php echo $aboutus[0]['Paragraph']; ?></textarea>
                         <div class="input-group mb-4 mt-4">
                             <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon5">Button Text</span>
                             </div>
                             <input type="text" class="form-control" value="<?php echo $aboutus[0]["Button_Title"]; ?>" name="buttontitle" placeholder="Button Title/Text" aria-label="Username">
                         </div>

                         <label for="basic-url">Add button URL</label>
                         <div class="input-group mb-4">
                             <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon7">Button Goto Link</span>
                             </div>
                             <input type="text" class="form-control" value="<?php echo $aboutus[0]["Buttonlink"]; ?>" id="basic-url" name="buttonlink" aria-describedby="basic-addon3" placeholder="/index.php">
                         </div>

                         <div class="input-group mb-4">
                             <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon7">Add Image</span>
                             </div>
                             <input type="file" class="form-control" id="basic-url" name="image" aria-describedby="basic-addon3" placeholder="/index.php">
                         </div>

                         <div class="input-group mb-4">
                             <input type="submit" class="form-control btn btn-primary btn-rounded mb-2" name="save" value="Save">
                         </div>
                     </form>
                 </div>
             </div>

         </div>

     </div>
 </div>
 <!--  END CONTENT AREA  -->

 </div>
 <!-- END MAIN CONTAINER -->
 <script src="assets/js/scrollspyNav.js"></script>
 <script src="plugins/editors/quill/quill.js"></script>
 <script src="plugins/editors/quill/custom-quill.js"></script>
 <script>
     CKEDITOR.replace('paragraph');
     CKEDITOR.replace('description');

     CKEDITOR.on('instanceReady', function(evt) {
         var editor = evt.editor;

         editor.on('change', function(e) {
             var contentSpace = editor.ui.space('contents');
             var ckeditorFrameCollection = contentSpace.$.getElementsByTagName('iframe');
             var ckeditorFrame = ckeditorFrameCollection[0];
             var innerDoc = ckeditorFrame.contentDocument;
             var innerDocTextAreaHeight = $(innerDoc.body).height();
             console.log(innerDocTextAreaHeight);
         });
     });
 </script>
 <?php
    require("include/script.php");
    require("include/footer.php");
    ?>