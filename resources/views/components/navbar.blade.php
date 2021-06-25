 <nav class="navbar navbar-expand-lg navbar-dark text-uppercase" id="main_navbar" style="background-color: #282e6a; padding: 0 !important;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
              
                <li class="nav-item  ">
                    <a class="nav-link" href="{{ url('/') }}" style="color: white;">Home <span class="sr-only">(current)</span></a>
                </li>
              <!--   <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> -->
                <li class="nav-item dropdown " >
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color: white; " >
                        Expedition
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                       
                     
                        <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    8K+ Meters Peaks
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="{{ url('expeditions/k2') }}">K2 (8611m)</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('expeditions/nangaparbet') }}">Nanga Parbet (8126m)</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('expeditions/gasherbrum') }}">Gasherbrum I (8080m)</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('expeditions/broadp') }}">Broad Peak (8051m)</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('expeditions/gasherbrum2') }}">Gasherbrum II (8035m)</a></li>

                          </ul>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    7K+ Meters Peaks
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="{{ url('expeditions/gasherbrum3') }}">Gasherbrum III (7952m)</a></li>
                            <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/gasherbrum4') }}">Gasherbrum IV (7925m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/masherbrum') }}">Masherbrum (7821m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/rakaposhi') }}">Rakaposhi (7788m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/batura') }}">Batura I (7785m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/tirich') }}">Tirich Mir (7708m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/chogolisa') }}">Chogolisa (7665m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/passu') }}">Passu Peak (7478m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/muztagh') }}">Muztagh Tower (7273m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/k7') }}">K6 (6935m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/diran') }}">Diran (7272m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/latok') }}">Latok 1 (7145m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/spantik') }}">Spantik (7027m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/k7') }}">K7 Peak (6935m)</a></li>
                          </ul>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    6K+ Meters Peaks
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="{{ url('expeditions/dirifica') }}">Drifica Peak (6447m)</a></li>
                            <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/laila') }}">Laila Peak (6095m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/mingling') }}">Mingling Sar (6050m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/rush') }}">Rush Peak (5098m)</a></li>
                          </ul>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Rocks
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="{{ url('expeditions/shipton') }}">Shipton Spire (5852m)</a></li>
                            <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/ladyfinger') }}">Ladyfinger Peak (6000m)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('expeditions/tango') }}">Tango Tower (6251)</a></li>

                          </ul>
                        </li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color: white;">
                        Treks
                    </a>

                    <ul  class="dropdown-menu" aria-labelledby="navbarDropdown">
                       
                     
                        <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Baltistan
                          </a>
                          <ul  class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="{{ url('treks/k2bc') }}">K2 BC Concordia Trek</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('treks/k2bcgondogoro') }}">K2 BC Gondogoro LA Trek</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('treks/k2bcgasherbrum') }}">K2 BC Gashabrum Trek</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('treks/biafo') }}">Snow Lake Trek</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('treks/masherbrum') }}">Masherbrum & Gondogoro BC Trek</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('treks/k6bc') }}">K6/k7 BC Trek</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('treks/thalle') }}">Thalle La Trek</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ url('treks/spantikbc') }}">Spantik BC Haramosh LA Trek</a></li>

                          </ul>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Hunza
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="{{ url('treks/rakaposhi') }}">Rakaposhi Base Camp</a></li>
                            <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('treks/nagar') }}">Nagar Rash Phari Trek</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('treks/batura') }}">Batura Glacier Trek</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('treks/patundas') }}">Patundas Trek</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('treks/shimshal') }}">Shimshal Valley Trek</a></li>
                          </ul>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Chitral & Ghizer
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="#">Torch Mir BC Trek</a></li>
                            <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('treks/wakhan') }}">Wakhan Corridor Trek</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="naltar">Naltar Ishkhoma Pass Trek</a></li>
                          </ul>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Diamer
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="{{ url('treks/fairymeadow') }}">Fairy Meadows Trek</a></li>
                            <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{ url('treks/nangaparbetrupal') }}">Nangaparbet Rupal Face Trek</a></li>
                          </ul>
                        </li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color: white;">
                        Culture & Heritage Tours
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                       
                     
                        <li><a class="dropdown-item" href="{{ url('cultural/lahore') }}">Lahore</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{ url('cultural/multan') }}">Multan</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{ url('cultural/islamabad') }}">Islamabad/Rwp</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{ url('cultural/taxila') }}">Taxila</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{ url('cultural/gb') }}">GB</a></li>



                        
                        <!-- <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Sargodha
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="#">Border</a></li>
                            
                          </ul>
                        </li> -->
                        <!-- <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Balochistan
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="#">Deserts</a></li>

                          </ul>
                        </li> -->
                    </ul>
                  </li>

                  <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color: white;">
                        Safari
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                       
                     
                        <li><a class="dropdown-item" href="{{ url('safari/deosai') }}">Deosai</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{ url('safari/astore') }}">Astore</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{ url('safari/sarfaranga') }}">Sarfaranga</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{ url('safari/balochistan') }}">Balochistan</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color: white;">
                        Our Services
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                       
                     
                        <li><a class="dropdown-item" href="{{ url('services/helicopter') }}">Helicopter Adventure</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{ url('services/security') }}">Security</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{ url('services/camping') }}">Camping</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{ url('services/transport') }}">Transport</a></li>
                        <!-- <li><a class="dropdown-item" href="{{ url('services/special') }}">Special Food</a></li> -->
                    </ul>
                  </li>

                  <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('gallery') }}" style="color: white;">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('blog') }}" style="color: white;">Blog</a>
                  </li> -->
                  <li class="nav-item ">
                    <a class="nav-link" href="{{ url('about') }}" style="color: white;">About</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="{{ url('contact') }}" style="color: white;">Contact</a>
                  </li>



                </ul>
              </div>
          </nav>