@extends('layouts.main')

@section('head')
    <style>
        #miCanvas {
            background: #eaeaea;
            border: solid red 3px;
            margin: auto;
        }
    </style>
@endsection
@section('breadcrumbs')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-2">
            <h3 class="content-header-title mb-0">Binary Tree</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Trees</a></li>
                        @include('layouts.partial.breadcrumbs')
                    </ol>
                </div>
            </div>
        </div>
        <div id="bred-graph" class="content-header-right col-md-6 col-xs-12">
            <div class="media width-250 float-xs-right">
                <div class="media-left media-middle">
                    <div id="sp-bar-total-sales"></div>
                </div>
                <div class="media-body media-right text-xs-right">
                    <h3 class="m-0">$5,668</h3><span class="text-muted">Balance</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row match-height">
        <div class="card-header col-xs-1 col-sm-1 col-md-12 col-lg-12 col-xl-12" style="padding: 6px!important;">
            {{--<div class=" col-xs-12 col-sm-12 ">--}}
            <div class="canvas-wrapper">
                <canvas id="miCanvas" width="1310" height="600">
                    Tu navegador no soporta el canvas de HTML5
                </canvas>
            </div>
            {{--</div>--}}
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/binaryTree.js') }}"></script>
    <script>
        var canvas;
        var ctx;
        var position;
        var info;
        var info_array = new Array();

        function ajusta(xx, yy) {
            var posCanvas = canvas.getBoundingClientRect();
            var x = xx - posCanvas.left;
            var y = yy - posCanvas.top;
            return {x: x, y: y}
        }

        function selecciona(e) {
            var pos = ajusta(e.clientX, e.clientY);
            console.log(pos);
            var x = pos.x;
            var y = pos.y;
            var tecla;
            var bandera = false;
            for (var i = 0; i < info_array.length; i++) {
                tecla = info_array[i];
                if (tecla.x > 0) {
                    if ((x > tecla.x) && (x < tecla.x + tecla.ancho) && (y > tecla.y) && (y < tecla.y + tecla.alto)) {
                        break;
                    }
                }
            }
            if (i < info_array.length) {
                alert(i);
            }
        }


        window.onload = function () {
            canvas = document.getElementById("miCanvas");
            if (canvas && canvas.getContext) {
                ctx = canvas.getContext("2d");
                if (ctx) {
                    console.log(canvas.width);
                    console.log(canvas.width / 2);
                    canvas.addEventListener("click", selecciona, false);
                    /****************
                     VARIABLES
                     *****************/
                    var i;
                    var add = {fondo: "rgba(19,52,149,1)"};
                    var posInicial = {x: canvas.width / 2 - 90, y: 30};
                    var rectangulo = {largo: 180, alto: 50, fondo: "rgba(33,150,243,1)"};
                    var json = [
                        {"username": "John0", "paquete": "gold", "type": "user", "position": "1,1"},
                        {"username": "jose1", "paquete": "gold", "type": "user", "position": "2,1"},
                        {"username": "jose2", "paquete": "gold", "type": "user", "position": "2,2"},
                        {"username": "jose3", "paquete": "gold", "type": "user", "position": "3,1"},
                        {"username": "jose4", "paquete": "gold", "type": "user", "position": "3,2"},
                        {"username": "jose5", "paquete": "gold", "type": "user", "position": "3,3"},
                        {"username": "jose6", "paquete": "gold", "type": "user", "position": "3,4"},
                        {"username": "jose7", "paquete": "gold", "type": "user", "position": "4,1"},
                        {"username": "jose8", "paquete": "gold", "type": "user", "position": "4,2"},
                        {"username": "jose9", "paquete": "gold", "type": "user", "position": "4,3"},
                        {"username": "jose10", "paquete": "gold", "type": "user", "position": "4,4"},
                        {"username": "jose11", "paquete": "gold", "type": "user", "position": "4,5"},
                        {"username": "jose12", "paquete": "gold", "type": "user", "position": "4,6"},
                        {"username": "jose13", "paquete": "gold", "type": "user", "position": "4,7"},
                        {"username": "jose14", "paquete": "gold", "type": "user", "position": "4,8"}
                    ];

                    var posiciones = {
                        "1,1":{x:canvas.width / 2 -90 ,y:40} ,
                        "2,1":{x:canvas.width / 4 - 80,y:140} ,
                        "2,2":{x:canvas.width / 4*3 - 80,y:140} ,
                        "3,1":{x:canvas.width / 8 - 80,y:240} ,
                        "3,2":{x:canvas.width / 8*3 - 80,y:240} ,
                        "3,3":{x:canvas.width / 8*5 - 80,y:240} ,
                        "3,4":{x:canvas.width / 8*7 - 80,y:240} ,
                        "4,1":{x:0 ,y:340} ,
                        "4,2":{x:canvas.width / 8+5 ,y:340} ,
                        "4,3":{x:canvas.width / 8*2+5 ,y:340} ,
                        "4,4":{x:canvas.width / 8*3+5 ,y:340} ,
                        "4,5":{x:canvas.width / 8*4+5 ,y:340} ,
                        "4,6":{x:canvas.width / 8*5+5 ,y:340} ,
                        "4,7":{x:canvas.width / 8*6+5 ,y:340} ,
                        "4,8":{x:canvas.width / 8*7+5 ,y:340}
                    };

                    var paquete = "{{asset('backoffice/images/circulo1.png')}}";
                    var icon = "{{ asset('backoffice/images/icons/info.svg') }}";
                    console.log(json);
                    console.log(posiciones);
                    /*****************
                     FUNCIONES
                     ******************/
                    function pintaGrid(disX, disY, color) {
                        ctx.strokeStyle = color;
                        ctx.lineWidth = 0.5;

                        for (var i = disX + 0.5; i < canvas.width; i += disX) {
                            ctx.beginPath();
                            ctx.moveTo(i, 0);
                            ctx.lineTo(i, ctx.canvas.height);
                            ctx.stroke();
                        }

                        for (var i = disY + 0.5; i < canvas.height; i += disY) {
                            ctx.beginPath();
                            ctx.moveTo(0, i);
                            ctx.lineTo(ctx.canvas.width, i);
                            ctx.stroke();
                        }
                    }

                    pintaGrid(20, 20, "gray");
                    var tNode = new TreeNode(ctx, posInicial);
//                    tNode.SetUsername = "Hola mundo!";
//                    tNode.SetImage=paquete;
//                    tNode.pintar(paquete,posInicial.x,posInicial.y);
//                    tNode.SetImage=paquete;

                    for (var k in json){
                        console.log("indice =" + k, "position =" + json[k]["position"]);
                        console.log( posiciones[json[k]["position"]] );
                        pos=posiciones[json[k]["position"]];
                        console.log("position ="+pos.x);
                        console.log("position Y="+pos.y);
                        tNode.SetPosition = pos;
                        tNode.createNode();
                        tNode.SetUsername = json[k]["username"];
//                        console.log("user "+k);
                        tNode.pintar(paquete,pos.x,pos.y);
                    }
//                    console.info( posiciones.includes( '1,1' ) );
//                    console.info( ("1,1" in posiciones) );


                    /******************************/
                    /*var arbol = new BinaryTree(ctx);
                    arbol.createNode(posInicial.x, posInicial.y, raiz.fondo, paquete, icon, ctx);
                    arbol.lineLeft(posInicial.x, posInicial.y);
                    arbol.lineRight(posInicial.x, posInicial.y);*/

                    /*var x = posInicial.x;
                    var y = posInicial.y;
                    var nivel;*/

                    /*******************CREANDO NODO RAIZ****************************/
                    /*ctx.fillStyle = rectangulo.fondo;
                    ctx.fillRect(x, y, rectangulo.largo, rectangulo.alto);
                    /!***** INICIO IMAGEN.  *****!/
                    var imagen = new Image();
                    var icono = new Image();
                    imagen.src = paquete;
                    icono.src = icon;
                    imagen.onload = function () {
                        ctx.drawImage(imagen, posInicial.x, posInicial.y);
                    };
                    icono.onload = function () {
                        ctx.drawImage(icono, posInicial.x + 150, posInicial.y + 25, 20, 20);
                    };
                    info = {x: posInicial.x + 150, y: posInicial.y + 25};
                    info_array.push(info);
                    /!***** FIN IMAGEN  *****!/
                    ctx.font = "15px Verdana";
                    ctx.lineWidth = 2;
                    ctx.fillStyle = "white";
                    ctx.fillText("user name", x + 52, y + 25);
                    /!***** LINEA DERECHA  ****!/
                    ctx.lineWidth = 2;
                    ctx.strokeStyle = "rgba(58,150,235,1)";
                    ctx.beginPath();
                    ctx.moveTo(x + 100, y + 50);   //baja inicio
                    ctx.lineTo(x + 100, 110);   //baja final
                    ctx.lineTo(canvas.width / 4 + 40, 110);    //izquierda
                    ctx.quadraticCurveTo(canvas.width / 4, 110, canvas.width / 4, y + 110);
                    ctx.stroke();
                    posL = {x: x - 100, y: y + 100};
                    /!***** LINEA IZQUIERDA  **************!/
                    ctx.beginPath();
                    ctx.moveTo(x + 100, y + 80);   //baja final
                    ctx.lineTo(canvas.width / 4 * 3 - 40, y + 80);   //derecha
                    ctx.quadraticCurveTo(canvas.width / 4 * 3, y + 80, canvas.width / 4 * 3, y + 110);
                    ctx.stroke();
                    posR = {x: x + 300, y: y + 100};
                    /!*******************FIN NODO RAIZ****************************!/
                    console.log("/2=" + posInicial.x / 2);
                    arbol.createNode(canvas.width / 4 - 80, 140, rectangulo.fondo, paquete, icon, ctx);
                    arbol.lineLeft2(canvas.width / 4, 140);
                    arbol.lineRight2(canvas.width / 4, 140);
                    arbol.createNode(canvas.width / 4 * 3 - 80, 140, rectangulo.fondo, paquete, icon, ctx);
                    arbol.lineLeft2(canvas.width / 4 * 3, 140);
                    arbol.lineRight2(310 + 310 + 310, 140);
                    console.log("segundo lvl termina");

                    arbol.createNode(canvas.width / 8 - 80, 240, rectangulo.fondo, paquete, icon, ctx);
                    arbol.lineLeft2(155, 240);
                    arbol.lineRight2(155, 260);
                    arbol.createNode(canvas.width / 8 * 3 - 80, 240, rectangulo.fondo, paquete, icon, ctx);
                    arbol.lineLeft2(155 + 155 + 155, 240);
                    arbol.lineRight2(155 + 155 + 155, 240);
                    arbol.createNode(canvas.width / 8 * 5 - 80, 240, rectangulo.fondo, paquete, icon, ctx);
                    arbol.lineLeft2(155 + 155 + 155 + 155 + 155, 240);
                    arbol.lineRight2(155 + 155 + 155 + 155 + 155, 240);
                    arbol.createNode(canvas.width / 8 * 7 - 80, 240, rectangulo.fondo, paquete, icon, ctx);
                    arbol.lineLeft2(155 * 7, 240);
                    arbol.lineRight2(155 * 7, 240);


                    arbol.createNodeS(0, 340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(canvas.width / 8 + 5, 340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(canvas.width / 8 * 2 + 5, 340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(canvas.width / 8 * 3 + 5, 340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(canvas.width / 8 * 4 + 5, 340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(canvas.width / 8 * 5 + 5, 340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(canvas.width / 8 * 6 + 5, 340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(canvas.width / 8 * 7 + 5, 340, rectangulo.fondo, paquete, icon, ctx);*/
                    /*******************INICIO FOREACH DE LOS HIJOS****************************/
//                    for (var k in json['users']) {
                        /*console.log("empieza");
                        console.log("indice =" + k, "padre =" + json['users'][k]['padre']);
//                        console.log("x = " + x);
                        if (json['users'][k]['padre'] !== padre) {
                            padre = json['users'][k]['padre'];
                            console.log("cambio de padre");
                        }*/

                        /*if (json['users'][k]['padre'] = padre && lvl1 >= k) {
                            if (cambio) {
                                console.log("true");
                                x = posR.x;
                                y = posR.y;
                            } else {
                                console.log("false");
                                x = posL.x;
                                y = posL.y;
                                cambio = true;
                            }
                            console.log(posL);
                            if (k > k + 2) {
                                nivel = "lvl2";
                                console.log(lvl2);
                            } else {
                                console.log("lvl1");
                                arbol.createNodeHijo(x, y, rectangulo.fondo, paquete, icon, ctx);
                                arbol.lineLeft2(x, y);
                                arbol.lineRight2(x, y);
                            }
                            ctx.fillRect(x, y, 10, 10);
                        } else if (json['users'][k]['padre'] = padre && lvl2 >= k) {
                            console.log("otro");
                        }*/

//                    }
//                    if (json['users'][k]['padre'] == 0) {
                    /*******************FIN FOREACH DE LOS HIJOS****************************/

                } else {
                    alert("NO cuentas con CANVAS");
                }

            }
        };
        {{--var img = "{{ asset('backoffice/images/circulo1.png') }}";--}}
        {{--window.onload = start(img);--}}
        console.log("asd2");
    </script>
@endsection
