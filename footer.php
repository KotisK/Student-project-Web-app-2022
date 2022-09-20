<footer>
    <div class="footer-content">
        <h3>Μοναδική Διάδραση</h3>
        <p>Η συγκεκριμένη ιστοσελίδα εκπροσωπεί μία μοναδική εμπειρία προσβασιμότητας σε άτομα με ειδικές ανάγκες όλων των κατηγοριών, σκοπός μας είναι η ισότητα.</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy; 2022  <a href="#">Aegean Team</a>  </p>
        <div class="footer-menu">
            <ul class="f-menu">
                <li><a href="./index.php">Αρχική</a></li>
                <li><a href="./react.php">Νοηματική</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Blog</a></li>
            </ul>
        </div>
    </div>

    <style>
        .rw-widget-container{
            margin-bottom: 60px;
        }

        .rw-conversation-container
        .rw-header {background-color: rgb(21, 37, 107);}
        .rw-launcher {background-color: rgb(21, 37, 107);}
        .rw-conversation-container .rw-client {background-color: rgb(21, 37, 107);}
        .rw-conversation-container .rw-reply {background-color: rgb(21, 37, 107);}
        .Date{
            background-color: rgb(21, 60, 107);
            color: white;
            margin-bottom:-10px !important;
            border-radius: 0px !important;
            font-size: 20px !important;

        }

    </style>
    <script>

        !(function () {
            let e = document.createElement("script"),
                t = document.head || document.getElementsByTagName("head")[0];
            (e.src =
             "https://cdn.jsdelivr.net/npm/rasa-webchat@1.x.x/lib/index.js"),
                // Replace 1.x.x with the version that you want
                (e.async = !0),
                (e.onload = () => {
                window.WebChat.default(
                    {
                        initPayload: '/greet',
                        customData: { language: "en" },
                        socketUrl: "https://rasa-server-dimitrisavgoustopoulos.cloud.okteto.net",
                        title: "Event-Bot",
                        subtitle:"Ask me anything about our events",
                        showFullScreenButton: true,
                        showMessageDate: true,
                        profileAvatar: "./icons/robot.svg",
                        openLauncherImage: "./icons/comments.svg",
                        closeImage: "./icons/times-circle.svg",
                        params: {
                            // enter parameters
                        }

                        // add other props here
                    },
                    null
                );
            }),
                t.insertBefore(e, t.firstChild);

        })();
        localStorage.clear(); // Katharizei to chat

    </script>
    </body>
</html>