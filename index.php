<!DOCTYPE html>
<html>
<head>
    <title>#ImHere for Immigrant Women</title>

    <script src="/javascripts/modernizr.js" type="text/javascript"></script>

    <link href="/css/reset.css" media="all" rel="stylesheet" type="text/css" />
    <link href="/css/structure.css" media="all" rel="stylesheet" type="text/css" />
    <link href="/css/application.css" media="all" rel="stylesheet" type="text/css" />
    <link href="/css/bar.css" media="all" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
    <script src="/javascripts/compatibility.js" type="text/javascript"></script>
    <script src="/javascripts/bar.js" type="text/javascript"></script>
</head>
<body>
    <div id="btbar">
        <div class="inner">
            <h1 class="brand active"><a href="http://breakthrough.tv/" class="on">Breakthrough</a></h1>
            <div class="sub active">
                <h3>Get our emails!</h3>
                <p class="join"><label for="f-email">Email Address</label> <input type="text" name="email" id="f-email" /> <button type="submit">Go</button></p>
                <p>A global organization building a culture of human rights. <a href="./">Visit us</a></p>
                <p class="action"><a href="https://www.z2systems.com/np/clients/breakthrough/donation.jsp" class="btbar-button-a">Donate</a></p>
            </div>
            <div class="logos">
                <div class="wrap">
                    <div class="items">
                        <div class="slider">
                            <div class="item a49">
                                <h3>America 2049</h3>
                                <p>You change America, before it changes you. <a target="_blank" href="http://america2049.com/">Play now</a></p>
                                <div class="social">
                                    <div class="addthis_toolbox addthis_default_style ">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="http://www.facebook.com/letsbreakthrough"></a>
                                        <a class="addthis_button_tweet" addthis:url="http://www.facebook.com/breakthrough/"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item iced">
                                <h3>Iced</h3>
                                <p>Immigrant teen vs. immigration system: can anyone win? <a target="_blank" href="http://www.icedgame.com/">Visit</a></p>
                                <div class="social">
                                    <div class="addthis_toolbox addthis_default_style ">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="http://www.facebook.com/letsbreakthrough"></a>
                                        <a class="addthis_button_tweet" addthis:url="http://www.facebook.com/breakthrough/"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item bb">
                                <h3>Bell Bajao</h3>
                                <p>Ring the bell.  Bring domestic violence to a halt. <a target="_blank" href="http://www.bellbajao.org/">Visit</a></p>
                                <div class="social">
                                    <div class="addthis_toolbox addthis_default_style ">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="http://www.facebook.com/letsbreakthrough"></a>
                                        <a class="addthis_button_tweet" addthis:url="http://www.facebook.com/breakthrough/"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item rf">
                                <h3>Restore Fairness</h3>
                                <p>Uphold fair immigration and racial justice. <a target="_blank" href="http://restorefairness.org/">Visit</a></p>
                                <div class="social">
                                    <div class="addthis_toolbox addthis_default_style ">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="http://www.facebook.com/letsbreakthrough"></a>
                                        <a class="addthis_button_tweet" addthis:url="http://www.facebook.com/breakthrough/"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item iam">
                                <h3>Iamthisland</h3>
                                <p>Your life in America: write it, shoot it, own it. <a target="_blank" href="http://iamthisland.org/">Visit</a></p>
                                <div class="social">
                                    <div class="addthis_toolbox addthis_default_style ">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="http://www.facebook.com/letsbreakthrough"></a>
                                        <a class="addthis_button_tweet" addthis:url="http://www.facebook.com/breakthrough/"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item hg">
                                <h3>Homeland Guantanamos</h3>
                                <p>Go undercover to find the truth about immigrant detention. <a target="_blank" href="http://www.homelandgitmo.com/">Visit</a></p>
                                <div class="social">
                                    <div class="addthis_toolbox addthis_default_style ">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="http://www.facebook.com/letsbreakthrough"></a>
                                        <a class="addthis_button_tweet" addthis:url="http://www.facebook.com/breakthrough/"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        $content = file_get_contents("http://imherebreakthrough.tumblr.com/rss");
        $x = new SimpleXmlElement($content);
        echo "<ul>";
        for ($i = 0; $i <= 8; $i++) {
            $entry = $x->channel->item[$i];
            preg_match_all('/<img[^>]+>/i',$entry->description, $result); 
            echo "<li><a href='$entry->link' title='$entry->title'>" . $result[0][0] . "</a></li>";
        }
        echo "</ul>";
    ?>
    
    <?php
        date_default_timezone_set('America/New_York');
        $url = 'http://search.twitter.com/search.atom?q=%23ImHere%20OR%20%23ImHereIVote';
        $ch = curl_init($url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $xml = curl_exec ($ch);
        curl_close ($ch);
        
        //If you want to see the response from Twitter, uncomment this next part out:
        //echo "<p>Response:</p>";
        //echo "<pre>".htmlspecialchars($xml)."</pre>";
        
        $affected = 0;
        $twelement = new SimpleXMLElement($xml);
        
        for ($i = 0; $i <= 2; $i++) {
            $entry = $twelement->entry[$i];
            $text = trim($entry->title);
            $author = trim($entry->author->name);
            $time = strtotime($entry->published);
            $id = $entry->id;
            echo "<a href=" . $entry->link["href"] . "><p>Tweet from ".$author.": <strong>".$text."</strong>  <em>Posted ".date('n/j/y g:i a',$time)."</em></p></a>";
        }
    ?>
    
    
    <header>
        <img src="/images/header_logo.png" alt="#ImHere For Immigrant Women" />
    </header>
    
    <section class="articles">
        <article></article>
        <article></article>
        <article></article>
        <article></article>
    </section>
    
    <footer>
        <div class="partners">
        </div>
        <strong>Our Partners</strong>
        <nav>
            <a href="http://breakthrough.tv" class="logo"><img src="/images/footer_logo.png" alt="by Breakthrough.tv" /></a>
            <a href="/">Contact</a>
            <a href="/">Privacy Policy</a>
            <a href="/">Terms of Use</a>
            <a href="/">About Breakthrough</a>
        </nav>
    </footer>
    
    <script type="text/javascript">
        if( !Modernizr.bgsizecover ) {
            Compatibility.BGSize.create();
        }
        if( !Modernizr.rgba ) {
//            Compatibility.RGBA.update();
        }
    </script>
</body>
</html>