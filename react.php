<?php
include_once('elements/header.php');
?>

<button onclick="on1();"style="top:500px;"class="dropbtn" type="button">Play &#9654; &#9432;
</button>

<button onclick="invertImg();"style="top:600px;"class="dropbtn" type="button">Reverse Camera &#10231; &#128247;
</button>
<!--<meta name="viewport" content="width=device-width, user-scalable=no"> -->
<div style="display:block;" id="root">
    <script>
        !(function (e) {
            function r(r) {
                for (var n, a, l = r[0], p = r[1], i = r[2], c = 0, s = []; c < l.length; c++) (a = l[c]), Object.prototype.hasOwnProperty.call(o, a) && o[a] && s.push(o[a][0]), (o[a] = 0);
                for (n in p) Object.prototype.hasOwnProperty.call(p, n) && (e[n] = p[n]);
                for (f && f(r); s.length; ) s.shift()();
                return u.push.apply(u, i || []), t();
            }
            function t() {
                for (var e, r = 0; r < u.length; r++) {
                    for (var t = u[r], n = !0, l = 1; l < t.length; l++) {
                        var p = t[l];
                        0 !== o[p] && (n = !1);
                    }
                    n && (u.splice(r--, 1), (e = a((a.s = t[0]))));
                }
                return e;
            }
            var n = {},
                o = { 1: 0 },
                u = [];
            function a(r) {
                if (n[r]) return n[r].exports;
                var t = (n[r] = { i: r, l: !1, exports: {} });
                return e[r].call(t.exports, t, t.exports, a), (t.l = !0), t.exports;
            }
            (a.m = e),
                (a.c = n),
                (a.d = function (e, r, t) {
                a.o(e, r) || Object.defineProperty(e, r, { enumerable: !0, get: t });
            }),
                (a.r = function (e) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
            }),
                (a.t = function (e, r) {
                if ((1 & r && (e = a(e)), 8 & r)) return e;
                if (4 & r && "object" == typeof e && e && e.__esModule) return e;
                var t = Object.create(null);
                if ((a.r(t), Object.defineProperty(t, "default", { enumerable: !0, value: e }), 2 & r && "string" != typeof e))
                    for (var n in e)
                        a.d(
                            t,
                            n,
                            function (r) {
                                return e[r];
                            }.bind(null, n)
                        );
                return t;
            }),
                (a.n = function (e) {
                var r =
                    e && e.__esModule
                ? function () {
                    return e.default;
                }
                : function () {
                    return e;
                };
                return a.d(r, "a", r), r;
            }),
                (a.o = function (e, r) {
                return Object.prototype.hasOwnProperty.call(e, r);
            }),
                (a.p = "/wptyxiakh/");
            var l = (this.webpackJsonphandpose = this.webpackJsonphandpose || []),
                p = l.push.bind(l);
            (l.push = r), (l = l.slice());
            for (var i = 0; i < l.length; i++) r(l[i]);
            var f = p;
            t();
        })([]);
    </script>

    <script src="/wptyxiakh/static/js/2.428f7139.chunk.js"></script>
    <script src="/wptyxiakh/static/js/main.051a3407.chunk.js"> //**** afairoume to wptyxiakh otan anevei se site*****</script> 


    <script>

        $(function(){
            const myInterval = setInterval(Krupse, 300);
            function Krupse(){
                let string ="";
                let inputValue = document.getElementById('name').value;
                switch(inputValue) {
                    case "Αθήνα":
                        $('.myVideo').trigger('pause');
                        setTimeout(() => {  on(0); }, 1000);
                        clearInterval(myInterval);
                        break;

                    case "Θεσσαλονίκη":
                        $('.myVideo').trigger('pause');
                        setTimeout(() => {  on(1); }, 1000);
                        clearInterval(myInterval);
                        break;
                    case "Πάτρα":
                        $('.myVideo').trigger('pause');
                        setTimeout(() => {  on(2); }, 1000);
                        clearInterval(myInterval);
                        break;
                    case "Αύγουστος":
                        $('.myVideo').trigger('pause');
                        setTimeout(() => {  on(3); }, 1000);
                        clearInterval(myInterval);
                        break;
                    case "Έκθεση":
                        $('.myVideo').trigger('pause');
                        setTimeout(() => {  on(4); }, 1000);
                        clearInterval(myInterval);
                        break;
                    case "Απρίλιος":
                        $('.myVideo').trigger('pause');
                        setTimeout(() => {  on(5); }, 1000);
                        clearInterval(myInterval);
                        break;
                }


            }
            /*
if($('#name').val().length != 0) {               }
*/
        });

    </script>

    <div id="overlay">
        <div class="App-header" >
            <button onclick="off()">X</button>
            <video id="media" width="640" height="480" controls autoplay>
            </video>
        </div>
    </div>
</div>
<div id="overlay2">
    <div class="App-header2" >
        <button onclick="off1()">X</button>
        <video id="media1" width="320" height="240" controls autoplay>
            <source src="videos/2o-ns.mp4" type="video/mp4">
        </video>
        <img src="sl-images/tuto.jpg"  width="50%;" height="30%;">
    </div>
</div>
<script>
    function on1() {
        document.getElementById("overlay2").style.display = "block";
    }

    function off1() {
        document.getElementById("overlay2").style.display = "none";
        document.getElementById('media1').muted = true;
    }
    let toggleee = false;
    function invertImg(){

        toggleee = !toggleee;
        var opac = document.getElementsByClassName("myVideo");
        for (var i = 0; i < opac.length; i++) {
            opac[0].style.transform = toggleee?"scaleX(1)":"scaleX(-1)";

        }
        togglee?"30px":"40px";
    }
</script>
<?php
include_once('elements/footer.php');
?>
