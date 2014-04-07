<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="myCSS.css"> {* link to css *}
        <title>{block name=title}METRICS FINDER{/block}</title> {*tab text*}
        {*
        <link rel="stylesheet" type="text/css" href="{$WEB_CONTENTS}page_styles.css" />
        <link rel="icon" type="image/png" href="{$WEB_CONTENTS}uw_west.png" />*}
    </head>
    <body>
        <div id="footpadding">
            <div class="header">
                <h2>MetricsFinder</h2>
                <span>Number of pairings so far: </span>
                {*<span><br/>python output: {$pythonOutput[0]}</span>*}
            </div>
        
        <!-- BEGIN TEMPLATE BLOCK -->        
        {block name=body}{/block}
        <!-- END TEMPLATE BLOCK -->
        </div>
        <div class="footer">
            {*<p>Questions about the Metaland project? Read more about this research at the <a href="{$SISTER_URL}">{$SISTER_SITE}</a>, or contact <a href="{$ADMIN_CONTACT}">{$ADMIN}</a>.</p>*}
            <p>Copyright © 2012, {$DEVELOPPER|default:""}, Laboratoire de Jeffrey Cardille, Université de Montréal.</p>
        </div>
    </body>
    
</html>