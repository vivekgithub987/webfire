<nav class="navbarFix" id="navbarFix">

            <div class="kefu">
    <a href="https://wa.me/919711814470">
        <img src="./assets/img/service.png" alt="whastapp">
    </a>
</div>
        <div class="section_big bot">
            <ul>
                <li class="on">
                    <a href="Home.aspx">
                        <img src="./assets/img/nav01.png" />
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="Product.aspx">
                        <img src="./assets/img/nav2.png" />
                        <p>Product</p>
                    </a>
                </li>
                <li>
                    <a href="Team.aspx">
                        <img src="./assets/img/nav3.png" />
                        <p>Team</p>
                    </a>
                </li>
                <li>
                    <a href="My.aspx">
                        <img src="./assets/img/nav4.png" />
                        <p>My</p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
<script type="text/javascript">
        new Swiper(".banner", {
            loop: true,
            speed: 600,
            effect: "fade",
            grabCursor: true,
            parallax: true,
            autoplay: {
                delay: 1000,
            },
        });
        var notice = new Swiper(".notice .swiper", {
            loop: true,
            direction: "vertical",
            slidesPerView: 6,
            spaceBetween: 15,
            grabCursor: true,
            parallax: true,
            autoplay: {
                delay: 2000,
            },
        });

        function setNumber(num) {
            $("#dataNums").rollNumDaq({
                deVal: num
            });
        }
    </script>
<script>
        $(document).ready(function () {
            $(".notice-close").click(function () {
                $(".mask-content").css("display", "none");
            });
        });
    </script>
