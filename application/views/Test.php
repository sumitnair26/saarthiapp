    <head>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <!-- jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo base_url("print.min.js"); ?>"></script>
    <style>
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
    }

    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
    </style>
    </head>
    <body>
    <div class="book">
    <div class="page">
        <div class="subpage">

                    <h1><?php  echo "Saarthi Contest Questions"; ?></h1>
                    <h1 style="font-family: freeserif;"><?php echo "सारथी कांटेस्ट प्रश्न"; ?></h2>
                    <h3><?php echo "Click on link to download Saarthi App for free ( Hindi + English )"; ?></h3>
                    <h4><i class=" fa-infinity"></i><a href="">Some link</a></h4>
        </div>
    </div>
</div>
    </body>