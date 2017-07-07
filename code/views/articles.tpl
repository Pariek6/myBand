
<!--rewrite this to a smarty template and get the result_array from the model
//=> we do not want to see a fetch_assoc in a view file!
-->
<p>Articles</p>


    {foreach from=$article_list item=one_article}
            <div class="article">
                    <img src="{$one_article.image}" alt="rllogo">
                    <h1>{$one_article.title}  </h1><br>
                    <h2>{$one_article.underlinetext} </h2> <br><br><br>
                    <p>{$one_article.content} <br><br>Posted on: {$one_article.date_created}

            </div>
 {/foreach}
  <p id="pagenumber">Page {$page}</p>
<br><br><br><br>
  <table id="pagechanger">
    <tr><td id="left">
      {if $page gt 1}
      <a href="?page=articles&pnum={$page-1}">Previous</a>
      {/if}
      </td>
<td id="middle">
</div>
      <td id="right">
        {if $page lt $number_of_pages}
        <a href="?page=articles&pnum={$page+1}">Next</a>
        {/if}
      </td></tr>
  </table>
