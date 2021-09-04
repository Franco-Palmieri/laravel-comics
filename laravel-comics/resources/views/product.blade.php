@extends('components.base')
@section('title', 'Product Page')
@section('content')
    <div class="header-bar">
        <div class="container">
            <div class="row"></div>
        </div>
    </div>
    <main>
        <div class="container">
            <div class="row content-product">
                <div class="section-product">
                    <?php
                        $detail = $details[0];
                        echo "<h1 class='title-product-section'> {$detail['title']} </h1>"
                    ?>
                    <div class="check-bar">
                        <div class="price-check">
                            <div class="content-check">
                                <span>U.S Price:</span>
                                <?php
                                    $detail = $details[0];
                                    echo "<span>{$detail['price']}</span>"
                                ?>
                            </div>
                            <div class="content-check">
                                <span>AVAILABLE</span>
                            </div>
                        </div>
                        <div class="disponibilita">
                            Check Aviability
                        </div>
                    </div>
                    <p>The celebration of 1,000 issues of Action Comics continues
                        with a new, Deluxe Edition of the amazing comic thath won raves
                        when it hit comics shops in April! This hardcover includes all the stories from that
                        issue, plus the tale by writer Paul Levitz and Artist Neal Adams that appeared in the Action Comics:
                        80 Years of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee
                        for Superman's new look, scripts for the stories, the original art from
                        the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all-the Superman
                        stories Action Comics #1 and 2 from 1938!
                    </p>
                </div>
                <div class="pubblicita">ciao</div>
            </div>
        </div>
    </main>
@endsection