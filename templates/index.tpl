{extends file="_layout.tpl"}
{*{block name=title append}, served from the Cardille Research Laboratory at Mcgill University{/block}*}
{block name=body}

    <div class="wrapper">
               
        <br/>
        <form action="#" >
            
            <div style="display: inline-block;">
                <div><span>example/url/for/picture1.png&nbsp;</span></div>
                <label>
                    <div><span><img height="240" width="240" src="./content/x510y131s2.png" draggable="false"/></span></div>
                    <div><input type="checkbox" name="img1" value="on" />select picture 1</div>
                </label>
            </div>
            
            <div style="display: inline-block;">
                <div><span>example/url/for/picture2.png&nbsp;</span></div>
                <label>
                    <div><span><img height="240" width="240" src="./content/x643y166s2.png" draggable="false"/></span></div>
                    <div><input type="checkbox" name="img2" value="on" />select picture 2</div>
                </label>
            </div>
            
            <div style="display: inline-block;">
              <div><span>example/url/for/picture3.png&nbsp;</span></div>
              <label>
                  <div><img height="240" width="240" src="./content/x660y168s2.png" draggable="false"/></div>
                  <div><input type="checkbox" name="img3" value="3"/>select picture 3 </div>
              </label>
            </div>
            
            
            <div style="display: inline-block;">
                <tr><td><img width="220" src="./content/NLCD2001_final.png"/></td></tr>
            </div>

            <br/>
            <span>Select the best 2 out of 3 landscapes shown above.</span>
            <br/><br/>

            
            <div>
                <button type="button">Submit</button>
                <button type="button">Skip</button>
                <button type="button">Reset</button>
            </div>
        </form>
        
        <br/>
        
        
<!-- BEGIN LANDSCAPE TABLE -->
        <table class="inlineTable" style="background-color: #E9EBF0">
            <tr>
                <th>Color</th>
                <th>Metric Type</th>
                <th>Score</th>
            </tr>
{* {foreach from=$landscapeArr key=k item=i } *}
{foreach from=$landscapessArr key=k item=i }
            <tr>
                <td><div style="background-color: #{$hexArray.$k}; width:40px;height:20px;border:2px solid #000;" /></td>
                <td>{$i}&nbsp;</td>
                <td>50</td>
            </tr>
{foreachelse}
            <tr>
                <td colspan="3">There are no landscapes</td>
            </tr>
{/foreach}
        </table>
<!-- END TABLE -->




<!-- BEGIN METRICS TABLE -->   
        <table class="inlineTable" style="background-color: #E9EBF0">
            <tr>
                <th>Landscape metrics</th>
                <th>score</th>
            </tr>
{foreach from=$metricsArr item=i }
            <tr>
                <td>{$i}&nbsp;</td>
                <td>50</td>
            </tr>
{foreachelse}
            <tr>
                <td colspan="2">There are no Metrics</td>
            </tr>
{/foreach}
        </table>
<!-- END TABLE -->

        <div class="push"></div>
    </div> <!-- END WRAPPER -->
{/block}