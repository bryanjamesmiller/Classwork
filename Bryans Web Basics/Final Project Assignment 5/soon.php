<!DOCTYPE html>
<html>
<head>
    <title>Next Season</title>
    <meta  charset="utf-8" />
    <link rel="stylesheet" href="css/base_style.css" type="text/css" />
    <link rel="stylesheet" href="css/index_style.css" type="text/css" />
    <script type="text/javascript" src="js/jwplayer/jwplayer.js"></script>
    <script type="text/javascript"> jwplayer.key="98l+M93QyvmhWC3lvJh1bloOwBIASEs9DzjQow==";</script>
</head>
<body>
<h1>Coming Next Season!</h1>
<span>
    <hr class="line">
<span id="videoHere">Loading...</span>
<script type="text/javascript">
    jwplayer("videoHere").setup({
        file: "http://youtu.be/LIvxdl8LDwk",
        height: 600,
        width: 800
    });
</script>
<hr class="line">
</span>

<span id="right_justify"><?php include ("includes/navigation.php"); ?></span>

</body>
</html>