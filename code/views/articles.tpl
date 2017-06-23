
<!--rewrite this to a smarty template and get the result_array from the model
//=> we do not want to see a fetch_assoc in a view file!
-->
<p>Articles</p>


    {foreach from=$article_list item=one_article}
            <div class="article">
                    <img src="{$one_article.image}" alt="rllogo">
                    <h1>{$one_article.title}  </h1><br>
                    <h2>{$one_article.underlinetext} </h2> <br><br><br>
                    <p>{$one_article.content} </p>

            </div>
    {/foreach}
