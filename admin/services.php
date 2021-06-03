 <?php
    require("include/head.php");
    require("include/style.php");
    ?>
 <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
 <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <!-- END PAGE LEVEL STYLES -->
 <?php
    require("include/header.php");
    require("include/sidebar.php");
    $expets = $services->services("experts");
    ?>

 <!--  BEGIN CONTENT AREA  -->
 <div id="content" class="main-content">
     <div class="layout-px-spacing">

         <div class="page-header">
             <div class="page-title">
                 <h3>Expert Services</h3>
                 <a class="btn" id="addTask" href="adddata.php?type=experts"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                         <line x1="12" y1="5" x2="12" y2="19"></line>
                         <line x1="5" y1="12" x2="19" y2="12"></line>
                     </svg>New Service</a>
             </div>
         </div>

         <div class="row" id="cancel-row">

             <div class="col-xl-8 col-lg-8 col-sm-8  layout-spacing">
                 <div class="widget-content widget-content-area br-6">
                     <div class="table-responsive mb-4 mt-4">
                         <table id="zero-config" class="table table-hover" style="width:100%">
                             <thead>
                                 <tr>
                                     <th>Sr No: </th>

                                     <th>Title</th>
                                     <!-- <th>Description</th> -->
                                     <th>View</th>
                                     <th>Action</th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $i = 1;
                                    foreach ($expets as $expet) { ?>
                                     <tr>
                                         <td><?php echo $i; ?></td>
                                         <td><?php echo $expet["Title"]; ?></td>

                                         <td><a href="javascript:void(0)" onclick="viewdata(<?php echo $expet["ID"]; ?>)" class="btn">View</td>
                                         <td>
                                             <?php if ($expet["Status"] == 0) { ?>
                                                 <a href="javascript:void(0)" onclick="changestatus(<?php echo $expet["ID"]; ?>,1)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off">
                                                         <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                                         <line x1="1" y1="1" x2="23" y2="23"></line>
                                                     </svg></a>
                                             <?php  } else {  ?>
                                                 <a href="javascript:void(0)" onclick="changestatus(<?php echo $expet["ID"]; ?>,0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                         <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                         <circle cx="12" cy="12" r="3"></circle>
                                                     </svg></a>
                                             <?php  }  ?>
                                             <a href="editservice.php?id=<?php echo $expet["ID"]; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                     <path d="M12 20h9"></path>
                                                     <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                 </svg></a>
                                             <a href="javascript:void(0)" onclick="deleteservice(<?php echo $expet["ID"]; ?>)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                     <polyline points="3 6 5 6 21 6"></polyline>
                                                     <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                     <line x1="10" y1="11" x2="10" y2="17"></line>
                                                     <line x1="14" y1="11" x2="14" y2="17"></line>
                                                 </svg></a>
                                         </td>
                                     </tr>

                                 <?php $i++;
                                    } ?>




                             </tbody>

                         </table>
                     </div>
                 </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-sm-4  layout-spacing" id="dataview" style="display: none;">

                 <div class="card component-card_9">

                     <img id="img" src="" class="card-img-top" alt="none">


                     <div class="card-body">


                         <h3 class="card-title"> <span id="title"></span> </h3>
                         <h5><span id="description"></span></h5>

                         <div class="meta-info" id="paragraph">

                         </div>

                     </div>
                 </div>
             </div>
         </div>

     </div>
 </div>
 <!--  END CONTENT AREA  -->

 </div>
 <!-- END MAIN CONTAINER -->
 <script src="plugins/table/datatable/datatables.js"></script>
 <script>
     $('#zero-config').DataTable({
         "oLanguage": {
             "oPaginate": {
                 "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                 "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
             },
             "sInfo": "Showing page _PAGE_ of _PAGES_",
             "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
             "sSearchPlaceholder": "Search...",
             "sLengthMenu": "Results :  _MENU_",
         },
         "stripeClasses": [],
         "lengthMenu": [7, 10, 20, 50],
         "pageLength": 7
     });


     function viewdata(id) {
         $.ajax({
             url: "function.php",
             type: "POST",
             data: 'astroloid=' + id,
             dataType: 'json',
             success: function(data) {
                 $("#dataview").show();
                 console.log(data[0].ID);
                 $("#title").html(data[0].Title);
                 $("#description").html(data[0].Description);
                 $("#paragraph").html(data[0].Paragraph);
                 var src = "../assets/images/" + data[0].Image;
                 $("#img").attr('src', src);
             }
         });
     }


     function changestatus(id, status) {
         $.ajax({
             url: "function.php",
             type: "POST",
             data: 'statusid=' + id + "&status=" + status,
             dataType: 'json',
             success: function(data) {
                 location.reload();
             }
         });
     }


     function deleteservice(id) {
         if (confirm("Are u Sure you Want to Delete the Record!")) {
         $.ajax({
             url: "function.php",
             type: "POST",
             data: 'delete=' + id,
             dataType: 'json',
             success: function(data) {
                 location.reload();
             }
         });
        }
     }
 </script>
 <?php
    require("include/script.php");
    require("include/footer.php");
    ?>