<head>
    <!-- bootstrap.min.css -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
     <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- bootstrap.min.js -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">

    <!-- whatsApp Share -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/whatsapp.css">
    <script src="<?php echo base_url(); ?>assets/js/whatsappShare.js"></script>
    <style>
      body{
        font-family: freeserif;
      }
      li a{
        cursor: pointer;
      }
    </style>
    <script>
        $(document).ready(function(){
          $('.contestInfo').click(function(){
            var contestId = $(this).data('id');
              $.ajax({
              url: '<?php echo base_url(); ?>home/getContestPdf',
              type: 'post',
              data: {contestId: contestId},
              success: function(response){
                // Add response in Modal body
                $('.modal-body').html(response);
                // Display Modal
                $('#myModal').modal('show');
              }
            });
          });
        });
    </script>
</head>

<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Saarthi Contest</h1>
  <h1>सारथी कांटेस्ट</h1>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>Contest</h2>
      <p>Download Saarthi for free today !</p>
      <h3>Contest Link's</h3>
      <p>Click On Contest To Share/Download</p>
      <ul class="nav nav-pills nav-stacked">
        <?php  if($all_contest){
            foreach($all_contest as $contest){
            ?>
            <li><a data-id='<?php echo $contest['contest_id']; ?>' class='contestInfo'><?php echo $contest['contest_name']; ?></a></li>
          <?php }
          }else{
              echo "No Contest Running";
          } ?>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">
      <h2>Saarthi</h2>
      <h5>
      Share/Download </h5>
      <p>Click on Link to download or Share Contest Q&A</p>
      <br>
      <h2 style="font-family: freeserif;"><b>सारथी कांटेस्ट प्रश्न </b></h2>
      <h5>Title description, Sep 2, 2017</h5>
      <p>Click on link to download Saarthi App for free ( Hindi + English )</p>
      <p><span><a href="http://bit.ly/SAARTHI_APP"><i class="fa fa-hand-o-right"></i> http://bit.ly/SAARTHI_APP <i class="fa fa-hand-o-left"></i></a></span></p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <span> <a href="https://github.com/sumitnair26/">&copy; sumitnair26</a></spam>
</div>


</body>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Share Contest</h4>
        </div>
        <div class="modal-body">
          <!-- Contest Download/share comes HEre -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
