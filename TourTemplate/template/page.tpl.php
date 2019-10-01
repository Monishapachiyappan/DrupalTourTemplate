<div class="wrapper">

        <!-- top navbar -->
        <div class="top-nav bg-light text-light">
            <div class="container d-flex">
                <span class="align-self-center" style="font-size: 12px;"><i class="fa fa-th" aria-hidden="true"></i>
                    Free line 8897 36221</span>
                <div id="desc" class="ml-auto">
                    <ul class="list-unstyled">
                        <li>Contact us</li>
                        <li>About us</li>
                        <li><span class="lang_select">EN <i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- menubar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
					<?php $img = path_to_theme() . '/images/Brand.png';?>
                    <img src="<?php print $img ?>" alt="Brand Name" width="100px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ferry tickets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Special offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ferry lines</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Car rent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Insurance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Passenger information</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Travel Info Block -->
        <div class="landing-block" id="overlayblock">
			<?php $img = path_to_theme() . '/images/italy_sicily.jpg';?>
            <img class="img-fluid" src="<?php print $img ?>" alt="italy_sicily">
            <div class="container travel-details">
                <div class="row m-auto py-3 bg-light" id="overlayfirst">
                    <div class="col-12 col-md-3 pl-md-3 spacing">
                        <p class="topic m-0 text-light">Choose way</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">Outward</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2" checked>
                            <label class="form-check-label" for="inlineRadio2">Round trip</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 spacing">
                        <p class="topic m-0 text-light">Outward route</p>
                        <label class="select">
                            <select class="inputrou">
                                <option selected>Copenhagen to Oslo</option>
                                <option>Copenhagen to Oslo</option>
                                <option>Copenhagen to Oslo</option>
                            </select>
                        </label>
                    </div>
                    <div class="col-12 col-md-3 spacing">
                        <p class="topic m-0 text-light">Return route</p>
                        <label class="select">
                            <select class="inputrou">
                                <option selected>Oslo to Copenhagen</option>
                                <option>Oslo to Copenhagen</option>
                                <option>Oslo to Copenhagen</option>
                            </select>
                        </label>
                    </div>
                    <div class="col-12 col-md-3 p-md-0 spacing">
                        <p class="topic m-0 text-light">Departure/Return date</p>
                        <label class="datepicker">
                            <select class="inputrou">
                                <option>17/11/2017-04/12/2017</option>
                                <option>21/01/2018-31/12/2019</option>
                                <option selected>11/08/1996-13/081996</option>
                            </select>
                        </label>

                    </div>
                </div>
                <div class="row m-auto py-3 shadow" id="overlaylast">
                    <div class="col-4 col-md-1 spacing">
                        <p class="topic m-0 text-light">Adults</p>
                        <label class="select">
                            <select class="inputrou">
                                <option selected>4</option>
                                <option>5</option>
                                <option>3</option>
                            </select>
                        </label>
                    </div>
                    <div class="col-4 col-md-1 spacing">
                        <p class="topic m-0 text-light">Children</p>
                        <label class="select">
                            <select class="inputrou">
                                <option selected>2</option>
                                <option>1</option>
                                <option>4</option>
                            </select>
                        </label>
                    </div>
                    <div class="col-4 col-md-1 spacing">
                        <p class="topic m-0 text-light">Pet</p>
                        <label class="select">
                            <select class="inputrou">
                                <option selected>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </label>
                    </div>
                    <div class="col-6 col-md-3 spacing">
                        <p class="topic m-0 text-light">Vehicles</p>
                        <label class="select">
                            <select class="inputrou">
                                <option selected>car<6.0mHXmL>
                                </option>
                            </select>
                        </label>
                    </div>
                    <div class="col-6 col-md-3 spacing">
                        <p class="topic m-0 text-light">Club one card</p>
                        <select class="inputrou text-muted">
                            <option>Enter car numbers</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-3 p-md-0 spacing d-flex justify-content-center justify-content-md-start">
                        <button class="btn btn-primary rounded-pill px-5">SEARCH NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="grad_backgrnd">
            <!-- Promotions Slider -->
            <div class="container image-slider mb-5">
                <h2 class="font-weight-bold">Promotions</h2>
                <ul class="list-unstyled">
                    <li class="pl-0"><a href="#">SHOW ALL</a></li>
                    <li>NEW</li>
                    <li>TOP</li>
                    <li>ONE WAY</li>
                    <li>MINI CRUIZ</li>
                </ul>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-3">
									<?php $img = path_to_theme() . '/images/norway.jpg';?>
                                    <img src="<?php print $img ?>" class="brightness img-fluid d-block"
                                        alt="norway">
                                    <button class="btn btn-white mx-4 my-2">TOP</button>
                                    <div class="bottom-content ml-4 mr-2">
                                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <h4>NORWAY</h4>
                                        <button class="btn btn-extend rounded-pill d-none d-md-block">More</button>
                                    </div>
                                </div>

                                <div class="col-3">
									<?php $img = path_to_theme() . '/images/oslo.jpg';?>
                                    <img src="<?php print $img ?>" class="brightness img-fluid d-block" alt="berlin">
                                    <button class="btn btn-white mx-2 my-2">MINI CRUIZ</button>
                                    <div class="bottom-content mx-2">
                                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <h4>COMPENHAGEN-OSLO</h4>
                                        <button class="btn btn-extend rounded-pill d-none d-md-block">BOOK</button>
                                    </div>
                                </div>

                                <div class="col-3">
									<?php $img = path_to_theme() . '/images/berlin.jpg';?>
                                    <img src="<?php print $img ?>" class="brightness img-fluid d-block"
                                        alt="berlin">
                                    <button class="btn btn-white mx-2 my-2">MINI CRUIZ</button>
                                    <div class="bottom-content mx-2">
                                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <h4>GERMANY</h4>
                                        <button class="btn btn-extend rounded-pill d-none d-md-block">BOOK</button>
                                    </div>
                                </div>

                                <div class="col-3">
									<?php $img = path_to_theme() . '/images/dfdsseaways.jpg';?>
                                    <img src="<?php print $img ?>" class="brightness img-fluid d-block"
                                        alt="dfdsseaways">
                                    <button class="btn btn-white mx-2 my-2">NEW</button>
                                    <div class="bottom-content mr-4 ml-2">
                                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <h4>15% OFF 2018</h4>
                                        <button class="btn btn-extend rounded-pill d-none d-md-block">MORE</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-3">
									<?php $img = path_to_theme() . '/images/norway.jpg';?>
                                    <img src="<?php print $img ?>" class="brightness img-fluid d-block"
                                        alt="norway">
                                    <button class="btn btn-white mx-4 my-2">TOP</button>
                                    <div class="bottom-content ml-4 mr-2">
                                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <h4>NORWAY</h4>
                                        <button class="btn btn-extend rounded-pill d-none d-md-block">More</button>
                                    </div>
                                </div>

                                <div class="col-3">
									<?php $img = path_to_theme() . '/images/oslo.jpg';?>
                                    <img src="<?php print $img ?>" class="brightness img-fluid d-block" alt="berlin">
                                    <button class="btn btn-white mx-2 my-2">MINI CRUIZ</button>
                                    <div class="bottom-content mx-2">
                                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <h4>COMPENHAGEN-OSLO</h4>
                                        <button class="btn btn-extend rounded-pill d-none d-md-block">BOOK</button>
                                    </div>
                                </div>

                                <div class="col-3">
								<?php $img = path_to_theme() . '/images/berlin.jpg';?>
                                    <img src="<?php print $img ?>" class="brightness img-fluid d-block"
                                        alt="berlin">
                                    <button class="btn btn-white mx-2 my-2">MINI CRUIZ</button>
                                    <div class="bottom-content mx-2">
                                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <h4>GERMANY</h4>
                                        <button class="btn btn-extend rounded-pill d-none d-md-block">BOOK</button>
                                    </div>
                                </div>

                                <div class="col-3">
								<?php $img = path_to_theme() . '/images/dfdsseaways.jpg';?>
                                    <img src="<?php print $img ?>" class="brightness img-fluid d-block"
                                        alt="dfdsseaways">
                                    <button class="btn btn-white mx-2 my-2">NEW</button>
                                    <div class="bottom-content mr-4 ml-2">
                                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <h4>15% OFF 2018</h4>
                                        <button class="btn btn-extend rounded-pill d-none d-md-block">MORE</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-3">
								<?php $img = path_to_theme() . '/images/norway.jpg';?>
                                    <img src="<?php print $img ?>" class="brightness img-fluid d-block"
                                        alt="norway">
                                    <button class="btn btn-white mx-4 my-2">TOP</button>
                                    <div class="bottom-content ml-4 mr-2">
                                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <h4>NORWAY</h4>
                                        <button class="btn btn-extend rounded-pill d-none d-md-block">More</button>
                                    </div>
                                </div>

                                <div class="col-3">
								<?php $img = path_to_theme() . '/images/oslo.jpg';?>
                                    <img src="<?php print $img ?>" class="brightness img-fluid d-block" alt="berlin">
                                    <button class="btn btn-white mx-2 my-2">MINI CRUIZ</button>
                                    <div class="bottom-content mx-2">
                                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <h4>COMPENHAGEN-OSLO</h4>
                                        <button class="btn btn-extend rounded-pill d-none d-md-block">BOOK</button>
                                    </div>
                                </div>

                                <div class="col-3">
								<?php $img = path_to_theme() . '/images/berlin.jpg';?>
                                    <img src="<?php print $img ?>" class="brightness img-fluid d-block"
                                        alt="berlin">
                                    <button class="btn btn-white mx-2 my-2">MINI CRUIZ</button>
                                    <div class="bottom-content mx-2">
                                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <h4>GERMANY</h4>
                                        <button class="btn btn-extend rounded-pill d-none d-md-block">BOOK</button>
                                    </div>
                                </div>

                                <div class="col-3">
                                <?php $img = path_to_theme() . '/images/dfdsseaways.jpg';?>
                                    <img src="<?php print $img ?>" class="brightness img-fluid d-block"
                                        alt="dfdsseaways">
                                    <button class="btn btn-white mx-2 my-2">NEW</button>
                                    <div class="bottom-content mr-4 ml-2">
                                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <h4>15% OFF 2018</h4>
                                        <button class="btn btn-extend rounded-pill d-none d-md-block">MORE</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- Banner Block -->
            <div class="container image-slider pb-5 mb-5">
                <h2 class="font-weight-bold">Departure from</h2>
                <ul class="list-unstyled">
                    <li class="pl-0"><a href="#">KLAIPEDA</a></li>
                    <li>RYGA</li>
                    <li>VENTSPILIS</li>
                    <li>TALINAS</li>
                </ul>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="bg-light img-align">
						<?php $img = path_to_theme() . '/images/dfds.png';?>
						<img class="img-fluid" src="<?php print $img ?>" alt="dfds">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover text-light">
                                <thead>
                                <?php $img = path_to_theme() . '/images/image1.jpg';?>
                                    <tr class="img-val img-blend"
                                        style="background:url('<?php print $img ?>') repeat;">
                                        <th>OSLO</th>
                                        <th>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Berlin</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Marshal Islands</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Egypt</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Puerto Rico</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Turkey</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>French Polynesia</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Italy</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><a href="#">All offers</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="bg-light img-align">
						<?php $img = path_to_theme() . '/images/tallink.png';?>
						<img class="img-fluid" src="<?php print $img ?>"
                                alt="tallink">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover text-light">
                                <thead>
                                <?php $img = path_to_theme() . '/images/image2.jpg';?>
                                    <tr class="img-val img-blend"
                                        style="background:url('<?php print $img ?>') repeat;">
                                        <th>KENYA</th>
                                        <th>from <i class="fa fa-eur" aria-hidden="true"></i> 8,05</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ireland</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>China</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Senegal</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Albania</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Andorra</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Azerbaijan</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Sweden</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><a href="#">All offers</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="bg-light img-align">
						<?php $img = path_to_theme() . '/images/stenaline.png';?>
						<img class="img-fluid" src="<?php print $img ?>"
                                alt="stenaline">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover text-light">
                                <thead>
                                <?php $img = path_to_theme() . '/images/city.jpg';?>
                                    <tr class="img-val img-blend"
                                        style="background:url('<?php print $img ?>') repeat;">
                                        <th>ANGOLA</th>
                                        <th>from <i class="fa fa-eur" aria-hidden="true"></i> 7,35</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Somalia</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Venezuela</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Tonga</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Vanuatu</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Brunei</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Colombia</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>New Caledonia</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><a href="#">All offers</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="bg-light img-align">
						<?php $img = path_to_theme() . '/images/viking.png';?>
						<img class="img-fluid" src="<?php print $img ?>" alt="viking">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover text-light">
                                <thead>
                                <?php $img = path_to_theme() . '/images/image4.jpg';?>
                                    <tr class="img-val img-blend"
                                        style="background:url('<?php print $img ?>') repeat;">
                                        <th>SAN MARINO</th>
                                        <th>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Somalia</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Qatar</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Cape Verde</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Ghana</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Mozambiue</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Macao</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td>Maldives</td>
                                        <td>from <i class="fa fa-eur" aria-hidden="true"></i> 9,35</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><a href="#">All offers</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Steps block -->
        <div class="container footer_steps">
            <div class="row">
                <div class="col-4 text-center">
                    <h1 class="step_dec">1</h1>
                    <p class="font-weight-bold">FIND THE BEST<br>FERRY TICKETS</p>
                </div>
                <!-- <div class="col-2 arrow-direct">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div> -->
                <div class="col-4 text-center">
                    <h1 class="step_dec">2</h1>
                    <p class="font-weight-bold">4 STEPS<br>REGISTRATION</p>
                </div>
                <!-- <div class="col-2 arrow-direct">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div> -->
                <div class="col-4 text-center">
                    <h1 class="step_dec">3</h1>
                    <p class="font-weight-bold">WAITING FOR<br>YOUR TRIP</p>
                </div>
            </div>
            <div class="my-5 d-flex justify-content-center">
                <p class="step-end text-center"></p>
            </div>
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span style="font-size: 30px;">We move fast.</span>
                    <span style="font-size: 30px;font-weight: normal;">Send us your email, we'll make sure <br>you never
                        miss a thing</span>
                </div>
            </div>
            <div class="row mailbox" style="position: relative;top:50px;">
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start">
                    <span class="mailcontent"><i class="fa fa-envelope-o fa-2x mr-3" style="color: #4d55ca"></i>Enter
                        your email address...</span>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-end">
                    <button class="btn rounded-pill px-4 py-2 delete-btn">Delete</button>
                    <button class="btn rounded-pill px-5 py-2 send-btn">Send</button>
                </div>
            </div>
        </div>

        <div class="main_footer wave">
            <div class="container footer">
                <div class="row">
                    <div class="col-12 col-md-3">
					<?php $img = path_to_theme() . '/images/krantas.png';?>
                        <img src="<?php print $img ?>" alt="krantas">
                        <ul class="list-unstyled">
                            <li>@2017 Travel organizer krantas travel<br> All rights reserved.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3">
                        <h5 class="font-weight-bold">Contact us</h5>
                        <ul class="list-unstyled">
                            <li>Free line 8 800 16661</li>
                            <li>write us</li>
                            <li>Skype</li>
                            <li>We are social <i class="fa fa-facebook" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="font-weight-bold">Important information</h5>
                        <ul class="list-unstyled">
                            <li>Terms and conditions of ferry companies</li>
                            <li>Summary of the rights of passengers travelling by sea and Inland waterway</li>
                            <li>Terms and conditions of the provision of tourism services</li>
                            <li>Information for disabled persons with reduced mobility</li>
                            <li>Service fees</li>
                            <li>Port addresses and maps</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="partners">
				<?php $img = path_to_theme() . '/images/nova.png';?>
                    <img src="<?php print $img ?>" alt="novaturas">
					<?php $img = path_to_theme() . '/images/kidy.png';?>
                    <img src="<?php print $img ?>" alt="kidy">
					<?php $img = path_to_theme() . '/images/wizz.png';?>
                    <img src="<?php print $img ?>" alt="wizz">
					<?php $img = path_to_theme() . '/images/ergo.png';?>
                    <img src="<?php print $img ?>" alt="ergo">
					<?php $img = path_to_theme() . '/images/gjensidige.png';?>
                    <img src="<?php print $img ?>" alt="gjensidige">
					<?php $img = path_to_theme() . '/images/tez.png';?>
                    <img src="<?php print $img ?>" alt="tez">
					<?php $img = path_to_theme() . '/images/simple.png';?>
                    <img src="<?php print $img ?>" alt="simple">
                </div>

            </div>
        </div>
    </div>