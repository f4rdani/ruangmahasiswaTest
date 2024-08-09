<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View File</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
        iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>
    <iframe src="<?php echo base_url('assets/uploads/' . $file_name); ?>">
        This browser does not support PDFs. Please download the PDF to view it: <a href="<?php echo base_url('assets/uploads/' . $file_name); ?>">Download PDF</a>.
    </iframe>
</body>
</html>
