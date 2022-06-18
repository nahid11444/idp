<!DOCTYPE html>
<html lang="en">
<head>
    <title>Firer Registration by Admin</title>
    <link href="main.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <center><u><h2 class="title">Firer Entry Form</h2></u></center>
                    <form method="post">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">No</label>
                                    <input class="input--style-4" type="text" name="No">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Rank</label>
                                        <select class="input--style-4" name="Rank">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Lt Col</option>
                                            <option>Maj</option>
                                            <option>Capt</option>
                                            <option>Lt</option>
                                            <option>2 Lt</option>
                                            <option>Hnr Capt</option>
                                            <option>Hnr Lt</option>
                                            <option>SM</option>
                                            <option>Sgt</option>
                                            <option>Cpl</option>
                                            <option>Lcpl</option>
                                            <option>Snk</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="Name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Unit</label>
                                    <input class="input--style-4" type="text" name="Unit">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Total_Fired</label>
                                    <input class="input--style-4" type="text" name="Total_fired">
                                </div>
                            </div>
                        </div>                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    extract($_REQUEST);
    $file=fopen("read.txt","a");

    ftruncate($file,0);

    fwrite($file, "");
    fwrite($file, $No.',');
    fwrite($file, "");
    fwrite($file, $Rank.',');
    fwrite($file, "");
    fwrite($file, $Name.',');
    fwrite($file, "");
    fwrite($file, $Unit.',');
    fwrite($file, "");
    fwrite($file, $Total_fired.',');

    fclose($file);

?>