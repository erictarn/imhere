<!DOCTYPE html>
<html>
<head>
    <title>#ImHere for Immigrant Women</title>

    <script src="javascripts/modernizr.js" type="text/javascript"></script>

    <link href="css/reset.css" media="all" rel="stylesheet" type="text/css" />
    <link href="css/structure.css" media="all" rel="stylesheet" type="text/css" />
    <link href="css/application.css" media="all" rel="stylesheet" type="text/css" />
    <link href="css/bar.css" media="all" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script src="javascripts/compatibility.js" type="text/javascript"></script>
    <script src="javascripts/bar.js" type="text/javascript"></script>
    <script src="javascripts/application.js" type="text/javascript"></script>
</head>
<body>
    <div id="btbar">
        <div class="inner">
            <h1 class="brand active"><a href="http://breakthrough.tv/" class="on">Breakthrough</a></h1>
            <div class="sub active">
                <h3>Get our emails!</h3>
                <p class="join"><label for="f-email">Email Address</label> <input type="text" name="email" id="f-email" /> <button type="submit">Go</button></p>
                <p>A global organization building a culture of human rights. <a href="./">Visit us</a></p>
                <p class="action"><a href="https://www.z2systems.com/np/clients/breakthrough/donation.jsp" target="_blank" class="btbar-button-a">Donate</a></p>
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
    
    <header>
        <img src="images/header_logo.png" alt="#ImHere For Immigrant Women" />
    </header>

    <script>
    $(function() {
    
        $( "#dialog-modal" ).dialog({
            height: 140,
            modal: true,
            autoOpen: false,
            width: 720,
            open: function() {
                $( '.ui-widget-overlay' ).click( function() {
                    $( "#dialog-modal" ).dialog('close');
                } );
            }
        });

        $("#fullscreen_link").click(function(e) {
            e.preventDefault();
            $( "#dialog-modal").dialog("open");
        })
    });
    </script>

    <div id="dialog-modal" style="display: none;">
        <iframe width="720" height="480" src="http://www.youtube.com/embed/jhwhP-ZFbPk" frameborder="0" allowfullscreen></iframe>
    </div>
    <section class="articles">
        <article>
            <p class="noheader big_link"><a href="#" id="fullscreen_link">WATCH THE FILM</a></p>
            <div class="social_media_icons">
                <a href="http://www.facebook.com/sharer.php?u=http://www.youtube.com/watch?v=jhwhP-ZFbPk" target="_blank"><img src="images/facebook.png" /></a>
                <a href="http://www.tumblr.com/share?v=3&u=http://www.youtube.com/watch?v=jhwhP-ZFbPk" target="_blank"><img src="images/tumblr.png" /></a>
                <a href="https://plus.google.com/share?url=http://www.youtube.com/watch?v=jhwhP-ZFbPk" target="_blank"><img src="images/google_plus.png"></a>
                <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DjhwhP-ZFbPk&media=http%3A%2F%2Fstatic.tumblr.com%2Fjepygxa%2FKE2m95yp1%2Fih_tagline_bt_logo.png" target="_blank"><img src="images/pinterest.png" /></a>
                <a href="https://twitter.com/share?text=<?php echo urlencode("Keep your daughter safe or your family together: what call would you make? Watch & share http://ow.ly/e4jGH @Breakthrough"); ?>&hashtags=ImHereIVote" target="_blank"><img src="images/twitter.png" /></a>
            </div>
            <div class="video"><iframe width="475" height="308" src="http://www.youtube.com/embed/jhwhP-ZFbPk" frameborder="0" allowfullscreen></iframe></div>
            <p class="noheader">
                Sonia has worked so hard for this: a healthy family and a normal life in an average American town. But on a night that should have been like any other, she is forced to make an impossible choice that could shatter her family’s dreams forever.<br /><br />
                Keep your daughter safe -- or keep your family together? What call would <em>you</em> make? 
            </p>
            <p class="noheader big_link"><a href="https://twitter.com/share?text=<?php echo urlencode("Keep your daughter safe or your family together: what call would you make? Watch & share"); ?>&hashtags=ImHereIVote&url=http://ow.ly/e4jGH&via=Breakthrough" target="_blank">TWEET THIS</a></p>
        </article>
        
        <article>
            <a class="share" name="share" href="http://www.facebook.com/sharer.php?u=http://ow.ly/e4jGH" target="_blank"><img src="images/icon_share.png" />Share</a>
            <a class="share" href="http://imherebreakthrough.tumblr.com/" target="_blank"><img src="images/icon_photos.png" />Photo</a>
            <a class="share" href="https://votolatino.turbovote.org/register/start" target="_blank"><img src="images/icon_vote.png" />Vote</a>
            <a class="share" href="http://breakthrough.tv/explore/issue/womens-human-rights/women_and_immigration/" target="_blank"><img src="images/icon_learn.png" />Learn</a>
        </article>
        
        <article class="social">
            
            <div class="container">
                <h1>Tumblr</h1>
                <table>
                    <?php
                        $content = file_get_contents("http://imherebreakthrough.tumblr.com/rss");
                        $x = new SimpleXmlElement($content);
                        
                        for ($i = 0; $i <= 17; $i++) {
                            if ($i % 3 == 0) { echo "<tr>"; }
                            $entry = $x->channel->item[$i];
                            preg_match_all('/src=("[^"]*")/i',$entry->description, $result); 
                            echo "<td><a href='$entry->link' target='_blank' title='$entry->title'><img " . $result[0][0] . " width='55' /></a></td>";
                            if ($i % 3 == 2) { echo "</tr>"; }
                        }
                    ?>
                </table>
            </div>
            
            <div class="container">
                <h1>Twitter</h1>
                <div class="blackcontainer">
                    <ul class="tweets">
                        <?php
                            date_default_timezone_set('America/New_York');
                            $url = 'http://search.twitter.com/search.atom?q=%20%23ImHereIVote';
                            $ch = curl_init($url);
                            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
                            $xml = curl_exec ($ch);
                            curl_close ($ch);

                            //If you want to see the response from Twitter, uncomment this next part out:
                            //echo "<p>Response:</p>";
                            //echo "<pre>".htmlspecialchars($xml)."</pre>";

                            $affected = 0;
                            $twelement = new SimpleXMLElement($xml);

                            for ($i = 0; $i <= 1; $i++) {
                                $entry = $twelement->entry[$i];
                                $text = trim($entry->title);
                                $author = trim($entry->author->name);
                                $time = strtotime($entry->published);
                                $id = $entry->id;
                                echo "<li>";
                                echo "<img src='" . $entry->link[1]["href"] . "' width='30' />";
                                echo "<span>";
                                echo "<h2><a href='" . $entry->link["href"] . "' target='_blank'>" . $author . "</a></h2>";
                                echo "<p>" . $text . "</p>";
                                echo "<p class='timestamp'>" . date('n/j/y g:i a',$time) . "</p>";
                                echo "</span>";
                                echo "</li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
            
            <div class="container short">
                <h1 class="short">Follow Us</h1>
                <div class="whitecontainer">
                    <a href="http://www.twitter.com/breakthrough" target="_blank"><img src="images/twitter_big.png"></a>
                    <a href="http://www.facebook.com/letsbreakthrough" target="_blank"><img src="images/facebook_big.png"></a>
                    <a href="http://breakthroughtv.tumblr.com/" target="_blank"><img src="images/tumblr_big.png"></a>
                </div>
            </div>
        </article>
        
        <article class="learn">
            <h1>Learn</h1>
            <p><strong>Imagine</strong> dropping your child off at school every day afraid that you won't be back at pickup time. <strong>Imagine</strong> staying with a violent partner because calling the cops could tear you away from your kids. <strong>Imagine</strong> arranging for a neighbor to take care of your children in case your disappear &mdash; which could happen any time.<br /><br />
                Tough to imagine? This is <strong>reality</strong> for millions of immigrant women in the United States.<br /><br />
                
                In June 2012, President Obama announced a <a href="http://www.whitehouse.gov/the-press-office/2012/06/15/remarks-president-immigration">historic plan</a> to help make this country safer for over one million young immigrants who have built their lives here. Now it's time to ask: <strong>what about their mothers?</strong> Cruel U.S. laws deny immigrant women the right to protect themselves and raise safe, healthy families. In the first six months of 2011 alone, the U.S. deported more than <a href="http://breakthrough.tv/women-immigration_facts/">46,000 parents of American-born children</a>. Other families – especially in states such as Arizona and Alabama — live in fear of these threats, rarely leaving home at all.<br /><br />
                
                Many women are also <a href="http://breakthrough.tv/women-immigration-stories/">forced to choose</a> between the threat of an abusive husband and the risk of being detained or deported if they call the police. <a href="http://breakthrough.tv/video/juana-villegas-a-pregnant-woman-detained/">Pregnant mothers</a> give birth in shackles with federal agents by their side. Women and <a href="http://breakthrough.tv/video/esmeralda-a-transgender-detainee-speaks-out/">LGBTQ people</a> suffer in immigrant detention centers, often without due process, under the constant danger of physical and sexual abuse.<br /><br />
                
                This is not the America we stand for. But together we can change it. With your help, #ImHere will make the human rights of immigrant women impossible to ignore. Join us and say "#ImHere to put the rights of immigrant women on the national agenda."<br /><br />
                
                <a href="#share">Say #ImHere now</a>: Watch and share the short film, "The Call," take a photo, register to vote, and learn more.</p>
        </article>
    </section>
    
    <footer>
        <div class="partners">
            <a href="http://acluga.org" target="_blank"><img src="images/logos/acluga.org.jpg" /></a>
            <a href="http://africanservices.org" target="_blank"><img src="images/logos/africanservices.org.jpg" /></a>
            <a href="http://awid.org" target="_blank"><img src="images/logos/awid.org.jpg" /></a>
            <a href="http://ellabakercenter.org" target="_blank"><img src="images/logos/ellabakercenter.org.jpg" /></a>
            <a href="http://immigrantjustice.org" target="_blank" style="display: none;"><img src="images/logos/immigrantjustice.org.jpg" /></a>
            <a href="http://immigrationequality.org" target="_blank" style="display: none;"><img src="images/logos/immigrationequality.org.jpg" /></a>
            <a href="http://latinainstitute.org" target="_blank" style="display: none;"><img src="images/logos/latinainstitute.org.jpg" /></a>
            <a href="http://mujeresunidas.net" target="_blank" style="display: none;"><img src="images/logos/mujeresunidas.net.jpg" /></a>
            <a href="http://ihollaback.org" target="_blank" style="display: none;"><img src="images/logos/ihollaback.org.jpg" /></a>
            <a href="http://nysylc.org" target="_blank" style="display: none;"><img src="images/logos/nysylc.org.jpg" /></a>
            <a href="http://onebillionrising.org" target="_blank" style="display: none;"><img src="images/logos/onebillionrising.org.jpg" /></a>
            <a href="http://rebeccaproject.org" target="_blank" style="display: none;"><img src="images/logos/rebeccaproject.org.jpg" /></a>
            <a href="http://sautiyetu.org" target="_blank" style="display: none;"><img src="images/logos/sautiyetu.org.jpg" /></a>
            <a href="http://ushrnetwork.org" target="_blank" style="display: none;"><img src="images/logos/ushrnetwork.org.jpg" /></a>
            <a href="http://thenyic.org" target="_blank" style="display: none;"><img src="images/logos/thenyic.org.jpg" /></a>
            <a href="http://womensrefugeecommission.org" target="_blank" style="display: none;"><img src="images/logos/womensrefugeecommission.org.jpg" /></a>
            <a href="http://thefbomb.org" target="_blank" style="display: none;"><img src="images/logos/thefbomb.org.jpg" /></a>
            <a href="http://acluaz.org" target="_blank" style="display: none;"><img src="images/logos/acluaz.org.jpg" /></a>
            <a href="http://defineamerican.com" target="_blank" style="display: none;"><img src="images/logos/defineamerican.com.jpg" /></a>
            <a href="http://momsrising.org" target="_blank" style="display: none;"><img src="images/logos/momsrising.org.jpg" /></a>
            <a href="http://reformimmigrationforamerica.org" target="_blank" style="display: none;"><img src="images/logos/reformimmigrationforamerica.org.jpg" /></a>
            <a href="http://rightsworkinggroup.org" target="_blank" style="display: none;"><img src="images/logos/rightsworkinggroup.org.jpg" /></a>
            <a href="http://unitewomen.org" target="_blank" style="display: none;"><img src="images/logos/unitewomen.org.jpg" /></a>
            <a href="http://webelongtogether.org" target="_blank" style="display: none;"><img src="images/logos/webelongtogether.org.jpg" /></a>
            <a href="http://ppnyc.org" target="_blank" style="display: none;"><img src="images/logos/ppnyc.org.jpg" /></a>
        </div>
        <strong>Our Partners</strong>
        <nav>
            <a href="http://breakthrough.tv" class="logo"><img src="images/footer_logo.png" alt="by Breakthrough.tv" /></a>
            <a href="http://breakthrough.tv/about-us/contact-us/">Contact</a>
            <a href="http://breakthrough.tv/privacy-policy/">Privacy Policy</a>
            <a href="http://breakthrough.tv/terms-of-use/">Terms of Use</a>
            <a href="http://breakthrough.tv/about-us/mission/">About Breakthrough</a>
        </nav>
    </footer>
    
    <script type="text/javascript">
        if( !Modernizr.bgsizecover ) {
            Compatibility.BGSize.create();
        }
        if( !Modernizr.rgba ) {
            Compatibility.RGBA.update( [
                { 'selector': 'article', 'hex': '000000', 'opacity': '75' },
                { 'selector': 'footer', 'hex': '000000', 'opacity': '75' }
            ] );
        }
    </script>
</body>
</html>