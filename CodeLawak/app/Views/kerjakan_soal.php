<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Group a series of buttons together on a single line or stack them in a vertical column.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <meta name="docsearch:language" content="en">
    <meta name="docsearch:version" content="5.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/button-group/">
    <style class="anchorjs"></style>
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/docs/5.0/assets/css/docs.css" rel="stylesheet">
    <title>Kerjakan Soal</title>
</head>

<body>
    <div class="page-content container-fluid">
        <div id="page_content">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-body"><br><br>
                            <h4 class="card-title">Quiz 1 </h4> <br>
                            <form id="form_quiz">
                                <?php $no = 1; ?>
                                <?php foreach ($soal as $s) : ?>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">
                                            <b> <?php echo $no . '.'; ?> <span> <?php echo $s['isi_soal']; ?> </span></b>
                                            <br>
                                            <div>
                                                <!-- harus ada perulangan -->
                                                <input type="radio" id="a" name="<?php echo $no; ?>" value="A">
                                                <label for="a">A. <?php echo $s['opsi_a'] ?></label><br>
                                                <input type="radio" id="b" name="<?php echo $no; ?>" value="B">
                                                <label for="b">B. <?php echo $s['opsi_b'] ?></label><br>
                                                <input type="radio" id="c" name="<?php echo $no; ?>" value="C">
                                                <label for="c">C. <?php echo $s['opsi_c'] ?></label>
                                            </div>
                                    </div>
                                    <?php $no++; ?>
                                    <?php  ?>
                                <?php endforeach; ?>
                                <button class="btn btn-warning" type="submit">Selesai</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="/docs/5.0/assets/js/docs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
</body>

</html>