<!DOCTYPE html>
<html>
    <head>
        <title>NBA Playoff Teams Welcome</title>
        <meta  charset="utf-8" />
        <link rel="stylesheet" href="css/base_style.css" type="text/css" />
        <link rel="stylesheet" href="css/index_style.css" type="text/css" />
        <script type="text/javascript" src="js/jquery-latest.js"></script>
        <script type="text/javascript" src="js/jquery.tablesorter.js"></script> 
        <script type="text/javascript" src="js/jwplayer/jwplayer.js"></script>
        <script type="text/javascript"> jwplayer.key="98l+M93QyvmhWC3lvJh1bloOwBIASEs9DzjQow==";</script>
        <script>
            $(document).ready(function(){ 
                $("#myTable").tablesorter();
            });
        </script>

    </head>
    <body id="index">
        <?php include ("includes/navigation.php"); ?>
        <div id="main">
            <h1>NBA Playoff Teams Home</h1>
            <hr class="line">
            <p>
                Welcome!  I'm glad you visited this site devoted to the NBA playoff teams.  Here's a look back at the regular season of the teams that made the playoffs this year.  Below is a sortable chart of the team statistics.  To the left are navigation links to the rest of the site.  I hope you enjoy the tour!
            </p>
            <hr class="line">
            <table id="myTable" class="tablesorter"> 
                <caption>
                    The 2013-2014 Regular Season NBA playoff team stats.  Click a category to sort!:
                </caption>
                <thead>
                    <tr>
                        <th>Team name</th>
                        <th>Wins</th>
                        <th>Losses</th>
                        <th>Points Per Game</th>
                        <th>Points Allowed Per Game</th>
                        <th>Assists</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Portland Trailblazers</td>
                        <td>54</td>
                        <td>28</td>
                        <td>106.7</td>
                        <td>102.8</td>
                        <td>23.2</td>
                    </tr>
                    <tr>
                        <td>Houston Rockets</td>
                        <td>54</td>
                        <td>28</td>
                        <td>107.7</td>
                        <td>103.1</td>
                        <td>21.4</td>
                    </tr>
                    <tr>
                        <td>LA Clippers</td>
                        <td>57</td>
                        <td>25</td>
                        <td>107.9</td>
                        <td>101.0</td>
                        <td>24.6</td>
                    </tr>
                    <tr>
                        <td>Golden State Warriors</td>
                        <td>51</td>
                        <td>31</td>
                        <td>104.3</td>
                        <td>106.5</td>
                        <td>23.3</td>
                    </tr>
                    <tr>
                        <td>Dallas Mavericks</td>
                        <td>49</td>
                        <td>33</td>
                        <td>104.8</td>
                        <td>102.4</td>
                        <td>23.6</td>
                    </tr>
                    <tr>
                        <td>Washington Wizards</td>
                        <td>44</td>
                        <td>38</td>
                        <td>100.7</td>
                        <td>99.4</td>
                        <td>23.3</td>
                    </tr>
                    <tr>
                        <td>Miami Heat</td>
                        <td>54</td>
                        <td>28</td>
                        <td>102.2</td>
                        <td>97.4</td>
                        <td>22.5</td>
                    </tr>
                    <tr>
                        <td>Oklahoma City Thunder</td>
                        <td>59</td>
                        <td>23</td>
                        <td>106.2</td>
                        <td>99.8</td>
                        <td>21.9</td>
                    </tr>
                    <tr>
                        <td>Indiana Pacers</td>
                        <td>56</td>
                        <td>26</td>
                        <td>96.7</td>
                        <td>92.3</td>
                        <td>20.1</td>
                    </tr>
                    <tr>
                        <td>San Antonio Spurs</td>
                        <td>62</td>
                        <td>20</td>
                        <td>105.4</td>
                        <td>97.6</td>
                        <td>25.2</td>
                    </tr>
                    <tr>
                        <td>Brooklyn Nets</td>
                        <td>44</td>
                        <td>38</td>
                        <td>98.5</td>
                        <td>99.5</td>
                        <td>20.9</td>
                    </tr>
                    <tr>
                        <td>Toronto Raptors</td>
                        <td>48</td>
                        <td>34</td>
                        <td>101.3</td>
                        <td>98</td>
                        <td>21.2</td>
                    </tr>
                    <tr>
                        <td>Chicago Bulls</td>
                        <td>48</td>
                        <td>34</td>
                        <td>93.7</td>
                        <td>91.8</td>
                        <td>22.7</td>
                    </tr>
                    <tr>
                        <td>Charlotte Bobcats</td>
                        <td>43</td>
                        <td>39</td>
                        <td>96.9</td>
                        <td>97.1</td>
                        <td>21.7</td>
                    </tr>
                    <tr>
                        <td>Atlanta Hawks</td>
                        <td>38</td>
                        <td>44</td>
                        <td>101.0</td>
                        <td>101.5</td>
                        <td>24.9</td>
                    </tr>
                    <tr>
                        <td>Memphis Grizzlies</td>
                        <td>50</td>
                        <td>32</td>
                        <td>96.1</td>
                        <td>94.6</td>
                        <td>21.9</td>
                    </tr>
                </tbody>
            </table>
            <hr class="line">
            <div id="videoHere">Loading...</div>    
            <script type="text/javascript">
                jwplayer("videoHere").setup({
                    file: "http://youtu.be/isPm79xTzM4",
                    height: 600,
                    width: 800
                });
            </script>
            <hr class="line">
            <footer>
                Statistics gathered from http://espn.go.com/nba/
            </footer>
        </div>
    </body>
</html>
