<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Star rating using pure CSS</title>

  <style>

*{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

    </style>


</head>

<body>
<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

</div>
</div>
</header><br><br><br><br>
<footer class="site-footer" style="background-color: #FAEBD7;">
    <div class="container">
        &emsp;<div class="card" style="width: 60%; margin-left: 20%;">
            <div class="card-body">
                <div class="tab-content" id="v-pills-tabContent">Bagaimana Pendapatmu dengan <?= $vendor['nama_vendor']; ?> ?
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><br>
                        <img class="card" style="width: 100px; height: 100px;" src="<?= base_url('assets/images/profile/'.$vendor['profil_vendor']); ?>"><br>
                        <form action="<?= base_url('auth/gen_rate/'. $vendor['id_vendor']);?>" method="POST">
                        <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="Execelent">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="Suka Sekali">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="Suka">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="Kurang">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="Tidak suka">1 star</label>
                        </div>
                        <br><br><br>
                        <button type="submit" class="card-body btn btn-outline-warning">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </center>
    </div>
    </div>
    </div>
    </div>
</footer>
</body>

</html>