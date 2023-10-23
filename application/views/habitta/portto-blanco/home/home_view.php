<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contet="ie=edge">
    <meta name="author" content="Ing. Saúl Fernando Torres Hernández">
    <meta name="description" content="Grúpo CCIMA S.A. de C.V." />
    <meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

    <title>Grupo CCIMA</title>

    <script type="text/javascript" src="media/assets/js/analytics.js"></script>

    <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/init.js"></script>
</head>
<body ng-controller="PorttoBlancoMainCtrl as porttoBlanco">
    <md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
        </md-toolbar>
        <a href="#!/portto_blanco" ng-click="close()">
            <div class="link-sidenav">
                <span>Inicio</span>
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/portto_blanco-promociones" ng-click="close()">
            <div class="link-sidenav">
                <span>Promociones</span>
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/portto_blanco-amenidades" ng-click="close()">
            <div class="link-sidenav">
                <span>Áreas comunes</span>
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/portto_blanco-ubicacion" ng-click="close()">
            <div class="link-sidenav">
                <span>Ubicación</span>
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/habitta" ng-click="close()">
            <div class="link-sidenav">
                <span>Habitta</span>
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/" ng-click="close()">
            <div class="link-sidenav">
                <span>Grupo CCIMA</span>
            </div>
        </a>
        <md-divider></md-divider>

    </md-sidenav>

    <div class="navbar-fixed" ng-controller="sideNavCtrl">
        <nav class="white no-shadows" role="navigation">

            <div class="nav-wrapper">

                <a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb" src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

                <ul class="nav-menu hide-on-med-and-down">
                    <li><a href="#!/portto_blanco">Inicio</a></li>
                         <li><a href="#!/">GrupoCCIMA</a></li>
                    <li><a href="#!/Navetec">Navetec</a></li>
                    <li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
                    <li class="quote-item">
                        <md-menu class="right mr-20 mt-20"  md-offset="0 -60" ng-controller="ContactMenuCtrl as contactCtrl">
                            <a class="btn blue-bg no-shadows futura-demi lighter right" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                COTIZAR AQUÍ
                            </a>
                            <md-menu-content width="4">
                                <md-menu-item>
                                    <md-button disabled="disabled">
                                        Querétaro
                                    </md-button>
                                </md-menu-item>
                                <md-menu-divider></md-menu-divider>
                                <md-menu-item>
                                    <md-button ng-click="contactCtrl.toPBEstepa()">
                                        Estepa
                                    </md-button>
                                </md-menu-item>
                                <md-menu-item>
                                    <md-button ng-click="contactCtrl.toPBDesierto()">
                                        Desierto
                                    </md-button>
                                </md-menu-item>
                                <md-menu-item>
                                    <md-button ng-click="contactCtrl.toPBTaiga()">
                                        Taiga
                                    </md-button>
								</md-menu-item>
								<md-menu-item>
									<md-button ng-click="contactCtrl.toPBParamo()">
										Páramo
									</md-button>
								</md-menu-item>
								<md-menu-item>
                                	<md-button ng-click="contactCtrl.toPBSelva()">
										Selva
									</md-button>
								</md-menu-item>
								<md-menu-item>
									<md-button ng-click="contactCtrl.toPBBosque()">
										Bosque
									</md-button>
								</md-menu-item>
								<a href="#!/Portto_Blanco-Lago_1" ng-click="close()">
									<div class="link-sidenav">
										<span>Lago 1</span>
									</div>
								</a>
								<a href="#!/Portto_Blanco-Lago_2" ng-click="close()">
									<div class="link-sidenav">
										<span>Lago 2</span>
									</div>
								</a>
								<a href="#!/Portto_Blanco-Manglar" ng-click="close()">
									<div class="link-sidenav">
										<span>Manglar</span>
									</div>
								</a>
								<md-menu-divider></md-menu-divider>
								<md-button disabled="disabled">
                                        BERNAL
                                    </md-button>
                                <md-menu-divider></md-menu-divider>
                                <a href="#!/Portto_Blanco-Bernal/Amatista" ng-click="close()">
									<div class="link-sidenav">
										<span>Amatista</span>
									</div>
								</a>
                                <a href="#!/Portto_Blanco-Bernal/Zafiro" ng-click="close()">
									<div class="link-sidenav">
										<span>Zafiro</span>
									</div>
								</a>
								<a href="#!/Portto_Blanco-Bernal/Malaquita" ng-click="close()">
									<div class="link-sidenav">
										<span>Malaquita</span>
									</div>
								</a>
                            </md-menu-content>
                        </md-menu>
                    </li>
                </ul>

                <ul class="right hide-on-large-only">
                    <li><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                        <svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
                    </md-button></li>
                </ul>

                <div class="quote-item right hide-on-large-only">
                    <md-menu class="right mr-20 mt-20" md-offset="0 -150" ng-controller="ContactMenuCtrl as contactCtrl">
                        <a class="btn blue-bg no-shadows futura-demi lighter right" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                            COTIZAR AQUÍ
                        </a>
                        <md-menu-content width="4">
                            <md-menu-item>
                                <md-button disabled="disabled">
                                    Querétaro
                                </md-button>
                            </md-menu-item>
                            <md-menu-divider></md-menu-divider>
                            <md-menu-item>
                                <md-button ng-click="contactCtrl.toPBEstepa()">
                                    Estepa
                                </md-button>
                            </md-menu-item>
                            <md-menu-item>
                                <md-button ng-click="contactCtrl.toPBDesierto()">
                                    Desierto
                                </md-button>
                            </md-menu-item>
                            <md-menu-item>
                                <md-button ng-click="contactCtrl.toPBTaiga()">
                                    Taiga
                                </md-button>
							</md-menu-item>
							<md-menu-item>
                                <md-button ng-click="contactCtrl.toPBParamo()">
                                    Páramo
                                </md-button>
							</md-menu-item>
							<md-menu-item>
                                <md-button ng-click="contactCtrl.toPBSelva()">
                                    Selva
                                </md-button>
                            </md-menu-item>
							<md-menu-item>
                                <md-button ng-click="contactCtrl.toPBBosque()">
                                    Bosque
                                </md-button>
                            </md-menu-item>
                            <a href="#!/Portto_Blanco-Lago_1" ng-click="close()">
								<div class="link-sidenav">
									<span>Lago 1</span>
								</div>
							</a>
							<a href="#!/Portto_Blanco-Lago_2" ng-click="close()">
								<div class="link-sidenav">
									<span>Lago 2</span>
								</div>
							</a>
							<a href="#!/Portto_Blanco-Manglar" ng-click="close()">
									<div class="link-sidenav">
										<span>Manglar</span>
									</div>
								</a>
							<a href="#!/Portto_Blanco-Arrecife_3" ng-click="close()">
									<div class="link-sidenav">
										<span>Manglar</span>
									</div>
								</a>
                        <md-menu-divider></md-menu-divider>
								<md-button disabled="disabled">
                                        BERNAL
                                    </md-button>
                                <md-menu-divider></md-menu-divider>
								<md-button disabled="disabled">
                                        BERNAL
                                    </md-button>
                                <md-menu-divider></md-menu-divider>
                                <a href="#!/Portto_Blanco-Bernal/Amatista" ng-click="close()">
									<div class="link-sidenav">
										<span>Amatista</span>
									</div>
								</a>
                                <a href="#!/Portto_Blanco-Bernal/Zafiro" ng-click="close()">
									<div class="link-sidenav">
										<span>Zafiro</span>
									</div>
								</a>
                        </md-menu-content>
                    </md-menu>
                </div>

            </div>
            
        </nav>
    </div>

    <div class="portto-container">

        <div class="header-pb">
            <h1 class="header-heading pb-blue-text futura-light">EL HOGAR <br>QUE SOÑASTE, <br>EL RESPIRO QUE <br>MERECES</h1>
            <div class="header-img">
                <img src="media/assets/img/habitta/portto-blanco/portto-blanco.jpg">
            </div>
        </div>

    </div>
    
    <div class="section1 pb-blue3-bg py">
        <div class="row">
                <h2 class="hbg center-align pb-light-text pb-red-bg">Preventa de Lotes Residenciales</h2>
        </div>
        <div class="row promos">
            <div class="prom1 col s12 m12 l4 center">
                <img src="media/assets/img/habitta/portto-blanco/promos/promo-plazo.svg">
            </div>
            <div class="prom2 col s12 m12 l4 center">
                <img src="media/assets/img/habitta/portto-blanco/promos/promo-msi.svg">
            </div>
            <div class="prom3 col s12 m12 l4 center">
                <img src="media/assets/img/habitta/portto-blanco/promos/promo-hook.svg">
            </div>
        </div>
    </div>

    <div class="section3">
        <div class="map-portto" style="padding-bottom: 20px;">
            <img src="media/assets/img/habitta/portto-blanco/portto-blanco-map.png">
            <h2 class="map-heading pb-blue-text">UN LUGAR <br>PRIVILEGIADO</h2>
            <h4 class="map-heading pb-blue-text futura-light">Ubicado al sur de la <br>ciudad a la entrada del <br>Municipio de Huimilpan</h4>
        </div>

        <div class="container py">
            <img src="media/assets/img/habitta/portto-blanco/operacion.svg">
        </div>

        <div class="lugares py pb-blue3-bg">
            <div class="row">
                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">9min</h3>
                        <h6 class="pb-light-text">Ciudad de Querétaro</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                    </div>
                </div>
                
                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">7min</h3>
                        <h6 class="pb-light-text">Parque Nacional El Cimatario</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                    </div>
                </div>
                
                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">12min</h3>
                        <h6 class="pb-light-text">Centro Cívico</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                    </div>
                </div>

                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">15min</h3>
                        <h6 class="pb-light-text">Universidad Politécnica <br>de Querétaro</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                        <h6 class="pb-light-text">Estadio Corregidora</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                        <h6 class="pb-light-text">Parques Industriales <br>más importantes de la zona</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                        <h6 class="pb-light-text"></h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;">Centro de Congresos</div>
                    </div>
                </div>

                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">30min</h2>
                        <h6 class="pb-light-text">Aeropuerto Intercontinental <br>de Querétaro</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section2">
        <div class="master">
            <div class="row">
                <div class="col s12">
                    <h2 class="headline-2 pb-blue-text center-align"><span class="futura-light">Las maravillas de la ciudad de</span> Querétaro <span class="futura-light">en un lugar lleno de </span>naturaleza<span class="futura-light"> y</span> bienestar</h2>
                </div>
                <div layout-padding class="container
				">
				
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1366 1010" style="enable-background:new 0 0 1366 1010;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#6B778D;stroke-miterlimit:10;}
	.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#2F4F88;}
	.st2{fill-rule:evenodd;clip-rule:evenodd;fill:#4D78A6;}
	.st3{fill-rule:evenodd;clip-rule:evenodd;fill:#7F4E24;stroke:#1D1E1C;stroke-width:0.4357;stroke-miterlimit:10;}
	.st4{fill-rule:evenodd;clip-rule:evenodd;fill:#7F4E24;}
	.st5{fill-rule:evenodd;clip-rule:evenodd;fill:#6D893D;stroke:#1D1E1C;stroke-width:0.4357;stroke-miterlimit:10;}
	.st6{fill-rule:evenodd;clip-rule:evenodd;fill:#6D893D;stroke:#1D1E1C;stroke-width:0.53;stroke-miterlimit:10;}
	.st7{fill:#FFFFFF;}
	.st8{font-family:'FuturaPT-Heavy';}
	.st9{font-size:6.4054px;}
	.st10{font-family:'FuturaPT-Book';}
	.st11{font-size:16.8051px;}
</style>
<image style="overflow:visible;" width="1366" height="1010" xlink:href="media/assets/img/habitta/portto-blanco/app/master.jpg" >
</image>
<g>
	<path class="st0" d="M4.1,751.8l495.5,18.1l-7.2-148.3c138.1-64,276.3-128,414.4-192c5.2-99.7,10.4-199.5,15.6-299.2
		c136.5,9.3,272.9,18.5,409.4,27.8l0,0l-18.3,97.9l-29.9,160.1l-55.4,296.6l-8.6,45.8l-78.1,9.8l-80.9,30.4l-53.5,17.6l-105,33.7
		l-31.3,9.7l-78.4,21.2l-47.1,15l-81.1,23.9l-18.6,3.3l-83.8,75.5l-94.6-11.6l-31.9,15.9l-193.5-24.9l-72.4-9.1l-5.8-0.5l-2.1-2.7
		l-4.9-8.7l-15-18l-13-12.9L106.8,908L94,897.7l-56.3-43.6L16,836.8l-3.1-2.7l-1.7-1.8l-2.6-2.8l-1.6-2L5.1,824l-1.3-3.5l-0.6-3
		L3,814.3l-0.4-4.7L4.1,751.8z"/>
	<g>
		<g id="ESTEPA_00000121974622934513041180000010050231266975027875_">
			<polyline class="st1" points="262.9,880.7 248.5,961.2 242.5,978.1 242.5,978.8 170.9,969.6 168.2,963.8 174.1,879.4 
				175.6,878.3 176.9,877 178.4,875.9 180.2,875.2 182.1,875 199.6,876.3 201.6,878.3 203.9,879.8 206.5,880.9 209.3,881.4 
				212.1,881.3 214.8,880.6 217.4,879.4 219.6,877.7 262.9,880.7 			"/>
		</g>
		<g id="ESTEPA_00000016054901917944138860000010335527105244673166_">
			<polyline class="st1" points="282.3,882.1 381.5,889 421.3,891.8 426.9,891.9 432.5,891.5 438.1,890.5 467.9,987.9 436,1003.8 
				374,995.8 264.4,981.7 282.3,882.1 			"/>
		</g>
		<g id="PARAMO_00000130635473803846644970000003395228948109883058_">
			<g>
				<polyline class="st2" points="249.7,761.8 247.9,811.5 263.5,812 270.5,837 265.6,865.3 218.7,862 216.8,860.3 214.6,859.1 
					212.2,858.3 209.6,858.2 207.1,858.5 204.8,859.5 202.7,860.9 183.2,859.5 181.3,859.1 179.7,858.2 178.4,856.8 176.7,854.8 
					174.7,853 172.4,851.7 172.5,848.4 146,846.6 149.3,758.1 249.7,761.8 				"/>
			</g>
		</g>
		<g id="PARAMO_00000093160110644569760420000008959574859548155812_">
			<polyline class="st2" points="289.1,866.9 292.9,763.4 419.6,768 500.2,771 499.5,757 501.4,756.5 515,752.9 528.6,751.2 
				542,747.4 555.3,743.8 605.5,745.7 604.4,776.8 589.1,780.9 584.1,782.5 579.3,784.6 574.8,787.2 511.5,828.3 504.5,817.5 
				455.7,849.1 462.7,859.9 448.1,869.4 441.1,858.6 437.9,860.5 434.4,862 430.8,863 427.1,863.5 423.3,863.5 416.1,863 416.1,863 
				371.8,859.9 371.4,872.7 289.1,866.9 			"/>
		</g>
		<g id="DESIERTO_00000060032528196854520400000013700484949370438534_">
			<polyline class="st2" points="455.7,883 483,865.3 545.9,824.5 583.3,800.3 586.4,798.5 589.6,797 593,796 624.7,787.5 
				629.4,786.3 630.2,786 682.2,772.2 683.8,774.8 685.7,777.2 688.9,781.1 692.2,784.8 696,787.9 700.2,790.6 704.7,792.6 
				709.4,794.1 714.3,795 719.2,795.2 746.1,894.6 726.6,899.8 684.9,914 664.9,920.7 646.3,924 623.9,944.8 568.1,996.5 
				564.9,999.5 467.9,987.9 438.1,890.5 442.7,889.2 447.2,887.5 451.6,885.4 455.7,883 			"/>
		</g>
		<g id="LAGO_00000043450413133454621100000011689453017514664349_">
			<polyline class="st1" points="719.2,795.2 721.5,795.1 733.3,794.1 736.8,793.7 740.2,792.9 741.4,792.6 782.7,780 786.9,778.4 
				790.9,776.3 814.4,762.4 817.9,760.1 821.1,757.4 824.1,754.5 824.2,754.6 836.6,742.8 839.4,740 841.8,736.8 847.3,728.9 
				849.4,725.4 851.2,721.8 852.5,718 853.4,714 855.6,702.2 855.8,701.2 871.2,711.1 886.4,721.5 901.2,732.4 915.6,743.9 
				929.6,755.8 943.2,768.1 956.4,781 969.1,794.2 981.4,807.9 993.2,822 878.6,858.7 854.1,865.4 746.1,894.6 719.2,795.2 			"/>
		</g>
		<g id="PARAMO_00000089576561632540097510000018031306434892690848_">
			<polyline class="st2" points="610.7,590.1 654.7,685.1 693.4,696.5 691.8,698.9 689.9,702.2 688.3,705.6 687.6,707.3 
				641.1,693.6 634,678.2 498.6,737.3 493,622.6 600.7,572.7 610.7,590.1 			"/>
		</g>
		<g id="TAIGA_00000048493012982395685610000011443727776194949533_">
			<polyline class="st2" points="886.7,670.6 904.8,665.7 933,659.1 943.3,656.7 945.7,656.2 953.7,654.6 961.5,652.9 961.9,652.9 
				972,653.8 984.7,652.6 995.8,651 995.8,651 997.4,650.8 1008.3,647.7 1016.3,645 1021.6,643.5 1023,643.7 1047.9,652.6 1060,656 
				1073.6,657.9 1080.7,657.5 1088.4,656.6 1096,658.6 1097.9,659.1 1112.1,660 1129,659.1 1130.7,659.6 1158.7,668 1163.2,669.7 
				1167.4,672.1 1167.9,673.8 1170.8,682 1175.8,686.8 1186.2,694.4 1202.5,701.6 1228.9,713.7 1220.3,759.5 1142.2,769.3 
				1120.2,777.6 1052.8,802.9 1052.8,802.9 1007.8,817.3 996.1,803 983.9,789.1 971.3,775.6 958.2,762.6 944.7,750 930.8,737.8 
				916.4,726.1 901.8,714.9 886.7,704.2 886.7,670.6 			"/>
		</g>
		<g id="SABANA_00000071535604073872984320000006393325613873434546_">
			<polyline class="st1" points="1135.8,403.5 1140.3,316.9 1145,227 1232.3,231.6 1232.3,232 1241.9,232.8 1240.4,251 1314.2,257 
				1301.4,325.3 1284.3,417.1 1210.4,412.1 1210.5,410.5 1135.7,405.4 1135.8,403.5 			"/>
		</g>
		<g id="BOSQUE_00000058556582415294430750000015374824862346592702_">
			<polyline class="st2" points="1232.3,232 1238.9,150.6 1292,154.9 1332.4,159.2 1314.2,257 1240.4,251 1241.9,232.8 1232.3,232 
							"/>
		</g>
		<g id="MANGLAR_00000092432040478078184420000000061644063019400633_">
			<polyline class="st1" points="828.9,587.8 964,525.2 1045.2,487.6 1114.8,492.3 1105.1,634.7 1101.9,634.5 1091.6,631.8 
				1088.1,632.2 1074.7,632.9 1065,631.6 1055.4,628.9 1029.2,619.5 1020.1,618.1 1008.9,621.3 1000.9,624 992.2,626.5 987.8,627.1 
				981.8,628 972,628.9 963.5,628.1 959.2,628 948.5,630.3 938,632.5 927.4,634.9 898.7,641.6 884.1,645.6 860.3,644.2 858.3,644.5 
				852.6,620.1 851.1,614.9 849,609.9 846.5,605.2 843.4,600.7 839.9,596.6 836,592.9 831.7,589.6 830,588.5 828.9,587.8 			"/>
		</g>
		<g id="TUNDRA_00000145766020871951490940000012071278152819551899_">
			<polyline class="st1" points="1131,215.5 1127.6,281.9 1124,349.5 1001.1,349.5 1001.1,281.9 1001.1,215.5 1131,215.5 			"/>
		</g>
		<g id="SELVA_00000114752121649774926470000014143871336918622104_">
			<polyline class="st2" points="918.3,222.8 918.7,215.5 923,131.4 1111.6,142.8 1110.2,170.6 1133.3,171.8 1131,215.5 
				1001.1,215.5 1001.1,349.5 1124,349.5 1121.3,402.8 1120.7,408.4 1119.6,413.9 1117.9,419.3 1115.8,424.4 1113.1,429.4 
				1109.9,434.1 1106.3,438.4 1102.3,442.3 1098,445.9 1093.3,449 1088.3,451.6 997.4,493.7 922,528.6 922,431 925.2,369.1 
				925.2,369.1 925.9,355.7 926.2,349.5 911.7,349.5 918.3,222.8 			"/>
		</g>
		<g id="BOSQUE_00000097459949479538923810000015628390576841307553_">
			<polyline class="st2" points="1105.1,634.7 1115.1,486.9 1117.8,447.4 1122,442.2 1125.7,436.7 1128.8,430.9 1131.4,424.8 
				1133.4,418.4 1134.8,412 1135.7,405.4 1210.5,410.5 1210.4,412.1 1284.3,417.1 1269.3,497.4 1233.6,688.5 1212.7,679 
				1198.7,672.8 1192.2,668 1191.6,666.4 1189.9,660.3 1183.8,652.7 1178.1,649.6 1173.8,647.2 1166.8,644.5 1137.8,635.8 
				1131.9,634 1112.2,635.1 1105.1,634.7 			"/>
		</g>
		<g id="ARRECIFE_00000136397437176601450140000000226078840198540457_">
			<g>
				<polyline class="st1" points="691.2,530.8 691.2,530.8 795.5,482.5 907.5,430.6 907.5,535.4 835.5,568.7 823.6,574.2 
					777.7,595.5 773.2,597 769,599 765,601.5 761.4,604.5 758.2,607.9 751.9,615.4 751.7,615.7 738.2,632.2 729,643.4 729,643.4 
					726.8,646.4 693.4,696.5 654.7,685.1 610.7,590.1 600.7,572.8 691.2,530.8 				"/>
			</g>
		</g>
		<polyline id="AMENIDADES_VENDIBLES_00000042702729974714226680000006803120961719051442_" class="st3" points="92.9,804.3 
			91.9,832 92,837.5 92.7,842.9 94.1,848.2 96.1,853.3 98.7,858.1 101.9,862.6 105.5,866.7 117.8,879 118.4,879.9 118.7,881 
			118.6,882.2 118,883.2 117.2,884 106,891 94.9,898.2 93.9,897.3 81.5,887.9 69.1,878.5 56.6,868.9 45.5,860.6 34.7,852.3 
			23.8,843.8 14,835.7 8.2,829.4 6.5,826.8 5.2,824 4.2,821.1 3.7,818.1 3.6,817.4 3.6,803.9 3.6,801 92.9,804.3 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000030450091177588474530000017945951104180962474_" class="st3" points="107.9,908.3 
			113.7,904.5 126.7,896.4 139.9,888.6 153.3,881.1 155.1,880.4 157,880.4 158.9,880.8 161.8,881.8 164.9,882.1 168,881.9 
			162.1,965.3 159.2,960.6 155.9,956.1 148.6,947.2 141.1,938.6 133.3,930.1 120.3,918.2 109.3,909.4 107.9,908.3 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000091699622740636811160000006119443060305193108_" class="st3" points="3.6,801 3.6,786.7 
			3.7,785.1 4.1,772 4.5,759.3 4.7,752.8 94.6,756.1 92.9,804.3 3.6,801 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000167381596318149302810000007810716660484118163_" class="st3" points="92.6,811.6 
			94.6,756.1 149.3,758.1 146,846.6 172.5,848.4 172.4,851.7 169.7,850.6 166.8,850 163.8,850 160.9,850.5 158.2,851.6 155.7,853.1 
			153.5,855.1 151.7,857.4 150.3,860 149.5,862.9 148.8,864.6 147.7,866.1 146.2,867.2 135.7,873.1 134.4,873.5 133,873.3 
			131.9,872.5 115.8,856.4 112.9,853.1 110.5,849.4 108.6,845.5 107.3,841.3 106.5,836.9 106.4,832.5 107.1,812.1 106.9,810.1 
			106.1,808.1 104.8,806.5 103.1,805.3 101.2,804.7 99.1,804.6 97.1,805.1 95.3,806.2 93.9,807.7 93,809.5 92.6,811.6 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000052811005499969322380000005904888421995170734_" class="st3" points="371.9,859.9 
			423.3,863.5 427.1,863.5 430.8,863 434.4,862 437.9,860.5 441.1,858.6 448.1,869.4 447.2,869.9 443.5,872.1 439.5,873.8 
			435.4,875.1 431.1,876 426.8,876.4 422.4,876.3 371.5,872.7 371.9,859.9 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000044142606252070587340000012290875537546555308_" class="st3" points="504.5,817.5 
			511.5,828.3 462.7,859.9 455.7,849.1 504.5,817.5 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000023257816018242263710000006403176131192893317_" class="st3" points="824.4,600.3 
			822.7,599.1 820.1,597.5 819.1,596.5 818.5,595.2 818.6,593.8 819.2,592.6 820.3,591.7 828.9,587.8 830,588.5 831.7,589.6 
			836,592.9 839.9,596.6 843.4,600.7 846.5,605.2 849,609.9 851.1,614.9 852.6,620.1 858.3,644.5 849,645.8 845.9,648 840.1,623 
			838.7,618.5 836.8,614.2 834.4,610.2 831.5,606.5 828.2,603.2 824.4,600.3 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000016068547650965568210000013992546904309398679_" class="st4" points="812.4,629.5 
			811.6,627.3 810.2,625.3 808.4,623.8 806.7,622.6 804.6,621.5 802.4,621 800.1,621 790.2,622.2 788.6,609.5 798.5,608.2 
			801.7,608.1 804.9,608.4 808.1,609.1 811.1,610.3 814,612 815.7,613.1 818.3,615.2 820.6,617.7 822.4,620.4 823.9,623.4 
			824.9,626.6 828.7,642.6 817.3,650.4 812.4,629.5 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000004503611607617953020000001727984378273724308_" class="st4" points="837.9,711.3 
			837.1,714.4 835.9,717.3 834.3,720.1 828.8,728 827.4,729.9 825.7,731.6 810.4,746.1 808.5,747.7 806.4,749.1 782.9,762.9 
			780.5,764.2 778,765.1 736.8,777.7 734.4,778.3 732,778.6 720.2,779.6 719.2,779.6 719.2,766.7 731,765.8 733,765.4 774.3,752.8 
			776.4,751.9 799.8,738 801.5,736.7 816.9,722.2 818.2,720.7 823.7,712.7 824.7,711 825.3,709 827.4,697.1 827.6,695.2 
			827.3,693.2 826.1,688.1 837.5,680.3 839.9,690.3 840.4,693.3 840.4,696.4 840.1,699.4 837.9,711.3 		"/>
		<polyline class="st4" points="799.9,663.9 817.8,652.4 817.3,650.4 828.7,642.6 832.8,660.2 821.4,668 820.9,665.7 806.8,674.7 
			799.9,663.9 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000137840584332557369350000014682702758981396879_" class="st3" points="1145.7,212.5 
			1149.3,145 1232,150 1238.9,150.6 1233.5,217.1 1145.7,212.5 		"/>
		<polyline id="AMENIDADES_00000052808291516984822740000015305784141035429809_" class="st5" points="604.4,776.8 605.5,745.7 
			624.2,746.3 630.5,769.9 604.4,776.8 		"/>
		<polyline id="AMENIDADES_00000183243719029219232530000011717184547580644538_" class="st5" points="854.3,683.5 852,673.9 
			858.2,669.6 861.4,669.1 886.7,670.6 886.7,704.2 876,697 865.2,690.1 854.3,683.5 		"/>
		<polyline id="AMENIDADES_00000143606919687191739070000010252235985150686636_" class="st6" points="1045.2,487.6 1094.4,464.8 
			1099.6,462.1 1104.6,459 1109.3,455.5 1113.7,451.6 1117.8,447.4 1114.8,492.3 1045.2,487.6 		"/>
		<polyline id="AMENIDADES_00000178905003255727938550000018216170039505478307_" class="st5" points="555.3,743.8 561,742.3 
			569.3,738.3 579,736.4 590.4,728.4 599,721.1 606.8,712.7 613.7,708.6 619,708.5 622.6,708.9 632.5,716.3 639.5,717.8 643.9,718 
			650.4,717.4 652.7,717.8 655,720.3 657.9,729.1 662.9,741.3 669.5,747.1 674.6,751.5 677.2,753.3 677.2,753.3 677.4,757.3 
			630.5,769.9 624.2,746.3 555.3,743.8 		"/>
		<polyline id="AMENIDADES_00000071540833298913907600000017525711429704922808_" class="st5" points="1110.2,170.6 1111.6,142.8 
			1134.7,144.2 1133.3,171.8 1110.2,170.6 		"/>
	</g>
	<g>
		<g>
			<g>
				<path class="st7" d="M1091.8,71.4l3.9,6.9h-1.3l2.7,4.8h-1.3l2.9,5.1h-5l-2.4-4.2h1.4l-2.8-5h1.3l-1.9-3.4L1091.8,71.4z
					 M1085.1,70.6l4.1,7.2h-1.3l2.8,5h-1.4l3,5.3h-4.3l-2.7-4.6h1.6l-3.2-5.5h1.5l-2.2-3.8L1085.1,70.6z M1073.6,74.3l-2.1,3.7h1.5
					l-3.2,5.5h1.6l-2.7,4.6h-4.4l3-5.3h-1.4l2.8-5h-1.3l4.1-7.2L1073.6,74.3z M1057.9,88.2l2.9-5.1h-1.3l2.7-4.8h-1.3l3.9-6.9
					l2.4,4.2l-1.9,3.4h1.3l-2.8,5h1.4l-2.4,4.2H1057.9z M1066,99.1h-2.5v-9.7h2.5V99.1z M1072.8,99.1h-2.6v-9.7h2.6V99.1z
					 M1079.8,88v11.1h-3V88h-6.6l3.4-5.8h-1.6l3.2-5.5h-1.5l4.6-7.9l4.6,7.9h-1.5l3.2,5.5h-1.6l3.4,5.8H1079.8z M1086.4,99.1h-2.6
					v-9.7h2.6V99.1z M1093.1,99.1h-2.5v-9.7h2.5V99.1z"/>
				<path class="st7" d="M1078.2,60c-14.1,0-25.5,11.4-25.5,25.5c0,5.5,1.7,10.6,4.7,14.8h2.4c-3.2-4-5.2-9.2-5.2-14.8
					c0-13,10.6-23.6,23.6-23.6s23.6,10.6,23.6,23.6c0,5.6-1.9,10.7-5.2,14.8h2.4c3-4.2,4.7-9.3,4.7-14.8
					C1103.7,71.4,1092.3,60,1078.2,60z"/>
			</g>
			<g id="LAGO_2_">
				<g>
					<path class="st7" d="M748.2,726.2c-3.2-3.9-4.9-9-4.6-14.6c0.7-10.6,9.5-19.2,20.1-19.6c12-0.5,21.9,9.1,21.9,21
						c0,5-1.7,9.6-4.6,13.2h2.1c3-4.3,4.6-9.6,4.1-15.3c-1-11.1-10.4-20-21.6-20.5c-13-0.6-23.8,9.8-23.8,22.7
						c0,4.9,1.6,9.4,4.2,13.2H748.2z"/>
					<g>
						<path class="st7" d="M780.7,719.2c-0.6,0-2.3,0.7-3.3,0.7c-1.5,0-1.9-0.8-3.2-0.8c-1.3,0-2.2,0.8-3.2,0.8s-2.1-0.9-3.2-0.9
							c-1.1,0-2.4,0.9-3.5,0.9s-1.8-0.9-3-0.9c-1.2,0-2.1,0.9-3.2,0.9s-2.3-0.9-3.2-0.9c-0.9,0-2.3,0.9-3.3,0.9c-1,0-1.9-0.9-3-0.9
							c-0.9,0-1.7,0.5-2.5,0.7c0.3,0.7,0.5,1.4,0.9,2c0.5-0.2,1-0.4,1.6-0.4c0.6,0,2.4,0.9,3,0.9c0.9,0,2.3-0.9,3.3-0.9
							c0.9,0,2.1,0.9,3.2,0.9s2-0.9,3.2-0.9c1.2,0,1.9,0.9,3,0.9s2.4-0.9,3.5-0.9c1.1,0,2.2,0.9,3.2,0.9s1.9-0.8,3.2-0.8
							c1.3,0,1.7,0.8,3.2,0.8c1.1,0,2.6-0.7,3.3-0.7c0.6,0,1,0.2,1.4,0.3c0.3-0.7,0.6-1.3,0.9-2
							C782.2,719.6,781.7,719.2,780.7,719.2z"/>
						<path class="st7" d="M777.4,723.7c-1.5,0-1.9-0.8-3.2-0.8c-1.3,0-2.2,0.8-3.2,0.8s-2.1-0.9-3.2-0.9c-1.1,0-2.4,0.9-3.5,0.9
							s-1.8-0.9-3-0.9c-1.2,0-2.1,0.9-3.2,0.9s-2.3-0.9-3.2-0.9c-0.9,0-2.3,0.9-3.3,0.9c-1,0-1.9-0.9-3-0.9c-0.3,0-0.6,0.1-0.9,0.2
							c0.5,0.8,1,1.6,1.6,2.4c0.8,0.3,1.8,0.7,2.3,0.7c0.9,0,2.3-0.9,3.3-0.9c0.9,0,2.1,0.9,3.2,0.9s2-0.9,3.2-0.9
							c1.2,0,1.9,0.9,3,0.9s2.4-0.9,3.5-0.9c1.1,0,2.2,0.9,3.2,0.9s1.9-0.8,3.2-0.8c1.3,0,1.7,0.8,3.2,0.8c0.7,0,1.5-0.3,2.2-0.5
							c0.7-0.8,1.2-1.6,1.8-2.5c-0.2-0.1-0.4-0.1-0.7-0.1C780.1,723,778.5,723.7,777.4,723.7z"/>
						<path class="st7" d="M754.2,716.7c0,0,0.8,0,1.8,0.2s1.1,0.5,2,0.5c0.9,0,1.8-0.5,1.8-0.5s-1.5-6.5-2.2-7.9
							c0,0,0.4-0.1,0.6-1.2c0.2-1.2-1.4-4.9-2.9-5.2c0,0-0.5-0.2-1.1-0.1c0,0-0.8-1.3-1.7-1.4c-0.8-0.1-0.9,0.7-0.7,1
							c0.2,0.4,1.3,1.2,1.3,1.2s-0.4,0.3-0.3,1.1c0.1,0.7,1,1.7,1.3,2.5c0.3,0.8,0.6,2,0.9,2.3c0.4,0.3,0.8,0.5,1.1,0.4
							c0,0,1.6,4.5,1.9,6.5c0,0-4.2-5.4-8.1-5.1C750.1,711.1,752,711.7,754.2,716.7z"/>
						<path class="st7" d="M773.3,716.8c1-0.2,1.2-0.1,1.2-0.1c0.8-2.9,1.5-5.3,2.2-6.6c0.7-1.3,2.5-2.2,2.5-2.2
							c-4.7-0.2-7.8,7.3-7.8,7.3c0.2-2.2,1.6-6.3,1.6-6.3c0.3,0,0.7-0.2,1.1-0.5c0.4-0.3,0.7-1.7,0.9-2.6c0.3-0.9,1.2-2,1.3-2.8
							s-0.3-1.2-0.3-1.2s1.1-0.9,1.3-1.4c0.2-0.4,0.1-1.3-0.7-1.1c-0.8,0.1-1.7,1.6-1.7,1.6c-0.7-0.1-1.1,0.1-1.1,0.1
							c-1.5,0.3-3.1,4.6-2.9,5.9c0.2,1.3,0.6,1.4,0.6,1.4c-0.7,1.5-2.2,8.8-2.2,8.8s0.9,0.6,1.8,0.6
							C772.2,717.6,772.3,717,773.3,716.8z"/>
						<path class="st7" d="M768.4,695.6c-1.4,0.5-2.7,5.5-2.3,6.6c0.3,1.1,0.8,1.1,0.8,1.1c-0.2,0.6-1,3.3-1.4,6
							c-0.3,2-0.4,4-0.4,5.4c-0.3-3.6-1.3-15.7-5.3-14.1c0,0,1.5,1,1.6,1.7c0.2,3.6-0.6,10.8-0.3,14.3c0,0,0.7-0.1,1.4,0.1
							c0.7,0.2,1.5,0.7,2,0.7c0.5,0,1.9-0.5,1.9-0.5s0.3-5.2,0.5-7.1c0.2-2.2,1.4-6.1,1.4-6.1c0.3,0,0.7-0.2,1-0.6
							c0.3-0.3,0.6-1.5,0.8-2.4c0.2-0.8,1.2-3.1,1.2-3.8c0-0.7-0.7-1-0.7-1s0.3-0.8,0.4-1.4c-0.5-0.2-0.9-0.3-1.4-0.4
							c-0.2,0.5-0.2,1.1-0.2,1.1C768.9,695.4,768.4,695.6,768.4,695.6z"/>
						<path class="st7" d="M771.3,694.4c0.1-0.4,0-1.1-0.8-0.9c-0.3,0.1-0.5,0.4-0.7,0.8c0.5,0.1,0.9,0.3,1.4,0.4
							C771.2,694.6,771.2,694.5,771.3,694.4z"/>
					</g>
				</g>
			</g>
			<g id="AREA_COMERCIAL_9_">
				<g>
					<g>
						<path class="st7" d="M41.6,842.6c-2.5-3.1-3.8-7-3.6-11.3c0.5-8.2,7.4-14.9,15.7-15.3c9.4-0.4,17.1,7.1,17.1,16.4
							c0,3.9-1.4,7.4-3.6,10.2h1.7c2.4-3.3,3.6-7.5,3.2-11.9c-0.8-8.7-8.1-15.6-16.8-16c-10.2-0.5-18.5,7.6-18.5,17.7
							c0,3.8,1.2,7.4,3.3,10.2H41.6z"/>
					</g>
					<path class="st7" d="M64.9,824.5c0-0.4-0.4-0.7-0.7-0.7h-4v-1.1c0-0.1,0-0.1,0-0.2c-0.1-2.5-2.2-4.5-4.7-4.5
						c-1.8,0-3.4,1-4.2,2.6c-1.3,0.6-2.3,1.8-2.6,3.2h-1.9c-0.4,0-0.7,0.3-0.7,0.7l-0.1,0.6c0,0,1.7,0,1.8,0h0.8v0.8h-4
						c-0.4,0-0.7,0.3-0.7,0.7l-1.2,15.2c0,0.4,0.3,0.8,0.7,0.8h19.7c0.4,0,0.8-0.4,0.7-0.8l-0.1-1.3h1.6c0.4,0,0.8-0.4,0.7-0.8
						L64.9,824.5z M56.5,819.6c1.5,0.4,2.5,1.9,2.5,3.5v1h-1.1c-0.3-2.2-2.2-3.9-4.5-4C54.2,819.5,55.3,819.3,56.5,819.6z M51.9,823
						c0-0.6,0.1-1.1,0.4-1.6c0.3-0.1,0.6-0.1,1-0.1c1.7,0,3.1,1.2,3.5,2.8h-4.8V823z M50.8,822.3c0,0.1,0,0.1,0,0.2
						c0,0.1,0,0.1,0,0.2v1.1h-0.9C50,823.2,50.3,822.7,50.8,822.3z M49.7,825.1h7.1v0.8h-7.1V825.1z M44.9,827.8
						c0-0.3,0.3-0.6,0.7-0.6h3v2.6c-0.3,0.2-0.5,0.5-0.5,0.9c0,0.6,0.5,1.1,1.1,1.1s1.1-0.5,1.1-1.1c0-0.4-0.2-0.7-0.5-0.9v-2.6h7.1
						v2.6c-0.3,0.2-0.5,0.5-0.5,0.9c0,0.6,0.5,1.1,1.1,1.1c0.6,0,1.1-0.5,1.1-1.1c0-0.4-0.2-0.7-0.5-0.9v-2.6h3
						c0.3,0,0.6,0.3,0.7,0.6l0.9,11.2H44L44.9,827.8z M62,841.2H44.5c-0.4,0-0.7-0.3-0.7-0.7l0-0.4h18.7l0,0.4
						C62.6,840.9,62.3,841.2,62,841.2z M62.7,826.6c0-0.4-0.4-0.7-0.7-0.7h-4v-0.8h5.2c0.3,0,0.6,0.3,0.7,0.6l0.9,11.2h-1.2
						L62.7,826.6z M64.2,839.1h-0.5l-0.1-1.1h1.2l0,0.4C64.8,838.8,64.5,839.1,64.2,839.1z"/>
				</g>
			</g>
			<g id="ESCUELA_1_">
				<g>
					<g>
						<path class="st7" d="M145.7,895.6c-9.2,0-16.7,7.5-16.7,16.7c0,3.6,1.1,6.9,3.1,9.7h1.6c-2.1-2.7-3.4-6-3.4-9.7
							c0-8.5,6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5c0,3.7-1.3,7-3.4,9.7h1.6c1.9-2.7,3.1-6.1,3.1-9.7
							C162.5,903.1,155,895.6,145.7,895.6z"/>
						<path class="st7" d="M145.3,897.5L145.3,897.5C145.3,897.5,145.3,897.5,145.3,897.5L145.3,897.5z"/>
						<path class="st7" d="M146.1,897.5L146.1,897.5C146.1,897.5,146.1,897.5,146.1,897.5L146.1,897.5z"/>
					</g>
					<g>
						<path class="st7" d="M156.6,907.3c-1.2-0.7-3.1-1.5-5.5-1.6c-2.4,0-4.3,0.7-5.6,1.4c-1.2-0.6-3.1-1.3-5.4-1.3
							c-0.1,0-0.1,0-0.2,0c-2.4,0-4.3,0.8-5.5,1.4l-0.4,0.2v13.6h9.1c0.4,0.4,1.2,0.9,2.3,0.9c0,0,0.1,0,0.1,0
							c1.1,0,1.8-0.6,2.2-0.9h9.1v-13.6L156.6,907.3z M155.6,908.3v9.3c-1.1-0.5-2.6-1-4.3-1c-2.1,0-3.7,0.5-5,1v-9.3
							c1.1-0.6,2.8-1.2,4.9-1.2C153,907.2,154.5,907.7,155.6,908.3z M140,907.2c2.1,0,3.7,0.5,4.8,1.1v9.3c-1.2-0.6-2.8-1-4.8-1
							c-1.9,0-3.4,0.5-4.6,1v-9.3C136.5,907.8,138.1,907.3,140,907.2z M147.2,919.7l-0.2,0.2c-0.1,0.2-0.7,0.7-1.5,0.7
							c-0.9,0-1.5-0.6-1.6-0.7l-0.2-0.2h-8.3v-0.5c1.1-0.6,2.6-1.2,4.6-1.2c2.3,0,4,0.7,5.1,1.4l0.4,0.2l0.4-0.2
							c1.1-0.7,3-1.5,5.3-1.4c1.9,0.1,3.4,0.7,4.4,1.2v0.5H147.2z"/>
						<polygon class="st7" points="157.2,906.7 145.4,900.8 133.9,906.7 133.9,905.1 145.4,899.2 157.2,905.1 						"/>
					</g>
				</g>
			</g>
			<g id="SPORT_ZONE_1_">
				<g>
					<g>
						<g>
							<g>
								<path class="st7" d="M642.6,730.7c0-1.1-0.4-2.1-1-2.9c-0.6-0.8-1.4-1.4-2.4-1.7c-0.5-0.2-1-0.2-1.5-0.2
									c-0.5,0-1,0.1-1.5,0.2c-1,0.3-1.8,0.9-2.4,1.8c-0.6,0.8-1,1.8-1,2.9c0,0,0,0,0,0c0,1,0.3,2,0.9,2.8c0.6,0.9,1.5,1.5,2.5,1.9
									c0.5,0.2,1,0.3,1.6,0.3c0.5,0,1-0.1,1.5-0.2c1-0.3,1.9-1,2.5-1.8C642.3,732.7,642.6,731.7,642.6,730.7
									C642.6,730.7,642.6,730.7,642.6,730.7z M641.1,733.1l-0.7-0.6l-1.7,1.1l0.3,1c-0.4,0.1-0.8,0.2-1.2,0.2
									c-0.5,0-0.9-0.1-1.3-0.2l0.3-0.8l-1.6-1.2l-0.8,0.5c-0.5-0.7-0.7-1.5-0.7-2.3c0,0,0,0,0,0l0.9,0l0.6-2l-0.7-0.5
									c0.5-0.7,1.2-1.2,2-1.5l0.3,0.8l2,0l0.3-0.8c0.8,0.3,1.5,0.8,2,1.4l-0.7,0.5l0.6,1.9l0.9,0c0,0,0,0,0,0
									C641.9,731.6,641.6,732.4,641.1,733.1z"/>
								<polygon class="st7" points="636.7,729.2 636,731.2 637.7,732.4 639.3,731.2 638.7,729.3 								"/>
							</g>
						</g>
						<g>
							<g>
								<g>
									<path class="st7" d="M632.2,737.8c-1.3-0.1-2.5-0.6-3.4-1.4c-0.6,0.7-0.9,1.6-1,2.6h4.5V737.8z"/>
									<path class="st7" d="M635.9,735.8c-0.8-0.7-1.7-1.1-2.8-1.2v2.3C634.1,736.8,635.1,736.4,635.9,735.8z"/>
									<path class="st7" d="M633.1,741.1c1.3,0.1,2.5,0.6,3.5,1.4c0.6-0.7,0.9-1.6,1-2.5h-4.5V741.1z"/>
									<path class="st7" d="M633.1,739.1h4.5c-0.1-1-0.5-1.9-1-2.6c-1,0.8-2.2,1.3-3.4,1.4V739.1z"/>
									<path class="st7" d="M632.2,740h-4.5c0.1,1,0.4,1.8,1,2.5c1-0.8,2.2-1.3,3.5-1.4V740z"/>
									<path class="st7" d="M632.2,734.6c-1.1,0.1-2,0.5-2.8,1.2c0.8,0.6,1.8,1,2.8,1.1V734.6z"/>
									<path class="st7" d="M633.1,744.4c1.1-0.1,2.1-0.5,2.9-1.2c-0.8-0.6-1.8-1-2.9-1.1V744.4z"/>
									<path class="st7" d="M629.4,743.2c0.8,0.7,1.8,1.1,2.9,1.2v-2.4C631.1,742.2,630.2,742.6,629.4,743.2z"/>
								</g>
							</g>
							<g>
								<g>
									<path class="st7" d="M644.7,737.5c-0.2,0.3-0.4,0.5-0.6,0.7c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.1-0.4-0.3-0.6-0.4
										c-0.2-0.1-0.3-0.2-0.5-0.3c-0.2-0.1-0.4-0.2-0.7-0.3c-0.2-0.1-0.4-0.1-0.6-0.2c-0.3-0.1-0.6-0.1-0.8-0.1
										c-0.1,0-0.3,0-0.4,0c-0.5,0-0.9,0.1-1.3,0.1c0.1-0.2,0.3-0.4,0.4-0.5c0.6-0.2,1.2-0.3,1.8-0.3c0.1,0,0.1,0,0.2,0
										c0.3,0,0.7,0,1,0.1c0.2,0,0.3,0.1,0.5,0.1c0.2,0.1,0.5,0.2,0.7,0.3c0.1,0.1,0.2,0.1,0.3,0.2c0.2,0.1,0.4,0.3,0.6,0.4
										C644.4,737.2,644.5,737.3,644.7,737.5z"/>
									<path class="st7" d="M645.5,735.4c0,0.1,0,0.2-0.1,0.3c-0.1,0.4-0.2,0.7-0.4,1.1c-0.1-0.1-0.3-0.2-0.4-0.4
										c-0.2-0.1-0.4-0.3-0.6-0.4c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c-0.2-0.1-0.5-0.3-0.7-0.4c-0.1,0-0.2-0.1-0.2-0.1c0,0,0,0,0,0
										c-0.3-0.1-0.7-0.2-1-0.3c-0.3-0.1-0.6-0.1-1-0.1c-0.2,0-0.4,0-0.5,0c0.7-0.4,1.5-0.6,2.4-0.6c0.1,0,0.3,0,0.4,0
										c0.4,0,0.8,0.1,1.2,0.2c0.1,0,0.3,0.1,0.4,0.2c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.2,0.1,0.3,0.2
										C645.4,735.3,645.5,735.3,645.5,735.4z"/>
									<path class="st7" d="M646.8,736.6C646.8,736.6,646.8,736.6,646.8,736.6c-0.1,0.5-0.3,1.1-0.6,1.6c0,0,0,0.1-0.1,0.1
										c-0.1,0.2-0.3,0.5-0.5,0.7c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.3-0.6,0.4c-0.1,0.1-0.2,0.2-0.4,0.2
										c-0.2,0.1-0.4,0.2-0.7,0.3c-0.1,0-0.1,0.1-0.2,0.1c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4,0-0.6c0.1,0,0.2-0.1,0.2-0.1
										c0.2-0.1,0.3-0.2,0.5-0.4c0.2-0.1,0.4-0.3,0.5-0.5c0.2-0.2,0.4-0.4,0.6-0.7c0.1-0.2,0.2-0.4,0.4-0.6c0,0,0-0.1,0-0.1
										c0.3-0.5,0.5-1,0.6-1.5C646.4,736.1,646.6,736.3,646.8,736.6z"/>
									<path class="st7" d="M647.6,738.2C647.6,738.2,647.6,738.2,647.6,738.2c-0.1,0.5-0.3,1-0.6,1.4c-0.1,0.1-0.1,0.2-0.2,0.3
										c-0.2,0.3-0.4,0.5-0.6,0.7c-0.1,0.1-0.2,0.2-0.3,0.3c-0.2,0.2-0.4,0.3-0.6,0.5c0,0,0,0,0,0c-0.2,0.1-0.4,0.2-0.6,0.3
										c-0.3,0.1-0.5,0.2-0.8,0.3c-0.1-0.3-0.2-0.6-0.3-0.9c0.2-0.1,0.4-0.1,0.6-0.2c0.2-0.1,0.4-0.2,0.6-0.3
										c0.1,0,0.2-0.1,0.2-0.1c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.1,0.3-0.3,0.5-0.5c0.2-0.2,0.4-0.4,0.5-0.7v0
										c0.1-0.2,0.2-0.3,0.3-0.5c0.2-0.3,0.3-0.7,0.5-1C647.4,737.7,647.5,737.9,647.6,738.2z"/>
									<path class="st7" d="M644.4,744.2c-0.3,0.1-0.5,0.2-0.8,0.2c-0.5-0.4-0.9-0.9-1.2-1.4c0,0,0,0,0,0
										c-0.1-0.2-0.3-0.5-0.4-0.7c-0.1-0.2-0.2-0.5-0.2-0.7c-0.1-0.2-0.1-0.5-0.1-0.7c0-0.2,0-0.3,0-0.5c0-0.3,0-0.5,0.1-0.7
										c0-0.1,0-0.2,0.1-0.3c0.1,0.1,0.3,0.1,0.4,0.2c0.2,0.1,0.3,0.2,0.5,0.3c0,0.1,0,0.2,0,0.3c0,0.2,0,0.5,0,0.7
										c0,0.2,0.1,0.5,0.1,0.7c0.1,0.3,0.2,0.5,0.3,0.8c0.1,0.2,0.2,0.5,0.3,0.7c0,0,0,0,0,0.1C643.7,743.4,644,743.9,644.4,744.2
										z"/>
									<path class="st7" d="M642.5,744.4c-0.2,0-0.4,0-0.7-0.1c-0.5-0.4-0.9-0.9-1.2-1.4c-0.1-0.1-0.1-0.2-0.1-0.3
										c-0.2-0.3-0.3-0.6-0.4-0.9c0-0.1-0.1-0.3-0.1-0.4v0c-0.1-0.3-0.1-0.5-0.1-0.8c0,0,0-0.1,0-0.1c0-0.2,0-0.5,0-0.7
										c0-0.3,0.1-0.5,0.1-0.8c0.3,0,0.6,0.1,0.9,0.1c0,0.2-0.1,0.4-0.1,0.7c0,0.2,0,0.5,0,0.7c0,0.1,0,0.2,0,0.3
										c0,0.2,0.1,0.5,0.1,0.7c0,0.2,0.1,0.4,0.2,0.6c0.1,0.3,0.2,0.5,0.3,0.8l0,0c0.1,0.1,0.1,0.3,0.2,0.4
										C641.9,743.8,642.2,744.1,642.5,744.4z"/>
									<path class="st7" d="M640.3,743.8c-1-0.6-1.7-1.5-2.1-2.5v0c-0.1-0.3-0.2-0.6-0.3-1c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0-0.3
										c0,0,0,0,0,0c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1c0.4-0.1,0.9-0.2,1.3-0.3
										c-0.1,0.2-0.1,0.5-0.1,0.7c0,0.2,0,0.4,0,0.6c0,0,0,0.1,0,0.1c0,0.2,0,0.5,0,0.7c0,0.1,0,0.1,0,0.2c0.1,0.3,0.1,0.7,0.3,1
										c0.1,0.4,0.3,0.7,0.5,1C640.1,743.5,640.2,743.6,640.3,743.8z"/>
									<path class="st7" d="M643.5,738.6C643.5,738.7,643.5,738.7,643.5,738.6C643.5,738.7,643.5,738.6,643.5,738.6
										C643.5,738.6,643.5,738.6,643.5,738.6z"/>
									<g>
										<path class="st7" d="M643.5,738.6c0,0,0,0.1,0,0.1c-0.2,0.1-0.4,0.2-0.5,0.4c-0.1,0-0.2-0.1-0.2-0.1
											c-0.3-0.1-0.5-0.3-0.8-0.4c-0.2-0.1-0.5-0.2-0.7-0.2c-0.3-0.1-0.6-0.1-0.9-0.1c-0.2,0-0.5,0-0.7,0c0,0,0,0,0,0
											c-0.5,0-1.1,0.1-1.6,0.3c0.1-0.3,0.1-0.6,0.3-0.8c0.5-0.2,1.1-0.3,1.7-0.3c0,0,0.1,0,0.1,0c0.2,0,0.5,0,0.7,0.1
											c0.3,0,0.5,0.1,0.8,0.2c0.2,0.1,0.5,0.2,0.7,0.3c0.2,0.1,0.4,0.2,0.6,0.3C643.1,738.3,643.3,738.4,643.5,738.6z"/>
									</g>
									<g>
										<path class="st7" d="M647.8,739.7c0,1-0.4,2-1,2.7l0,0c-0.2,0.3-0.5,0.6-0.8,0.8c-0.1,0.1-0.2,0.1-0.2,0.2
											c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.3,0.2-0.5,0.3c0,0-0.1,0-0.1,0.1c-0.4-0.3-0.7-0.7-1-1.2c0.2-0.1,0.5-0.2,0.7-0.3
											c0.2-0.1,0.3-0.2,0.5-0.2c0,0,0.1,0,0.1-0.1c0.2-0.1,0.4-0.2,0.5-0.4c0.1,0,0.1-0.1,0.2-0.1c0.3-0.2,0.5-0.4,0.7-0.7
											c0.3-0.3,0.5-0.6,0.7-1C647.7,739.9,647.7,739.8,647.8,739.7z"/>
									</g>
								</g>
							</g>
						</g>
					</g>
					<path class="st7" d="M637.7,724.2c-7.1,0-12.8,5.7-12.8,12.8c0,2.8,0.9,5.3,2.4,7.4h1.2c-1.6-2-2.6-4.6-2.6-7.4
						c0-6.5,5.3-11.9,11.9-11.9c6.5,0,11.9,5.3,11.9,11.9c0,2.8-1,5.4-2.6,7.4h1.2c1.5-2.1,2.4-4.7,2.4-7.4
						C650.6,730,644.8,724.2,637.7,724.2z"/>
				</g>
			</g>
			<g id="PET_FRIENDLY_PARK_1_">
				<g>
					<path class="st7" d="M869.3,668.9c-6.5,0-11.8,5.3-11.8,11.8c0,2.5,0.8,4.9,2.2,6.8h1.1c-1.5-1.9-2.4-4.2-2.4-6.8
						c0-6,4.9-10.9,10.9-10.9c6,0,10.9,4.9,10.9,10.9c0,2.6-0.9,5-2.4,6.8h1.1c1.4-1.9,2.2-4.3,2.2-6.8
						C881.1,674.2,875.8,668.9,869.3,668.9z"/>
					<g>
						<path class="st7" d="M873.3,674.8c-0.1,0.1-0.1,0.2-0.2,0.3c-0.8,0.8-2,0.8-2.8,0c-0.4-0.4-0.6-1-0.6-1.6
							c0-0.3,0.1-0.5,0.2-0.8c0.1-0.3,0.2-0.6,0.5-0.8c0.7-0.7,1.8-0.7,2.5,0c0.3,0.3,0.4,0.6,0.5,0.9
							C873.8,673.5,873.7,674.2,873.3,674.8z"/>
						<path class="st7" d="M868.2,675.1c-0.8,0.8-2,0.8-2.8,0c-0.1-0.1-0.1-0.1-0.2-0.2c-0.5-0.6-0.5-1.5-0.1-2.1
							c0.1-0.3,0.2-0.6,0.5-0.8c0.7-0.7,1.8-0.7,2.5,0c0.3,0.3,0.4,0.6,0.5,0.9c0.1,0.2,0.2,0.5,0.2,0.7
							C868.8,674.1,868.6,674.7,868.2,675.1z"/>
						<path class="st7" d="M865.3,677.2c0,1.1-0.9,2-2,2c-0.2,0-0.4,0-0.7-0.1c-0.6-0.2-1-0.7-1.2-1.2c-0.2-0.3-0.3-0.6-0.3-1
							c0-1,0.8-1.8,1.8-1.8c0.3,0,0.6,0.1,0.9,0.2c0.2,0.1,0.4,0.1,0.6,0.3C865,675.9,865.3,676.5,865.3,677.2z"/>
						<path class="st7" d="M873.2,677.2c0,1.1,0.9,2,2,2c0.2,0,0.4,0,0.7-0.1c0.6-0.2,1-0.7,1.2-1.2c0.2-0.3,0.3-0.6,0.3-1
							c0-1-0.8-1.8-1.8-1.8c-0.3,0-0.6,0.1-0.9,0.2c-0.2,0.1-0.4,0.1-0.6,0.3C873.5,675.9,873.2,676.5,873.2,677.2z"/>
						<path class="st7" d="M875.2,683.6c0,2.2-1.8,3.9-3.9,3.9c-0.3,0-0.7,0-1-0.1c0,0,0,0,0,0c-0.3-0.1-0.6-0.1-1-0.1
							c-0.3,0-0.6,0-0.8,0.1c0,0,0,0,0,0c-0.1,0-0.2,0-0.3,0.1c0,0,0,0,0,0c-0.3,0.1-0.6,0.1-0.8,0.1c-2.2,0-3.9-1.8-3.9-3.9
							c0-0.2,0-0.3,0-0.5c0,0,0,0,0,0c0.1-0.9,0.5-1.7,1.1-2.3c0,0,0,0,0,0c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0,0,0,0
							c0.4-0.4,0.7-0.8,0.8-1.3c0,0,0,0,0,0c0,0,0,0,0,0c0-0.1,0.1-0.2,0.1-0.2c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0
							c0.6-1.4,2-2.4,3.6-2.4c1.7,0,3.1,1.1,3.7,2.6c0,0,0,0,0,0c0.2,0.6,0.5,1.1,1,1.5c0,0,0,0,0,0c0.7,0.6,1.1,1.5,1.2,2.5
							C875.2,683.3,875.2,683.5,875.2,683.6z"/>
					</g>
				</g>
			</g>
			<g id="KIDS_PARK_1_">
				<g>
					<g>
						<path class="st7" d="M614,754.1c0,0,0-0.1,0-0.1C614,754,614,754.1,614,754.1z"/>
						<polygon class="st7" points="618.5,754.9 618.5,754.9 618.5,754.9 						"/>
						<path class="st7" d="M618.5,754.9l-0.1,0.2c-0.1,0.4-0.2,0.7-0.2,1.1c0,0.4,0.1,0.8,0.3,1.2l0,0.1l-0.1,0
							c-1.1,0.6-1.8,1.8-1.8,3.1c0,0.6,0.2,1.2,0.5,1.7l0,0.1l-0.1,0c-0.4,0.2-0.7,0.5-1,0.8c-0.6,0.3-1.2,0.4-1.2,0.4l0,0
							c-0.7,0.3-1.5,0.2-2.2-0.2c-0.6-0.4-1-1.1-1-1.9c0-0.8,0.4-1.6,1.2-2l0.6-0.3l-0.3-0.6c-0.2-0.4-0.3-0.7-0.3-1.1
							c0-0.8,0.4-1.6,1.1-2l0.5-0.3l-0.3-0.5c-0.1-0.2-0.2-0.5-0.2-0.7c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0,0
							c0-0.1,0-0.2,0-0.3"/>
						<path class="st7" d="M614.1,753.6C614.1,753.6,614.1,753.6,614.1,753.6c0.1,0,0.1,0,0.2,0
							C614.2,753.6,614.1,753.6,614.1,753.6z"/>
						<path class="st7" d="M618.2,756.2c0-0.4,0.1-0.8,0.2-1.1l0.1-0.2c0,0,0,0,0,0c-1.3-0.7-2.7-1.1-4.3-1.2c-0.1,0-0.1,0-0.2,0
							c0,0,0,0.2,0,0.3c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0.3,0.1,0.5,0.2,0.7l0.3,0.5l-0.5,0.3c-0.7,0.4-1.1,1.2-1.1,2
							c0,0.4,0.1,0.8,0.3,1.1l0.3,0.6l-0.6,0.3c-0.7,0.4-1.2,1.2-1.2,2c0,0.8,0.4,1.5,1,1.9c0.6,0.4,1.4,0.5,2.2,0.2l0,0
							c0.1,0,0.6-0.2,1.2-0.4c0.3-0.3,0.6-0.6,1-0.8l0.1,0l0-0.1c-0.3-0.5-0.5-1.1-0.5-1.7c0-1.3,0.7-2.4,1.8-3.1l0.1,0l0-0.1
							C618.3,757.1,618.2,756.7,618.2,756.2z"/>
						<path class="st7" d="M614,753.9C614,753.9,614,754,614,753.9C614,754,614,753.9,614,753.9C614,753.9,614,753.9,614,753.9z"/>
						<path class="st7" d="M624.7,765c0-3.8-1.8-7.1-4.6-9.1c-0.3-0.2-0.7-0.5-1-0.7c-0.1,0-0.2-0.1-0.2-0.1
							c-0.2,0.4-0.3,0.8-0.3,1.2c0,0.4,0.1,0.7,0.2,1.1l0.1,0.3l-0.3,0.2c-1,0.6-1.6,1.7-1.6,2.8c0,0.6,0.1,1.1,0.4,1.6l0.2,0.3
							l-0.3,0.2c-0.4,0.2-0.7,0.5-0.9,0.8c-0.1,0.1-0.2,0.3-0.3,0.4c-0.3,0.5-0.4,1-0.4,1.6c0,1.8,1.5,3.3,3.3,3.3
							c0.5,0,0.9-0.1,1.2-0.2c0,0,0,0,0,0v-2.3c-0.8-0.5-1.5-1.2-1.7-2.2l-0.2-0.6l1.8-0.5l0.2,0.5l0-0.5v-1.5h2.3v5.7
							c0,0.2,0.4,0.6,0.8,0.6c1.1,0,1.4-0.5,1.3-0.5C624.6,766.5,624.7,765.8,624.7,765z"/>
					</g>
					<path class="st7" d="M620.2,764.2c-0.1-0.2-0.3-0.3-0.4-0.5l-0.1-0.3l-1.3,0.4l0.1,0.3c0.3,0.8,1,1.6,1.7,2v6.5l1.8,0v-10.8
						h-1.8V764.2z"/>
					<path class="st7" d="M603.7,772.6c-1.7-2.1-2.7-4.8-2.7-7.7c0-6.8,5.5-12.2,12.2-12.2c6.8,0,12.2,5.5,12.2,12.2
						c0,2.9-1,5.6-2.7,7.7h1.2c1.5-2.2,2.4-4.8,2.4-7.7c0-7.3-5.9-13.2-13.2-13.2c-7.3,0-13.2,5.9-13.2,13.2c0,2.9,0.9,5.5,2.4,7.7
						H603.7z"/>
					<g>
						<rect x="604.4" y="760.9" class="st7" width="1" height="11.7"/>
						<path class="st7" d="M619.6,772.6h-1v-3.4c0,0,0.3,0,0.5,0c0.2,0,0.5-0.1,0.5-0.1V772.6z"/>
						
							<rect x="606.2" y="760.9" transform="matrix(6.123234e-17 -1 1 6.123234e-17 -155.588 1368.2823)" class="st7" width="0.2" height="2"/>
						
							<rect x="609" y="760.9" transform="matrix(6.123234e-17 -1 1 6.123234e-17 -152.8121 1371.0581)" class="st7" width="0.2" height="2.2"/>
						<path class="st7" d="M611.5,761.8c0,0,0,0,0,0.1c0,0.1,0,0.1,0,0.1h-0.6v-0.2H611.5z"/>
						<g>
							<rect x="607.6" y="761.4" class="st7" width="0.2" height="7.5"/>
							<rect x="610.4" y="761.4" class="st7" width="0.2" height="7.5"/>
						</g>
						<rect x="607.5" y="769.1" class="st7" width="3.2" height="0.6"/>
						<rect x="607.2" y="769.9" class="st7" width="3.8" height="0.4"/>
						<g>
							<path class="st7" d="M613.5,768.9h-0.2l0-4.9c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.1,0V768.9z"/>
							<path class="st7" d="M616.4,768.9h-0.2v-1.1c0,0,0.1,0.1,0.1,0.2c0,0,0.1,0.1,0.1,0.1V768.9z"/>
						</g>
						<rect x="613.2" y="769.1" class="st7" width="3.2" height="0.6"/>
						<rect x="613" y="769.9" class="st7" width="3.8" height="0.4"/>
					</g>
				</g>
			</g>
			<g id="CLUB_HIPICO_1_">
				<g>
					<path class="st7" d="M1176.5,192.5c-1.9-2.4-3-5.3-3-8.6c0-7.6,6.2-13.8,13.8-13.8s13.8,6.2,13.8,13.8c0,3.3-1.1,6.2-3,8.6h1.4
						c1.7-2.4,2.7-5.4,2.7-8.6c0-8.2-6.7-14.9-14.9-14.9s-14.9,6.7-14.9,14.9c0,3.2,1,6.2,2.7,8.6H1176.5z"/>
					<g>
						<path class="st7" d="M1190.6,175.1c0,0-5-1.7-9.5,2.3c-0.2,0.2,1.1-0.4,2-0.2c0,0-5.3,3.3-6.2,6.6c-0.1,0.4,0.7-0.8,2.2-1.1
							c0,0-1.6,1.7-1.7,4.5c0,0.6,0.1,2.8-0.3,5.2l13.7,0c-0.3-1.1-0.9-2.4-2.1-3.6c0,0-1.1-2.1,0-4.3c0.7-1.4,1.8-2,1.8-2
							s0.1,1.6,1,2c0.9,0.4,1.5,0.6,2.3,1.2c0.7,0.6,0.6,1.9,2,1.9c1.4,0,2.5-1.3,2.7-1.9c0.2-0.4,0.2-1.1-0.1-1.5
							c-0.3-0.4-1.3-1.8-2-3.1c-0.7-1.3-0.5-2.6-1-3.1c-0.5-0.5-1.1-1.2-1.1-1.2s0-0.7-0.1-1.6c0-0.3,0-0.6,0-0.9c0-0.6,0-1.1,0-1.4
							l-0.6,1.1l-0.5,0.8l-0.3,0.4l0-0.5l0.1-0.9l0.1-1.4L1190.6,175.1z"/>
					</g>
				</g>
			</g>
			<g id="CLUBPORTO_BLANCO_1_">
				<g>
					<g>
						<g>
							<path class="st7" d="M120.9,769.1c-10.8,0-19.6,8.8-19.6,19.6c0,4.2,1.3,8.1,3.6,11.3h1.8c-2.5-3.1-4-7.1-4-11.3
								c0-10,8.1-18.1,18.1-18.1s18.1,8.1,18.1,18.1c0,4.3-1.5,8.2-4,11.3h1.8c2.3-3.2,3.6-7.1,3.6-11.3
								C140.5,777.9,131.7,769.1,120.9,769.1z"/>
						</g>
					</g>
					<g>
						<polygon class="st7" points="120.3,775.4 113.6,782 114.2,782.6 120.3,776.6 129.7,786 123.4,792.3 121.1,790.1 120.5,790.7 
							123.4,793.5 130.9,786 						"/>
						<polygon class="st7" points="126.3,783.2 117.2,792.3 110.9,786 113.1,783.8 112.5,783.2 109.6,786 117.2,793.5 126.9,783.8 
													"/>
						<polygon class="st7" points="120,788.9 112.4,781.3 120.3,773.5 128.1,781.3 127.5,782 128.1,782.6 129.3,781.3 120.3,772.3 
							111.2,781.3 119.4,789.5 						"/>
						
							<rect x="119.3" y="778.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -516.1993 313.4519)" class="st7" width="1.9" height="1.9"/>
					</g>
					<g>
						<path class="st7" d="M116.3,799.9c-0.2,0.1-0.7,0.2-1.4,0.2c-1.5,0-2.6-0.9-2.6-2.7c0-1.7,1.1-2.8,2.7-2.8
							c0.6,0,1.1,0.1,1.2,0.2l-0.2,0.6c-0.2-0.1-0.6-0.2-1.1-0.2c-1.2,0-2,0.8-2,2.2c0,1.3,0.7,2.1,2,2.1c0.4,0,0.8-0.1,1.1-0.2
							L116.3,799.9z"/>
						<path class="st7" d="M117.1,794.8h0.7v4.7h2.2v0.6h-2.9V794.8z"/>
						<path class="st7" d="M121.2,794.8v3.1c0,1.2,0.5,1.7,1.2,1.7c0.8,0,1.3-0.5,1.3-1.7v-3.1h0.7v3.1c0,1.6-0.8,2.3-2,2.3
							c-1.1,0-1.9-0.6-1.9-2.2v-3.1H121.2z"/>
						<path class="st7" d="M125.6,794.9c0.3-0.1,0.8-0.1,1.2-0.1c0.7,0,1.1,0.1,1.4,0.4c0.3,0.2,0.4,0.5,0.4,0.9
							c0,0.5-0.3,1-0.9,1.2v0c0.5,0.1,1.1,0.5,1.1,1.3c0,0.5-0.2,0.8-0.5,1.1c-0.4,0.3-1,0.5-1.8,0.5c-0.5,0-0.8,0-1.1-0.1V794.9z
							 M126.2,797.1h0.6c0.7,0,1.1-0.4,1.1-0.9c0-0.6-0.5-0.9-1.1-0.9c-0.3,0-0.5,0-0.6,0V797.1z M126.2,799.6c0.1,0,0.3,0,0.6,0
							c0.7,0,1.3-0.3,1.3-1c0-0.7-0.6-1-1.4-1h-0.6V799.6z"/>
					</g>
				</g>
			</g>
			<g id="ZEN_PARK_1_">
				<g>
					<path class="st7" d="M1115.6,176.8c-2-2.5-3.2-5.7-3.2-9.2c0-8.1,6.6-14.7,14.7-14.7c8.1,0,14.7,6.6,14.7,14.7
						c0,3.5-1.2,6.7-3.2,9.2h1.5c1.8-2.6,2.9-5.7,2.9-9.2c0-8.7-7.1-15.8-15.8-15.8c-8.7,0-15.8,7.1-15.8,15.8
						c0,3.4,1.1,6.6,2.9,9.2H1115.6z"/>
					<path class="st7" d="M1134.8,173.5c0.2,0.1,0.3,0.2,0.5,0.2c0.5,0.2,1,0.5,1,0.4c0-0.1-0.1-0.4-0.5-0.6
						c-0.4-0.2-0.4-0.2-0.3-0.2c0.1,0,0.2,0,0.2-0.3c0-0.2,0-0.6-0.1-0.7c-0.1-0.1-0.1,0-1.1,0c-0.3,0-0.5,0-0.6,0l-0.6-0.6
						c0,0-0.1-0.1-0.1-0.1c-0.1-0.2-0.2-0.4-0.4-0.6c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.2-0.2-0.3-0.3-0.5
						c-0.1-0.2-0.3-0.4-0.4-0.6c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.1-0.2-0.3-0.4-0.4c-0.1-0.1-0.1-0.1-0.2-0.2
						c-0.2-0.2-0.1-0.6,0-0.8c0.1-0.3,0.1-0.7,0.1-1c0-0.3,0.1-0.6,0.1-0.8c0.1-0.5,0.2-1.1,0.2-1.6c0-0.1,0-0.3,0-0.4
						c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2-0.1-0.3c-0.1-0.1-0.1-0.2-0.2-0.3c-0.3-0.4-0.8-0.5-1.3-0.6c-0.3-0.1-0.6-0.1-0.8-0.2
						c-0.5-0.2-0.7-0.5-0.8-0.9c0-0.1,0.1-0.2,0.1-0.4c0.1-0.2,0.3-0.7,0.4-1.2c0.1,0,0.2-0.2,0.2-0.3c0.1-0.2,0.2-0.5,0.2-0.7
						c0-0.1-0.1-0.2-0.2-0.2c0-0.2,0-0.5,0-0.7c0-1-0.7-1.8-1.5-1.9c0,0,0-0.1,0-0.1c0-0.2-0.2-0.3-0.3-0.3c-0.2,0-0.3,0.1-0.3,0.3
						c0,0,0,0.1,0,0.1c-0.8,0.2-1.5,0.9-1.5,1.9c0,0.2,0,0.5,0,0.7c-0.1,0-0.2,0.1-0.2,0.2c0,0.2,0.1,0.5,0.2,0.7
						c0.1,0.2,0.1,0.3,0.2,0.3c0.1,0.5,0.3,1,0.4,1.2c0.1,0.2,0.1,0.3,0.1,0.5c-0.1,0.3-0.2,0.6-0.6,0.8c-0.3,0.1-0.5,0.2-0.8,0.2
						c-0.4,0.1-0.9,0.2-1.3,0.6c-0.1,0.1-0.1,0.2-0.2,0.3c0,0.1-0.1,0.2-0.1,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0,0.3,0,0.4
						c0,0.5,0.1,1.1,0.2,1.6c0,0.3,0.1,0.6,0.1,0.8c0,0.3,0,0.7,0.1,1c0,0.3,0.2,0.6,0,0.8c-0.1,0.1-0.1,0.1-0.2,0.2
						c-0.1,0.1-0.3,0.3-0.4,0.4c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.2-0.3,0.4-0.4,0.6c-0.1,0.2-0.2,0.3-0.3,0.5
						c-0.1,0.2-0.2,0.3-0.3,0.5c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.2-0.2,0.4-0.4,0.6c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.2,0.2-0.4,0.3
						c0,0-0.1,0-0.1,0l-0.1,0.2c0,0,0,0,0,0c-0.1,0.1,0,0.1-0.9,0.1c-0.9,0-1-0.1-1.1,0c-0.1,0.1-0.1,0.5-0.1,0.7s0.1,0.3,0.2,0.3
						c0.1,0,0.1,0.1-0.3,0.2c-0.4,0.2-0.5,0.5-0.5,0.6c0,0.1,0.5-0.3,1-0.4c0.5-0.2,1-0.5,1-0.4c0,0,0,0,0,0l0,0l0,0c0,0,0,0,0,0
						c0,0,0,0,0,0c0,0,0,0.1,0,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0,0,0c0,0.1-0.1,0.1-0.1,0.2c-0.3,0.3-0.4,0.9-0.4,1.3
						c0.1,0.4,0.4,0.8,0.8,0.9c0.2,0.1,0.4,0.2,0.7,0.2c0.5,0.2,1.1,0.2,1.6,0.1c0,0,0,0,0.1,0c0.3,0,0.6-0.1,0.9-0.2
						c0.2-0.1,0.4-0.1,0.7-0.2c0.4-0.1,0.9-0.3,1.3-0.4c0.6-0.2,1.2-0.4,1.8-0.6c0.1-0.1,0.3-0.1,0.4-0.2c0,0,0,0,0.1,0
						c0.1,0.1,0.3,0.2,0.4,0.2c0.6,0.3,1.2,0.4,1.8,0.6c0.4,0.2,0.9,0.3,1.3,0.4c0.2,0.1,0.4,0.1,0.7,0.2c0.3,0.1,0.6,0.2,0.9,0.2
						c0,0,0,0,0.1,0c0.5,0,1.1,0,1.6-0.1c0.2-0.1,0.5-0.1,0.7-0.2c0.4-0.2,0.7-0.5,0.8-0.9c0.1-0.4-0.1-1-0.4-1.3
						c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0C1134.8,173.6,1134.8,173.6,1134.8,173.5C1134.7,173.6,1134.7,173.6,1134.8,173.5
						C1134.7,173.6,1134.7,173.6,1134.8,173.5C1134.7,173.6,1134.7,173.6,1134.8,173.5C1134.7,173.5,1134.8,173.5,1134.8,173.5z
						 M1118.6,173.2c-0.2,0-0.2-0.3-0.1-0.5c0,0,0.7,0,0.7,0.2C1119,173.1,1118.8,173.2,1118.6,173.2z M1124.9,169.2
						c0,0.1-0.1,0.3-0.1,0.4c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0.1,0,0.1c-0.1,0.1-0.1,0.2-0.1,0.3c0,0.1-0.1,0.1-0.1,0.2
						c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.3-0.3,0.4c0,0.1-0.1,0.2-0.1,0.2c0,0,0,0,0,0c0,0.1-0.1,0.1-0.1,0.2
						c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0.1-0.1,0.1c-0.1,0.1-0.1,0.2-0.2,0.2c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0-0.1,0
						c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0c-0.2,0-0.3,0.1-0.5,0.1c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.1,0-0.2,0.1
						c-0.1,0-0.1,0-0.2,0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c0,0-0.1,0-0.1,0
						c-0.1,0-0.2,0.1-0.3,0.1c0,0,0,0,0,0c0,0,0,0,0-0.1c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.2,0.2-0.3c0,0,0.1-0.1,0.1-0.1
						c0,0,0.1-0.1,0.2-0.1c0.1,0,0.1-0.1,0.2-0.1c0.1-0.1,0.2-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.1,0,0.1-0.1,0.2-0.1
						c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.2,0.3-0.4
						c0,0,0-0.1,0.1-0.1c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.1-0.3,0.2-0.4
						c0-0.1,0.1-0.2,0.1-0.2c0-0.1,0.1-0.3,0.1-0.4c0-0.1,0-0.2,0.1-0.2c0,0,0,0,0,0c0-0.1,0-0.2,0-0.3c0-0.1,0-0.1,0-0.2
						c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.2c0,0,0-0.1,0-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0.1,0,0.2,0.1,0.3c0,0.1,0,0.2,0.1,0.3
						c0,0.1,0,0.2,0,0.3c0,0.1,0,0.1,0,0.2c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3C1124.9,169,1124.9,169.1,1124.9,169.2z
						 M1135.3,172.7c0,0.2,0.1,0.5-0.1,0.5s-0.5-0.1-0.5-0.3C1134.6,172.7,1135.3,172.7,1135.3,172.7z M1133.2,172.9
						c-0.1,0-0.2-0.1-0.3-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0
						c0,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c-0.1,0-0.3-0.1-0.5-0.1c0,0-0.1,0-0.1,0
						c-0.1,0-0.1-0.1-0.2-0.1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1-0.1c-0.1-0.1-0.1-0.2-0.2-0.2c0,0,0-0.1-0.1-0.1c0-0.1-0.1-0.2-0.1-0.2
						c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0-0.1-0.1-0.2-0.1-0.2c-0.1-0.2-0.2-0.3-0.3-0.4c-0.1-0.1-0.1-0.2-0.2-0.3
						c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.1-0.1-0.2-0.1-0.3c0,0,0-0.1,0-0.1c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.1-0.1-0.3-0.1-0.4
						c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0-0.3c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0.1-0.3
						c0-0.1,0-0.2,0.1-0.3c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2
						c0,0.1,0,0.2,0,0.3c0,0,0,0,0,0c0,0.1,0,0.2,0.1,0.2c0,0.1,0.1,0.3,0.1,0.4c0,0.1,0.1,0.2,0.1,0.2c0.1,0.1,0.1,0.3,0.2,0.4
						c0.1,0.1,0.1,0.2,0.2,0.3c0,0,0.1,0.1,0.1,0.1c0,0.1,0.1,0.1,0.2,0.2c0,0,0,0.1,0.1,0.1c0.1,0.1,0.2,0.3,0.3,0.4
						c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0,0.1,0.1,0.2,0.1
						c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.2,0.1,0.2,0.2c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.1,0.1,0.2,0.1c0,0,0.1,0.1,0.1,0.1
						c0.1,0.1,0.1,0.2,0.2,0.3C1133.1,172.7,1133.2,172.8,1133.2,172.9C1133.2,172.9,1133.3,172.9,1133.2,172.9
						C1133.3,172.9,1133.3,172.9,1133.2,172.9z"/>
				</g>
			</g>
			<g id="PLAZA_NAUTICA_1_">
				<g>
					<path class="st7" d="M789.4,755.9c-1.8-2.1-2.8-4.8-2.8-7.7c0-6.8,5.7-12.3,12.8-12.3c7.1,0,12.8,5.5,12.8,12.3
						c0,2.9-1.1,5.6-2.8,7.7h1.3c1.6-2.2,2.6-4.8,2.6-7.7c0-7.3-6.2-13.2-13.8-13.2c-7.6,0-13.8,5.9-13.8,13.2
						c0,2.9,0.9,5.5,2.6,7.7H789.4z"/>
					<g>
						<path class="st7" d="M807.7,746.5c-0.2-0.3-0.7-0.4-1-0.2l-4,2.4l-0.1,0.1c-0.2,0.3-0.3,0.6-0.1,0.9c0.1,0.1,0.2,0.3,0.3,0.3
							c-0.1,0-0.1,0.1-0.2,0.1c-0.5,0.2-1,0.4-1.6,0.5V747h1.2c0.2,0,0.4-0.1,0.5-0.2c0.2-0.1,0.2-0.4,0.2-0.5l0-1.6
							c0-0.2-0.1-0.4-0.2-0.6c-0.2-0.2-0.4-0.2-0.6-0.2H801c0-0.1,0.1-0.3,0.1-0.4l0.5-0.8c0.3-0.3,1.1-1.3,0.9-2.7
							c-0.2-1.4-1.2-2.6-2.6-2.8c-0.8-0.2-1.7,0-2.5,0.5c-0.8,0.5-1.4,1.3-1.5,2.1c-0.3,1.5,0.6,2.6,0.9,2.9l0.5,0.7
							c0.1,0.1,0.1,0.3,0.2,0.5l-1.1,0c-0.2,0-0.3,0.1-0.4,0.1c-0.1,0.1-0.3,0.2-0.3,0.4l-0.1,0.1v1.7c0,0.3,0.1,0.5,0.3,0.7
							c0.1,0.1,0.3,0.1,0.5,0.1h1.1l0,3.6c-0.3,0-0.5-0.1-0.8-0.2c-0.3-0.1-0.7-0.2-1-0.4c0.1,0,0.2-0.1,0.3-0.2
							c0.3-0.3,0.2-0.8-0.1-1.1l-3.9-2.3c-0.2-0.2-0.5-0.3-0.8-0.2c-0.3,0.1-0.6,0.4-0.6,0.7l0.1,4.8l0.2,0.1
							c0.2,0.2,0.5,0.3,0.8,0.2c0.1,0,0.3-0.1,0.4-0.2l0.4-0.5c0.4,0.4,0.8,0.9,1.3,1.2c0.7,0.6,1.4,1,2.3,1.4
							c0.7,0.3,1.4,0.7,2,1.1c0.2,0.1,0.3,0.3,0.5,0.4c0.1,0.1,0.3,0.3,0.7,0.3c0,0,0,0,0,0c0.3,0,0.6-0.2,0.7-0.3
							c0.2-0.2,0.5-0.4,0.8-0.6c0.5-0.4,1.1-0.7,1.7-0.9c1-0.4,1.9-1,2.7-1.7c0.3-0.3,0.6-0.6,0.9-0.9l0.3,0.4
							c0.3,0.4,0.8,0.5,1.1,0.3c0.2-0.1,0.3-0.3,0.3-0.5l0-4.5C807.9,746.8,807.8,746.6,807.7,746.5z M797.6,740.4
							c0-0.9,0.7-1.6,1.7-1.6c0.9,0,1.7,0.7,1.7,1.6s-0.7,1.6-1.7,1.6C798.4,742,797.6,741.3,797.6,740.4z M806.8,750.8l-0.8-1
							l-0.4,0.5c-0.3,0.5-0.7,0.9-1.2,1.3c-0.7,0.6-1.5,1.2-2.4,1.6c-0.6,0.3-1.3,0.6-1.8,1c-0.3,0.2-0.6,0.4-0.9,0.7l0,0l0,0
							c-0.2-0.2-0.4-0.3-0.6-0.5c-0.7-0.5-1.4-0.9-2.2-1.2c-0.7-0.3-1.4-0.7-2-1.2c-0.6-0.5-1.1-1-1.5-1.6l-0.4-0.5l-0.7,1l0-3.5
							l3.2,1.8l-1.7,0l0.9,0.8c0.7,0.6,1.5,1.1,2.4,1.4c0.5,0.2,1,0.2,1.6,0.3l0.5,0l0-5.5h-1.9v-1.2h2l0-0.4c0-0.2,0-0.4-0.1-0.7
							c-0.1-0.3-0.2-0.5-0.3-0.8l-0.3-0.4c0.4,0.2,0.9,0.4,1.4,0.4c0.5,0,1-0.2,1.4-0.4l-0.4,0.6c-0.1,0.2-0.2,0.5-0.3,0.7
							c0,0.2-0.1,0.4,0,0.6l0,0.4h1.9l0,1.2h-2v5.6l0.5,0c0.9-0.1,1.7-0.3,2.4-0.6c0.5-0.3,1.1-0.6,1.5-1l1-0.8h-1.8l3.2-1.9V750.8z
							"/>
					</g>
				</g>
			</g>
			<g id="AREA_COMERCIAL_8_">
				<g>
					<g>
						<path class="st7" d="M397.8,874.4c-1.9-2.3-2.9-5.4-2.7-8.6c0.4-6.3,5.6-11.4,11.9-11.6c7.1-0.3,13,5.4,13,12.4
							c0,2.9-1,5.7-2.7,7.8h1.3c1.8-2.5,2.7-5.7,2.4-9.1c-0.6-6.6-6.2-11.8-12.8-12.1c-7.7-0.4-14.1,5.8-14.1,13.4
							c0,2.9,0.9,5.6,2.5,7.8H397.8z"/>
					</g>
					<path class="st7" d="M415.5,860.7c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.8c0-0.1,0-0.1,0-0.2c-0.1-1.9-1.6-3.4-3.6-3.4
						c-1.4,0-2.6,0.8-3.2,2c-1,0.5-1.7,1.4-2,2.4h-1.4c-0.3,0-0.5,0.2-0.6,0.5l0,0.5c0,0,1.3,0,1.4,0h0.6v0.6h-3
						c-0.3,0-0.5,0.2-0.6,0.5l-0.9,11.5c0,0.3,0.2,0.6,0.6,0.6h15c0.3,0,0.6-0.3,0.6-0.6l-0.1-1h1.2c0.3,0,0.6-0.3,0.6-0.6
						L415.5,860.7z M409.2,857c1.2,0.3,1.9,1.5,1.9,2.7v0.7h-0.8c-0.3-1.7-1.7-3-3.4-3C407.4,856.9,408.3,856.7,409.2,857z
						 M405.7,859.6c0-0.4,0.1-0.8,0.3-1.2c0.2-0.1,0.5-0.1,0.7-0.1c1.3,0,2.4,0.9,2.6,2.1h-3.6V859.6z M404.8,859c0,0,0,0.1,0,0.1
						c0,0.1,0,0.1,0,0.2v0.8h-0.7C404.2,859.7,404.5,859.3,404.8,859z M404,861.2h5.4v0.6H404V861.2z M400.3,863.2
						c0-0.2,0.2-0.4,0.5-0.4h2.3v2c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8s0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2h5.4v2
						c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2h2.3c0.3,0,0.5,0.2,0.5,0.4
						l0.7,8.5h-14.1L400.3,863.2z M413.3,873.4h-13.3c-0.3,0-0.5-0.2-0.5-0.5l0-0.3h14.2l0,0.3C413.8,873.2,413.6,873.4,413.3,873.4
						z M413.9,862.3c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.6h4c0.3,0,0.5,0.2,0.5,0.4l0.7,8.5h-0.9L413.9,862.3z M415,871.8h-0.4l-0.1-0.8
						h0.9l0,0.3C415.5,871.6,415.3,871.8,415,871.8z"/>
				</g>
			</g>
			<g id="AREA_COMERCIAL_7_">
				<g>
					<g>
						<path class="st7" d="M473.8,845.6c-1.9-2.3-2.9-5.4-2.7-8.6c0.4-6.3,5.6-11.4,11.9-11.6c7.1-0.3,13,5.4,13,12.4
							c0,2.9-1,5.7-2.7,7.8h1.3c1.8-2.5,2.7-5.7,2.4-9.1c-0.6-6.6-6.2-11.8-12.8-12.1c-7.7-0.4-14.1,5.8-14.1,13.4
							c0,2.9,0.9,5.6,2.5,7.8H473.8z"/>
					</g>
					<path class="st7" d="M491.5,831.8c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.8c0-0.1,0-0.1,0-0.2c-0.1-1.9-1.6-3.4-3.6-3.4
						c-1.4,0-2.6,0.8-3.2,2c-1,0.5-1.7,1.4-2,2.4h-1.4c-0.3,0-0.5,0.2-0.6,0.5l0,0.5c0,0,1.3,0,1.4,0h0.6v0.6h-3
						c-0.3,0-0.5,0.2-0.6,0.5l-0.9,11.5c0,0.3,0.2,0.6,0.6,0.6h15c0.3,0,0.6-0.3,0.6-0.6l-0.1-1h1.2c0.3,0,0.6-0.3,0.6-0.6
						L491.5,831.8z M485.1,828.1c1.2,0.3,1.9,1.5,1.9,2.7v0.7h-0.8c-0.3-1.7-1.7-3-3.4-3C483.4,828,484.2,827.9,485.1,828.1z
						 M481.6,830.7c0-0.4,0.1-0.8,0.3-1.2c0.2-0.1,0.5-0.1,0.7-0.1c1.3,0,2.4,0.9,2.6,2.1h-3.6V830.7z M480.8,830.1c0,0,0,0.1,0,0.1
						c0,0.1,0,0.1,0,0.2v0.8h-0.7C480.2,830.8,480.5,830.5,480.8,830.1z M480,832.3h5.4v0.6H480V832.3z M476.3,834.3
						c0-0.2,0.2-0.4,0.5-0.4h2.3v2c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8s0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2h5.4v2
						c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2h2.3c0.3,0,0.5,0.2,0.5,0.4
						l0.7,8.5h-14.1L476.3,834.3z M489.3,844.6H476c-0.3,0-0.5-0.2-0.5-0.5l0-0.3h14.2l0,0.3C489.8,844.3,489.6,844.6,489.3,844.6z
						 M489.8,833.4c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.6h4c0.3,0,0.5,0.2,0.5,0.4l0.7,8.5h-0.9L489.8,833.4z M491,842.9h-0.4l-0.1-0.8
						h0.9l0,0.3C491.5,842.7,491.3,842.9,491,842.9z"/>
				</g>
			</g>
			<g id="AREA_COMERCIAL_6_">
				<g>
					<g>
						<path class="st7" d="M835.1,619.1c-1.9-2.3-2.9-5.4-2.7-8.6c0.4-6.3,5.6-11.4,11.9-11.6c7.1-0.3,13,5.4,13,12.4
							c0,2.9-1,5.7-2.7,7.8h1.3c1.8-2.5,2.7-5.7,2.4-9.1c-0.6-6.6-6.2-11.8-12.8-12.1c-7.7-0.4-14.1,5.8-14.1,13.4
							c0,2.9,0.9,5.6,2.5,7.8H835.1z"/>
					</g>
					<path class="st7" d="M852.8,605.4c0-0.3-0.3-0.5-0.6-0.5h-3.1V604c0-0.1,0-0.1,0-0.2c-0.1-1.9-1.6-3.4-3.6-3.4
						c-1.4,0-2.6,0.8-3.2,2c-1,0.5-1.7,1.4-2,2.4H839c-0.3,0-0.5,0.2-0.6,0.5l0,0.5c0,0,1.3,0,1.4,0h0.6v0.6h-3
						c-0.3,0-0.5,0.2-0.6,0.5l-0.9,11.5c0,0.3,0.2,0.6,0.6,0.6h15c0.3,0,0.6-0.3,0.6-0.6l-0.1-1h1.2c0.3,0,0.6-0.3,0.6-0.6
						L852.8,605.4z M846.4,601.7c1.2,0.3,1.9,1.5,1.9,2.7v0.7h-0.8c-0.3-1.7-1.7-3-3.4-3C844.7,601.6,845.5,601.4,846.4,601.7z
						 M842.9,604.2c0-0.4,0.1-0.8,0.3-1.2c0.2-0.1,0.5-0.1,0.7-0.1c1.3,0,2.4,0.9,2.6,2.1h-3.6V604.2z M842.1,603.7c0,0,0,0.1,0,0.1
						c0,0.1,0,0.1,0,0.2v0.8h-0.7C841.5,604.4,841.7,604,842.1,603.7z M841.2,605.8h5.4v0.6h-5.4V605.8z M837.6,607.9
						c0-0.2,0.2-0.4,0.5-0.4h2.3v2c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2
						h5.4v2c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2h2.3
						c0.3,0,0.5,0.2,0.5,0.4l0.7,8.5h-14.1L837.6,607.9z M850.6,618.1h-13.3c-0.3,0-0.5-0.2-0.5-0.5l0-0.3H851l0,0.3
						C851.1,617.9,850.9,618.1,850.6,618.1z M851.1,607c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.6h4c0.3,0,0.5,0.2,0.5,0.4l0.7,8.5h-0.9
						L851.1,607z M852.3,616.5h-0.4l-0.1-0.8h0.9l0,0.3C852.8,616.3,852.5,616.5,852.3,616.5z"/>
				</g>
			</g>
			<g id="AREA_COMERCIAL_5_">
				<g>
					<g>
						<path class="st7" d="M798.2,634c-1.9-2.3-2.9-5.4-2.7-8.6c0.4-6.3,5.6-11.4,11.9-11.6c7.1-0.3,13,5.4,13,12.4
							c0,2.9-1,5.7-2.7,7.8h1.3c1.8-2.5,2.7-5.7,2.4-9.1c-0.6-6.6-6.2-11.8-12.8-12.1c-7.7-0.4-14.1,5.8-14.1,13.4
							c0,2.9,0.9,5.6,2.5,7.8H798.2z"/>
					</g>
					<path class="st7" d="M815.9,620.2c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.8c0-0.1,0-0.1,0-0.2c-0.1-1.9-1.6-3.4-3.6-3.4
						c-1.4,0-2.6,0.8-3.2,2c-1,0.5-1.7,1.4-2,2.4h-1.4c-0.3,0-0.5,0.2-0.6,0.5l0,0.5c0,0,1.3,0,1.4,0h0.6v0.6h-3
						c-0.3,0-0.5,0.2-0.6,0.5l-0.9,11.5c0,0.3,0.2,0.6,0.6,0.6h15c0.3,0,0.6-0.3,0.6-0.6l-0.1-1h1.2c0.3,0,0.6-0.3,0.6-0.6
						L815.9,620.2z M809.6,616.5c1.2,0.3,1.9,1.5,1.9,2.7v0.7h-0.8c-0.3-1.7-1.7-3-3.4-3C807.8,616.5,808.7,616.3,809.6,616.5z
						 M806.1,619.1c0-0.4,0.1-0.8,0.3-1.2c0.2-0.1,0.5-0.1,0.7-0.1c1.3,0,2.4,0.9,2.6,2.1h-3.6V619.1z M805.2,618.6c0,0,0,0.1,0,0.1
						c0,0.1,0,0.1,0,0.2v0.8h-0.7C804.6,619.3,804.9,618.9,805.2,618.6z M804.4,620.7h5.4v0.6h-5.4V620.7z M800.7,622.8
						c0-0.2,0.2-0.4,0.5-0.4h2.3v2c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2
						h5.4v2c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2h2.3
						c0.3,0,0.5,0.2,0.5,0.4l0.7,8.5h-14.1L800.7,622.8z M813.7,633h-13.3c-0.3,0-0.5-0.2-0.5-0.5l0-0.3h14.2l0,0.3
						C814.2,632.7,814,633,813.7,633z M814.3,621.9c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.6h4c0.3,0,0.5,0.2,0.5,0.4l0.7,8.5h-0.9
						L814.3,621.9z M815.4,631.4H815l-0.1-0.8h0.9l0,0.3C815.9,631.1,815.7,631.4,815.4,631.4z"/>
				</g>
			</g>
			<g id="FITNESS_PARK_1_">
				<g>
					<g>
						<g>
							<path class="st7" d="M1093.9,456.6c-8.1,0.4-14.9,6.8-15.6,14.9c-0.4,4.2,0.8,8,3,11.1h1.5c-2.3-2.9-3.6-6.6-3.3-10.6
								c0.5-7.7,6.9-13.9,14.6-14.2c8.7-0.3,15.9,6.6,15.9,15.2c0,3.6-1.3,6.9-3.4,9.5h1.5c1.9-2.7,3-6,3-9.5
								C1111.2,463.7,1103.4,456.1,1093.9,456.6z"/>
						</g>
					</g>
					<g>
						<path class="st7" d="M1089.8,482.6h-2c-0.4,0-0.8-0.4-0.8-0.8v-14.3c0-0.4,0.4-0.8,0.8-0.8h2c0.4,0,0.8,0.4,0.8,0.8v14.3
							C1090.6,482.2,1090.3,482.6,1089.8,482.6z"/>
						<path class="st7" d="M1085.5,481.1h-1.6c-0.4,0-0.7-0.3-0.7-0.7v-11.6c0-0.4,0.3-0.7,0.7-0.7h1.6c0.4,0,0.7,0.3,0.7,0.7v11.6
							C1086.1,480.8,1085.8,481.1,1085.5,481.1z"/>
						<path class="st7" d="M1083.5,476.7h-1.3c-0.3,0-0.6-0.3-0.6-0.6v-3c0-0.3,0.3-0.6,0.6-0.6h1.3c0.3,0,0.6,0.3,0.6,0.6v3
							C1084,476.4,1083.8,476.7,1083.5,476.7z"/>
						<path class="st7" d="M1099.6,466.6h2c0.4,0,0.8,0.4,0.8,0.8v14.3c0,0.4-0.4,0.8-0.8,0.8h-2c-0.4,0-0.8-0.4-0.8-0.8v-14.3
							C1098.8,467,1099.2,466.6,1099.6,466.6z"/>
						<path class="st7" d="M1104,468.1h1.6c0.4,0,0.7,0.3,0.7,0.7v11.6c0,0.4-0.3,0.7-0.7,0.7h-1.6c-0.4,0-0.7-0.3-0.7-0.7v-11.6
							C1103.3,468.4,1103.6,468.1,1104,468.1z"/>
						<path class="st7" d="M1106,472.5h1.3c0.3,0,0.6,0.3,0.6,0.6v3c0,0.3-0.3,0.6-0.6,0.6h-1.3c-0.3,0-0.6-0.3-0.6-0.6v-3
							C1105.4,472.8,1105.7,472.5,1106,472.5z"/>
						<path class="st7" d="M1100.4,476.3h-11.5c-0.4,0-0.8-0.3-0.8-0.8v-1.9c0-0.4,0.3-0.8,0.8-0.8h11.5c0.4,0,0.8,0.3,0.8,0.8v1.9
							C1101.2,475.9,1100.8,476.3,1100.4,476.3z"/>
					</g>
				</g>
			</g>
			<g id="SUPERMERCADO_1_">
				<g>
					<path class="st7" d="M49.8,791.9c-1,0-1.8,0.8-1.8,1.8s0.8,1.8,1.8,1.8s1.8-0.8,1.8-1.8S50.8,791.9,49.8,791.9z M49.8,794.8
						c-0.7,0-1.2-0.5-1.2-1.2c0-0.6,0.5-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2C51,794.3,50.4,794.8,49.8,794.8z"/>
					<path class="st7" d="M60.3,791.9c-1,0-1.8,0.8-1.8,1.8s0.8,1.8,1.8,1.8s1.8-0.8,1.8-1.8S61.3,791.9,60.3,791.9z M60.3,794.8
						c-0.7,0-1.2-0.5-1.2-1.2c0-0.6,0.5-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2C61.5,794.3,60.9,794.8,60.3,794.8z"/>
					<path class="st7" d="M63.5,777.8L63.5,777.8C63.5,777.8,63.5,777.8,63.5,777.8L63.5,777.8z"/>
					<path class="st7" d="M64.4,778.8L64.4,778.8C64.4,778.9,64.4,778.9,64.4,778.8L64.4,778.8z"/>
					<path class="st7" d="M63.5,777.8C63.5,777.8,63.5,777.8,63.5,777.8l-15.8,0l-0.7-2.4c-0.1-0.4-0.4-0.7-0.8-0.7v0h-2.9v0
						c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9c0,0,0.1,0,0.1,0h2.1l3.5,11.1c-0.5,0.5-0.8,1.2-0.6,1.9c0.2,0.9,1,1.5,1.9,1.6
						c0.2,0,0.3,0,0.5,0l0,0l11.2-0.5v0c0.4,0,0.7-0.3,0.7-0.7c0-0.4-0.3-0.7-0.7-0.7c0,0-0.1,0-0.1,0l-9.3,0.4l-1,0l-1,0
						c0,0-0.1,0-0.1,0c0,0,0,0,0,0c-0.3,0-0.5-0.2-0.5-0.5c0-0.2,0.1-0.4,0.3-0.5h0c0.1,0,0.2-0.1,0.3-0.1c0,0,0.7-0.1,0.7-0.1
						l1.3-0.2l9.7-1.1v0c0.4,0,0.7-0.3,0.8-0.7h0l1.5-7.8c0,0,0,0,0,0h0c0,0,0-0.1,0-0.2C64.4,778.2,64,777.8,63.5,777.8z
						 M52.8,786.7l-2.3,0.3l-1.1-3.6h3.4V786.7z M52.8,782.5h-3.7l-0.9-2.9h4.6V782.5z M57.5,786.1l-3.8,0.5v-3.2h3.8V786.1z
						 M57.5,782.5h-3.8v-2.9h3.8V782.5z M61.1,785.7l-2.8,0.3v-2.7h3.3L61.1,785.7z M61.8,782.5h-3.5v-2.9h4L61.8,782.5z"/>
				</g>
				<g>
					<path class="st7" d="M51.8,769.1c-8.5,0.4-15.6,6.9-16.4,15.1c-0.4,4.2,0.8,8.1,3.1,11.3h1.6c-2.4-2.9-3.8-6.6-3.5-10.7
						c0.5-7.8,7.2-14.1,15.3-14.4c9.1-0.4,16.7,6.7,16.7,15.4c0,3.7-1.3,7-3.5,9.7h1.6c2-2.7,3.2-6.1,3.2-9.7
						C69.9,776.3,61.7,768.6,51.8,769.1z"/>
				</g>
			</g>
		</g>
		<g>
			<text transform="matrix(1 0 0 1 1124.4883 548.2207)" class="st7 futura-book st9">BOSQUE 1</text>
			<text transform="matrix(1 0 0 1 1215.6201 548.2207)" class="st7 futura-book st9">BOSQUE 2</text>
			<text transform="matrix(1 0 0 1 1189.5371 455.1738)" class="st7 futura-book st9">BOSQUE 3</text>
			<text transform="matrix(1 0 0 1 1269.2822 232.6216)" class="st7 futura-book st9">BOSQUE 4</text>
			<text transform="matrix(1 0 0 1 464.4868 920.9805)" class="st7 futura-book st9">DESIERTO 1</text>
			<text transform="matrix(1 0 0 1 518.5308 869.4795)" class="st7 futura-book st9">DESIERTO 2</text>
			<text transform="matrix(1 0 0 1 584.3306 835.4443)" class="st7 futura-book st9">DESIERTO 3</text>
			<text transform="matrix(1 0 0 1 662.8135 808.0713)" class="st7 futura-book st9">DESIERTO 4</text>
			<text transform="matrix(1 0 0 1 197.6606 889.6055)" class="st7 futura-book st9">ESTEPA 1</text>
			<text transform="matrix(1 0 0 1 331.5806 905.7393)" class="st7 futura-book st9">ESTEPA 2</text>
			<text transform="matrix(1 0 0 1 404.4517 964.0859)" class="st7 futura-book st9">ESTEPA 3</text>
			<text transform="matrix(1 0 0 1 884.5107 760.6904)" class="st7 futura-book st9">LAGO 2</text>
			<text transform="matrix(1 0 0 1 781.7598 857.2188)" class="st7 futura-book st9">LAGO 1</text>
			<text transform="matrix(1 0 0 1 1031.4336 590.3594)" class="st7 futura-book st9">MANGLAR 1</text>
			<text transform="matrix(1 0 0 1 892.0859 585.1367)" class="st7 futura-book st9">MANGLAR 2</text>
			<text transform="matrix(1 0 0 1 365.9004 826.3545)" class="st7 futura-book st9">PÁRAMO 1</text>
			<text transform="matrix(1 0 0 1 494.2866 798.5039)" class="st7 futura-book st9">PÁRAMO 2</text>
			<text transform="matrix(1 0 0 1 548.5103 652.5938)" class="st7 futura-book st9">PÁRAMO 3</text>
			<g>
				<text transform="matrix(1 0 0 1 180.5635 926.6807)" class="st7 futura-book st11">ESTEPA</text>
				<text transform="matrix(1 0 0 1 320.3413 939.9219)" class="st7 futura-book st11">ESTEPA</text>
				<text transform="matrix(1 0 0 1 160.3901 811.4482)" class="st7 futura-book st11">PÁRAMO</text>
				<text transform="matrix(1 0 0 1 336.3955 813.9736)" class="st7 futura-book st11">PÁRAMO</text>
				<text transform="matrix(1 0 0 1 542.9321 894.3154)" class="st7 futura-book st11">DESIERTO</text>
				<text transform="matrix(1 0 0 1 806.0635 808.0117)" class="st7 futura-book st11">LAGO</text>
				<text transform="matrix(1 0 0 1 545.3071 680.1426)" class="st7 futura-book st11">PÁRAMO</text>
				<text transform="matrix(1 0 0 1 1024.4326 727.3066)" class="st7 futura-book st11">TAIGA</text>
				<text transform="matrix(1 0 0 1 1185.752 321.7949)" class="st7 futura-book st11">SABANA</text>
				<text transform="matrix(1 0 0 1 1252.1797 176.9561)" class="st7 futura-book st11">BOSQUE  </text>
				<text transform="matrix(1 0 0 1 945.5361 575.499)" class="st7 futura-book st11">MANGLAR</text>
				<text transform="matrix(1 0 0 1 1031.9229 285.209)" class="st7 futura-book st11">TUNDRA</text>
				<text transform="matrix(1 0 0 1 978.3252 405.1348)" class="st7 futura-book st11">SELVA</text>
				<text transform="matrix(1 0 0 1 1160.6338 510.6533)" class="st7 futura-book st11">BOSQUE</text>
				<text transform="matrix(1 0 0 1 713.8496 566.3037)" class="st7 futura-book st11">ARRECIFE</text>
			</g>
			<text transform="matrix(1 0 0 1 939.7363 427.7344)" class="st7 st8 st9"> SELVA 1</text>
			<text transform="matrix(1 0 0 1 930.7256 286.6621)" class="st7 st8 st9"> SELVA 2</text>
			<text transform="matrix(1 0 0 1 1008.1934 175.2334)" class="st7 st8 st9"> SELVA 4</text>
			<text transform="matrix(1 0 0 1 1080.3535 383.2852)" class="st7 st8 st9"> SELVA 3</text>
		</g>
	</g>
</g>
</svg>

                </div>
            </div>
        </div>
        <div class="amenidades pb-blue3-bg py">
            <div class="row">
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/forest.svg">
                    <h5>Áreas Ecológicas</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/park.svg">
                    <h5>Kids Park</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/lake.svg">
                    <h5>Lago</h5>
                </div>

                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/hospital.svg">
                    <h5>Hospital</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/horse.svg">
                    <h5>Club Hípico</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/shop.svg">
                    <h5>Área Comercial</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/pet.svg">
                    <h5>Pet Friendly Park</h5>
                </div>

                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/portto.svg">
                    <h5>Club Portto Blanco</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/book.svg">
                    <h5>Escuela</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/fitness.svg">
                    <h5>Fitness Park</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/zen.svg">
                    <h5>Zen Park</h5>
                </div>

                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/sport.svg">
                    <h5>Sport Zone</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/market.svg">
                    <h5>Supermercado</h5>
                </div>
                <div class="col s12 m12 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/nautica.svg">
                    <h5>Plaza Náutica Portto Blanco</h5>
                </div>
            </div>

        </div>
    </div>
    <!--De Galeria de vr -->
    <div class="section2">
        <div class="master">
            <div class="row">
                <div class="col s12">
                    <h2 class="headline-2 pb-blue-text center-align"><span class="futura-light">Vive La Experiencia Virtual de Nuestras Amenidades</h2>
                </div>
            </div>
        </div>
        <div class=" vr pb-blue3-bg py">
            <div class="row">
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHmQ2UA/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_PlazaNautica_Vr.jpg">
                        <h5 >Plaza Náutica Portto Blanco</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer"  href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnXD2A/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_Pet-park_Vr.jpg">
                        <h5>Pet Friendly Park</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHncOPc/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_KidsPark_Vr.jpg">
                        <h5 >Kids Park</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHndhQc/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_ZenPark_Vr.jpg">
                        <h5>Zen Park</h5>
                    </a>
                </div>

                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHngp6g/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_Gym_Vr.jpg">
                        <h5>Fitness Park</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnh50o/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img     src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_ClubPorttoBlanco_Vr.jpg">
                        <h5>Club Portto Blanco</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnitVw/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_ClubHipico_Vr.jpg">
                        <h5>Club Hípico</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnkmJM/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_Acceso_Vr.jpg">
                        <h5>Acceso Principal</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnjtkM/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_AccesoCasas_Vr.jpg">
                        <h5> Acceso a Casa-Condominio</h5>
                    </a>
                </div>
            <!--vr items -->
            </div>

        </div>
    </div>

<!-- Fin De Galeria de vr -->
    
    
    
    <div class="py">
        <h2 class="headline-2 center-align pb-blue-text futura-light">Lotes residenciales diseñados para las necesidades de nuestros clientes más exigentes</h2>
        <div class="row center py">
            <div class="col s12">
                <img class="plano-lote" src="media/assets/img/habitta/portto-blanco/lotes/lotes-abc-dark.svg">
            </div>
        </div>
        <div class="row center py">
            <div class="col s12">
                <img class="plano-lote" src="media/assets/img/habitta/portto-blanco/lotes/lotes-def-dark.svg">
            </div>
        </div>
        <div class="row center py">
            <div class="col s12">
                <img class="plano-lote" src="media/assets/img/habitta/portto-blanco/lotes/lotes-ghi-dark.svg">
            </div>
        </div>
    </div>

    <div class="py pb-blue3-bg">
        <div class="container">
            <!--h2 class="headline-2 pb-light-text">PLANOS</h2>
            <div class="row center py">
                <div class="col s12">
                    <h4 class="pb-light-text">ESTEPA</h4>
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/estepa.png" style="width: 100%;">
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/estepa-inf.svg" style="margin-top: 20px;">
                </div>
            </div>
            <div class="row center py">
                <div class="col s12">
                    <h4 class="pb-light-text">DESIERTO</h4>
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/desierto.png" style="width: 100%;">
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/desierto-inf.svg" style="margin-top: 20px;">
                </div>
            </div>
            <div class="row center py">
                <div class="col s12">
                    <h4 class="pb-light-text">ARRECIFE</h4>
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/arrecife.png" style="width: 100%;">
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/arrecife-inf.svg" style="margin-top: 20px;">
                </div>
            </div-->

            <h2 class="headline-2 py pb-light-text">FINANCIAMIENTO</h2>
             <div class="row py">
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/financiamiento.svg" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer pb-gray-bg" ng-controller="mainController as main">
        <div class="container">
            <div class="row py-80">

                <div class="col s12">
                    <h4 class="pb-20">¿Tienes algún proyecto en mente? Tomemos un café</h4>
                </div>
                <form class="col s12 m7" ng-submit="main.sendEmail()">
                    <div class="input-field col s12">
                        <input id="first_name" type="text" name="name" class="validate" autocomplete="off" required ng-model="main.name">
                        <label for="first_name">¿Cómo te llamas?</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate" autocomplete="off" required ng-model="main.email">
                        <label for="email">Compartenos tu Correo electrónico @</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="tel" type="tel" name="phone" class="validate" autocomplete="off" ng-model="main.phone">
                        <label for="tel">Si lo prefieres, dejanos tu Télefono (opcional)</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" name="details" class="materialize-textarea" autocomplete="off" maxlength="120" required ng-model="main.message"></textarea>
                        <label for="textarea1">¡Cuéntanos sobre tu proyecto!</label>
                    </div>
                    <button class="waves-effect waves-teal btn right w100" type="submit">
                        ENVIAR
                    </button>
                </form>

               <div class="contact-footer col s12 m4 right">
                    <div class="py-40">
                        <h4>Contactanos</h4>
                        <ul>
                            <li class="py-10">Dirección: <a class=""
                                    href="https://goo.gl/maps/4Sv1C6Re18urpw4W6" target="_blank">
                                    Blvd. Bernardo Quintana 88, Carretas, 76050 Santiago de Querétaro, Qro.</a></li>
                            <li class="py-10">Teléfono: <a class="" href="tel:+524422912223">442 291 2223</a></li>
                            <li class="py-10">Correo: <a class=""
                                    href="mailto:hola.habitta@grupoccima.com">hola.habitta@grupoccima.com</a></li>
                            <li class="py-10">Abrimos: Lun-Vie: 8 am-6:30 pm <br>Sáb-Dom: 10 am-6:30 pm  </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <ul class="social-icons">
                    <li class="right">
                        <a href="https://mx.linkedin.com/company/grupo-ccima">
                            <img src="media/assets/img/icons/social/linkedin.svg" width="19" height="19">
                        </a>
                    </li>
                    <li class="right">
                        <a href="https://twitter.com/grupoccima?lang=es">
                            <img src="media/assets/img/icons/social/twitter.svg" width="20" height="20">
                        </a>
                    </li>
                    <li class="right">
                        <a href="https://www.instagram.com/grupo_ccima/">
                            <img src="media/assets/img/icons/social/instagram.svg" width="20" height="20">
                        </a>
                    </li>
                    <li class="right">
                        <a href="https://www.facebook.com/GPOCCIMA/?ref=br_rs">
                            <img src="media/assets/img/icons/social/facebook.svg" width="20" height="20">
                        </a>
                    </li>
                    <li>Grupo CCIMA 2020</li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
