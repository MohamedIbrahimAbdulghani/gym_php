<?php

session_start();

if(empty($_SESSION["user"])):
    header("Location: login.php");
endif;


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>home</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body style="background-color: #303030;">
        <header class="header">
            <div class="container">
                <div class="row">

                    <div class="logo">
                        <img src="image/yellow.png" width="100"></img>
                    </div>
                    <div class="nav row">
                    
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="container">
                <div class="selectCategory">
                    <select>
                        <option hidden>training type</option>
                        <option>push-up</option>
                        <option>squats</option>
                        <option>squats with dumbbell</option>
                    </select>
                </div>
                <div class="title">push-up</div>
                <div class="row">
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/IODxDxX7oi4"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.YouTube.com/embed/nPG9UHg1bH8"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.YouTube.com/embed/TzPB7pq_gRc"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/nPG9UHg1bH8"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.YouTube.com/embed/tWjBnQX3if0"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
                <div class="title">squate</div>
                <div class="row">
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/cGxJ79TbsAI"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/gsNoPYwWXeM"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/gcNh17Ckjgg"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/nxi3dBw_JBQ"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/xqvCmoLULNY"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
                <div class="title">squats with dumbbells</div>
                <div class="row">
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/v_c67Omje48"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/cGxJ79TbsAI"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/jVabPEjDCHY"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/RJSltCUcCqE"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="videoItem">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/Jb43y8Wugdw"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="selectCategory light">
                        <form action="https://www.youtube.com/channel/UC7t6QJ4u8qF8pI-vibX-BUQ" method="get" target="_blank">
                            <button type="submit" style="width: 150px;padding: 5px;color: #303030;background-color: darkgoldenrod;font-weight: 600;text-transform: uppercase;">show more</button>
                           
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <section>
            <div class="container">
                <div class="selectCategory">
                    <select>
                        <option hidden>healthy food</option>
                        <option>breakFast</option>
                        <option>lunch</option>
                        <option>dinner</option>
                    </select>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-4" style="color: aliceblue;font-size: large;">breakFast</div><br><br><br>
                        <div class="row align-content-center countries">
                            <div class="col-md-6">
                                <figure>
                             <img src="image/WhatsApp Image 2023-04-15 at 3.29.30 AM.jpeg" alt="" style="border-radius: 50%;
                             width: 80px;
                             height: 80px;">
                             <figcaption style="color: aliceblue;font-size: x-small;">200 سعر حراري
                                1 بيضه مسلوقه 20 جرام بقدونس 2 ثمره خيار 2 ثمره طماطم اجمالي السعيرات الحراريه 250 سعر حراري</figcaption>
                           </figure>
                            </div>

                            <div class="col-md-6">
                                <figure><img src="image/WhatsApp Image 2023-04-15 at 3.29.31 AM.jpeg" alt=""  style="border-radius: 50%; width: 80px;height: 80px;">
                                  <figcaption style="color: aliceblue;font-size: small;">200 سعر حراري
                                    15 جرام زبادي 30 جرام شوفان 20 جرام فراوله  10 جرام بذور شيا 15 جرام موز اجمالي السعيرات الحراريه 200 سعر حراري</figcaption>  
                                </figure>
                             
                            </div>
                            <div class="col-md-6">
                                <figure><img src="image/WhatsApp Image 2023-04-15 at 3.29.32 AM.jpeg" alt=""  style="border-radius: 50%; width: 80px;height: 80px;">
                                    <figcaption style="color: aliceblue;font-size: small;">200 سعر حراري
                                        2 شريحه بسكوت شوفان 15 جرام افوكادو 20 جرام بطاطس مهروسه 1 ثمره طماطم اجمالي السعيرات الحراريه 157 سعر حراري</figcaption>  
                                  </figure>
                            </div>
                        </div>
                       
                  
                        <div class="col-4"style="color: aliceblue;font-size: large;" >lunch</div><br><br><br>
                        

                        <div class="col-md-6">
                            <figure>
                         <img src="image//WhatsApp Image 2023-04-15 at 3.29.33 AM.jpeg" alt="" style="border-radius: 50%;
                         width: 80px;
                         height: 80px;">
                         <figcaption style="color: aliceblue;font-size: x-small;">فراخ مشوية وفاصوليا200 سعر حراراي
                            100 جرام فراخ مشويه 20 جرام بطاطس مسلوقه 40 جرام فاصوليا مشويه 15 جرام جزر مشوي اجمالي السعيرات الحراريه 350 سعر حراراي</figcaption>
                       </figure>
                        </div>

                        <div class="col-md-6">
                            <figure><img src="image/WhatsApp Image 2023-04-15 at 3.29.34 AM.jpeg" alt=""  style="border-radius: 50%; width: 80px;height: 80px;">
                              <figcaption style="color: aliceblue;font-size: small;">200 سعر حراراي
                                50 جرام فراخ مشويه 50 جرام بروكلي 20 فاصوليا مسلوقه 25 جرام طماطم 25 جرام مشروم اجمالي السعيرات الحراريه 500 سعر حراري</figcaption>  
                            </figure>
                         
                        </div>
                        <div class="col-md-6">
                            <figure><img src="image/111.jpeg" alt=""  style="border-radius: 50%; width: 80px;height: 80px;">
                                <figcaption style="color: aliceblue;font-size: small;">200 سعر حراراي
                                    100 جرام سمك سالمون 30 جرام بطاطس مسلوقه 30 جرام كرفس مشوي تحتوي علي ٢٣٠ سعر حراري
                   </figcaption>
                                </div>
                        
                   
                        <div class="col-4" style="color: aliceblue;font-size: large;">dinner</div><br><br><br>

                        
                        <div class="col-6">
                            <figure>
                         <img src="image/222.jpeg" alt="" style="border-radius: 50%;
                         width: 80px;
                         height: 80px;">
                         <figcaption style="color: aliceblue;font-size: x-small;">200 سعر حراري</span>
                            20 جرام بيض اومليت 30 جرام طماطم 15 افوجادو مهروس 2 شريحه توست اسمر تحتوي علي 150 سعر حراري</figcaption>
                       </figure>
                        </div>

                        <div class="col-6">
                            <figure><img src="image/333.jpeg" alt=""  style="border-radius: 50%; width: 80px;height: 80px;">
                              <figcaption style="color: aliceblue;font-size: small;"> 200 سعر حراراي
                                30 جرام فراوله 40 جرام ذره مسلوق 40 جرام برتقال  تحتوي علي  170 سعر حراري</figcaption>  
                            </figure>
                         
                        </div>
                        <div class="col-6">
                            <figure><img src="image/555.jpeg" alt=""  style="border-radius: 50%; width: 80px;height: 80px;">
                                <figcaption style="color: aliceblue;font-size: small;">200 سعر حراراي
                                    1 ثمره موز 30 جرام توت 30 جرام زبادي قليل الدسم 30 جرام مكسرات نيه 20 بذور شيا وتحتوي علي 280 سعر حراري  </figcaption>
                   </figcaption>
                                </div>
                       
                </div>
                    <div class="selectCategory light">
                        <form action="https://www.breadfast.com/ar/blog/%D8%A3%D9%83%D9%84-%D8%B5%D8%AD%D9%8A-%D8%B4%D9%87%D9%8A-%D9%88%D9%84%D8%B0%D9%8A%D8%B0-%D8%A8%D8%B7%D8%B1%D9%8A%D9%82%D8%A9-%D8%B3%D9%87%D9%84%D8%A9-%D9%88%D9%85%D9%83%D9%88%D9%86%D8%A7%D8%AA-%D8%BA/" method="get" target="_blank">
                            <button type="submit" style="width: 150px;padding: 5px;color: #303030;background-color: darkgoldenrod;font-weight: 600;text-transform: uppercase;">show more</button>
                           
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
