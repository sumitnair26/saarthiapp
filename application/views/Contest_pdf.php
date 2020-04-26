<html>
	<head>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <!-- jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo base_url("print.min.js"); ?>"></script>
		<style>
			body {
                margin: 1em;
            }
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
            th, td {
            padding: 5px;
            text-align: left;
            }

            .border-blue {
                border: 5px solid blue;
                padding:10px;
            }

            .colOneWidth {
                width:20%
            }

            .colTwoWidth {
                width:33.333333333%
            }
		</style>
	</head>
    <body>
    <div>
        <div>
            <?php  $this->load->view('Front_page'); ?>
        </div>
        <div class="border-blue" style="height:100%">
                <table style="width:100%">

                <?php
                if (is_array($contest)){
                foreach($contest as $data) {

                    ?>
                    <tr>
                        <th><?php echo "Question:" ?></th>
                        <td colspan="4"><?php echo $data['question']; ?></td>
                    </tr>
                    <tr>
                        <th>Options :</th>
                        <td colspan="1" class="colOneWidth"><?php echo $data['option_1']; ?></td>
                        <td colspan="1" class="colOneWidth"><?php echo $data['option_2']; ?></td>
                        <td colspan="1" class="colOneWidth"><?php echo $data['option_3']; ?></td>
                        <td colspan="1" class="colOneWidth"><?php echo $data['option_4']; ?></td>
                    </tr>
                    <tr>
                        <th><?php echo "Answer:" ?></th>
                        <td colspan="4"><?php echo $data['question']; ?></td>
                    </tr>
                    <tr>
                        <th><?php echo "Explanantion:"; ?></th>
                        <td colspan="4"><?php echo $data['description']; ?></td>
                    </tr>

                    <tr><th style="border: 0px solid black;"></th></tr>
                <?php } } ?>
            </table>
        </div>
    </div>
</body>
</html>



