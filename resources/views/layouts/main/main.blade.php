<main>
    <div class="main-cont page-container">
        <div class="main-nav">
            <div class="main-nav1 flex">
                <img class="pic1-1" src="images/main/headline/1/Rounded.png" alt="Rounded.png">
                <img class="pic1-2" src="images/main/headline/1/1.png" alt="1.png">
                <p>ממלאים פרטים להצעת ביטוח</p>
            </div>
            <div class="circle-left-arrow">
                <img class="circle" src="images/main/headline/1/Ellipse.png" alt="Ellipse .png">
                <img class="arrow" src="images/main/headline/1/Shape.png" alt="Shape.png">

            </div>
            <div class="main-nav2 flex">
                <img class="pic2-1" src="images/main/headline/2/Shape5.png" alt="Shape 5.png">
                <img class="pic2-2" src="images/main/headline/2/2.png" alt="2.png">
                <p>מקבלים מגוון הצעות משתלמות מסוכני ביטוח</p>
            </div>
            <div class="circle-left-arrow">
                <img class="circle" src="images/main/headline/1/Ellipse.png" alt="Ellipse .png">
                <img class="arrow" src="images/main/headline/1/Shape.png" alt="Shape.png">

            </div>
            <div class="flex main-nav3">
                <img class="pic3-1" src="images/main/headline/3/Layer782.png" alt="Layer 782.png">
                <img class="pic3-2" src="images/main/headline/3/3.png" alt="3.png">
                <p>בוחרים סוכן ביטוח הטוב ביותר </p>
            </div>
            <div class="circle-left-arrow">
                <img class="circle" src="images/main/headline/1/Ellipse.png" alt="Ellipse .png">
                <img class="arrow" src="images/main/headline/1/Shape.png" alt="Shape.png">

            </div>
            <div class="main-nav4 flex">
                <img class="pic4-1" src="images/main/headline/4/Layer776.png" alt="Layer 776.png">
                <img class="pic4-2" src="images/main/headline/4/4.png" alt="4.png">
                <p>רוכשים פוליסה בקליק</p>
            </div>

        </div>
        <div class="main-app">
            <section>
                <div class="main-result">
                    <div class="agent-result">
                        <h3>נמצאו
                            <span class="agent-number">{{$agentsNumbers}}</span>
                            סוכני ביטוח
                        </h3>

                    </div>
                    <div class="filter-result">

                        <div class="filter-by">

                            <span>מיין לפי:</span>
                            <ul class="filter-list">
                                <li>
                                    <div class="selected-div">
                                        <img class="arrow1" src="images/main/aside/Shape 9 copy 13.png" alt="">
                                        <select>
                                            <option value="">מחיר נמוך לגבוה</option>
                                        </select>

                                    </div>

                                </li>
                                <img src="images/main/agent/border.png" alt="">
                                <li>
                                    <a href="">דירוג סוכן</a>
                                </li>
                                <img src="images/main/agent/border.png" alt="">
                                <li>
                                    <a href="">מס' מדרגים</a>
                                </li>


                            </ul>
                        </div>
                        <div class="filter-by-area">
                            <img src="images/main/agent/border.png" alt="">
                            <span>  סינון לפי אזור:</span>
                            <div class="selectdiv-filter">
                                <img src="images/main/aside/Shape 9 copy 13.png" alt="">
                                <select>
                                    <option value=""> כל האזורים</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agent-list">
                    @foreach($agents as $agent)
                        <div class="agent-li agent1">
                            <div class="agent-logo">
                                <img class="ag-logo" src={{$agent['logo_src']}} alt="">
                            </div>
                            <div class="agent-details">

                                <h3>{{$agent['name']}} </h3>
                                <p>{{$agent['description']}}</p>
                                <div class="loc-rating">
                                    <div>
                                        <img src="images/main/agent/loc.png" alt="">
                                        <span class="loc-name">{{$agent['location']}} </span>
                                    </div>
                                    <div class="star">
                                        <img class="star-pic" src="images/main/agent/star.png" alt="">
                                    </div>
                                </div>


                            </div>
                            <img class="rectangle" src="images/main/agent/Rectangle.png" alt="">
                            <div class="price-details">
                                <div>
                                    <h3 class="price-number">{{$agent['price']}}</h3>
                                    <p>פרמיה חודשית</p>
                                </div>

                                <div class="btn-buy">
                                    <img src="images/main/agent/Shopping-Cart.png" alt="Shopping-Cart">
                                    <span>לרכישה</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div>
                        <ul class="page-numbers">
                            {{ $agents->links() }}
                        </ul>

                    </div>
                </div>
            </section>
            @include('layouts.main.sidebar')

        </div>
    </div>
</main>