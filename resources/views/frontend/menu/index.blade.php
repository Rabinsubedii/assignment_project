<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- google font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@300&display=swap"
            rel="stylesheet">
        <!-- custom css -->
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/menu.css">
    </head>

    <body>
        <div class="menu-section">
            <!-- Top navbar -->
             @include('frontend.topnav')

            <!-- Navbar -->
            @include('frontend.navbar')

            <!-- menu tab -->

            <ul class="nav nav-tabs">
                @foreach ($category as $category )
                    <li class="nav-item">
                    <a class="nav-link active menu-nav-item" data-toggle="tab"  href="">{{$category->name}} </a>
                </li>
                @endforeach
                
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- all menu  -->
                <div id="home" class="container-fluid tab-pane active"><br>
                    <h3>Cafe Culture Speical Menu</h3>
                    <div class="row" id="all-menu">
                        <div class="col-sm-6 col-lg-4 mt-5">
                            <!-- menu item  in card -->
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/sandwitch.jfif" alt="Card image cap">
                                        <p id="price">Rs. 450</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">SandWitch</h4>
                                        <p class="card-text">
                                            A sandwich is a food typically consisting of vegetables, sliced cheese or
                                            meat, placed on or between slices of bread, or more generally any dish
                                            wherein bread serves as a container or wrapper for another food type
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/steammomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 150</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Steam MoMo</h4>
                                        <p class="card-text">Momo is a type of dumpling originally from Tibet which is
                                            prominently found in the cuisines of Tibet and Nepal, as well as in the
                                            Indian states of Ladakh and Sikkim.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/steammomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Chat MoMo</h4>
                                        <p class="card-text">Chat Momo is a type of dumpling originally from Tibet which
                                            is
                                            prominently found in the cuisines of Tibet and Nepal, as well as in the
                                            Indian states of Ladakh and Sikkim.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chillymomo.jfif" alt="Card image cap">
                                        <p id="price">Rs. 200</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Chilly Momo</h4>
                                        <p class="card-text">Momo is a type of dumpling originally from Tibet which is
                                            prominently found in the cuisines of Tibet and Nepal, as well as in the
                                            Indian states of Ladakh and Sikkim.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/steammomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Fry MoMo</h4>

                                        <p class="card-text">Momo is a type of dumpling originally from Tibet which is
                                            prominently found in the cuisines of Tibet and Nepal.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- second special item row -->
                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/burger.jpg" alt="Card image cap">
                                        <p id="price">Rs. 310</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Cheese Burger</h4>
                                        <p class="card-text">
                                            A hamburger is a food consisting of fillings —usually a patty of ground
                                            meat, typically beef—placed inside a sliced bun or bread rol
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/aloo.jfif" alt="Card image cap">
                                        <p id="price">Rs. 60</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Aloo Stick</h4>
                                        <p class="card-text">Potato fry is an Indian side dish made with potatoes,
                                            spices and herbs. Also known as aloo fry
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/cfcch.jfif" alt="Card image cap">
                                        <p id="price">Rs. 110</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">CFC Chicken</h4>

                                        <p class="card-text">California Fried Chicken is an Indonesian fast food
                                            restaurant chain, serving principally fried chicken
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- third row of special item -->
                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/coc.jfif" alt="Card image cap">
                                        <p id="price">Rs. 50</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Cocacola</h4>
                                        <p class="card-text">
                                            Coca-Cola, or Coke, is a carbonated soft drink manufactured by the Coca-Cola
                                            Company. Originally marketed as a temperance drink and intended as a patent
                                            medicine, it was invented in the late 19th century by John Stith Pemberton
                                            in Atlanta, Georgia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/pep.jfif" alt="Card image cap">
                                        <p id="price">Rs. 50</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Pepsi</h4>
                                        <p class="card-text">Pepsi is a carbonated soft drink manufactured by PepsiCo.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickenpizza.png" alt="Card image cap">
                                        <p id="price">Rs. 450</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Pizza</h4>
                                        <p class="card-text">Pizza is a dish of Italian origin consisting of a usually
                                            round, flat base of leavened wheat-based dough topped with tomatoes, cheese,
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- fouth row of special item -->
                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/momochau.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Combo (MoMo&Chowmin) </h4>
                                        <p class="card-text">
                                            Presenting a wonderful combination of the two most loved Chinese dishes -
                                            Momo Chowmein
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickenchaw.jpg" alt="Card image cap">
                                        <p id="price">Rs. 130</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Chowmen</h4>
                                        <p class="card-text">Chow mein are Chinese stir-fried noodles with vegetables
                                            and sometimes meat or tofu. Over the centuries, variations of Chaomian were
                                            developed in many regions in China</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/Sweetspicychicken.jfif"
                                            alt="Card image cap">
                                        <p id="price">Rs. 250</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Sweet Spicy Chicken</h4>

                                        <p class="card-text">Sweet Spicy Chicken
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chicken menu -->
                <div id="chicken" class="container-fluid tab-pane fade"><br>
                    <h3>Cafe Culture Chicken Menu </h3>
                    <!-- drinks item  in card  list -->
                    <!-- row-->
                    <div class="row" id="all-menu">

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chillymomo.jfif" alt="Card image cap">
                                        <p id="price">Rs. 200</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chilly MoMo(Chicken)</h4>
                                        <p class="card-text">Chicken Chilly MoMo
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/steammomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 150</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Steam MoMo</h4>
                                        <p class="card-text">Momo is a type of dumpling originally from Tibet which is
                                            prominently found in the cuisines of Tibet and Nepal, as well as in the
                                            Indian states of Ladakh and Sikkim.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/steammomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Fry MoMo</h4>

                                        <p class="card-text">Momo is a type of dumpling originally from Tibet which is
                                            prominently found in the cuisines of Tibet and Nepal.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/steammomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Chat MoMo</h4>
                                        <p class="card-text">Chat Momo is a type of dumpling originally from Tibet which
                                            is
                                            prominently found in the cuisines of Tibet and Nepal, as well as in the
                                            Indian states of Ladakh and Sikkim.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickenloli.jfif" alt="Card image cap">
                                        <p id="price">Rs. 300</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Lolipop</h4>
                                        <p class="card-text">Best chicken lolipop Cafe Culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/jholmomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"> Chicken Achari Jhol MoMo</h4>
                                        <p class="card-text">Special Achari Jhol MoMo available in cafe culture.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/sadhekomomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"> Sadheko MoMo</h4>
                                        <p class="card-text">Sadheko MoMo nepali special lunch available.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/tandoorimomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Tandoori MoMo</h4>
                                        <p class="card-text">Best Tandoori Chicken MoMo at cafe culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/spchicken.jfif" alt="Card image cap">
                                        <p id="price">Rs. 250</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Sweet Spicy Chicken</h4>
                                        <p class="card-text"> Spice up your chicken dishes with a hint of chilli. We've
                                            got a zingy selection of chicken curries, stews, kebabs and chicken wings.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/spchicken.jfif" alt="Card image cap">
                                        <p id="price">Rs. 150</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Spicy Chowmen</h4>
                                        <p class="card-text"> Spice up your chicken dishes with a hint of chilli. We've
                                            got a zingy selection of chicken curries, stews, kebabs and chicken wings.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickenchaw.jpg" alt="Card image cap">
                                        <p id="price">Rs. 130</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Chowmen</h4>
                                        <p class="card-text">Best chicken Chowmen Cafe Culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/momochau.jpg" alt="Card image cap">
                                        <p id="price">Rs. 160</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Combo (MoMo&Chowmin) </h4>
                                        <p class="card-text">
                                            Momo is a type of dumpling originally from Tibet which is prominently found
                                            in the cuisines of Tibet and Nepal,
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickenchillywb.jfif"
                                            alt="Card image cap">
                                        <p id="price">Rs. 250</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Chilly (W/B)</h4>
                                        <p class="card-text">
                                            Chilli chicken is a popular Indo-Chinese dish of chicken of Hakka Chinese
                                            heritage.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/blchicken.jpg" alt="Card image cap">
                                        <p id="price">Rs. 300</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Chilly (B/L)</h4>
                                        <p class="card-text">
                                            Chilli chicken is a popular Indo-Chinese dish of chicken of Hakka Chinese
                                            heritage.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/cfcch.jfif" alt="Card image cap">
                                        <p id="price">Rs. 110</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">CFC Chicken</h4>

                                        <p class="card-text">California Fried Chicken is an Indonesian fast food
                                            restaurant chain, serving principally fried chicken.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickendrumSticks.jpg"
                                            alt="Card image cap">
                                        <p id="price">Rs. 100</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken DrumSticks</h4>

                                        <p class="card-text">
                                            Special Chicken Drumsticks cafe culture lauch item.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickenloli.jfif" alt="Card image cap">
                                        <p id="price">Rs. 300</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Lolipop</h4>
                                        <p class="card-text">Best chicken lolipop Cafe Culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/pacpocchicken.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Paca Pao Chicken</h4>
                                        <p class="card-text">Best chicken Paca Pao Chicken item in cafe culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Veg menu -->
                <div id="veg" class="container-fluid tab-pane fade"><br>
                    <h3>Cafe Culture Veg Menu </h3>
                    <!-- drinks item  in card  list -->
                    <!-- row-->
                    <div class="row" id="all-menu">

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/steammomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 130</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Veg Steam MoMo</h4>
                                        <p class="card-text">Veg MoMo is a type of dumpling originally from Tibet which
                                            is
                                            prominently found in the cuisines of Tibet and Nepal, as well as in the
                                            Indian states of Ladakh and Sikkim.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/steammomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 150</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"> Fry MoMo</h4>

                                        <p class="card-text"> Veg Momo is a type of dumpling originally from Tibet which
                                            is
                                            prominently found in the cuisines of Tibet and Nepal.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/jholmomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 150</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"> Achari Jhol MoMo</h4>
                                        <p class="card-text">Special Achari Jhol MoMo available in cafe culture.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/sadhekomomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 150</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"> Veg Sadheko MoMo</h4>
                                        <p class="card-text">Sadheko MoMo nepali special lunch available.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/tandoorimomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 150</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Veg Tandoori MoMo</h4>
                                        <p class="card-text">Best Tandoori Chicken MoMo at cafe culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/momochau.jpg" alt="Card image cap">
                                        <p id="price">Rs. 160</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Combo (MoMo&Chowmin) </h4>
                                        <p class="card-text">
                                            Momo is a type of dumpling originally from Tibet which is prominently found
                                            in the cuisines of Tibet and Nepal,
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/vegchilly.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chilly Momo</h4>
                                        <p class="card-text">
                                            Chilli chicken is a popular Indo-Chinese dish of chicken of Hakka Chinese
                                            heritage.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/pacpocchicken.jpg" alt="Card image cap">
                                        <p id="price">Rs. 110</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Veg Chowmen</h4>
                                        <p class="card-text">Best chicken Paca Pao Chicken item in cafe culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Cold drinks menu -->
                <div id="menu1" class="container-fluid tab-pane fade"><br>
                    <h3>Cafe Culture Drinks Menu</h3>
                    <!-- drinks item  in card  list -->
                    <div class="row" id="all-menu">
                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/pep.jfif" alt="Card image cap">
                                        <p id="price">Rs. 45</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Pepsi</h4>
                                        <p class="card-text">Pepsi is a carbonated soft drink manufactured by PepsiCo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/lassi.jfif" alt="Card image cap">
                                        <p id="price">Rs. 80</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Plain Lassi</h4>
                                        <p class="card-text">Plain Lassi
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/mirinda.jfif" alt="Card image cap">
                                        <p id="price">Rs. 50</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Fanta</h4>
                                        <p class="card-text">Fanta is a brand of soft drink originally created in
                                            Spain in 1959 and now owned by PepsiCo with global distribution. Its name
                                            comes from the Esperanto translation of "admirable" or "amazing"
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/banana-lassi-21151318.jpg"
                                            alt="Card image cap">
                                        <p id="price">Rs. 120</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Banana Lassi</h4>
                                        <p class="card-text">Banana Lassi
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/coldcoofe.jfif" alt="Card image cap">
                                        <p id="price">Rs.80</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Cold Coffe</h4>
                                        <p class="card-text">Banana Lassi
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/lcelemon.png" alt="Card image cap">
                                        <p id="price">Rs.80</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">LCE Lemon </h4>
                                        <p class="card-text">LCE Lemon
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/choc.jfif" alt="Card image cap">
                                        <p id="price">Rs.80</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Choclate Lassi </h4>
                                        <p class="card-text">Choclate Lassi
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/sprite.jfif" alt="Card image cap">
                                        <p id="price">Rs. 50</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Sprite</h4>
                                        <p class="card-text">Sprite is a colorless, lemon and lime-flavored soft drink
                                            created by The Coca-Cola Company.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/coc.jfif" alt="Card image cap">
                                        <p id="price">Rs. 50</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Cocacola</h4>
                                        <p class="card-text">Coca-Cola, or Coke, is a carbonated soft drink manufactured
                                            by the Coca-Cola Company. Originally marketed as a temperance drink and
                                            intended as a patent medicine, it was invented in the late 19th century by
                                            John Stith
                                            Pemberton in Atlanta, Georgia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hot drinks menu -->
                <div id="hotdrinks" class="container-fluid tab-pane fade"><br>
                    <h3>Cafe Culture Hot Drinks Menu</h3>
                    <!-- drinks item  in card  list -->
                    <div class="row" id="all-menu">
                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/blacktea.jfif" alt="Card image cap">
                                        <p id="price">Rs. 20</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Black Tea</h4>
                                        <p class="card-text">Black Tea.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/Gingertea.jpg" alt="Card image cap">
                                        <p id="price">Rs. 25</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Ginger Tea</h4>
                                        <p class="card-text">Ginger Tea
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/blackcoffe.jfif" alt="Card image cap">
                                        <p id="price">Rs. 40</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Black Coffee</h4>
                                        <p class="card-text">Black Coffee
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/hotlemon.jpg" alt="Card image cap">
                                        <p id="price">Rs. 45</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Hot Lemon</h4>
                                        <p class="card-text">Hot Lemon
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/milkcoffee.jpg" alt="Card image cap">
                                        <p id="price">Rs.50</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Milk Coffee</h4>
                                        <p class="card-text">Milk Coffee
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/hotwithhoney.jpg" alt="Card image cap">
                                        <p id="price">Rs. 75</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Hot Lemon with Honey </h4>
                                        <p class="card-text">Hot Lemon With honey mix.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/hotcho.jfif" alt="Card image cap">
                                        <p id="price">Rs.80</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Hot Choclate </h4>
                                        <p class="card-text">Hot Choclate
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/milkteam.jfif" alt="Card image cap">
                                        <p id="price">Rs. 25</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Milk Tea</h4>
                                        <p class="card-text">Milk Tea.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lunch menu -->
                <div id="menu2" class="container-fluid tab-pane fade"><br>
                    <h3>Cafe Culture Lunch Menu </h3>
                    <!-- drinks item  in card  list -->
                    <!-- row-->
                    <div class="row" id="all-menu">
                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/burger.jpg" alt="Card image cap">
                                        <p id="price">Rs. 310</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Hamburger</h4>
                                        <p class="card-text">
                                            Burger Bun, Ketchup, Hril chicken Swiss cheese, lettuce, Onions,Tomato,
                                            Cheddar cheese, Mayonnais.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/Margherita-Pizza.jpg"
                                            alt="Card image cap">
                                        <p id="price">Rs. 400</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">MARGHERITA</h4>
                                        <p class="card-text">With tomato sauce, mozzarella
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/bzpizza.jpg" alt="Card image cap">
                                        <p id="price">Rs. 600</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">BOLOGNESS</h4>
                                        <p class="card-text">With tomato sauce, mozzarella, minced meat,onion,(fresh
                                            tomato)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/burger.jpg" alt="Card image cap">
                                        <p id="price">Rs. 300</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Hamburger 2</h4>
                                        <p class="card-text">
                                            Burger Bun, Special Sauce, Lettuce, Pickles, Tomato, Cheddar Cheese, Crispy
                                            Chicken.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chillymomo.jfif" alt="Card image cap">
                                        <p id="price">Rs. 200</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chilly MoMo(Chicken)</h4>
                                        <p class="card-text">Chicken Chilly MoMo
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickenloli.jfif" alt="Card image cap">
                                        <p id="price">Rs. 300</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Lolipop</h4>
                                        <p class="card-text">Best chicken lolipop Cafe Culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/jholmomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"> Chicken Achari Jhol MoMo</h4>
                                        <p class="card-text">Special Achari Jhol MoMo available in cafe culture.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/jholmomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 150</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"> Veg Achari Jhol MoMo</h4>
                                        <p class="card-text">Vegetarian Achari Jhol MoMo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/sadhekomomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"> Sadheko MoMo</h4>
                                        <p class="card-text">Sadheko MoMo nepali special lunch available.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/tandoorimomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Tandoori MoMo</h4>
                                        <p class="card-text">Best Tandoori Chicken MoMo at cafe culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/kebab_pizzae.jfif" alt="Card image cap">
                                        <p id="price">Rs. 480</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Kebab Pizzae</h4>
                                        <p class="card-text">Pizza is a dish of Italian origin consisting of a usually
                                            round, flat base of leavened wheat-based dough topped with tomatoes, cheese,
                                            and often various other ingredients
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/vegpizzza.jfif" alt="Card image cap">
                                        <p id="price">Rs. 430</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Veg Pizza</h4>
                                        <p class="card-text">Pizza is a dish of Italian origin consisting of a usually
                                            round, flat base of leavened wheat-based dough topped with tomatoes, cheese,
                                            and often various other ingredients
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/mushroompizza.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Mushroom Pizza</h4>
                                        <p class="card-text">mushroom pizza recipe features four different types of
                                            mushrooms, plus two kinds of cheese and fresh herbs for the perfect balance
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/cheeseburger.jfif" alt="Card image cap">
                                        <p id="price">Rs. 310</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Cheese Burger</h4>
                                        <p class="card-text">A cheeseburger is a hamburger topped with cheese.
                                            Traditionally, the slice of cheese is placed on top of the meat patty.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/spicyveg.jfif" alt="Card image cap">
                                        <p id="price">Rs. 290</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Spicy Vegetarian</h4>
                                        <p class="card-text">Spicy Vegetarian Recipes That Bring The Heat · Roasted
                                            Cauliflower Street Tacos · Thai Vegetarian Coconut Curry
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/spchicken.jfif" alt="Card image cap">
                                        <p id="price">Rs. 300</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Spicy Chicken</h4>
                                        <p class="card-text"> Spice up your chicken dishes with a hint of chilli. We've
                                            got a zingy selection of chicken curries, stews, kebabs and chicken wings.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/spchicken.jfif" alt="Card image cap">
                                        <p id="price">Rs. 150</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Spicy Chowmen</h4>
                                        <p class="card-text"> Spice up your chicken dishes with a hint of chilli. We've
                                            got a zingy selection of chicken curries, stews, kebabs and chicken wings.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/jholmomo.jpg" alt="Card image cap">
                                        <p id="price">Rs. 330</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Paca Pao Chicken</h4>
                                        <p class="card-text">Best chicken lolipop Cafe Culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/grilledchicken.jfif" alt="Card image cap">
                                        <p id="price">Rs. 320</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Grilled Chicken</h4>
                                        <p class="card-text">Barbecue chicken consists of chicken parts or entire
                                            chickens that are barbecued, grilled or smoked. There are many global and
                                            regional preparation techniques and cooking styles.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickenchaw.jpg" alt="Card image cap">
                                        <p id="price">Rs. 110</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Veg Chowmen</h4>
                                        <p class="card-text"> Veg Chowmen for Vegetarian at Cafe Culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickenchaw.jpg" alt="Card image cap">
                                        <p id="price">Rs. 150</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Chowmen</h4>
                                        <p class="card-text">Best chicken Chowmen Cafe Culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/momochau.jpg" alt="Card image cap">
                                        <p id="price">Rs. 130</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Combo (MoMo&Chowmin) </h4>
                                        <p class="card-text">
                                            Momo is a type of dumpling originally from Tibet which is prominently found
                                            in the cuisines of Tibet and Nepal,
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/aloo.jfif" alt="Card image cap">
                                        <p id="price">Rs. 60</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Aloo Stick</h4>
                                        <p class="card-text">
                                            Crispy Potato Sticks Quick & Easy Recipe By Cafe Culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/aloo.jfif" alt="Card image cap">
                                        <p id="price">Rs. 130</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Thickeko Aloo </h4>
                                        <p class="card-text">
                                            It is an Indian and Chinese fusion dish that is more commonly served in the
                                            Indian restaurants and street stalls
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/aloo.jfif" alt="Card image cap">
                                        <p id="price">Rs. 140</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Aloo Chilly </h4>
                                        <p class="card-text">
                                            Chilli potato is an Indo-Chinese starter made with crisp fried potatoes,
                                            tossed in slightly spicy, sweet & sour chilli sauce.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/frenchfry.jpg" alt="Card image cap">
                                        <p id="price">Rs. 120</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">French Fry</h4>
                                        <p class="card-text">
                                            French fries, chips, finger chips, french-fried potatoes, or simply fries,
                                            are batonnet or allumette-cut deep-fried potatoes, possibly originating from
                                            France.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/potcheeseball.jfif" alt="Card image cap">
                                        <p id="price">Rs. 200</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Potato Cheese Ball</h4>
                                        <p class="card-text">
                                            Cheese balls are a delicious crispy snack made with potato, cheese, herbs
                                            and spices. Potato cheese balls make for a great party snack.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickenwings.jfif" alt="Card image cap">
                                        <p id="price">Rs. 130</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Wings</h4>
                                        <p class="card-text">
                                            Drumsticks tend to have more meat on the bone, making them the ultimate
                                            chicken wing. Plus, drums are much easier to dip into blue cheese, ranch or
                                            extra buffalo sauce.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/frychickenleg.jpeg" alt="Card image cap">
                                        <p id="price">Rs. 200</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Fry Chicken Leg</h4>
                                        <p class="card-text">
                                            Fried chicken, also known as Southern fried chicken, is a dish consisting of
                                            chicken pieces that have been coated with seasoned flour or batter and
                                            pan-fried, deep fried, pressure fried, or air fried.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickenchillywb.jfif"
                                            alt="Card image cap">
                                        <p id="price">Rs. 250</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Chilly (W/B)</h4>
                                        <p class="card-text">
                                            Chilli chicken is a popular Indo-Chinese dish of chicken of Hakka Chinese
                                            heritage.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/blchicken.jpg" alt="Card image cap">
                                        <p id="price">Rs. 300</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Chilly (B/L)</h4>
                                        <p class="card-text">
                                            Chilli chicken is a popular Indo-Chinese dish of chicken of Hakka Chinese
                                            heritage.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/cfcch.jfif" alt="Card image cap">
                                        <p id="price">Rs. 110</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">CFC Chicken</h4>

                                        <p class="card-text">California Fried Chicken is an Indonesian fast food
                                            restaurant chain, serving principally fried chicken.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickendrumSticks.jpg"
                                            alt="Card image cap">
                                        <p id="price">Rs. 100</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken DrumSticks</h4>

                                        <p class="card-text">
                                            Special Chicken Drumsticks cafe culture lauch item.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chickenloli.jfif" alt="Card image cap">
                                        <p id="price">Rs. 300</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Lolipop</h4>
                                        <p class="card-text">Best chicken lolipop Cafe Culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/pacpocchicken.jpg" alt="Card image cap">
                                        <p id="price">Rs. 180</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Paca Pao Chicken</h4>
                                        <p class="card-text">Best chicken Paca Pao Chicken item in cafe culture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-lg-4 mt-5">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="menu-card-img" src="./img/chicken_zinger_wrap.jfif"
                                            alt="Card image cap">
                                        <p id="price">Rs. 250</p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Zinger Wrap </h4>
                                        <p class="card-text">A Zinger Burger is KFC's original fried chicken recipe with
                                            a spicy twist.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- footer -->
            @include('frontend.footer')

            <!-- custom js -->
            <script src="./js/script.js">
            </script>
            <!-- bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        </div>
    </body>

</html>
